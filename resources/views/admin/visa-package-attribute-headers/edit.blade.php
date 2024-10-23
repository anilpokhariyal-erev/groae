<x-admin-layout>
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
            <div class="ba_flex justify-between">
                <div class="ba_flex align_items_center">
                    <h5 class="card-heading">Edit Visa Package Attribute</h5>
                </div>

                <div class="ba_flex align_items_center">
                    <a href="{{ route('visa-package-attribute-headers.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
            &nbsp;
            <form method="post" action="{{ route('visa-package-attribute-headers.update', $visaPackageAttributeHeader->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <!-- Visa Attribute Name -->
                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="name">Visa Attribute Name <span class="text-danger">*</span></label>
                            <input name="name" id="name" value="{{ old('name', $visaPackageAttributeHeader->name) }}" type="text" class="form-control" required>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('name')" />
                        </div>
                    </div>

                    <!-- Visa Attribute Title -->
                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="title">Visa Attribute Title <span class="text-danger">*</span></label>
                            <input name="title" id="title" value="{{ old('title', $visaPackageAttributeHeader->title) }}" type="text" class="form-control" required>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('title')" />
                        </div>
                    </div>

                    <!-- Status -->
                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="status">Status <span class="text-danger">*</span></label>
                            <select name="status" id="status" class="custom-select" required>
                                <option value="0" {{ old('status', $visaPackageAttributeHeader->status) == 0 ? 'selected' : '' }}>Inactive</option>
                                <option value="1" {{ old('status', $visaPackageAttributeHeader->status) == 1 ? 'selected' : '' }}>Active</option>
                            </select>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('status')" />
                        </div>
                    </div>
                </div>

                <div class="ba_flex align_items_center">
                    <button class="mt-1 btn btn-primary">Update</button>
                </div>
            </form>

        </div>
    </div>

</x-admin-layout>
