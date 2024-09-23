<x-admin-layout>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">Edit Package</h5>
            <form method="post" action="{{ route('package.update', $package->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <!-- Freezone Selection -->
                    <div class="col-md-12">
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
                            <select name="currency" id="currency" class="custom-select">
                                <option value="">Select Currency</option>
                                <option value="USD" {{ old('currency', $package->currency) == 'USD' ? 'selected' : '' }}>Dollar (USD)</option>
                                <option value="AED" {{ old('currency', $package->currency) == 'AED' ? 'selected' : '' }}>Dirham (AED)</option>
                                <option value="EUR" {{ old('currency', $package->currency) == 'EUR' ? 'selected' : '' }}>Euro (EUR)</option>
                                <option value="INR" {{ old('currency', $package->currency) == 'INR' ? 'selected' : '' }}>Rupees (INR)</option>
                            </select>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('currency')" />
                        </div>
                    </div>

                    <!-- Package Description -->
                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="description">Description <span class="text-danger">*</span></label>
                            <textarea name="description" id="description" class="form-control">{{ old('description', $package->description) }}</textarea>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('description')" />
                        </div>
                    </div>

                    <!-- Package Lines (Attributes and Attribute Options) -->
                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="package_lines">Package Add-ons</label>

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
                                        <div class="row package-line-item">
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
                                                        @foreach($attributeOptions as $option)
                                                            <option value="{{ $option->id }}"
                                                                    @if($line->attribute_option_id == $option->id) selected @endif>
                                                                {{ $option->value }}
                                                            </option>
                                                        @endforeach
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
        // Create an object to hold attribute and option data
        const attributes = @json($attributes);
        const attributeOptions = @json($attributeOptions);

        // Handle adding new package line
        $(document).on('click', '#add-package-line', function() {
            const index = $('#package-lines-container .package-line-item').length;

            let newLine = `
            <div class="row package-line-item">
                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label for="attribute_id">Attribute <span class="text-danger">*</span></label>
                        <select name="package_lines[${index}][attribute_id]" class="custom-select">
                            <option value="">Select Attribute</option>
            `;

            attributes.forEach(attribute => {
                newLine += `<option value="${attribute.id}">${attribute.name}</option>`;
            });

            newLine += `
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label for="attribute_option_id">Option <span class="text-danger">*</span></label>
                        <select name="package_lines[${index}][attribute_option_id]" class="custom-select">
                            <option value="">Select Option</option>
            `;

            attributeOptions.forEach(option => {
                newLine += `<option value="${option.id}">${option.value}</option>`;
            });

            newLine += `
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
    });
</script>
