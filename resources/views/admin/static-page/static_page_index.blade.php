<x-admin-layout>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="ba_flex justify-between">
            <div style="width: 80%;">&nbsp;</div>
                <div class="ba_flex align_items_center">
                    <a href="{{route('static-page.create')}}" class="btn btn-primary">Create</a>
                </div>
            </div>
        </div>
    </div>
    <div class="main-card mb-3 card">
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
                                <td>{{ucwords($static_page->page_name)}}</td>
                                <td>{{$static_page->created_at->format('Y-m-d')}}</td>
                                <td>
                                    <a class="ml-1 mr-1 {{ $has_role_or_permission('edit-static-page', 'disabled_link') }}" href="{{route('static-page.edit', $static_page->id)}}">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-admin-layout>
