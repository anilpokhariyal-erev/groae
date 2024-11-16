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
                            <a href="{{ route('customer.view_invoice.view', ['id' => $package_booking->id]) }}">
                                <span class="p-r-4">
                                    @if($package_booking->original_cost!=$package_booking->final_cost)
                                    <del>{{$package_booking->package->currency}} {{$package_booking->original_cost}}</del><br>
                                    @endif
                                    {{$package_booking->package->currency}} {{$package_booking->final_cost}}
                                    <br>
                                    @if($package_booking->status == 0)
                                        <em style="color:red">Cancelled/Rejected</em>
                                    @elseif($package_booking->status == 1)
                                        Waiting for Invoice
                                    @elseif($package_booking->status == 2)
                                        Invoice Generated
                                    @endif
                                </span>
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
