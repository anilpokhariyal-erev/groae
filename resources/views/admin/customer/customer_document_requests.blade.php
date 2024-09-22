<x-admin-layout>

    <div class="main-card mb-3 card mt-2">
        <div class="card-body">
            <h5 class="card-title">Customers</h5>

                <div class="table-responsive mt-2">
                    <table class="mb-0 table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Requested Date</th>
                                <th>Request Type</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 1; @endphp
                            @foreach ($customerProcessRequest as $customerProcess)
                                <tr>
                                    <th scope="row">{{$i++}}</th>
                                    <td>{{$customerProcess->created_at->format('Y-m-d')}}</td>
                                    <td>{{$customerProcess->request_type == 'document' ? 'Document' : 'Customer Detail'}}</td>
                                    <td>{{$customerProcess->status}}</td>
                                    <td>
                                        <a href="{{route('freezone-process-documents.customer-show', $customerProcess->uuid)}}">View</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                    
                <div class="mt-3 pagination">
                    {{ $customerProcessRequest->links() }}
                </div>

        </div>
    </div>
</x-admin-layout>