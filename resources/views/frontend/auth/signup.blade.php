@props(['errors' => collect()])
<x-customer-auth>
    @section('js-imports')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    @endsection
        <style>

            .loginBtn:disabled {
                background-color: #aaa;
            }
        </style>
        <!-- Logo for Mobile -->
        <div class="mobile-logo">
            <img src="{{ secure_asset('images/GroAE_Logo.png') }}" width="100" class="mainLogoImg">
            <h3 class="">Grow with us</h3>
        </div>
        <div class="signupItems">
        <div>
            <h1 class="loginTxt">Get Started</h1>
            <p class="detailTxt">Create account to start your business with us</p>

            <form class="signupFormItems" method="post" action="{{ route('customer.register') }}" novalidate>
                @if(session('success'))
                    <div class="main-card">
                        <div class="card-body">
                            <div class="custom-alert" role="alert">
                                {{ session('success') }}
                            </div>
                        </div>
                    </div>
                @endif
                @csrf
                <h3 class="representTxt">You're representing:</h3>
                <div class="radioForm">
                    <p>
                        <input type="radio" id="cutomer" value="customer" name="type" checked>
                        <label for="cutomer">Customer</label>
                    </p>
{{--                    <p>--}}
{{--                        <input type="radio" id="partner" value="partner" name="type">--}}
{{--                        <label for="partner">Partner</label>--}}
{{--                    </p>--}}
                </div>

                <div class="firstColumn">
                    <div class="form-group input_wrap w-100">
                        <input class="inputField2" id="first_name" value="{{ old('first_name') }}" name="first_name"
                            type="text" placeholder=" " required>
                        <label for="first_name">First Name*</label>
                        <p id="first_name_error" class="errorMessage"></p>
                        <x-input-error class="mt-2 text-red" :messages="$errors->get('first_name')" />
                    </div>

