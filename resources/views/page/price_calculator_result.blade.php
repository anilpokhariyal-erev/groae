<x-admin-layout>

    <div class="main-card mb-3 card">
        <div class="card-body">

                <div class="row">

                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label><b>Freezone Name:</b></label>
                            {{ucfirst($freezone->name)}}
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label><b>License Name:</b></label>
                            {{ucfirst($license->name)}}
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label><b>Price:</b></label>
                            {{$license->price}}
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label><b>Package Name:</b></label>
                            {{ucfirst($package->name)}}
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label><b>PHL Fee:</b></label>
                            {{$package->phl_fee}}
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label><b>Office Name:</b></label>
                            {{ucfirst($package_selected_attr->name)}}
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label><b>Price:</b></label>
                            {{$package_selected_attr->price}}
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label><b>Additional charges:</b></label>
                            {{--@php $package_attrs_cost = 0; @endphp
                            @foreach($package_attrs as $package_attr)
                                @php $package_attrs_cost += $package_attr->price; @endphp
                                {{ucfirst($package_attr->name)}}, 
                            @endforeach--}}
                            {{$package_attrs_name}}
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label><b>Price:</b></label>
                            {{$package_attrs_cost}}
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label><b>No of visa:</b></label>
                            {{request()->no_of_visas}}
                        </div>
                    </div>

                    <div class="col-md-6"></div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label><b>Visa Type:</b></label>
                            {{ucfirst($visa_type->visa_type)}}
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label><b>Price:</b></label>
                            {{$visa_type->cost}} * {{request()->no_of_visas}} = {{$visa_type->cost * request()->no_of_visas}}
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label><b>Visa Activities:</b></label>
                            {{--@php $visa_activities_cost = 0; @endphp
                            @foreach($visa_activities as $visa_activitie)
                                @php $visa_activities_cost += $visa_activitie->price; @endphp
                                {{ucfirst($visa_activitie->name)}}, 
                            @endforeach--}}
                            {{$visa_activitie_name}}
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label><b>Price:</b></label>
                            {{$visa_activities_cost}} * {{request()->no_of_visas}} = {{$visa_activities_cost * request()->no_of_visas}}
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label><b>Additional Activities:</b></label>
                            Company Immigration Card
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label><b>Price:</b></label>
                            2000
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label><b>Total cost:</b></label>
                            {{$total}}
                        </div>
                    </div>

                </div>

        </div>
    </div>

</x-admin-layout>
