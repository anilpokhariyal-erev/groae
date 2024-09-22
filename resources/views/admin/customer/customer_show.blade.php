<x-admin-layout>
    <!-- <div class="main-card mb-3 mt-2 card">
        <div class="card-body">
            @if(auth()->user()->can('create-process-document') || auth()->user()->hasRole('superadmin'))
                <div class="text-right">
                    <a href="{{route('freezone-process-documents.customer-create', $customer->uuid)}}" class="mr-2 btn btn-primary text-white">Request Customer details</a>
                    <a href="{{route('freezone-process-documents.request', $customer->uuid)}}" class="mr-2 btn btn-primary text-white">Send Document Request</a>
                </div>
            @endif

            @if($customerProcessRequest->count() > 0)
                <div>
                    <h5>Customer Registration Process Initiated</h5>
                    <p>A request for customer {{$customerProcessRequest[0]->request_type == "customer_data"? "detail" : "document"}}, generated on {{$customerProcessRequest[0]->created_at->format('Y-m-d')}}, is currently in a "{{$customerProcessRequest[0]->status}}" status.</p>
                    @if(auth()->user()->can('view-process-document') || auth()->user()->hasRole('superadmin'))
                        <a href="{{route('customer.view-requested-documents-detail', $customer->uuid)}}" class="mr-2 btn btn-primary text-white">View All Requests</a>
                    @endif
                </div>
            @endif
        </div>
    </div> -->

    <div class="main-card mb-3 mt-2 card">
        <div class="card-body">
            <div class="ba_flex justify-between">
                <div class="ba_flex align_items_center">
                    <h5 class="card-heading">Customer Detail</h5>
                </div>

                <div class="ba_flex align_items_center">
                    <a href="{{route('customer.index')}}" class="btn btn-primary">Back</a>
                </div>
            </div>
            &nbsp;    
                <div class="row">

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label>Name</label>
                            <input value="{{$customer->name}}" readonly type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label>Mobile Number</label>
                            <input value="{{$customer->mobile_number}}" readonly type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label>Email</label>
                            <input value="{{$customer->email}}" readonly type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label>City</label>
                            <input value="{{$customer->city}}" readonly type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label>State</label>
                            <input value="{{$customer->state ? $customer->state->name : ''}}" readonly type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label>Country</label>
                            <input value="{{$customer->country ? $customer->country->name : ''}}" readonly type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label>Pincode</label>
                            <input value="{{$customer->pincode}}" readonly type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label>UAE Residence</label>
                            <input value="{{$customer->uae_residence == 1?'Yes':'No'}}" readonly type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label>Status</label>
                            <input value="{{$customer->status == 1?'Unblocked':'Blocked'}}" readonly type="text" class="form-control">
                        </div>
                    </div>

                    @if($customer->proof_document)
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label>Proof Document</label>
                                <div>
                                    <img width="150" src='{{ Storage::url($customer->proof_document) }}'>
                                </div>
                            </div>
                        </div>
                    @endif

                </div>

        </div>
    </div>

</x-admin-layout>
