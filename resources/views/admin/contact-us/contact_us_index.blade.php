<x-admin-layout>

    <div class="main-card mb-3 card">
        <div class="card-body">

            <form method="GET" action="{{url()->current()}}">
                <!-- <div class="ba_flex justify-between"> -->
                    <div class="row ba_flex align_items_center">

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

                        <div class="ba_flex align_items_center mr-1 ml-1">
                            <div class="white-space-nowrap mr-1 ml-1">Request Type:</div>
                            <select name="request_type" class="custom-select ba_select2_without_search">
                                <option value="">All</option>
                                <option value="general" @if(request('request_type') == "general") selected @endif>General</option>
                                <option value="freezone" @if(request('request_type') == "freezone") selected @endif>Freezone</option>
                            </select>
                        </div>

                        <div class="ba_flex align_items_center mr-1 ml-1">
                            <div class="white-space-nowrap mr-1 ml-1">Status:</div>
                            <select name="status" class="custom-select ba_select2_without_search">
                                <option value="">All</option>
                                <option value="read" @if(request('status') == "read") selected @endif>Read</option>
                                <option value="unread" @if(request('status') == "unread") selected @endif>Unread</option>
                            </select>
                        </div>

                    </div>
                <!-- </div> -->

                <div class="row ba_flex justify-content-end mt-2 mr-1">
                    <button id="filter-button" class="btn btn-primary mr-1 ml-1">Filter</button>
                    <a href="{{route('contact.index')}}" class="btn btn-primary">Reset</a>
                </div>

            </form>

        </div>
    </div>

    <div class="main-card mb-3 card mt-2">
        <div class="card-body">
            <h5 class="card-heading">Contact Us</h5>
            <div class="table-responsive">
                <table class="mb-0 table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile Number</th>
                            <th>Request Type</th>
                            <th>Status</th>
                            <th>Created Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1; @endphp
                        @foreach($contact_us as $contact)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{ucfirst($contact->first_name)}} {{ucfirst($contact->last_name)}}</td>
                                <td>{{ucfirst($contact->email)}}</td>
                                <td>{{$contact->mobile_number}}</td>
                                <td>{{ucfirst($contact->type)}}</td>
                                <!--<td>{{$contact->status}}</td> -->
                                <td>
                                @if($contact->status == 'read')    
                                    <span class="badge badge-secondary">Read</span>
                                @else
                                    <span class="badge badge-warning">Unread</span>
                                @endif
                                </td>
                                <td>{{$contact->created_at->format('Y-m-d')}}</td>
                                <td>
                                    <a href="{{route('contact.edit', $contact->id)}}">View &nbsp;</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-3 pagination">
                {{ $contact_us->links() }}
            </div>

        </div>
    </div>
</x-admin-layout>
