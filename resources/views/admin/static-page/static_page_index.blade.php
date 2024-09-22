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
                        <a href="{{route('static-page.index')}}" class="btn btn-primary">Reset</a>
                    </div>
                
                    <div>
                        <!--<a href="{{route('static-page.create')}}" class="mb-2 mr-2 btn btn-primary text-white {{ $has_role_or_permission('create-static-page', 'disabled_link') }}">Create Static Content</a> -->
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <div class="main-card mb-3 card mt-2">
        <div class="card-body">
            <h5 class="card-heading">Static Contents</h5>
            <div class="table-responsive">
                <table class="mb-0 table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Page Name</th>
                            <th>Created Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1; @endphp
                        @foreach($static_pages as $static_page)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <!--<td>{{ucfirst(str_replace('_', ' ', $static_page->page_type))}}</td>-->
                                <td>{{ucwords($static_page->page_name)}}</td>
                                <td>{{$static_page->created_at->format('Y-m-d')}}</td>
                                <td>
                                    <a class="ml-1 mr-1 {{ $has_role_or_permission('edit-static-page', 'disabled_link') }}" href="{{route('static-page.edit', $static_page->id)}}">Edit</a>
                                    <!--<a class="ml-1 mr-1 text-red {{ $has_role_or_permission('delete-static-page', 'disabled_link') }}" href="#" onclick="confirmDelete('{{route('static-page.delete', $static_page->uuid)}}'); return false;" >Delete</a>-->
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-3 pagination">
                {{ $static_pages->links() }}
            </div>

        </div>
    </div>
</x-admin-layout>
