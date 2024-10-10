<section>
    <div class="container" style="position: relative; z-index:0; margin-top: 150px;">
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
                        <img src="{{ secure_asset('images/about-image.png') }}" alt="">
                    </div> -->

        </div>

        @if ($freezone_page->file)
            <div class="downloadBtn">
                <a href="#" target="_blank">
                    <img src="{{ secure_asset('images/pdf_image.png') }}" alt="" />
                    <h3>Download Now</h3>
                </a>
            </div>
        @endif
        <div class="compareIconWrapper">
            <a href="{{ route('explore-freezone', ['ref' => $freezone_detail->id]) }}">
                <img src="{{ secure_asset('images/compare-icon.png') }}" alt="">
                <h3>Compare</h3>
            </a>
        </div>
    </div>
</section>