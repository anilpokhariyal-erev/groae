<x-admin-layout>

    <div class="text-right">
        {{-- <a href="{{route('freezone-process-documents.customer-create')}}" class="mb-2 mr-2 btn btn-primary text-white">Request Customer details</a>
        <a href="{{route('freezone-process-documents.create')}}" class="mb-2 mr-2 btn btn-primary text-white">Send Document Request</a> --}}
    </div>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <form method="GET" action="{{url()->current()}}">
                <div class="ba_flex justify-content-end align_items_center">

                    <div class="ba_flex align_items_center mr-1 ml-1">
                        <div class="white-space-nowrap mr-1 ml-1">Name:</div>
                        <input type="text" id="name" value="{{request('name')}}" name="name" class="form-control">
                    </div>

                    <div class="ba_flex align_items_center mr-1 ml-1">
                        <div class="white-space-nowrap mr-1 ml-1">Status:</div>

                        <select name="status" class="custom-select ba_select2_without_search">
                            <option value="">All</option>
                            <option value="pending" @if(request('status') == "pending") selected @endif>Pending</option>
                            <option value="cutomer_submitted_request" @if(request('status') == "cutomer_submitted_request") selected @endif>customer has submitted the requested detail</option>
                        </select>

                        <!-- <input type="text" id="name" value="{{request('status')}}" name="name" class="form-control"> -->
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
                    <input type="submit" name="export" value="Export" class="btn btn-primary mr-1 ml-1">
                </div>
            </form>
        </div>
    </div>

    <div class="main-card mb-3 card mt-2">
        <div class="card-body">
            <h5 class="card-heading">Freezone Booking Requests</h5>
            <div class="table-responsive">
                <table class="mb-0 table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Freezone</th>
                            <th>License Type</th>
                            <th>Status</th>
                            <th>Created Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1; @endphp
                        @foreach($bookings as $bookings_data)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{$bookings_data->customer ? ucfirst($bookings_data->customer->name): ''}}</td>
                                <td>{{$bookings_data->freezone ? ucfirst($bookings_data->freezone->name): ''}}</td>
                                <td>{{$bookings_data->license ? $bookings_data->license->name : ''}}</td>
                                <td>
                                    <select id="update_booking_request" data-freezonebookingid="{{$bookings_data->id}}">
                                        <option value="requested" @if($bookings_data->client_status == "requested") selected @endif>Requested</option>
                                        <option value="approved" @if($bookings_data->client_status == "approved") selected @endif>Approved</option>
                                        <option value="rejected" @if($bookings_data->client_status == "rejected") selected @endif>Rejected</option>
                                        <option value="completed" @if($bookings_data->client_status == "completed") selected @endif>Completed</option>
                                    </select>
                                </td>
                                <td>{{@$bookings_data->created_at->format('Y-m-d')}}</td>
                                <td>
                                    <a class="" href="{{route('booking.show', $bookings_data->id)}}">&nbsp; View &nbsp;</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-3 pagination">
                {{ $bookings->links() }}
            </div>
        </div>
    </div>

    @if (session('error'))
        <div class="modal fade show" id="errorModal" style="display: block;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-red">Error</h5>
                    </div>
                    <div class="modal-body">
                        <p class="mb-0 text-red">{{ session('error') }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="close-errorModal" class="btn btn-secondary">Ok</button>
                    </div>
                </div>
            </div>
        </div>
    @endif

</x-admin-layout>
