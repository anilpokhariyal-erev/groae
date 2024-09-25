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
                                    <div
                                        class="{{ $package->title ? 'selectsecondColumn' : 'selectFirstColumn' }}">
                                        <ul>
                                            <h3 class="{{ $package->title ? 'selectClr' : 'usersName' }}">
                                               {{$package->freezone->name}} [{{ $package->title }}]</h3>
                                            <div class="userSubList">
                                            @foreach ($package->packageLines as $line)
                                                <li class="userList {{ $line->attribute_label ? 'whiteTxt' : '' }}">
                                                    <p>
                                                    {{ $line->attribute_label }}: {{ $line->attribute_option_id ?? 'Not available' }}
                                                    </p>
                                                </li>
                                            @endforeach
                                            </div>
                                        </ul>
                                    </div>

                                    <div class="cutIconDiv" id="{{ $package->id }}">
                                        <img src="{{ asset('images/cut-icon.png') }}" alt="">
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
