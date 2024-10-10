<section>
    <div class="container" style="position: relative; z-index:0; margin-top: 150px;">
        @if($offer)
            <div class="businessIncorpContainer" style="margin-top: 50px;">
                <div>
                    <img src="{{ $offer[0]->image ? Storage::url($offer[0]->image) : asset('images/placeholder.png') }}"
                         class="aboutImageBannr" alt="">
                </div>
                <div class="sliderContent">
                    <h2 class="sliderInnrHeading">{{ $offer[0]->title }}</h2>
                    <div class="cutoutDiv">
                        <img class="cutoutTxt" src="{{ asset('images/cutout.png') }}" alt="">
                        <h3 class="offTxt">{{ $offer[0]->discount }}% Off</h3>
                    </div>
                    <h4 class="amountTitle">Starting From <span>AED
                                {{ $offer[0]->freezone->min_price ?? 'N/A' }}</span></h4>
                    {{-- <button class="KnowMoreBtn"> <a href="#">Know More</a></button> --}}
                </div>
            </div>
        @else
            <p>No offers available at the moment.</p>
        @endif
    </div>
</section>
