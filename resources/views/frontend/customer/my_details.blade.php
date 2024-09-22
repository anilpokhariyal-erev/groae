<x-website-layout>
    @section('js-imports')
        <script src="{{ asset('js/website/my_upload.js') }}" crossorigin="anonymous"></script>
    @endsection
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

                        @if (count($not_verified) === 0 && count($verified) === 0)
                            <span class="noRecordFound">
                                <h3 class="transactionIdTxt">
                                    Nothing to show here
                                </h3>
                            </span>
                        @endif

                        @if (count($verified))
                            <div class="addedPersonalDetails">
                                @foreach ($verified as $item)
                                    <div class="itemContainer">
                                        <h3 class="itemName">{{ $item->name }}:</h3>
                                        <div class="itemValueContainer">
                                            <h4 class="itemValue">{{ $item->value }}</h4>
                                            <img class="verifyImg" src="{{ asset('images/verify-image.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                        @if (count($not_verified) > 0)
                            <form class="signupFormItems" id="profileUpdateFormItems" style="margin-top: 20px;"
                                method="post" action="{{ route('customer.detail.update') }}" novalidate>
                                @csrf
                                @method('patch')
                                @for ($i = 0, $j = 0; $i < ceil(count($not_verified) / 2); $i++)
                                    <div class="secondColumn">
                                        <div class="form-group input_wrap w-100">
                                            <input class="inputField2" name="documents[][{{ $not_verified[$j]['id'] }}]"
                                                id="documents_{{ $not_verified[$j]['id'] }}" type="text"
                                                value="{{ $not_verified[$j]['value'] }}" placeholder="" required>
                                            <label
                                                for="documents_{{ $not_verified[$j]['id'] }}">{{ $not_verified[$j]['name'] }}*</label>
                                            <p id="documents_{{ $not_verified[$j++]['id'] }}_error"
                                                class="errorMessage">
                                            </p>
                                            <x-input-error class="mt-2 text-red" :messages="$errors->get('email')" />
                                        </div>
                                        @if (!($i + 1 == ceil(count($not_verified) / 2) && count($not_verified) % 2 == 1))
                                            <div class="form-group input_wrap w-100">
                                                <input class="inputField2"
                                                    name="documents[][{{ $not_verified[$j]['id'] }}]"
                                                    id="documents_{{ $not_verified[$j]['id'] }}" type="text"
                                                    value="{{ $not_verified[$j]['value'] }}" placeholder="" required>
                                                <label
                                                    for="documents_{{ $not_verified[$j]['id'] }}">{{ $not_verified[$j]['name'] }}*</label>
                                                <p id="documents_{{ $not_verified[$j++]['id'] }}_error"
                                                    class="errorMessage"></p>
                                                <x-input-error class="mt-2 text-red" :messages="$errors->get('email')" />
                                            </div>
                                        @endif
                                    </div>
                                @endfor
                                <div class="profileBtns">
                                    <button type="submit" class="updateProfileBtn">Submit Details</button>
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-website-layout>
