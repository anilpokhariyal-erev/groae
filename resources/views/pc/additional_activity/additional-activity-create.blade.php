<x-admin-layout>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <form method="post" action="{{ route('additionalactivity.store') }}" enctype="multipart/form-data">
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
                            <label for="image">Name</label>
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

                    <!--<div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="description">Description <span class="text-danger">*</span></label>
                            <textarea name="description" id="description" class="form-control">{{old('description')}}</textarea>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('description')" />
                        </div>
                    </div> -->

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
