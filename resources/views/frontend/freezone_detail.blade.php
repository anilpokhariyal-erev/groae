<x-website-layout>
    @section('js-imports')
        <script src="{{ secure_asset('js/website/freezone_detail.js') }}" crossorigin="anonymous"></script>
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
                                <img src="{{ secure_asset('images/calculator-minimalistic-svgrepo-com.png') }}"
                                    alt="" />Calculate Cost</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Banner -->
@include('frontend.components.offers')

</x-website-layout>
