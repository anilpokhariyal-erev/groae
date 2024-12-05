<x-website-layout>
    @section('js-imports')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    @endsection
    <style>
             #successMessage {
                 color: green; /* Text color */
                 background-color: #d4edda; /* Light green background */
                 border: 1px solid #c3e6cb; /* Border color */
                 border-radius: 5px; /* Rounded corners */
                 padding: 10px 15px; /* Padding around the text */
                 font-size: 16px; /* Font size */
                 display: inline-block; /* Ensure it's displayed inline */
                 margin: 10px 0; /* Margin around the message */
             }
    </style>

        <!-- blog details sec -->
    <section class="center-section">
        <div class="blogDetailContainer">
            <div class="container">
                <div class="contactHeading">
                    <h1>Contact Us</h1>
                </div>
                <form class="signupFormItems contactFormItems" method="post" action="" novalidate>
                    @csrf
                    @if (session('success'))
                        <div class="text-success ml-2" id="successMessage" style="font-weight: 500; text-align:center;">
                            {!! session('success') !!}
                        </div>
                    @endif
                    <div class="form-group input_wrap w-100">
                        <input class="inputField2" id="first_name" name="first_name" type="text" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')"
                            required>
                        <label for="first_name">First Name*</label>
                        <p id="first_name_error" class="errorMessage"></p>
                        <x-input-error class="mt-2 text-red" :messages="$errors->get('first_name')" />
                    </div>
                    <div class="form-group input_wrap w-100">
                        <input class="inputField2" id="last_name" name="last_name" type="text" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')"
                            required>
                        <label for="last_name">Last Name*</label>
                        <p id="last_name_error" class="errorMessage"></p>
                        <x-input-error class="mt-2 text-red" :messages="$errors->get('last_name')" />
                    </div>
                    <div class="form-group input_wrap w-100">
                        <input class="inputField2" id="email" name="email" type="text" placeholder="" required>
                        <label for="email">Email*</label>
                        <p id="email_error" class="errorMessage"></p>
                        <x-input-error class="mt-2 text-red" :messages="$errors->get('email')" />
                    </div>
                    <div class="input_wrap w-100">
                        <div id="isodata" data-value=""></div>
                        <input type="hidden" id="iso2" name="iso2" />
                        <input type="hidden" id="dialCode" name="dialCode" />
                        <input class="inputField2" id="mobile_number" placeholder="Mobile number*" type="tel"
                            value="{{ old('mobile_number') }}" name="mobile_number" required />
                        <p id="mobile_number_error" class="errorMessage"></p>
                        <x-input-error class="mt-2 text-red" :messages="$errors->get('mobile_number')" />
                    </div>
                    <div class="input_wrap w-100">
                        <textarea class="inputField2" style=" resize: vertical;" type="tel" id="message" name="message" required></textarea>
                        <label for="message">Message*</label>
                        <p id="message_error" class="errorMessage"></p>
                        <x-input-error class="mt-2 text-red" :messages="$errors->get('message')" />
                    </div>
                    <div class="btns" style="justify-content: center;">
                        <button type="submit" style="max-width: 183px;" id='validate' class="loginBtn">
                            <span class="buttonText">Submit</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>




</x-website-layout>
