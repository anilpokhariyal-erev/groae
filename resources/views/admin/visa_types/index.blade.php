<x-admin-layout>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <form method="GET" action="{{url()->current()}}">
                <div class="ba_flex justify-between">
                    <div class="ba_flex align_items_center">
                        <div class="ba_flex align_items_center mr-1 ml-1">
                            <div class="white-space-nowrap mr-1 ml-1">Keyword:</div>
                            <input type="text" id="name" value="{{request('name')}}" name="name" class="form-control">
                        </div>

                        <button id="filter-button" class="btn btn-primary mr-1 ml-1">Filter</button>
                        <a href="{{route('visa-type.index')}}" class="btn btn-primary">Reset</a>
                    </div>
                    <div class="ba_flex align_items_center">
                        <a href="{{route('visa-type.create')}}" class="btn btn-primary text-white">Create Visa Type</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="main-card mb-3 card mt-2">
        <div class="card-body">
            <h5 class="card-heading">Visa Types</h5>
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
                            <th>Visa Type Name</th>
                            <th>Freezone</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Created Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1; @endphp
                        @foreach($visaTypes as $visaType)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{ucwords($visaType->name)}}</td>
                                <td>{{ucwords($visaType->freezone->name)}}</td>
                                <td>{{ $visaType->price }}</td>
                                <td>{{ $visaType->status ? 'Active' : 'Inactive' }}</td>
                                <td>{{$visaType->created_at->format('Y-m-d')}}</td>
                                <td>
                                    <a class="ml-1 mr-1" href="{{route('visa-type.edit', $visaType->id)}}">Edit</a>
                                    <!-- <a class="ml-1 mr-1 text-red" href="#" onclick="confirmDelete('{{route('visa-type.delete', $visaType->id)}}'); return false;">Delete</a> -->
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
