<?php

namespace App\Http\Controllers\Auth;

use App\Assets\ResponseMessage;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Password;
use App\Notifications\PasswordResetNotification;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     */
    public function create(): View
    {
        return view('auth.forgot-password');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {   
        $request->validate([
            'email' => ['required', 'email'],
        ]);

        $user = User::select('email','user_type')->where('email', $request->email)->first();

        if($user){
            if($user->user_type == "freezone_admin"){
                $superuser = User::where('user_type', 'superadmin')->first();
                $superuser->notify(new PasswordResetNotification($user->email));
                return view('auth.forgot-password-success')->with('status', __(ResponseMessage::ResetPasswordRequestSent));
            }
        }

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status == Password::RESET_LINK_SENT
                    ? back()->with('status', __($status))
                    : back()->withInput($request->only('email'))
                            ->withErrors(['email' => __($status)]);
    }
}
