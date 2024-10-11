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
    </script>
</x-admin-layout>
