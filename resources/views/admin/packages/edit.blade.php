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
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="price">Price <span class="text-danger">*</span></label>
                            <input name="price" id="price" value="{{ old('price', $package->price) }}" type="number" class="form-control" min="0">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('price')" />
                        </div>
                    </div>

                    <!-- Renewable Price -->
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="renewable_price">Renewable Price</label>
                            <input name="renewable_price" id="renewable_price" value="{{ old('renewable_price', $package->renewable_price) }}" type="number" class="form-control" min="0">
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
                            <label for="activity_limit">Number of Free Activities Allowed</label>
                            <input type="number" id="activity-limit-input" name="activity_limit"
                                   class="form-control {{ $errors->has('activity_limit') ? 'is-invalid' : '' }}"
                                   value="{{ old('activity_limit', $package->allowed_free_packages) }}"
                                   min="1" max="{{ count($activities) }}" >
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('activity_limit')" />
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

                    <!-- Package Lines (Attributes and Attribute Options) -->
                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="package_lines"><b>Package Add-ons</b></label>
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
                                        </div>
                                    </div>
                                @endforeach

                                @foreach($package->attributeCosts as $line)
                                    <div class="row package-line-item" data-option="{{ $line->attribute_option_id }}">
                                        <div class="col-md-4">
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

                                        <div class="col-md-4">
                                            <div class="position-relative form-group">
                                                <label for="allowed_free_qty_{{ $costIndex }}">Allowed Free Quantity</label>
                                                <input name="package_lines[{{ $costIndex }}][allowed_free_qty]" value="{{ old('package_lines.' . $costIndex . '.allowed_free_qty', $line->allowed_free_qty) }}" type="number" class="form-control" min="0" value="">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="position-relative form-group">
                                                <label for="unit_price_{{ $costIndex }}">Unit Price</label>
                                                <input name="package_lines[{{ $costIndex }}][unit_price]" value="{{ old('package_lines.' . $costIndex . '.unit_price', $line->unit_price) }}" type="number" class="form-control" min="0" value="">
                                            </div>
                                        </div>

                                        <div class="col-md-12 d-flex justify-content-end">
                                            <!-- Only add the remove button for existing lines -->
                                            <button type="button" class="btn btn-warning remove-package-line">Remove</button>
                                        </div>
                                    </div>

                                    @php
                                        $costIndex++; // Increment costIndex for the next iteration
                                    @endphp
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

        function populateOptions(attributeId, optionsDropdown) {
            const filteredOptions = attributeOptions.filter(option => option.attribute_id == attributeId);
            optionsDropdown.empty(); // Clear existing options
            optionsDropdown.append('<option value="">Select Option</option>');

            filteredOptions.forEach(option => {
                optionsDropdown.append(`<option value="${option.id}">${option.value}</option>`);
            });
        }

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
            <div class="col-md-4">
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
            <div class="col-md-4 multiple_off">
                <div class="position-relative form-group">
                    <label for="allowed_free_qty_${index}">Allowed Free Quantity</label>
                    <input name="package_lines[${index}][allowed_free_qty]" type="number" class="form-control" min="0" value="">
                </div>
            </div>
            <div class="col-md-4 multiple_off">
                <div class="position-relative form-group">
                    <label for="unit_price_${index}">Unit Price</label>
                    <input name="package_lines[${index}][unit_price]" type="number" class="form-control" min="0" value="">
                </div>
            </div>
            <div class="col-md-12 d-flex justify-content-end">
                <button type="button" class="btn btn-warning remove-package-line">Remove</button>
            </div>
        </div>
    `;

            $('#package-lines-container').append(newLine);
            $('.package-line-item:last').find('.multiple_off').hide(); // Hide the multiple_off fields by default
        });


        // Handle remove package line
        $(document).on('click', '.remove-package-line', function() {
            $(this).closest('.package-line-item').remove();
        });

    });
</script>
