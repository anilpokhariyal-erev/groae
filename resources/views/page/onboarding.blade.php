<x-website-layout>
    <div class="onboardingContainer">
        <section class="leftBoard">
            <img src="{{ asset('images/modern-business-buildings-financial-district.png') }}" class="buildingImg">
            <div class="ImgInnrTxt">
                <img src="{{ asset('images/GroAE_Logo_Main.png') }}" width="100" class="mainLogoImg">
                <h3 class="grTxt">Grow with us</h3>
            </div>
        </section>
        <section class="rightBoard">
            <div class="signupInnerContent">
                <div class="signupItems">
                    <div>
                        <h1 class="loginTxt">Login</h1>
                        <p class="detailTxt">Enter details to access your account</p>

                        <!-- <form id="signupFormItems" class="signupFormItems"> -->
                        <form method="post" action="{{ route('customer.post.login') }}" class="signupFormItems">
                            @csrf

                            <div class="form-group input_wrap">
                                <input class="inputField" name="email" id="email" autocomplete="off" type="email" placeholder=" " required>
                                <label for="name">Email*</label>
                                <p id="emailError" class="errorMessage"></p>
                            </div>

                            <div class="form-group input_wrap showPassword ">
                                <input class="inputField" id="password" name="password" autocomplete="new-password" type="password" placeholder=" " required>
                                <label for="password">Password*</label>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password"></span>
                                <!-- <p id="passwordError" class="errorMessage"></p> -->
                                <x-input-error class="mt-2 text-red" :messages="$errors->get('email')" />
                            </div>
                            <a href="{{route('forgot_password')}}" class=" forgotPassTxt">Forgot Password ?</a>
                            <div class="btns">
                                <!-- <button type="submit" id='validate' class="loginBtn"> -->
                                <button type="submit" class="loginBtn">
                                    <span class="buttonText">Login</span>
                                </button>
                                <p class="signupLink">Don't have an account?
                                    <a class="createAccTxt" href="{{route('signup')}}">Create Account</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
                <footer class="loginFooter">
                    <a class="loginFooterItem" href="#">Terms &amp; conditions</a>
                    <p class="andItem">&</p>
                    <a class="loginFooterItem" href="#">Privacy Policy</a>

                </footer>
            </div>
        </section>
    </div>
    <!-- modal popup -->


    <!-- <div class="containerhoverlay">
        <div class="customInner">
            <div class="container_content">
                <div class="popupHeader">
                    <img src="{{asset('images/check-icon.png')}}" alt="" />
                </div>
                <div class="popupBody">
                    <div class="popupInnrContnt">
                        <h2 class="popHeadTxt">Congratulations</h2>
                        <p class="popDetailTxt">Your account created successfully.</p>
                        <div>
                            <a class="popupLogin" href="{{route('customer.login')}}">Login to you account</a>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div> -->
</x-website-layout>