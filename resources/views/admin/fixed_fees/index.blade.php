<x-admin-layout>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <form method="GET" action="{{url()->current()}}">
                <div class="ba_flex justify-between">
                    <div class="ba_flex align_items_center">
                        <div class="ba_flex align_items_center mr-1 ml-1">
                            <div class="white-space-nowrap mr-1 ml-1">Keyword:</div>
                            <input type="text" id="label" value="{{request('label')}}" name="label" class="form-control">
                        </div>

                        <button id="filter-button" class="btn btn-primary mr-1 ml-1">Filter</button>
                        <a href="{{route('fixed-fee.index')}}" class="btn btn-primary">Reset</a>
                    </div>
                    <div class="ba_flex align_items_center">
                        <a href="{{route('fixed-fee.create')}}" class="btn btn-primary text-white">Create</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="main-card mb-3 card mt-2">
        <div class="card-body">
            <h5 class="card-heading">Fixed Fees</h5>
            @if(session('success'))
                <div class="main-card">
                    <div class="card-body">
                        <div class="custom-alert" role="alert">
                            {{ session('success') }}
                        </div>
                    </div>
                </div>
            @endif
            @if ($errors->any())
                <div class="main-card">
                    <div class="card-body">
                        <div class="custom-red-alert" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif
            <div class="table-responsive">
                <table class="mb-0 table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Label</th>
                            <th>Description</th>
                            <th>Freezone</th>
                            <th>Type</th>
                            <th>Value</th>
                            <th>Status</th>
                            <th>Created Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1; @endphp
                        @foreach($fixedFees as $fixedFee)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{ucwords($fixedFee->label)}}</td>
                                <td>{{$fixedFee->description}}</td>
                                <td>{{ucwords(optional($fixedFee->freezone)->name)}}</td>
                                <td>{{$fixedFee->type}}</td>
                                <td>{{number_format($fixedFee->value, 2)}}</td>
                                <td>{{$fixedFee->status ? 'Active' : 'Inactive'}}</td>
                                <td>{{$fixedFee->created_at->format('Y-m-d')}}</td>
                                <td>
                                    <a class="ml-1 mr-1" href="{{route('fixed-fee.edit', $fixedFee->id)}}">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
