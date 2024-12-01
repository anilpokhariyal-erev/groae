<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\VerificationCodeMail;
use App\Models\Customer;
use App\Models\VerificationCode;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Client\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     */
    public function __invoke(EmailVerificationRequest $request): RedirectResponse
    {

        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(RouteServiceProvider::HOME.'?verified=1');
        }

        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }

        return redirect()->intended(RouteServiceProvider::HOME.'?verified=1');
    }

    public function verify(string $email,string $code): RedirectResponse
    {
        try{
            if ($email && $code) {
                $email_decrypt = Crypt::decrypt($email);
                $code_decrypt = Crypt::decrypt($code);
                $verify = VerificationCode::where('email', $email_decrypt)
                    ->where('code', $code_decrypt)
                    ->where('expires_at', '>', now())
                    ->first();
                if($verify){
                    Customer::where('email', $email_decrypt)->update(['status' => 1]);
                    return redirect(RouteServiceProvider::HOME);
                }
            }
            return abort(419,'Link expired');
        } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
        // If decryption fails, treat it as an invalid request
            return abort(403, 'Page Expired');
        }
    }
    public function request_link(int $id): RedirectResponse
    {
        $customer = Customer::where('id', $id)->first();
        $verify =VerificationCode::where('email', $customer->email)->first();
        if($verify->expires_at < now()){
            return redirect()->back()->with('success', 'Verification code Already Sent!');
        }
        $verificationCode = rand(100000, 999999);

        // Store the verification code with expiration (e.g., 10 minutes)
        VerificationCode::create([
            'mobile'=>$customer->mobile_number,
            'email' => $customer->email,
            'code' => $verificationCode,
            'expires_at' => now()->addHours(24),
        ]);

        $link = config('app.url') . '/verify/' . encrypt($customer->email).'/'. encrypt($verificationCode);
        $fullName = trim("{$customer->first_name} {$customer->middle_name} {$customer->last_name}");


        // Send the verification code via email
        Mail::to($customer->email)->send(new VerificationCodeMail($link,$fullName));
        return redirect()->back()->with('success', 'Verification code Sent successfully!');
    }
}
