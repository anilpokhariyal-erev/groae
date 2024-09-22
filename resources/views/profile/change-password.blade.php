<x-admin-layout>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Change Password') }}
    </h2>

    <div class="tab-content">
        <div class="tab-pane tabs-animation fade active show" id="tab-content-0" role="tabpanel">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <form method="post" action="{{ route('password.update') }}">
                                @csrf
                                @method('put')
                                <div class="position-relative form-group">
                                    <label for="current_password">Current Password</label>
                                    <input name="current_password" autocomplete="current-password" id="current_password" type="password" class="form-control">
                                    <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2 text-red"/>
                                </div>
                                <div class="position-relative form-group">
                                    <label for="password">New Password</label>
                                    <input name="password" autocomplete="new-password" id="password" type="password" class="form-control">
                                    <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2 text-red"/>
                                </div>
                                <div class="position-relative form-group">
                                    <label for="password_confirmation">Confirm Password</label>
                                    <input name="password_confirmation" autocomplete="new-password"  id="password_confirmation" type="password" class="form-control">
                                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2 text-red"/>
                                </div>
                                <div class="ba_flex align_items_center">
                                    <button class="mt-1 btn btn-primary">Update</button>
                                    @if (session('status') === 'password-updated')
                                        <div class="text-success ml-2" id="successMessage">Password Changed Successfully!</div>
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
