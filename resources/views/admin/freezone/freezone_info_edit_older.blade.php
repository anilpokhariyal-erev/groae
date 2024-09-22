<x-admin-layout>

    <div class="main-card mb-3 card">
        <div class="card-body">

            @if (session('success'))
                <div class="text-success mb-2" id="successMessage">{{session('success')}}</div>
            @endif

            <form method="post" action="{{ route('freezone-info.update', $freezone->uuid) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="border-1-solid-grey p-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="position-relative form-group">
                                <label>About us</label>
                                <textarea name="about_us" id="ckeditor_description" class="h-500" class="form-control">{{ old('about_us', $freezone->about)}}</textarea>
                                <x-input-error class="mt-2 text-red" :messages="$errors->get('about_us')" />
                            </div>
                        </div>
                    </div>
                </div>
                &nbsp;
                <div class="border-1-solid-grey p-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="position-relative form-group">
                                <label>Benefits details</label>
                                <textarea name="benefits"  id="ckeditor_description1" class="form-control">{{ old('benefits', $freezone->benefits) }}</textarea>
                                <x-input-error class="mt-2 text-red" :messages="$errors->get('benefits')" />
                            </div>
                        </div>
                    </div>        
                </div>

                &nbsp;
                <div class="border-1-solid-grey p-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="position-relative form-group">
                                <label>Business Licence Information</label>
                                <textarea name="business_licence_info"  id="ckeditor_description2" class="form-control">{{ old('business_licence_info', $freezone->business_licence_info) }}</textarea>
                                <x-input-error class="mt-2 text-red" :messages="$errors->get('business_licence_info')" />
                            </div>
                        </div>
                    </div>        
                </div>

                &nbsp;
                <div class="border-1-solid-grey p-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="position-relative form-group">
                                <label> Customer Guides Detail</label>
                                <textarea name="customer_guide_info" id="ckeditor_description3" class="h-500" class="form-control">{{ old('customer_guide_info', $freezone->customer_guide_info)}}</textarea>
                                <x-input-error class="mt-2 text-red" :messages="$errors->get('customer_guide_info')" />
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="position-relative form-group">
                                <label> Customer Guides </label>
                                <input type="file" name="customer_guide">
                                <x-input-error class="mt-2 text-red" :messages="$errors->get('customer_guide')" />
                            </div>
                        </div>

                    </div>
                </div>
                &nbsp;
                <!-- Rule and Regulation -->
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
                                        <img id="ba_current_image" width="150" src='{{ Storage::url($freezone->rule_regulation_logo) }}'>
                                    @else
                                        <img id="ba_current_image" width="150" src='{{ asset("images/placeholder.png") }}'>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label>Select Type</label>
                                <select name="rule_regulation_type" class="form-control">
                                    <option value="General Policies" {{ $freezone->rule_regulation_type == 'General Policies'? 'selected' : ''}}>General Policies</option>
                                    <option value="Compliance" {{ $freezone->rule_regulation_type == 'Compliance'? 'selected' : ''}}>Compliance</option>
                                    <option value="Guidelines" {{ $freezone->rule_regulation_type == 'Guidelines'? 'selected' : ''}}>Guidelines</option>
                                </select>
                                <x-input-error class="mt-2 text-red" :messages="$errors->get('rule_regulation_type')" />
                            </div>

                            <div class="position-relative form-group">
                                <label>Image</label>
                                <div class="image-container">
                                    <label for="ba_input_image" id="change-image-btn">Choose file</label>
                                    <div id="ba_input_image_name">{{basename($freezone->rule_regulation_logo)}}</div>
                                    <input name="rule_regulation_image" id="ba_input_image" type="file" class="form-control ba_display_none" accept="image/*" onchange="displayImage(this, 'ba_current_image')">
                                </div>
                                <x-input-error class="mt-2 text-red" :messages="$errors->get('rule_regulation_image')" />
                                <input name="ba_current_image" type="hidden" class="ba_current_image" value="">
                                @if ($errors->any() && old('ba_current_image')) <x-input-error class="mt-2 text-red" messages="Please fix the validation error and select an image again." /> @endif
                            </div>

                            <div class="position-relative form-group">
                                <label>Additional Information</label>
                                <textarea name="rule_regulation_info" id="ckeditor_description4" class="form-control">{{ $freezone->rule_regulation_info ?? ''}}</textarea>
                                <x-input-error class="mt-2 text-red" :messages="$errors->get('rule_regulation_info')" />
                            </div>
                        </div>

                    </div>
                </div>

                &nbsp;
                <div class="border-1-solid-grey p-3 mt-2">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="position-relative form-group">
                                <label>Facilities</label>
                                <textarea name="facilities" id="ckeditor_description5" class="form-control">{{ old('facilities', $freezone->facilities_info) }}</textarea>
                                <x-input-error class="mt-2 text-red" :messages="$errors->get('facilities')" />
                            </div>
                        </div>
                    </div>        
                </div>
                &nbsp; 
              
                
                <div class="border-1-solid-grey p-3 mt-2">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="position-relative form-group">
                                <label>Activities Information</label>
                                <textarea name="activity_info" id="ckeditor_description6" class="form-control">{{ old('activity_info', $freezone->activities_info) }}</textarea>
                                <x-input-error class="mt-2 text-red" :messages="$errors->get('activity_info')" />
                            </div>
                        </div>
                    </div>        
                </div>
                &nbsp;

                &nbsp;
                <div class="border-1-solid-grey p-3 mt-2">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="position-relative form-group">
                                <label>Faq</label>
                                <textarea name="faq" id="ckeditor_description7" class="form-control">{{ old('faq', $freezone->faq_info) }}</textarea>
                                <x-input-error class="mt-2 text-red" :messages="$errors->get('faq')" />
                            </div>
                        </div>
                    </div>        
                </div>
                &nbsp;

                &nbsp;
                <div class="border-1-solid-grey p-3 mt-2">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="position-relative form-group">
                                <label>View Lowest Price Package</label>
                                <textarea name="lowest_price_package" id="ckeditor_description8" class="form-control">{{ old('lowest_price_package', $freezone->price_package_info) }}</textarea>
                                <x-input-error class="mt-2 text-red" :messages="$errors->get('lowest_price_package')" />
                            </div>
                        </div>
                    </div>        
                </div>
                &nbsp;

                


                <div class="border-1-solid-grey p-3">
                    <div class="row" id="license">
                        <div class="col-md-12">
                            <h6 class="card-title">Business Licenses Information</h6>
                        </div>

                        @if($freezone->business_licenses->count() > 0)
                            @foreach($freezone->business_licenses as $key => $business_license)
                                <div class="col-md-12 business_license_box">

                                    @if($key > 0)
                                        <div class="w-100 h-1 bg-light-grey"></div>

                                        <div class="text-right mt-2 text-danger cursor_pointer delete_business_licenses">
                                            <span class="bg-danger text-white ba_delete_button pt-1 pb-1 pl-3 pr-3">Delete</span>
                                        </div>
                                    @endif

                                    <div class="row">
                                        <input type="hidden" name="license_id[]" value="{{$business_license->uuid}}">
                                        <div class="pl-3 pr-3">
                                            <div class="position-relative form-group">
                                                <label>Image</label>
                                                <div>
                                                    @if($business_license->image)
                                                        <img class="business_license_image" width="150" src='{{ Storage::url($business_license->image) }}'>
                                                    @else
                                                        <img class="business_license_image" width="150" src='{{ asset("images/placeholder.png") }}'>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label>License Name</label>
                                                <input name="license_name[]" value="{{ e(old('license_name.' . $key, $business_license->name)) }}" class="form-control">
                                                <x-input-error class="mt-2 text-red" :messages="$errors->get('license_name.' . $key)" />
                                            </div>

                                            <div class="position-relative form-group">
                                                <label>Image</label>
                                                <div class="image-container">
                                                    <label for="{{$business_license->uuid}}" class="change-image-btn">Choose file</label>
                                                    <div class="ba_business_image_name">{{basename($business_license->image)}}</div>
                                                    <input name="license_image[]" type="file" accept="image/*" id="{{$business_license->uuid}}" class="form-control ba_display_none business_license_image_input">
                                                </div>
                                                <x-input-error class="mt-2 text-red" :messages="$errors->get('license_image.' . $key)" />
                                                <input name="<?php echo 'business_license_image'.$key;?>" class="business_license_image_hidden" type="hidden" value="">
                                                @if ($errors->any() && e(old('business_license_image' . $key)) ) <x-input-error class="mt-2 text-red" messages="Please fix the validation error and select an image again." /> @endif
                                            </div>

                                            <div class="position-relative form-group">
                                                <label>Additional Information</label>
                                                <textarea name="additional_info[]" class="form-control">{{ e(old('additional_info.' . $key, $business_license->addition_info)) }}</textarea>
                                                <x-input-error class="mt-2 text-red" :messages="$errors->get('additional_info.' . $key)" />
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="col-md-12 business_license_box">
                                <div class="row">

                                    <input type="hidden" name="license_id[]" value="0">

                                    <div class="pl-3 pr-3">
                                        <div class="position-relative form-group">
                                            <label>Image</label>
                                            <div>
                                                <img class="business_license_image" width="150" src='{{ asset("images/placeholder.png") }}'>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label>License Name</label>
                                            <input name="license_name[]" value="{{ old('license_name.0')}}" type="text" class="form-control">
                                            <x-input-error class="mt-2 text-red" :messages="$errors->get('license_name.0')" />
                                        </div>

                                        <div class="position-relative form-group">
                                            <label>Image</label>
                                            <input name="license_image[]" type="file" accept="image/*" class="form-control business_license_image_input">
                                            @if ($errors->any() && old('license_image.0')) <x-input-error class="mt-2 text-red" messages="Please choose an image again." /> @endif
                                        </div>

                                        <div class="position-relative form-group">
                                            <label>Additional Information</label>
                                            <textarea name="additional_info[]" class="form-control" value="{{ old('additional_info.0')}}"></textarea>
                                            <x-input-error class="mt-2 text-red" :messages="$errors->get('additional_info.0')" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endif

                    </div>

                    <div class="m-3 btn btn-primary" id="addLicense">Add More License</div>

                </div>


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
                                        <img id="licence_registration_procedures_logo" width="150" src='{{ Storage::url($freezone->licence_registration_procedures_logo) }}'>
                                    @else
                                        <img id="licence_registration_procedures_logo" width="150" src='{{ asset("images/placeholder.png") }}'>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label>Registration Information</label>
                                <input type="text" name="registration_information" value="{{ old('registration_information', $freezone->licence_registration_procedures_info)}}" class="form-control">
                                <x-input-error class="mt-2 text-red" :messages="$errors->get('registration_information')" />
                            </div>

                            <div class="position-relative form-group">
                                <label>Image</label>
                                <div class="image-container">
                                    <label for="ba_licence_registration_procedures_logo" id="change-image-btn">Choose file</label>
                                    <div id="licence_registration_procedures_logo_name">{{basename($freezone->licence_registration_procedures_logo)}}</div>
                                    <input name="licence_registration_procedures_image" type="file" class="form-control ba_display_none" id="ba_licence_registration_procedures_logo" accept="image/*" onchange="displayImage(this, 'licence_registration_procedures_logo')">
                                </div>
                                <input name="licence_registration_procedures_logo" type="hidden" class="licence_registration_procedures_logo" value="">
                                <x-input-error class="mt-2 text-red" :messages="$errors->get('licence_registration_procedures_image')" />
                                @if ($errors->any() && old('licence_registration_procedures_logo')) <x-input-error class="mt-2 text-red" messages="Please fix the validation error and select an image again." /> @endif
                            </div>

                            <div class="position-relative form-group">
                                <label>Youtube embedded Video Link</label>
                                <input type="text" name="youtube_embedded_video_link" value="{{ old('youtube_embedded_video_link', $freezone->licence_registration_procedures_video_link)}}" class="form-control">
                                <x-input-error class="mt-2 text-red" :messages="$errors->get('youtube_embedded_video_link')" />
                            </div>
                        </div>

                    </div>
                </div>


                

                <div class="text-right">
                    <input type="submit" value="Update" class="mt-2 btn btn-primary">
                </div>

            </form>

            <div id="static_field_for_license" style="display:none">
                <div class="col-md-12 business_license_box">
                    <div class="w-100 h-1 bg-light-grey"></div>
                    <div class="text-right mt-2 text-danger cursor_pointer delete_business_licenses">
                        <span class="bg-danger text-white ba_delete_button pt-1 pb-1 pl-3 pr-3">Delete</span>
                    </div>
                    <div class="row">
                        <input type="hidden" name="license_id[]" value="0">
                        <div class="pl-3 pr-3">
                            <div class="position-relative form-group">
                                <label>Image</label>
                                <div>
                                    <img class="business_license_image" width="150" src='{{ asset("images/placeholder.png") }}'>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label>License Name</label>
                                <input name="license_name[]" type="text" class="form-control">
                            </div>

                            <div class="position-relative form-group">
                                <label>Image</label>
                                <input name="license_image[]" type="file" class="form-control business_license_image_input" accept="image/*">
                            </div>

                            <div class="position-relative form-group">
                                <label>Additional Information</label>
                                <textarea name="additional_info[]" class="form-control"></textarea>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</x-admin-layout>