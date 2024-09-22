<?php

namespace App\Http\Controllers\Frontend;

use App\Models\License;
use App\Models\Package;
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

class CostCalculatorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $freezones = Freezone::select('id', 'uuid', 'name')->where('status', 1)->get();
        $freezone_data = [];
        if ($request->freezone) {
            $packages = Package::where('status', 1)
                ->whereHas('freezone', function ($query) use ($request) {
                    $query->where('uuid', $request->freezone);
                })->distinct()->pluck('office');

            $license_validity = Package::where('status', 1)
                ->whereHas('freezone', function ($query) use ($request) {
                    $query->where('uuid', $request->freezone);
                })->distinct()->orderBy('license_validity', 'ASC')->pluck('license_validity');

            $freezone_data = Freezone::where('uuid', $request->freezone)->with(['licenses', 'visa_types', 'visa_add_ons', 'locations', 'activity_groups'])->first();

            $freezone_data->offices = $packages;
            $freezone_data->license_validity = $license_validity;
        }
        return view('frontend.cost_calculator.calculate_licensecost',  compact('freezones', 'freezone_data'));
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

        $license = License::find($request->license);

        if ($request->visa_package == '4+' || $license->name == 'Others') {
            ContactUs::create([
                'first_name' => auth('customer')->user()->first_name,
                'last_name' => auth('customer')->user()->last_name,
                'email' => auth('customer')->user()->email,
                'iso2' => auth('customer')->user()->iso2,
                'dialCode' => auth('customer')->user()->dialCode,
                'mobile_number' => auth('customer')->user()->mobile_number,
                'type' => 'freezone',
                'message' => json_encode($request->except('_token')),
            ]);

            return back()->with('success', ResponseMessage::CONTACT_US_SUBMIT);
        }


        $freezone = Freezone::select('id', 'name', 'uuid')->where('uuid', $request->freezone)->with([
            'licenses' => function ($query) use ($request) {
                $query->where('status', 1)
                    ->where('licenses.id', $request->license);
            },
            'packages' => function ($query) use ($request) {
                $query->where('status', 1)
                    ->where('packages.office', $request->office)
                    ->where('packages.visa_package', $request->visa_package)
                    ->where('packages.license_validity', $request->license_validity);
            },
            'visa_types' => function ($query) use ($request) {
                $query->where('status', 1)
                    ->where('visa_types.id', $request->visa_type);
            },
            'visa_add_ons' => function ($query) use ($request) {
                $query->where('status', 1)
                    ->where('visa_add_ons.id', $request->visa_add_on);
            },
            'locations' => function ($query) use ($request) {
                $query->where('status', 1)
                    ->where('locations.id', $request->location);
            }
        ])->first();

        $packages_array = [];
        $total = 0;

        if (!$freezone || count($freezone->licenses) === 0 || count($freezone->packages) === 0 || ((count($freezone->visa_types) === 0 || count($freezone->visa_add_ons) === 0 || count($freezone->locations) === 0) && $request->visa_package != 0)) {
            ContactUs::create([
                'first_name' => auth('customer')->user()->first_name,
                'last_name' => auth('customer')->user()->last_name,
                'email' => auth('customer')->user()->email,
                'iso2' => auth('customer')->user()->iso2,
                'dialCode' => auth('customer')->user()->dialCode,
                'mobile_number' => auth('customer')->user()->mobile_number,
                'type' => 'freezone',
                'message' => json_encode($request->except('_token')),
            ]);

            return back()->with('success', ResponseMessage::CONTACT_US_SUBMIT);
        }

        foreach ($request->get('visa_type', []) as $key => $visa_type) {
            $visa_type_data = $freezone->visa_types()->where('id', $request->visa_type[$key])->first();
            $visa_add_on_data = $freezone->visa_add_ons()->where('id', $request->visa_add_on[$key])->first();
            $location_data = $freezone->locations()->where('id', $request->location[$key])->first();

            $visa_package_name = $visa_type_data->name . ', ' . $visa_add_on_data->name . ', ' . $location_data->name;
            $visa_package_price = floatval($visa_type_data->price) + floatval($visa_add_on_data->price) + floatval($location_data->price);

            array_push($packages_array, ['name' => $visa_package_name, 'price' => $visa_package_price]);
            $total += $visa_package_price;
        }


        $pattern = '/\|(.*?)\|/';
        preg_match_all($pattern, $request->activities_selection, $matches);
        $activityIds = $matches[1];

        $activities = Activity::whereIn('id', $activityIds)->select('id', 'name', 'activity_group_id')->where('status', 1)->with('activity_group')->get();

        $total += $freezone->licenses[0]->price +
            $freezone->packages[0]->price +
            ($freezone->visa_types[0]?->price ?? 0) +
            ($freezone->visa_add_ons[0]?->price ?? 0) +
            ($freezone->locations[0]?->price ?? 0);

        $id = Str::uuid();
        $package_price = $freezone->packages[0]->price;
        $license_price = $freezone->licenses[0]->price;
        $visa_package = $request->visa_package;
        $license_validity = $request->license_validity;
        $license_name = $freezone->licenses[0]->name;
        $uuid = $freezone->uuid;
        $request_data = json_encode($request->except('_token'));

        Cache::put($id, json_encode(compact('visa_package', 'license_validity', 'license_name', 'package_price', 'license_price', 'uuid', 'request_data', 'total')), 36000);
        return view('frontend.cost_calculator.cost_summary')->with(compact('freezone', 'activities', 'total', 'id', 'packages_array'));
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

    // function ai_compare_old($id)
    // {
    //     $freezone_compare_data = Cache::get($id);

    //     if (!$freezone_compare_data)
    //         return redirect()->route('calculate-licensecosts.index')->with('error', ResponseMessage::SESSION_LINK_EXPIRED);

    //     $decoded_data = json_decode($freezone_compare_data);

    //     return response()->json($decoded_data);

    //     //? 'visa_package', 'license_validity', 'license_name', 'package_price'


    //     return view('frontend.under_development');


    //     $decoded_data = json_decode($freezone_compare_data);
    //     $data = [$decoded_data->freezone->uuid];

    //     //AI calculation
    //     $decoded_data_license_name = $decoded_data->freezone->licenses[0]->name;

    //     $decoded_data_min_price = floatval($decoded_data->freezone->licenses[0]->price) + floatval($decoded_data->freezone->packages[0]->price) + floatval($decoded_data->freezone->visa_types[0]->price);

    //     $freezone = Freezone::where('uuid', '<>', $decoded_data->freezone->uuid)->where('status', 1);

    //     $other_freezone_with_same_license = $freezone->where('min_price', '<=', $decoded_data_min_price)
    //         ->whereHas('licenses', function ($query) use ($decoded_data_license_name) {
    //             $query->where('status', 1)
    //                 ->where('name', $decoded_data_license_name);
    //         })->orderBy('min_price', 'DESC')->first();
    //     if ($other_freezone_with_same_license) {
    //         array_push($data, $other_freezone_with_same_license->uuid);
    //     } else {
    //         $other_freezone_with_diff_license = $freezone->where('min_price', '<=', $decoded_data_min_price)
    //             ->whereHas('licenses', function ($query) use ($decoded_data_license_name) {
    //                 $query->where('status', 1)
    //                     ->where('name', '<>', $decoded_data_license_name);
    //             })->orderBy('min_price', 'DESC')->first();
    //         if ($other_freezone_with_diff_license) {
    //             array_push($data, $other_freezone_with_diff_license->uuid);
    //         } else {
    //             $other_freezone_with_same_license_max_price = $freezone->where('min_price', '>', $decoded_data_min_price)
    //                 ->whereHas('licenses', function ($query) use ($decoded_data_license_name) {
    //                     $query->where('status', 1)
    //                         ->where('name', $decoded_data_license_name);
    //                 })->orderBy('min_price', 'ASC')->first();
    //             if ($other_freezone_with_same_license_max_price) {
    //                 array_push($data, $other_freezone_with_same_license_max_price->uuid);
    //             } else {
    //                 $other_freezone_with_diff_license_max_price = $freezone->where('min_price', '>', $decoded_data_min_price)
    //                     ->whereHas('licenses', function ($query) use ($decoded_data_license_name) {
    //                         $query->where('status', 1)
    //                             ->where('name', '<>', $decoded_data_license_name);
    //                     })->orderBy('min_price', 'ASC')->first();
    //                 if ($other_freezone_with_diff_license_max_price) {
    //                     array_push($data, $other_freezone_with_diff_license_max_price->uuid);
    //                 } else {
    //                     return redirect()->route('calculate-licensecosts.index');
    //                 }
    //             }
    //         }
    //     }

    //     return redirect('/compare-freezone?freezones=' . implode(",", $data) . '&freezone_compare_id=' . $id);
    // }

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
