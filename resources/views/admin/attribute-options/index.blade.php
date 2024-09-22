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
             <div class="main-card mb-3 card">
                <div class="card-body">
                    <div class="alert alert-success text-success" role="alert">
                        {{session('success')}}
                    </div>
                </div>
            </div>
            @endif
            <table class="mb-0 table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Attribute</th>
                        <th>Value</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($attributeOptions as $option)
                        <tr>
                            <td>{{ $option->id }}</td>
                            <td>{{ $option->attribute->name }}</td>
                            <td>{{ $option->value }}</td>
                            <td>{{ $option->status ? 'Active' : 'Inactive' }}</td>
                            <td>
                                <a href="{{ route('admin.attribute-options.edit', $option->id) }}" class="btn btn-info">Edit</a>
                                <form action="{{ route('admin.attribute-options.destroy', $option->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-admin-layout>