{{--                    <div class="form-group input_wrap w-100">--}}
{{--                        <input class="inputField2" id="middle_name" value="{{ old('middle_name') }}" name="middle_name"--}}
{{--                            type="text" placeholder=" ">--}}
{{--                        <label for="middle_name">Middle Name</label>--}}
{{--                        <p id="middle_name_error" class="errorMessage"></p>--}}
{{--                        <x-input-error class="mt-2 text-red" :messages="$errors->get('middle_name')" />--}}
{{--                    </div>--}}

                    <div class="form-group input_wrap w-100">
                        <input class="inputField2" id="last_name" value="{{ old('last_name') }}" name="last_name"
                            type="text" placeholder=" " required>
                        <label for="last_name">Last Name*</label>
                        <p id="last_name_error" class="errorMessage"></p>
                        <x-input-error class="mt-2 text-red" :messages="$errors->get('last_name')" />
                    </div>
                </div>

                <div class="secondColumn">
                    <div class="input_wrap w-100">
                        <select name="country_id" id="country" class="inputField2 cursor arrowPlace">
                            <option value="">Choose an Option</option>
                            @foreach ($countries as $item)
                                <option value="{{ $item->id }}" {{ old('country_id') == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                            @endforeach
                        </select>
                        <label for="country">Country</label>
                        <p id="country_error" class="errorMessage"></p>
                        <x-input-error class="mt-2 text-red" :messages="$errors->get('country')" />
                    </div>
                    <div class="input_wrap w-100">
                        <select name="state_id" id="state" class="inputField2 cursor arrowPlace">
                            <option value="">Choose an Option</option>
                        </select>
                        <label for="state">State</label>
                        <p id="state_error" class="errorMessage"></p>
                        <x-input-error class="mt-2 text-red" :messages="$errors->get('state')" />
                    </div>
                </div>

{{--                <div class="secondColumn">--}}
{{--                    <div class="form-group input_wrap w-100">--}}
{{--                        <input class="inputField2" id="city" value="{{ old('city') }}" name="city"--}}
{{--                            type="text">--}}
{{--                        <label for="city">City</label>--}}
{{--                        <p id="city_error" class="errorMessage"></p>--}}
{{--                        <x-input-error class="mt-2 text-red" :messages="$errors->get('city')" />--}}
{{--                    </div>--}}

{{--                    <div class="form-group input_wrap w-100">--}}
{{--                        <input class="inputField2" id="pincode" value="{{ old('pincode') }}" name="pincode"--}}
{{--                            type="text">--}}
{{--                        <label for="pincode">Pincode</label>--}}
{{--                        <p id="pincode_error" class="errorMessage"></p>--}}
{{--                        <x-input-error class="mt-2 text-red" :messages="$errors->get('pincode')" />--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="secondColumn">
                    <div class="form-group input_wrap w-100">
                        <input class="inputField2" id="address" value="{{ old('address') }}" name="address"
                            type="text">
                        <label for="address">Address</label>
                        <p id="address_error" class="errorMessage"></p>
                        <x-input-error class="mt-2 text-red" :messages="$errors->get('address')" />
                    </div>
                </div>

                <div class="secondColumn">
                    <div class="input_wrap w-100">
                        <div id="isodata" data-value="{{ old('iso2') ?? '' }}"></div>
                        <input type="hidden" id="iso2" name="iso2" value="{{ old('iso2') ?? '' }}" />
                        <input type="hidden" id="dialCode" name="dialCode" value="{{ old('dialCode') ?? '' }}" />
                        <input class="inputField2" id="mobile_number" placeholder="Mobile number" type="tel"
                               value="{{ old('mobile_number') }}" name="mobile_number" />
                        <p id="mobile_number_error" class="errorMessage"></p>
                        <x-input-error class="mt-2 text-red" :messages="$errors->get('mobile_number')" />
                    </div>

                    <div class="form-group input_wrap w-100">
                        <input class="inputField2" value="{{ old('email') }}" name="email" id="email"
                            type="email" autocomplete="off" required>
                        <label for="email">Email*</label>
                        <p id="email_error" class="errorMessage"></p>
                        <x-input-error class="mt-2 text-red" :messages="$errors->get('email')" />
                    </div>

                </div>

                <div class="firstColumn">
                    <div class="form-group input_wrap w-100 showPassword">
                        <input class="inputField" name="password" id="password" type="password"
                            autocomplete="new-password" required>
                        <label for="password">Password*</label>
                        <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password"></span>
                        <p id="password_error" class="errorMessage"></p>
                        <x-input-error class="mt-2 text-red" :messages="$errors->get('password')" />
                    </div>

                    <div class="form-group input_wrap w-100 showPassword">
                        <input class="inputField" id="password_confirmation"
                            value="{{ old('password_confirmation') }}" name="password_confirmation" type="password"
                            autocomplete="new-password" required>
                        <label for="password_confirmation">Confirm Password*</label>
                        <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password"></span>
                        <p id="password_confirmation_error" class="errorMessage"></p>
                        <x-input-error class="mt-2 text-red" :messages="$errors->get('password_confirmation')" />
                    </div>

                    <div class="secondColumn">
                        <div class="form-group input_wrap w-100">
                            <input type="text" name="captcha" id="captcha" class="inputField2" required>
                            <label for="address">What is {{ session('captcha_question') }}? (captcha)</label>
                            <p id="captcha_error" class="errorMessage"></p>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('captcha')" />
                        </div>
                    </div>
                </div>


                <div class="btns">
                    <button type="submit" id='validate' class="loginBtn">
                        <span class="buttonText">Create Account</span>
                    </button>
                    <p class="signupLink">Already a member?
                        <a class="createAccTxt" href="{{ route('customer.login') }}">Login</a>
                    </p>
                </div>

            </form>
        </div>
    </div>
</x-customer-auth>

<script>
    $(document).ready(function() {
        // When the country changes, fetch states
        $('#country').on('change', function() {
            const countryId = $(this).val();
            const selectedState = '{{ old('state_id') }}'; // Get the old selected state
            getStates(countryId, selectedState); // Pass the old selected state
        });

        // If the country is already selected when the page loads, load states
        const initialCountryId = $('#country').val();
        if (initialCountryId) {
            const selectedState = '{{ old('state_id') }}'; // Get the old selected state
            getStates(initialCountryId, selectedState); // Pass the old selected state
        }
    });

    document.addEventListener("DOMContentLoaded", function() {
        // Get the button and spinner elements
        const submitButton = document.getElementById('validate');
        const spinner = document.getElementById('loading-spinner');
        const buttonText = submitButton.querySelector('.buttonText');

        submitButton.addEventListener('click', function(e) {
            e.preventDefault();  // Prevent the form from submitting immediately

            // Disable the submit button and show the spinner
            submitButton.disabled = true;
            buttonText.textContent = 'Processing...'; // Change button text
            // Delay the form submission to allow UI updates
            setTimeout(function() {
                // Submit the form after a brief delay
                submitButton.closest('form').submit();
            }, 200); // Delay of 500ms (you can adjust this if needed)
        });
    });
</script>

