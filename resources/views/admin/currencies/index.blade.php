<x-admin-layout>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">Currencies</h5>
            
            <!-- Add New Currency Button -->
            <div class="mb-3 text-right">
                <a href="{{ route('currency.create') }}" class="btn btn-primary">Add New Currency</a>
            </div>
            
            <!-- Table to Display Currencies -->
            <div class="table-responsive">
                <table class="mb-0 table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Label</th>
                            <th>Symbol</th>
                            <th>Code</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($currencies as $currency)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $currency->label }}</td>
                            <td>{{ $currency->symbol }}</td>
                            <td>{{ $currency->code }}</td>
                            <td>
                                @if ($currency->status == 1)
                                    <span class="badge badge-success">Active</span>
                                @else
                                    <span class="badge badge-danger">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('currency.edit', $currency->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('currency.destroy', $currency->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this currency?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Success Message -->
    @if (session('success'))
        <div class="alert alert-success" id="successMessage">
            {{ session('success') }}
        </div>
    @endif

    <!-- Error Message -->
    @if (session('error'))
        <div class="alert alert-danger" id="errorMessage">
            {{ session('error') }}
        </div>
    @endif
</x-admin-layout>
