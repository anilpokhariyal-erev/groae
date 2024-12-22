<x-admin-layout>
    <div class="main-card mb-3 card mt-2 p-4">
        <div class="row p-4">
            <h5 class="card-title col-md-9">Transactions</h5>
            <span class="col-md-2">
                <a href="{{ route('transactions.create') }}" class="btn btn-primary">Create</a>
            </span>
        </div>
    </div>

    <div class="main-card mb-3 card mt-2">
        <div class="card-body">
            <center>
                @if(session('success'))
                <div class="alert alert-success text-success" role="alert">
                    {{ session('success') }}
                </div>
                @endif
            </center>
            
            <div class="table-responsive mt-2">
                <table class="mb-0 table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Transaction Id</th>
                            <th>Customer</th>
                            <th>Freezone</th>
                            <th>Amount</th>
                            <th>Payment Status</th>
                            <th>Created Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($transaction->count())
                            @php $i = 1; @endphp
                            @foreach($transaction as $transaction_val)    
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{$transaction_val->transaction_id}}</td>
                                <td>
                                @if($transaction_val->customer)
                                    {{ ucwords($transaction_val->customer->name) }}
                                @else
                                    N/A
                                @endif    
                                </td>
                                <td>
                                    @if($transaction_val?->packageBooking?->package?->freezone?->name)
                                        {{ ucwords($transaction_val->packageBooking->package->freezone->name) ?? 'N/A' }}
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td>{{$transaction_val->amount}}</td>
                                <td>{{$transaction_val->payment_status}}</td>
                                <td>{{$transaction_val->created_at}}</td>
                                <td>
                                    <a class="ml-1 mr-1" href="{{route('transaction.show', $transaction_val->id)}}">View</a>
                                </td>
                            </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="8" class="text-center">No transactions found.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
