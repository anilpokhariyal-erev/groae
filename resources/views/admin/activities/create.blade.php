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
                            <select name="activity_group_id" class="custom-select" id="activity_group">
                                <option value="">Select Activity Group</option>
                                @foreach($activityGroups as $activityGroup)
                                    <option value="{{ $activityGroup->id }}">
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
                            <label for="code">code <span class="text-danger">*</span></label>
                            <input name="code" id="code" value="{{ old('code') }}" type="text" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('code')" />
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

    <script>
        document.getElementById('activity_group').addEventListener('change', function () {
            const activityGroupId = this.value;
            const licenseSelect = document.getElementById('license');

            // Clear previous options
            licenseSelect.innerHTML = '<option value="">Select License</option>';

            if (activityGroupId) {
                fetch(`/api/activity/${activityGroupId}/license`, {
                    headers: {
                        'Authorization': 'Bearer {{ $token }}', // Provide Sanctum token in header
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                    }
                })
                    .then(response => response.json())
                    .then(data => {
                        console.log(data);

                        // Add all licenses to the dropdown
                        data.licenses.forEach(license => {
                            const option = document.createElement('option');
                            option.value = license.id;
                            option.textContent = license.name;

                            // Pre-select if it matches the selected_license ID
                            if (data.selected_license && data.selected_license.id === license.id) {
                                option.selected = true;
                            }

                            licenseSelect.appendChild(option);
                        });
                    })
                    .catch(error => console.error('Error fetching licenses:', error));
            }
        });
    </script>
</x-admin-layout>
