<x-admin-layout>

    <div class="main-card mb-3 card">
        <div class="card-body">

            <form method="post" action="{{ route('other-service.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="service_type">Service Type <span class="text-danger">*</span></label>
                            <select name="service_type" class="custom-select">
                                <option value="">Select Service Type</option>
                                <option value="pre_incorporation">Pre Incorporation</option>
                                <option value="post_incorporation">Post Incorporation</option>
                            </select>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('service_type')" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="image">Image</label>
                            <input name="image" id="image" type="file" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('image')" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="service_name">Service Name <span class="text-danger">*</span></label>
                            <input name="service_name" id="service_name" value="{{old('service_name')}}" type="text" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('service_name')" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="about">About <span class="text-danger">*</span></label>
                            <input name="about" id="about" type="text" value="{{old('about')}}" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('about')" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="description">Description <span class="text-danger">*</span></label>
                            <textarea name="description" id="description" class="form-control">{{old('description')}}</textarea>
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
