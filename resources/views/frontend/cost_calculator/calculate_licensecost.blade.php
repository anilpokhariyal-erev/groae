<x-website-layout>
<style>
        /* Adjust the select input fields to look good with Select2 */
        .select2-container--default .select2-selection--single {
            height: 40px;
            font-size: 16px;
            border-radius: 8px;
            padding: 5px 10px;
            border: 1px solid #ccc;
        }

        .select2-container--default .select2-selection__arrow {
            height: 32px;
        }

        .select2-container--default .select2-selection__rendered {
            padding-top: 5px;
        }

        .inputField2 {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        .input_wrap {
            position: relative;
            margin-bottom: 20px;
            border-radius: 8px;
        }

        .input_wrap label {
            position: absolute;
            top: -10px;
            left: 10px;
            background-color: #fff;
            color: #304a6f;
            font-size: 14px;
            padding: 0 5px;
        }

        .input_wrap .errorMessage {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }

        .errorMessage {
            color: red;
        }
    </style>
    @section('js-imports')
        <script src="{{ secure_asset('js/website/freezone.js') }}" crossorigin="anonymous"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
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
                                    <input type="number"  name="package_lines[{{ $attribute->name }}]" value="" class="inputField2 cursor arrowPlace max_check" id="{{ $attribute->name }}" min="0" @if($max_value>0) data-max="{{$max_value}}" max="{{$max_value}}" @endif required>
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
                                            <option data-val="{{ $option->attributeOption->value }}" value="{{ $option->attributeOption->id }}">
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
                                <option value="">Choose an Option</option>
                                @if (!empty($freezone_data))
                                    @foreach ($freezone_data['activity_groups'] as $item)
                                        <option value="{{ 'activity_group|' . $item->id . '|' . $item->name }}">
                                            {{ $item->name }} [{{$item->license->name}}]
                                         </option>
                                    @endforeach
                                @endif
                            </select>
                            <label for="activity_group">Activity Group [Max: {{$freezone_data->max_activity_group_allowed}}]</label>
                            <input type="hidden" name="max_activity_group_allowed" id="max_activity_group_allowed" value="{{$freezone_data->max_activity_group_allowed}}">
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
                            <label for="activities">Activity [Max: {{$freezone_data->max_activity_allowed}}]</label>
                            <input type="hidden" name="max_activity_allowed" id="max_activity_allowed" value="{{$freezone_data->max_activity_allowed}}">
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
                    <div id="activityGroupNote" style="display: none; color: red; text-align: center; margin-bottom: 20px;">
                        Note - You have selected multiple activity groups, License cost shown in the Cost Summary may differ from the actual cost provided by the Freezone.
                    </div>
                    <div id="activityNote" style="display: none; color: red; text-align: center; margin-bottom: 20px;">
                        Note - You have selected multiple activities, Acitvity cost and License cost shown in the Cost Summary may differ from the actual cost provided by the Freezone.
                    </div>
                    <div class="bannerBtns">
                        <button type="submit" class="bookConsBtn">Calculate Now</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script>
        // Assuming `bookConsBtn` is the button you want to add the event listener to
        document.querySelector('.bookConsBtn').addEventListener('click', function() {
            @if ($customer != null)
                @if($customer->status === 0)
                    event.preventDefault();
                    $('.bookConsBtn').attr('disabled', 'true');
                    $('.bannerBtns').before('<div style="text-align: center">To Continue Firstly Verify Your Email By <a href="/my_profile">Click Here</a></div>');
                    return false;
               @endif
            @endif

            // Validate max allowed activity groups selection
            let maxActivityGroups = $("#max_activity_group_allowed").val();// Example max value for activity groups
            let selectedActivityGroups = $('#activity_group_selection').val().split('__');

            if (selectedActivityGroups && selectedActivityGroups.length > maxActivityGroups) {
                alert(`You can select a maximum of ${maxActivityGroups} activity groups.`);
                event.preventDefault(); // Prevent form submission
                return false;
            }

            // Validate max allowed activities selection
            let maxActivities = $("#max_activity_allowed").val(); // Example max value for activities
            let selectedActivities = $('#activities_selection').val().split('__');

            if (selectedActivities && selectedActivities.length > maxActivities) {
                alert(`You can select a maximum of ${maxActivities} activities.`);
                event.preventDefault(); // Prevent form submission
                return false;
            }

            // Select all inputs of type number within the parent class (or any specific container)
            let inputs = document.querySelectorAll('.signupFormItems input[type="number"]');

            // Loop through each input
            inputs.forEach(function(input) {
                // Check if the value is less than 0
                if (parseFloat(input.value) < 0) {
                    // Update the value to 0 if it is less than 0
                    input.value = 0;
                }
            });
        });

        $(document).ready(function() {
            // Safely pass the PHP variable into JavaScript.
            let data = @json($formInput ?? ''); // Converts the PHP variable to a JSON object.
            if (data) {
                // Loop through the `data` object and fill the form fields with corresponding values
                for (const key in data) {
                    if (data.hasOwnProperty(key)) {
                        // Find the corresponding input/select field by its name or id
                        let inputElement = document.querySelector(`[name="${key}"], [id="${key}"]`);

                        if (inputElement) {
                            // For text inputs, number inputs, and hidden inputs
                            if (inputElement.tagName.toLowerCase() === 'input' && inputElement.type !== 'file') {
                                inputElement.value = data[key];
                            }

                            // For select elements
                            else if (inputElement.tagName.toLowerCase() === 'select') {
                                // Set selected value for <select> element
                                let options = inputElement.querySelectorAll('option');
                                options.forEach(option => {
                                    if (option.value === data[key]) {
                                        option.selected = true;
                                    }
                                });
                            }
                        }
                    }
                }
                // Submit the form normally
                document.getElementById('costCalculatorForm').submit();
            }
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

        // Initialize Select2 on the Activity Group and Activities dropdowns
        document.addEventListener("DOMContentLoaded", function() {
            $('#activity_group').select2({
                placeholder: 'Choose an Option',
                allowClear: true,
                width: '100%'
            });

            $('#activities').select2({
                placeholder: 'Choose an Option',
                allowClear: true,
                width: '100%'
            });

        });
    </script>
</x-website-layout>
