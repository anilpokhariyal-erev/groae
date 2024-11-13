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

        .modal-body {
            overflow-y: auto; /* Allows for scrolling if content is taller than the viewport */
            max-height: calc(80vh - 200px); /* Adjusts maximum height to avoid full viewport height */
        }

        .modal-dialog {
            margin: 0; /* Remove default margin to avoid bottom alignment */
            position: relative; /* Ensure it positions relative to its parent */
            max-height: 80vh; /* Set a maximum height */
        }

        .modal-content {
            border-radius: 0.5rem; /* Optional: rounded corners */
            position: absolute; /* Allow better control over positioning */
            top: 150px; /* Position it at the top */
            left: 100%; /* Center horizontally */
            /*transform: translateX(-50%); !* Adjust for centering *!*/
        }

        .modal-header, .modal-footer {
            padding: 1rem; /* Optional: increase padding */
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
    <div class="main-card card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-9"><h5 class="card-title">Edit Package : {{ $package->title }}</h5></div>
                <div class="col-md-2"><button class="btn btn-primary" id="manage_activity">Manage Activities</button></div>
            </div>            
        </div>
    </div>
    <div class="main-card mt-1 mb-3 card package-form">        
        <div class="card-body">            
            <form method="post" action="{{ route('package.update', $package->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <!-- Freezone Selection -->
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="freezone">Freezone <span class="text-danger">*</span></label>
                            <select name="freezone_id" class="custom-select" required>
                                <option value="{{ $package->freezone_id }}" selected>
                                    {{ $package->freezone->name }}
                                </option>
                            </select>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('freezone_id')" />
                        </div>
                    </div>

                    <!-- Package Code -->
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="package_code">Package Code <span class="text-danger">*</span></label>
                            <input name="package_code" id="package_code" value="{{old('package_code',  $package->package_code)}}" type="text" class="form-control" required>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('package_code')" />
                        </div>
                    </div>

                    <!-- Package Name -->
                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="title">Package Name <span class="text-danger">*</span></label>
                            <input name="title" id="title" value="{{ old('title', $package->title) }}" type="text" class="form-control" required>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('title')" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Package Price -->
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="price">Price <span class="text-danger">*</span></label>
                            <input name="price" id="price" value="{{ old('price', $package->price) }}" type="number" class="form-control" min="0" required>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('price')" />
                        </div>
                    </div>

                    <!-- Renewable Price -->
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="renewable_price">Renewable Price<span class="text-danger">*</span></label>
                            <input name="renewable_price" id="renewable_price" value="{{ old('renewable_price', $package->renewable_price) }}" type="number" class="form-control" min="0" required>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('renewable_price')" />
                        </div>
                    </div>

                    <!-- Currency -->
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="currency">Currency <span class="text-danger">*</span></label>
                            <select name="currency" id="currency" class="custom-select form-control" required>
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
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="activity_limit">Number of Free Activities Allowed<span class="text-danger">*</span></label>
                            <input type="number" id="activity-limit-input" name="activity_limit"
                                   class="form-control {{ $errors->has('activity_limit') ? 'is-invalid' : '' }}"
                                   value="{{ old('activity_limit', $package->allowed_free_packages) }}"
                                   min="1" max="{{ count($activities) }}" required>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('activity_limit')" />
                        </div>
                    </div>
                </div>
                <!-- For show on calculator field -->
                @php
                    $showOnCalculatorArray = !empty($package->show_on_calculator) ? explode(',', $package->show_on_calculator) : [];
                    $showOnSummaryArray = !empty($package->show_in_summary) ? explode(',', $package->show_in_summary) : [];
                @endphp
                 <input type="hidden" name="show_on_calculator" id="show_on_calculator" value="{{$package->show_on_calculator}}">
                 <input type="hidden" name="show_in_summary" id="show_in_summary" value="{{$package->show_in_summary}}">
                <div class="row">
                    <!-- Package Description -->
                    <div class="col-md-8">
                        <div class="position-relative form-group">
                            <label for="description">Description <span class="text-danger">*</span></label>
                            <textarea name="description" id="description" class="form-control" required>{{ old('description', $package->description) }}</textarea>
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

                    <!-- Package Lines (Attributes and Attribute Options) -->
                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="package_lines"><b>Package Add-ons <span class="bg-dark attribute-count">0</span></b></label>
                            <!-- Multiple rows of package lines to edit existing ones -->
                            <div id="package-lines-container">
                                    <!-- Display existing package lines -->
                                @php
                                    $costIndex = count($package->packageLines); // Start costIndex from the length of packageLines
                                @endphp

                                @foreach($package->packageLines as $lineIndex => $line)
                                    <div class="row package-line-item" data-option="{{ $line->attribute_option_id }}">
                                        <div class="col-md-4">
                                            <div class="position-relative form-group">
                                                <label for="attribute_id">Attribute <span class="text-danger">*</span></label>
                                                <select name="package_lines[{{ $lineIndex }}][attribute_id]" class="custom-select attribute-select" data-line="{{ $lineIndex }}">
                                                    <option value="">Select Attribute</option>
                                                    @foreach($attributes as $attribute)
                                                        <option value="{{ $attribute->id }}"
                                                                @if($line->attribute_id == $attribute->id) selected @endif>
                                                            {{ $attribute->label }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4 ">
                                            <div class="position-relative form-group">
                                                <label for="attribute_option_id">Option <span class="text-danger">*</span></label>
                                                <select name="package_lines[{{ $lineIndex }}][attribute_option_id]" class="custom-select option-select" id="option-select-{{ $lineIndex }}">
                                                    <option value="">Select Option</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="position-relative form-group">
                                                <label for="addon_cost">Add-on Cost <span class="text-danger">*</span></label>
                                                <input name="package_lines[{{ $lineIndex }}][addon_cost]" value="{{ old('package_lines.' . $lineIndex . '.addon_cost', $line->addon_cost) }}" type="number" class="form-control" min="0">
                                            </div>
                                        </div>

                                        <div class="col-md-12 d-flex justify-content-end">
                                            <button type="button" class="btn btn-warning remove-package-line">Remove</button>
                                            <input type="checkbox" name="show_on_calculator_check" class="show_on_calculator_check" style="margin-left:1%;" @if(in_array($line->attribute_id, $showOnCalculatorArray)) 
                                            checked @endif> Show on Calculator
                                            <input type="checkbox" name="show_in_summary_check" class="show_in_summary_check" style="margin-left:1%;" @if(in_array($line->attribute_id, $showOnSummaryArray)) 
                                            checked @endif> Show on Summary
                                        </div>
                                    </div>
                                @endforeach

                                @foreach($package->attributeCosts as $line)
                                @if($line->status)
                                    <div class="row package-line-item" data-option="{{ $line->attribute_option_id }}">
                                        <div class="col-lg-3">
                                            <div class="position-relative form-group">
                                                <label for="attribute_id">Attribute <span class="text-danger">*</span></label>
                                                <select name="package_lines[{{ $costIndex }}][attribute_id]" class="custom-select attribute-select" data-line="{{ $costIndex }}">
                                                    <option value="">Select Attribute</option>
                                                    @foreach($attributes as $attribute)
                                                        <option value="{{ $attribute->id }}" data-allow-multiple="{{ $attribute->allow_multiple }}"
                                                                @if($line->attribute_id == $attribute->id) selected @endif>
                                                            {{ $attribute->label }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="position-relative form-group">
                                                <label for="allowed_free_qty_{{ $costIndex }}">Allowed Free Quantity</label>
                                                <input name="package_lines[{{ $costIndex }}][allowed_free_qty]" value="{{ old('package_lines.' . $costIndex . '.allowed_free_qty', $line->allowed_free_qty) }}" type="number" class="form-control" min="0" value="">
                                            </div>
                                        </div>

                                        <div class="col-lg-3 multiple_off">
                                            <div class="position-relative form-group">
                                            <label for="max_allowed_qty_{{ $costIndex }}">Allowed Max Quantity</label>
                                            <input name="package_lines[{{ $costIndex }}][max_allowed_qty]" type="number" class="form-control" min="0" value="{{ old('package_lines.' . $costIndex . '.max_allowed_qty', $line->max_allowed_qty) }}">
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="position-relative form-group">
                                                <label for="unit_price_{{ $costIndex }}">Unit Price</label>
                                                <input name="package_lines[{{ $costIndex }}][unit_price]" value="{{ old('package_lines.' . $costIndex . '.unit_price', $line->unit_price) }}" type="number" class="form-control" min="0" value="">
                                            </div>
                                        </div>

                                        <div class="col-md-12 d-flex justify-content-end">
                                            <!-- Only add the remove button for existing lines -->
                                            <button type="button" class="btn btn-warning remove-package-line">Remove</button>
                                            <input type="checkbox" name="show_on_calculator_check" class="show_on_calculator_check" style="margin-left:1%;"
                                            @if(in_array($line->attribute_id, $showOnCalculatorArray)) 
                                            checked @endif> Show on Calculator
                                            <input type="checkbox" name="show_in_summary_check" class="show_in_summary_check" style="margin-left:1%;"
                                            @if(in_array($line->attribute_id, $showOnSummaryArray)) 
                                            checked @endif> Show on Summary
                                        </div>
                                    </div>

                                    @php
                                        $costIndex++; // Increment costIndex for the next iteration
                                    @endphp
                                @endif
                                @endforeach
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

    <div class="main-card card pacakge-activities hide">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Activity</th>
                            <th>Price</th>
                            <th>Free</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($package_activities as $activity)
                        @if($activity->activity)
                            <tr>
                                <td>{{ $activity->activity->name }}</td>
                                <td>
                                    <span class="activity_price">{{ $activity->price }}</span>
                                    <input type="hidden" name="activity_id" value="{{$activity->id}}">
                                    <input type="hidden" name="activity_price" value="{{$activity->price}}">
                                </td>
                                <td>
                                <input type="checkbox" class="free_activity" {{ $activity->allowed_free == 1 ? 'checked' : '' }}>
                                </td>
                                <td>
                                <strong style="cursor: pointer; font-size: 20px">
                                        <i class="fa fa-remove text-danger remove_activity" title="Remove"></i>
                                </strong> 
                                </td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row p-3">
                <button class="btn btn-primary" onclick="saveActivities()">Save Changes</button>
                <button class="btn btn-primary ml-2" onclick="loadActivities()">Load All Activities</button>
            </div>
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</x-admin-layout>
<script>
    let show_on_calculator_arr = "{{$package->show_on_calculator}}".split(',');
    let show_in_summary_arr = "{{$package->show_in_summary}}".split(',');
    $(document).ready(function() {
        const attributeOptions = @json($attributeOptions);
        $('.package-form').show();
        $('.pacakge-activities').hide();

        function populateOptions(attributeId, optionsDropdown) {
            const filteredOptions = attributeOptions.filter(option => option.attribute_id == attributeId);
            optionsDropdown.empty(); // Clear existing options
            optionsDropdown.append('<option value="">Select Option</option>');

            filteredOptions.forEach(option => {
                optionsDropdown.append(`<option value="${option.id}">${option.value}</option>`);
            });
        }

        function update_attribute_count(){
            $('.attribute-count').text($('.attribute-select').length);
        }
        update_attribute_count();

        $(document).on('click', '#manage_activity', function(){
            let show_form = $(this).attr('show_form');
            if(show_form==0){
                $(this).attr('show_form', 1);
                $(this).text('Manage Activities');
                $('.package-form').show();
                $('.pacakge-activities').hide();
            }else{
                $(this).attr('show_form', 0);
                $(this).text('Manage Package');
                $('.package-form').hide();
                $('.pacakge-activities').show();
            }
        });

        $(document).on('click', '.remove_activity', function(){
            $(this).closest('tr').remove();
        });


        $(document).on('change', 'select[name^="package_lines"][name$="[attribute_id]"]', function() {
            const selectedAttributeId = $(this).val();
            const optionsDropdown = $(this).closest('.package-line-item').find('select[name^="package_lines"][name$="[attribute_option_id]"]');

            // Check if an attribute is selected
            if (selectedAttributeId) {
                // Populate options based on the selected attribute
                populateOptions(selectedAttributeId, optionsDropdown);

                // Show or hide additional fields based on attribute's multiple selection capability
                const allow_multiple = $(this).find(':selected').data('allow-multiple');
                if (allow_multiple == '0') {
                    $(this).closest('.package-line-item').find('.multiple_off').show();
                    $(this).closest('.package-line-item').find('.multiple_on').hide();
                } else {
                    $(this).closest('.package-line-item').find('.multiple_on').show();
                    $(this).closest('.package-line-item').find('.multiple_off').hide();
                }
            } else {
                // Clear the options if no attribute is selected
                optionsDropdown.empty();
                optionsDropdown.append('<option value="">Select Option</option>');
                $(this).closest('.package-line-item').find('.multiple_off').hide();
                $(this).closest('.package-line-item').find('.multiple_on').hide(); // Hide both sections if no attribute is selected
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
            const index = $('#package-lines-container .package-line-item').length + 1; // Increment the index
            const newLine = `
                    <div class="row package-line-item">
                        <div class="col-lg-3">
                            <div class="position-relative form-group">
                                <label for="attribute_id">Attribute <span class="text-danger">*</span></label>
                                <select name="package_lines[${index}][attribute_id]" class="custom-select attribute-select" data-line="${index}">
                                    <option value="">Select Attribute</option>
                                    @foreach($attributes as $attribute)
                        <option value="{{$attribute->id}}" data-allow-multiple="{{$attribute->allow_multiple}}">{{$attribute->label}}</option>
                                    @endforeach
                        </select>
                        <x-input-error class="mt-2 text-red" :messages="$errors->get('package_lines.${index}.attribute_id')" />
                            </div>
                        </div>
                        <div class="col-md-4 multiple_on">
                            <div class="position-relative form-group">
                                <label for="attribute_option_id">Option <span class="text-danger">*</span></label>
                                <select name="package_lines[${index}][attribute_option_id]" class="custom-select option-select" id="option-select-${index}">
                                    <option value="">Select Option</option>
                                </select>
                                <x-input-error class="mt-2 text-red" :messages="$errors->get('package_lines.${index}.attribute_option_id')" />
                            </div>
                        </div>
                        <div class="col-md-4 multiple_on">
                            <div class="position-relative form-group">
                                <label for="addon_cost">Add-on Cost <span class="text-danger">*</span></label>
                                <input name="package_lines[${index}][addon_cost]" type="number" class="form-control" min="0">
                                <x-input-error class="mt-2 text-red" :messages="$errors->get('package_lines.${index}.addon_cost')" />
                            </div>
                        </div>
                        <div class="col-lg-3 multiple_off">
                            <div class="position-relative form-group">
                                <label for="allowed_free_qty_${index}">Allowed Free Quantity</label>
                                <input name="package_lines[${index}][allowed_free_qty]" type="number" class="form-control" min="0" value="">
                            </div>
                        </div>

                        <div class="col-lg-3 multiple_off">
                            <div class="position-relative form-group">
                                <label for="max_allowed_qty_${index}">Allowed Max Quantity</label>
                                <input name="package_lines[${index}][max_allowed_qty]" type="number" class="form-control" min="0" value="">
                            </div>
                        </div>

                        <div class="col-lg-3 multiple_off">
                            <div class="position-relative form-group">
                                <label for="unit_price_${index}">Unit Price</label>
                                <input name="package_lines[${index}][unit_price]" type="number" class="form-control" min="0" value="">
                            </div>
                        </div>
                        <div class="col-md-12 d-flex justify-content-end">
                            <button type="button" class="btn btn-warning remove-package-line">Remove</button>
                            <input type="checkbox" name="show_on_calculator_check" class="show_on_calculator_check" style="margin-left:1%;"> Show on Calculator
                            <input type="checkbox" name="show_in_summary_check" class="show_in_summary_check" style="margin-left:1%;"> Show on Summary
                        </div>
                    </div>
                `;

            $('#package-lines-container').append(newLine);
            $('.package-line-item:last').find('.multiple_off').hide(); // Hide the multiple_off fields by default
            update_attribute_count();
        });


        // Handle remove package line
        $(document).on('click', '.remove-package-line', function() {
            $(this).closest('.package-line-item').remove();
            update_attribute_count();
        });

        $(document).on('click', '.activity_price', function(){
            $(this).hide();
            $(this).closest('td').find("input[name='activity_price']").attr('type', 'number').show().focus();
        });

        $(document).on('blur', "input[name='activity_price']", function(){
            var newActivityPrice = $(this).val();  // Get the new value
            // Update the text display
            $(this).closest('td').find('.activity_price').text(newActivityPrice).show();
            // Hide the input again
            $(this).hide();
        });

    });

    async function saveActivities() {
        const activities = [];

        // Get all data rows from the DataTable
        const table = $('.pacakge-activities .table').DataTable();
        const allRows = table.rows().nodes(); // Get all rows' DOM nodes, avoiding jQuery selectors with special characters

        // Collect data from all rows
        $(allRows).each(function() {
            const activityId = $(this).find('input[name="activity_id"]').val();
            const price = $(this).find('input[name="activity_price"]').val();
            const isFree = $(this).find('.free_activity').is(':checked');

            activities.push({
                activity_id: activityId,
                price: price,
                free_activity: isFree
            });
        });

        try {
            const package_id = {{$package->id}}; 
            const token = '{{$token}}';
            
            // Send the data to the server using Fetch API
            const response = await fetch(`${window.location.origin}/api/package/save-activities`, {
                method: 'POST',
                headers: {
                    'Authorization': `Bearer ${token}`,
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    package_id: package_id,
                    activities: activities
                })
            });

            const result = await response.json();

            if (response.ok) {
                alert('Activities saved successfully!');
            } else {
                alert('Failed to save activities: ' + (result.message || 'Unknown error'));
                console.error('Error Response:', result);
            }
        } catch (error) {
            console.error('Network Error:', error);
            alert('An error occurred while saving activities. Please try again.');
        }
    }


    
    async function loadActivities(){
        try {
            const package_id = {{$package->id}}; 
            const token = '{{$token}}'; 
            
            // Send the data to the server using Fetch API
            const response = await fetch(`${window.location.origin}/api/package/load-activities`, {
                method: 'POST',
                headers: {
                    'Authorization': `Bearer ${token}`, // Pass Sanctum token in header
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    package_id: package_id
                })
            });

            const result = await response.json();

            if (response.ok) {
                alert('Activities fetched successfully!');
                // Reload the current page from the server
                location.reload(true);
            } else {
                alert('Failed to fetch activities: ' + (result.message || 'Unknown error'));
                console.error('Error Response:', result);
            }
        } catch (error) {
            console.error('Network Error:', error);
            alert('An error occurred while fetching activities. Please try again.');
        }
    }

    $(document).on('click','.free_activity', function(){
        const maxAllowed = {{$package->allowed_free_packages}};
        const checkedCheckboxes = document.querySelectorAll('.free_activity:checked');

        if (checkedCheckboxes.length > maxAllowed) {
            alert(`You can only select up to ${maxAllowed} activities.`);
            $(this).prop('checked', false);
        }
    });

    $(document).on('click', '.show_on_calculator_check', function() {
        let attribute_id = $(this).closest('.package-line-item').find('.attribute-select').val();
        // Prevent checking if attribute_id is null or 0
        if (!attribute_id || attribute_id === "0") {
            alert("Please select a valid attribute first.");
            $(this).prop('checked', false);
            return;
        }
        if ($(this).is(':checked')) {
            // Add attribute_id to the array if it's not already included
            if (!show_on_calculator_arr.includes(attribute_id)) {
                show_on_calculator_arr.push(attribute_id);
            }
        } else {
            // Remove attribute_id from the array if it exists
            show_on_calculator_arr = show_on_calculator_arr.filter(id => id !== attribute_id);
        }
        $('#show_on_calculator').val(show_on_calculator_arr);
    });

    // for show on summary page
    $(document).on('click', '.show_in_summary_check', function() {
        let attribute_id = $(this).closest('.package-line-item').find('.attribute-select').val();
        // Prevent checking if attribute_id is null or 0
        if (!attribute_id || attribute_id === "0") {
            alert("Please select a valid attribute first.");
            $(this).prop('checked', false);
            return;
        }
        if ($(this).is(':checked')) {
            // Add attribute_id to the array if it's not already included
            if (!show_in_summary_arr.includes(attribute_id)) {
                show_in_summary_arr.push(attribute_id);
            }
        } else {
            // Remove attribute_id from the array if it exists
            show_in_summary_arr = show_in_summary_arr.filter(id => id !== attribute_id);
        }
        $('#show_in_summary').val(show_in_summary_arr);
    });

    function clickShowOnSummaryElements() {
        const elements = document.querySelectorAll('.show_in_summary_check');
        elements.forEach(element => {
            element.click();
        });
    }

    clickShowOnSummaryElements();
</script>
