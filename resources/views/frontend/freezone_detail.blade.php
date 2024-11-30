<x-website-layout>
    @section('js-imports')
        <script src="{{ secure_asset('js/website/freezone_detail.js') }}" crossorigin="anonymous"></script>
    @endsection
    <style>
        .bannrTxt {
            display: flex;
            align-items: center; /* Center the text and logo vertically */
            justify-content: flex-start; /* Align text to the left, logo will follow */
            gap: 10px; /* Add a small space between the text and logo */
        }

        .bannrTxt .logo {
            display: inline-block; /* Ensure logo is an inline block element */
            margin-left: 10px; /* Optional: Space between text and logo */
        }

        .bannrTxt .logo img {
            max-height: 40px; /* Adjust the size of the logo */
            max-width: 100%; /* Ensure logo scales responsively */
        }
        .settingList.listScroll{
            padding-top: 8%;
        }
    </style>
    <!-- About Us Container -->
    <div class="aboutHeaderContainer">
        <div class="detailBannr">
            @if($freezone_detail->background_image)
            <img class="detailBannrImg"
                src='{{ Storage::url($freezone_detail->background_image) }}'
                alt="">
            @endif
            <!-- <img class="detailBannrImg" src="{{ asset('images/detail_bannr.png') }}" alt="">-->
            <div class="detailInnrWrappr">
                <div class="container">
                    <div class="backBtn">
                        <a class="backAnchor" href="{{ route('explore-freezone') }}"><img
                                src="{{ asset('images/cheveron-right.png') }}" alt="">
                        <h2 class="backTxt">Back</h2>
                        </a>
                    </div>
                    <h3 class="bannrTxt"> {{ ucwords($freezone_detail->name) }}
                        <div class="logo">
                        @if($freezone_detail->logo)
                            <img class=""
                                 src='{{ Storage::url($freezone_detail->logo) }}'
                                 alt="">
                        @endif  </div></h3>

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
