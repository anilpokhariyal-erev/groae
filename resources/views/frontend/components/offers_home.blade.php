<section>
    <div class="container" style="position: relative; z-index:0; margin-top: 150px;">
        @if($offer)
        @foreach($offer as $offer_val)
            <div class="businessIncorpContainer" style="margin-top: 50px;">
                <div>
                    <img src="{{ $offer_val->image ? Storage::url($offer_val->image) : asset('images/placeholder.png') }}"
                         class="aboutImageBannr" alt="">
                </div>
                <div class="sliderContent">
                    <h2 class="sliderInnrHeading">{{ $offer_val->title }}</h2>
                    <div class="cutoutDiv">
                        <img class="cutoutTxt" src="{{ asset('images/cutout.png') }}" alt="">
                        <h3 class="offTxt">{{ $offer_val->discount }}% Off</h3>
                    </div>
                    <h4 class="amountTitle">Starting From <span>AED
                                {{ $offer_val->freezone->min_price ?? 'N/A' }}</span></h4>
                    {{-- <button class="KnowMoreBtn"> <a href="#">Know More</a></button> --}}
                </div>
            </div>
        @endforeach
        @else
            <p>No offers available at the moment.</p>
        @endif
    </div>
</section>
