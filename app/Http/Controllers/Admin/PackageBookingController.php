<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\PackageBooking;
use App\Http\Controllers\Controller;
use App\Assets\Utils;
use App\Models\Customer;
use App\Models\FixedFee;
use App\Models\PackageBookingDetail;
use App\Models\Setting;

class PackageBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {  
        $packageBookings = PackageBooking::where("status", 1)->orderBy("created_at","desc")->get();  
        
        return view('admin.package-booking.bookings', compact('packageBookings'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $packageBookingsDetails = PackageBooking::with('bookingDetails')
                                    ->where('id', $id)
                                    ->where('status',1)
                                    ->orderBy('created_at','desc')
                                    ->get();
        $fixedFees = FixedFee::where('status',1)->get();
        $company_info = Setting::where('section_key', 'company_info')
                       ->pluck('value', 'title')
                       ->toArray();
        $packageBookingId = $id;
        $adjustments = PackageBookingDetail::where('package_booking_id', $id)
        ->where('attribute_name', 'Adjustments')
        ->first();
        return view('admin.package-booking.invoice', compact('packageBookingsDetails', 
        'fixedFees','company_info', 'packageBookingId', 'adjustments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PackageBooking $packageBooking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PackageBooking $packageBooking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PackageBooking $packageBooking)
    {
        //
    }

    public function adjustments(Request $request)
    {
        // Validate the input
        $validatedData = $request->validate([
            'package_booking_id' => 'required|numeric|exists:package_bookings,id',
            'adjustments' => 'required|numeric',
            'description' => 'nullable|string|max:250',
        ]);

        // Check if an adjustment already exists for the booking
        $packageDetail = PackageBookingDetail::where('package_booking_id', $validatedData['package_booking_id'])
            ->where('attribute_name', 'Adjustments')
            ->first();

        // If no existing adjustment, create a new one
        if (!$packageDetail) {
            $packageDetail = new PackageBookingDetail();
            $packageDetail->package_booking_id = $validatedData['package_booking_id'];
            $packageDetail->attribute_name = 'Adjustments';
        }

        // Update the adjustment details
        $packageDetail->attribute_value = $validatedData['adjustments'];
        $packageDetail->price_per_unit = $validatedData['adjustments'];
        $packageDetail->total_cost = $validatedData['adjustments'];
        $packageDetail->description = $validatedData['description'] ?? null;
        $packageDetail->save();

        // Return a response with success message
        return redirect()->back()->with('success', 'Adjustments successfully updated!');
    }
    
}
