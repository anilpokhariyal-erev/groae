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

                        <div class="ba_flex align_items_center mr-1 ml-1">
                            <div class="white-space-nowrap mr-1 ml-1">Start Date:</div>
                            <input type="date" id="start-date" value="{{request('start_date')}}" name="start_date" class="form-control">
                        </div>
                        <div class="ba_flex align_items_center mr-1 ml-1">
                            <div class="white-space-nowrap mr-1 ml-1">End Date:</div>
                            <input type="date" id="end-date" value="{{request('end_date')}}" name="end_date" class="form-control">
                        </div>
                        <button id="filter-button" class="btn btn-primary mr-1 ml-1">Filter</button>
                        <a href="{{route('freezone-users.index')}}" class="btn btn-primary">Reset</a>
                    </div>

                    <div class="ba_flex align_items_center">
                        <input type="submit" name="export" value="Export" class="btn btn-primary mr-1 ml-1">
                        <a href="{{route('freezone-users.create')}}" class=" btn btn-primary text-white {{ $has_role_or_permission('create-freezone-admin', 'disabled_link') }}">Create Admin</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="main-card mb-3 card mt-2">
        <div class="card-body">
            <h5 class="card-heading">Freezone Users</h5>
            <div class="table-responsive">
                <table class="mb-0 table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Mobile Number</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1; @endphp
                        @foreach($users as $user)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{ucfirst($user->first_name)}}</td>
                                <td>{{ucfirst($user->last_name)}}</td>
                                <td>{{$user->mobile_number}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <a class="ml-1 mr-1 {{ $has_role_or_permission('edit-freezone-admin', 'disabled_link') }}" href="{{route('freezone-users.edit', $user->uuid)}}">Edit</a>
                                    <a class="ml-1 mr-1 text-red {{ $has_role_or_permission('delete-freezone-admin', 'disabled_link') }}" href="#" onclick="confirmDelete('{{route('freezone-users.delete', $user->uuid)}}'); return false;">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-3 pagination">
                {{ $users->links() }}
            </div>

        </div>
    </div>
</x-admin-layout>
