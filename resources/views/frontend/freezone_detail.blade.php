<x-website-layout>
    @section('js-imports')
        <script src="{{ asset('js/website/freezone_detail.js') }}" crossorigin="anonymous"></script>
    @endsection
    <!-- About Us Container -->
    <div class="aboutHeaderContainer">
        <div class="detailBannr">
            <img class="detailBannrImg"
                src='{{ $freezone_detail->logo ? Storage::url($freezone_detail->logo) : asset('images/placeholder.png') }}'
                alt="">
            <!-- <img class="detailBannrImg" src="{{ asset('images/detail_bannr.png') }}" alt="">-->
            <div class="detailInnrWrappr">
                <div class="container">
                    <div class="backBtn">
                        <a class="backAnchor" href="{{ route('explore-freezone') }}"><img
                                src="{{ asset('images/cheveron-right.png') }}" alt=""></a>
                        <h2 class="backTxt">Back</h2>
                    </div>
                    <h3 class="bannrTxt">{{ ucwords($freezone_detail->name) }}</h3>
                    <div class="bookBtns">
                        <button class="consultationBtn">
                            <a href="{{ route('contact-us.index') }}">Book Consultation</a>
                        </button>
                        <button class="calculateCostBtn">
                            <a
                                href="{{ route('calculate-licensecosts.index', ['freezone' => $freezone_detail->uuid]) }}">
                                <img src="{{ asset('images/calculator-minimalistic-svgrepo-com.png') }}"
                                    alt="" />Calculate Cost</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Banner -->
    <section>
        <div class="container" style="position: relative; z-index:0">
            <div>
                @if (count($freezone_detail->offers))
                    <div class="businessIncorpContainer" style="margin-top: 50px;">
                        <div>
                            <img src="{{ $freezone_detail->offers[0]->image ? Storage::url($freezone_detail->offers[0]->image) : asset('images/placeholder.png') }}"
                                class="aboutImageBannr" alt="">
                        </div>
                        <div class="sliderContent">
                            <h2 class="sliderInnrHeading">{{ $freezone_detail->offers[0]->title }}</h2>
                            <div class="cutoutDiv">
                                <img class="cutoutTxt" src="{{ asset('images/cutout.png') }}" alt="">
                                <h3 class="offTxt">{{ $freezone_detail->offers[0]->discount }}% Off</h3>
                            </div>
                            <h4 class="amountTitle">Starting From <span>AED
                                    {{ $freezone_detail->offers[0]->freezone->min_price }}</span></h4>
                            {{-- <button class="KnowMoreBtn"> <a href="#">Know More</a></button> --}}
                        </div>
                    </div>
                @endif
                <div class="settingList listScroll">
                    <img class="preImg" src="{{asset('images/previous-arrow.png')}}" alt="">
                    <ul class="settingListInnr scrollbar" id="scrollbar">
                        @if (count($freezone_detail->freezone_pages) > 0)
                            @foreach ($freezone_detail->freezone_pages as $page)
                                <li class="listTerms scrollbar-item" data-item-id="{{ $page->slug }}">
                                    <a class="listItemsHeading"
                                        href="{{ route('freezone-detail', ['name' => $page->slug, 'slug' => $freezone_detail->slug]) }}">{{ $page->title }}</a>
                                </li>
                            @endforeach
                        @else
                            <li class="listTerms">
                                <a class="listItemsHeading"
                                    href="{{ route('freezone-detail', ['slug' => $freezone_detail->slug]) }}">About
                                    Freezone</a>
                            </li>
                        @endif
                    </ul>
                    <img class="nxtImg" src="{{asset('images/next-arrow.png')}}" alt="">
                </div>
                <div class="detailContent">
                    @if ($freezone_page)
                        <div class="detailHeading">
                            <h3> {{ $freezone_page->title }}</h3>
                        </div>

                        <div class="detailContntInnr">
                            {!! $freezone_page->content !!}
                        </div>
                    @endif
                </div>
                <!--<div class="imageContainer">
                        <img src="{{ asset('images/about-image.png') }}" alt="">
                    </div> -->

            </div>

            @if ($freezone_page->file)
                <div class="downloadBtn">
                    <a href="#" target="_blank">
                        <img src="{{ asset('images/pdf_image.png') }}" alt="" />
                        <h3>Download Now</h3>
                    </a>
                </div>
            @endif
            <div class="compareIconWrapper">
                <a href="{{ route('explore-freezone', ['ref' => $freezone_detail->uuid]) }}">
                    <img src="{{ asset('images/compare-icon.png') }}" alt="">
                    <h3>Compare</h3>
                </a>
            </div>
        </div>
    </section>

</x-website-layout>
