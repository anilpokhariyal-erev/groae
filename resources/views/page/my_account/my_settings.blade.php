<x-website-layout>
    <section>
        <div class="container">
            <div class="myProfileContainer">
                <div class="backBtn">
                    <a class="backAnchor" href="{{ url()->previous() }}"><img src="{{ secure_asset('images/cheveron-right.png') }}" alt=""></a>
                    <h2 class="backTxt">Back</h2>
                </div>
                <div class="topHeading p-t-20">
                    <h2 class="trendTxt">My Account</h2>
                </div>

                <div class="profileWrapper">
                    @include('components.profile_sidebar')
                    <div class="profileDetailWrapper">
                        <div class="addPersonalDoc">
                            <h3>Change Password</h3>
                            <img src="{{ secure_asset('images/cheveron-left.png') }}" alt="">
                        </div>

                        <form id="signupFormItems" class="signupFormItems">

                            <div class="form-group input_wrap showPassword">
                                <input class="inputField" style="max-width: 100%;" id="password" type="password" placeholder=" " required>
                                <label for="password">
                                    Old Password*
                                </label>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password"></span>

                            </div>
                            <div class="form-group input_wrap showPassword">
                                <input class="inputField" style="max-width: 100%;" id="password" type="password" placeholder=" " required>
                                <label for="password">
                                    New Password*
                                </label>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password"></span>

                            </div>
                            <div class="form-group input_wrap showPassword">
                                <input class="inputField" style="max-width: 100%;" id="ConfirmPassword" type="password" placeholder=" " required>
                                <label for="password">
                                    Confirm New Password*
                                </label>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password"></span>
                                <p id="passwordError" class="errorMessage"></p>
                            </div>

                            <div class="passwordDetails" style="max-width: 100%;">
                                <ul class="passwordList">
                                    <li class="passwordInnrList">
                                        <img class="greenTick" src="{{ asset('images/tick-mark.svg') }}" alt="">
                                        <h3>Password Strength: <span>Strong</span></h3>
                                    </li>
                                    <li class="passwordInnrList">
                                    <img class="greenTick" src="{{ asset('images/tick-mark.svg') }}" alt="">   
                                    <h3>Password should be minimum 6 characters</h3>
                                    </li>
                                    <li class="passwordInnrList">
                                    <img class="greenTick" src="{{ asset('images/tick-mark.svg') }}" alt="">
                                    <h3>Include one uppercase letter</h3>   
                                    </li>
                                    <li class="passwordInnrList">
                                    <img class="greenTick" src="{{ asset('images/tick-mark.svg') }}" alt="">
                                    <h3> Include lowercase letter, and number</h3>  
                                    </li>
                                    <li class="passwordInnrList">
                                    <img class="darkMark" src="{{ asset('images/dark-mark.svg') }}" alt="">
                                    <h3>Password not match with previous password</h3>
                                    </li>
                                </ul>
                            </div>
                            <div class="btns" style="justify-content: flex-end;">
                                <button type="submit" style="max-width: 183px;" id='validate' class="loginBtn mb-10-mobile">
                                    <span class="buttonText">Submit</span>
                                </button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <div class="containerhoverlay">
        <div class="customInner">
            <div class="container_content">
                <div class="popupHeader">
                    <img src="{{asset('images/check-icon.png')}}" alt="" />
                </div>
                <div class="popupBody">
                    <div class="popupInnrContnt">
                        <h2 class="popHeadTxt">Thank You!</h2>
                        <p class="popDetailTxt">Your Password change successfully. Please verify your account with Login. </p>
                    </div>

                </div>

            </div>

        </div>

    </div> -->
</x-website-layout>