<x-admin-layout>
    <div class="text-right">
        <a href="{{ route('package.create') }}" class="mb-2 mr-2 btn btn-primary text-white">Add Package</a>
    </div>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <form method="GET" action="{{url()->current()}}">
                <div class="ba_flex justify-content-end align_items_center">
                    <div class="ba_flex align_items_center mr-1 ml-1">
                        <div class="white-space-nowrap mr-1 ml-1">Title:</div>
                        <input type="text" id="title" value="{{request('title')}}" name="title" class="form-control">
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
            <h5 class="card-title">Package List</h5>
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
                            <th>Code</th>
                            <th>Name</th>
                            <th>Freezone</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Allowed free activities</th>
                            <th>Trending</th>
                            <th>Created Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1; @endphp
                        @foreach($packages as $package)
                            <tr>
                                <th scope="row">{{ $i++ }}</th>
                                <td>{{ $package->package_code }}</td>
                                <td>{{ $package->title }}</td>
                                <td>{{ $package->freezone->name }}</td>
                                <td>{{ $package->price }}</td>
                                <td>
                                    <span class="badge {{ $package->status == 1 ? 'badge-success' : 'badge-danger' }}">
                                        {{ $package->status == 1 ? 'Active' : 'Inactive' }}
                                    </span>
                                </td>
                                <td>{{ $package->allowed_free_packages ?? 0 }}</td>
                                <td>@if($package->trending == 1) Yes @else No @endif</td>
                                <td>{{ $package->created_at ? $package->created_at->format('Y-m-d') : '' }}</td>
                                <td>
                                    <a href="{{ route('package.edit', $package->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    @if($package->status == 1)
                                        <a href="{{ route('package.disabled', $package->id) }}"
                                        class="btn btn-secondary btn-sm"
                                        onclick="return confirm('Are you sure you want to disable this package?');">
                                            Disable
                                        </a>
                                    @else
                                        <a href="{{ route('package.enabled', $package->id) }}"
                                        class="btn btn-primary btn-sm"
                                        onclick="return confirm('Are you sure you want to enable this package?');">
                                            Enable
                                        </a>
                                    @endif
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>

<script>
    function confirmDelete(url) {
        if (confirm('Are you sure you want to delete this package?')) {
            document.location.href = url;
        }
    }
</script>
