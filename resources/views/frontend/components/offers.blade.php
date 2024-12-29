<section>
    <div class="container">
        <div>
            @if (count($freezone_detail->offers))
                <div class="businessIncorpContainer" style="margin-top: 50px;">
                    <div>
                        <img src="{{ $freezone_detail->offers[0]->image ? Storage::url($freezone_detail->offers[0]->image) : asset('images/placeholder.png') }}"
                             class="aboutImageBannr" alt="">
                    </div>
                    <div class="sliderContentFreezoneDetails">
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
            <a href="{{ route('contact-us.index') }}">
                <h3>Book Consultation</h3>
            </a>
        </div>
    </div>
</section>