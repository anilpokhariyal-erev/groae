<x-admin-layout>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="ba_flex justify-between">
                <div class="ba_flex align_items_center">
                    <h5 class="card-heading">Create Freezone</h5>
                </div>

                <div class="ba_flex align_items_center">
                    <a href="{{ route('freezones.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
            &nbsp;
            <form method="post" action="{{ route('freezones.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="name">Name <span class="text-danger">*</span></label>
                            <input name="name" id="name" value="{{ old('name') }}" type="text" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('name')" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="freezone_logo">Logo <span class="text-danger">*</span></label>
                            <input name="freezone_logo" id="freezone_logo" type="file" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('freezone_logo')" />
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="free_individual_shareholders">Free Individual Shareholders</label>
                            <input name="free_individual_shareholders" id="free_individual_shareholders" value="{{ old('free_individual_shareholders', 0) }}" type="number" class="form-control" min="0">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('free_individual_shareholders')" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="free_corporate_shareholders">Free Corporate Shareholders</label>
                            <input name="free_corporate_shareholders" id="free_corporate_shareholders" value="{{ old('free_corporate_shareholders', 0) }}" type="number" class="form-control" min="0">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('free_corporate_shareholders')" />
                        </div>
                    </div>
                </div>

                <div class="ba_flex align_items_center">
                    <button class="mt-1 btn btn-primary">Save</button>
                    @if (session('status') === 'freezone-created')
                    <div class="text-success ml-2" id="successMessage">Saved</div>
                    @endif
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
