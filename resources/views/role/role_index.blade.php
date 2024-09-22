<x-admin-layout>

    <div class="text-right">
        <a href="{{route('roles.create')}}" class="mb-2 mr-2 btn btn-primary text-white {{ $has_role_or_permission('create-roles', 'disabled_link') }}">Create Role</a>
    </div>

    <div class="main-card mb-3 card mt-2">
        <div class="card-body">
            <h5 class="card-heading">Roles</h5>
            <div class="table-responsive">
                <table class="mb-0 table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Role Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1; @endphp
                        @foreach($roles as $role)
                        <tr>
                            <th scope="row">{{$i++}}</th>
                            <td>{{$role->name}}</td>
                            <td>
                                <a class="{{ $has_role_or_permission('edit-roles', 'disabled_link') }}" href="{{route('roles.edit', $role->uuid)}}">&nbsp;Edit&nbsp;</a>
                                <a class="text-red {{ $has_role_or_permission('delete-roles', 'disabled_link') }}" href="#" onclick="confirmDelete('{{route('roles.delete', $role->uuid)}}'); return false;">&nbsp;Delete&nbsp;</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-3 pagination">
                {{ $roles->links() }}
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
