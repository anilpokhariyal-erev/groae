<x-admin-layout>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <form method="post" action="{{ route('visatype.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="freezone">Freezone <span class="text-danger">*</span></label>
                            <select name="freezone" class="custom-select">
                                <option value="">Select Freezone</option>
                                @if($freezone)
                                    @foreach($freezone as $freezone_val)
                                        <option @if(old('freezone') == $freezone_val->id) selected='selected' @endif value="{{$freezone_val->id}}">{{$freezone_val->name}}</option>
                                    @endforeach
                                @endif
                            </select>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('freezone')" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="name">Name <span class="text-danger">*</span></label>
                            <input name="name" id="name" value="{{old('name')}}" type="text" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('name')" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="price">Price <span class="text-danger">*</span></label>
                            <input name="price" id="price" value="{{old('price')}}" type="number" class="form-control" min="0">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('price')" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="validity">Validity <span class="text-danger">*</span></label>
                            <input name="validity" id="validity" value="{{old('validity')}}" type="number" class="form-control" min="1" max="50">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('validity')" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="validity_type">Validity Type <span class="text-danger">*</span></label>
                            <select name="validity_type" id="validity_type" class="form-control">
                                <option value="yearly">Yearly</option>
                            </select>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('validity_type')" />
                        </div>
                    </div>

                    

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="min_no_visa">Minimum Number of Visa <span class="text-danger">*</span></label>
                            <input name="min_no_visa" id="min_no_visa" value="{{old('min_no_visa')}}" type="number" class="form-control" min="0">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('min_no_visa')" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="max_no_visa">Maximum Number of Visa <span class="text-danger">*</span></label>
                            <input name="max_no_visa" id="max_no_visa" value="{{old('max_no_visa')}}" type="number" class="form-control" min="0">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('max_no_visa')" />
                        </div>
                    </div>

                </div>

                <div class="ba_flex align_items_center">
                    <button class="mt-1 btn btn-primary">Save</button>
                    @if (session('success'))
                    <div class="text-success ml-2" id="successMessage">{{session('success')}}</div>
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
