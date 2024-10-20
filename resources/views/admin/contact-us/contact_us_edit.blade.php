<x-admin-layout>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="ba_flex justify-between">
                <div class="ba_flex align_items_center">
                    <h5 class="card-heading">Contact Us Detail</h5>
                </div>

                <div class="ba_flex align_items_center">
                    <a href="{{route('contact.index')}}" class="btn btn-primary">Back</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                <table class="table">
                    <tbody>
                        <tr><th>Name</th><td>{{ucfirst($contact_detail->first_name)}} {{ucfirst($contact_detail->last_name)}}</td></tr>
                        <tr><th>Email</th><td>{{$contact_detail->email}}</td></tr>
                        <tr><th>Mobile Number</th><td>{{$contact_detail->mobile_number}}</td></tr>
                        <tr><th>Request Type</th><td>{{$contact_detail->type}}</td></tr>
                        <tr><th>Created Date</th><td>{{$contact_detail->created_at}}</td></tr>
                       
                        <?php 
                        if($contact_detail->type == 'freezone'){ 
                            $freezone_request = json_decode($contact_detail->message); ?>
                            
                            <tr><th>&nbsp;&nbsp;<h5 class="card-title">Freezone Details</h5></th><td></td></tr>
                            <tr><th>Freezone</th><td>
                                <?php 
                                $freezone = DB::table('freezones')->select('id','name')->where('uuid',$freezone_request->freezone)->first();  
                                echo ucwords($freezone->name);
                                ?>
                            </td></tr>
                            <tr><th>License Type</th><td>
                                <?php 
                                $license_type = DB::table('licenses')->select('id','name')->where('id',$freezone_request->license ?? 0)->first(); 
                                if($license_type){
                                    echo ucwords($license_type->name);
                                }
                                ?>
                            </td></tr>
                            <tr><th>Package</th><td>{{$freezone_request->visa_package ?? 0}}</td></tr>
                            <tr><th>Office</th><td>{{$freezone_request->office ?? 0}}</td></tr>
                            <tr><th>License Validity</th><td>{{$freezone_request->license_validity ?? 0}} Year</td></tr>

                            <?php $activity_group = explode('___',$freezone_request->activity_group_selection); ?>
                            <tr><th>Activity Group</th>
                                <td>@if($activity_group) 
                                        @foreach($activity_group as $group) 
                                        {{substr($group,17)}} ,
                                        @endforeach 
                                    @endif
                                </td>
                            </tr>

                            <?php $activities = explode('___',$freezone_request->activities_selection); ?>
                            <tr><th>Activities</th>
                                <td>@if($activities) 
                                        @foreach($activities as $activity) 
                                        {{substr($activity,14)}} ,
                                        @endforeach 
                                    @endif
                                </td>
                            </tr>
                            <?php
                            if(isset($freezone_request->visa_type)){
                                $visa_type_arr = (array) $freezone_request->visa_type;
                                $visa_add_on_arr = (array) $freezone_request->visa_add_on;
                                $location_arr = (array) $freezone_request->location;
                                foreach ($freezone_request->visa_type as $key => $visa_type) {
                                    $visa_type_data = DB::table('visa_types')->where('id', $visa_type_arr[$key])->first();
                                    $visa_add_on_data = DB::table('visa_add_ons')->where('id', $visa_add_on_arr[$key])->first();
                                    $location_data = DB::table('locations')->where('id', $location_arr[$key])->first();
                                    $visa_package_name = $visa_type_data->name . ', ' . $visa_add_on_data->name . ', ' . $location_data->name;                
                                    ?>
                                    <tr><th>Visa Package {{$key}}</th><td>{{$visa_package_name}}</td></tr>;
                                    <?php
                                } 
                            }   
                        }else{ ?>
                            <tr><th>Message</th><td>{{$contact_detail->message}}</td></tr>
                        <?php } ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>

        <div class="card-body">
            <h5 class="card-heading">Replies</h5>

            @foreach($contact_detail->contactUsReply as $contact_reply)
            <div class="mb-3">
                <div><b>Reply From:</b> {{ $contact_reply->sender->name }}</div>
                <div><b>Date:</b> {{ $contact_reply->created_at->format('Y-m-d') }}</div>
                <div><b>Reply:</b> {{ $contact_reply->message }}</div>
            </div>
            @endforeach

            <form method="POST" action="{{ route('contact.update', $contact_detail->id) }}">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" class="form-control"></textarea>
                        </div>
                    </div>
                </div>

                <div class="ba_flex align_items_center">
                    <button class="mt-1 btn btn-primary">Send</button>
                </div>
            </form>

        </div>

    </div>

</x-admin-layout>
