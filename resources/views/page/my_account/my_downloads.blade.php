<x-website-layout>
    <section>
        <div class="container">
            <div class="myProfileContainer">
                <div class="backBtn">
                    <a class="backAnchor" href="{{ url()->previous() }}"><img src="{{ secure_asset('images/cheveron-right.png') }}" alt=""></a>
                    <h2 class="backTxt">Back</h2>
                </div>
                <div class="topHeading">
                    <h2 class="trendTxt">My Account</h2>
                </div>

                <div class="profileWrapper">
                    @include('components.profile_sidebar')
                    <div class="profileDetailWrapper">

                        <div class="downloadBoxContainer">
                            <div class="myDownloadWrapper">
                                <div class="downloadBlock-1">
                                    <div class="downloadsubBlock-1">
                                        <img src="{{asset('images/pdf-download.png')}}" alt="">
                                    </div>
                                    <div class="downloadsubBlock-2">
                                        <h3>License Certificate.pdf</h3>
                                        <p>10 MB </p>
                                    </div>
                                </div>
                                <div class="uploadBlock-2">
                                    <a href="#"><img src="{{ secure_asset('images/downloads-whiteicon.png') }}" alt="">Upload Document</a>
                                </div>

                            </div>
                            <div class="myDownloadWrapper">
                                <div class="downloadBlock-1">
                                    <div class="downloadsubBlock-1">
                                        <img src="{{asset('images/pdf-download.png')}}" alt="">
                                    </div>
                                    <div class="downloadsubBlock-2">
                                        <h3>License Certificate.pdf</h3>
                                        <p>10 MB </p>
                                    </div>
                                </div>
                                <div class="uploadBlock-2">
                                    <a href="#"><img src="{{ secure_asset('images/downloads-whiteicon.png') }}" alt="">Upload Document</a>
                                </div>

                            </div>
                            <div class="myDownloadWrapper">
                                <div class="downloadBlock-1">
                                    <div class="downloadsubBlock-1">
                                        <img src="{{asset('images/pdf-download.png')}}" alt="">
                                    </div>
                                    <div class="downloadsubBlock-2">
                                        <h3>License Certificate.pdf</h3>
                                        <p>10 MB </p>
                                    </div>
                                </div>
                                <div class="uploadBlock-2">
                                    <a href="#"><img src="{{ secure_asset('images/downloads-whiteicon.png') }}" alt="">Upload Document</a>
                                </div>

                            </div>
                            <div class="myDownloadWrapper">
                                <div class="downloadBlock-1">
                                    <div class="downloadsubBlock-1">
                                        <img src="{{asset('images/pdf-download.png')}}" alt="">
                                    </div>
                                    <div class="downloadsubBlock-2">
                                        <h3>License Certificate.pdf</h3>
                                        <p>10 MB </p>
                                    </div>
                                </div>
                                <div class="uploadBlock-2">
                                    <a href="#"><img src="{{ secure_asset('images/downloads-whiteicon.png') }}" alt="">Upload Document</a>
                                </div>

                            </div>
                            <div class="myDownloadWrapper">
                                <div class="downloadBlock-1">
                                    <div class="downloadsubBlock-1">
                                        <img src="{{asset('images/pdf-download.png')}}" alt="">
                                    </div>
                                    <div class="downloadsubBlock-2">
                                        <h3>License Certificate.pdf</h3>
                                        <p>10 MB </p>
                                    </div>
                                </div>
                                <div class="uploadBlock-2">
                                    <a href="#"><img src="{{ secure_asset('images/downloads-whiteicon.png') }}" alt="">Upload Document</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-website-layout>