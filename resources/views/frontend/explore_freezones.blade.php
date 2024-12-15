<x-website-layout>
    @section('js-imports')
        <script src="{{ secure_asset('js/website/explore.js') }}" crossorigin="anonymous"></script>
        <script src="{{ secure_asset('js/website/home.js') }}" crossorigin="anonymous"></script>
    @endsection
    <div class="center-section">
        <section>
            <span style="display:hidden;" id="selected_freezone">
                {{ $selected }}
            </span>
            <div class="filterItemContainer">
                @include('frontend.components.ai_search_filters', ['attributes' => $attributes])
            </div>
        </section>

        <section>
            <div class="exploreItemsContainer">
                <div class="AIHeader">
                    <div class="hTxt">
                        <img src="{{ secure_asset('images/bot-2.png') }}" alt="">
                        <h3>AI search to help you find the best Freezone.</h3>
                    </div>
                    <div class="pTxt">
                        <p>Find the Freezones that suit your requirements.</p>
                    </div>
                </div>
                <div class="container">
                    <div>
                        @if ($packages->isEmpty())
                            <p>No packages available based on the selected filters.</p>
                        @else
                            <section style="margin-top: -1%">
                                <div class="trendingContainer">
                                    <div class="container">
                                        <div class="trendingBlog">
                                            @foreach ($freezones as $item)
                                                    <div class="blogLayer  {{ $item->background_image_logo ? '' : 'new_layer' }}" style="background-image: url('{{ $item->background_image_logo ? Storage::url($item->background_image_logo) : asset('images/default-bg.jpg') }}'); background-color: {{ $item->background_image_logo ? 'rgba(0, 0, 0, 0.2)' : 'rgba(237, 245, 255, 0.7)' }};">

                                                        <div class="topLayer">
                                                            <a target="_blank" href="{{ route('freezone-detail', ['slug' => $item->slug]) }}" class="viewInnrTxt">
                                                            <img style="height: 174px" src='{{ $item->logo ? Storage::url($item->logo) : asset('images/placeholder.png') }}' alt="">
                                                            </a>
                                                        </div>
                                                        <div class="bottomLayer">
                                                            <a target="_blank" href="{{ route('freezone-detail', ['slug' => $item->slug]) }}" class="viewInnrTxt">
                                                                <h3 class="blogHeading">{{ $item->name }}</h3>
                                                            </a>
                                                            <p class="blogDetail">{{ $item->about }}</p>
                                                            <button class="viewDetailBtn">
                                                                <a target="_blank" href="{{ route('freezone-detail', ['slug' => $item->slug]) }}" class="viewInnrTxt">
                                                                    View Details
                                                                    <img src="{{ secure_asset('images/leftarrow.png') }}" alt="">
                                                                </a>
                                                                <a target="_blank" href="{{ route('freezone-packages', ['slug' => $item->slug]) }}" class="viewInnrTxt">
                                                                    View Packages
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
                        @endif
                    </div>

                </div>
                <div class="container" style="position: relative; z-index:0">
                    <div id="homePageSlider" class="owl-carousel owl-theme">
                        <div class="item">
                            <img class="sliderImg" src="{{ asset('images/slider-1.png') }}" />
                            <div class="sliderContent">
                                <h2 class="sliderInnrHeading">Get the Package of your choice to setup your Business</h2>
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
            </div>
        </section>

        <section>
            <div class="compareBox" id="dvPassport" style="display: none">
                <div class="compareSelctorContnt" id="txtPassportNumber"></div>
                <div class="compareNow">
                    <button type="submit" value="compare" class="comBtn"><a id="compareNowBtn">Compare Now</a></button>
                    <img class="cursor" style="border-radius: 15px; background: #FFF;" id="compareNowClear" src="{{ asset('images/cross-icon.png') }}" alt="">
                </div>
            </div>
        </section>
    </div>
</x-website-layout>
