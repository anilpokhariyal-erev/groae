<x-website-layout>
    @section('js-imports')
        <script src="{{ asset('js/website/explore.js') }}" crossorigin="anonymous"></script>
    @endsection
    <div class="center-section">
        <section>
            <span style="display:hidden;" id="selected_freezone">
                {{ $selected }}
            </span>
            <div class="filterItemContainer">
                <div class="searchFields">
                    <form action="{{ route('explore-freezone') }}" id="searchForm" class="searchingForm">
                        <div class="formContainer">
                            <select name="license" class="selctBg">
                                <option value="" selected disabled>Choose License</option>
                                @foreach ($licenses as $item)
                                    <option {{ request('license') == $item ? 'selected' : '' }}>{{ $item }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="formContainer">
                            <select name="office" class="selctBg">
                                <option value="" selected disabled>Choose Office</option>
                                @foreach ($offices as $item)
                                    <option {{ request('office') == $item ? 'selected' : '' }}>{{ $item }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="formContainer">
                            <select name="visa_type" class="selctBg">
                                <option value="" selected disabled>Choose Visa Type</option>
                                @foreach ($visa_types as $item)
                                    <option {{ request('visa_type') == $item ? 'selected' : '' }}>{{ $item }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="formContainer">
                            <a class="searchAnchor" href="#"
                                onclick="event.preventDefault(); $('#searchForm').submit();"> <input type="submit"
                                    class="searchInput" value=""><img class="seatcIcon"
                                    src="{{ asset('images/seatc.png') }}" alt=""></a>
                        </div>
                        <div class="formContainer">
                            <img class="cursor" id="clearSearchBtn"
                                style="border-radius: 15px; background: rgba(99, 140, 192, 0.16);"
                                src="{{ asset('images/cross-icon.png') }}" alt="">
                        </div>
                    </form>
                </div>

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
                        @foreach ($freezones as $item)
                            <div class="searchBlogLayer">
                                <div class="firstLayer">
                                    <img src='{{ $item->logo ? Storage::url($item->logo) : asset('images/placeholder.png') }}'
                                        alt="">
                                </div>
                                <div class="secondLayer">
                                    <h3 class="blogHeading text-left">{{ $item->name }}</h3>
                                    <p class="blogDetail text-left">{{ $item->about }}</p>
                                    <h4 class="rateTxt">Starting @AED {{ $item->min_price }}</h4>
                                    <div class="compareSearchOption">
                                        <button class="viewDetailBtn" style="width: auto;"><a
                                                href="{{ route('freezone-detail', ['slug' => $item->slug]) }}"
                                                class="viewInnrTxt">View
                                                Details
                                                <img src="{{ asset('images/leftarrow.png') }}" alt="">
                                            </a>
                                        </button>
                                        <div class="compareInput">
                                            <label class="labelcontainer">Compare
                                                <input class="checkbox" id="freezone_{{ $item->uuid }}"
                                                    data-checkbox="{{ $item->uuid . '|' . $item->name . '|' . ($item->logo ? Storage::url($item->logo) : asset('images/placeholder.png')) }} "
                                                    type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
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
            </div>
        </section>

        <section>
            <div class="compareBox" id="dvPassport" style="display: none">
                <div class="compareSelctorContnt" id="txtPassportNumber"></div>
                <div class="compareNow">
                    <button type="submit" value="compare" class="comBtn"><a id="compareNowBtn">Compare Now</a></button>
                    <img class="cursor" style="border-radius: 15px; background: #FFF;" id="compareNowClear"
                        src="{{ asset('images/cross-icon.png') }}" alt="">
                </div>
            </div>
        </section>
    </div>
</x-website-layout>
