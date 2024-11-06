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
            <form method="post" action="{{ route('package.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <!-- Freezone Selection -->
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="freezone">Freezone <span class="text-danger">*</span></label>
                            <select name="freezone_id" id="freezone-select" class="custom-select">
                                <option value="">Select Freezone</option>
                                @foreach($freezones as $freezone)
                                    <option value="{{$freezone->id}}" data-uuid="{{$freezone->uuid}}" {{ old('freezone_id') == $freezone->id ? 'selected' : '' }}>
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
                            <input name="title" id="title" value="{{old('title')}}" type="text" class="form-control" required>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('title')" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Package Price -->
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="price">Price <span class="text-danger">*</span></label>
                            <input name="price" id="price" value="{{old('price')}}" type="number" class="form-control" min="0" required>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('price')" />
                        </div>
                    </div>

                    <!-- Renewable Price -->
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="renewable_price">Renewable Price<span class="text-danger">*</span></label>
                            <input name="renewable_price" id="renewable_price" value="{{old('renewable_price')}}" type="number" class="form-control" min="0" require>
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
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="activity_limit">Number of Free Activities Allowed<span class="text-danger">*</span></label>
                            <input type="number" id="activity-limit-input" name="activity_limit"
                                   class="form-control" value="{{ old('activity_limit') }}"
                                   min="1" max="{{ count($activities) }}">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('activity_limit')" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Package Description -->
                    <div class="col-md-8">
                        <div class="position-relative form-group">
                            <label for="description">Description <span class="text-danger">*</span></label>
                            <textarea name="description" id="description" class="form-control">{{old('description')}}</textarea>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('description')" />
                        </div>
                    </div>

                    <div class="col-md-3 p-2">
                        <div class="position-relative form-group">
                            <label for="trending">Trending</label>
                            <br>
                            <label class="switch">
                                <input type="checkbox" name="trending" id="trending" value="1" {{ old('trending') ? 'checked' : '' }}>
                                <span class="slider"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Package Lines (Attributes and Attribute Options) -->
                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="package_lines"><b>Package Add-ons</b></label>
                            <div id="package-lines-container">
                            </div>
                            <button type="button" id="add-package-line" class="btn btn-secondary mt-2">Add More</button>
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

        document.getElementById('add-package-line').addEventListener('click', function() {
            let lineIndex = $('.package-line-item').length +1;
            let container = document.getElementById('package-lines-container');
            let newRow = document.createElement('div');
            newRow.classList.add('row', 'package-line-item');
            newRow.innerHTML = `
                <div class="col-lg-3">
                    <div class="position-relative form-group">
                        <label for="attribute_id">Attribute <span class="text-danger">*</span></label>
                        <select name="package_lines[${lineIndex}][attribute_id]" class="custom-select attribute-select" data-line="${lineIndex}">
                            <option value="">Select Attribute</option>
                            @foreach($attributes as $attribute)
            <option value="{{$attribute->id}}" data-allow-multiple="{{$attribute->allow_multiple}}">{{$attribute->label}}</option>
                            @endforeach
            </select>
            <x-input-error class="mt-2 text-red" :messages="$errors->get('package_lines.${lineIndex}.attribute_id')" />
                    </div>
                </div>
                <div class="col-md-4 multiple_on">
                    <div class="position-relative form-group">
                        <label for="attribute_option_id">Option <span class="text-danger">*</span></label>
                        <select name="package_lines[${lineIndex}][attribute_option_id]" class="custom-select option-select" id="option-select-${lineIndex}">
                            <option value="">Select Option</option>
                        </select>
                        <x-input-error class="mt-2 text-red" :messages="$errors->get('package_lines.${lineIndex}.attribute_option_id')" />
                    </div>
                </div>
                <div class="col-md-4 multiple_on">
                    <div class="position-relative form-group">
                        <label for="addon_cost">Add-on Cost <span class="text-danger">*</span></label>
                        <input name="package_lines[${lineIndex}][addon_cost]" type="number" class="form-control" min="0">
                        <x-input-error class="mt-2 text-red" :messages="$errors->get('package_lines.${lineIndex}.addon_cost')" />
                    </div>
                </div>
                <div class="col-lg-3 multiple_off">
                    <div class="position-relative form-group">
                      <label for="allowed_free_qty_${lineIndex}">Allowed Free Quantity</label>
                      <input name="package_lines[${lineIndex}][allowed_free_qty]" type="number" class="form-control" min="0" value="">
                    </div>
                </div>

                <div class="col-lg-3 multiple_off">
                    <div class="position-relative form-group">
                      <label for="max_allowed_qty_${lineIndex}">Allowed Max Quantity</label>
                      <input name="package_lines[${lineIndex}][max_allowed_qty]" type="number" class="form-control" min="0" value="">
                    </div>
                </div>

                  <div class="col-lg-3 multiple_off">
                    <div class="position-relative form-group">
                      <label for="unit_price_${lineIndex}">Unit Price</label>
                      <input name="package_lines[${lineIndex}][unit_price]" type="number" class="form-control" min="0" value="">
                    </div>
                  </div>
                <div class="col-md-12 d-flex justify-content-end">
                    <button type="button" class="btn btn-warning remove-package-line">Remove</button>
                </div>
            `;
            container.appendChild(newRow);
            $('.package-line-item:last').find('.multiple_off').hide();
        });

        $(document).on('click', '.remove-package-line', function() {
            $(this).closest('.package-line-item').remove();
        });

        $(document).ready(function() {
            $(document).on('change', '.attribute-select', function() {
                var attributeId = $(this).val();
                var line = $(this).data('line');
                var $optionSelect = $('#option-select-' + line);
                let allow_multiple = $(this).find(':selected').data('allow-multiple');
                if(allow_multiple =='0'){
                    $(this).closest('.package-line-item').find('.multiple_off').show();
                    $(this).closest('.package-line-item').find('.multiple_on').hide();
                }else{
                    $(this).closest('.package-line-item').find('.multiple_on').show();
                    $(this).closest('.package-line-item').find('.multiple_off').hide();

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
                }
            });
        });

        $(document).ready(function () {
            $('#freezone-select').on('change', function () {
                $('#package-lines-container').find('.package-line-item').remove();
                let freezone_uuid = $(this).find(':selected').data('uuid');
                if (freezone_uuid === '') {
                    return;
                }

                $.ajax({
                    url: `/api/freezone/${freezone_uuid}/get-default-attributes/`,
                    type: 'GET',
                    headers: {
                        'Authorization': 'Bearer {{$token}}', // Provide Sanctum token in header
                        'Accept': 'application/json'
                    },
                    success: function (response) {
                        // Track the number of existing package lines to avoid conflicts
                        let existingLines = $('.package-line-item').length;

                        response.default_attributes.forEach((attribute, index) => {
                            let line_no = existingLines + index + 1; // Adjust line number based on existing lines
                            $('#add-package-line').click(); // Ensure this adds a new line to the DOM

                            // Find the last added attribute-select element
                            let $lastAttributeSelect = $('.attribute-select:last');
                            $lastAttributeSelect.val(attribute.attribute_id).change();

                                // Use dynamic selectors for the newly added package line inputs
                                if (attribute.attribute_option_id > 0) {
                                    setTimeout(function () {
                                    $(`select[name="package_lines[${line_no}][attribute_option_id]"]`).val(attribute.attribute_option_id).change();
                                    }, 900);
                                    $(`input[name="package_lines[${line_no}][addon_cost]"]`).val(attribute.unit_price);
                                } else {
                                    $(`input[name="package_lines[${line_no}][allowed_free_qty]"]`).val(attribute.allowed_free_qty);
                                    $(`input[name="package_lines[${line_no}][unit_price]"]`).val(attribute.unit_price);
                                }
                        });
                    },
                    error: function (xhr, status, error) {
                        console.error('Error: ' + error);
                        $('#response').html('<p>An error occurred</p>');
                    }
                });
            });
        });

    </script>
</x-admin-layout>
