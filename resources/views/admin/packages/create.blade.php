<x-admin-layout>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <form method="post" action="{{ route('package.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <!-- Freezone Selection -->
                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="freezone">Freezone <span class="text-danger">*</span></label>
                            <select name="freezone_id" id="freezone-select" class="custom-select">
                                <option value="">Select Freezone</option>
                                @foreach($freezones as $freezone)
                                    <option value="{{$freezone->id}}" {{ old('freezone_id') == $freezone->id ? 'selected' : '' }}>
                                        {{$freezone->name}}
                                    </option>
                                @endforeach
                            </select>                            
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('freezone_id')" />
                        </div>
                    </div>

                    <!-- Package Name -->
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="title">Package Name <span class="text-danger">*</span></label>
                            <input name="title" id="title" value="{{old('title')}}" type="text" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('title')" />
                        </div>
                    </div>

                    <!-- Package Price -->
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="price">Price <span class="text-danger">*</span></label>
                            <input name="price" id="price" value="{{old('price')}}" type="number" class="form-control" min="0">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('price')" />
                        </div>
                    </div>

                    <!-- Renewable Price -->
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="renewable_price">Renewable Price</label>
                            <input name="renewable_price" id="renewable_price" value="{{old('renewable_price')}}" type="number" class="form-control" min="0">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('renewable_price')" />
                        </div>
                    </div>
                   
                    <!-- Currency -->
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="currency">Currency <span class="text-danger">*</span></label>
                            <select name="currency" id="currency" class="custom-select form-control">
                                <option value="">Select Currency</option>
                                @foreach($currency as $curr)
                                    <option value="{{ $curr->code }}">{{ $curr->label }} ({{ $curr->symbol }})</option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('currency')" />
                        </div>
                    </div>


                    <!-- Package Description -->
                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="description">Description <span class="text-danger">*</span></label>
                            <textarea name="description" id="description" class="form-control">{{old('description')}}</textarea>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('description')" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="visa_package">Free Visa Package <span class="text-danger">*</span></label>
                            <input
                                    type="number"
                                    name="visa_package"
                                    id="visa_package"
                                    value="{{ old('visa_package') }}"
                                    class="form-control"
                                    min="0"
                                    max="99"
                                    required
                            >
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('visa_package')" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="trending">Trending</label>
                            <input type="checkbox" name="trending" id="trending" value="1" {{ old('trending') ? 'checked' : '' }}>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('trending')" />
                        </div>
                    </div>

                    <!-- Number of Free Activities Allowed -->
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="activity_limit">Number of Free Activities Allowed</label>
                            <input type="number" id="activity-limit-input" name="activity_limit"
                                   class="form-control" value="{{ old('activity_limit') }}"
                                   min="1" max="{{ count($activities) }}" placeholder="Enter a limit">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('activity_limit')" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="free_activities">Free Activities</label>
                            <select id="free-activities-dropdown" name="free_activities[]" class="custom-select form-control">
                                <option value="">Select Free Activity</option>
                                @foreach($activities as $activity)
                                    <option value="{{ $activity->id }}">{{ $activity->name }}</option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('free_activities')" />
                        </div>

                        <!-- Selected Free Activities -->
                        <div id="selected-activities-container" class="mt-3"></div>
                    </div>

                    <!-- Package Lines (Attributes and Attribute Options) -->
                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="package_lines"><b>Package Add-ons</b></label>
                            <div id="package-lines-container">
                                <div class="row package-line-item">
                                    <!-- Attribute -->
                                    <div class="col-md-4">
                                        <div class="position-relative form-group">
                                            <label for="attribute_id">Attribute <span class="text-danger">*</span></label>
                                            <select name="package_lines[0][attribute_id]" class="custom-select attribute-select" data-line="0">
                                                <option value="">Select Attribute</option>
                                                @foreach($attributes as $attribute)
                                                    <option value="{{$attribute->id}}">{{$attribute->name}}</option>
                                                @endforeach
                                            </select>
                                            <x-input-error class="mt-2 text-red" :messages="$errors->get('package_lines.0.attribute_id')" />
                                        </div>
                                    </div>

                                    <!-- Attribute Option -->
                                    <div class="col-md-4">
                                        <div class="position-relative form-group">
                                            <label for="attribute_option_id">Option <span class="text-danger">*</span></label>
                                            <select name="package_lines[0][attribute_option_id]" class="custom-select option-select" id="option-select-0">
                                                <option value="">Select Option</option>
                                            </select>
                                            <x-input-error class="mt-2 text-red" :messages="$errors->get('package_lines.0.attribute_option_id')" />
                                        </div>
                                    </div>

                                    <!-- Add-on Cost -->
                                    <div class="col-md-4">
                                        <div class="position-relative form-group">
                                            <label for="addon_cost">Add-on Cost <span class="text-danger">*</span></label>
                                            <input name="package_lines[0][addon_cost]" type="number" class="form-control" min="0">
                                            <x-input-error class="mt-2 text-red" :messages="$errors->get('package_lines.0.addon_cost')" />
                                        </div>
                                    </div>
                                </div>

                                <button type="button" id="add-package-line" class="btn btn-secondary mt-2">Add More</button>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Save Button -->
                <div class="ba_flex align_items_center">
                    <button class="mt-1 btn btn-primary">Save</button>
                    @if (session('success'))
                        <div class="text-success ml-2" id="successMessage">{{session('success')}}</div>
                    @endif
                </div>
            </form>
        </div>
    </div>

    @if (session('error'))
        <div class="modal fade show" id="errorModal" style="display: block;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-red">Error</h5>
                    </div>
                    <div class="modal-body">
                        <p class="mb-0 text-red">{{ session('error') }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="close-errorModal" class="btn btn-secondary">Ok</button>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <script src="{{ secure_asset('js/jquery-3.7.1.min.js') }}" crossorigin="anonymous"></script>
    <script>
        let lineIndex = 0;

        document.getElementById('add-package-line').addEventListener('click', function() {
            lineIndex++;
            let container = document.getElementById('package-lines-container');
            let newRow = document.createElement('div');
            newRow.classList.add('row', 'package-line-item');
            newRow.innerHTML = `
                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label for="attribute_id">Attribute <span class="text-danger">*</span></label>
                        <select name="package_lines[${lineIndex}][attribute_id]" class="custom-select attribute-select" data-line="${lineIndex}">
                            <option value="">Select Attribute</option>
                            @foreach($attributes as $attribute)
            <option value="{{$attribute->id}}">{{$attribute->name}}</option>
                            @endforeach
            </select>
            <x-input-error class="mt-2 text-red" :messages="$errors->get('package_lines.${lineIndex}.attribute_id')" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label for="attribute_option_id">Option <span class="text-danger">*</span></label>
                        <select name="package_lines[${lineIndex}][attribute_option_id]" class="custom-select option-select" id="option-select-${lineIndex}">
                            <option value="">Select Option</option>
                        </select>
                        <x-input-error class="mt-2 text-red" :messages="$errors->get('package_lines.${lineIndex}.attribute_option_id')" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label for="addon_cost">Add-on Cost <span class="text-danger">*</span></label>
                        <input name="package_lines[${lineIndex}][addon_cost]" type="number" class="form-control" min="0">
                        <x-input-error class="mt-2 text-red" :messages="$errors->get('package_lines.${lineIndex}.addon_cost')" />
                    </div>
                </div>
                <div class="col-md-12 d-flex justify-content-end">
                    <button type="button" class="btn btn-warning remove-package-line">Remove</button>
                </div>
            `;
            container.appendChild(newRow);
        });

        $(document).on('click', '.remove-package-line', function() {
            $(this).closest('.package-line-item').remove();
        });

        $(document).ready(function() {
            $(document).on('change', '.attribute-select', function() {
                var attributeId = $(this).val();
                var line = $(this).data('line');
                var $optionSelect = $('#option-select-' + line);

                if (attributeId) {
                    $.ajax({
                        url: '/admin/get-attribute-options/' + attributeId,
                        type: 'GET',
                        success: function(data) {
                            $optionSelect.empty();
                            $optionSelect.append('<option value="">Select Option</option>');
                            $.each(data.options, function(key, value) {
                                $optionSelect.append('<option value="'+ value.id +'">'+ value.value +'</option>');
                            });
                        }
                    });
                } else {
                    $optionSelect.empty().append('<option value="">Select Option</option>');
                }
            });
        });

        $('#activity-limit-input').on('input', function() {
            let limit = parseInt($(this).val());
            let selectedActivities = $('#selected-activities-container .selected-activity').length;

            // Check if activity limit is greater than 0
            if (limit > 0) {

                // Enable the dropdown only if the number of selected activities is less than the limit
                $('#free-activities-dropdown').prop('disabled', selectedActivities >= limit);
            } else {
                $('#free-activities-dropdown').prop('required', false);
                $('#free-activities-dropdown').prop('disabled', false);
            }

            // Enable the dropdown if the number of selected activities is less than the limit
            if (selectedActivities < limit) {
                $('#free-activities-dropdown').prop('disabled', false);
            }
        });

        // Handle the selection of free activities
        $(document).on('change', '#free-activities-dropdown', function() {
            if ($('#activity-limit-input').val() == 0 || $('#activity-limit-input').val() == ''){
                alert('please enter Number of Free Activities Allowed !')
                $('#free-activities-dropdown').val('').change();
                return false;
            }
            let activityId = $(this).val();
            let limit = parseInt($('#activity-limit-input').val());
            let selectedActivitiesContainer = $('#selected-activities-container');

            // Check if the activity is already selected
            if (activityId && selectedActivitiesContainer.find(`[data-id="${activityId}"]`).length === 0) {
                // Create a new element to show selected activities
                selectedActivitiesContainer.append(`
            <div class="selected-activity" data-id="${activityId}">
                ${$(this).find('option:selected').text()}
                <button type="button" class="btn btn-danger btn-sm remove-activity" data-id="${activityId}">Remove</button>
                <input type="hidden" name="free_activities[]" value="${activityId}" />
            </div>
        `);

                // Disable the dropdown if the limit is reached
                if (selectedActivitiesContainer.children().length >= limit) {
                    $(this).prop('disabled', true);
                }
            }
            $(this).val(''); // Reset the dropdown after selection
        });


        // Handle removing selected activities
        $(document).on('click', '.remove-activity', function() {
            $(this).closest('.selected-activity').remove();
            let limit = parseInt($('#activity-limit-input').val());
            let selectedActivitiesContainer = $('#selected-activities-container');

            // Enable the dropdown if the number of selected activities is less than the limit
            if (selectedActivitiesContainer.children().length < limit) {
                $('#free-activities-dropdown').prop('disabled', false);
            }
        });
    </script>
</x-admin-layout>
