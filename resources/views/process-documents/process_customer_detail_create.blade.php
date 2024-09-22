<x-admin-layout>

    <div class="main-card mb-3 card">
        <div class="card-body">

        @if (session('error'))
            <div class='font-medium text-red-600'>
                {{ session('error')}}
            </div>
        @endif

            <h5 class="card-title">Request Data</h5>
                
                <div class="row">

                    <div class="col-md-6">
                        <ul class="list-group" id="additionalList">
                            <li class="list-group-item">Name: {{$customer->name}}</li>
                            <li class="list-group-item">Mobile Number: {{$customer->mobile_number}}</li>
                            <li class="list-group-item">Email: {{$customer->email}}</li>
                            <li class="list-group-item">City: {{$customer->city}}</li>
                            <li class="list-group-item">State: {{$customer->state}}</li>
                            <li class="list-group-item">Country: {{$customer->country}}</li>
                        </ul>
                    </div>

                    <div class="col-md-6">
                        <ul class="list-group">
                            <li class="list-group-item">Pincode: {{$customer->pincode}}</li>
                            <li class="list-group-item">UAE Residence: {{$customer->uae_residence == 1?'Yes':'No'}}</li>
                            <li class="list-group-item">License Type: </li>
                            <li class="list-group-item">No Of Visa Required: </li>
                            <li class="list-group-item">No Of Shareholder: </li>
                            <li class="list-group-item">Freezone: </li>
                        </ul>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label class="mt-3">Add Extra Field</label>
                        <div class="flex align_items_center">
                            <input id="additions" type="text" class="form-control mr-2">
                            <div class="btn btn-primary" id="addAdditions">Add</div>
                        </div>
                    </div>
                </div>

            <form method="post" action="{{ route('freezone-process-documents.customer-request', $customer->uuid) }}" id="customerRequestDataForm">
                @csrf
                <div class="ba_flex align_items_center justify-content-end">
                    <button class="mt-2 btn btn-primary">Send</button>
                </div>
            </form>

        </div>
    </div>

</x-admin-layout>
