<x-admin-layout>

    <div class="text-right">
        {{-- Add any specific actions for package bookings here --}}
    </div>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <form method="GET" action="{{ url()->current() }}">
                <div class="ba_flex justify-content-end align_items_center">
                    <div class="ba_flex align_items_center mr-1 ml-1">
                        <div class="white-space-nowrap mr-1 ml-1">Customer Name:</div>
                        <input type="text" id="customer_name" value="{{ request('customer_name') }}" name="customer_name" class="form-control">
                    </div>
                    <div class="ba_flex align_items_center mr-1 ml-1">
                        <div class="white-space-nowrap mr-1 ml-1">Payment Status:</div>
                        <select name="payment_status" class="custom-select ba_select2_without_search">
                            <option value="">All</option>
                            <option value="0" @if(request('payment_status') == "0") selected @endif>Pending</option>
                            <option value="1" @if(request('payment_status') == "1") selected @endif>Completed</option>
                        </select>
                    </div>
                    <div class="ba_flex align_items_center mr-1 ml-1">
                        <div class="white-space-nowrap mr-1 ml-1">Start Date:</div>
                        <input type="date" id="start-date" value="{{ request('start_date') }}" name="start_date" class="form-control">
                    </div>
                    <div class="ba_flex align_items_center mr-1 ml-1">
                        <div class="white-space-nowrap mr-1 ml-1">End Date:</div>
                        <input type="date" id="end-date" value="{{ request('end_date') }}" name="end_date" class="form-control">
                    </div>
                    <button id="filter-button" class="btn btn-primary mr-1 ml-1">Filter</button>
                    <input type="submit" name="export" value="Export" class="btn btn-primary mr-1 ml-1">
                </div>
            </form>
        </div>
    </div>

    <div class="main-card mb-3 card mt-2">
        <div class="card-body">
            <h5 class="card-heading">Package Bookings</h5>
            <div class="table-responsive">
                <table class="mb-0 table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Customer</th>
                            <th>Package</th>
                            <th>Original Cost (AED)</th>
                            <th>Discount (AED)</th>
                            <th>Final Cost (AED)</th>
                            <th>Status</th>
                            <th>Remarks</th>
                            <th>Payment Status</th>
                            <th>Payment Method</th>
                            <th>Transaction ID</th>
                            <th>Created Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1; @endphp
                        @foreach($packageBookings as $booking)
                            <tr>
                                <th scope="row">{{ $i++ }}</th>
                                <td>{{ $booking->customer ? ucfirst($booking->customer->name) : '' }}</td>
                                <td>{{ $booking->package ? ucfirst($booking->package->title) : '' }}</td>
                                <td>{{ number_format($booking->original_cost, 2) }}</td>
                                <td>{{ number_format($booking->discount_amount, 2) }}</td>
                                <td>{{ number_format($booking->final_cost, 2) }}</td>
                                <td>
                                    @if($booking->status == '0')
                                        <span class="badge badge-danger">Cancelled</span>
                                    @elseif($booking->status == '1')
                                        <span class="badge badge-warning">Quote Requested</span>
                                    @elseif($booking->status == '2')
                                        <span class="badge badge-success">Quote Generated</span>
                                    @elseif($booking->status == '3')
                                        <span class="badge badge-success">Payment Refunded</span>
                                    @endif
                                </td>
                                <td>{{$booking->remarks ?? ''}}</td>
                                <td>
                                    @if($booking->payment_status == 0)
                                        <span class="badge badge-warning">Pending</span>
                                    @elseif($booking->payment_status == 1)
                                        <span class="badge badge-success">Completed</span>
                                    @endif
                                </td>
                                <td>{{ ucfirst($booking->payment_method) ?? 'N/A' }}</td>
                                <td>{{ $booking->transaction_id ?? 'N/A' }}</td>
                                <td>{{ $booking->created_at ? $booking->created_at->format('Y-m-d') : '' }}</td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="{{ route('package-bookings.show', $booking->id) }}">View</a>
                                    <a class="btn btn-primary btn-sm" href="{{ route('package-bookings.documents', $booking->id) }}">Documents</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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
