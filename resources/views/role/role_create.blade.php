<x-admin-layout>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="ba_flex justify-between">
                <div class="ba_flex align_items_center">
                    <h5 class="card-heading">Create Role and Permissions</h5>
                </div>

                <div class="ba_flex align_items_center">
                    <a href="{{route('roles.index')}}" class="btn btn-primary">Back</a>
                </div>
            </div>
            &nbsp;
          

            <form method="post" action="{{ route('roles.store') }}">
                @csrf
                <div class="position-relative form-group">
                    <label for="role_name">Role Name <span class="text-danger">*</span></label>
                    <input name="role_name" id="role_name" type="text" class="form-control">
                    <x-input-error class="mt-2 text-red" :messages="$errors->get('role_name')" />
                </div>

                <h5 class="card-title">Permissions  <span class="text-danger">*</span></h5>
                <x-input-error class="mt-2 text-red" :messages="$errors->get('permissions')" />

                <div class="border-1-solid-grey p-2 pl-3 pr-3 mt-1">
                    <div class="ba_flex ba_justify_content_space_between">
                        <div style="width:250px"><b>Dashboard</b></div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="dashboard">
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
                            <input type="checkbox" name="permissions[]" value="view-customers">
                            <div class="pl-1 pr-1" >View</div>
                        </div>
                        <div class="ba_flex align_items_center ba_visibility_hidden">
                            <input type="checkbox">
                            <div class="pl-1 pr-1" >Create</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="edit-customer,update-customer">
                            <div class="pl-1 pr-1" >Edit/Update</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="delete-customer">
                            <div class="pl-1 pr-1" >Delete</div>
                        </div>
                    </div>
                </div>

                <div class="border-1-solid-grey p-2 pl-3 pr-3 mt-1">
                    <div class="ba_flex ba_justify_content_space_between">
                        <div style="width:250px"><b>Manage Offers</b></div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="view-offers">
                            <div class="pl-1 pr-1" >View</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="create-offer,store-offer">
                            <div class="pl-1 pr-1" >Create</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="edit-offer,update-offer">
                            <div class="pl-1 pr-1" >Edit/Update</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="delete-offer">
                            <div class="pl-1 pr-1" >Delete</div>
                        </div>
                    </div>
                </div>

                <div class="border-1-solid-grey p-2 pl-3 pr-3 mt-1">
                    <div class="ba_flex ba_justify_content_space_between">
                        <div style="width:250px"><b>Manage Blogs</b></div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="view-blogs">
                            <div class="pl-1 pr-1" >View</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="create-blog,store-blog">
                            <div class="pl-1 pr-1" >Create</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="edit-blog,update-blog">
                            <div class="pl-1 pr-1" >Edit/Update</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="delete-blog">
                            <div class="pl-1 pr-1" >Delete</div>
                        </div>
                    </div>
                </div>

                <div class="border-1-solid-grey p-2 pl-3 pr-3 mt-1">
                    <div class="ba_flex ba_justify_content_space_between">
                        <div style="width:250px"><b>Manage Categories</b></div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="view-category">
                            <div class="pl-1 pr-1" >View</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="create-category,store-category">
                            <div class="pl-1 pr-1" >Create</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="edit-category,update-category">
                            <div class="pl-1 pr-1" >Edit/Update</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="delete-category">
                            <div class="pl-1 pr-1" >Delete</div>
                        </div>
                    </div>
                </div>

                <div class="border-1-solid-grey p-2 pl-3 pr-3 mt-1">
                    <div class="ba_flex ba_justify_content_space_between">
                        <div style="width:250px"><b>Manage Static Content</b></div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="view-static-pages">
                            <div class="pl-1 pr-1" >View</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="create-static-page,store-static-page">
                            <div class="pl-1 pr-1" >Create</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="edit-static-page,update-static-page">
                            <div class="pl-1 pr-1" >Edit/Update</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="delete-static-page">
                            <div class="pl-1 pr-1" >Delete</div>
                        </div>
                    </div>
                </div>

                <div class="border-1-solid-grey p-2 pl-3 pr-3 mt-1">
                    <div class="ba_flex ba_justify_content_space_between">
                        <div style="width:250px"><b>Manage Contact Us</b></div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="view-contact">
                            <div class="pl-1 pr-1" >View</div>
                        </div>
                        <div class="ba_flex align_items_center ba_visibility_hidden">
                            <input type="checkbox">
                            <div class="pl-1 pr-1" >Create</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="edit-contact,update-contact">
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
                            <input type="checkbox" name="permissions[]" value="view-setting">
                            <div class="pl-1 pr-1" >View</div>
                        </div>
                        <div class="ba_flex align_items_center ba_visibility_hidden">
                            <input type="checkbox">
                            <div class="pl-1 pr-1" >Create</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="edit-setting,update-setting">
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
                            <input type="checkbox" name="permissions[]" value="view-freezone-admin">
                            <div class="pl-1 pr-1" >View</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="create-freezone-admin,store-freezone-admin">
                            <div class="pl-1 pr-1" >Create</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="edit-freezone-admin,update-freezone-admin">
                            <div class="pl-1 pr-1" >Edit/Update</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="delete-freezone-admin">
                            <div class="pl-1 pr-1" >Delete</div>
                        </div>
                    </div>
                </div>

                <div class="border-1-solid-grey p-2 pl-3 pr-3 mt-1">
                    <div class="ba_flex ba_justify_content_space_between">
                        <div style="width:250px"><b>Manage Freezones</b></div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="view-freezones">
                            <div class="pl-1 pr-1" >View</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="create-freezones,store-freezones">
                            <div class="pl-1 pr-1" >Create</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="edit-freezones,update-freezones">
                            <div class="pl-1 pr-1" >Edit/Update</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="delete-freezones">
                            <div class="pl-1 pr-1" >Delete</div>
                        </div>
                    </div>

                    <!-- <div class="ba_flex ba_justify_content_space_between mt-1">
                        <div style="width:250px"><b>&nbsp;&nbsp; Freezones Additional Information</b></div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="view-freezone-info">
                            <div class="pl-1 pr-1" >View</div>
                        </div>
                        <div class="ba_flex align_items_center ba_visibility_hidden">
                            <input type="checkbox">
                            <div class="pl-1 pr-1" >Create</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="edit-freezone-info,update-freezone-info">
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
                            <input type="checkbox" name="permissions[]" value="view-freezone-page">
                            <div class="pl-1 pr-1" >View</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="create-freezone-page,store-freezone-page">
                            <div class="pl-1 pr-1" >Create</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="edit-freezone-page,update-freezone-page">
                            <div class="pl-1 pr-1" >Edit/Update</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="delete-freezone-page">
                            <div class="pl-1 pr-1" >Delete</div>
                        </div>
                    </div>
                </div>

                <div class="border-1-solid-grey p-2 pl-3 pr-3 mt-1">
                    <div class="ba_flex ba_justify_content_space_between">
                        <div style="width:250px"><b>Manage Freezone Booking Requests</b></div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="view-booking,view-booking-detail,view-upload-document">
                            <div class="pl-1 pr-1">View</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="send-document-request,store-document-request,store-upload-document">
                            <div class="pl-1 pr-1">Create</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="reject-document,approve-document">
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
                            <input type="checkbox" name="permissions[]" value="view-subadmins">
                            <div class="pl-1 pr-1" >View</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="create-subadmins,store-subadmins">
                            <div class="pl-1 pr-1" >Create</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="edit-subadmins,update-subadmins">
                            <div class="pl-1 pr-1" >Edit/Update</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="delete-subadmins">
                            <div class="pl-1 pr-1" >Delete</div>
                        </div>
                    </div>
                </div>

                <div class="border-1-solid-grey p-2 pl-3 pr-3 mt-1">
                    <div class="ba_flex ba_justify_content_space_between">
                        <div style="width:250px"><b>Roles</b></div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="view-roles">
                            <div class="pl-1 pr-1" >View</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="create-roles,store-roles">
                            <div class="pl-1 pr-1" >Create</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="edit-roles,update-roles">
                            <div class="pl-1 pr-1" >Edit/Update</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="delete-roles">
                            <div class="pl-1 pr-1" >Delete</div>
                        </div>
                    </div>
                </div>

                <!-- <div class="border-1-solid-grey p-2 pl-3 pr-3 mt-1">
                    <div class="ba_flex ba_justify_content_space_between">
                        <div style="width:250px"><b>Lead Management</b></div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="view-leads">
                            <div class="pl-1 pr-1" >View</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="create-lead,store-lead">
                            <div class="pl-1 pr-1" >Create</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="edit-lead,update-lead">
                            <div class="pl-1 pr-1" >Edit/Update</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="delete-lead">
                            <div class="pl-1 pr-1" >Delete</div>
                        </div>
                    </div>
                </div>

                <div class="border-1-solid-grey p-2 pl-3 pr-3 mt-1">
                    <div class="ba_flex ba_justify_content_space_between">
                        <div style="width:250px"><b>Manage Testimonials</b></div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="view-testimonials">
                            <div class="pl-1 pr-1" >View</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="create-testimonial,store-testimonial">
                            <div class="pl-1 pr-1" >Create</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="edit-testimonial,update-testimonial">
                            <div class="pl-1 pr-1" >Edit/Update</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="delete-testimonial">
                            <div class="pl-1 pr-1" >Delete</div>
                        </div>
                    </div>
                </div>

                <div class="border-1-solid-grey p-2 pl-3 pr-3 mt-1">
                    <div class="ba_flex ba_justify_content_space_between">
                        <div style="width:250px"><b>Manage Other Services</b></div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="view-other-service">
                            <div class="pl-1 pr-1" >View</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="create-other-service,store-other-service">
                            <div class="pl-1 pr-1" >Create</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="edit-other-service,update-other-service">
                            <div class="pl-1 pr-1" >Edit/Update</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="delete-other-service">
                            <div class="pl-1 pr-1" >Delete</div>
                        </div>
                    </div>
                </div>

                <div class="border-1-solid-grey p-2 pl-3 pr-3 mt-1">
                    <div class="ba_flex ba_justify_content_space_between">
                        <div style="width:250px"><b>Registration Process & Documents</b></div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="view-process-document">
                            <div class="pl-1 pr-1" >View</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="create-process-document,store-process-document">
                            <div class="pl-1 pr-1" >Create</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="edit-process-document,update-process-document">
                            <div class="pl-1 pr-1" >Edit/Update</div>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="checkbox" name="permissions[]" value="delete-process-document">
                            <div class="pl-1 pr-1" >Delete</div>
                        </div>
                    </div>
                </div> -->

                <div class="ba_flex align_items_center justify-content-end">
                    <button class="mt-2 btn btn-primary">Save</button>
                    @if (session('status') === 'role-created')
                        <div class="text-success ml-2" id="successMessage">Saved</div>
                    @endif
                </div>
            </form>

        </div>
    </div>
</x-admin-layout>
