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
                            <label for="page_name">Page Name</label>
                            <input type="text" name="page_name" value="{{old('page_name',$static_page->page_name)}}" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('page_name')" />
                        </div>                        
                    </div>

                    <div class="col-md-12">
                        <div class="position-relative form-group">                            
                            <label for="page_type">Parent</label>
                            <select name="parent_id" class="custom-select">
                                <option value="">Make it Parent</option>
                                @foreach($pages as $page)
                                <option value="{{$page->id}}" 
                                @if($page->id==$static_page->parent_id) selected @endif>
                                    {{$page->page_name}}
                                </option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('parent_id')" />
                        </div>                        
                    </div>

                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="ckeditor_description">Description <span class="text-danger">*</span></label>
                            <textarea name="description" id="ckeditor_description" class="h-500">{{old('description', $static_page->description)}}</textarea>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('description')" />
                        </div>
                    </div>

                    <div class="col-md-12">
                    <div class="position-relative form-group">
                            <label for="visible_in_footer">Visible In Footer</label>
                            <input type="checkbox" name="visible_in_footer" @if($static_page->visible_in_footer) checked @endif>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('visible_in_footer')" />
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
