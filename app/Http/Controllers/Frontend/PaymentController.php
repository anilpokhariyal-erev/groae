<?php
 
 namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\PackageBooking;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use Stripe\PaymentIntent;

class PaymentController extends Controller
{

    public function createPaymentCheckout(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $booking = PackageBooking::where("id", $request->booking_id)->first();
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
                'success_url' => url('/checkout-success') . '?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => url('/checkout-cancel'),
            ]);
 
            return response()->json(['url' => $checkoutSession->url]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function checkoutSuccess(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
        // Retrieve session ID from query parameters
        $sessionId = $request->query('session_id');
        
        try {
            // Fetch the session details from Stripe
            $session = Session::retrieve($sessionId);
            $paymentIntent = PaymentIntent::retrieve($session->payment_intent);
 
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
        dd($request);
        return view('checkout-cancel');
    }
}