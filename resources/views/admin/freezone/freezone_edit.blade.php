<x-admin-layout>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="ba_flex justify-between">
                <div class="ba_flex align_items_center">
                    <h5 class="card-heading">Edit Freezone</h5>
                </div>

                <div class="ba_flex align_items_center">
                    <a href="{{ route('freezones.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
            &nbsp;

            <form method="post" action="{{ route('freezones.update', $freezone->uuid) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">

                    <div class="ba_flex align_items_center pl-3 pr-3">
                        <div class="position-relative form-group">
                            <img id="ba_current_image" width="150"
                                src="{{ $freezone->logo ? Storage::url($freezone->logo) : asset('images/placeholder.png') }}" alt="Freezone Logo">
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="name">Name <span class="text-danger">*</span></label>
                            <input name="name" id="name" value="{{ old('name', $freezone->name) }}"
                                type="text" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('name')" />
                        </div>

                        <div class="image-container">
                            <label for="ba_input_image" id="change-image-btn">Change Image</label>
                            <div id="ba_input_image_name">{{ basename($freezone->logo) }}</div>
                            <input name="freezone_logo" type="file" id="ba_input_image" class="ba_display_none"
                                accept="image/*" onchange="displayImage(this, 'ba_current_image')">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('freezone_logo')" />
                        </div>

                        <div class="position-relative form-group">
                            <label for="status">Status <span class="text-danger">*</span></label>
                            <select name="status" class="form-control">
                                <option @if ($freezone->status == 1) selected='selected' @endif value="1">
                                    Active</option>
                                <option @if ($freezone->status == 0) selected='selected' @endif value="0">
                                    Inactive</option>
                            </select>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('status')" />
                        </div>




                    </div>

                </div>

                <div class="ba_flex align_items_center justify-content-end">
                    @if (session('status') === 'freezone-created')
                        <div class="text-success ml-2" id="successMessage">Saved</div>
                    @endif
                    <button class="mt-1 btn btn-primary">Update</button>
                </div>
            </form>

        </div>
    </div>

    @if (session('error'))
        <div class="modal fade show" id="errorModal" style="display: block;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-red">Error</h5>
                    </div>
                    <div class="modal-body">
                        <p class="mb-0 text-red">{{ session('error') }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="close-errorModal" class="btn btn-secondary">Ok</button>
                    </div>
                </div>
            </div>
        </div>
    @endif

</x-admin-layout>
