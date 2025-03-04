<x-admin-layout>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="ba_flex justify-between">
                <div class="ba_flex align_items_center">
                    <h5 class="card-heading">Edit Activity Group</h5>
                </div>

                <div class="ba_flex align_items_center">
                    <a href="{{ route('activity-group.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
            &nbsp;

            <form method="post" action="{{ route('activity-group.update', $activityGroup->id) }}" enctype="multipart/form-data">
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
                                        {{ old('freezone_id', $activityGroup->freezone_id) == $freezone->id ? 'selected' : '' }}>
                                        {{ $freezone->name }}
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('freezone_id')" />
                        </div>
                    </div>

                    <!-- License Selection -->
                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="license">License <span class="text-danger">*</span></label>
                            <select name="licence_id" class="custom-select">
                                <option value="">Select License</option>
                                @foreach($licenses as $license)
                                    <option value="{{ $license->id }}" freezone="{{$license->freezone_id}}" 
                                        {{ old('licence_id', $activityGroup->licence_id) == $license->id ? 'selected' : '' }}>
                                        {{ $license->name }}
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('license_id')" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="name">Group Name <span class="text-danger">*</span></label>
                            <input name="name" id="name" value="{{ old('name', $activityGroup->name) }}" type="text" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('name')" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="code">code <span class="text-danger">*</span></label>
                            <input name="code" id="code" value="{{ old('code',$activityGroup->code) }}" type="text" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('code')" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control">{{ old('description', $activityGroup->description) }}</textarea>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('description')" />
                        </div>
                    </div>
                </div>

                <div class="ba_flex align_items_center">
                    <button class="mt-1 btn btn-primary">Save</button>
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
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            const freezoneSelect = document.querySelector('select[name="freezone_id"]');
            const licenseSelect = document.querySelector('select[name="licence_id"]');

            // Save original license options for re-filtering
            const allLicenseOptions = Array.from(licenseSelect.options);

            // Event listener for Freezone dropdown
            freezoneSelect.addEventListener('change', function () {
                const selectedFreezoneId = this.value;

                // Clear current License dropdown
                licenseSelect.innerHTML = '';

                // Filter licenses matching the selected Freezone ID
                const filteredOptions = allLicenseOptions.filter(option => {
                    return option.getAttribute('freezone') == selectedFreezoneId || option.value === "";
                });

                // Append filtered options to License dropdown
                filteredOptions.forEach(option => licenseSelect.appendChild(option));
            });
        });

    </script>
</x-admin-layout>
