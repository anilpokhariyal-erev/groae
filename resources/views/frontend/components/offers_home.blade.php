<section style="position:relative; z-index:0">
    <div class="container" style="position: relative; z-index:0">
        <div id="homePageSlider" class="owl-carousel owl-theme">
            @if ($offer)
                @foreach ($offer as $offer_val)
                    <div class="item">
                        <div class="sliderContent" style="background-image:url('{{ $offer_val->image ? Storage::url($offer_val->image) : asset('images/placeholder.png') }}')">
                            <h2 class="sliderInnrHeading">{{ $offer_val->title }}</h2>
                            <div class="cutoutDiv">
                                <img class="cutoutTxt" src="{{ asset('images/cutout.png') }}" alt="Offer Badge">
                                <h3 class="offTxt">{{ $offer_val->discount }}% Off</h3>
                            </div>
                            <h4 class="amountTitle">Starting From <span>AED {{ $offer_val->freezone->min_price }}</span></h4>
                            <button class="KnowMoreBtn">
                                <a href="{{ route('freezone-detail', $offer_val->freezone->slug) }}" class="btn-link">Know More</a>
                            </button>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>
<style>
    .sliderContent {
        background-size: cover;
        background-position: center;
        height: 100%;
        display: flex; /* Flexbox for easier content centering */
        justify-content: center;
        overflow: hidden; /* Prevent any unwanted overflow */
    }

    .sliderContent::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.6); /* Black with opacity */
        z-index: 1; /* Place above the background but below content */
    }

    .sliderContent > * {
        position: relative; /* Ensure content is above the overlay */
        z-index: 2; /* Ensure content is above the overlay */
    }


</style>
