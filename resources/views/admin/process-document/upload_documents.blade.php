<x-admin-layout>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="ba_flex justify-between">
                <div class="ba_flex align_items_center">
                    <h5 class="card-heading">Upload Documents</h5>
                </div>

                <div class="ba_flex align_items_center"></div>
            </div>
            &nbsp;
            <form method="post" action="{{ route('document.store-upload-document', $booking_detail->customer_id)}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="customer_id" value="{{$booking_detail->customer_id}}">
                <input type="hidden" name="package_booking_id" value="{{$booking_detail->id}}">
                <div class="row">

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="document_name">Document Name <span class="text-danger">*</span></label>
                            <input name="document_name" id="document_name" value="{{old('document_name')}}" type="text" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('document_name')" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="upload_document">Upload Document<span class="text-danger">*</span></label>
                            <input type="file" name="uploads" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('uploads')" />

                </div>

                <div class="ba_flex align_items_center justify-content-end">
                    <button class="mt-1 btn btn-primary">Save</button>
                </div>

            </form>

        </div>

        <div class="card-body">
            <h5 class="card-heading">Uplaoded Documents</h5>
            <table class="table">
                <thead>
                    <th>Sn.</th>
                    <th>Document Name</th>
                    <th>Package Name</th>
                    <th>Attachment</th>
                    <th>Uploaded Date</th>
                </thead>
                <tbody>
                    @if($customerdownloads)
                        @php $i=1; @endphp
                        @foreach($customerdownloads as $key => $docx_val)
                            <tr class="table-active">
                                <th>{{$i}}</th>
                                <td>{{ucwords($docx_val->name)}}</td>
                                <td>{{$docx_val?->package_booking?->package?->title}}</td>
                                <td>
                                    @if($docx_val->value)
                                        <a target="_blank" href="{{ route('admin-protected-file.download', ['path' => $docx_val->value]) }}">download</a>
                                    @else
                                        -
                                    @endif
                                </td>
                                <td>
                                    {{$docx_val->created_at}}
                                </td>
                            </tr>
                        @php $i++; @endphp
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>

</x-admin-layout>