<x-website-layout>
    <section class="center-section">
        <div class="container">
            <div class="myProfileContainer">
                <div class="backBtn">
                    <a class="backAnchor" href="{{ url()->previous() }}">
                        <img src="{{ asset('images/cheveron-right.png') }}" alt="">
                        <h2 class="backTxt">Back</h2>
                    </a>
                </div>
                <div class="topHeading">
                    <h2 class="trendTxt">My Account</h2>
                </div>

                <div class="profileWrapper">
                    @include('frontend.components.profile_sidebar')
                    @if ($customer->package_bookings->count() == 0)
                        <span class="noRecordFound">
                            <h3 class="transactionIdTxt">No Bookings found</h3>
                        </span>
                    @endif
                    <div class="profileDetailWrapper">
                        @foreach ($freezones as $item)
                            <div class="requestDocBox">
                                <h2>{{ $item->freezone->name }}</h2>
                                <h3>License Type: {{ $item->license->name }}</h3>
                                <h3>License Status: <span>{{ ucfirst($item->client_status) }}</span></h3>
                            </div>
                        @endforeach

                        @foreach ($package_bookings as $package_booking)
                            <div class="addPersonalDoc">
                                <h3>
                                    <span style="background:#304a6f;color:#fff;padding: 8px;border-radius: 3%;">
                                        {{$package_booking?->package?->freezone?->name}}
                                    </span><br><br>
                                    {{$package_booking->package->title}}<br>
                                    {{$package_booking->created_at->format('d/m/Y')}}
                                </h3>

                                <a href="{{ route('customer.view_invoice.view', ['id' => $package_booking->id]) }}">
                                    <span class="p-r-4">
                                        @if($package_booking->original_cost != $package_booking->final_cost && $package_booking->payment_status != 1)
                                            <del>{{$package_booking->package->currency}} {{$package_booking->original_cost}}</del><br>
                                        @endif
                                        {{$package_booking->package->currency}} {{$package_booking->final_cost}}
                                        <br>
                                        @if($package_booking->payment_status == 1)
                                            <em style="color:green">Invoice Paid</em>
                                        @else
                                            @if($package_booking->status == 0)
                                                <em style="color:gray">Cancelled/Rejected</em>
                                            @elseif($package_booking->status == 1)
                                                <em style="color:purple">Waiting for Invoice</em>
                                            @elseif($package_booking->status == 2)
                                                <em style="color:orange">Invoice Generated</em>
                                            @elseif($package_booking->status == 3)
                                                <em style="color:green">Refunded</em>
                                            @endif
                                        @endif
                                    </span>
                                    <img src="{{ secure_asset('images/cheveron-left.png') }}" alt="">
                                </a>
                            </div>
                        @endforeach
                            <!-- Pagination Links -->
                            <div class="pagination">
                                <!-- Pagination Links -->
                                @if (count($package_bookings))
                                    <div class="commonViewMoreBtn">
                                        <ul class="pager">
                                            <!-- "Previous" button -->
                                            <li>
                                                <a class="{{ $package_bookings->currentPage() > 1 ? 'neTxt' : 'preTxt' }}"
                                                   href="{{ $package_bookings->currentPage() > 1 ? $package_bookings->previousPageUrl() : 'javascript:void(0);' }}">
                                                    Previous
                                                </a>
                                            </li>
                                            <!-- "Next" button -->
                                            <li>
                                                <a class="{{ $package_bookings->hasMorePages() ? 'neTxt' : 'preTxt' }}"
                                                   href="{{ $package_bookings->hasMorePages() ? $package_bookings->nextPageUrl() : 'javascript:void(0);' }}">
                                                    Next
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                @endif

                            </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-website-layout>
