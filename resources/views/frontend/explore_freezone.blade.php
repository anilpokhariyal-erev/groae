<x-website-layout>
    @section('js-imports')
        <script src="{{ asset('js/website/explore.js') }}" crossorigin="anonymous"></script>
        <script src="{{ asset('js/website/home.js') }}" crossorigin="anonymous"></script>
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
                        <img src="{{ asset('images/bot-2.png') }}" alt="">
                        <h3>AI search to help you find the best Freezone.</h3>
                    </div>
                    <div class="pTxt">
                        <p>Find the Freezones that suit your requirements.</p>
                    </div>
                </div>
                <div class="container">
                <div class="searchInnrWrapper">
                    @if ($packages->isEmpty())
                        <p>No packages available based on the selected filters.</p>
                    @else
                        @foreach ($packages as $item)
                            <div class="searchBlogLayer">
                                <div class="firstLayer">
                                    <img src='{{ $item->freezone->logo ? Storage::url($item->freezone->logo) : asset('images/placeholder.png') }}' alt="">
                                </div>
                                <div class="secondLayer">
                                    <h3 class="blogHeading text-left">{{ $item->freezone->name }}</h3>
                                    <p class="blogDetail text-left">{{ $item->description }}</p>
                                    <h4 class="rateTxt">Starting @AED {{ $item->price }}</h4>
                                    <div class="compareSearchOption">
                                        <button class="viewDetailBtn" style="width: auto;">
                                            <a href="{{ route('freezone-detail', ['slug' => $item->freezone->name]) }}" class="viewInnrTxt">View Details
                                                <img src="{{ asset('images/leftarrow.png') }}" alt="">
                                            </a>
                                        </button>
                                        <div class="compareInput">
                                            <label class="labelcontainer">Compare
                                                <input class="checkbox" id="package_{{ $item->id }}"
                                                    data-checkbox="{{ $item->id . '|' . $item->name . '|' . ($item->logo ? Storage::url($item->logo) : asset('images/placeholder.png')) }}"
                                                    type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
