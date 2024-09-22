<x-admin-layout>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="ba_flex justify-between">
                <div class="ba_flex align_items_center">
                    <h5 class="card-heading">Edit Role and Permissions</h5>
                </div>

                <div class="ba_flex align_items_center">
                    <a href="{{route('roles.index')}}" class="btn btn-primary">Back</a>
                </div>
            </div>
            &nbsp;

            <form method="post" action="{{ route('roles.update', $role->uuid) }}">
                @csrf
                @method('PUT')
                <div class="position-relative form-group">
                    <label for="role_name">Role Name <span class="text-danger">*</span></label>
                    <input name="role_name" id="role_name" value="{{ $role->name }}" type="text" class="form-control">
                    <x-input-error class="mt-2 text-red" :messages="$errors->get('role_name')" />
                </div>

                <h5 class="card-title">Permissions <span class="text-danger">*</span></h5>
                <x-input-error class="mt-2 text-red" :messages="$errors->get('permissions')" />

                <div class="border-1-solid-grey p-2 pl-3 pr-3 mt-1">
                    <div class="ba_flex ba_justify_content_space_between">
                        <div style="width:250px"><b>Dashboard</b></div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="dashboard" @if($role->hasPermissionTo('dashboard')) checked @endif>
                            <div class="pl-1 pr-1" >View</div>
                        </div>
                        <div class="ba_flex align_items_center ba_visibility_hidden">
                            <input type="checkbox">
                            <div class="pl-1 pr-1" >Create</div>
                        </div>
                        <div class="ba_flex align_items_center ba_visibility_hidden">
                            <input type="checkbox">
                            <div class="pl-1 pr-1" >Edit/Update</div>
                        </div>
                        <div class="ba_flex align_items_center ba_visibility_hidden">
                            <input type="checkbox">
                            <div class="pl-1 pr-1" >Delete</div>
                        </div>
                    </div>
                </div>

                <div class="border-1-solid-grey p-2 pl-3 pr-3 mt-1">
                    <div class="ba_flex ba_justify_content_space_between">
                        <div style="width:250px"><b>Manage Customers</b></div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="view-customers" @if($role->hasPermissionTo('view-customers')) checked @endif>
                            <div class="pl-1 pr-1" >View</div>
                        </div>
                        <div class="ba_flex align_items_center ba_visibility_hidden">
                            <input type="checkbox">
                            <div class="pl-1 pr-1" >Create</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="edit-customer,update-customer" @if($role->hasPermissionTo('edit-customer')) checked @endif>
                            <div class="pl-1 pr-1" >Edit/Update</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="delete-customer" @if($role->hasPermissionTo('delete-customer')) checked @endif>
                            <div class="pl-1 pr-1" >Delete</div>
                        </div>
                    </div>
                </div>

                <div class="border-1-solid-grey p-2 pl-3 pr-3 mt-1">
                    <div class="ba_flex ba_justify_content_space_between">
                        <div style="width:250px"><b>Manage Offers</b></div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="view-offers" @if($role->hasPermissionTo('view-offers')) checked @endif>
                            <div class="pl-1 pr-1" >View</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="create-offer,store-offer" @if($role->hasPermissionTo('create-offer')) checked @endif>
                            <div class="pl-1 pr-1" >Create</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="edit-offer,update-offer" @if($role->hasPermissionTo('edit-offer')) checked @endif>
                            <div class="pl-1 pr-1" >Edit/Update</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="delete-offer" @if($role->hasPermissionTo('delete-offer')) checked @endif>
                            <div class="pl-1 pr-1" >Delete</div>
                        </div>
                    </div>
                </div>

                <div class="border-1-solid-grey p-2 pl-3 pr-3 mt-1">
                    <div class="ba_flex ba_justify_content_space_between">
                        <div style="width:250px"><b>Manage Blogs</b></div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="view-blogs" @if($role->hasPermissionTo('view-blogs')) checked @endif>
                            <div class="pl-1 pr-1" >View</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="create-blog,store-blog" @if($role->hasPermissionTo('create-blog')) checked @endif>
                            <div class="pl-1 pr-1" >Create</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="edit-blog,update-blog" @if($role->hasPermissionTo('edit-blog')) checked @endif>
                            <div class="pl-1 pr-1" >Edit/Update</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="delete-blog" @if($role->hasPermissionTo('delete-blog')) checked @endif>
                            <div class="pl-1 pr-1" >Delete</div>
                        </div>
                    </div>
                </div>

                <div class="border-1-solid-grey p-2 pl-3 pr-3 mt-1">
                    <div class="ba_flex ba_justify_content_space_between">
                        <div style="width:250px"><b>Manage Categories</b></div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="view-category" @if($role->hasPermissionTo('view-category')) checked @endif>
                            <div class="pl-1 pr-1" >View</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="create-category,store-category" @if($role->hasPermissionTo('create-category')) checked @endif>
                            <div class="pl-1 pr-1" >Create</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="edit-category,update-category" @if($role->hasPermissionTo('edit-category')) checked @endif>
                            <div class="pl-1 pr-1" >Edit/Update</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="delete-category" @if($role->hasPermissionTo('delete-category')) checked @endif>
                            <div class="pl-1 pr-1" >Delete</div>
                        </div>
                    </div>
                </div>

                <div class="border-1-solid-grey p-2 pl-3 pr-3 mt-1">
                    <div class="ba_flex ba_justify_content_space_between">
                        <div style="width:250px"><b>Manage Static Content</b></div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="view-static-pages" @if($role->hasPermissionTo('view-static-pages')) checked @endif>
                            <div class="pl-1 pr-1" >View</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="create-static-page,store-static-page" @if($role->hasPermissionTo('create-static-page')) checked @endif>
                            <div class="pl-1 pr-1" >Create</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="edit-static-page,update-static-page" @if($role->hasPermissionTo('edit-static-page')) checked @endif>
                            <div class="pl-1 pr-1" >Edit/Update</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="delete-static-page" @if($role->hasPermissionTo('delete-static-page')) checked @endif>
                            <div class="pl-1 pr-1" >Delete</div>
                        </div>
                    </div>
                </div>


                <div class="border-1-solid-grey p-2 pl-3 pr-3 mt-1">
                    <div class="ba_flex ba_justify_content_space_between">
                        <div style="width:250px"><b>Manage Contact Us</b></div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="view-contact" @if($role->hasPermissionTo('view-contact')) checked @endif>
                            <div class="pl-1 pr-1" >View</div>
                        </div>
                        <div class="ba_flex align_items_center ba_visibility_hidden">
                            <input type="checkbox">
                            <div class="pl-1 pr-1" >Create</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="edit-contact,update-contact" @if($role->hasPermissionTo('edit-contact')) checked @endif>
                            <div class="pl-1 pr-1" >Edit/Update</div>
                        </div>
                        <div class="ba_flex align_items_center ba_visibility_hidden">
                            <input type="checkbox">
                            <div class="pl-1 pr-1" >Delete</div>
                        </div>
                    </div>
                </div>

                <div class="border-1-solid-grey p-2 pl-3 pr-3 mt-1">
                    <div class="ba_flex ba_justify_content_space_between">
                        <div style="width:250px"><b>Setting</b></div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="view-setting" @if($role->hasPermissionTo('view-setting')) checked @endif>
                            <div class="pl-1 pr-1" >View</div>
                        </div>
                        <div class="ba_flex align_items_center ba_visibility_hidden">
                            <input type="checkbox">
                            <div class="pl-1 pr-1" >Create</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="edit-setting,update-setting"  @if($role->hasPermissionTo('edit-setting')) checked @endif>
                            <div class="pl-1 pr-1" >Edit/Update</div>
                        </div>
                        <div class="ba_flex align_items_center ba_visibility_hidden">
                            <input type="checkbox">
                            <div class="pl-1 pr-1" >Delete</div>
                        </div>
                    </div>
                </div>


                <div class="border-1-solid-grey p-2 pl-3 pr-3 mt-1">
                    <div class="ba_flex ba_justify_content_space_between">
                        <div style="width:250px"><b>Manage Freezones Admin</b></div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="view-freezone-admin" @if($role->hasPermissionTo('view-freezone-admin')) checked @endif>
                            <div class="pl-1 pr-1" >View</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="create-freezone-admin,store-freezone-admin" @if($role->hasPermissionTo('create-freezone-admin')) checked @endif>
                            <div class="pl-1 pr-1" >Create</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="edit-freezone-admin,update-freezone-admin" @if($role->hasPermissionTo('edit-freezone-admin')) checked @endif>
                            <div class="pl-1 pr-1" >Edit/Update</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="delete-freezone-admin" @if($role->hasPermissionTo('delete-freezone-admin')) checked @endif>
                            <div class="pl-1 pr-1" >Delete</div>
                        </div>
                    </div>
                </div>

                <div class="border-1-solid-grey p-2 pl-3 pr-3 mt-1">
                    <div class="ba_flex ba_justify_content_space_between">
                        <div style="width:250px"><b>Manage Freezones</b></div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="view-freezones" @if($role->hasPermissionTo('view-freezones')) checked @endif>
                            <div class="pl-1 pr-1" >View</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="create-freezones,store-freezones" @if($role->hasPermissionTo('create-freezones')) checked @endif>
                            <div class="pl-1 pr-1" >Create</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="edit-freezones,update-freezones" @if($role->hasPermissionTo('edit-freezones')) checked @endif>
                            <div class="pl-1 pr-1" >Edit/Update</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="delete-freezones" @if($role->hasPermissionTo('delete-freezones')) checked @endif>
                            <div class="pl-1 pr-1" >Delete</div>
                        </div>
                    </div>
                    <!-- <div class="ba_flex ba_justify_content_space_between mt-1">
                        <div style="width:250px"><b>&nbsp;&nbsp; Freezones Additional Information</b></div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="view-freezone-info" @if($role->hasPermissionTo('view-freezone-info')) checked @endif>
                            <div class="pl-1 pr-1" >View</div>
                        </div>
                        <div class="ba_flex align_items_center ba_visibility_hidden">
                            <input type="checkbox">
                            <div class="pl-1 pr-1" >Create</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="edit-freezone-info,update-freezone-info" @if($role->hasPermissionTo('edit-freezone-info')) checked @endif>
                            <div class="pl-1 pr-1" >Edit/Update</div>
                        </div>
                        <div class="ba_flex align_items_center ba_visibility_hidden">
                            <input type="checkbox">
                            <div class="pl-1 pr-1" >Delete</div>
                        </div>
                    </div> -->
                </div>


                <div class="border-1-solid-grey p-2 pl-3 pr-3 mt-1">
                    <div class="ba_flex ba_justify_content_space_between">
                        <div style="width:250px"><b>Manage Freezone Pages</b></div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="view-freezone-page" @if($role->hasPermissionTo('view-freezone-page')) checked @endif>
                            <div class="pl-1 pr-1" >View</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="create-freezone-page,store-freezone-page" @if($role->hasPermissionTo('create-freezone-page')) checked @endif>
                            <div class="pl-1 pr-1" >Create</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="edit-freezone-page,update-freezone-page" @if($role->hasPermissionTo('edit-freezone-page')) checked @endif>
                            <div class="pl-1 pr-1" >Edit/Update</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="delete-freezone-page" @if($role->hasPermissionTo('delete-freezone-page')) checked @endif>
                            <div class="pl-1 pr-1" >Delete</div>
                        </div>
                    </div>
                </div>


                <div class="border-1-solid-grey p-2 pl-3 pr-3 mt-1">
                    <div class="ba_flex ba_justify_content_space_between">
                        <div style="width:250px"><b>Manage Freezone Booking Requests</b></div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="view-booking,view-booking-detail,view-upload-document" @if($role->hasPermissionTo('view-booking')) checked @endif>
                            <div class="pl-1 pr-1">View</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="send-document-request,store-document-request,store-upload-document" @if($role->hasPermissionTo('send-document-request')) checked @endif>
                            <div class="pl-1 pr-1">Create</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="reject-document,approve-document" @if($role->hasPermissionTo('reject-document')) checked @endif>
                            <div class="pl-1 pr-1">Edit/Update</div>
                        </div>
                        <div class="ba_flex align_items_center ba_visibility_hidden">
                            <input type="checkbox">
                            <div class="pl-1 pr-1">Delete</div>
                        </div>
                    </div>
                </div>


                <div class="border-1-solid-grey p-2 pl-3 pr-3 mt-1">
                    <div class="ba_flex ba_justify_content_space_between">
                        <div style="width:250px"><b>Subadmin</b></div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="view-subadmins" @if($role->hasPermissionTo('view-subadmins')) checked @endif>
                            <div class="pl-1 pr-1" >View</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="create-subadmins,store-subadmins" @if($role->hasPermissionTo('create-subadmins')) checked @endif>
                            <div class="pl-1 pr-1" >Create</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="edit-subadmins,update-subadmins" @if($role->hasPermissionTo('edit-subadmins')) checked @endif>
                            <div class="pl-1 pr-1" >Edit/Update</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="delete-subadmins" @if($role->hasPermissionTo('delete-subadmins')) checked @endif>
                            <div class="pl-1 pr-1" >Delete</div>
                        </div>
                    </div>
                </div>

                <div class="border-1-solid-grey p-2 pl-3 pr-3 mt-1">
                    <div class="ba_flex ba_justify_content_space_between">
                        <div style="width:250px"><b>Roles</b></div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="view-roles" @if($role->hasPermissionTo('view-roles')) checked @endif>
                            <div class="pl-1 pr-1" >View</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="create-roles,store-roles" @if($role->hasPermissionTo('create-roles')) checked @endif>
                            <div class="pl-1 pr-1" >Create</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="edit-roles,update-roles" @if($role->hasPermissionTo('edit-roles')) checked @endif>
                            <div class="pl-1 pr-1" >Edit/Update</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="delete-roles" @if($role->hasPermissionTo('delete-roles')) checked @endif>
                            <div class="pl-1 pr-1" >Delete</div>
                        </div>
                    </div>
                </div>


                <!-- <div class="border-1-solid-grey p-2 pl-3 pr-3 mt-1">
                    <div class="ba_flex ba_justify_content_space_between">
                        <div style="width:250px"><b>Lead Management</b></div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="view-leads" @if($role->hasPermissionTo('view-leads')) checked @endif>
                            <div class="pl-1 pr-1" >View</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="create-lead,store-lead" @if($role->hasPermissionTo('create-lead')) checked @endif>
                            <div class="pl-1 pr-1" >Create</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="edit-lead,update-lead" @if($role->hasPermissionTo('edit-lead')) checked @endif>
                            <div class="pl-1 pr-1" >Edit/Update</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="delete-lead" @if($role->hasPermissionTo('delete-lead')) checked @endif>
                            <div class="pl-1 pr-1" >Delete</div>
                        </div>
                    </div>
                </div>

                <div class="border-1-solid-grey p-2 pl-3 pr-3 mt-1">
                    <div class="ba_flex ba_justify_content_space_between">
                        <div style="width:250px"><b>Manage Testimonials</b></div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="view-testimonials" @if($role->hasPermissionTo('view-testimonials')) checked @endif>
                            <div class="pl-1 pr-1" >View</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="create-testimonial,store-testimonial" @if($role->hasPermissionTo('create-testimonial')) checked @endif>
                            <div class="pl-1 pr-1" >Create</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="edit-testimonial,update-testimonial" @if($role->hasPermissionTo('edit-testimonial')) checked @endif>
                            <div class="pl-1 pr-1" >Edit/Update</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="delete-testimonial" @if($role->hasPermissionTo('delete-testimonial')) checked @endif>
                            <div class="pl-1 pr-1" >Delete</div>
                        </div>
                    </div>
                </div>

                <div class="border-1-solid-grey p-2 pl-3 pr-3 mt-1">
                    <div class="ba_flex ba_justify_content_space_between">
                        <div style="width:250px"><b>Manage Other Services</b></div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="view-other-service" @if($role->hasPermissionTo('view-other-service')) checked @endif>
                            <div class="pl-1 pr-1" >View</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="create-other-service,store-other-service" @if($role->hasPermissionTo('create-other-service')) checked @endif>
                            <div class="pl-1 pr-1" >Create</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="edit-other-service,update-other-service" @if($role->hasPermissionTo('edit-other-service')) checked @endif>
                            <div class="pl-1 pr-1" >Edit/Update</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="delete-other-service" @if($role->hasPermissionTo('delete-other-service')) checked @endif>
                            <div class="pl-1 pr-1" >Delete</div>
                        </div>
                    </div>
                </div>

                <div class="border-1-solid-grey p-2 pl-3 pr-3 mt-1">
                    <div class="ba_flex ba_justify_content_space_between">
                        <div style="width:250px"><b>Registration Process & Documents</b></div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="view-process-document" @if($role->hasPermissionTo('view-process-document')) checked @endif>
                            <div class="pl-1 pr-1" >View</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="create-process-document,store-process-document" @if($role->hasPermissionTo('create-process-document')) checked @endif>
                            <div class="pl-1 pr-1" >Create</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="edit-process-document,update-process-document" @if($role->hasPermissionTo('edit-process-document')) checked @endif>
                            <div class="pl-1 pr-1" >Edit/Update</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="delete-process-document" @if($role->hasPermissionTo('delete-process-document')) checked @endif>
                            <div class="pl-1 pr-1" >Delete</div>
                        </div>
                    </div>
                </div> -->

                <div class="ba_flex align_items_center mt-1">
                    <button class="mt-1 btn btn-primary">Update</button>
                </div>
            </form>

        </div>
    </div>
</x-admin-layout>
