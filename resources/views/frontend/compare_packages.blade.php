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
                        @foreach ($packages as $package)
                            <div class="compareTableColumnInnr-2">
                                <div class="{{ $package->title ? 'selectsecondColumn' : 'selectFirstColumn' }}">
                                    <ul>
                                        <h3 class="{{ $package->title ? 'selectClr' : 'usersName' }}">
                                        {{ $package->freezone->name }}</h3>
                                        <div class="userSubList">
                                            <!-- Loop through attributes instead of packageLines -->
                                            @foreach ($attributes as $attribute)
                                                @php
                                                    // Find the matching package line for this attribute
                                                    $line = $package->packageLines->firstWhere('attribute_id', $attribute->id);
                                                @endphp
                                                
                                                <li class="userList {{ $line ? 'whiteTxt' : '' }}">
                                                    <p>
                                                        <!-- Display the attribute option value or 'None' if not available -->
                                                        {{ $line ? $line->attributeOption->value : '-' }}
                                                    </p>
                                                </li>
                                            @endforeach
                                        </div>
                                    </ul>
                                </div>

                                <div class="cutIconDiv" id="{{ $package->id }}">
                                    <img src="{{ asset('images/cut-icon.png') }}" alt="">
                                </div>
                                <div class="compareSecondColumn">
                                    <div class="columnInnr1">
                                        <img class="itemLogo"
                                            src="{{ $package->freezone->logo ? Storage::url($package->freezone->logo) : asset('images/placeholder.png') }}"
                                            alt="">
                                        <h3 class="usersName">
                                            <p>{{ $package->freezone->name }}</p>
                                        </h3>
                                    </div>
                                    <p class="rupeesTxt">Starting from <br>{{ $package->currency }}  {{ $package->price }}* </p>
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
