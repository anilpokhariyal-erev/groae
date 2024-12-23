<x-admin-layout>
<style>
    #successMessage {
        color: green; /* Text color */
        background-color: #d4edda; /* Light green background */
        border: 1px solid #c3e6cb; /* Border color */
        border-radius: 5px; /* Rounded corners */
        padding: 10px 15px; /* Padding around the text */
        font-size: 16px; /* Font size */
        display: inline-block; /* Ensure it's displayed inline */
        margin: 10px 0; /* Margin around the message */
        width: 100% !important;
    }
</style>
    <div class="main-card mb-3 card mt-2">
        <div class="card-body">
            @if (session('success'))
                <div class="text-success ml-2" id="successMessage" style="font-weight: 500; text-align:center;">
                    {!! session('success') !!}
                </div>
            @endif
            <div class="row">
                <div class="col-md-8">
                    <h5 class="card-title">Transaction Detail</h5>
                </div>
                <div class="col-md-4">
                @if($transaction->payment_status === 'pending')
                    <form action="{{ route('transactions.updateStatus', $transaction->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-success mt-3">Mark as Paid</button>
                    </form>
                @elseif($transaction->payment_status === 'successful')
                    <form action="{{ route('transactions.markRefunded', $transaction->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-primary mt-3">Mark as Refunded</button>
                    </form>
                @endif
                </div>
            </div>

            <div class="table-responsive mt-2">
                <table class="mb-0 table">
                    <tr>
                        <th>Transaction Id</th>
                        <td>{{ $transaction->transaction_id }}</td>
                    </tr>
                    <tr>
                        <th>Customer</th>
                        <td>{{ ucwords($transaction?->customer?->name ?? 'N/A') }}</td>
                    </tr>
                    <tr>
                        <th>Freezone</th>
                        <td>{{ ucwords($transaction?->packageBooking?->package?->freezone?->name ?? 'N/A') }}</td>
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
