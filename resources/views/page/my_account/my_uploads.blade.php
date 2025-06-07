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
                        <div class="drivingLicenseUpload">
                            <div class="uploadBlock-1">
                                <h2>Driving License</h2>
                                <h3>Proof of Identity</h3>
                                <h4>Supported format: .Pdf/. Jpg/. word/ .Png/.doc</h4>
                                <a href="#">View Document History</a>
                            </div>
                            <div class="uploadBlock-2">
                                <a href="#"><img src="{{ secure_asset('images/upload-whiteicon.png') }}" alt="">Upload Document</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-website-layout>