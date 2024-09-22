<x-admin-layout>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="ba_flex justify-between">
                <div class="ba_flex align_items_center">
                    <h5 class="card-heading">Edit Blog</h5>
                </div>

                <div class="ba_flex align_items_center">
                    <a href="{{ route('blog.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
            &nbsp;
            <form method="post" action="{{ route('blog.update', $blog->uuid) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">

                    <div class="col-md-8">
                        <div class="position-relative form-group">
                            <label for="title">Title <span class="text-danger">*</span></label>
                            <input name="title" id="title" value="{{ old('title', $blog->title) }}" type="text"
                                class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('title')" />
                        </div>

                        <div class="position-relative form-group">
                            <label for="short_description">Short Description <span class="text-danger">*</span></label>
                            <input name="short_description" id="short_description"
                                value="{{ old('short_description', $blog->short_description) }}" type="text"
                                class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('short_description')" />
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="ba_flex align_items_center ba_justify_content_center h-full pl-3 pr-3">
                            @if ($blog->image)
                                <img id="ba_current_image" width="150" src='{{ Storage::url($blog->image) }}'>
                            @else
                                <img id="ba_current_image" width="150" src='{{ asset('images/placeholder.png') }}'>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="youtube_link">Youtube Link</label>
                            <input name="youtube_link" id="youtube_link" type="text"
                                value="{{ old('youtube_link', $blog->youtube_link) }}" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('youtube_link')" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="ba_input_image">Image <span class="text-danger">*</span></label>
                            <div class="image-container">
                                <label for="ba_input_image" id="change-image-btn">Change Image</label>
                                <div id="ba_input_image_name">{{ basename($blog->image) }}</div>
                                <input name="image" type="file" id="ba_input_image" class="ba_display_none"
                                    accept="image/*" onchange="displayImage(this, 'ba_current_image')">
                                <x-input-error class="mt-2 text-red" :messages="$errors->get('image')" />
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="category">Category <span class="text-danger">*</span></label>
                            <select name="category[]" class="form-control ba_select2_document_format" multiple>
                                <option value="">Select Category</option>
                                @if ($category)
                                    @foreach ($category as $category_val)
                                        <option @if (in_array($category_val->id, $assigned_category)) selected @endif
                                            value="{{ $category_val->id }}">{{ $category_val->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('category')" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="ckeditor_description">Description <span class="text-danger">*</span></label>
                            <textarea name="description" id="ckeditor_description" class="h-500">{{ old('description', $blog->description) }}</textarea>
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
