<x-admin-layout>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="ba_flex justify-between">
                <div class="ba_flex align_items_center">
                    <h5 class="card-heading">Edit Visa Package Attribute</h5>
                </div>

                <div class="ba_flex align_items_center">
                    <a href="{{ route('visa-package-attributes.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
            &nbsp;

            <form method="post" action="{{ route('visa-package-attributes.update', $visaPackageAttribute->id) }}" enctype="multipart/form-data">
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
                                    <option value="{{ $freezone->id }}" {{ old('freezone_id', $visaPackageAttribute->freezone_id) == $freezone->id ? 'selected' : '' }}>
                                        {{ $freezone->name }}
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('freezone_id')" />
                        </div>
                    </div>

                    <!-- Visa Package Attribute Header Selection -->
                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="attribute_header">Visa Package Attribute Header <span class="text-danger">*</span></label>
                            <select name="attribute_header_id" class="custom-select">
                                <option value="">Select Attribute Header</option>
                                @foreach($attributeHeaders as $attributeHeader)
                                    <option value="{{ $attributeHeader->id }}" {{ old('attribute_header_id', $visaPackageAttribute->attribute_header_id) == $attributeHeader->id ? 'selected' : '' }}>
                                        {{ $attributeHeader->title }}
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('attribute_header_id')" />
                        </div>
                    </div>

                    <!-- Value Field -->
                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="value">Value <span class="text-danger">*</span></label>
                            <input name="value" id="value" value="{{ old('value', $visaPackageAttribute->value) }}" type="text" class="form-control" maxlength="50" required>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('value')" />
                        </div>
                    </div>

                    <!-- Price Field -->
                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="price">Price <span class="text-danger">*</span></label>
                            <input name="price" id="price" value="{{ old('price', $visaPackageAttribute->price) }}" type="number" step="0.01" class="form-control" required>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('price')" />
                        </div>
                    </div>

                    <!-- Description Field -->
                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control">{{ old('description', $visaPackageAttribute->description) }}</textarea>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('description')" />
                        </div>
                    </div>
                </div>

                <div class="ba_flex align_items_center">
                    <button class="mt-1 btn btn-primary">Save Changes</button>
                </div>
            </form>

            <!-- Validation Errors Display -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
</x-admin-layout>
