<x-admin-layout>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <form method="GET" action="{{url()->current()}}">
                <div class="ba_flex justify-between">
                    <div class="ba_flex align_items_center">
                        <div class="ba_flex align_items_center mr-1 ml-1">
                            <div class="white-space-nowrap mr-1 ml-1">Keyword:</div>
                            <input type="text" id="keyword" value="{{request('keyword')}}" name="keyword" class="form-control">
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
                        <a href="{{route('category.index')}}" class="btn btn-primary">Reset</a>
                    </div>
                    <div class="ba_flex align_items_center">
                        <a href="{{route('category.create')}}" class="btn btn-primary text-white {{ $has_role_or_permission('create-category', 'disabled_link') }}">Create category</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="main-card mb-3 card mt-2">
        <div class="card-body">
            <h5 class="card-heading">Categories</h5>
            <div class="table-responsive">
                <table class="mb-0 table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Created Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1; @endphp
                        @foreach($categories as $category)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{ucwords($category->name)}}</td>
                                <td>{{$category->description}}</td>
                                <td>@if($category->status == '1') Active @else Inactive @endif</td>
                                <td>{{$category->created_at->format('Y-m-d H:i:s')}}</td>
                                <td>
                                    <a class="ml-1 mr-1 {{ $has_role_or_permission('edit-category', 'disabled_link') }}" href="{{route('category.edit', $category->id)}}">Edit</a>

                                    <form id="delete-category{{$category->id}}" action="{{ route('category.delete', $category->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('delete')
                                        <div onclick="confirmDeleteForm('#delete-category{{$category->id}}');" class="ml-1 mr-1 cursor_pointer text-red {{ $has_role_or_permission('delete-category', 'disabled_button') }}" style="display: inline;">Delete</div>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-3 pagination">
                {{ $categories->links() }}
            </div>

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
