<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Assets\Utils;
use App\Models\Customer;
use App\Models\PackageBooking;
use App\Models\Setting;
use Illuminate\Support\Facades\Mail;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaction = Transaction::with(['customer'])->orderBy('id','desc')->get();
        return view('admin.transaction.transaction_list',compact('transaction'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $packageBookings = PackageBooking::select('id', 'customer_id', 'package_id', 'final_cost', 'created_at')
            ->with(['customer:id,name', 'package:id,title']) // Assuming `title` is the package name field
            ->where('status', 2)
            ->get();
        $company_info = Setting::where('section_key', 'company_info')
            ->pluck('value', 'title')
            ->toArray();
        return view('admin.transaction.create', compact('packageBookings', 'company_info'));
    }
    


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'transaction_id' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'payment_status' => 'required|string|max:255',
            'message' => 'nullable|string',
            'freezone_booking_id' => 'required|exists:package_bookings,id', // Ensure this is included,
            'response_obj' => 'string',
            'reference_id' => 'string',
        ]);

        $booking = PackageBooking::where('id', $validatedData['freezone_booking_id'])->first();
        // Create a new transaction and link it to a FreezoneBooking
        Transaction::create([
            'transaction_id' => $validatedData['transaction_id'],
            'amount' => $validatedData['amount'],
            'customer_id' => $booking->customer_id,
            'payment_status' => $validatedData['payment_status'],
            'message' => $validatedData['message'] ?? null,
            'reference_id' => $validatedData['reference_id'] ?? null,
            'package_booking_id' => $booking->id, // Make sure to associate it here
            'response_obj' => $validatedData['response_obj'] ?? null,
        ]);

        return redirect()->route('transaction.index')->with('success', 'Transaction created successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        // Ensure you are eager loading the related models
        $transaction->load('customer', 'packageBooking.package.freezone');
        return view('admin.transaction.transaction_detail', compact('transaction'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }


    public function updateStatus(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);
    
        if ($transaction->payment_status === 'pending') {
            // Generate new transaction ID
            $transaction->transaction_id = 'GROAE_' . substr(bin2hex(random_bytes(16)), 0, 26);
            $transaction->payment_status = 'successful';
    
            // Retrieve existing remarks
            $existingRemarks = $transaction->packageBooking->remarks ?? '';
            $newRemark = $existingRemarks 
                ? $existingRemarks . " | Paid Marked Manually on " . now()->format('Y-m-d H:i:s') 
                : "Paid Marked Manually on " . now()->format('Y-m-d H:i:s');
    
            // Update package booking details
            $transaction->packageBooking->update([
                'remarks' => $newRemark,
                'payment_status' => 1,
                'payment_method' => 'manually',
            ]);
    
            // Save the transaction
            $transaction->save();

            $headerText = "Payment Successful!";
            $bodyText = "Hi <b>{$transaction->packageBooking->customer->first_name} {$transaction->packageBooking->customer->last_name}</b>,<br><br>";
            $bodyText .= "We are happy to inform you that your payment of <br>";
            $bodyText .= "{$transaction->packageBooking->package->currency} {$transaction->packageBooking->final_cost} for {$transaction->packageBooking->package->title} was<br>";
            $bodyText .= "successful.<br>";
            $bodyText .= "Thank you for choosing GroAE. You can find your<br>";
            $bodyText .= "payment details attached to this email.<br><br>";
            $bodyText .= "<div style='display: flex; justify-content: center;'><a><button style=\"background-color: #304a6f; color: white; border: none; padding: 10px 20px; cursor: pointer; border-radius: 5px;\">Download Receipt</button></a></div><br><br>";
            $bodyText .= "<b>Regards</b>,<br>";
            $bodyText .= "<b>Team GroAE</b>";

            $data = [
                'message' => 'Please find your PDF quote attached.',
                'headerText' => $headerText,
                'bodyText' => $bodyText,
            ];
            $toEmail = $transaction->packageBooking->customer->email; // Recipient's email address
            $subject = 'Groae Package Booking Success';

            // Send email with attachment
            Mail::send('frontend.email.email_template', $data, function ($message) use ($toEmail, $subject) {
                $message->to($toEmail)
                    ->subject($subject);
//                    ->attach($filePath); // Attach the generated PDF
            });
    
            return redirect()->back()->with('success', 'Transaction status updated to Paid.');
        }
    
        return redirect()->back()->with('error', 'Transaction status cannot be updated.');
    }
    

    public function markRefunded($id)
    {
        $transaction = Transaction::findOrFail($id);

        if ($transaction->payment_status !== 'successful') {
            return redirect()->back()->with('error', 'Only successful transactions can be refunded.');
        }

        $transaction->update([
            'payment_status' => 'refunded',
        ]);

        // Append new remark to the existing remarks
        $existingRemarks = $transaction->packageBooking->remarks ?? '';
        $newRemark = $existingRemarks 
            ? $existingRemarks . " | Refunded Manually on " . now()->format('Y-m-d H:i:s') 
            : "Refunded Manually on " . now()->format('Y-m-d H:i:s');

        // Update package booking status and remarks
        $transaction->packageBooking->update([
            'status' => 3,
            'payment_status' => 2,
            'remarks' => $newRemark,
        ]);

        $headerText = "Refund Processed";
        $bodyText = "Hi <b>{$transaction->packageBooking->customer->first_name} {$transaction->packageBooking->customer->last_name}</b>,<br><br>";
        $bodyText .= "we have successfully processed your refund of<br>";
        $bodyText .= "{$transaction->packageBooking->package->currency} {$transaction->packageBooking->final_cost} for {$transaction->packageBooking->package->title}. The amount<br>";
        $bodyText .= "should reflect in your account within 3-5 business<br>";
        $bodyText .= "days.<br>";
        $bodyText .= "If you have any questions, feel free to contact us.<br>";
        $bodyText .= "<b>Regards</b>,<br>";
        $bodyText .= "<b>Team GroAE</b>";

        $data = [
            'message' => 'Please find your PDF quote attached.',
            'headerText' => $headerText,
            'bodyText' => $bodyText,
        ];
        $toEmail = $transaction->packageBooking->customer->email; // Recipient's email address
        $subject = 'Groae Package Booking Refund Processed';
        // Send email with attachment
        Mail::send('frontend.email.email_template', $data, function ($message) use ($toEmail, $subject) {
            $message->to($toEmail)
                ->subject($subject);
//                    ->attach($filePath); // Attach the generated PDF
        });


        return redirect()->back()->with('success', 'Transaction marked as refunded.');
    }


}
