<x-website-layout>
    @section('js-imports')
        <script src="{{ secure_asset('js/website/freezone.js') }}" crossorigin="anonymous"></script>
    @endsection
    <section class="center-section">
        <div class="costCalculateContainer">
            <div class="container">
                <div class="backBtn ">
                    <a class="backAnchor" href="{{ url()->previous() }}"><img
                            src="{{ asset('images/cheveron-right.png') }}" alt="">
                    <h2 class="backTxt">Back</h2>
                    </a>
                </div>
                <div class="topHeading">
                    <h2 class="trendTxt">Package Cost Estimator</h2>
                </div>
                <form id="costCalculatorForm" class="signupFormItems" method="post" data-token={{$token}}
                      action="{{ route('calculate-licensecosts.store') }}{{ isset($package->id) ? '?package_id=' . encrypt($package->id) : '' }}"  novalidate>
                    @csrf
                    <div class="secondColumn costCalculateForm">
                        <div class="input_wrap w-100">
                            <select required name="freezone" id="freezone" class="inputField2 cursor arrowPlace"
                                aria-placeholder=" ">
                                <option value="" disabled {{ $selected_freezone == '' ? 'selected' : '' }}>Choose
                                    an
                                    Option</option>
                                @foreach ($freezones as $item)
                                    <option value="{{ $item->uuid }}"
                                        {{ $selected_freezone == $item->uuid ? 'selected' : '' }}>{{ $item->name }}
                                    </option>
                                @endforeach
                            </select>
                            <label for="freezone">Freezone</label>
                            <p id="freezone_error" class="errorMessage"></p>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('freezone')" />
                        </div>
                    </div>

                    @foreach ($attributes as $attribute)
                        <div class="secondColumn costCalculateForm">
                            <div class="input_wrap w-100">
                                @if(!$attribute->allow_multiple)

                                    <x-input-error class="mt-2 text-red" :messages="$errors->get('attribute_' . $attribute->id)" />
                                    <input type="number"  name="attribute_{{ $attribute->id }}" value="" class="inputField2 cursor arrowPlace" id="{{ $attribute->name }}"  min="0">
                                    <label for="attribute_{{ $attribute->id }}">{{ $attribute->label }}</label>
                                    <p id="{{ $attribute->name }}_error" class="errorMessage"></p>
                                @else
                                <select required name="attribute_{{ $attribute->id }}" id="{{ $attribute->name }}"
                                    class="inputField2 cursor arrowPlace">
                                    <option data-val="0" value="" disabled {{ old('attribute_' . $attribute->id) == '' ? 'selected' : '' }}>
                                        Choose an Option
                                    </option>
                                    @foreach ($attribute->options as $option)
                                        {{-- Check if package is set and if the package contains this option --}}
                                        @php
                                            $selectedOption = isset($package) && $package->packageLines->contains(function ($line) use ($attribute, $option) {
                                                return $line->attribute_id == $attribute->id && $line->attribute_option_id == $option->id;
                                            });
                                        @endphp
                                        <option data-val="{{ $option->value }}" value="{{ $option->id }}"
                                            {{ $selectedOption || old('attribute_' . $attribute->id) == $option->id ? 'selected' : '' }}>
                                            {{ $option->value }}
                                        </option>
                                    @endforeach
                                </select>
                                <label for="attribute_{{ $attribute->id }}">{{ $attribute->label }}</label>
                                <p id="{{ $attribute->name }}_error" class="errorMessage"></p>
                                <x-input-error class="mt-2 text-red" :messages="$errors->get('attribute_' . $attribute->id)" />
                                @endif
                            </div>
                        </div>
                    @endforeach

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
