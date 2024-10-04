<x-website-layout>
    <div class="onboardingContainer">
        <section class="leftBoard">
            <img src="{{ secure_asset('images/modern-business-buildings-financial-district.png') }}" class="buildingImg">
            <div class="ImgInnrTxt">
                <img src="{{ secure_asset('images/GroAE_Logo_Main.png') }}" width="100" class="mainLogoImg">
                <h3 class="grTxt">Grow with us</h3>
            </div>
        </section>
        <section class="rightBoard">
            <div class="signupInnerContent">
                <div class="signupItems">
                    <div>
                        <h1 class="loginTxt">Forgot Password</h1>
                        <p class="detailTxt">To reset your password, enter your registered email ID </p>
                        <form id="signupFormItems" class="signupFormItems">
                            <div class="form-group input_wrap">

                                <input class="inputField" id="email" type="email" placeholder=" " required>
                                <label for="name">
                                    Email:
                                </label>
                                <p id="emailError" class="errorMessage"></p>
                            </div>


                            <div class="btns">
                                <button type="submit" id='validate' class="loginBtn">
                                    <span class="buttonText">Send Verification Link</span>
                                </button>
                                <p class="signupLink">Back to
                                    <a class="createAccTxt" href="{{route('signup')}}">Create Account</a>
                                </p>
                            </div>
                        </form>
                        <!-- <div class="btns">
                            <button type="submit" class="loginBtn">
                                <span class="buttonText">Send Verification Link</span>
                            </button>
                            <p class="signupLink">Back to
                                <a class="createAccTxt" href="#">Login</a>
                            </p>
                        </div> -->

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