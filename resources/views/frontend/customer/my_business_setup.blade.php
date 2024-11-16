<x-website-layout>
    <section class="center-section">
        <div class="container">
            <div class="myProfileContainer">
                <div class="backBtn">
                    <a class="backAnchor" href="{{ url()->previous() }}"><img
                            src="{{ asset('images/cheveron-right.png') }}" alt=""></a>
                    <h2 class="backTxt">Back</h2>
                </div>
                <div class="topHeading">
                    <h2 class="trendTxt">My Account</h2>
                </div>

                <div class="profileWrapper">
                    @include('frontend.components.profile_sidebar')
                    <div class="profileDetailWrapper">
                        @foreach ($freezones as $item)
                            <div class="requestDocBox">
                                <h2>{{ $item->freezone->name }}</h2>
                                <h3>License Type: {{ $item->license->name }}</h3>
                                <h3>License Status: <span>{{ ucfirst($item->client_status) }}</span></h3>
                            </div>
                        @endforeach
                        
                        @foreach($customer->package_bookings as $package_booking)
                        <div class="addPersonalDoc">
                            <h3>{{$package_booking->package->title}}</h3>
                            <a href="{{ route('customer.upload.view') }}">
                                <img src="{{ secure_asset('images/cheveron-left.png') }}" alt="">
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-website-layout>
