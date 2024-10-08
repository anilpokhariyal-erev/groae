<x-website-layout>
    <!-- trending-freezone================ -->
    <section class="center-section">
        <div class="container">
            <div class="trendingFreezoneContainer">
                <div class="backBtn">
                    <a class="backAnchor" href="{{ url()->previous() }}"><img
                            src="{{ asset('images/cheveron-right.png') }}" alt=""></a>
                    <h2 class="backTxt">Back</h2>
                </div>
                <div class="topHeading">
                    <h2 class="trendTxt">Trending Freezones</h2>
                    <p class="trendDetails">Look up the Freezones that meets your needs </p>
                </div>

                <div class="trendingBlog">
                    @foreach ($freezones as $item)
                        <div class="blogLayer">
                            <div class="topLayer">
                                <img src='{{ $item->logo ? Storage::url($item->logo) : asset('images/placeholder.png') }}'
                                    alt="">
                            </div>
                            <div class="bottomLayer">
                                <h3 class="blogHeading">{{ $item->name }}</h3>
                                <p class="blogDetail">{!! Str::limit($item->about, 140, ' ...') !!}.</p>
                                <button class="viewDetailBtn"><a target="_blank"
                                        href="{{ route('freezone-detail', ['slug' => $item->slug]) }}"
                                        class="viewInnrTxt">View
                                        Details
                                        <img src="{{ secure_asset('images/leftarrow.png') }}" alt="">
                                    </a>
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Slider Container -->
    <section style="margin-top: 120px;">
        <div class="container" style="position: relative; z-index:0">
            <div id="homePageSlider" class="owl-carousel owl-theme">
                <div class="item">
                    <img class="sliderImg" src="{{ asset('images/slider-1.png') }}" />
                    <div class="sliderContent">
                        <h2 class="sliderInnrHeading">Get the Package of you choice
                            to setup your Business </h2>
                        <div class="cutoutDiv">
                            <img class="cutoutTxt" src="{{ asset('images/cutout.png') }}" alt="">
                            <h3 class="offTxt">20% Off</h3>
                        </div>
                        <h4 class="amountTitle">Starting From <span>AED 10,000</span></h4>
                        <button class="KnowMoreBtn"> <a href="#">Know More</a></button>
                    </div>
                </div>
                <div class="item">
                    <img class="sliderImg" src="{{ asset('images/slider-2.png') }}" />
                </div>
                <div class="item">
                    <img class="sliderImg" src="{{ asset('images/slider-3.png') }}" />
                </div>

            </div>
        </div>

    </section>
</x-website-layout>
