<x-admin-layout>

    <div class="main-card mb-3 card">
        <div class="card-body">

            <form method="post" action="{{ route('freezones.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="document_type">Document type <span class="text-danger">*</span></label>
                            <input name="document_type" id="document_type" value="{{old('document_type')}}" type="text" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('document_type')" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="document_name">Document Name <span class="text-danger">*</span></label>
                            <input name="document_name" id="document_name" value="{{old('document_name')}}" type="text" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('document_name')" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="customer">Customer <span class="text-danger">*</span></label>
                            <select name="customer" class="custom-select ba_select2_customers">
                                <option value="0">Select Customer</option>
                            </select>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('customer')" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="freezone_logo">Document Format <span class="text-danger">*</span></label>
                            <input name="freezone_logo" id="freezone_logo" type="file" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('freezone_logo')" />
                        </div>
                    </div>

                </div>

                <div class="ba_flex align_items_center justify-content-end">
                    <button class="mt-1 btn btn-primary">Send</button>
                </div>
            </form>

        </div>
    </div>

</x-admin-layout>
