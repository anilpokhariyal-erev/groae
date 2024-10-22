<x-admin-layout>
    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
            }

            .switch input {
            opacity: 0;
            width: 0;
            height: 0;
            }

            .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: 0.4s;
            border-radius: 34px;
            }

            .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: 0.4s;
            border-radius: 50%;
            }

            input:checked + .slider {
            background-color: #007bff;
            }

            input:checked + .slider:before {
            transform: translateX(26px);
            }

            .btn-danger{
                color: red;
            }

    </style>
    @if ($errors->any())
        <div class="main-card">
            <div class="card-body">
                <div class="custom-red-alert" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif
    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">Edit Package</h5>
            <form method="post" action="{{ route('package.update', $package->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <!-- Freezone Selection -->
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="freezone">Freezone <span class="text-danger">*</span></label>
                            <select name="freezone_id" class="custom-select">
                                <option value="">Select Freezone</option>
                                @foreach($freezones as $freezone)
                                    <option value="{{ $freezone->id }}"
                                            @if($package->freezone_id == $freezone->id) selected @endif>
                                        {{ $freezone->name }}
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
                            <input name="title" id="title" value="{{ old('title', $package->title) }}" type="text" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('title')" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Package Price -->
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="price">Price <span class="text-danger">*</span></label>
                            <input name="price" id="price" value="{{ old('price', $package->price) }}" type="number" class="form-control" min="0">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('price')" />
                        </div>
                    </div>

                    <!-- Renewable Price -->
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="renewable_price">Renewable Price</label>
                            <input name="renewable_price" id="renewable_price" value="{{ old('renewable_price', $package->renewable_price) }}" type="number" class="form-control" min="0">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('renewable_price')" />
                        </div>
                    </div>
                    
                    <!-- Currency -->
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="currency">Currency <span class="text-danger">*</span></label>
                            <select name="currency" id="currency" class="custom-select form-control">
                                <option value="">Select Currency</option>
                                @foreach($currency as $curr)
                                    <option value="{{ $curr->code }}" {{ old('currency', $package->currency) == $curr->code ? 'selected' : '' }}>
                                        {{ $curr->label }} ({{ $curr->symbol }})
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('currency')" />
                        </div>
                    </div>

                </div>
                <div class="row">
                    <!-- Package Description -->
                    <div class="col-md-8">
                        <div class="position-relative form-group">
                            <label for="description">Description <span class="text-danger">*</span></label>
                            <textarea name="description" id="description" class="form-control">{{ old('description', $package->description) }}</textarea>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('description')" />
                        </div>
                    </div>

                     <!-- Trending Checkbox -->
                     <div class="col-md-3 p-2">
                        <div class="position-relative form-group">
                            <label for="trending">Trending</label>
                            <br>
                            <label class="switch">
                                <input type="checkbox" name="trending" id="trending" value="1" {{ old('trending', $package->trending) ? 'checked' : '' }}>
                                <span class="slider"></span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="visa_package">Free Visa Package <span class="text-danger">*</span></label>
                            <input
                                    type="number"
                                    name="visa_package"
                                    id="visa_package"
                                    value="{{ old('visa_package', $package->visa_package ?? '') }}"
                                    class="form-control"
                                    min="0"
                                    max="99"
                                    required
                            >
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('visa_package')" />
                        </div>
                    </div>                  



                    <!-- Number of Free Activities Allowed -->
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="activity_limit">Number of Free Activities Allowed</label>
                            <input type="number" id="activity-limit-input" name="activity_limit"
                                   class="form-control {{ $errors->has('activity_limit') ? 'is-invalid' : '' }}"
                                   value="{{ old('activity_limit', $package->allowed_free_packages) }}"
                                   min="1" max="{{ count($activities) }}" placeholder="Enter a limit">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('activity_limit')" />
                        </div>
                    </div>

                    <!-- Free Activities -->
                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="free_activities">Free Activities</label>
                            <select id="free-activities-dropdown" name="free_activities[]" class="custom-select form-control">
                                <option value="">Select Free Activity</option>
                                @foreach($activities as $activity)
                                    <option value="{{ $activity->id }}" >{{ $activity->name }}</option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('free_activities')" />
                        </div>

                        <!-- Selected Free Activities -->
                        <div id="selected-activities-container" class="mt-3">
                            @foreach($selected_activities as $activity)
                                <div class="selected-activity" data-id="{{ $activity->id }}">
                                    {{ $activity->name }}
                                    <button type="button" class="btn btn-danger btn-sm remove-activity" data-id="{{ $activity->id }}">Remove</button>
                                    <input type="hidden" name="free_activities[]" value="{{ $activity->id }}" />
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Package Lines (Attributes and Attribute Options) -->
                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="package_lines"><b>Package Add-ons</b></label>

                            <!-- Multiple rows of package lines to edit existing ones -->
                            <div id="package-lines-container">
                                @if($package->packageLines->isEmpty())
                                    <!-- If no package lines, add an empty row -->
                                    <div class="row package-line-item">
                                        <div class="col-md-4">
                                            <div class="position-relative form-group">
                                                <label for="attribute_id">Attribute <span class="text-danger">*</span></label>
                                                <select name="package_lines[0][attribute_id]" class="custom-select">
                                                    <option value="">Select Attribute</option>
                                                    @foreach($attributes as $attribute)
                                                        <option value="{{$attribute->id}}">{{$attribute->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="position-relative form-group">
                                                <label for="attribute_option_id">Option <span class="text-danger">*</span></label>
                                                <select name="package_lines[0][attribute_option_id]" class="custom-select">
                                                    <option value="">Select Option</option>
                                                    @foreach($attributeOptions as $option)
                                                        <option value="{{$option->id}}">{{$option->value}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="position-relative form-group">
                                                <label for="addon_cost">Add-on Cost <span class="text-danger">*</span></label>
                                                <input name="package_lines[0][addon_cost]" type="number" class="form-control" min="0">
                                            </div>
                                        </div>
                                        <div class="col-md-12 d-flex justify-content-end">
                                            <button type="button" class="btn btn-warning remove-package-line">Remove</button>
                                        </div>
                                    </div>
                                @else
                                    <!-- Display existing package lines -->
                                    @foreach($package->packageLines as $index => $line)
                                        <div class="row package-line-item" data-option="{{ $line->attribute_option_id }}">
                                            <div class="col-md-4">
                                                <div class="position-relative form-group">
                                                    <label for="attribute_id">Attribute <span class="text-danger">*</span></label>
                                                    <select name="package_lines[{{ $index }}][attribute_id]" class="custom-select">
                                                        <option value="">Select Attribute</option>
                                                        @foreach($attributes as $attribute)
                                                            <option value="{{ $attribute->id }}"
                                                                    @if($line->attribute_id == $attribute->id) selected @endif>
                                                                {{ $attribute->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="position-relative form-group">
                                                    <label for="attribute_option_id">Option <span class="text-danger">*</span></label>
                                                    <select name="package_lines[{{ $index }}][attribute_option_id]" class="custom-select">
                                                        <option value="">Select Option</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="position-relative form-group">
                                                    <label for="addon_cost">Add-on Cost <span class="text-danger">*</span></label>
                                                    <input name="package_lines[{{ $index }}][addon_cost]" value="{{ old('package_lines.' . $index . '.addon_cost', $line->addon_cost) }}" type="number" class="form-control" min="0">
                                                </div>
                                            </div>

                                            <div class="col-md-12 d-flex justify-content-end">
                                                <!-- Only add the remove button for existing lines -->
                                                @if($index > 0)

                                                        <button type="button" class="btn btn-warning remove-package-line">Remove</button>

                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>

                            <!-- Button to add more package lines -->
                            <button type="button" id="add-package-line" class="btn btn-secondary mt-2">Add More</button>
                        </div>
                    </div>
                </div>

                <!-- Save Button -->
                <div class="ba_flex align_items_center">
                    <button class="mt-1 btn btn-primary">Update</button>
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
                        <p class="mb-0">{{ session('error') }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endif

</x-admin-layout>
<script>
    $(document).ready(function() {
        const attributeOptions = @json($attributeOptions);

        // Function to populate options based on selected attribute
        function populateOptions(attributeId, optionsDropdown) {
            const filteredOptions = attributeOptions.filter(option => option.attribute_id == attributeId);
            optionsDropdown.empty(); // Clear existing options
            optionsDropdown.append('<option value="">Select Option</option>');

            filteredOptions.forEach(option => {
                optionsDropdown.append(`<option value="${option.id}">${option.value}</option>`);
            });
        }

        // Attach change event listener to each attribute dropdown
        $(document).on('change', 'select[name^="package_lines"][name$="[attribute_id]"]', function() {
            const selectedAttributeId = $(this).val();
            const optionsDropdown = $(this).closest('.package-line-item').find('select[name^="package_lines"][name$="[attribute_option_id]"]');
            if (selectedAttributeId) {
                populateOptions(selectedAttributeId, optionsDropdown);
            } else {
                optionsDropdown.empty(); // Clear if no attribute selected
                optionsDropdown.append('<option value="">Select Option</option>');
            }
        });

        // Trigger change event on page load for existing lines
        $('select[name^="package_lines"][name$="[attribute_id]"]').each(function() {
            const selectedAttributeId = $(this).val();
            const optionsDropdown = $(this).closest('.package-line-item').find('select[name^="package_lines"][name$="[attribute_option_id]"]');
            if (selectedAttributeId) {
                populateOptions(selectedAttributeId, optionsDropdown);
                const selectedOptionId = $(this).closest('.package-line-item').data('option');
                if (selectedOptionId) {
                    optionsDropdown.val(selectedOptionId); // Set selected option
                }
            }
        });

        // Handle adding new package line dynamically
        $('#add-package-line').on('click', function() {
            const index = $('#package-lines-container .package-line-item').length;
            const newLine = `
                <div class="row package-line-item">
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="attribute_id">Attribute <span class="text-danger">*</span></label>
                            <select name="package_lines[${index}][attribute_id]" class="custom-select">
                                <option value="">Select Attribute</option>
                                @foreach($attributes as $attribute)
                                    <option value="{{$attribute->id}}">{{$attribute->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="attribute_option_id">Option <span class="text-danger">*</span></label>
                            <select name="package_lines[${index}][attribute_option_id]" class="custom-select">
                                <option value="">Select Option</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="addon_cost">Add-on Cost <span class="text-danger">*</span></label>
                            <input name="package_lines[${index}][addon_cost]" type="number" class="form-control" min="0">
                        </div>
                    </div>
                    <div class="col-md-12 d-flex justify-content-end">
                        <button type="button" class="btn btn-warning remove-package-line">Remove</button>
                    </div>
                </div>
            `;

            $('#package-lines-container').append(newLine);
        });

        // Handle remove package line
        $(document).on('click', '.remove-package-line', function() {
            $(this).closest('.package-line-item').remove();
        });

        // Activity limit input handling
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
            }else{
                // $('#free-activities-dropdown').prop('disabled', true);
                alert('Please remove extra free activities')
                // let selectedActivitiesContainer = $('#selected-activities-container');
                // if (selectedActivitiesContainer.children().length >= limit) {
                //     $(selectedActivitiesContainer).html('');
                // }

            }
        });

        // Handle the selection of free activities
        $(document).on('change', '#free-activities-dropdown', function() {
            if ($('#activity-limit-input').val() == ''){
                alert('Please enter the Number of Free Activities Allowed!');
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
                        <button type="button" class="btn btn-danger btn-sm remove-activity" data-id="${activityId}" title="Remove">X</button>
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

        $(document).ready(function() {
            let selectedActivitiesContainer = $('#selected-activities-container');
            let limit = parseInt($('#activity-limit-input').val());
            if (selectedActivitiesContainer.children().length >= limit) {
                $('#free-activities-dropdown').prop('disabled', true);
            }
        });

    });
</script>
