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
            $headerText ='';
            $bodyText = '';
    
            // Update the status
            if($validatedData['status']==4){
                $packageBooking->status = 2;
                $packageBooking->payment_status = 1;
            }else{
                $packageBooking->status = $validatedData['status'];
            }
            
            if (isset($validatedData['remarks'])) {
                $packageBooking->remarks = $validatedData['remarks'];
            }
            $fixedCostTotal = 0;
            if($validatedData['status'] == 2){
                $fixedFees = FixedFee::whereIn('freezone_id', [$packageBooking->package->freezone_id, null])->where('status',1)->get();
                foreach ($fixedFees as $fixedFee) {
                    $fixedCost = $fixedFee->value;
                    if($fixedFee->type!="fixed"){
                        $fixedCost = ($packageBooking->final_cost * $fixedFee->value/100);
                    }
                    $packageBookingDetail = new PackageBookingDetail();
                    $packageBookingDetail->package_booking_id = $packageBooking->id;
                    $packageBookingDetail->attribute_name = $fixedFee->label." ".$fixedFee->type;
                    $packageBookingDetail->attribute_value = $fixedFee->value;
                    $packageBookingDetail->quantity = 1;
                    $packageBookingDetail->price_per_unit = number_format($fixedCost, 2, '.', '');
                    $packageBookingDetail->total_cost = number_format($fixedCost, 2, '.', '');                    
                    $packageBookingDetail->status = 1;
                    $packageBookingDetail->save();
                    $fixedCostTotal += $fixedCost;
                }
            }
            $packageBooking->final_cost = $packageBooking->original_cost + $fixedCostTotal;
            $packageBooking->save();

            if($validatedData['status'] == 0) {
                $headerText = "Your Request Has Been Cancelled";
                $bodyText = "Hi <b>{$packageBooking->customer->first_name} {$packageBooking->customer->last_name}</b>,<br><br>";
                $bodyText .= "We are writing to let you know that your request<br>";
                $bodyText .= "for {$packageBooking->package->title} has been cancelled. if<br>";
                $bodyText .= "You have any question or need assistance, please <br>";
                $bodyText .= "don't hesitate to reach out to us.<br>";
                $bodyText .= "We look forward to serving you in the future!<br>";
                $bodyText .= "<b>Regards</b>,<br>";
                $bodyText .= "<b>Team GroAE</b>";
            }elseif ($validatedData['status'] == 2){
                $headerText = "Your Invoice is Ready";
                $bodyText = "Hi <b>{$packageBooking->customer->first_name} {$packageBooking->customer->last_name}</b>,<br><br>";
                $bodyText .= "Your invoice for {$packageBooking->package->title} has been<br>";
                $bodyText .= "generated successfully. please find the invoice details below: <br><br>";
                $bodyText .= "<b>Invoice Number: </b><br>";
                $bodyText .= "<b>Total Amount: {$packageBooking->package->currency} {$packageBooking->final_cost}</b><br><br>";
                $bodyText .= "You can download your invoice by clicking the button<br>";
                $bodyText .= "below:<br><br>";
                $bodyText .= "<div style='display: flex; justify-content: center;'><a><button style=\"background-color: #304a6f; color: white; border: none; padding: 10px 20px; cursor: pointer; border-radius: 5px;\">Download Invoice</button></a></div><br><br>";
                $bodyText .= "<b>Regards</b>,<br>";
                $bodyText .= "<b>Team GroAE</b>";
            }elseif ($validatedData['status'] == 3){
                $headerText = "Refund Processed";
                $bodyText = "Hi <b>{$packageBooking->customer->first_name} {$packageBooking->customer->last_name}</b>,<br><br>";
                $bodyText .= "we have successfully processed your refund of<br>";
                $bodyText .= "{$packageBooking->package->currency} {$packageBooking->final_cost} for {$packageBooking->package->title}. The amount<br>";
                $bodyText .= "should reflect in your account within 3-5 business<br>";
                $bodyText .= "days.<br>";
                $bodyText .= "If you have any questions, feel free to contact us.<br>";
                $bodyText .= "<b>Regards</b>,<br>";
                $bodyText .= "<b>Team GroAE</b>";

            }elseif ($validatedData['status'] == 4){
                $headerText = "Payment Successful!";
                $bodyText = "Hi <b>{$packageBooking->customer->first_name} {$packageBooking->customer->last_name}</b>,<br><br>";
                $bodyText .= "We are happy to inform you that your payment of <br>";
                $bodyText .= "{$packageBooking->package->currency} {$packageBooking->final_cost} for {$packageBooking->package->title} was<br>";
                $bodyText .= "successful.<br>";
                $bodyText .= "Thank you for choosing GroAE. You can find your<br>";
                $bodyText .= "payment details attached to this email.<br><br>";
                $bodyText .= "<div style='display: flex; justify-content: center;'><a><button style=\"background-color: #304a6f; color: white; border: none; padding: 10px 20px; cursor: pointer; border-radius: 5px;\">Download Receipt</button></a></div><br><br>";
                $bodyText .= "<b>Regards</b>,<br>";
                $bodyText .= "<b>Team GroAE</b>";
            }

            $data = [
                'message' => 'Please find your PDF quote attached.',
                'headerText' => $headerText,
                'bodyText' => $bodyText,
            ];

            // Send email with attachment
            Mail::send('frontend.email.email_template', $data, function ($message) use ($toEmail, $subject) {
                $message->to($toEmail)
                    ->subject($subject);
//                    ->attach($filePath); // Attach the generated PDF
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
