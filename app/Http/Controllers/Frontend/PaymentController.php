<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;

class PaymentController extends Controller
{
    public function pay(Request $request)
    {
        Stripe::setApiKey(config('services.stripe.secret'));

        try {
            Charge::create([
                'amount' => 1000, // Amount in cents
                'currency' => 'usd',
                'source' => $request->stripeToken,
                'description' => 'Example Charge',
            ]);

            return 'Payment successful!';
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
