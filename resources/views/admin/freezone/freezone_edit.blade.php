<x-admin-layout>
<style>
    /* The switch - the box around the slider */
    .switch {
        position: relative;
        display: block;
        width: 60px;
        height: 34px;
    }

    /* Hide default HTML checkbox */
    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    /* The slider */
    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        transition: .4s;
        border-radius: 34px;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 20px;
        width: 20px;
        left: 5px;
        bottom: 4px;
        background-color: white;
        transition: .4s;
        border-radius: 60%;
    }

    input:checked + .slider {
        background-color: #4CAF50;
    }

    input:checked + .slider:before {
        transform: translateX(26px);
    }
</style>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="ba_flex justify-between">
                <div class="ba_flex align_items_center">
                    <h5 class="card-heading">Edit Freezone</h5>
                </div>

                <div class="ba_flex align_items_center">
                    <a href="{{ route('freezones.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
            &nbsp;
            @if(session('success'))
                <div class="main-card">
                    <div class="card-body">
                        <div class="custom-alert" role="alert">
                            {{ session('success') }}
                        </div>
                    </div>
                </div>
            @endif
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

            <form method="post" action="{{ route('freezones.update', $freezone->uuid) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="ba_flex align_items_center pl-3 pr-3">
                        <div class="position-relative form-group">
                            <img id="ba_current_image" width="150" title="logo"
                                src="{{ $freezone->logo ? Storage::url($freezone->logo) : asset('images/placeholder.png') }}" alt="Freezone Logo">
                            <p style="text-align: center">Logo</p>
                        </div>
                    </div>
                    <div class="ba_flex align_items_center pl-3 pr-3">
                        <div class="position-relative form-group">
                            <img id="bi_current_image" width="150" title="background-image"
                                 src="{{ $freezone->background_image ? Storage::url($freezone->background_image) : asset('images/placeholder.png') }}" alt="Freezone Logo">
                            <p style="text-align: center">Background-image</p>
                        </div>
                    </div>
                    <div class="ba_flex align_items_center pl-3 pr-3">
                        <div class="position-relative form-group">
                            <img id="bg_current_image" width="150" title="background-image-logo"
                                 src="{{ $freezone->background_image_logo ? Storage::url($freezone->background_image_logo) : asset('images/placeholder.png') }}" alt="Freezone Logo">
                            <p style="text-align: center">Background-image-logo</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="name">Name <span class="text-danger">*</span></label>
                            <input name="name" id="name" value="{{ old('name', $freezone->name) }}"
                                type="text" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('name')" />
                        </div>

                        <div class="image-container">
                            <label for="ba_input_image" id="change-image-btn">Change Image</label>
                            <div id="ba_input_image_name">{{ basename($freezone->logo) }}</div>
                            <input name="freezone_logo" type="file" id="ba_input_image" class="ba_display_none"
                                accept="image/*" onchange="displayImage(this, 'ba_current_image')">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('freezone_logo')" />
                        </div>

                        <div class="image-container">
                            <label for="bi_input_image" id="change-image-btn">Change Background Image</label>
                            <div id="bi_input_image_name">{{ basename($freezone->background_image) }}</div>
                            <input name="freezone_background_image" type="file" id="bi_input_image" class="ba_display_none"
                                   accept="image/*" onchange="displayImage(this, 'bi_current_image')">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('freezone_background_image')" />
                        </div>

                        <div class="image-container">
                            <label for="bg_input_image" id="change-image-btn">Change Logo Background Image</label>
                            <div id="bg_input_image_name">{{ basename($freezone->background_image_logo) }}</div>
                            <input name="freezone_background_image_logo" type="file" id="bg_input_image" class="ba_display_none"
                                   accept="image/*" onchange="displayImage(this, 'bg_current_image')">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('freezone_background_image_logo')" />
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="position-relative form-group">
                                    <label for="trending">Trending </label>
                                    <div class="switch">
                                        <input type="checkbox" id="trendingSwitch" name="trending" {{ $freezone->trending ? 'checked' : '' }}>
                                        <label class="slider" for="trendingSwitch"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="position-relative form-group">
                                    <label for="cross_platform_fee">Cross Platform Fee<span class="text-danger">*</span></label>
                                    <input name="cross_platform_fee" id="cross_platform_fee" value="{{ old('cross_platform_fee', $freezone->cross_platform_fee) }}" type="number" class="form-control" min="0" required>
                                    <x-input-error class="mt-2 text-red" :messages="$errors->get('cross_platform_fee')" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="position-relative form-group">
                                    <label for="status">Status <span class="text-danger">*</span></label>
                                    <select name="status" class="form-control">
                                        <option @if ($freezone->status == 1) selected='selected' @endif value="1">Active</option>
                                        <option @if ($freezone->status == 0) selected='selected' @endif value="0">Inactive</option>
                                    </select>
                                    <x-input-error class="mt-2 text-red" :messages="$errors->get('status')" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                        <div class="col-md-4">
                            <div class="position-relative form-group">
                                <label for="max_activity_group_allowed">Max Activity Group Allowed<span class="text-danger">*</span></label>
                                <input name="max_activity_group_allowed" id="max_activity_group_allowed" value="{{ old('max_activity_group_allowed', $freezone->max_activity_group_allowed) }}" type="number" class="form-control" min="0" required>
                                <x-input-error class="mt-2 text-red" :messages="$errors->get('max_activity_group_allowed')" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="position-relative form-group">
                                <label for="max_activity_allowed">Max Activity Allowed<span class="text-danger">*</span></label>
                                <input name="max_activity_allowed" id="max_activity_allowed" value="{{ old('max_activity_allowed', $freezone->max_activity_allowed) }}" type="number" class="form-control" min="0" required>
                                <x-input-error class="mt-2 text-red" :messages="$errors->get('max_activity_allowed')" />
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="position-relative form-group mt-4 p-2">
                            <label for="freezone_default_attributes"><b>Freezone Default Attributes <span class="bg-dark attribute-count">0</span></b></label>
                            
                            <div id="freezone-attributes-container">
                                @foreach ($freezone->defaultAttributes as $key => $attribute)
                                    <div class="row freezone-attribute-item">
                                        <div class="col-md-4">
                                            <div class="position-relative form-group">
                                                <label for="attribute_id_{{ $key }}">Attribute <span class="text-danger">*</span></label>
                                                <select name="freezone_default_attributes[{{ $key }}][attribute_id]" class="custom-select" id="attribute_id_{{ $key }}" required>
                                                    <option value="">Select Attribute</option>
                                                    @foreach($attributes as $attr)
                                                        <option value="{{ $attr->id }}" data-allow_multiple="{{ $attr->allow_multiple }}" {{ $attr->id == $attribute->attribute_id ? 'selected' : '' }}>
                                                            {{ $attr->label }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <div class="position-relative form-group">
                                                <label for="attribute_option_id_{{ $key }}">Option <span class="text-danger">*</span></label>
                                                <select name="freezone_default_attributes[{{ $key }}][attribute_option_id]" class="custom-select" id="attribute_option_id_{{ $key }}" data-selected_val="{{ old('freezone_default_attributes.'.$key.'.attribute_option_id', $attribute->attribute_option_id) }}">
                                                    <option value="">Select Option</option>
                                                    <!-- Populate the options with JavaScript based on the selected attribute -->
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="position-relative form-group">
                                                <label for="attribute_value_{{ $key }}">Value <span class="text-danger">*</span></label>
                                                <input name="freezone_default_attributes[{{ $key }}][attribute_value]" type="number" class="form-control" min="0" value="{{ old('freezone_default_attributes.'.$key.'.unit_price', $attribute->unit_price) }}">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="position-relative form-group">
                                                <label for="attribute_free_qty_{{ $key }}">Allowed Free Qty <span class="text-danger">*</span></label>
                                                <input name="freezone_default_attributes[{{ $key }}][attribute_free_qty]" type="number" class="form-control" min="0" value="{{ old('freezone_default_attributes.'.$key.'.attribute_free_qty', $attribute->allowed_free_qty) }}">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="position-relative form-group">
                                                <label for="unit_price_{{ $key }}">Unit Price <span class="text-danger">*</span></label>
                                                <input name="freezone_default_attributes[{{ $key }}][unit_price]" type="number" class="form-control" min="0" value="{{ old('freezone_default_attributes.'.$key.'.unit_price', $attribute->unit_price) }}">
                                            </div>
                                        </div>

                                        <div class="col-md-12 d-flex justify-content-end">
                                            <button type="button" class="btn btn-warning remove-attribute-line">Remove</button>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            @if($freezone->defaultAttributes->isEmpty())
                            <!-- Multiple rows for default attributes -->
                            <div id="freezone-attributes-container">
                                <!-- Initially empty row -->
                                <div class="row freezone-attribute-item">
                                    <div class="col-md-4">
                                        <div class="position-relative form-group">
                                            <label for="attribute_id">Attribute <span class="text-danger">*</span></label>
                                            <select name="freezone_default_attributes[0][attribute_id]" class="custom-select">
                                                <option value="">Select Attribute</option>
                                                @foreach($attributes as $attribute)
                                                    <option value="{{ $attribute->id }}" data-allow_multiple="{{ $attribute->allow_multiple }}">{{ $attribute->label }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <div class="position-relative form-group">
                                            <label for="attribute_option_id">Option <span class="text-danger">*</span></label>
                                            <select name="freezone_default_attributes[0][attribute_option_id]" class="custom-select">
                                                <option value="">Select Option</option>
                                                <!-- Options will be populated with JS -->
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="position-relative form-group">
                                            <label for="attribute_value">Value <span class="text-danger">*</span></label>
                                            <input name="freezone_default_attributes[0][attribute_value]" type="number" class="form-control" min="0">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="position-relative form-group">
                                            <label for="attribute_free_qty">Allowed Free Qty <span class="text-danger">*</span></label>
                                            <input name="freezone_default_attributes[0][attribute_free_qty]" type="number" class="form-control" min="0">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="position-relative form-group">
                                            <label for="unit_price">Unit Price <span class="text-danger">*</span></label>
                                            <input name="freezone_default_attributes[0][unit_price]" type="number" class="form-control" min="0">
                                        </div>
                                    </div>


                                    <div class="col-md-12 d-flex justify-content-end">
                                        <button type="button" class="btn btn-warning remove-attribute-line">Remove</button>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <!-- Button to add more attributes -->
                            <button type="button" id="add-attribute-line" class="btn btn-secondary mt-2">Add More</button>
                        </div>
                    </div>
                </div>

                <div class="ba_flex align_items_center justify-content-end">
                    @if (session('status') === 'freezone-created')
                        <div class="text-success ml-2" id="successMessage">Saved</div>
                    @endif
                    <button class="mt-1 btn btn-primary">Update</button>
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

</x-admin-layout>
<script>
    const attributeOptions = @json($attributeOptions);
    // Call the function on document ready
    $(document).ready(function() {
        defaultAttributesOptions();

        $('select[name^="freezone_default_attributes"][name$="[attribute_id]"]').each(function() {
            const optionsDropdown = $(this).closest('.freezone-attribute-item').find('select[name^="freezone_default_attributes"][name$="[attribute_option_id]"]');
            const attributeId = $(this).val();

            // Check if the attribute is selected on page load
            if (attributeId) {
                populateOptions(attributeId, optionsDropdown);
            }
        });
    });

    function update_attribute_count(){
        $('.attribute-count').text($('.remove-attribute-line').length);
    }
    update_attribute_count();

    // Function to populate options based on selected attribute
   function populateOptions(attributeId, optionsDropdown) {
        const filteredOptions = attributeOptions.filter(option => option.attribute_id == attributeId);
        optionsDropdown.empty(); // Clear existing options
        optionsDropdown.append('<option value="">Select Option</option>');

        filteredOptions.forEach(option => {
            optionsDropdown.append(`<option value="${option.id}">${option.value}</option>`);
        });

        // Select the option based on the data-selected_val attribute
        const selectedVal = optionsDropdown.data('selected_val');
        if (selectedVal) {
            optionsDropdown.val(selectedVal); // Set the selected option
        }
    }

    // Handle adding new attribute line dynamically
    $('#add-attribute-line').on('click', function() {
        const index = $('#freezone-attributes-container .freezone-attribute-item').length;
        const newLine = `
            <div class="row freezone-attribute-item">
                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label for="attribute_id">Attribute <span class="text-danger">*</span></label>
                        <select name="freezone_default_attributes[${index}][attribute_id]" class="custom-select" data-index="${index}">
                            <option value="">Select Attribute</option>
                            @foreach($attributes as $attribute)
                                <option value="{{ $attribute->id }}" data-allow_multiple="{{ $attribute->allow_multiple }}">{{ $attribute->label }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label for="attribute_option_id">Option <span class="text-danger">*</span></label>
                        <select name="freezone_default_attributes[${index}][attribute_option_id]" class="custom-select">
                            <option value="">Select Option</option>
                            <!-- Options will be populated with JS -->
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label for="attribute_value">Value <span class="text-danger">*</span></label>
                        <input name="freezone_default_attributes[${index}][attribute_value]" type="number" class="form-control" min="0">
                    </div>
                </div>
                <div class="col-md-4" style="display:none">
                    <div class="position-relative form-group">
                        <label for="attribute_free_qty">Allowed Free Qty <span class="text-danger">*</span></label>
                        <input name="freezone_default_attributes[${index}][attribute_free_qty]" type="number" class="form-control" min="0">
                    </div>
                </div>
                <div class="col-md-4" style="display:none">
                    <div class="position-relative form-group">
                        <label for="unit_price">Unit Price <span class="text-danger">*</span></label>
                        <input name="freezone_default_attributes[${index}][unit_price]" type="number" class="form-control" min="0">
                    </div>
                </div>
                <div class="col-md-12 d-flex justify-content-end">
                    <button type="button" class="btn btn-warning remove-attribute-line">Remove</button>
                </div>
            </div>
        `;

        $('#freezone-attributes-container').append(newLine);

        // Attach change event listener to the newly added attribute dropdown
        const newAttributeDropdown = $('#freezone-attributes-container').find(`select[name^="freezone_default_attributes"][name$="[attribute_id]"]`).last();

        newAttributeDropdown.on('change', function() {
            const optionsDropdown = $(this).closest('.freezone-attribute-item').find('select[name^="freezone_default_attributes"][name$="[attribute_option_id]"]');

            // Call the toggle function to show/hide fields
            toggleQtyAndPriceFields($(this));

            // Populate options for the selected attribute
            if ($(this).val()) {
                populateOptions($(this).val(), optionsDropdown);
            } else {
                optionsDropdown.empty(); // Clear if no attribute selected
                optionsDropdown.append('<option value="">Select Option</option>');
            }
        });
        update_attribute_count();
    });


    // Handle removing an attribute line
    $(document).on('click', '.remove-attribute-line', function() {
        $(this).closest('.freezone-attribute-item').remove();
        update_attribute_count();
    });

    // Function to hide allowed free qty and unit price fields
    function toggleQtyAndPriceFields(attributeDropdown) {
        const selectedAttribute = attributeDropdown.find('option:selected');
        const allowMultiple = selectedAttribute.data('allow_multiple');

        // Find the parent element containing the attribute fields
        const attributeItem = attributeDropdown.closest('.freezone-attribute-item');
        if (allowMultiple=="1") {
            // Hide Allowed Free Qty and Unit Price fields if allow_multiple is true
            attributeItem.find('select[name^="freezone_default_attributes"][name$="[attribute_option_id]"]').closest('.col-md-4').show();
            attributeItem.find('input[name^="freezone_default_attributes"][name$="[attribute_value]"]').closest('.col-md-4').show();

            // Hide Allowed Free Qty and Unit Price fields
            attributeItem.find('input[name^="freezone_default_attributes"][name$="[attribute_free_qty]"]').closest('.col-md-4').hide();
            attributeItem.find('input[name^="freezone_default_attributes"][name$="[unit_price]"]').closest('.col-md-4').hide();
        } else {
             // Hide Option and Value fields if allow_multiple is false
            attributeItem.find('select[name^="freezone_default_attributes"][name$="[attribute_option_id]"]').closest('.col-md-4').hide();
            attributeItem.find('input[name^="freezone_default_attributes"][name$="[attribute_value]"]').closest('.col-md-4').hide();

            // Show Allowed Free Qty and Unit Price fields
            attributeItem.find('input[name^="freezone_default_attributes"][name$="[attribute_free_qty]"]').closest('.col-md-4').show();
            attributeItem.find('input[name^="freezone_default_attributes"][name$="[unit_price]"]').closest('.col-md-4').show();
        }
    }

    function defaultAttributesOptions() {
        // Select all attribute items
        $('.freezone-attribute-item').each(function() {
            // Get the current item context
            const attributeItem = $(this);

            // Find the dropdown for attribute_id
            const attributeDropdown = attributeItem.find('select[name^="freezone_default_attributes"][name$="[attribute_id]"]');

            // Get the current selected attribute option
            const selectedAttribute = attributeDropdown.find('option:selected');
            const allowMultiple = selectedAttribute.data('allow_multiple');

            if (allowMultiple=="1") {
                // Show Option and Value fields if allow_multiple is true
                attributeItem.find('select[name^="freezone_default_attributes"][name$="[attribute_option_id]"]').closest('.col-md-4').show();
                attributeItem.find('input[name^="freezone_default_attributes"][name$="[attribute_value]"]').closest('.col-md-4').show();

                // Hide Allowed Free Qty and Unit Price fields
                attributeItem.find('input[name^="freezone_default_attributes"][name$="[attribute_free_qty]"]').closest('.col-md-4').hide();
                attributeItem.find('input[name^="freezone_default_attributes"][name$="[unit_price]"]').closest('.col-md-4').hide();
            } else {
                // Hide Option and Value fields if allow_multiple is false
                attributeItem.find('select[name^="freezone_default_attributes"][name$="[attribute_option_id]"]').closest('.col-md-4').hide();
                attributeItem.find('input[name^="freezone_default_attributes"][name$="[attribute_value]"]').closest('.col-md-4').hide();

                // Show Allowed Free Qty and Unit Price fields
                attributeItem.find('input[name^="freezone_default_attributes"][name$="[attribute_free_qty]"]').closest('.col-md-4').show();
                attributeItem.find('input[name^="freezone_default_attributes"][name$="[unit_price]"]').closest('.col-md-4').show();
            }
        });

    }


    // Attach change event listener to each attribute dropdown
    $(document).on('change', 'select[name^="freezone_default_attributes"][name$="[attribute_id]"]', function() {
        const optionsDropdown = $(this).closest('.freezone-attribute-item').find('select[name^="freezone_default_attributes"][name$="[attribute_option_id]"]');

        // Call the toggle function to show/hide fields
        toggleQtyAndPriceFields($(this));

        // Populate options for the selected attribute
        if ($(this).val()) {
            populateOptions($(this).val(), optionsDropdown);
        } else {
            optionsDropdown.empty(); // Clear if no attribute selected
            optionsDropdown.append('<option value="">Select Option</option>');
        }
    });
</script>

