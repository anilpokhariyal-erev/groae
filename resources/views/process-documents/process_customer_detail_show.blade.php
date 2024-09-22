<x-admin-layout>

    <div class="main-card mb-3 card">
        <div class="card-body">
                <div class="row">

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label>Name</label>
                            <input value="{{$processDocument->customer->name}}" readonly type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label>Mobile Number</label>
                            <input value="{{$processDocument->customer->mobile_number}}" readonly type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label>Email</label>
                            <input value="{{$processDocument->customer->email}}" readonly type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label>City</label>
                            <input value="{{$processDocument->customer->city}}" readonly type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label>State</label>
                            <input value="{{$processDocument->customer->state}}" readonly type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label>Country</label>
                            <input value="{{$processDocument->customer->country}}" readonly type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label>Pincode</label>
                            <input value="{{$processDocument->customer->pincode}}" readonly type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label>UAE Residence</label>
                            <input value="{{$processDocument->customer->uae_residence == 1?'Yes':'No'}}" readonly type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label>Status</label>
                            <input value="{{$processDocument->status}}" readonly type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label>License Type</label>
                            <input value="{{$processDocument->license_type}}" readonly type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label>No of Visa Required</label>
                            <input value="{{$processDocument->no_of_visa_required}}" readonly type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label>No of Shareholder</label>
                            <input value="{{$processDocument->no_of_shareholder}}" readonly type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label>Freezone</label>
                            <input value="{{$processDocument->freezone_id ? $processDocument->freezone->name : ''}}" readonly type="text" class="form-control">
                        </div>
                    </div>

                    @if($processDocument->additional_detail)
                        @php $additional_details = json_decode($processDocument->additional_detail); @endphp

                        @if($additional_details)
                            @foreach($additional_details as $key => $additional_detail)
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label class="capitalize">{{$key}}</label>
                                        <input value="{{$additional_detail}}" type="text" readonly class="form-control">
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    @endif

                    @if($processDocument->customer->proof_document)
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label>Proof Document</label>
                                <div>
                                    <img width="150" src='{{ Storage::url($processDocument->customer->proof_document) }}'>
                                </div>
                            </div>
                        </div>
                    @endif

                </div>
        </div>
    </div>

</x-admin-layout>
