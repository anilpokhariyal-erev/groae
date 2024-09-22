<x-website-layout>
    <section>
        <div class="container">
            <div class="myProfileContainer">
                <div class="backBtn">
                    <a class="backAnchor" href="{{ url()->previous() }}"><img src="{{ asset('images/cheveron-right.png') }}" alt=""></a>
                    <h2 class="backTxt">Back</h2>
                </div>
                <div class="topHeading">
                    <h2 class="trendTxt">My Account</h2>
                </div>

                <div class="profileWrapper">
                    @include('components.profile_sidebar')
                    <div class="profileDetailWrapper">
                        <div class="requestDocBox">
                            <h2>Dubai Internet City (DIC) The Hub of Tech Innovation</h2>
                            <h3>License Type: Commercial</h3>
                            <a href="{{route('my_uploads')}}">Document Requested</a>
                        </div>
                        <div class="addPersonalDoc">
                            <h3>Add Personal Information</h3>
                            <img src="{{ asset('images/cheveron-left.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-website-layout>