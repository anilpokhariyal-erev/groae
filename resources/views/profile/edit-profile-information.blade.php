<x-admin-layout>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Profile') }}
    </h2>

    <div class="tab-content">
        <div class="tab-pane tabs-animation fade active show" id="tab-content-0" role="tabpanel">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Profile Information</h5>
                            <form method="post" action="{{ route('profile.update') }}">
                                @csrf
                                @method('patch')
                                <div class="position-relative form-group">
                                    <label for="first_name">First Name</label>
                                    <input name="first_name" value="{{old('first_name', $user->first_name)}}" id="first_name" placeholder="First Name" type="text" class="form-control">
                                    <x-input-error class="mt-2" :messages="$errors->get('first_name')" />
                                </div>

                                <div class="position-relative form-group">
                                    <label for="last_name">Last Name</label>
                                    <input id="last_name" name="last_name" type="text" class="form-control" placeholder="Last Name" value="{{old('last_name', $user->last_name)}}">
                                    <x-input-error class="mt-2" :messages="$errors->get('last_name')" />
                                </div>

                                <div class="position-relative form-group">
                                    <label for="user_email">Email</label>
                                    <input name="email" value="{{old('email', $user->email)}}" id="user_email" placeholder="Email" type="email" class="form-control">
                                    <x-input-error class="mt-2 text-red" :messages="$errors->get('email')" />
                                </div>
                                <div class="position-relative form-group">
                                    <label for="mobile_number">Mobile Number</label>
                                    <input name="mobile_number" value="{{old('mobile_number', $user->mobile_number)}}" id="mobile_number" placeholder="Mobile Number" type="number" class="form-control">
                                    <x-input-error class="mt-2 text-red" :messages="$errors->get('mobile_number')" />
                                </div>
                                <div class="ba_flex align_items_center">
                                    <button class="mt-1 btn btn-primary">Save</button>
                                    @if (session('status') === 'profile-updated')
                                        <div class="text-success ml-2" id="successMessage">Saved</div>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
