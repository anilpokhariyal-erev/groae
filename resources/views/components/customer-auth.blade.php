<x-website-layout>
    <div class="onboardingContainer">
        <section class="leftBoard">
            <img src="{{ secure_asset('images/modern-business-buildings-financial-district.png') }}" class="buildingImg">
            <div class="ImgInnrTxt" id="ImgInnrTxt">
                <img src="{{ secure_asset('images/GroAE_Logo_Main.png') }}" width="100" class="mainLogoImg">
                <h3 class="grTxt">Grow with us</h3>
            </div>
        </section>
        <section class="rightBoard">
            {{ $slot }}
            <div class="signupInnerContent">
                <footer class="loginFooter">
                    <a class="loginFooterItem" href="#">Terms &amp; conditions</a>
                    <p class="andItem">&</p>
                    <a class="loginFooterItem" href="#">Privacy Policy</a>
                </footer>
            </div>
        </section>
    </div>
    <!-- modal popup -->

    {{-- TODO Not in use --}}

    <div class="containerhoverlay" style="display: none">
        <div class="customInner">
            <div class="container_content">
                <div class="popupHeader">
                    <img src="{{ secure_asset('images/check-icon.png') }}" alt="" />
                </div>
                <div class="popupBody">
                    <div class="popupInnrContnt">
                        <h2 class="popHeadTxt">Congratulations</h2>
                        <p class="popDetailTxt">Your account created successfully.</p>
                        <div>
                            <a class="popupLogin" href="{{ route('customer.login') }}">Login to you account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-website-layout>
