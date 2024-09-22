<x-admin-layout>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="ba_flex justify-between">
                <div class="ba_flex align_items_center">
                    <h5 class="card-heading">Create Freezone User</h5>
                </div>

                <div class="ba_flex align_items_center">
                    <a href="{{route('freezone-users.index')}}" class="btn btn-primary">Back</a>
                </div>
            </div>
            &nbsp;
            <form method="post" action="{{ route('freezone-users.store') }}">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="first_name">First Name <span class="text-danger">*</span></label>
                            <input name="first_name" id="first_name" value="{{old('first_name')}}" type="text" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('first_name')" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="last_name">Last Name <span class="text-danger">*</span></label>
                            <input name="last_name" id="last_name" value="{{old('last_name')}}" type="text" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('last_name')" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="email">Email <span class="text-danger">*</span></label>
                            <input name="email" id="email" type="email" value="{{old('email')}}" autocomplete="off" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('email')" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="password">Password <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input name="password" id="password" value="{{old('password')}}" autocomplete="new-password" type="password" class="form-control">
                                <div class="input-group-append copy_password">
                                    <span class="tooltip input-group-text cursor_pointer" onclick="baCopyText('password')" onmouseout="baTextCopied('password')">
                                        <span class="tooltiptext" id="copy_password_tooltip">Copy to clipboard</span>
                                        Copy
                                    </span>
                                </div>
                            </div>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('password')" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="mobile_number">Mobile Number</label>
                            <input name="mobile_number" id="mobile_number" oninput="checkMaxLength(this, 15)" value="{{old('mobile_number')}}" type="number" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('mobile_number')" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="designation">Designation</label>
                            <input name="designation" id="designation" value="{{old('designation')}}" type="text" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('designation')" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="status">Status</label>
                            <select name="status" class="custom-select">
                                <option value="1">Unblocked</option>
                                <option value="0">Blocked</option>
                            </select>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('status')" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="freezones">Assign Freezones</label>
                            <select name="freezones" class="custom-select">
                                <option value="0">All</option>
                                @foreach($freezones as $freezone)
                                    <option value="{{$freezone->id}}">{{ucfirst($freezone->name)}}</option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('freezones')" />
                        </div>
                    </div>

                </div>

                <div class="ba_flex align_items_center">
                    <button class="mt-1 btn btn-primary">Save</button>
                    @if (session('status') === 'freezone-user-created')
                        <div class="text-success ml-2" id="successMessage">Saved</div>
                    @endif
                </div>
            </form>

        </div>
    </div>
</x-admin-layout>
