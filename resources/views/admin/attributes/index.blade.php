<x-admin-layout>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="ba_flex justify-between">
                <div class="ba_flex align_items_center">
                    <h5 class="card-heading">Manage Attributes</h5>
                </div>

                <div class="ba_flex align_items_center">
                    <a href="{{ route('attributes.create') }}" class="btn btn-primary">Create Attribute</a>
                </div>
            </div>
            &nbsp
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
                <table class="mb-0 table table-striped">
                    <thead>
                    <tr>
                        <th>#</th> <!-- Serial number column -->
                        <th>Name</th>
                        <th>Label</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($attributes as $index => $attribute)
                        <tr>
                            <td>{{ $index + 1 }}</td> <!-- Display serial number -->
                            <td>{{ $attribute->name }}</td>
                            <td>{{ $attribute->label }}</td>
                            <td>
                                    <span class="badge {{ $attribute->status ? 'badge-success' : 'badge-danger' }}">
                                        {{ $attribute->status ? 'Active' : 'Inactive' }}
                                    </span>
                            </td>
                            <td>
                                <a href="{{ route('attributes.edit', $attribute->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <a href="{{ route('attributes.disabled', $attribute->id) }}" class="btn btn-secondary btn-sm">Disabled</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</x-admin-layout>
