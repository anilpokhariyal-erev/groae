<x-admin-layout>
    <div class="main-card mb-3 card">
        <div class="card-body">

            @if (session('success'))
                <div class="text-success mb-2" id="successMessage">{{session('success')}}</div>
             @endif

            <form method="post" action="{{ route('testimonial.update', $testimonial->uuid) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">

                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <div>
                                @if($testimonial->profile_image)
                                    <img id="ba_current_image" width="150" src='{{ Storage::url($testimonial->profile_image) }}'>
                                @else
                                    <img id="ba_current_image" width="150" src='{{ asset("images/placeholder.png") }}'>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="customer_name">Customer Name <span class="text-danger">*</span></label>
                            <input name="customer_name" id="customer_name" value="{{old('customer_name', $testimonial->customer_name)}}" type="text" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('customer_name')" />
                        </div>
                    </div>

                    <!-- <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="profile_image">Profile Image <span class="text-danger">*</span></label>
                            <input name="profile_image" id="profile_image" type="file" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('profile_image')" />
                        </div>
                    </div> -->

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="ba_input_image">Profile Image <span class="text-danger">*</span></label>
                            <div class="image-container">
                                <label for="ba_input_image" id="change-image-btn">Change Image</label>
                                <div id="ba_input_image_name">{{basename( $testimonial->profile_image)}}</div>
                                <input name="profile_image" type="file" id="ba_input_image" class="ba_display_none" accept="image/*" onchange="displayImage(this, 'ba_current_image')">
                                <x-input-error class="mt-2 text-red" :messages="$errors->get('profile_image')" />
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="testimonial">Testimonial <span class="text-danger">*</span></label>
                            <textarea name="testimonial" id="testimonial" class="form-control">{{old('testimonial', $testimonial->testimonial)}}</textarea>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('testimonial')" />
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