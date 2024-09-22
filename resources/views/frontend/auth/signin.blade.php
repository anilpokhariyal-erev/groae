@props(['errors' => collect()])
<x-customer-auth>
    <div class="signupItems">
        <div>
            <h1 class="loginTxt">Login</h1>
            <p class="detailTxt">Enter details to access your account</p>
            <form id="customerLoginForm" method="post" action="{{ route('customer.post.login') }}" class="signupFormItems"
                novalidate>
                @csrf
                <div class="form-group input_wrap">
                    <input class="inputField" name="email" id="email" autocomplete="off" required type="email"
                        placeholder=" " value="{{ old('email') }}">
                    <label for="name">Email*</label>
                    <p id="email_error" class="errorMessage"></p>
                    <x-input-error class="mt-2 text-red" :messages="$errors->get('email')" />
                </div>

                <div class="form-group input_wrap showPassword ">
                    <input class="inputField" id="password" name="password" autocomplete="new-password" required
                        type="password" placeholder=" ">
                    <label for="password">Password*</label>
                    <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password"></span>
                    <p id="password_error" class="errorMessage"></p>
                    <x-input-error class="mt-2 text-red" :messages="$errors->get('password')" />
                </div>
                <a href="{{ route('customer.forgotpassword') }}" class=" forgotPassTxt">Forgot Password
                    ?</a>
                <div class="btns">
                    <button type="submit" class="loginBtn">
                        <span class="buttonText">Login</span>
                    </button>
                    <p class="signupLink">Don't have an account?
                        <a class="createAccTxt" href="{{ route('customer.signup') }}">Create Account</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</x-customer-auth>
