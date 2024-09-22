<x-admin-layout>

    <div class="main-card mb-3 card">
        <div class="card-body">

                <div class="row">

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label>First Name</label>
                            <input value="{{$lead->first_name}}" readonly type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label>Last Name</label>
                            <input value="{{$lead->last_name}}" readonly type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label>Email</label>
                            <input value="{{$lead->email}}" readonly type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label>Mobile Number</label>
                            <input value="{{$lead->mobile_number}}" readonly type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label>Country</label>
                            <input value="{{$lead->country}}" readonly type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label>Freezone</label>
                            <input value="{{$freezone_name}}" readonly type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label>Business Setup Information</label>
                            <textarea readonly class="form-control">{{$lead->business_setup_info}}</textarea>
                        </div>
                    </div>

                </div>

        </div>
    </div>

</x-admin-layout>
