<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckCustomerStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::guard('customer')->check()) {
            // Get the authenticated customer
            $customer = Auth::guard('customer')->user();

            // Check if the customer's status is 0
            if ($customer->status == 0) {
                // Logout the customer if status is 0
                Auth::guard('customer')->logout();

                // Optionally, you can flash a message or redirect them
                return redirect()->route('customer.login')->with('message', 'Your account is inactive. Please contact support.');
            }
        }

        return $next($request);
    }
}
