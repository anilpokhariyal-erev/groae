<x-admin-layout>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <form method="GET" action="{{url()->current()}}">
                <div class="ba_flex justify-content-end align_items_center">

                    <div class="ba_flex align_items_center mr-1 ml-1">
                        <div class="white-space-nowrap mr-1 ml-1">Start Date:</div>
                        <input type="date" id="start-date" value="{{$start_date}}" name="start_date" class="form-control">
                    </div>

                    <div class="ba_flex align_items_center mr-1 ml-1">
                        <div class="white-space-nowrap mr-1 ml-1">End Date:</div>
                        <input type="date" id="end-date" value="{{$end_date}}" name="end_date" class="form-control">
                    </div>

                    @if(auth()->user()->user_type != 'freezone_admin')
                        <div class="ba_flex align_items_center mr-1 ml-1">
                            <div class="white-space-nowrap mr-1 ml-1">Freezones:</div>
                            <select name="freezone_id" class="custom-select">
                                <option value="0">All</option>
                                @foreach($freezones as $freezone)
                                    <option value="{{$freezone->id}}" @if($freezone_id == $freezone->id) selected @endif>{{ucfirst($freezone->name)}}</option>
                                @endforeach
                            </select>
                        </div>
                    @endif

                    <button id="filter-button" class="btn btn-primary mr-1 ml-1">Filter</button>

                </div>
                <div class="ba_flex justify-content-end">
                    <x-input-error class="mt-2 text-red" :messages="$errors->get('start_date')" />
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-xl-4">
            <div class="card mb-3 widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">Total Freezone Admin</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers">{{$users_count}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
