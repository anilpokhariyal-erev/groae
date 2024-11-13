<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Models\Offer;
use App\Models\Package;
use App\Models\Setting;
use App\Models\Freezone;
use App\Models\StaticPage;
use App\Models\Attribute;
use App\Models\PackageHeader;
use App\Models\PackageLine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function ai_filter_options(){
        // Fetch attributes where is_ai_search_enabled is 1 and order by ai_filter_display_order
        return Attribute::where('is_ai_search_enabled', 1)
        ->where('status',1)
        ->orderBy('ai_filter_display_order', 'ASC')
        ->with('options') // Assuming you have a relationship called 'options' to fetch the attribute options
        ->get();
    }

    public function home()
    {
        $freezones = Freezone::where('status',1)
                            ->select('id', 'name', 'logo', 'about', 'slug', 'trending', 'created_at')
                            ->where('trending', 1)
                            ->skip(0)
                            ->take(4)
                            ->get();
        $offer = Offer::select('id', 'title', 'discount', 'image', 'freezone_id')->with('freezone')->take(3)->get();
        $blogs = Blog::select('id', 'title', 'short_description', 'image', 'slug', 'created_at')->orderBy('id', 'DESC')->skip(0)->take(3)->get();
        $groae_number = Setting::where('section_key', 'groae_number')->get();
        $attributes = $this->ai_filter_options();

        return view('frontend.home', compact('blogs', 'freezones',  'offer', 'groae_number', 'attributes'));
    }
    
    public function trending_freezone()
    {
        $freezones = Freezone::where('status',1)
                            ->select('id', 'name', 'logo', 'about', 'slug', 'created_at', 'freezone_views_count')
                            ->orderBy('freezone_views_count', 'DESC')
                            ->where('trending', 1)
                            ->get();
        return view('frontend.trending_freezone', compact('freezones'));
    }

    public function explore_freezone(Request $request, $id = null)
    {

        $selected = null;

        // Check if ID is provided and retrieve data from cache
        if ($id) {
            $data = Cache::get($id);
            if (!$data) {
                return redirect()->route('explore-freezone');
            }
            $selected = json_decode($data)->uuid;
        }

        // Initialize package query with active status and freezone status check
        $packagesQuery = PackageHeader::where('status', 1)
            ->whereHas('freezone', function ($query) {
                $query->where('status', 1); // Ensure freezone status is 1
            });

        $attributeValues = $request->input('attribute_value', []);

        // Redirect if POST request has no attribute values
        if ($request->isMethod('post') && empty($attributeValues)) {
            return redirect()->route('explore-freezone');
        }

        $selectedAttributes = $attributeValues ?? [];

        // Apply attribute filters if they exist
        if (!empty($attributeValues)) {
            foreach ($attributeValues as $attributeId => $optionId) {
                // Check if the optionId is 'any' and skip adding a condition if true
                if ($optionId === 'any') {
                    continue; // Skip this iteration if 'any'
                }
                $packagesQuery->whereHas('packageLines', function ($query) use ($optionId, $attributeId) {

                    $query->where('package_lines.attribute_id', $attributeId)
                        ->where('package_lines.attribute_option_id', $optionId);
                });
            }
        }

        // Load related data and order the packages
        $packages = $packagesQuery->with(['packageLines', 'freezone'])->orderByDesc('id')->get();

        // Retrieve attributes for filter options
        $attributes = $this->ai_filter_options();

        // Pass data to the view
        return view('frontend.explore_freezone', compact('packages', 'selected', 'attributes', 'selectedAttributes'));
    }
    

    public function freezone_detail(Request $request, $freezone_slug, $page_slug = null)
    {
        $freezone_detail = Freezone::with('freezone_pages')->whereHas('freezone_pages', function ($query) {
            return $query->where('status', 1);
        })->select('id', 'uuid', 'name', 'logo', 'about', 'slug', 'created_at')->where('status', 1)->where('slug', $freezone_slug)->with('offers')->first();
        if (!$freezone_detail) {
            return abort(404);
        }

        $page_slug = (!empty($page_slug)) ? $page_slug : 'about-freezone';
        $freezone_page = $freezone_detail->freezone_pages()->where('slug', $page_slug)->where('status', 1)->first();
        if (!$freezone_page) {
            return abort(404);
        }

        $freezone_detail->increment('freezone_views_count');

        return view('frontend.freezone_detail', compact('freezone_detail', 'freezone_page'));
    }

    public function freezone_package_detail(Request $request, $package_id)
    {
        $package_detail = PackageHeader::with([
            'freezone' => function ($query) {
                $query->with('activities', 'activity_groups');
            },
            'packageLines'=> function ($query) {
                $query->with('attributeOption', 'attribute');
            },
        ])->where('id', $package_id)->first();

        return view('frontend.packagedetail', compact('package_detail'));
    }




    public function get_freezone(Request $request)
    {
        $freezone_id = $request->freezone_id;
        if ($freezone_id) {
            $freezone_data = Freezone::select('id', 'uuid', 'name', 'logo')->whereIn('id', $freezone_id)->where('status', 1);
            $f_count = $freezone_data->count();
            $freezones = $freezone_data->get();
            $uuids = implode(',', $freezone_data->pluck('uuid')->toArray());
            if ($f_count > 0) {
                $freezones_data = array();
                foreach ($freezones as $f_vals) {
                    $freezones_data[] = [
                        'id' => $f_vals->id,
                        'name' => $f_vals->name,
                        'logo' => Storage::url($f_vals->logo)
                    ];
                }
                $response = response()->json(array('msg' => "success", 'data' => $freezones_data, 'uuids' => $uuids), 200);
            } else {
                $response = response()->json(array('msg' => "failed", 'data' => ''), 202);
            }
        } else {
            $response = response()->json(array('msg' => "failed", 'data' => ''), 202);
        }
        return $response;
    }

    public function compare_packages(Request $request)
    {
        $data = explode(',', $request->packages);
        $count = count($data);

        if (!(1 < $count && $count < 5))
            return redirect()->route('explore-freezone');
        

        // Fetch attributes dynamically from the database
        $attributes = Attribute::where('status', 1)->get();

        $packages = PackageHeader::whereIn('id', explode(',', $request->packages))
        ->with(['freezone']) // Assuming 'freezone' is a relationship
        ->with(['packageLines' => function($query) {
            $query->rightJoin('attributes', function($join) {
                $join->on('package_lines.attribute_id', '=', 'attributes.id');
            })->select('package_lines.*', 'attributes.label as attribute_label');
        }])
        ->get();

        return view('frontend.compare_packages')->with(compact('packages','attributes'));
    }

    public function compare_freezone(Request $request)
    {
        $data = explode(',', $request->freezones);
        $count = count($data);

        if (!(1 < $count && $count < 5))
            return redirect()->route('explore-freezone');
        $freezones = [];
        $cheapest_freezone_price = PHP_FLOAT_MAX;

        if ($request->has('freezone_compare_id')) {
            $decoded_data = collect();
            $freezone_compare_data = Cache::get($request->freezone_compare_id);

            if (!$freezone_compare_data)
                return redirect('/compare-freezone?freezones=' . $request->freezones);

            $decoded_data = json_decode($freezone_compare_data);

            //? 'visa_package', 'license_validity', 'license_name', 'package_price'

            foreach ($data as $freezone_id) {
                $freezone = Freezone::where('id', $freezone_id)->where('status', 1)->whereHas('licenses', function ($query) use ($decoded_data) {
                    $query->where('status', 1)->where('name', $decoded_data->license_name);
                })->first();

                if ($freezone) {
                    $package = Package::where('visa_package',  $decoded_data->visa_package)->where('license_validity',  $decoded_data->license_validity)->where('status', 1)->where('freezone_id', $freezone->id)->first();
                    if ($package) {
                        array_push($freezones, [
                            'uuid' => $freezone->uuid,
                            'logo' => $freezone->logo,
                            'name' => $freezone->name,
                            'license' => $decoded_data->license_name,
                            'package' => $package->name,
                            'office' => $package->office,
                            'price' => $package->price,
                            'visa_type' => $freezone->visa_types()->distinct()->pluck('name')->count(),
                            'visa_add_on' => $freezone->visa_add_ons()->distinct()->pluck('name')->count(),
                        ]);
                        $cheapest_freezone_price = $package->price < $cheapest_freezone_price ? $package->price : $cheapest_freezone_price;
                    } else {
                        $package = Package::where('price', '<=', $decoded_data->package_price)->where('status', 1)->where('freezone_id', $freezone->id)->orderBy('price', 'DESC')->first();
                        array_push($freezones, [
                            'uuid' => $freezone->uuid,
                            'logo' => $freezone->logo,
                            'name' => $freezone->name,
                            'license' => $decoded_data->license_name,
                            'package' => $package?->name,
                            'office' => $package?->office,
                            'price' => $package?->price,
                            'visa_type' => $freezone->visa_types()->distinct()->pluck('name')->count(),
                            'visa_add_on' => $freezone->visa_add_ons()->distinct()->pluck('name')->count(),
                        ]);
                        $cheapest_freezone_price = ($package?->price ?? 0) < $cheapest_freezone_price ? ($package?->price ?? 0) : $cheapest_freezone_price;
                    }
                } else {

                    $freezone = Freezone::where('id', $freezone_id)->first();

                    $freezone_license = Freezone::where('id', $freezone_id)->where('status', 1)->whereHas('licenses', function ($query) use ($decoded_data) {
                        $query->where('status', 1)->where('price', '<=', $decoded_data->license_price)->orderBy('price', 'DESC');
                    })->with('min_package')->first();

                    array_push($freezones, [
                        'uuid' => $freezone->uuid,
                        'logo' => $freezone->logo,
                        'name' => $freezone->name,
                        'license' => $freezone_license?->license?->name,
                        'package' => $freezone?->min_package?->name,
                        'office' => $freezone?->min_package?->office,
                        'price' => $freezone?->min_package?->price,
                        'visa_type' => $freezone ? $freezone->visa_types()->distinct()->pluck('name')->count() : 0,
                        'visa_add_on' => $freezone ? $freezone->visa_add_ons()->distinct()->pluck('name')->count() : 0,
                    ]);
                    $cheapest_freezone_price = ($freezone?->min_package?->price ?? 0) < $cheapest_freezone_price ? ($freezone?->min_package?->price ?? 0) : $cheapest_freezone_price;
                }
            }

            foreach ($freezones as $key => $freezone) {
                $freezones[$key]['cheapest_freezone'] = $freezone['price'] == $cheapest_freezone_price;
            }
        } else {
            foreach ($data as $freezone_id) {
                $freezone = Freezone::where('id', $freezone_id)->with('min_package')->first();
                $price = $freezone->min_package?->price ?? 0;
                $cheapest_freezone_price = $price < $cheapest_freezone_price ? $price : $cheapest_freezone_price;

                array_push($freezones, [
                    'uuid' => $freezone->id,
                    'logo' => $freezone->logo,
                    'name' => $freezone->name,
                    'license' => $freezone->licenses()->where('status', 1)->where('price', DB::raw("(SELECT MIN(price) FROM licenses WHERE freezone_id = '$freezone->id')"))->first()?->name,
                    'package' => $freezone->min_package?->name,
                    'office' => $freezone->min_package?->office,
                    'price' => $price,
                    'visa_type' => $freezone->visa_types()->distinct()->pluck('name')->count(),
                    'visa_add_on' => $freezone->visa_add_ons()->distinct()->pluck('name')->count(),
                ]);
            }

            foreach ($freezones as $key => $freezone) {
                $freezones[$key]['cheapest_freezone'] = $freezone['price'] == $cheapest_freezone_price;
            }
        }

        return view('frontend.compare_freezone')->with(compact('freezones'));
    }

    public function page_content(string $slug)
    {
        $page_data = StaticPage::select('*')->where('slug', $slug)->first();

        if (!$page_data) {
            return abort(404);
        }
        return view('frontend.page', compact('page_data'));
    }
}
