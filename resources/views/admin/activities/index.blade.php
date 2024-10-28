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

                        <button id="filter-button" class="btn btn-primary mr-1 ml-1">Filter</button>
                        <a href="{{route('activity.index')}}" class="btn btn-primary">Reset</a>
                    </div>
                    <div class="ba_flex align_items_center">
                        <a href="{{route('activity.create')}}" class="btn btn-primary text-white">Create Activity</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="main-card mb-3 card mt-2">
        <div class="card-body">
            <h5 class="card-heading">Activities</h5>
            @if(session('success'))
                <div class="main-card">
                    <div class="card-body">
                        <div class="custom-alert" role="alert">
                            {{ session('success') }}
                        </div>
                    </div>
                </div>
            @endif
            @if ($errors->any())
                <div class="main-card">
                    <div class="card-body">
                        <div class="custom-red-alert" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif
            <div class="table-responsive">
                <table class="mb-0 table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Activity Name</th>
                            <th>Activity Group</th>
                            <th>Price</th>
                            <th>Code</th>
                            <th>Created Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1; @endphp
                        @foreach($activities as $activity)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{ucwords($activity->name)}}</td>
                                <td>{{ucwords($activity->activity_group->name)}}</td>
                                <td>{{ $activity->price }}</td>
                                <td>{{$activity->code}}</td>
                                <td>{{$activity->created_at->format('Y-m-d')}}</td>
                                <td>
                                    <a class="ml-1 mr-1" href="{{route('activity.edit', $activity->id)}}">Edit</a>
                                    <!-- <a class="ml-1 mr-1 text-red" href="#" onclick="confirmDelete('{{route('activity.delete', $activity->id)}}'); return false;">Delete</a> -->
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
