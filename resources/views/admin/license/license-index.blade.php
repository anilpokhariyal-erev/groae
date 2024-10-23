<x-admin-layout>
    <div class="text-right">
        <a href="{{route('license.create')}}" class="mb-2 mr-2 btn btn-primary text-white">Create Licence</a>
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
            <h5 class="card-title">Licence</h5>
            @if (session('success'))
                <div class="text-success" id="successMessage">{{session('success')}}</div>
            @endif
            @if (session('error'))
                <div class="text-danger">{{session('error')}}</div>
            @endif
            <div class="table-responsive">
                <table class="mb-0 table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Freezone</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Created Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1; @endphp
                        @foreach($licenses as $license_val)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{@$license_val->freezone->name}}</td>
                                <td>{{ucfirst($license_val->name)}}</td>
                                <td>{{$license_val->price}}</td>
                                <td>@if($license_val->status == 1) Active @else Inactive @endif</td>
                                <td>{{$license_val->created_at?$license_val->created_at->format('Y-m-d'):''}}</td>
                                <td>
                                    <a class="ml-1 mr-1"  href="{{ route('license.edit',$license_val->id) }}">Edit</a>
                                    <a class="ml-1 mr-1 text-red" href="#" onclick="confirmDelete('{{route('license.delete', $license_val->id)}}'); return false;" >Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
