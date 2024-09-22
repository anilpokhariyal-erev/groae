<x-admin-layout>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <form method="GET" action="{{url()->current()}}">
                <div class="ba_flex justify-between">

                    <div class="ba_flex align_items_center">
                        <div class="ba_flex align_items_center mr-1 ml-1">
                            <div class="white-space-nowrap mr-1 ml-1">Keyword:</div>
                            <input type="text" id="title" value="{{request('title')}}" name="title" class="form-control">
                        </div>

                        <div class="ba_flex align_items_center mr-1 ml-1">
                            <div class="white-space-nowrap mr-1 ml-1">Start Date:</div>
                            <input type="date" id="start-date" value="{{request('start_date')}}" name="start_date" class="form-control">
                        </div>

                        <div class="ba_flex align_items_center mr-1 ml-1">
                            <div class="white-space-nowrap mr-1 ml-1">End Date:</div>
                            <input type="date" id="end-date" value="{{request('end_date')}}" name="end_date" class="form-control">
                        </div>

                        <button id="filter-button" class="btn btn-primary mr-1 ml-1">Filter</button>
                        <a href="{{route('blog.index')}}" class="btn btn-primary">Reset</a>
                    </div>
                
                    <div class="ba_flex align_items_center">
                        <a href="{{route('blog.create')}}" class="btn btn-primary text-white {{ $has_role_or_permission('create-blog', 'disabled_link') }}">Create Blog</a>
                    </div>

                </div>
                <x-input-error class="mt-2 text-red" :messages="$errors->get('start_date')" />
            </form>
        </div>
    </div>

    <div class="main-card mb-3 card mt-2">
        <div class="card-body">
            <h5 class="card-heading">blogs</h5>
            <div class="table-responsive">
                <table class="mb-0 table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Short Description</th>
                            <th>Created Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1; @endphp
                        @foreach($blogs as $blog)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{ucfirst($blog->title)}}</td>
                                <td>{{ucfirst($blog->short_description)}}</td>
                                <td>{{$blog->created_at->format('Y-m-d')}}</td>
                                <td>
                                    <a class="ml-1 mr-1 {{ $has_role_or_permission('edit-blog', 'disabled_link') }}" href="{{route('blog.edit', $blog->uuid)}}">Edit</a>
                                    <a class="ml-1 mr-1 text-red {{ $has_role_or_permission('delete-blog', 'disabled_link') }}" href="#" onclick="confirmDelete('{{route('blog.delete', $blog->uuid)}}'); return false;" >Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-3 pagination">
                {{ $blogs->links() }}
            </div>

        </div>
    </div>
</x-admin-layout>
