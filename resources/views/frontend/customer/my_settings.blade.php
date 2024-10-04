<x-website-layout>
    <section>
        <div class="container">
            <div class="myProfileContainer">
                <div class="backBtn">
                    <a class="backAnchor" href="{{ url()->previous() }}"><img
                            src="{{ asset('images/cheveron-right.png') }}" alt=""></a>
                    <h2 class="backTxt">Back</h2>
                </div>
                <div class="topHeading">
                    <h2 class="trendTxt">My Account</h2>
                </div>
                <div class="profileWrapper">
                    @include('frontend.components.profile_sidebar')
                    <div class="profileDetailWrapper">
                        {{-- <div class="addPersonalDoc">
                            <h3>Change Password</h3>
                            <img src="{{ secure_asset('images/cheveron-left.png') }}" alt="">
                        </div> --}}

                        <form id="signupFormItems" style="margin-top: 0px;" class="signupFormItems" method="POST"
                            action="{{ route('customer.profile.updatepassword') }}" novalidate>
                            @csrf
                            @method('patch')
                            <div class="form-group input_wrap showPassword">
                                <input class="inputField" style="max-width: 100%;" id="old_password" type="password"
                                    required name="old_password" placeholder="" value="{{ old('old_password') }}">
                                <label for="old_password">
                                    Old Password*
                                </label>
                                <span toggle="#password-field"
                                    class="fa fa-fw fa-eye field_icon toggle-password"></span>
                                <p id="old_password_error" class="errorMessage"></p>
                                <x-input-error class="mt-2 text-red" :messages="$errors->get('old_password')" />

                            </div>
                            <div class="form-group input_wrap showPassword">
                                <input class="inputField" style="max-width: 100%;" type="password" required
                                    name="new_password" id="new_password" placeholder=""
                                    value="{{ old('new_password') }}">
                                <label for="new_password">
                                    New Password*
                                </label>
                                <span toggle="#password-field"
                                    class="fa fa-fw fa-eye field_icon toggle-password"></span>
                                <p id="new_password_error" class="errorMessage"></p>
                                <x-input-error class="mt-2 text-red" :messages="$errors->get('new_password')" />

                            </div>
                            <div class="form-group input_wrap showPassword">
                                <input class="inputField" style="max-width: 100%;" id="confirmed_new_password"
                                    type="password" required name="confirmed_new_password" placeholder=""
                                    value="{{ old('confirmed_new_password') }}">
                                <label for="confirmed_new_password">
                                    Confirm New Password*
                                </label>
                                <span toggle="#password-field"
                                    class="fa fa-fw fa-eye field_icon toggle-password"></span>
                                <p id="confirmed_new_password_error" class="errorMessage"></p>
                                <x-input-error class="mt-2 text-red" :messages="$errors->get('confirmed_new_password')" />
                            </div>
                            <div class="passwordDetails" style="max-width: 100%;">
                                <ul class="passwordList">
                                    <li class="passwordInnrList">Password Strength: <span
                                            id="strength-indicator"></span>
                                    </li>
                                    <li class="passwordInnrList">Password should be minimum 6 characters</li>
                                    <li class="passwordInnrList">Include one uppercase letter</li>
                                    <li class="passwordInnrList">Include lowercase letter, and number</li>
                                </ul>
                            </div>
                            <div class="btns" style="justify-content: flex-end;">
                                <button type="submit" style="max-width: 183px;" id='validate' class="loginBtn">
                                    <span class="buttonText">Submit</span>
                                </button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-website-layout>
