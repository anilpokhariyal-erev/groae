<x-admin-layout>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <form method="post" action="{{ route('currency.update', $currency->id) }}">
                @csrf
                @method('PUT')
                <div class="row">
                    <!-- Currency Label -->
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="label">Currency Label <span class="text-danger">*</span></label>
                            <input name="label" id="label" value="{{ old('label', $currency->label) }}" type="text" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('label')" />
                        </div>
                    </div>

                    <!-- Currency Symbol -->
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="symbol">Currency Symbol <span class="text-danger">*</span></label>
                            <input name="symbol" id="symbol" value="{{ old('symbol', $currency->symbol) }}" type="text" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('symbol')" />
                        </div>
                    </div>

                    <!-- Currency Code -->
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="code">Currency Code <span class="text-danger">*</span></label>
                            <input name="code" id="code" value="{{ old('code', $currency->code) }}" type="text" class="form-control" readonly>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('code')" />
                        </div>
                    </div>


                </div>

                <!-- Update Button -->
                <div class="ba_flex align_items_center">
                    <button class="mt-1 btn btn-primary">Update</button>
                    @if (session('success'))
                        <div class="text-success ml-2" id="successMessage">{{ session('success') }}</div>
                    @endif
                </div>
            </form>
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
