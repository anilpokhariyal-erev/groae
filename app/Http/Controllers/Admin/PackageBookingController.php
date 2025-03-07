<?php

namespace App\Http\Controllers\Admin;

use App\Models\FreezoneBooking;
use Illuminate\Http\Request;
use App\Models\PackageBooking;
use App\Http\Controllers\Controller;
use App\Assets\Utils;
use App\Models\Customer;
use App\Models\FixedFee;
use App\Models\PackageBookingDetail;
use App\Models\Setting;
use Illuminate\Support\Facades\Mail;

class PackageBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {  
        $packageBookings = PackageBooking::orderBy("created_at","desc")->get();  
        
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
        $booking = PackageBooking::with('bookingDetails')
                                    ->where('id', $id)
                                    ->orderBy('created_at','desc')
                                    ->first();
        $fixedFees = FixedFee::where('status',1)->get();
        $company_info = Setting::where('section_key', 'company_info')
                       ->pluck('value', 'title')
                       ->toArray();
        $adjustments = PackageBookingDetail::where('package_booking_id', $id)
        ->where('attribute_name', 'Adjustments')
        ->first();
        $booking_detail= $booking;
        $documents = [];
        if($booking_detail){
            $documents = $booking_detail->customer->customer_documents()->get();
        }

        return view('admin.package-booking.invoice', compact('booking', 
        'fixedFees','company_info', 'adjustments','booking_detail','documents'));
    }
    public function documents(int $id)
    {
        $booking_detail = PackageBooking::with('bookingDetails')
            ->where('id', $id)
            ->orderBy('created_at','desc')
            ->first();
        $fixedFees = FixedFee::where('status',1)->get();
        $company_info = Setting::where('section_key', 'company_info')
            ->pluck('value', 'title')
            ->toArray();
        $documents = [];
        if($booking_detail){
            $documents = $booking_detail->customer->customer_documents()->get();
        }

        return view('admin.package-booking.booking-document', compact(
            'fixedFees','company_info','booking_detail','documents'));
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

        PackageBookingDetail::where('package_booking_id', $validatedData['package_booking_id'])
            ->where('attribute_name', 'FixedFee')
            ->delete();


        $booking  = PackageBooking::where('id', $validatedData['package_booking_id'])->first();
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
        $fixed = 0;
        $fixedFees = FixedFee::whereIn('freezone_id', [$booking->package->freezone_id, null])->where('status', 1)->get();
                 foreach ($fixedFees as $fixedFee) {
                     $fixedCost = $fixedFee->type != "flat"
                         ? (($booking->original_cost + $validatedData['adjustments']) * $fixedFee->value / 100)
                         : $fixedFee->value;

                     $var = $fixedFee->type != "flat" ? "%" : '';

                     $packageBookingDetail = new PackageBookingDetail();
                     $packageBookingDetail->package_booking_id = $booking->id;
                     $packageBookingDetail->attribute_name = "FixedFee";
                     $packageBookingDetail->attribute_value = $fixedFee->label.''.'('.$fixedFee->value.''.$var.')';
                     $packageBookingDetail->quantity = 1;
                     $packageBookingDetail->price_per_unit = number_format($fixedCost, 2, '.', '');
                     $packageBookingDetail->total_cost = number_format($fixedCost, 2, '.', '');
                     $packageBookingDetail->status = 1;
                     $packageBookingDetail->save();
                     $fixed += $fixedCost;
                 }

        if ($booking){
            $booking->discount_amount = $validatedData['adjustments'];
            $booking->final_cost = $booking->original_cost+$validatedData['adjustments']+$fixed;
            $booking->save();
        }

        // Return a response with success message
        return redirect()->back()->with('success', 'Adjustments successfully updated!');
    }

    public function update_status(Request $request)
    {
        // Validate the input
        $validatedData = $request->validate([
            'package_booking_id' => 'required|exists:package_bookings,id',
            'status' => 'required|integer|in:0,1,2,3,4', // 0: Cancel Request, 1: Pending Invoice, 2: Generate Invoice, 3: Refunded, 4: Paid
            'remarks' => 'required_if:status,0|string', // Required if status is 0
        ]);

        try {
            // Retrieve the package booking record
            $packageBooking = PackageBooking::findOrFail($validatedData['package_booking_id']);
            $toEmail = $packageBooking->customer->email; // Recipient's email address
            $subject = 'Groae Package Quotation';

            // Update the status
            if ($validatedData['status'] == 4) {
                $packageBooking->status = 2;
                $packageBooking->payment_status = 1;
            } else {
                $packageBooking->status = $validatedData['status'];
            }

            if (isset($validatedData['remarks'])) {
                $packageBooking->remarks = $validatedData['remarks'];
            }
            $packageDetail = PackageBookingDetail::where('package_booking_id', $validatedData['package_booking_id'])
                ->where('attribute_name', 'Adjustments')
                ->first();

            PackageBookingDetail::where('package_booking_id', $validatedData['package_booking_id'])
                ->where('attribute_name', 'FixedFee')
                ->delete();

            $fixedCostTotal = 0;
             if ($validatedData['status'] == 2) {
                 $fixedFees = FixedFee::whereIn('freezone_id', [$packageBooking->package->freezone_id, null])->where('status', 1)->get();
                 foreach ($fixedFees as $fixedFee) {
                     if ($packageDetail && $packageDetail->total_cost!=0) {
                         $fixedCost = $fixedFee->type != "flat"
                             ? (($packageBooking->original_cost + $packageDetail->total_cost) * $fixedFee->value / 100)
                             : $fixedFee->value;
                     }else{
                         $fixedCost = $fixedFee->type != "flat"
                             ? ($packageBooking->original_cost * $fixedFee->value / 100)
                             : $fixedFee->value;
                     }

                     $var = $fixedFee->type != "flat" ? "%" : '';

                     $packageBookingDetail = new PackageBookingDetail();
                     $packageBookingDetail->package_booking_id = $packageBooking->id;
                     $packageBookingDetail->attribute_name = "FixedFee";
                     $packageBookingDetail->attribute_value = $fixedFee->label.''.'('.$fixedFee->value.''.$var.')';
                     $packageBookingDetail->quantity = 1;
                     $packageBookingDetail->price_per_unit = number_format($fixedCost, 2, '.', '');
                     $packageBookingDetail->total_cost = number_format($fixedCost, 2, '.', '');
                     $packageBookingDetail->status = 1;
                     $packageBookingDetail->save();
                     $fixedCostTotal += $fixedCost;
                 }
             }
             if ($packageDetail && $packageDetail->total_cost!=0) {
                 $cost = $packageBooking->original_cost + $fixedCostTotal + $packageDetail->total_cost;
             }else{
                 $cost = $packageBooking->original_cost + $fixedCostTotal;
             }

            $packageBooking->final_cost = $cost;
            $packageBooking->save();

            // Set up email data
            $view = '';
            $company_info = Setting::where('section_key', 'company_info')
                        ->pluck('value', 'title')
                        ->toArray();
            $ref_num = ($company_info['Company Invoice Prefix'] ?? "").str_pad($packageBooking->id, 5, '0', STR_PAD_LEFT);
            $data = [
                'customer' => $packageBooking->customer,
                'package' => $packageBooking->package,
                'final_cost' => $packageBooking->final_cost,
                'ref_num' => $ref_num,
                'packageBooking' => $packageBooking,
                'app_url' => rtrim(config('app.url'), '/'),
            ];

            switch ($validatedData['status']) {
                case 0:
                    $view = 'frontend.email.cancel_request';
                    $subject = 'Your Request Has Been Cancelled';
                    break;
                case 2:
                    $view = 'frontend.email.generate_invoice';
                    $subject = 'Your Invoice is Ready';
                    break;
                case 3:
                    $view = 'frontend.email.refund_processed';
                    $subject = 'Refund Processed';
                    break;
                case 4:
                    $view = 'frontend.email.payment_success';
                    $subject = 'Payment Successful!';
                    break;
            }

            // Send email
            Mail::send($view, $data, function ($message) use ($toEmail, $subject) {
                $message->to($toEmail)
                    ->subject($subject);
            });

            // Return a success response
            return response()->json([
                'message' => 'Package booking status updated successfully.',
                'status' => $packageBooking->status,
            ], 200);
        } catch (\Exception $e) {
            // Handle errors
            return response()->json([
                'message' => 'Failed to update package booking status.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
    
    public function get_requested_quote_count(){
        return PackageBooking::where('status',1)->count();
    }
    
}
