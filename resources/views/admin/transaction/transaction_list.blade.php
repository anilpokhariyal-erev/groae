<x-admin-layout>
    <div class="main-card mb-3 card mt-2">
        <div class="card-body">
            <center>
                @if(session('success'))
                <div class="alert alert-success text-success" role="alert">
                    {{session('success')}}
                </div>
                @endif
            </center>
            <h5 class="card-title">Transactions</h5>
            <div class="table-responsive">
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
                        @if($transaction)
                            @php $i = 1; @endphp
                            @foreach($transaction as $transaction_val)    
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{$transaction_val->transaction_id}}</td>
                                <td>{{ucwords($transaction_val->customer->name)}}</td>
                                <td>{{ucwords($transaction_val->freezone->name)}}</td>
                                <td>{{$transaction_val->amount}}</td>
                                <td>{{$transaction_val->payment_status}}</td>
                                <td>{{$transaction_val->created_at}}</td>
                                <td>
                                    <a class="ml-1 mr-1 " href="{{route('transaction.show',$transaction_val->id)}}">View</a>
                                </td>
                            </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>

            <div class="mt-3 pagination">
                {{ $transaction->links() }}
            </div>

        </div>
    </div>
</x-admin-layout>
