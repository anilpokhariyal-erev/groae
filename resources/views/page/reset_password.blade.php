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
                        <h1 class="loginTxt">Reset Password</h1>
                        <p class="detailTxt">Please enter the new password </p>
                        <form id="signupFormItems" class="signupFormItems">

                            <div class="form-group input_wrap showPassword">
                                <input class="inputField" id="password" type="password" placeholder=" " required>
                                <label for="password">
                                    New Password
                                </label>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password"></span>

                            </div>
                            <div class="form-group input_wrap showPassword">
                                <input class="inputField" id="ConfirmPassword" type="password" placeholder=" " required>
                                <label for="password">
                                    Confirm Password
                                </label>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password"></span>
                                <p id="passwordError" class="errorMessage"></p>
                            </div>
                            <div class="btns">
                                <button type="submit" id='validate' class="loginBtn">
                                    <span class="buttonText">Submit</span>
                                </button>
                                <p class="signupLink">Back to
                                    <a class="createAccTxt" href="{{route('customer.login')}}">Login</a>
                                </p>
                            </div>
                        </form>
                        <!-- <div class="btns">
                            <button type="submit" class="loginBtn">
                                <span class="buttonText">Submit</span>
                            </button>
                            <p class="signupLink">Back to
                                <a class="createAccTxt" href="#">Login</a>
                            </p>
                        </div> -->
                        <div class="passwordDetails">
                            <ul class="passwordList">
                                <li class="passwordInnrList">Password Strength: <span>Strong</span></li>
                                <li class="passwordInnrList">Password should be minimum 6 characters</li>
                                <li class="passwordInnrList">Include one uppercase letter</li>
                                <li class="passwordInnrList">Include lowercase letter, and number</li>
                            </ul>
                        </div>
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
</x-website-layout>