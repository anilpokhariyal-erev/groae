<x-admin-layout>
   {{-- @if(!Auth::user()->freezone_id) --}}
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
                            <a href="{{route('freezones.index')}}" class="btn btn-primary">Reset</a>
                        </div>
                        <div class="ba_flex align_items_center">
                            <input type="submit" name="export" value="Export" class="btn btn-primary mr-1 ml-1">
                            <a href="{{route('freezones.create')}}" class="btn btn-primary text-white {{ $has_role_or_permission('create-freezones', 'disabled_link') }}">Create Freezone</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    {{-- @endif --}}

    <div class="main-card mb-3 card mt-2">
        <div class="card-body">
            <h5 class="card-heading">Freezones</h5>
            <div class="table-responsive">
                <table class="mb-0 table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Created Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1; @endphp
                        @foreach($freezones as $freezone)
                        <tr>
                            <th scope="row">{{$i++}}</th>
                            <td>{{ucwords($freezone->name)}}</td>           
                            <td>@if($freezone->status == 1) Active @else Inactive @endif</td>
                            <td>{{$freezone->created_at->format('Y-m-d')}}</td>
                            <td>
                                <a href="{{route('freezones.edit', $freezone->uuid)}}" class="{{ $has_role_or_permission('edit-freezones', 'disabled_link') }}">&nbsp; Edit &nbsp;</a>
                                <a href="#" onclick="confirmDelete('{{route('freezones.delete', $freezone->uuid)}}'); return false;" class="text-red {{ $has_role_or_permission('delete-freezones', 'disabled_link') }}">&nbsp; Delete &nbsp;</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-3 pagination">
                {{ $freezones->links() }}
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
