<x-admin-layout>
    <style>
        #successMessage {
            width: 100% !important;
            color: green; /* Text color */
            background-color: #d4edda; /* Light green background */
            border: 1px solid #c3e6cb; /* Border color */
            border-radius: 5px; /* Rounded corners */
            padding: 10px 15px; /* Padding around the text */
            font-size: 16px; /* Font size */
            display: inline-block; /* Ensure it's displayed inline */
            margin: 10px 0; /* Margin around the message */
        }
    </style>    
    @if (session('success'))
        <div class="text-success ml-2" id="successMessage" style="font-weight: 500; text-align:center;">
            {!! session('success') !!}
        </div>
    @endif
    <div class="main-card mb-3 card">
        <div class="card-body">

            <form method="GET" action="{{url()->current()}}">
                <div class="ba_flex justify-between">

                    <div class="ba_flex align_items_center">

                        <div class="ba_flex align_items_center mr-1 ml-1">
                            <div class="white-space-nowrap mr-1 ml-1">Keyword:</div>
                            <input type="text" id="name" value="{{request('name')}}" name="name" class="form-control">
                        </div>

                        <div class="ba_flex align_items_center mr-1 ml-1">
                            <div class="white-space-nowrap mr-1 ml-1">Start Date:</div>
                            <input type="date" id="start-date" value="{{request('start_date')}}" name="start_date" class="form-control">
                        </div>

                        <div class="ba_flex align_items_center mr-1 ml-1">
                            <div class="white-space-nowrap mr-1 ml-1">End Date:</div>
                            <input type="date" id="end-date" value="{{request('end_date')}}" name="end_date" class="form-control">
                        </div>

                        <button id="filter-button" class="btn btn-primary mr-1 ml-1">Filter</button>
                        <a href="{{route('customer.index')}}" class="btn btn-primary">Reset</a>

                    </div>

                    <div>
                        <input type="submit" name="export" value="Export" class="btn btn-primary ">
                    </div>

                </div>
                <x-input-error class="mt-2 text-red" :messages="$errors->get('start_date')" />
            </form>

        </div>
    </div>
    
    <div class="main-card mb-3 card mt-2">
        <div class="card-body">
            <h5 class="card-heading">Customers</h5>
            <div class="table-responsive">
                <table class="mb-0 table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Country Code</th>
                            <th>Mobile Number</th>
                            <th>Country</th>
                            <th>State</th>
                            <th>Status</th>
                            <th>Created Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1; @endphp
                        @foreach($customers as $customer)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{ucfirst($customer->name)}}</td>
                                <td>
                                    @if($customer->email_verified_at)
                                        <div class="d-flex align-items-center">
                                            <i class="text-success fas fa-check-circle me-2"></i>
                                            <span>{{ ucfirst($customer->email) }}</span>
                                        </div>
                                    @else
                                        <div class="d-flex align-items-center">
                                            <i class="text-danger fas fa-exclamation-circle me-2"></i>
                                            <span>{{ ucfirst($customer->email) }}</span>
                                        </div>
                                    @endif
                                </td>
                                <td>@if ($customer->dialCode) {{$customer->iso2}}--{{$customer->dialCode}}@endif</td>
                                <td>{{$customer->mobile_number}}</td>
                                <td>{{$customer->country ? $customer->country->name : ''}}</td>
                                <td>{{$customer->state ? $customer->state->name : ''}}</td>
                                <td>{{$customer->status?'Active':'Inactive'}}</td>
                                <td>{{$customer->created_at->format('Y-m-d')}}</td>
                                <td>
                                    <a href="{{route('customer.show', $customer->uuid)}}">View &nbsp;</a>
                                    @if($customer->status == 1)
                                        <a class="text-red {{ $has_role_or_permission('update-customer', 'disabled_link') }}" href="{{route('customer.update_status', [$customer->uuid, 'block'])}}">&nbsp;Block&nbsp;</a>
                                    @else
                                        <a class="{{ $has_role_or_permission('update-customer', 'disabled_link') }}" href="{{route('customer.update_status', [$customer->uuid, 'unblock'])}}">&nbsp;Unblock&nbsp;</a>
                                    @endif
                                    <a class="text-red {{ $has_role_or_permission('delete-customer', 'disabled_link') }}" href="#" onclick="confirmDelete('{{route('customer.delete', $customer->uuid)}}'); return false;">&nbsp;Delete&nbsp;</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
