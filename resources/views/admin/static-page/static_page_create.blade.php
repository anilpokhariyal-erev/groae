<x-admin-layout>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <center>
                @if(session('error'))
                <div class="alert alert-danger text-red" role="alert">
                    {{session('error')}}
                </div>
                @endif
            </center>
            <form method="post" action="{{ route('static-page.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-md-8">
                        <div class="position-relative form-group">
                            <label for="page_type">Page Name</label>
                            <input type="text" name="page_name" value="{{old('page_name')}}" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('page_name')" />
                        </div>

                        <div class="position-relative form-group">
                            <label for="image">Image</label>
                            <input name="image" id="image" type="file" accept="image/*" class="form-control" onchange="displayImage(this, 'ba_current_image')">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('image')" />
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="ba_flex align_items_center ba_justify_content_center h-full pl-3 pr-3">
                            <img id="ba_current_image" width="180" src='{{ asset("images/placeholder.png") }}'>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="ckeditor_description">Description <span class="text-danger">*</span></label>
                            <textarea name="description" id="ckeditor_description" class="h-500">{{old('description')}}</textarea>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('description')" />
                        </div>
                    </div>

                </div>
                <div class="ba_flex align_items_center" style="margin:1%">
                    <button class="mt-1 btn btn-primary">Save</button>
                </div>
                
            </form>
                

        </div>
    </div>
</x-admin-layout>
