<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Models\Offer;
use App\Models\License;
use App\Models\Package;
use App\Models\Setting;
use App\Models\Freezone;
use App\Models\VisaType;
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
        ->orderBy('ai_filter_display_order', 'ASC')
        ->with('options') // Assuming you have a relationship called 'options' to fetch the attribute options
        ->get();
    }

    public function home()
    {
        $freezones = Freezone::select('id', 'name', 'logo', 'about', 'slug', 'created_at')->orderBy('freezone_views_count', 'DESC')->skip(0)->take(3)->get();
        $licenses = License::where('status', 1)->distinct()->pluck('name');
        $offices = Package::where('status', 1)->distinct()->pluck('office');
        $visa_types = VisaType::where('status', 1)->distinct()->pluck('name');
        $offer = Offer::select('id', 'title', 'discount', 'image', 'freezone_id')->with('freezone')->take(3)->get();
        $blogs = Blog::select('id', 'title', 'short_description', 'image', 'slug', 'created_at')->orderBy('id', 'DESC')->skip(0)->take(3)->get();
        $groae_number = Setting::where('section_key', 'groae_number')->get();
        $attributes = $this->ai_filter_options();

        return view('frontend.home', compact('blogs', 'freezones', 'licenses', 'offices', 'visa_types', 'offer', 'groae_number', 'attributes'));
    }
    
    public function trending_freezone()
    {
        $freezones = Freezone::select('id', 'name', 'logo', 'about', 'slug', 'created_at', 'freezone_views_count')->orderBy('freezone_views_count', 'DESC')->get();
        return view('frontend.trending_freezone', compact('freezones'));
    }

    public function explore_freezone(Request $request, $id = null)
    {
        $selected = null;
        if ($id) {
            $data = Cache::get($id);
            if (!$data) {
                return redirect()->route('explore-freezone');
            }
            $decoded_data = json_decode($data);
            $selected = $decoded_data->uuid;
        }

        // Initialize package query
        $packages = PackageHeader::where('status', 1);

        // Process attribute parameters
        $attributeConditions = [];
        $selectedAttributes = [];

        foreach ($request->all() as $key => $value) {
            if (preg_match('/^attribute_(\d+)$/', $key, $matches)) {
                $attributeConditions[$matches[1]] = $value; // Extracting the attribute number
                $selectedAttributes[$matches[1]] = $value;
            }
        }

        // Filter packages based on attributes if provided
        if (!empty($attributeConditions)) {
            $packages = $packages->whereExists(function ($query) use ($attributeConditions) {
                $query->select(DB::raw(1))
                    ->from('package_lines')
                    ->whereColumn('package_lines.package_id', 'package_headers.id') // Use package_id as foreign key
                    ->where(function ($subQuery) use ($attributeConditions) {
                        foreach ($attributeConditions as $attributeNumber => $attributeValue) {
                            $subQuery->orWhere(function ($q) use ($attributeNumber, $attributeValue) {
                                $q->where('attribute_id', $attributeNumber)
                                ->where('attribute_option_id', $attributeValue);
                            });
                        }
                    });
            })->with('packageLines','freezone')->orderBy('id', 'DESC')->get();
        } else {
            $packages = collect(); // Empty collection if no attributes provided
        }

        // Retrieve attributes for filter options
        $attributes = $this->ai_filter_options();

        // Pass only packages to the view
        return view('frontend.explore_freezone', compact('packages', 'selected', 'attributes', 'selectedAttributes'));
    }


    public function package_detail(Request $request, $package_id)
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


    public function get_freezone(Request $request)
    {
        $freezone_id = $request->freezone_id;
        if ($freezone_id) {
            $freezone_data = Freezone::select('id', 'uuid', 'name', 'logo')->whereIn('id', $freezone_id);
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

    // public function compare_freezone_old(Request $request)
    // {

    //     $data = explode(',', $request->freezones);
    //     $count = count($data);

    //     if (!(1 < $count && $count < 5))
    //         return redirect()->route('explore-freezone');

    //     $decoded_data = collect();
    //     $freezone_compare_data = null;
    //     if ($request->has('freezone_compare_id')) {
    //         return view('frontend.under_development');

    //         // $freezone_compare_id = $request->freezone_compare_id;
    //         // $freezone_compare_data = Cache::get($freezone_compare_id);
    //         // if (!$freezone_compare_data)
    //         //     return redirect('/compare-freezone?freezones=' . $request->freezones);
    //         // $decoded_data = json_decode($freezone_compare_data);
    //     }

    //     // $freezones = Freezone::whereIn('uuid', $data)->select('id', 'uuid', 'logo', 'name', 'min_price')
    //     //     ->where('status', 1)
    //     //     ->with([
    //     //         'licenses' => function ($query) {
    //     //             $query->where('status', 1);
    //     //         },
    //     //         // 'packages' => function ($query) use ($freezone) {
    //     //         //     $query->where('status', 1)
    //     //         //         ->where('freezone_id', $freezone->id)
    //     //         //         ->select('freezone_id', DB::raw('MIN(price) as min_price'));
    //     //         // },
    //     //         'visa_types' => function ($query) {
    //     //             $query->where('status', 1);
    //     //             // $query->where('status', 1)->distinct()->pluck('name');
    //     //         },
    //     //     ])->get();

    //     // $licenses = $freezone->licenses()->where('status', 1)->distinct()->pluck('name');
    //     // $packages = $freezone->packages()->where('status', 1)->distinct()->pluck('name');
    //     // $visa_types = $freezone->visa_types()->where('status', 1)->distinct()->pluck('name');
    //     // $freezone->licenses = $licenses;
    //     // $freezone->packages = $packages;
    //     // $freezone->visa_types = $visa_types;
    //     // return response()->json($freezones);

    //     $freezones = [];
    //     $cheapest_freezone_price = PHP_FLOAT_MAX;

    //     foreach ($data as $freezone_uuid) {
    //         $freezone = Freezone::where('uuid', $freezone_uuid)->first();
    //         $freezone->min_price = $freezone->licenses()->where('status', 1)->min('price');
    //         $freezone_id = $freezone->id;
    //         $freezone = $freezone->load([
    //             'licenses' => function ($query) use ($freezone_id) {
    //                 $query->where('status', 1)->where('price', DB::raw("(SELECT MIN(price) FROM licenses WHERE freezone_id = '$freezone_id')"))->first();
    //             },
    //             'packages' => function ($query) use ($freezone_id) {
    //                 $query->where('status', 1)->where('price', DB::raw("(SELECT MIN(price) FROM packages WHERE freezone_id = '$freezone_id')"))->first();
    //             },
    //             'visa_types' => function ($query) {
    //                 $query->where('status', 1);
    //             },
    //             'visa_add_ons' => function ($query) {
    //                 $query->where('status', 1);
    //             },
    //             // 'locations' => function ($query) {
    //             //     $query->where('status', 1);
    //             // },
    //         ]);

    //         $freezone->visa_types_count = $freezone->visa_types->count();
    //         $freezone->visa_add_ons_count = $freezone->visa_add_ons->count();
    //         // $freezone->locations_name = implode(', ', $freezone->locations->pluck('name')->toArray());
    //         // dd(count($freezone->packages));
    //         $cheapest_freezone_price = $freezone->min_price < $cheapest_freezone_price ? $freezone->min_price : $cheapest_freezone_price;

    //         unset($freezone['visa_types']);
    //         unset($freezone['visa_add_ons']);
    //         unset($freezone['locations']);

    //         array_push($freezones, $freezone);
    //     }

    //     foreach ($freezones as $freezone) {
    //         $freezone->cheapest_freezone = $freezone->min_price == $cheapest_freezone_price;
    //     }
    //     return view('frontend.compare_freezone')->with(compact('freezones'));

    //     return response()->json($freezones);

    //     $cheapest_freezone_price = PHP_FLOAT_MAX;

    //     if ($freezone_compare_data) {
    //         // for existing compare id
    //         foreach ($freezones as $freezone) {
    //             $decoded_data->freezone->packages[0]->office = $decoded_data->freezone->offices[0];
    //             if ($freezone->id == $decoded_data->freezone->id) {
    //                 $freezone->min_license = $decoded_data->freezone->licenses[0];
    //                 $freezone->min_package = $decoded_data->freezone->packages[0];
    //                 $freezone->min_visa_type = $decoded_data->freezone->visa_types[0];
    //             } else {
    //                 $min_license = $freezone->licenses()->where('name', $decoded_data->freezone->licenses[0]->name)->first();
    //                 $min_package = $freezone->packages()->where('name', $decoded_data->freezone->packages[0]->name)->first();
    //                 $min_visa_type = $freezone->visa_types()->where('name', $decoded_data->freezone->visa_types[0]->name)->first();
    //                 $freezone->min_license = $min_license ? $min_license : ($freezone->licenses()->where('price', '<', $decoded_data->freezone->licenses[0]->price)->first() ?? $freezone->licenses()->where('price', '>=', $decoded_data->freezone->licenses[0]->price)->first());
    //                 $freezone->min_package = $min_package ? $min_package : ($freezone->packages()->where('price', '<', $decoded_data->freezone->packages[0]->price)->first() ?? $freezone->packages()->where('price', '>=', $decoded_data->freezone->packages[0]->price)->first());
    //                 $freezone->min_visa_type = $min_visa_type ? $min_visa_type : ($freezone->visa_types()->where('price', '<', $decoded_data->freezone->visa_types[0]->price)->first() ?? $freezone->visa_types()->where('price', '>=', $decoded_data->freezone->visa_types[0]->price)->first());
    //             }
    //             unset($freezone['licenses']);
    //             unset($freezone['packages']);
    //             unset($freezone['visa_types']);
    //             $freezone->min_calculated_price = $freezone->min_license->price + $freezone->min_package->price + $freezone->min_visa_type->price;
    //             $cheapest_freezone_price = $freezone->min_calculated_price < $cheapest_freezone_price ? $freezone->min_calculated_price : $cheapest_freezone_price;
    //         }
    //     } else {
    //         // for non existing compare id
    //         foreach ($freezones as $freezone) {
    //             $freezone->min_license = $freezone->licenses->first(fn ($license) => $license->price == $freezone->licenses->min('price'));
    //             $freezone->min_package = $freezone->packages->first(fn ($package) => $package->price == $freezone->packages->min('price'));
    //             $freezone->min_visa_type = $freezone->visa_types->first(fn ($visa_type) => $visa_type->price == $freezone->visa_types->min('price'));
    //             unset($freezone['licenses']);
    //             unset($freezone['packages']);
    //             unset($freezone['visa_types']);
    //             $freezone->min_calculated_price = $freezone->min_license->price + $freezone->min_package->price + $freezone->min_visa_type->price;
    //             $cheapest_freezone_price = $freezone->min_calculated_price < $cheapest_freezone_price ? $freezone->min_calculated_price : $cheapest_freezone_price;
    //         }
    //     }

    //     foreach ($freezones as $freezone) {
    //         $freezone->cheapest_freezone = $freezone->min_price == $cheapest_freezone_price;
    //     }

    //     return view('frontend.compare_freezone')->with(compact('freezones'));
    // }

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

            foreach ($data as $freezone_uuid) {
                $freezone = Freezone::where('uuid', $freezone_uuid)->where('status', 1)->whereHas('licenses', function ($query) use ($decoded_data) {
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

                    $freezone = Freezone::where('uuid', $freezone_uuid)->first();

                    $freezone_license = Freezone::where('uuid', $freezone_uuid)->where('status', 1)->whereHas('licenses', function ($query) use ($decoded_data) {
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
            foreach ($data as $freezone_uuid) {
                $freezone = Freezone::where('uuid', $freezone_uuid)->with('min_package')->first();
                $price = $freezone->min_package?->price ?? 0;
                $cheapest_freezone_price = $price < $cheapest_freezone_price ? $price : $cheapest_freezone_price;

                array_push($freezones, [
                    'uuid' => $freezone->uuid,
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
