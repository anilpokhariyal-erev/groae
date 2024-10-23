<x-admin-layout>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <form method="GET" action="{{ url()->current() }}">
                <div class="ba_flex justify-between">
                    <div class="ba_flex align_items_center">
                        <div class="ba_flex align_items_center mr-1 ml-1">
                            <div class="white-space-nowrap mr-1 ml-1">Keyword:</div>
                            <input type="text" id="name" value="{{ request('name') }}" name="name" class="form-control">
                        </div>

                        <button id="filter-button" class="btn btn-primary mr-1 ml-1">Filter</button>
                        <a href="{{ route('visa-package-attribute-headers.index') }}" class="btn btn-primary">Reset</a>
                    </div>
                    <div class="ba_flex align_items_center">
                        <a href="{{ route('visa-package-attribute-headers.create') }}" class="btn btn-primary text-white">Create Visa Package Attribute Header</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="main-card mb-3 card mt-2">
        <div class="card-body">
            <h5 class="card-heading">Visa Package Attribute Headers</h5>
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
                            <th>Attribute Name</th>
                            <th>Attribute Title</th>
                            <th>Status</th>
                            <th>Created Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1; @endphp
                        @foreach($visaPackageAttributeHeaders as $header)
                            <tr>
                                <th scope="row">{{ $i++ }}</th>
                                <td>{{ ucwords($header->name) }}</td>
                                <td>{{ ucwords($header->title) }}</td>
                                <td>{{ $header->status ? 'Active' : 'Inactive' }}</td>
                                <td>{{ $header->created_at->format('Y-m-d') }}</td>
                                <td>
                                    <a class="ml-1 mr-1" href="{{ route('visa-package-attribute-headers.edit', $header->id) }}">Edit</a>
                                    <a class="ml-1 mr-1 text-red" href="#" onclick="confirmDelete('{{ route('visa-package-attribute-headers.delete', $header->id) }}'); return false;">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
