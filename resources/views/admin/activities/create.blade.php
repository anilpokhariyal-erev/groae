<x-admin-layout>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="ba_flex justify-between">
                <div class="ba_flex align_items_center">
                    <h5 class="card-heading">Create Activity</h5>
                </div>

                <div class="ba_flex align_items_center">
                    <a href="{{ route('activity.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
            &nbsp;
            <form method="post" action="{{ route('activity.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="activity_group">Activity Group <span class="text-danger">*</span></label>
                            <select name="activity_group_id" class="custom-select">
                                <option value="">Select Activity Group</option>
                                @foreach($activityGroups as $activityGroup)
                                    <option value="{{ $activityGroup->id }}" 
                                        {{ old('activity_group_id', $activityGroup->id) == $activityGroup->id ? 'selected' : '' }}>
                                        {{ $activityGroup->name }}
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('activity_group_id')" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="license">License <span class="text-danger">*</span></label>
                            <select name="licence_id" class="custom-select" id="license">
                                <option value="">Select License</option>
                                @foreach($licenses as $license)
                                    <option value="{{ $license->id }}" 
                                        {{ old('licence_id') == $license->id ? 'selected' : '' }}>
                                        {{ $license->name }}
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('license_id')" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="name">Activity Name <span class="text-danger">*</span></label>
                            <input name="name" id="name" value="{{ old('name') }}" type="text" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('name')" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="price">Price <span class="text-danger">*</span></label>
                            <input name="price" id="price" value="{{ old('price') }}" type="number" step="0.01" class="form-control" required>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('price')" />
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

                <div class="ba_flex align_items_center">
                    <button class="mt-1 btn btn-primary">Save</button>
                </div>
            </form>

        </div>
    </div>
</x-admin-layout>
