<x-admin-layout>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="ba_flex justify-between">
                <div class="ba_flex align_items_center">
                    <h5 class="card-heading">Create Offer</h5>
                </div>

                <div class="ba_flex align_items_center">
                    <a href="{{route('offer.index')}}" class="btn btn-primary">Back</a>
                </div>
            </div>
            &nbsp;
            <form method="post" action="{{ route('offer.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="freezone">Freezone <span class="text-danger">*</span></label>
                            <select name="freezone" class="form-control">
                                <option value="">Select Freezone</option>
                                @if($freezones)
                                    @foreach($freezones as $freezone_val)
                                        <option @if(old('freezone') == $freezone_val->id) selected @endif value="{{$freezone_val->id}}">{{ucwords($freezone_val->name)}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="title">Title <span class="text-danger">*</span></label>
                            <input name="title" id="title" value="{{old('title')}}" type="text" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('title')" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="image">Image <span class="text-danger">*</span></label>
                            <input name="image" id="image" type="file" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('image')" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="discount">Discount % <span class="text-danger">*</span></label>
                            <input name="discount" id="discount" type="number" value="{{old('discount')}}" autocomplete="off" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('discount')" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="description">Description </label>
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
</x-admin-layout>
