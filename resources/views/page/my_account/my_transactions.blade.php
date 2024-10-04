<x-website-layout>
    <section>
        <div class="container">
            <div class="myProfileContainer">
                <div class="backBtn">
                    <a class="backAnchor" href="{{ url()->previous() }}"><img src="{{ secure_asset('images/cheveron-right.png') }}" alt=""></a>
                    <h2 class="backTxt">Back</h2>
                </div>
                <div class="topHeading">
                    <h2 class="trendTxt">My Account</h2>
                </div>

                <div class="profileWrapper">
                    @include('components.profile_sidebar')
                    <div class="profileDetailWrapper">
                        <div class="transactionIdSearchWrap">
                            <div class="idInput">
                                <input type="search" placeholder="Search by service name & transaction ID">
                                <img class="inputSearchIcon" src="{{ asset('images/blue-search-icon.png') }}" alt="">
                            </div>
                            <div class="filterInput">
                                <img src="{{asset('images/sort_icon.png')}}" alt="">
                            </div>
                        </div>
                        <div class="transactionBody">
                            <div class="transactionBox">
                                <h3 class="transactionIdTxt">#886775467</h3>
                                <div class="transactionInnrBox1">
                                    <h2>Trade License Renewal</h2>
                                    <a href="#">View Details</a>
                                </div>
                                <div class="transactionInnrBox2">
                                    <div class="transacSubInnr">
                                        <h3>20 Nov 2023, 1:00 PM </h3>
                                        <p>Amount Paid: AED 200</p>
                                    </div>
                                    <div class="transacStatus">
                                        <p>Successful</p>
                                    </div>
                                </div>
                            </div>
                            <div class="transactionBox">
                                <h3 class="transactionIdTxt">#886775467</h3>
                                <div class="transactionInnrBox1">
                                    <h2>Trade License Renewal</h2>
                                    <a href="#">View Details</a>
                                </div>
                                <div class="transactionInnrBox2">
                                    <div class="transacSubInnr">
                                        <h3>20 Nov 2023, 1:00 PM </h3>
                                        <p>Amount Paid: AED 200</p>
                                    </div>
                                    <div class="transacStatus">
                                        <p>Successful</p>
                                    </div>
                                </div>
                            </div>
                            <div class="transactionBox">
                                <h3 class="transactionIdTxt">#886775467</h3>
                                <div class="transactionInnrBox1">
                                    <h2>Trade License Renewal</h2>
                                    <a href="#">View Details</a>
                                </div>
                                <div class="transactionInnrBox2">
                                    <div class="transacSubInnr">
                                        <h3>20 Nov 2023, 1:00 PM </h3>
                                        <p>Amount Paid: AED 200</p>
                                    </div>
                                    <div class="transacStatus">
                                        <p>Successful</p>
                                    </div>
                                </div>
                            </div>
                            <div class="transactionBox">
                                <h3 class="transactionIdTxt">#886775467</h3>
                                <div class="transactionInnrBox1">
                                    <h2>Trade License Renewal</h2>
                                    <a href="#">View Details</a>
                                </div>
                                <div class="transactionInnrBox2">
                                    <div class="transacSubInnr">
                                        <h3>20 Nov 2023, 1:00 PM </h3>
                                        <p>Amount Paid: AED 200</p>
                                    </div>
                                    <div class="transacStatus">
                                        <p class="failedStatus">Failed</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="loadMoreSec">
                            <button class="loadMoreBtn">
                                <a href="{{route('trending_freezone')}}">Load More</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-website-layout>