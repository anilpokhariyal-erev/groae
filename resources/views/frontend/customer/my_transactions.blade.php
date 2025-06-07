<x-website-layout>
    @php $search = request()->input('search'); @endphp
    <section>
        <div class="container">
            <div class="myProfileContainer">
                <div class="backBtn">
                    <a class="backAnchor" href="{{ url()->previous() }}"><img
                            src="{{ asset('images/cheveron-right.png') }}" alt="">
                    <h2 class="backTxt">Back</h2>
                    </a>
                </div>
                <div class="topHeading p-t-20">
                    <h2 class="trendTxt">My Account</h2>
                </div>

                <div class="profileWrapper">
                    @include('frontend.components.profile_sidebar')
                    <div class="profileDetailWrapper">
                        <div class="transactionIdSearchWrap">
                            <div class="idInput">
                                <form method="GET" action="">
                                    <input type="search" placeholder="Search by Transaction ID" name="search"
                                        value="{{ $search }}">
                                    <!-- <button type="submit" style="cursor: pointer;">
                                        <img class="inputSearchIcon" src="{{ asset('images/blue-search-icon.png') }}"
                                            alt="">
                                    </button> -->
                                    <button type="{{ $search ? 'button' : 'submit' }}" style="cursor: pointer;">
                                        <img class="{{ $search ? 'inputCloseIcon' : 'inputSearchIcon' }}"
                                            src="{{ $search ? asset('images/close-icon.png') : asset('images/blue-search-icon.png') }}"
                                            alt="">
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="transactionBody">
                            @if (count($transactions) == 0)
                                <span class="noRecordFound">
                                    <h3 class="transactionIdTxt">
                                        No Transatcion is found
                                    </h3>
                                </span>
                            @endif
                            @foreach ($transactions as $item)
                                <div class="transactionBox">
                                    <h3 class="transactionIdTxt" style="overflow-wrap: break-word;max-width: 90%">Transaction ID : {{ $item->transaction_id }}</h3>
                                    <div class="transactionInnrBox1">
                                        <h2>{{ $item->message }}</h2>
                                        {{-- <a href="#">View Details</a> --}}
                                    </div>
                                    <div class="transactionInnrBox2">
                                        <div class="transacSubInnr">
                                            <h3>{{ date('d M Y, g:i A', strtotime($item->created_at)) }}</h3>
                                            <p>Amount Paid: AED {{ $item->amount }}</p>
                                        </div>
                                        <div class="transacStatus">
                                            <p>{{ ucfirst($item->payment_status) }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        @if (count($transactions))
                            <div class="commonViewMoreBtn">
                                <ul class="pager">
                                    <li>
                                        <a class="{{ $transactions->currentPage() > 1 ? 'neTxt' : 'preTxt' }}"
                                            href="{{ $transactions->currentPage() > 1 ? $transactions->previousPageUrl() . ($search ? '&search=' . $search : '') : 'javascript:void(0);' }}">Previous</a>
                                    </li>
                                    <li>
                                        <a class="{{ $transactions->hasMorePages() ? 'neTxt' : 'preTxt' }}"
                                            href="{{ $transactions->hasMorePages() ? $transactions->nextPageUrl() . ($search ? '&search=' . $search : '') : 'javascript:void(0);' }}">Next</a>
                                    </li>
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-website-layout>
