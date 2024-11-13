<x-admin-layout>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="ba_flex justify-between">
                <div class="ba_flex align_items_center">
                    <h5 class="card-heading">Edit Activity</h5>
                </div>

                <div class="ba_flex align_items_center">
                    <a href="{{ route('activity.index') }}" class="btn btn-primary">Back</a>
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

            <form method="POST" action="{{ route('activity.update', $activity->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="activity_group">Activity Group <span class="text-danger">*</span></label>
                            <select name="activity_group_id" id="activity_group" class="custom-select">
                                <option value="">Select Activity Group</option>
                                @foreach($activityGroups as $activityGroup)
                                    <option value="{{ $activityGroup->id }}"
                                            {{ old('activity_group_id', $activity->activity_group_id) == $activityGroup->id ? 'selected' : '' }}>
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
                            <select name="licence_id" id="license" class="custom-select">
                                <option value="">Select License</option>
                            </select>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('license_id')" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="name">Activity Name <span class="text-danger">*</span></label>
                            <input name="name" id="name" type="text" class="form-control"
                                   value="{{ old('name', $activity->name) }}">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('name')" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="code">code <span class="text-danger">*</span></label>
                            <input name="code" id="code" value="{{ old('code',$activity->code) }}" type="text" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('code')" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control">{{ old('description', $activity->description) }}</textarea>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('description')" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="price">Price <span class="text-danger">*</span></label>
                            <input name="price" id="price" type="number" step="0.01" class="form-control"
                                   value="{{ old('price', $activity->price) }}" required>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('price')" />
                        </div>
                    </div>
                </div>

                <div class="ba_flex align_items_center">
                    <button type="submit" class="mt-1 btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function loadLicenses(activityGroupId) {
            const licenseSelect = document.getElementById('license');
            licenseSelect.innerHTML = '<option value="">Select License</option>';

            if (activityGroupId) {
                fetch(`/api/activity/${activityGroupId}/license`, {
                    headers: {
                        'Authorization': 'Bearer {{ $token }}',
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                    }
                })
                    .then(response => response.json())
                    .then(data => {
                        data.licenses.forEach(license => {
                            const option = document.createElement('option');
                            option.value = license.id;
                            option.textContent = license.name;
                            // Pre-select if it matches the activity's current license
                            if (data.selected_license.id == license.id) {
                                option.selected = true;
                            }

                            licenseSelect.appendChild(option);
                        });
                    })
                    .catch(error => console.error('Error fetching licenses:', error));
            }
        }

        document.addEventListener('DOMContentLoaded', function () {
            const activityGroupSelect = document.getElementById('activity_group');

            // Load licenses on page load if activity group is pre-selected
            const initialActivityGroupId = activityGroupSelect.value;
            if (initialActivityGroupId) {
                loadLicenses(initialActivityGroupId);
            }

            // Load licenses on activity group change
            activityGroupSelect.addEventListener('change', function () {
                loadLicenses(this.value);
            });
        });
    </script>
</x-admin-layout>
