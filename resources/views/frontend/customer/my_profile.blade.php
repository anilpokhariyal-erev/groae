<x-website-layout>
    @section('js-imports')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    @endsection
    <section>
        <div class="container">
            <div class="myProfileContainer">
                <div class="backBtn">
                    <a class="backAnchor" href="{{ url()->previous() }}"><img
                            src="{{ asset('images/cheveron-right.png') }}" alt="">
                    <h2 class="backTxt">Back</h2>
                    </a>
                </div>
                <div class="topHeading">
                    <h2 class="trendTxt">My Account</h2>
                </div>

                <div class="profileWrapper">
                    @include('frontend.components.profile_sidebar')
                    <div class="profileDetailWrapper">
                        <form class="signupFormItems" id="profileUpdateFormItems" style="margin-top: 0px;"
                            method="post" action="{{ route('customer.profile.update') }}" novalidate>
                            @csrf
                            @method('patch')
                            <div class="firstColumn">
                                <div class="form-group input_wrap w-100">
                                    <input class="inputField2" id="first_name" value="{{ $customer->first_name }}"
                                        name="first_name" type="text" placeholder="" required>
                                    <label for="first_name">Full Name*</label>
                                    <p id="first_name_error" class="errorMessage"></p>
                                    <x-input-error class="mt-2 text-red" :messages="$errors->get('first_name')" />
                                </div>
                                <div class="form-group input_wrap w-100">
                                    <input class="inputField2" id="middle_name" value="{{ $customer->middle_name }}"
                                        name="middle_name" type="text" placeholder="">
                                    <label for="middle_name">Middle Name</label>
                                    <p id="middle_name_error" class="errorMessage"></p>
                                    <x-input-error class="mt-2 text-red" :messages="$errors->get('middle_name')" />
                                </div>
                                <div class="form-group input_wrap w-100">
                                    <input class="inputField2" id="last_name" value="{{ $customer->last_name }}"
                                        name="last_name" type="text" placeholder="" required>
                                    <label for="last_name">Last Name*</label>
                                    <p id="last_name_error" class="errorMessage"></p>
                                    <x-input-error class="mt-2 text-red" :messages="$errors->get('last_name')" />
                                </div>
                            </div>
                            <div class="secondColumn">
                                <div class="form-group input_wrap w-100">
                                    <input class="inputField2" value="{{ $customer->email }}" name="email"
                                        id="email" type="text" placeholder="" required readonly>
                                    <label for="email">Email*</label>
                                    <p id="email_error" class="errorMessage"></p>
                                    <x-input-error class="mt-2 text-red" :messages="$errors->get('email')" />
                                </div>
                                <div class="input_wrap w-100">
                                    <div id="isodata"
                                        data-value="{{ isset($customer->iso2) ? $customer->iso2 : '' }}">
                                    </div>
                                    <input type="hidden" id="iso2" name="iso2" value="{{ $customer->iso2 }}" />
                                    <input type="hidden" id="dialCode" name="dialCode"
                                        value="{{ $customer->dialCode }}" />
                                    <input class="inputField2" id="mobile_number" placeholder="Mobile number*"
                                        type="tel" value="{{ $customer->mobile_number }}" name="mobile_number"
                                        placeholder="" required />
                                    <p id="mobile_number_error" class="errorMessage"></p>
                                    <x-input-error class="mt-2 text-red" :messages="$errors->get('mobile_number')" />
                                </div>
                            </div>
                            <div class="secondColumn">
                                <div class="input_wrap w-100">
                                    <select name="country_id" id="country" class="inputField2 cursor arrowPlace">
                                        <option value="">Choose an Option</option>
                                        @foreach ($countries as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $customer->country_id == $item->id ? 'selected' : '' }}>
                                                {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    <label for="country">Country</label>
                                    <p id="country_error" class="errorMessage"></p>
                                    <x-input-error class="mt-2 text-red" :messages="$errors->get('country')" />
                                </div>
                                <div id="old_state_data" data-points="{{ $customer->state_id }}"
                                    style="display: none;"></div>
                                <div class="input_wrap w-100">
                                    <select name="state_id" id="state" class="inputField2 cursor arrowPlace">
                                        <option value="">Choose an Option</option>
                                    </select>
                                    <label for="state">State</label>
                                    <p id="state_error" class="errorMessage"></p>
                                    <x-input-error class="mt-2 text-red" :messages="$errors->get('state')" />
                                </div>
                            </div>
                            <div class="secondColumn">
                                <div class="form-group input_wrap w-100">
                                    <input class="inputField2" id="city" value="{{ $customer->city }}"
                                        name="city" type="text">
                                    <label for="city">City</label>
                                    <p id="city_error" class="errorMessage"></p>
                                    <x-input-error class="mt-2 text-red" :messages="$errors->get('city')" />
                                </div>

                                <div class="form-group input_wrap w-100">
                                    <input class="inputField2" id="pincode" value="{{ $customer->pincode }}"
                                        name="pincode" type="text">
                                    <label for="pincode">Pincode</label>
                                    <p id="pincode_error" class="errorMessage"></p>
                                    <x-input-error class="mt-2 text-red" :messages="$errors->get('pincode')" />
                                </div>
                            </div>
                            <div class="secondColumn">
                                <div class="form-group input_wrap w-100">
                                    <input class="inputField2" id="address" value="{{ $customer->address }}"
                                        name="address" type="text" placeholder="">
                                    <label for="address">Address</label>
                                    <p id="address_error" class="errorMessage"></p>
                                    <x-input-error class="mt-2 text-red" :messages="$errors->get('address')" />
                                </div>
                            </div>
                            <div class="secondColumn">
                                <div class="input_wrap w-100">
                                    <select name="business_interested" id="business_interested"
                                        class="inputField2 cursor arrowPlace" aria-placeholder=" ">
                                        <option value="">Choose an Option</option>
                                        <option {{ $customer->business_interested == 'Retail' ? 'selected' : '' }}>
                                            Retail</option>
                                        <option
                                            {{ $customer->business_interested == 'Hospitality' ? 'selected' : '' }}>
                                            Hospitality</option>
                                        <option {{ $customer->business_interested == 'Technology' ? 'selected' : '' }}>
                                            Technology</option>
                                        <option {{ $customer->business_interested == 'Finance' ? 'selected' : '' }}>
                                            Finance</option>
                                        <option {{ $customer->business_interested == 'Healthcare' ? 'selected' : '' }}>
                                            Healthcare</option>
                                        <option
                                            {{ $customer->business_interested == 'Real Estate' ? 'selected' : '' }}>
                                            Real Estate</option>
                                        <option
                                            {{ $customer->business_interested == 'Manufacturing' ? 'selected' : '' }}>
                                            Manufacturing</option>
                                        <option {{ $customer->business_interested == 'Education' ? 'selected' : '' }}>
                                            Education</option>
                                        <option
                                            {{ $customer->business_interested == 'Entertainment' ? 'selected' : '' }}>
                                            Entertainment</option>
                                        <option
                                            {{ $customer->business_interested == 'Food & Beverage' ? 'selected' : '' }}>
                                            Food & Beverage</option>
                                        <option {{ $customer->business_interested == 'Automotive' ? 'selected' : '' }}>
                                            Automotive</option>
                                        <option
                                            {{ $customer->business_interested == 'Construction' ? 'selected' : '' }}>
                                            Construction</option>
                                        <option {{ $customer->business_interested == 'Tourism' ? 'selected' : '' }}>
                                            Tourism</option>
                                        <option {{ $customer->business_interested == 'E-commerce' ? 'selected' : '' }}>
                                            E-commerce</option>
                                        <option {{ $customer->business_interested == 'Consulting' ? 'selected' : '' }}>
                                            Consulting</option>
                                        <option {{ $customer->business_interested == 'Energy' ? 'selected' : '' }}>
                                            Energy</option>
                                        <option {{ $customer->business_interested == 'Fashion' ? 'selected' : '' }}>
                                            Fashion</option>
                                        <option {{ $customer->business_interested == 'Media' ? 'selected' : '' }}>
                                            Media</option>
                                        <option
                                            {{ $customer->business_interested == 'Transportation' ? 'selected' : '' }}>
                                            Transportation</option>
                                        <option {{ $customer->business_interested == 'Non-profit' ? 'selected' : '' }}>
                                            Non-profit</option>
                                    </select>
                                    <label for="business_interested">Business Interested</label>
                                    <p id="business_interested_error" class="errorMessage"></p>
                                    <x-input-error class="mt-2 text-red" :messages="$errors->get('business_interested')" />
                                </div>
                            </div>
                            <div class="secondColumn" style="margin-top: 10px;">
                                <div class="form-group input_wrap w-100">
                                    <input class="inputField2" id="dob" name="dob" type="date"
                                        value="{{ $customer->dob }}" placeholder=" ">
                                    <label for="dob">Date of Birth</label>
                                    <p id="dob_error" class="errorMessage"></p>
                                    <x-input-error class="mt-2 text-red" :messages="$errors->get('dob')" />
                                </div>
                            </div>
                            <div class="profileBtns">
                                <button disabled class="closeAccBtn">Close Account</button>
                                <button type="submit" class="updateProfileBtn">Update Profile</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-website-layout>
