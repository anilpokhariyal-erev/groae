<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests\CostCalculatorSummaryRequest;
use App\Mail\VerificationCodeMail;
use App\Models\VerificationCode;
use DB;
use Carbon\Carbon;
use App\Models\Country;
use App\Models\Customer;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Assets\ResponseMessage;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Models\CustomerPasswordReset;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\Auth\CustomerLoginRequest;
use Illuminate\Support\Facades\Password as ResetPassword;
use Illuminate\Validation\Rules\Password as RulesPassword;

class AuthController extends Controller
{
    public function signin()
    {
        if (Auth::guard('customer')->check())
            return redirect()->route('home');

        Session::put('previous_url', URL::previous());
        return view('frontend.auth.signin');
    }

    public function login(CustomerLoginRequest $request)
    {
        if (Auth::guard('customer')->check())
            return redirect()->route('home');
        $request->authenticate();
        $request->session()->regenerate();

        $previousUrl = Session::pull('previous_url', '/');
        $formInput = Session::pull('form_input');
        Session::put('form_input', $formInput);
        if ($formInput) {
            return redirect()->route('calculate-licensecosts.index');
        }
        return redirect()->intended($previousUrl)->withInput($formInput);
    }

    public function signup()
    {
        if (Auth::guard('customer')->check())
            return redirect()->route('home');
        $number1 = random_int(1, 10);
        $number2 = random_int(1, 10);
        session(['captcha_question' => "$number1 + $number2", 'captcha_answer' => $number1 + $number2]);

        $countries = Country::all();

        return view('frontend.auth.signup')->with(compact('countries'));
    }

    public function register_customer(Request $request): RedirectResponse
    {
        if (Auth::guard('customer')->check()) {
            return redirect()->route('home');
        }

        $request->validate([
            'first_name' => ['required', 'string', 'max:50'],
            'middle_name' => ['nullable', 'string', 'max:50'],
            'last_name' => ['required', 'string', 'max:50'],
            'type' => ['required', 'in:customer,partner'],
            'pincode' => ['nullable', 'max:15'],
            'city' => ['nullable', 'string', 'max:50'],
            'state_id' => ['nullable', 'integer', Rule::exists('states', 'id')],
            'country_id' => ['nullable', 'integer', Rule::exists('countries', 'id')],
            'address' => ['nullable', 'string', 'max:255'],
            'mobile_number' => ['required', 'string', 'max:15', 'min:7', 'unique:' . Customer::class],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . Customer::class],
            'password' => ['required', 'confirmed', RulesPassword::min(6)->mixedCase()->letters()->numbers()],
            'captcha' => [
                'required',
                function ($attribute, $value, $fail) {
                    if ((int) $value !== session('captcha_answer')) {
                        $fail('The CAPTCHA answer is incorrect.');
                    }
                },
            ],
        ]);


        $customer = Customer::create([
            'name' => $request->first_name . ' ' . $request->middle_name . ' ' . $request->last_name,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'type' => $request->type,
            'pincode' => $request->pincode,
            'city' => $request->city,
            'state_id' => $request->state_id,
            'country_id' => $request->country_id,
            'address' => $request->address,
            'mobile_number' => $request->mobile_number,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'status' => 0,
            'iso2' => $request->iso2,
            'dialCode'=> $request->dialCode,
        ]);

        $verificationCode = rand(100000, 999999);

        // Store the verification code with expiration (e.g., 10 minutes)
        VerificationCode::create([
            'mobile'=>$request->input('mobile_number'),
            'email' => $request->input('email'),
            'code' => $verificationCode,
            'expires_at' => now()->addHours(24),
        ]);

        $link = config('app.url') . '/verify/' . encrypt($request->input('email')).'/'. encrypt($verificationCode);
        $fullName = trim("{$request->first_name} {$request->middle_name} {$request->last_name}");


        // Send the verification code via email
        Mail::to($request->input('email'))->send(new VerificationCodeMail($link,$fullName));

        Auth::guard('customer')->login($customer);

        $previousUrl = Session::pull('previous_url', '/');
        $formInput = Session::pull('form_input');
        session()->forget(['captcha_question', 'captcha_answer']);

        return redirect()->intended($previousUrl)->withInput($formInput)->with('success', ResponseMessage::ACCOUNT_CREATED);

    }

    public function forgot_password()
    {
        if (Auth::guard('customer')->check())
            return redirect()->route('home');

        return view('frontend.auth.forgot_password');
    }

    public function submit_forgot_password(Request $request)
    {
        if (Auth::guard('customer')->check())
            return redirect()->route('home');

        $request->validate([
            'email' => 'required|email|exists:customers,email',
        ], [
            'email.exists' => 'Account with this email does not exist.',
        ]);
        try {
            $token = Str::random(64);
            CustomerPasswordReset::updateOrInsert(
                ['email' => $request->email],
                ['email' => $request->email, 'token' => $token]
            );

            Mail::send('frontend.email.forgetPassword', ['email' => $request->email, 'token' => $token], function ($message) use ($request) {
                $message->to($request->email);
                $message->subject('Reset Password');
            });
            return back()->with('success', ResponseMessage::CUSTOMER_PASSWORD_RESET_MESSAGE);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return back()->with('error', ResponseMessage::WrongMsg);
        }
    }

    public function reset_password($token)
    {
        if (Auth::guard('customer')->check())
            return redirect()->route('home');

        $exists = CustomerPasswordReset::where(['token' => $token])->first();
        if (!$exists)
            return redirect()->route('home')->with('error', ResponseMessage::RESET_LINK_EXPIRED);

        return view('frontend.auth.reset_password', ['token' => $token]);
    }

    public function reset_password_store(Request $request)
    {
        if (Auth::guard('customer')->check())
            return redirect()->route('home');

        $request->validate([
            'reset_token' => ['required', 'string'],
            'new_password' => ['required', 'matches_confirmation:confirmed_new_password', Password::min(6)->mixedCase()->letters()->numbers()],
        ]);

        $exists = CustomerPasswordReset::where(['token' => $request->reset_token])->first();

        $message = '';
        $status = '';

        if ($exists) {
            $customer = Customer::where('email', $exists->email)->first();
            if ($customer) {
                if (Hash::check($request->new_password, $customer->password)) {
                    $message = ResponseMessage::SAME_OLD_PASSWORD;
                    $status = 'error';
                } else {
                    $customer->password = Hash::make($request->new_password);
                    $customer->save();
                    $exists->delete();
                    $message = ResponseMessage::PASSWORD_UPDATE_SUCCESS;
                    $status = 'success';
                }
            } else {
                $message = ResponseMessage::RESET_LINK_EXPIRED;
                $status = 'error';
            }
        } else {
            $message = ResponseMessage::RESET_LINK_EXPIRED;
            $status = 'error';
        }

        return redirect()->route('home')->with($status, $message);
    }

    /*public function logout(Request $request): RedirectResponse
    {
        Auth::guard('customer')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }*/
}
