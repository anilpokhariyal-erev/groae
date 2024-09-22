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
                            <select name="freezone_id" class="custom-select">
                                <option value="">Select Freezone</option>
                                @foreach($freezones as $freezone)
                                    <option value="{{$freezone->id}}" {{ old('freezone_id') == $freezone->id ? 'selected' : '' }}>{{$freezone->name}}</option>
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
                            <select name="currency" id="currency" class="custom-select">
                                <option value="">Select Currency</option>
                                <option value="USD">Dollar (USD)</option>
                                <option value="AED">Dirham (AED)</option>
                                <option value="EUR">Euro (EUR)</option>
                                <option value="INR">Rupees (INR)</option>
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

                    <!-- Package Lines (Attributes and Attribute Options) -->
                    <div class="col-md-12">
                    <div class="position-relative form-group">
                        <label for="package_lines">Package Add-ons</label>
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
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}" crossorigin="anonymous"></script>
    <script>
        let lineIndex = 1;
        document.getElementById('add-package-line').addEventListener('click', function() {
            let container = document.getElementById('package-lines-container');
            let newRow = document.createElement('div');
            newRow.classList.add('row', 'package-line-item');
            newRow.innerHTML = `
                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label for="attribute_id">Attribute <span class="text-danger">*</span></label>
                        <select name="package_lines[${lineIndex}][attribute_id]" class="custom-select">
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
                        <select name="package_lines[${lineIndex}][attribute_option_id]" class="custom-select">
                            <option value="">Select Option</option>
                            @foreach($attributeOptions as $option)
                                <option value="{{$option->id}}">{{$option->value}}</option>
                            @endforeach
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
            `;
            container.appendChild(newRow);
            lineIndex++;
        });

        $(document).ready(function() {
            // When an attribute is selected, load the corresponding options
            $(document).on('change', '.attribute-select', function() {
                var attributeId = $(this).val();
                var line = $(this).data('line'); // Get line number for the specific package line
                var $optionSelect = $('#option-select-' + line); // Select the option dropdown for this package line

                if (attributeId) {
                    $.ajax({
                        url: '/admin/get-attribute-options/' + attributeId, // Update this to your actual route
                        type: 'GET',
                        success: function(data) {
                            $optionSelect.empty(); // Clear previous options
                            $optionSelect.append('<option value="">Select Option</option>'); // Add placeholder option

                            // Append the fetched options
                            $.each(data.options, function(key, value) {
                                $optionSelect.append('<option value="'+ value.id +'">'+ value.value +'</option>');
                            });
                        }
                    });
                } else {
                    // Clear the options if no attribute is selected
                    $optionSelect.empty().append('<option value="">Select Option</option>');
                }
            });

            // Add more package lines functionality (you can add your logic here)
            var lineCounter = 1;
            $('#add-package-line').click(function() {
                var newLine = `
                <div class="row package-line-item">
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="attribute_id">Attribute <span class="text-danger">*</span></label>
                            <select name="package_lines[${lineCounter}][attribute_id]" class="custom-select attribute-select" data-line="${lineCounter}">
                                <option value="">Select Attribute</option>
                                @foreach($attributes as $attribute)
                                    <option value="{{$attribute->id}}">{{$attribute->name}}</option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('package_lines.${lineCounter}.attribute_id')" />
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="attribute_option_id">Option <span class="text-danger">*</span></label>
                            <select name="package_lines[${lineCounter}][attribute_option_id]" class="custom-select option-select" id="option-select-${lineCounter}">
                                <option value="">Select Option</option>
                            </select>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('package_lines.${lineCounter}.attribute_option_id')" />
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="addon_cost">Add-on Cost <span class="text-danger">*</span></label>
                            <input name="package_lines[${lineCounter}][addon_cost]" type="number" class="form-control" min="0">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('package_lines.${lineCounter}.addon_cost')" />
                        </div>
                    </div>
                </div>
                `;
                $('#package-lines-container').append(newLine);
                lineCounter++;
            });
        });

    </script>
</x-admin-layout>
