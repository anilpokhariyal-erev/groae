<x-admin-layout>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <form method="GET" action="{{url()->current()}}">
                <div class="ba_flex justify-content-end align_items_center">

                    <div class="ba_flex align_items_center mr-1 ml-1">
                        <div class="white-space-nowrap mr-1 ml-1">First Name:</div>
                        <input type="text" id="name" value="{{request('name')}}" name="name" class="form-control">
                    </div>

                    <div class="ba_flex align_items_center mr-1 ml-1">
                        <div class="white-space-nowrap mr-1 ml-1">Country:</div>
                        <input type="text" id="country" value="{{request('country')}}" name="country" class="form-control">
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
                </div>
            </form>
        </div>
    </div>

    <div class="main-card mb-3 card mt-2">
        <div class="card-body">
            <h5 class="card-title">Leads</h5>
            <div class="table-responsive">
                <table class="mb-0 table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Mobile Number</th>
                            <th>Country</th>
                            <th>Created Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1; @endphp
                        @foreach($leads as $lead)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{ucfirst($lead->first_name)}}</td>
                                <td>{{ucfirst($lead->last_name)}}</td>
                                <td>{{$lead->email}}</td>
                                <td>{{$lead->mobile_number}}</td>
                                <td>{{$lead->country}}</td>
                                <td>{{$lead->created_at->format('Y-m-d')}}</td>
                                <td>
                                    <a href="{{route('lead.show', $lead->uuid)}}">View &nbsp;</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-3 pagination">
                {{ $leads->links() }}
            </div>

        </div>
    </div>
</x-admin-layout>
