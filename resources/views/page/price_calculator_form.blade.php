<x-admin-layout>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <form method="post" action="{{route('calculate_price')}}">
            @csrf

                <div class="row">

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label>Freezone <span class="text-danger">*</span></label>
                            <select name="freezone_id" class="custom-select">
                                @foreach($freezones as $freezone)
                                    <option value="{{$freezone->id}}" @if(request('freezone_id') == $freezone->id) selected @endif>{{ucfirst($freezone->name)}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label>License Type <span class="text-danger">*</span></label>
                            <select name="license_type" class="custom-select">
                                @foreach($licenses as $license)
                                    <option value="{{$license->id}}" @if(request('license_type') == $license->id) selected @endif>{{ucfirst($license->name)}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label>Packages <span class="text-danger">*</span></label>
                            <select name="package" class="custom-select">
                                @foreach($packages as $package)
                                    <option value="{{$package->id}}" @if(request('package') == $package->id) selected @endif>{{ucfirst($package->name)}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label>Office Name <span class="text-danger">*</span></label>
                            <select name="package_attrs" class="custom-select">
                                @foreach($package_attrs as $package_attr)
                                    @if($package_attr->type == 'selectable')
                                        <option value="{{$package_attr->id}}" @if(request('package_attr') == $package_attr->id) selected @endif>{{ucfirst($package_attr->name)}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label>Visa Type <span class="text-danger">*</span></label>
                            <select name="visa_type" class="custom-select">
                                @foreach($visa_types as $visa_type)
                                    <option value="{{$visa_type->id}}" @if(request('visa_type') == $visa_type->id) selected @endif>{{ucfirst($visa_type->visa_type)}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label>No of Visa <span class="text-danger">*</span></label>
                            <input name="no_of_visas" id="no_of_visas" type="number" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label>Visa Activity <span class="text-danger">*</span></label>
                            <select name="visa_activity[]" class="custom-select ba_select2_multiselect" multiple>
                                @foreach($visa_activities as $visa_activity)
                                    <option value="{{$visa_activity->id}}" @if(request('visa_activity') == $visa_activity->id) selected @endif>{{ucfirst($visa_activity->name)}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="ba_flex align_items_center">
                        <button id="filter-button" class="btn btn-primary mr-1 ml-1">Calculate</button>
                    </div>

                </div>
            </form>
        </div>
    </div>

</x-admin-layout>
