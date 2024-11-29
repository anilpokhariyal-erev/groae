

<x-admin-layout>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="ba_flex justify-between">
                <div class="ba_flex align_items_center">
                    <h5 class="card-heading">Send {{ucfirst(request()->input('booking_type'))}} Request</h5>
                </div>

                <div class="ba_flex align_items_center"></div>
            </div>
            &nbsp;
            <form method="post" action="{{ route('document.store-document-request') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="booking_id" value="{{$booking_detail->id}}">
                <input type="hidden" name="customer" value="{{$booking_detail->customer_id}}">
                <input type="hidden" name="booking_type" value="{{request()->input('booking_type')}}">
                <div class="row">

                @if(request()->input('booking_type') == 'document')

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="document_name">Document Name <span class="text-danger">*</span></label>
                            <input name="document_name" id="document_name" value="{{old('document_name')}}" type="text" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('document_name')" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="document_type">Document type <span class="text-danger">*</span></label>
                            <input name="document_type" id="document_type" value="{{old('document_type')}}" type="text" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('document_type')" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="document_format">Document Format <span class="text-danger">*</span></label>
                            <select name="document_format[]" class="custom-select ba_select2_document_format" multiple>
                                <option value="pdf">PDF</option>
                                <option value="png">PNG</option>
                                    <option value="jpeg">JPEG</option>
                                <option value="jpg">JPG</option>
                                    <option value="doc">WORD DOC</option>
                            </select>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('document_format')" />
                        </div>
                    </div>

                @else

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="document_name">Detail Name <span class="text-danger">*</span></label>
                            <input name="document_name" id="document_name" value="{{old('document_name')}}" type="text" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('document_name')" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="document_type">Detail type <span class="text-danger">*</span></label>
                            <input name="document_type" id="document_type" value="{{old('document_type')}}" type="text" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('document_type')" />
                        </div>
                    </div>

                @endif

                </div>

                <div class="ba_flex align_items_center justify-content-end">
                    <button class="mt-1 btn btn-primary">Send</button>
                </div>

            </form>

        </div>
    </div>

</x-admin-layout>
