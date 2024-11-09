<x-admin-layout>
    <style>
        .the-legend {
            border-style: none;
            border-width: 0;
            font-size: 14px;
            line-height: 20px;
            margin-bottom: 0;
            width: auto;
            padding: 0 10px;
            border: 1px solid #e0e0e0;
        }
        .the-fieldset {
            border: 1px solid #e0e0e0;
            padding: 10px;
        }
    </style>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="ba_flex justify-between">
                <div class="ba_flex align_items_center">
                    <h5 class="card-heading">Settings</h5>
                </div>
                <div class="ba_flex align_items_center"></div>
            </div>

            @if(session('success'))
                <div class="main-card">
                    <div class="card-body">
                        <div class="custom-alert" role="alert">
                            {{ session('success') }}
                        </div>
                    </div>
                </div>
            @endif

            <form method="post" action="{{ route('setting.store') }}" enctype="multipart/form-data">
                @csrf

                <!-- Manage AI Field Visibility Section -->
                <div class="form-group">
                    <fieldset class="the-fieldset">
                        <legend class="the-legend">Manage AI Field Visibility</legend>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="min_field">Min</label>
                                    <input type="hidden" name="ai_field_limit[0][section_key]" value="manage_ai_fields_limit">
                                    <input type="hidden" name="ai_field_limit[0][title]" value="min">
                                    <input type="text" name="ai_field_limit[0][value]" value="{{ $settings_data['manage_ai_fields_limit']['min'] ?? '' }}" class="form-control">
                                    <x-input-error class="mt-2 text-red" :messages="$errors->get('ai_field_limit')" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="max_field">Max</label>
                                    <input type="hidden" name="ai_field_limit[1][section_key]" value="manage_ai_fields_limit">
                                    <input type="hidden" name="ai_field_limit[1][title]" value="max">
                                    <input type="text" name="ai_field_limit[1][value]" value="{{ $settings_data['manage_ai_fields_limit']['max'] ?? '' }}" class="form-control">
                                    <x-input-error class="mt-2 text-red" :messages="$errors->get('ai_field_limit')" />
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>

                <div class="form-group">
                    <fieldset class="the-fieldset">
                        <legend class="the-legend">Manage AI Package Visibility</legend>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="min_field">Min</label>
                                    <input type="hidden" name="ai_package_limit[0][section_key]" value="manage_package_fields_limit">
                                    <input type="hidden" name="ai_package_limit[0][title]" value="min">
                                    <input type="text" name="ai_package_limit[0][value]" value="{{ $settings_data['manage_package_fields_limit']['min'] ?? '' }}" class="form-control">
                                    <x-input-error class="mt-2 text-red" :messages="$errors->get('ai_package_limit')" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="max_field">Max</label>
                                    <input type="hidden" name="ai_package_limit[1][section_key]" value="manage_package_fields_limit">
                                    <input type="hidden" name="ai_package_limit[1][title]" value="max">
                                    <input type="text" name="ai_package_limit[1][value]" value="{{ $settings_data['manage_package_fields_limit']['max'] ?? '' }}" class="form-control">
                                    <x-input-error class="mt-2 text-red" :messages="$errors->get('ai_package_limit')" />
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>

                 <!-- Company Information Section -->
                 <div class="form-group">
                    <fieldset class="the-fieldset">
                        <legend class="the-legend">Company Information</legend>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="company_name">Company Name</label>
                                    <input type="text" name="company_name" value="{{ $settings_data['company_info']['Company Name'] ?? '' }}" class="form-control">
                                    <x-input-error class="mt-2 text-red" :messages="$errors->get('company_name')" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="company_tin_no">Company TIN No</label>
                                    <input type="text" name="company_tin_no" value="{{ $settings_data['company_info']['Company TIN No'] ?? '' }}" class="form-control">
                                    <x-input-error class="mt-2 text-red" :messages="$errors->get('company_tin_no')" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="company_address">Company Address</label>
                                    <input type="text" name="company_address" value="{{ $settings_data['company_info']['Company Address'] ?? '' }}" class="form-control">
                                    <x-input-error class="mt-2 text-red" :messages="$errors->get('company_address')" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="company_phone">Company Phone</label>
                                    <input type="text" name="company_phone" value="{{ $settings_data['company_info']['Company Phone'] ?? '' }}" class="form-control">
                                    <x-input-error class="mt-2 text-red" :messages="$errors->get('company_phone')" />
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>


                <div class="ba_flex align_items_center">
                    <button class="mt-1 btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>
