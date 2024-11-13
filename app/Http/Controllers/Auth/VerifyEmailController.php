<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\VerificationCode;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Client\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Crypt;

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
}
