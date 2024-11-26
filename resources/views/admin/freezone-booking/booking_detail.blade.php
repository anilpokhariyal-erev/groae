

    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-heading">Freezone Booking Request</h5>

                @if($errors->any())
                    @foreach ($errors->all() as $error)
                        <p class="text-red">{{ $error }}</p>
                    @endforeach
                @endif

                <div class="row">
                    <div class="col-md-12">
                        <h4>Request Freezone Summary</h4>

                        <a class="btn btn-primary" href="{{route('document.send-document-request', $booking_detail->id)}}?booking_type=document">Request Document</a> 
                        <a class="btn btn-primary" href="{{route('document.send-document-request', $booking_detail->id)}}?booking_type=detail">Request Detail Document</a>
                        <!-- <a class="btn btn-primary" href="javascript:void(0)">Change Status</a> -->
                        <a class="btn btn-primary" href="{{route('document.view-upload-document', $booking_detail->id)}}">Upload Document</a> 
                    </div>
                </div>

                <!--<div class="ba_flex align_items_center justify-content-end">
                    <button class="mt-2 btn btn-primary">Send</button>
                </div> -->

        </div>
    </div>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-heading">Document Request Detail</h5>
            <table class="table">
                <thead>
                    <th>Sn.</th>
                    <th>Document Name</th>
                    <th>Document Type</th>
                    <th>Request Type</th>
                    <th>Document Status</th>
                    <th>Attachment</th>
                    <th>Update Document Status</th>
                </thead>
                <tbody>
                    @if($documents)
                        @php $i=1; @endphp
                        @foreach($documents as $key => $docx_val)
                            <tr class="table-active">
                                <th>{{$i}}</th>
                                <td>{{ucwords($docx_val->name)}}</td>
                                <td>{{ucwords($docx_val->type)}}</td>
                                <td>{{ucwords($docx_val->request_type)}}</td>
                                <td>{{ucfirst($docx_val->status)}}</td>
                                <td>
                                    @if($docx_val->value)
                                        <a target="_blank" href="{{ route('admin-protected-file.download', ['path' => $docx_val->value]) }}">download</a>
                                    @else
                                        -
                                    @endif
                                </td>
                                <td>
                                    @if($docx_val->value)
                                        @if($docx_val->status == "rejected" || $docx_val->status == "submitted" )
                                            <form action="{{ route('document.approve-document') }}" method="POST" style="display: inline;">
                                                @csrf
                                                <input type="hidden" name="document_id" value="{{ $docx_val->id }}">
                                                <button type="submit" class="btn blue-link {{ $has_role_or_permission('approve-document', 'disabled_button') }}">Approve</button>
                                            </form>
                                        @endif
                                        @if($docx_val->status == "approved" || $docx_val->status == "submitted" )
                                            <form action="{{ route('document.reject-document') }}" method="POST" style="display: inline;">
                                                @csrf
                                                <input type="hidden" name="document_id" value="{{ $docx_val->id }}">
                                                <button type="submit" class="btn blue-link {{ $has_role_or_permission('reject-document', 'disabled_button') }}">Reject</button>
                                            </form>
                                        @endif
                                    @else
                                        Pending
                                    @endif
                                </td>
                            </tr>
                        @php $i++; @endphp
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    @if (session('error'))
        <div class="modal fade show" id="errorModal" style="display: block;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-red">Error</h5>
                    </div>
                    <div class="modal-body">
                        <p class="mb-0 text-red">{{ session('error') }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="close-errorModal" class="btn btn-secondary">Ok</button>
                    </div>
                </div>
            </div>
        </div>
    @endif

