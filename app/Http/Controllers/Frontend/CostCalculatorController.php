<?php

namespace App\Http\Controllers\Frontend;

use App\Models\License;
use App\Models\Package;
use App\Models\Attribute;
use App\Models\AttributeOption;
use App\Models\PackageHeader;
use App\Models\PackageLine;
use App\Models\Activity;
use App\Models\Freezone;
use App\Models\ContactUs;
use Illuminate\Support\Str;
use App\Models\VisaActivity;
use Illuminate\Http\Request;
use App\Assets\ResponseMessage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\CostCalculatorSummaryRequest;
use App\Models\FreezoneBooking;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class CostCalculatorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $package_id = null;

        if ($request->has('package_id')) {
            try {
                $package_id = Crypt::decrypt($request->get('package_id'));
            } catch (DecryptException $e) {
                // Handle decryption failure, e.g. log the error or show a message
                return redirect()->back()->withErrors('Invalid package ID.');
            }
        }
        $selected_freezone = $request->get('freezone');
        $package = null;
        if($package_id){
            $package = PackageHeader::with([
                'packageLines.attribute',
                'packageLines.attributeOption'
            ])->findOrFail($package_id);
            // Get the distinct attributes from the package lines
            $attributes = $package->packageLines->map(function ($packageLine) {
                return $packageLine->attribute;
            })->unique('id'); // Ensure attributes are unique
            $selected_freezone = $package->freezone->uuid;
        }else{
            $attributes = Attribute::where([['status', 1], ['show_in_calculator', 1]])->with('options')->get();
        }

        $freezones = Freezone::select('id', 'uuid', 'name')->where('status', 1)->get();
        $freezone_data = [];
        $max_visa_package = 0;
        if ($selected_freezone) {
            $max_visa_package = PackageHeader::where('status', 1)
                ->whereHas('freezone', function ($query) use ($selected_freezone) {
                    $query->where('uuid', $selected_freezone);
                })->max('visa_package');

            $freezone_data = Freezone::where('uuid', $selected_freezone)->with(['licenses', 'locations', 'activity_groups'])->first();

        }
        

        return view('frontend.cost_calculator.calculate_licensecost',  compact('package', 'selected_freezone', 'freezones', 'freezone_data', 'attributes', 'max_visa_package'));
    }

    /**
     * Store a newly created resource in storage. 
     */
    public function store(CostCalculatorSummaryRequest $request)
    {
        if (!Auth::guard('customer')->check()) {
            Session::put('form_input', $request->input());
            return redirect()->route('customer.login')->with('info', ResponseMessage::LOGIN_FIRST_COST_CALCULATOR);
        }
        
        $freezone = Freezone::where('uuid', $request->freezone)->firstOrFail();
        $query = PackageHeader::where('freezone_id', $freezone->id)->with(['packageLines', 'freezone']);

        if ($request->has('package_id')) {
            $package_id = Crypt::decrypt($request->get('package_id'));
            $query->where('id', $package_id);
        }
        // Process selected attributes (attribute_1, attribute_2, ...)
        $attributes = [];
        foreach ($request->all() as $key => $value) {
            if (strpos($key, 'attribute_') === 0) {
                $attributeId = str_replace('attribute_', '', $key);
                $attributes[$attributeId] = $value;
                $query->whereHas('packageLines', function ($q) use ($attributeId, $value) {
                    $q->where('attribute_id', $attributeId)
                    ->where('attribute_option_id', $value);
                });
            }
        }

        // Process selected activities
        if ($request->filled('activities_selection')) {
            // Extract activity IDs from the `activities_selection` field
            $pattern = '/\|(.*?)\|/';
            preg_match_all($pattern, $request->activities_selection, $matches);
            $activityIds = $matches[1];

            $query->whereHas('freezone.activities', function ($q) use ($activityIds) {
                $q->whereIn('id', $activityIds);
            });
        }
    
        // Fetch the best matching package based on the selected attributes and activities
        $package_detail = $query->orderBy('price', 'asc')->first();
        if (!$package_detail) {
            return redirect()->back()->withErrors(['freezone' => 'No package found matching your request.'])->withInput();
        }

        $visaPackageAttribute = Attribute::where('name', 'visa_package')->first();
        $license = License::where('id', $request->license_id)->first();

        // Visa processing
        $packages_array = [];
        $total = 0;

        foreach ($request->get('visa_type', []) as $key => $visa_type) {
            $visa_type_data = $freezone->visa_types()->where('id', $request->visa_type[$key])->first();
            $visa_add_on_data = $freezone->visa_add_ons()->where('id', $request->visa_add_on[$key])->first();
            $location_data = $freezone->locations()->where('id', $request->location[$key])->first();
    
            if ($visa_type_data && $visa_add_on_data && $location_data) {
                $visa_package_name = $visa_type_data->name . ', ' . $visa_add_on_data->name . ', ' . $location_data->name;
                $visa_package_price = floatval($visa_type_data->price) + floatval($visa_add_on_data->price) + floatval($location_data->price);
    
                array_push($packages_array, ['name' => $visa_package_name, 'price' => $visa_package_price]);
                $total += $visa_package_price;
            }
        }

        // for activities
        $pattern = '/\|(.*?)\|/';
        preg_match_all($pattern, $request->activities_selection, $matches);
        $activityIds = $matches[1];

        $activities = Activity::whereIn('id', $activityIds)->select('id', 'name', 'activity_group_id')->where('status', 1)->with('activity_group')->get();

        // Process selected activities for the summary
        $activities = Activity::whereIn('id', $activityIds)
        ->select('id', 'name', 'activity_group_id','price')
        ->where('status', 1)
        ->with('activity_group')
        ->get();

        // Generate UUID for the session
        $id = Str::uuid();


        // Pass the necessary values to the view
        return view('frontend.cost_calculator.cost_summary')->with(compact('freezone', 'activities', 'total', 'id', 'packages_array', 'package_detail'));
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    function cost_summary()
    {
        return view('frontend.cost_calculator.cost_summary');
    }

    function ai_compare($id)
    {
        $freezone_compare_data = Cache::get($id);

        if (!$freezone_compare_data)
            return redirect()->route('calculate-licensecosts.index')->with('error', ResponseMessage::SESSION_LINK_EXPIRED);

        $decoded_data = json_decode($freezone_compare_data);

        $freezone = Freezone::where('uuid', $decoded_data->uuid)->where('status', 1)->first();
        if (!$freezone) {
            return redirect()->route('calculate-licensecosts.index')->with('error', ResponseMessage::SESSION_LINK_EXPIRED);
        }

        $package = Package::where('status', 1)
            ->where('visa_package', $decoded_data->visa_package)
            ->where('license_validity', $decoded_data->license_validity)
            ->where('freezone_id', '<>', $freezone->id)
            ->where('price', '<=', $decoded_data->package_price)
            ->orderBy('price', 'DESC')
            ->with('freezone.licenses')
            ->first();

        if ($package) {
            $license = $package->freezone->licenses->first(function ($license) use ($decoded_data) {
                return $license->name == $decoded_data->license_name;
            });

            if (!$license) {
                $license = License::where('status', 1)->where('price', '<=', $decoded_data->license_price)->orderBy('price', 'DESC')->first();

                if (!$license) {
                    $license = License::where('status', 1)->where('price', '>', $decoded_data->license_price)->orderBy('price', 'ASC')->first();
                }
            }

            $package_price = $package->price;
            $license_price = $license->price;
            $visa_package = $decoded_data->visa_package;
            $license_validity = $decoded_data->license_validity;
            $license_name = $license->name;
            $uuid = $package->freezone->uuid;

            $cacheId = Cache::put($id, json_encode(compact('visa_package', 'license_validity', 'license_name', 'package_price', 'license_price', 'uuid')), 36000);
            return redirect('/compare-freezone?freezones=' . implode(",", [$decoded_data->uuid, $package->freezone->uuid]) . '&freezone_compare_id=' . $cacheId);
        } else {

            $package = Package::where('status', 1)
                ->where('visa_package', $decoded_data->visa_package)
                ->where('license_validity', $decoded_data->license_validity)
                ->where('freezone_id', '<>', $freezone->id)
                ->where('price', '>', $decoded_data->package_price)
                ->orderBy('price', 'ASC')
                ->with('freezone.licenses')
                ->first();

            if (!$package)
                return redirect()->route('calculate-licensecosts.index')->with('error', ResponseMessage::SESSION_LINK_EXPIRED);

            $license = $package->freezone->licenses->first(function ($license) use ($decoded_data) {
                return $license->name == $decoded_data->license_name;
            });

            if (!$license) {
                $license = License::where('status', 1)->where('price', '<=', $decoded_data->license_price)->orderBy('price', 'DESC')->first();

                if (!$license) {
                    $license = License::where('status', 1)->where('price', '>', $decoded_data->license_price)->orderBy('price', 'ASC')->first();
                }
            }

            $package_price = $package->price;
            $license_price = $license->price;
            $visa_package = $decoded_data->visa_package;
            $license_validity = $decoded_data->license_validity;
            $license_name = $license->name;
            $uuid = $package->freezone->uuid;

            $cacheId = Cache::put($id, json_encode(compact('visa_package', 'license_validity', 'license_name', 'package_price', 'license_price', 'uuid')), 36000);
            return redirect('/compare-freezone?freezones=' . implode(",", [$decoded_data->uuid, $package->freezone->uuid]) . '&freezone_compare_id=' . $cacheId);
        }
    }

   
    function settle_payment($id)
    {
        $customer = auth('customer')->user();

        $data = Cache::get($id);

        if (!$data)
            return redirect()->route('calculate-licensecosts.index')->with('info', ResponseMessage::RECALCULATE);
        $decoded_data = json_decode($data);
        $request_data = json_decode($decoded_data->request_data);

        $freezone = Freezone::where('uuid', $request_data->freezone)->first();
        unset($request_data->activity_group);
        unset($request_data->activities);
        $request_data->total = $decoded_data->total;
        $request_data->customer_id = $customer->id;
        $request_data->freezone_id = $freezone->id;
        $request_data->license_id = $freezone->id;
        $request_data->activity_group = implode(', ', array_map(function ($item) {
            return explode('|', $item)[2];
        }, explode('___', $request_data->activity_group_selection)));
        $request_data->activities = implode(', ', array_map(function ($item) {
            return explode('|', $item)[2];
        }, explode('___', $request_data->activities_selection)));

        $request_data = json_decode(json_encode($request_data), true);
        $freezone_booking = FreezoneBooking::create($request_data);

        $freezone_booking_package = [];



        if (array_key_exists('visa_type', $request_data)) {
            foreach ($request_data['visa_type'] as $key => $value) {
                $request_data['visa_type'][$key];

                $visa_type_data = $freezone->visa_types()->where('id', $request_data['visa_type'][$key])->first();
                $visa_add_on_data = $freezone->visa_add_ons()->where('id', $request_data['visa_add_on'][$key])->first();
                $location_data = $freezone->locations()->where('id', $request_data['location'][$key])->first();

                $visa_package_name = $visa_type_data['name'] . ', ' . $visa_add_on_data['name'] . ', ' . $location_data['name'];
                $visa_package_price = floatval($visa_type_data['price']) + floatval($visa_add_on_data['price']) + floatval($location_data['price']);

                array_push($freezone_booking_package, ['name' => $visa_package_name, 'price' => $visa_package_price, 'visa_type_id' => $visa_type_data['id'], 'visa_add_on_id' => $visa_add_on_data['id'], 'location_id' => $location_data['id'], 'freezone_booking_id' => $freezone_booking->id, 'created_at' => now(), 'updated_at' => now()]);
            }
        }

        $freezone_booking->packages()->insert($freezone_booking_package);

        $transaction = $freezone_booking->transaction()->create([
            'transaction_id' => 'TID' . strtoupper(Str::random(10)),
            'amount' => $decoded_data->total,
            'customer_id' => $customer->id,
            'payment_status' => 'successful',
            'message' => $freezone->name . ' Freezone Purchased'
        ]);

        Cache::delete($id);

        return view('frontend.payment.payment_confirmation')->with(compact('transaction'));
    }
}
