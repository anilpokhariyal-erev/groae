<x-admin-layout>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="ba_flex justify-between">
                <div class="ba_flex align_items_center">
                    <h5 class="card-heading">Edit Attribute</h5>
                </div>

                <div class="ba_flex align_items_center">
                    <a href="{{ route('attributes.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
            &nbsp;
            <form method="post" action="{{ route('attributes.update', $attribute->id) }}">
                @csrf
                @method('PUT')
                <div class="row">

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="name">Name <span class="text-danger">*</span></label>
                            <input name="name" id="name" type="text" value="{{ old('name', $attribute->name) }}" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('name')" />
                        </div>

                        <div class="position-relative form-group">
                            <label for="label">Label <span class="text-danger">*</span></label>
                            <input name="label" id="label" type="text" value="{{ old('label', $attribute->label) }}" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('label')" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="status">Status <span class="text-danger">*</span></label>
                            <select name="status" id="status" class="form-control">
                                <option value="1" {{ old('status', $attribute->status) == '1' ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ old('status', $attribute->status) == '0' ? 'selected' : '' }}>Inactive</option>
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
