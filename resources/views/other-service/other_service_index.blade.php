<x-admin-layout>
    <div class="text-right">
        <a href="{{route('other-service.create')}}" class="mb-2 mr-2 btn btn-primary text-white {{ $has_role_or_permission('create-other-service', 'disabled_link') }}">Create Other Service</a>
    </div>

    <div class="main-card mb-3 card mt-2">
        <div class="card-body">
            <h5 class="card-title">Other Services</h5>
            <div class="table-responsive">
                <table class="mb-0 table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Service Name</th>
                            <th>Service Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1; @endphp
                        @foreach($otherServices as $otherService)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{ucfirst($otherService->service_name)}}</td>
                                <td>{{ucfirst(str_replace('_', ' ', $otherService->service_type))}}</td>
                                <td>
                                    <a class="ml-1 mr-1 {{ $has_role_or_permission('edit-other-service', 'disabled_link') }}" href="{{route('other-service.edit', $otherService->uuid)}}">Edit</a>
                                    <a class="ml-1 mr-1 text-red {{ $has_role_or_permission('delete-other-service', 'disabled_link') }}" href="#" onclick="confirmDelete('{{route('other-service.delete', $otherService->uuid)}}'); return false;" >Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-3 pagination">
                {{ $otherServices->links() }}
            </div>

        </div>
    </div>
</x-admin-layout>
