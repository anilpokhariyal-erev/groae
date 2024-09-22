<x-admin-layout>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="ba_flex justify-between">
                <div class="ba_flex align_items_center">
                    <h5 class="card-heading">Edit Category</h5>
                </div>

                <div class="ba_flex align_items_center">
                    <a href="{{route('category.index')}}" class="btn btn-primary">Back</a>
                </div>
            </div>
            &nbsp;

            <form method="post" action="{{ route('category.update', $category->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="name">Name <span class="text-danger">*</span></label>
                            <input name="name" id="name" value="{{old('name', $category->name)}}" type="text" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('name')" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="slug">Slug <span class="text-danger">*</span></label>
                            <input name="slug" id="slug" type="text" value="{{old('slug', $category->name)}}" autocomplete="off" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('slug')" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="parent_category">Parent Category</label>
                            <select id="parent_category" name="parent_id" class="form-control">
                                <option value="0">Select</option>
                                @if($categories)
                                    @foreach($categories as $category_val)
                                        <option value="{{$category_val->id}}" @if ($category->parent_id == $category_val->id) selected @endif>{{$category_val->name}}</option>
                                    @endforeach
                                @endif
                            </select>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('parent_id')" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="status">Status <span class="text-danger">*</span></label>
                            <select id="status" name="status" class="form-control">
                                <option value="1" @if ($category->status == 1) selected @endif >Active</option>
                                <option value="0" @if ($category->status == 0) selected @endif >Inactive</option>
                            </select>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('status')" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control">{{old('description', $category->description)}}</textarea>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('description')" />
                        </div>
                    </div>
                </div>

                <div class="ba_flex align_items_center">
                    <button class="mt-1 btn btn-primary">Update</button>
                </div>
            </form>

        </div>
    </div>
</x-admin-layout>