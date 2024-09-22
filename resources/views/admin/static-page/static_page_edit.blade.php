<x-admin-layout>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="ba_flex justify-between">
                <div class="ba_flex align_items_center">
                    <h5 class="card-heading">Edit Static Content</h5>
                </div>

                <div class="ba_flex align_items_center">
                    <a href="{{route('static-page.index')}}" class="btn btn-primary">Back</a>
                </div>
            </div>
            &nbsp;

            <form method="post" action="{{ route('static-page.update', $static_page->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">

                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <!--<label for="page_type">Page type</label>
                            <select name="page_type" class="custom-select">
                                <option value="">Select Page type</option>
                                <option value="about_us" @if($static_page->page_type == 'about_us') selected @endif>About us</option>
                                <option value="registration_process" @if($static_page->page_type == 'registration_process') selected @endif>Registration Process</option>
                                <option value="powered_by_ai" @if($static_page->page_type == 'powered_by_ai') selected @endif>Powered by AI</option>
                                <option value="contact_us" @if($static_page->page_type == 'contact_us') selected @endif>Contact us </option>
                                <option value="terms_of_use" @if($static_page->page_type == 'terms_of_use') selected @endif>Terms of use</option>
                                <option value="privacy_policy" @if($static_page->page_type == 'privacy_policy') selected @endif>Privacy policy</option>
                                <option value="social_link" @if($static_page->page_type == 'social_link') selected @endif>Social Link</option>
                            </select>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('page_type')" /> -->
                            <label for="page_type">Page Name</label>
                            <input type="text" name="page_name" value="{{old('page_name',$static_page->page_name)}}" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('page_name')" />
                        </div>

                        <!--<div class="position-relative form-group">
                            <label for="ba_input_image">Image</label>
                            <div class="image-container">
                                <label for="ba_input_image" id="change-image-btn">Change Image</label>
                                <div id="ba_input_image_name">{{basename($static_page->image)}}</div>
                                <input name="image" type="file" id="ba_input_image" class="ba_display_none" accept="image/*" onchange="displayImage(this, 'ba_current_image')">
                                <x-input-error class="mt-2 text-red" :messages="$errors->get('image')" />
                            </div>
                        </div> -->
                    </div>

                    <!--<div class="col-md-4">
                        <div class="ba_flex align_items_center ba_justify_content_center h-full pl-3 pr-3">
                            @if($static_page->image)
                                <img id="ba_current_image" width="150" src='{{ Storage::url($static_page->image) }}'>
                            @else
                                <img id="ba_current_image" width="150" src='{{ asset("images/placeholder.png") }}'>
                            @endif
                        </div>
                    </div> -->


                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="ckeditor_description">Description <span class="text-danger">*</span></label>
                            <textarea name="description" id="ckeditor_description" class="h-500">{{old('description', $static_page->description)}}</textarea>
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
