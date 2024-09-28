<x-admin-layout>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="ba_flex justify-between">
                <div class="ba_flex align_items_center">
                    <h5 class="card-heading">Attribute Options</h5>
                </div>

                <div class="ba_flex align_items_center">
                    <a href="{{ route('admin.attribute-options.create') }}" class="btn btn-primary">Create Attribute Option</a>
                </div>
            </div>
            &nbsp;
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
            <table class="mb-0 table table-striped table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Attribute</th>
                    <th>Value</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($attributeOptions as $index => $option)
                    <tr>
                        <td>{{ $index + 1 }}</td> <!-- Serial number starts from 1 -->
                        <td>{{ $option->attribute->name }}</td>
                        <td>{{ $option->value }}</td>
                        <td>
                             <span class="badge {{ $option->status ? 'badge-success' : 'badge-danger' }}">
                                 {{ $option->status ? 'Active' : 'Inactive' }}
                             </span>
                        <td>
                            <a href="{{ route('admin.attribute-options.edit', $option->id) }}" class="btn btn-warning">Edit</a>
                            @if($option->status)
                                <a href="{{ route('admin.attribute-options.disabled', $option->id) }}"
                                   class="btn btn-secondary btn-sm"
                                   onclick="return confirm('Are you sure you want to disable this option?');">
                                    Disable
                                </a>
                            @else
                                <a href="{{ route('admin.attribute-options.enabled', $option->id) }}"
                                   class="btn btn-secondary btn-sm"
                                   onclick="return confirm('Are you sure you want to enable this option?');">
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

</x-admin-layout>
