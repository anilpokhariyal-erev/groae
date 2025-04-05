<x-admin-layout>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="ba_flex justify-between">
                <div class="ba_flex align_items_center">
                    <h5 class="card-heading">Edit Role and Permissions</h5>
                </div>
                <div class="ba_flex align_items_center">
                    <a href="{{ route('roles.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
            &nbsp;

            <form method="post" action="{{ route('roles.update', $role->id) }}">
                @csrf
                @method('PUT')

                <div class="position-relative form-group">
                    <label for="role_name">Role Name <span class="text-danger">*</span></label>
                    <input name="role_name" id="role_name" type="text" class="form-control"
                           value="{{ old('role_name', $role->name) }}">
                    <x-input-error class="mt-2 text-red" :messages="$errors->get('role_name')" />
                </div>

                <h5 class="card-title">Permissions <span class="text-danger">*</span></h5>
                <x-input-error class="mt-2 text-red" :messages="$errors->get('permissions')" />

                @foreach($menus as $menu)
                    <div class="border-1-solid-grey p-2 pl-3 pr-3 mt-1">
                        <div class="ba_flex ba_justify_content_space_between">
                            <div style="width:250px; @if(!$menu->parent_id) font-weight: 900; @endif">
                                {{ $menu->title }}
                            </div>

                            @if($menu->parent_id > 0)
                                @foreach($menu->permissions as $permission)
                                    <div class="ba_flex align_items_center">
                                        <input type="checkbox"
                                               name="permissions[]"
                                               value="{{ $permission->name }}"
                                               {{ in_array($permission->name, old('permissions', $rolePermissions ?? [])) ? 'checked' : '' }}>
                                        <div class="pl-1 pr-1">
                                            {{ ucwords(str_replace('-', ' ', $permission->name)) }}
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="ba_flex align_items_center ba_visibility_hidden">
                                    <input type="checkbox">
                                    <div class="pl-1 pr-1">Create</div>
                                </div>
                                <div class="ba_flex align_items_center ba_visibility_hidden">
                                    <input type="checkbox">
                                    <div class="pl-1 pr-1">Edit/Update</div>
                                </div>
                                <div class="ba_flex align_items_center ba_visibility_hidden">
                                    <input type="checkbox">
                                    <div class="pl-1 pr-1">Delete</div>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach

                <div class="ba_flex align_items_center justify-content-end">
                    <button class="mt-2 btn btn-primary">Update</button>
                    @if (session('status') === 'role-updated')
                        <div class="text-success ml-2" id="successMessage">Updated</div>
                    @endif
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>
