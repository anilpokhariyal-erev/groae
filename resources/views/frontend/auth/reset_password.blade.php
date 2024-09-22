@props(['errors' => collect()])
<x-customer-auth>
    <div class="signupItems">
        <div>
            <h1 class="loginTxt">Reset Password</h1>
            <p class="detailTxt">Please enter your new password </p>

            <x-auth-session-status class="mb-4 text-red" :status="session('error')" />
            <form action="{{ route('customer.password.store') }}" method="POST" class="signupFormItems" novalidate>
                @csrf
                <input type="hidden" name="reset_token" value="{{ $token }}">
                <div class="form-group input_wrap showPassword">
                    <input class="inputField" id="new_password" type="password" name="new_password" placeholder=""
                        autocomplete="new-password" required>
                    <label for="new_password">
                        New Password
                    </label>
                    <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password"></span>
                    <p id="new_password_error" class="errorMessage"></p>
                    <x-input-error :messages="$errors->get('new_password')" class="mt-2 text-red" />
                </div>
                <div class="form-group input_wrap showPassword">
                    <input class="inputField" id="confirmed_new_password" type="password" name="confirmed_new_password"
                        autocomplete="new-password" placeholder="" required>
                    <label for="password">
                        Confirm Password
                    </label>
                    <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password"></span>
                    <p id="confirmed_new_password_error" class="errorMessage"></p>
                    <x-input-error :messages="$errors->get('confirmed_new_password')" class="text-red mt-2" />
                </div>
                <div class="btns">
                    <button type="submit" id='validate' class="loginBtn">
                        <span class="buttonText">Submit</span>
                    </button>
                    <p class="signupLink">Back to
                        <a class="createAccTxt" href="{{ route('customer.login') }}">Login</a>
                    </p>
                </div>
            </form>
            <div class="passwordDetails">
                <ul class="passwordList">
                    <li class="passwordInnrList">Password Strength: <span id="strength-indicator"></span>
                    </li>
                    <li class="passwordInnrList">Password should be minimum 6 characters</li>
                    <li class="passwordInnrList">Include one uppercase letter</li>
                    <li class="passwordInnrList">Include lowercase letter, and number</li>
                </ul>
            </div>
        </div>
    </div>
</x-customer-auth>
