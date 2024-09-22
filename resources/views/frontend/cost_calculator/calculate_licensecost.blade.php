<x-website-layout>
    @section('js-imports')
        <script src="{{ asset('js/website/freezone.js') }}" crossorigin="anonymous"></script>
    @endsection
    <section class="center-section">
        <div class="costCalculateContainer">
            <div class="container">
                <div class="backBtn ">
                    <a class="backAnchor" href="{{ url()->previous() }}"><img
                            src="{{ asset('images/cheveron-right.png') }}" alt=""></a>
                    <h2 class="backTxt">Back</h2>
                </div>
                <div class="topHeading">
                    <h2 class="trendTxt">Calculate License Cost</h2>
                </div>
                <form id="costCalculatorForm" class="signupFormItems" method="post"
                    action="{{ route('calculate-licensecosts.store') }}" novalidate>
                    @csrf
                    <div class="secondColumn costCalculateForm">
                        <div class="input_wrap w-100">
                            <select required name="freezone" id="freezone" class="inputField2 cursor arrowPlace"
                                aria-placeholder=" ">
                                <option value="" disabled {{ request('freezone') == '' ? 'selected' : '' }}>Choose
                                    an
                                    Option</option>
                                @foreach ($freezones as $item)
                                    <option value="{{ $item->uuid }}"
                                        {{ request('freezone') == $item->uuid ? 'selected' : '' }}>{{ $item->name }}
                                    </option>
                                @endforeach
                            </select>
                            <label for="freezone">Freezone</label>
                            <p id="freezone_error" class="errorMessage"></p>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('freezone')" />
                        </div>
                    </div>
                    <div class="secondColumn costCalculateForm">
                        <div class="input_wrap w-100">
                            <select required name="license" id="license" class="inputField2 cursor arrowPlace">
                                <option value="" disabled selected>Choose an Option</option>
                                @if (!empty($freezone_data))
                                    @foreach ($freezone_data['licenses'] as $license)
                                        <option value="{{ $license->id }}"
                                            {{ old('license') == $license->id ? 'selected' : '' }}>
                                            {{ $license->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                            <label for="license">License Type</label>
                            <p id="license_error" class="errorMessage"></p>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('license')" />
                        </div>
                    </div>
                    <div class="secondColumn costCalculateForm">
                        <div class="input_wrap w-100">
                            <select required name="visa_package" id="visa_package"
                                class="inputField2 cursor arrowPlace">
                                <option value="">Choose an Option</option>
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>4+</option>
                            </select>
                            <label for="visa_package">Visa Package</label>
                            <p id="visa_package_error" class="errorMessage"></p>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('visa_package')" />
                        </div>
                    </div>
                    <div class="secondColumn costCalculateForm">
                        <div class="input_wrap w-100">
                            <select required name="office" id="office" class="inputField2 cursor arrowPlace">
                                <option value="">Choose an Option</option>
                                @if (!empty($freezone_data))
                                    @foreach ($freezone_data['offices'] as $office)
                                        <option {{ old('office') == $office ? 'selected' : '' }}>{{ $office }}
                                        </option>
                                    @endforeach
                                @endif
                            </select>
                            <label for="office">Office</label>
                            <p id="office_error" class="errorMessage"></p>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('office')" />
                        </div>
                    </div>
                    <div class="secondColumn costCalculateForm">
                        <div class="input_wrap w-100">
                            <select required name="license_validity" id="license_validity"
                                class="inputField2 cursor arrowPlace">
                                <option value="">Choose an Option</option>
                                @if (!empty($freezone_data))
                                    @foreach ($freezone_data['license_validity'] as $item)
                                        <option value="{{ $item }}"
                                            {{ old('license_validity') == $item ? 'selected' : '' }}>
                                            {{ $item }}
                                            Year{{ $item > 1 ? 's' : '' }}</option>
                                    @endforeach
                                @endif
                            </select>
                            <label for="license_validity">License Validity</label>
                            <p id="license_validity_error" class="errorMessage"></p>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('license_validity')" />
                        </div>
                    </div>
                    <div class="secondColumn costCalculateForm">
                        <div class="input_wrap w-100">
                            <select required name="activity_group" id="activity_group" data-dependent="activities"
                                data-dependent-selection="activity_group_selection"
                                class="inputField2 cursor arrowPlace">
                                <option value="">Choose an Option</option>
                                @if (!empty($freezone_data))
                                    @foreach ($freezone_data['activity_groups'] as $item)
                                        <option value="{{ 'activity_group|' . $item->id . '|' . $item->name }}">
                                            {{ $item->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                            <label for="activity_group">Activity Group</label>
                            <p id="activity_group_error" class="errorMessage"></p>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('activity_group')" />
                        </div>
                    </div>
                    <div class="secondColumn costCalculateForm">
                        <div class="activityMultiSelctList" id="activity_group_selection_display">
                        </div>
                    </div>
                    <input type="hidden" id="activity_group_selection" name="activity_group_selection" />
                    <div class="secondColumn costCalculateForm">
                        <div class="input_wrap w-100">
                            <select required name="activities" id="activities"
                                data-dependent-selection="activities_selection" class="inputField2 cursor arrowPlace">
                                <option value="">Choose an Option</option>
                            </select>
                            <label for="activities">Activity</label>
                            <p id="activities_error" class="errorMessage"></p>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('activities')" />
                        </div>
                    </div>
                    <div class="secondColumn costCalculateForm">
                        <div class="activityMultiSelctList" id="activities_selection_display">
                        </div>
                    </div>
                    <input type="hidden" id="activities_selection" name="activities_selection" />

                    @if (!empty($freezone_data))
                        <div style="display: none;" id="visa_data">
                            {{ json_encode([
                                'visa_types' => $freezone_data['visa_types'],
                                'visa_add_ons' => $freezone_data['visa_add_ons'],
                                'locations' => $freezone_data['locations'],
                            ]) }}
                        </div>
                    @endif

                    <div id="visa_section"></div>

                    <div class="bannerBtns">
                        <button type="submit" class="bookConsBtn">Calculate Now</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script></script>
</x-website-layout>
