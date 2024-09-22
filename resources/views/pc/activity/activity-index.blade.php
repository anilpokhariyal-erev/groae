<x-admin-layout>
    <div class="text-right">
        <a href="{{route('blog.create')}}" class="mb-2 mr-2 btn btn-primary text-white {{ $has_role_or_permission('create-blog', 'disabled_link') }}">Create Blog</a>
    </div>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <form method="GET" action="{{url()->current()}}">
                <div class="ba_flex justify-content-end align_items_center">

                    <div class="ba_flex align_items_center mr-1 ml-1">
                        <div class="white-space-nowrap mr-1 ml-1">Title:</div>
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
                </div>
            </form>
        </div>
    </div>

    <div class="main-card mb-3 card mt-2">
        <div class="card-body">
            <h5 class="card-title">Activities</h5>
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
                        @foreach($activity as $activity_val)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{ucfirst($activity_val->name)}}</td>
                                <td>{{ucfirst($activity_val->description)}}</td>
                                <td>@if($activity_val->status == 1) Active @else Inactive @endif</td>
                                <td>{{$activity_val->created_at->format('Y-m-d')}}</td>
                                <td>
                                    <a class="ml-1 mr-1"  href="#">Edit</a>
                                    <a class="ml-1 mr-1 text-red" href="#" onclick="confirmDelete(''); return false;" >Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-3 pagination">
                {{ $activity->links() }}
            </div>

        </div>
    </div>
</x-admin-layout>
