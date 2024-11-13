<x-website-layout>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    @section('js-imports')
        <script src="{{ secure_asset('js/website/freezone.js') }}" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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
                    <h3 style="text-align:center">
                        <span style="color:#304a6f">Package:</span> 
                        <strong>{{$package->title}}</strong>
                    </h3>
                    <h3 style="text-align:center">
                        <span style="color:#304a6f">Freezone:</span> 
                        <strong>{{$package->freezone->name}}</strong>
                    </h3>
                </div>
                <form id="costCalculatorForm" class="signupFormItems" method="post" data-token={{$token}}
                      action="{{ route('calculate-licensecosts.store') }}{{ isset($package->id) ? '?package_id=' . encrypt($package->id) : '' }}"  novalidate>
                    @csrf
                    <input type="hidden" name="freezone" id="freezone" value="{{$package->freezone->uuid}}">
                    <input type="hidden" name="package_id" id="package_id" value="{{$package->id}}">
                    @foreach ($attributes as $attribute)
                        <div class="secondColumn costCalculateForm">
                            <div class="input_wrap w-100">
                                @php
                                    $max_value = '';
                                    if(isset($attribute->packageAttributesCost) && (count($attribute->packageAttributesCost)>0))
                                    $max_value  = $attribute->packageAttributesCost[0]['max_allowed_qty']
                                @endphp
                                @if(!$attribute->allow_multiple)
                                    <x-input-error class="mt-2 text-red" :messages="$errors->get('attribute_' . $attribute->id)" />
                                    <input type="number"  name="package_lines[{{ $attribute->name }}]" value="" class="inputField2 cursor arrowPlace max_check" id="{{ $attribute->name }}" min="0" @if($max_value>0) data-max="{{$max_value}}" max="{{$max_value}}" @endif>
                                    <label for="package_lines[{{ $attribute->name }}]">{{ $attribute->label }}</label>
                                    <p id="{{ $attribute->name }}_error" class="errorMessage"></p>
                                @else
                                <select required name="package_lines[{{ $attribute->name }}]" id="{{ $attribute->name }}"
                                    class="inputField2 cursor arrowPlace">
                                    <option data-val="0" value="" disabled {{ old($attribute->name) == '' ? 'selected' : '' }}>
                                        Choose an Option
                                    </option>
                                    @foreach ($package->fetchPackageAttributes($attribute->id) as $option)
                                        @php
                                            $selectedOption = isset($package) && $package->packageLines->contains(function ($line) use ($attribute, $option) {
                                                return $line->attribute_id == $attribute->id && $line->attribute_option_id == $option->attributeOption->id;
                                            });
                                        @endphp
                                        <option data-val="{{ $option->attributeOption->value }}" value="{{ $option->attributeOption->id }}"
                                            {{ $selectedOption || old($attribute->name) == $option->attributeOption->id ? 'selected' : '' }}>
                                            {{ $option->attributeOption->value }}
                                        </option>
                                    @endforeach
                                </select>
                                <label for="package_lines[{{ $attribute->name }}]">{{ $attribute->label }}</label>
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
                                <option value="">Activity Group</option>
                                @if (!empty($freezone_data))
                                    @foreach ($freezone_data['activity_groups'] as $item)
                                        <option value="{{ 'activity_group|' . $item->id . '|' . $item->name }}">
                                            {{ $item->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                            <!-- <label for="activity_group">Activity Group</label> -->
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
                                <option value="">Activity</option>
                            </select>
                            <!-- <label for="activities">Activity</label> -->
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
    <script>

        $(document).ready(function(){
            $('#activity_group').select2();
            $('#activities').select2();
        });

        document.querySelectorAll('.max_check').forEach(function(input) {
            input.addEventListener('change', function() {
                const maxValue = parseInt(this.getAttribute('data-max'));
                const currentValue = parseInt(this.value);

                if (currentValue > maxValue) {
                    alert(`The maximum allowed value is ${maxValue}.`);
                    this.value = maxValue; // Optionally reset to max value
                }
            });
        });

    </script>
</x-website-layout>
