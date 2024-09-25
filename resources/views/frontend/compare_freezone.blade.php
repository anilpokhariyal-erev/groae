<x-website-layout>
    @section('js-imports')
        <script src="{{ asset('js/website/compare.js') }}" crossorigin="anonymous"></script>
    @endsection
    <section class="center-section">
        <div class="container">
            <div class="compareContainer">
                <div class="compareInnrWrapper">
                    <div class="compareTableColumn-1">
                    <ul>
                        <h3 class="detailheadingTxt">Features</h3>
                        @if($attributes->isNotEmpty())
                            @foreach($attributes as $attribute)
                                <li class="subHeadingTitle">
                                    <p class="subTxt">{{ $attribute->label }}</p> <!-- Assuming 'label' is the field for attribute name -->
                                </li>
                            @endforeach
                        @else
                            <li class="subHeadingTitle">
                                <p class="subTxt">No features available</p>
                            </li>
                        @endif
                    </ul>

                    </div>
                    <div class="compareTableColumn-2">
                        <div class="compTb1">
                            @foreach ($freezones as $item)
                                <div class="compareTableColumnInnr-2">
                                    <div
                                        class="{{ $item['cheapest_freezone'] ? 'selectsecondColumn' : 'selectFirstColumn' }}">
                                        <ul>
                                            <h3 class="{{ $item['cheapest_freezone'] ? 'selectClr' : 'usersName' }}">
                                                {{ $item['name'] }}</h3>
                                            <div class="userSubList">
                                                <li class="userList {{ $item['cheapest_freezone'] ? 'whiteTxt' : '' }}">
                                                    <p>{{ $item['license'] ?? 'NA' }}
                                                    </p>
                                                </li>
                                                <li class="userList {{ $item['cheapest_freezone'] ? 'whiteTxt' : '' }}">
                                                    <p>{{ $item['office'] ?? 'NA' }}
                                                    </p>
                                                </li>
                                                <li class="userList {{ $item['cheapest_freezone'] ? 'whiteTxt' : '' }}">
                                                    <p>{{ $item['package'] ?? 'NA' }}
                                                    </p>
                                                </li>
                                                <li
                                                    class="userList {{ $item['cheapest_freezone'] ? 'whiteTxt' : '' }}">
                                                    <p>Included</p>
                                                </li>
                                                <li
                                                    class="userList {{ $item['cheapest_freezone'] ? 'whiteTxt' : '' }}">
                                                    <p>{{ $item['visa_type'] }}</p>
                                                </li>
                                                <li
                                                    class="userList {{ $item['cheapest_freezone'] ? 'whiteTxt' : '' }}">
                                                    <p>{{ $item['visa_add_on'] }}</p>
                                                </li>
                                            </div>
                                        </ul>
                                    </div>

                                    <div class="cutIconDiv" id="{{ $item['uuid'] }}">
                                        <img src="{{ asset('images/cut-icon.png') }}" alt="">
                                    </div>
                                    <div class="compareSecondColumn">
                                        @if ($item['cheapest_freezone'])
                                            <!-- <img class="secondImg" src="http://127.0.0.1:8000/images/table-bg.png"
                                                alt=""> -->
                                        @endif
                                        <div class="{{ $item['cheapest_freezone'] ? 'columnInnr2' : 'columnInnr1' }}">
                                            <img class="itemLogo"
                                                src="{{ $item['logo'] ? Storage::url($item['logo']) : asset('images/placeholder.png') }}"
                                                alt="">
                                            <h3 class="{{ $item['cheapest_freezone'] ? 'whiteTxt' : '' }}">
                                                <p>{{ $item['name'] }}</p>
                                            </h3>
                                        </div>
                                        <p class="rupeesTxt">Starting from <br>AED {{ $item['price'] }}* /
                                            Monthly</p>
                                        @if ($item['cheapest_freezone'])
                                            <div class="tickIconDiv">
                                                <img src="http://127.0.0.1:8000/images/tick_icon.png" alt="">
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="compTb2">
                            <div class="bannerBtns" style="margin-top: 0px;">
                                <a class="bookConsBtn" href="{{ route('contact-us.index') }}">Book a
                                    Consultation</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</x-website-layout>
