<x-website-layout>
    @section('js-imports')
        <script src="{{ secure_asset('js/website/explore.js') }}" crossorigin="anonymous"></script>
    @endsection
    <div class="center-section">
        <section style="padding-top: 4%;">
            <span style="display:hidden;" id="selected_freezone">
            </span>
            <div class="exploreItemsContainer">
                <div class="AIHeader">
                    <div class="hTxt">
                        <img src="{{ secure_asset('images/bot-2.png') }}" alt="">
                        <h3>Explore packages tailored to your preferred Freezone.</h3>
                    </div>
                </div>
                <div class="filterItemContainer" style="padding-top: 0px !important;">
                    <form method="GET" action="{{ route('freezone.packages.index') }}">
                        <select class="inputField2" id="freezone-select" name="uuid" onchange="this.form.submit()">
                            <option value="" disabled selected>Select a Freezone</option>
                            @foreach ($freezones as $freezone)
                                <option value="{{ $freezone->uuid }}" 
                                        {{ isset($selectedFreezone) && $selectedFreezone->uuid === $freezone->uuid ? 'selected' : '' }}>
                                    {{ $freezone->name }}
                                </option>
                            @endforeach
                        </select>
                    </form>
                </div>
                <div class="container">
                    <div class="searchInnrWrapper">
                        @if ($packages->isEmpty())
                            <p>No packages available for the selected Freezone.</p>
                        @else
                            @foreach ($packages as $item)
                                <div class="searchBlogLayer">
                                    <div class="firstLayer">
                                        <a target="_blank" href="{{ route('freezone-detail', ['slug' => $item->freezone->slug]) }}">
                                            <img src='{{ $item->freezone->logo ? Storage::url($item->freezone->logo) : asset('images/placeholder.png') }}' alt="">
                                        </a>
                                    </div>
                                    <div class="secondLayer">
                                        <a target="_blank" href="{{ route('freezone-detail', ['slug' => $item->freezone->slug]) }}">
                                            <h3 class="signupBtn">{{ $item->freezone->name }} </h3>
                                        </a>
                                        <h3 class="blogHeading text-left">{{ $item->title }}</h3>
                                        <p class="blogDetail text-left">{{ $item->description }}</p>
                                        <h4 class="rateTxt">Starting @AED {{ $item->price }}</h4>

                                        <!-- Display package attributes -->
{{--                                        <div class="packageAttributes">--}}
{{--                                            @if($item->packageLines && count($item->packageLines) > 0)--}}
{{--                                                <div style="margin-top: 5px">--}}
{{--                                                    @foreach ($item->packageLines as $key => $package_line)--}}
{{--                                                        @if($package_line->addon_cost == 0 and $package_line->status==1)--}}
{{--                                                            <div class="attrHead">{{ $package_line->attribute->label }}</div>--}}
{{--                                                            <div> - {{ $package_line->attributeOption->value }}</div>--}}
{{--                                                        @endif--}}
{{--                                                    @endforeach--}}
{{--                                                </div>--}}
{{--                                            @else--}}
{{--                                                <p>No attributes available.</p>--}}
{{--                                            @endif--}}
{{--                                        </div>--}}

                                        <div class="compareSearchOption">
                                            <button class="viewDetailBtn" style="width: auto;">
                                                <a href="{{ url('calculate-licensecosts?package_id=' . encrypt($item->id)) }}" class="viewInnrTxt">Customize
                                                    <img src="{{ secure_asset('images/leftarrow.png') }}" alt="">
                                                </a>
                                            </button>
                                            <div class="compareInput">
                                                <label class="labelcontainer">Compare
                                                    <input class="checkbox" id="package_{{ $item->id }}"
                                                           data-checkbox="{{ $item->id . '|' . $item->freezone->name . '<br>' . $item->title . '|' . ($item->freezone->logo ? Storage::url($item->freezone->logo) : asset('images/placeholder.png')) }}"
                                                           type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="compareBox" id="dvPassport" style="display: none">
                <div class="compareSelctorContnt" id="txtPassportNumber"></div>
                <div class="compareNow">
                    <button type="submit" value="compare" class="comBtn"><a id="compareNowBtn">Compare Now</a></button>
                    <img class="cursor" style="border-radius: 15px; background: #FFF;" id="compareNowClear" src="{{ asset('images/cross-icon.png') }}" alt="">
                </div>
            </div>
        </section>
    </div>
</x-website-layout>
