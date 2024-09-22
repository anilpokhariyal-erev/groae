<x-admin-layout>

    <div class="main-card mb-3 card">
        <div class="card-body">

                <div class="row">

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label>About us</label>
                            <textarea readonly class="form-control">{{ $freezone->about ?? ''}}</textarea>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label>Benefits details</label>
                            <textarea readonly class="form-control">{{ $freezone->benefits ?? '' }}</textarea>
                        </div>
                    </div>

                </div>

            @if($freezone->business_licenses->count() > 0)
                <div class="border-1-solid-grey p-3">
                    <div class="row">
                        <div class="col-md-12">
                            <h6 class="card-title">Business Licenses Information</h6>
                        </div>

                        @foreach($freezone->business_licenses as $business_license)
                            <div class="col-md-12">
                                <div class="row">

                                    <div class="pl-3 pr-3">
                                        <div class="position-relative form-group">
                                            <label>Image</label>
                                            <div>
                                                <img width="140" src='{{ Storage::url($business_license->image) }}'>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label>License Name</label>
                                            <input readonly value="{{ $business_license->name ?? '' }}" class="form-control">
                                        </div>

                                        <div class="position-relative form-group">
                                            <label>Additional Information</label>
                                            <textarea readonly class="form-control">{{ $business_license->addition_info ?? '' }}</textarea>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            @endif

            <div class="border-1-solid-grey p-3 mt-2">
                    <div class="row">

                        <div class="col-md-12">
                            <h6 class="card-title">Our Business Licence Registration Procedures</h6>
                        </div>

                        <div class="pl-3 pr-3">
                            <div class="position-relative form-group">
                                <label>Image</label>
                                <div>
                                    @if($freezone->licence_registration_procedures_logo)
                                        <img width="150" src='{{ Storage::url($freezone->licence_registration_procedures_logo) }}'>
                                    @else
                                        <img width="150" src='{{ asset("images/placeholder.png") }}'>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label>Registration Information</label>
                                <input type="text" readonly value="{{ $freezone->licence_registration_procedures_info ?? ''}}" class="form-control">
                            </div>

                            <div class="position-relative form-group">
                                <label>Youtube embedded Video Link</label>
                                <input type="text" readonly value="{{ $freezone->licence_registration_procedures_video_link ?? ''}}" class="form-control">
                            </div>
                        </div>

                    </div>
                </div>

            <div class="border-1-solid-grey p-3 mt-2">
                <div class="row">

                    <div class="col-md-12">
                        <h6 class="card-title">Rules & Regulations</h6>
                    </div>

                    <div class="pl-3 pr-3">
                        <div class="position-relative form-group">
                            <label>Image</label>
                            <div>
                                @if($freezone->rule_regulation_logo)
                                    <img width="150" src='{{ Storage::url($freezone->rule_regulation_logo) }}'>
                                @else
                                    <img width="150" src='{{ asset("images/placeholder.png") }}'>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label>Type</label>
                            <input readonly value="{{ $freezone->rule_regulation_type ?? ''}}" class="form-control">
                        </div>

                        <div class="position-relative form-group">
                            <label>Additional Information</label>
                            <textarea readonly class="form-control">{{ $freezone->rule_regulation_info ?? ''}}</textarea>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</x-admin-layout>
