<x-admin-layout>
    <div class="main-card mb-3 card mt-2">
        <div class="card-body">
            <center>
                @if(session('success'))
                    <div class="alert alert-success text-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
            </center>
            <h5 class="card-title">Transaction Detail</h5>
            <div class="table-responsive">
                <table class="mb-0 table">
                    <tr>
                        <th>Transaction Id</th>
                        <td>{{ $transaction->transaction_id }}</td>
                    </tr>
                    <tr>
                        <th>Customer</th>
                        <td>{{ ucwords(optional($transaction->customer)->name ?? 'N/A') }}</td>
                    </tr>
                    <tr>
                        <th>Freezone</th>
                        <td>{{ ucwords(optional($transaction->packageBooking->package->freezone)->name ?? 'N/A') }}</td>
                    </tr>
                    <tr>
                        <th>Amount</th>
                        <td>{{ number_format($transaction->amount, 2) }}</td>
                    </tr>
                    <tr>
                        <th>Payment Status</th>
                        <td>{{ ucwords($transaction->payment_status) }}</td>
                    </tr>
                    <tr>
                        <th>Created Date</th>
                        <td>{{ $transaction->created_at->format('Y-m-d') }}</td>
                    </tr>
                </table>
            </div>

            <form>
                <div class="form-row align-items-center">
                    <div class="col-auto">
                        <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Verify Message">
                    </div>
                    <div class="col-auto">
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                            <label class="form-check-label" for="autoSizingCheck">Verify</label>
                        </div>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-2">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>
