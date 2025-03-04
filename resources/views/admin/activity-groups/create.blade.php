<x-admin-layout>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="ba_flex justify-between">
                <div class="ba_flex align_items_center">
                    <h5 class="card-heading">Create Activity Group</h5>
                </div>

                <div class="ba_flex align_items_center">
                    <a href="{{ route('activity-group.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
            &nbsp;
            <form method="post" action="{{ route('activity-group.store') }}" enctype="multipart/form-data">
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

                    <!-- License Selection -->
                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="licence">License <span class="text-danger">*</span></label>
                            <select name="licence_id" class="custom-select" id="license">
                                <option value="">Select License</option>
                            </select>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('licence_id')" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="name">Group Name <span class="text-danger">*</span></label>
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
        document.getElementById('freezone_id').addEventListener('change', function () {
            const freezoneId = this.value;
            const licenseSelect = document.getElementById('license');

            // Clear previous options
            licenseSelect.innerHTML = '<option value="">Select License</option>';

            if (freezoneId) {
                fetch(`/api/activity-group/freezone/${freezoneId}/license`, {
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

                            licenseSelect.appendChild(option);
                        });
                    })
                    .catch(error => console.error('Error fetching licenses:', error));
            }
        });
    </script>
</x-admin-layout>
