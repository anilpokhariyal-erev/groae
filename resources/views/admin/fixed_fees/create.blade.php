<x-admin-layout>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="ba_flex justify-between">
                <div class="ba_flex align_items_center">
                    <h5 class="card-heading">Create Fixed Fee</h5>
                </div>

                <div class="ba_flex align_items_center">
                    <a href="{{ route('fixed-fee.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
            &nbsp;
            <form method="post" action="{{ route('fixed-fee.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <!-- Freezone Selection -->
                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="freezone">Freezone <span class="text-danger">*</span></label>
                            <select name="freezone_id" class="custom-select" id="freezone_id">
                                <option value="">Select Freezone</option>
                                @foreach($freezones as $freezone)
                                    <option value="{{ $freezone->id }}" {{ old('freezone_id') == $freezone->id ? 'selected' : '' }}>{{ $freezone->name }}</option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('freezone_id')" />
                        </div>
                    </div>

                    <!-- Type Selection -->
                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="type">Type <span class="text-danger">*</span></label>
                            <select name="type" class="custom-select" id="type">
                                <option value="">Select Type</option>
                                <option value="flat" {{ old('type') == 'flat' ? 'selected' : '' }}>Flat</option>
                                <option value="percent" {{ old('type') == 'percent' ? 'selected' : '' }}>Percent</option>
                            </select>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('type')" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="label">Label <span class="text-danger">*</span></label>
                            <input name="label" id="label" value="{{ old('label') }}" type="text" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('label')" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="value">Value <span class="text-danger">*</span></label>
                            <input name="value" id="value" value="{{ old('value') }}" type="number" step="0.01" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('value')" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('description')" />
                        </div>
                    </div>
                </div>

                <input type="hidden" name="status" value="1">

                <div class="ba_flex align_items_center">
                    <button class="mt-1 btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>

    @if (session('errors'))
        <div class="modal fade show" id="errorModal" style="display: block;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-red">Error</h5>
                    </div>
                    <div class="modal-body">
                        <p class="mb-0 text-red">{{ session('errors') }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="close-errorModal" class="btn btn-secondary">Ok</button>
                    </div>
                </div>
            </div>
        </div>
    @endif
</x-admin-layout>
