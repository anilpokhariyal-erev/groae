<x-admin-layout>
    <div class="text-right">
    <a href="{{route('subadmin-users.create')}}" class="mb-2 mr-2 btn btn-primary text-white {{ $has_role_or_permission('create-subadmins', 'disabled_link') }}">Create Admin</a>
    </div>

    <div class="main-card mb-3 card mt-2">
        <div class="card-body">
            <h5 class="card-heading">Subadmins</h5>
            <div class="table-responsive">
                <table class="mb-0 table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Mobile Number</th>
                            <th>Email</th>
                            <th>Role</th>
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
                                <td>{{$user->roles->first()?$user->roles->first()->name:''}}</td>
                                <td>
                                    <a class="{{ $has_role_or_permission('update-subadmins', 'disabled_link') }}" href="{{route('subadmin-users.edit', $user->uuid)}}">Edit</a>
                                    <a class="text-red {{ $has_role_or_permission('delete-subadmins', 'disabled_link') }}" href="#" onclick="confirmDelete('{{route('subadmin-users.delete', $user->uuid)}}'); return false;">&nbsp; Delete</a>
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
