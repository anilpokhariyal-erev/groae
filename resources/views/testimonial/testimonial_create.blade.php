<x-admin-layout>

    <div class="main-card mb-3 card">
        <div class="card-body">

            <form method="post" action="{{ route('testimonial.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="customer_name">Customer Name <span class="text-danger">*</span></label>
                            <input name="customer_name" id="customer_name" value="{{old('customer_name')}}" type="text" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('customer_name')" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="profile_image">Profile Image <span class="text-danger">*</span></label>
                            <input name="profile_image" id="profile_image" type="file" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('profile_image')" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="testimonial">Testimonial <span class="text-danger">*</span></label>
                            <textarea name="testimonial" id="testimonial" class="form-control">{{old('testimonial')}}</textarea>
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
