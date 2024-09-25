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
                                    <input type="text" name="ai_field_limit[0][value]" value="{{ $ai_field_limits['min'] ?? '' }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="max_field">Max</label>
                                    <input type="hidden" name="ai_field_limit[1][section_key]" value="manage_ai_fields_limit">
                                    <input type="hidden" name="ai_field_limit[1][title]" value="max">
                                    <input type="text" name="ai_field_limit[1][value]" value="{{ $ai_field_limits['max'] ?? '' }}" class="form-control">
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
                                    <input type="text" name="ai_package_limit[0][value]" value="{{ $ai_package_limits['min'] ?? '' }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="max_field">Max</label>
                                    <input type="hidden" name="ai_package_limit[1][section_key]" value="manage_package_fields_limit">
                                    <input type="hidden" name="ai_package_limit[1][title]" value="max">
                                    <input type="text" name="ai_package_limit[1][value]" value="{{ $ai_package_limits['max'] ?? '' }}" class="form-control">
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
