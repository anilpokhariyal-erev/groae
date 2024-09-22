<x-website-layout>
    <section>
        <div class="container">
            <div class="myProfileContainer">
                <div class="backBtn">
                    <a class="backAnchor" href="{{ url()->previous() }}"><img src="{{ asset('images/cheveron-right.png') }}" alt=""></a>
                    <h2 class="backTxt">Back</h2>
                </div>
                <div class="topHeading">
                    <h2 class="trendTxt">My Account</h2>
                </div>

                <div class="profileWrapper">
                    @include('components.profile_sidebar')
                    <div class="profileDetailWrapper">
                        <form class="signupFormItems" id="profileUpdateFormItems" style="margin-top: 0px;" method="post" action="{{ route('customer.profile.update') }}" novalidate>
                            @csrf
                            @method('patch')
                            <div class="firstColumn">
                                <div class="form-group input_wrap w-100">
                                    <input class="inputField2" id="first_name" value="{{$customer->first_name}}" name="first_name" type="text" placeholder="" required>
                                    <label for="first_name">Full Name*</label>
                                    <p id="first_name_error" class="errorMessage"></p>
                                    <x-input-error class="mt-2 text-red" :messages="$errors->get('first_name')" />
                                </div>
                                <div class="form-group input_wrap w-100">
                                    <input class="inputField2" id="middle_name" value="{{$customer->middle_name}}" name="middle_name" type="text" placeholder="">
                                    <label for="middle_name">Middle Name</label>
                                    <p id="middle_name_error" class="errorMessage"></p>
                                    <x-input-error class="mt-2 text-red" :messages="$errors->get('middle_name')" />
                                </div>
                                <div class="form-group input_wrap w-100">
                                    <input class="inputField2" id="last_name" value="{{$customer->last_name}}" name="last_name" type="text" placeholder="" required>
                                    <label for="last_name">Last Name*</label>
                                    <p id="last_name_error" class="errorMessage"></p>
                                    <x-input-error class="mt-2 text-red" :messages="$errors->get('last_name')" />
                                </div>
                            </div>
                            <div class="secondColumn">
                                <div class="form-group input_wrap w-100">
                                    <input class="inputField2" value="{{$customer->email}}" name="email" id="email" type="text" placeholder="" required>
                                    <label for="email">Email*</label>
                                    <p id="email_error" class="errorMessage"></p>
                                    <x-input-error class="mt-2 text-red" :messages="$errors->get('email')" />
                                </div>
                                <div class="input_wrap w-100">
                                    <div id="isodata" data-value="{{ isset($customer->iso2) ? $customer->iso2: '' }}"></div>
                                    <input type="hidden" id="iso2" name="iso2" value="{{$customer->iso2}}" />
                                    <input type="hidden" id="dialCode" name="dialCode" value="{{$customer->dialCode}}" />
                                    <input class="inputField2" id="mobile_number" placeholder="Mobile number*" type="tel" value="{{$customer->mobile_number}}" name="mobile_number" placeholder="" required />
                                    <p id="mobile_number_error" class="errorMessage"></p>
                                    <x-input-error class="mt-2 text-red" :messages="$errors->get('mobile_number')" />
                                </div>
                            </div>
                            <div class="secondColumn">
                                <div class="form-group input_wrap w-100">
                                    <input class="inputField2" id="address" value="{{$customer->address}}" name="address" type="text" placeholder="">
                                    <label for="address">Address</label>
                                    <p id="address_error" class="errorMessage"></p>
                                    <x-input-error class="mt-2 text-red" :messages="$errors->get('address')" />
                                </div>
                            </div>
                            <div class="secondColumn">
                                <div class="input_wrap w-100">
                                    <select name="business_interested" id="business_interested" class="inputField2 cursor arrowPlace" aria-placeholder=" ">
                                        <option>Retail</option>
                                        <option>Hospitality</option>
                                        <option>Technology</option>
                                        <option>Finance</option>
                                        <option>Healthcare</option>
                                        <option>Real Estate</option>
                                        <option>Manufacturing</option>
                                        <option>Education</option>
                                        <option>Entertainment</option>
                                        <option>Food & Beverage</option>
                                        <option>Automotive</option>
                                        <option>Construction</option>
                                        <option>Tourism</option>
                                        <option>E-commerce</option>
                                        <option>Consulting</option>
                                        <option>Energy</option>
                                        <option>Fashion</option>
                                        <option>Media</option>
                                        <option>Transportation</option>
                                        <option>Non-profit</option>
                                    </select>
                                    <label for="business_interested">Business Interested</label>
                                    <p id="business_interested_error" class="errorMessage"></p>
                                    <x-input-error class="mt-2 text-red" :messages="$errors->get('business_interested')" />
                                </div>
                            </div>
                            <div class="secondColumn" style="margin-top: 10px;">
                                <div class="form-group input_wrap w-100">
                                    <input class="inputField2" id="dob" name="dob" type="date" value="{{$customer->dob}}" placeholder=" ">
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