<x-admin-layout>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="ba_flex justify-between">
                <div class="ba_flex align_items_center">
                    <h5 class="card-heading">Edit Fixed Fee</h5>
                </div>

                <div class="ba_flex align_items_center">
                    <a href="{{ route('fixed-fee.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger mt-3">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('fixed-fee.update', $fixedFee->id) }}">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="freezone_id">Freezone</label>
                            <select name="freezone_id" id="freezone_id" class="form-control">
                                @foreach ($freezones as $freezone)
                                    <option value="{{ $freezone->id }}" {{ $freezone->id == old('freezone_id', $fixedFee->freezone_id) ? 'selected' : '' }}>
                                        {{ $freezone->name }}
                                    </option>
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
                                <option value="flat" {{ old('type', $fixedFee->type) == 'flat' ? 'selected' : '' }}>Flat</option>
                                <option value="percent" {{ old('type', $fixedFee->type) == 'percent' ? 'selected' : '' }}>Percent</option>
                            </select>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('type')" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="label">Fee Label <span class="text-danger">*</span></label>
                            <input name="label" id="label" type="text" class="form-control"
                                   value="{{ old('label', $fixedFee->label) }}">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('label')" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control">{{ old('description', $fixedFee->description) }}</textarea>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('description')" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="value">Amount <span class="text-danger">*</span></label>
                            <input name="value" id="value" type="number" step="0.01" class="form-control"
                                   value="{{ old('value', $fixedFee->value) }}" required>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('value')" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="1" {{ old('status', $fixedFee->status) == 1 ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ old('status', $fixedFee->status) == 0 ? 'selected' : '' }}>Inactive</option>
                            </select>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('status')" />
                        </div>
                    </div>
                </div>

                <div class="ba_flex align_items_center">
                    <button type="submit" class="mt-1 btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>
