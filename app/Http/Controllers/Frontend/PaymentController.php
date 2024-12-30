<?php
 
 namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\PackageBooking;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use Stripe\PaymentIntent;
use Illuminate\Support\Facades\Crypt;

class PaymentController extends Controller
{

    public function createPaymentCheckout(Request $request)
    {
        Stripe::setApiKey(config('services.stripe.secret'));
        $booking = PackageBooking::where("id", $request->booking_id)->first();
        if($booking){        
            // Create the Transaction entry
            $transaction = Transaction::create([
                'transaction_id' => "Pending",
                'amount' => $booking->final_cost,
                'reference_id' => $request->order_id,
                'customer_id' => $booking->customer_id,
                'payment_status' => 'pending',
                'message' => 'Payment requested for package booking',
                'package_booking_id' => $booking->id,
                'response_obj' => null,
            ]);
            try {
                // Create a new Stripe Checkout Session
                $checkoutSession = Session::create([
                    'payment_method_types' => ['card'],
                    'line_items' => [[
                        'price_data' => [
                            'currency' => $booking->package->currency,
                            'product_data' => [
                                'name' => $request->order_id." - " .$booking->package->title,
                            ],
                            'unit_amount' => $request->amount * 100, // Amount in least amount unit
                        ],
                        'quantity' => 1,
                    ]],
                    'mode' => 'payment',
                    'success_url' => url('/checkout_success') . '?session_id={CHECKOUT_SESSION_ID}',
                    'cancel_url' => url('/checkout-cancel'). '?session_id={CHECKOUT_SESSION_ID}',
                    'metadata' => [
                        'reference_id' => $request->order_id,
                        'transaction_ref' => Crypt::encrypt($transaction->id),
                        'booking_ref' => Crypt::encrypt($booking->id),
                    ],
                ]);
    
                return response()->json(['url' => $checkoutSession->url]);
            } catch (\Exception $e) {
                return response()->json(['error' => $e->getMessage()], 500);
            }
        } else {
            return response()->json(['error'=> 'Invalid Package Booking for Payment.'], 500);
        }
    }

    public function checkoutSuccess(Request $request)
    {
        Stripe::setApiKey(config('services.stripe.secret'));
        // Retrieve session ID from query parameters
        $sessionId = $request->query('session_id');
        
        try {
            // Fetch the session details from Stripe
            $session = Session::retrieve($sessionId);
            $paymentIntent = PaymentIntent::retrieve($session->payment_intent);
            // Retrieve the reference ID from metadata
            $referenceId = $session->metadata->reference_id;
            $transaction_id = Crypt::decrypt($session->metadata->transaction_ref);
            $booking_id = Crypt::decrypt($session->metadata->booking_ref);
            $transaction = Transaction::where('id', $transaction_id)->first();
            $transaction->transaction_id =  $sessionId;
            $transaction->response_obj = $request;
            $transaction->payment_status = "successful";
            $transaction->save();
            $package_booking = PackageBooking::where("id", $booking_id)->first();
            $package_booking->transaction_id = $transaction_id;
            $package_booking->payment_status = 1;
            $package_booking->payment_method = "card";
            $package_booking->save();

            $headerText = "Payment Successful!";
            $bodyText = "Hi <b>{$package_booking->customer->first_name} {$package_booking->customer->last_name}</b>,<br><br>";
            $bodyText .= "We are happy to inform you that your payment of <br>";
            $bodyText .= "{$package_booking->package->currency} {$package_booking->final_cost} for {$package_booking->package->title} was<br>";
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
            $toEmail = $package_booking->customer->email; // Recipient's email address
            $subject = 'Groae Package Booking Success';

            // Send email with attachment
            Mail::send('frontend.email.email_template', $data, function ($message) use ($toEmail, $subject) {
                $message->to($toEmail)
                    ->subject($subject);
//                    ->attach($filePath); // Attach the generated PDF
            });
            // Return the session data to the view
            return view('frontend.customer.checkout-success', [
                'session' => $session,
                'receipt_url' => $paymentIntent->charges->data[0]->receipt_url ?? null,
            ]);
        } catch (\Exception $e) {
            return view('frontend.customer.checkout-fail', ['error' => $e->getMessage()]);
        }
    }

    public function checkoutCancel(Request $request)
    {
        Stripe::setApiKey(config('services.stripe.secret'));
        // Retrieve session ID from query parameters
        $sessionId = $request->query('session_id');
        
        try {
            // Fetch the session details from Stripe
            $session = Session::retrieve($sessionId);
            $transaction_id = Crypt::decrypt($session->metadata->transaction_ref ?? null);
            $booking_id = Crypt::decrypt($session->metadata->booking_ref ?? null);

            // Update the transaction as failed
            if ($transaction_id) {
                $transaction = Transaction::where('id', $transaction_id)->first();
                $transaction->transaction_id = $sessionId;
                $transaction->response_obj = $request;
                $transaction->payment_status = "failed";
                $transaction->save();
            }

            // Update the booking as payment failed
            if ($booking_id) {
                $package_booking = PackageBooking::where('id', $booking_id)->first();
                $package_booking->transaction_id = $transaction_id ?? null;
                $package_booking->payment_status = 0; // Failed status
                $package_booking->payment_method = "card";
                $package_booking->save();
            }

            // Redirect to the failure view with relevant details
            return view('frontend.customer.checkout-fail', [
                'session' => $session,
                'error_message' => 'Your payment could not be processed. Please try again.',
            ]);
        } catch (\Exception $e) {
            // Handle unexpected errors
            return view('frontend.customer.checkout-fail', [
                'error_message' => $e->getMessage(),
            ]);
        }
    }

}