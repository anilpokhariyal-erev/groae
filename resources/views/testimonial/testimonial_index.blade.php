<x-admin-layout>
    <div class="text-right">
        <a href="{{route('testimonial.create')}}" class="mb-2 mr-2 btn btn-primary text-white {{ $has_role_or_permission('create-testimonial', 'disabled_link') }}">Create Testimonial</a>
    </div>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <form method="GET" action="{{url()->current()}}">
                <div class="ba_flex justify-content-end align_items_center">

                    <div class="ba_flex align_items_center mr-1 ml-1">
                        <div class="white-space-nowrap mr-1 ml-1">Customer Name:</div>
                        <input type="text" id="name" value="{{request('name')}}" name="name" class="form-control">
                    </div>

                    <button id="filter-button" class="btn btn-primary mr-1 ml-1">Search</button>
                </div>
            </form>
        </div>
    </div>

    <div class="main-card mb-3 card mt-2">
        <div class="card-body">
            <h5 class="card-title">Testimonials</h5>
            <div class="table-responsive">
                <table class="mb-0 table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Customer Name</th>
                            <th>Testimonial</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1; @endphp
                        @foreach($testimonials as $testimonial)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{ucfirst($testimonial->customer_name)}}</td>
                                <td>{{$testimonial->testimonial}}</td>
                                <td>
                                    <a class="{{ $has_role_or_permission('edit-testimonial', 'disabled_link') }}" href="{{route('testimonial.edit', $testimonial->uuid)}}">Edit</a>
                                    <a class="text-red {{ $has_role_or_permission('delete-testimonial', 'disabled_link') }}" href="#" onclick="confirmDelete('{{route('testimonial.delete', $testimonial->uuid)}}'); return false;">&nbsp; Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-3 pagination">
                {{ $testimonials->links() }}
            </div>

        </div>
    </div>
</x-admin-layout>
