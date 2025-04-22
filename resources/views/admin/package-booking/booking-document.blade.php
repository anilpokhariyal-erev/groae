<x-admin-layout>
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
                                <td>{{ucfirst($docx_val->status)}} 
                                @if($docx_val->status == "rejected")
                                    <i class="fa fa-info-circle" style="color:black;" title="{{$docx_val->additional_comment}}"></i>
                                @endif
                                </td>
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
                                            <form action="#" style="display: inline;">
                                                @csrf
                                                <input type="hidden" name="document_id" value="{{ $docx_val->id }}">
                                                <button type="button" id="reject_doc" class="btn blue-link {{ $has_role_or_permission('reject-document', 'disabled_button') }}">Reject</button>
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

    <!-- Reject Document modal -->
    <div class="modal fade" id="rejectModal" tabindex="-1" aria-labelledby="rejectModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ route('document.reject-document') }}" method="POST">
            @csrf
            <input type="hidden" name="document_id" id="reject_document_id">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rejectModalLabel">Reject Document</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="additional_comment" class="form-label">Reject Reason</label>
                    <textarea name="additional_comment" id="additional_comment" rows="4" class="form-control" placeholder="Enter reason for rejection" required></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="cancel_reject" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Reject</button>
                </div>
            </div>
        </form>
    </div>
    </div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $(document).on('click', '#reject_doc', function() {
            var document_id = $(this).closest('form').find('input[name="document_id"]').val();
            $('#reject_document_id').val(document_id);
            $('#rejectModal').show();
        });
        $(document).on('click', '#cancel_reject', function() {
            $('#rejectModal').hide();
        });
        $(document).on('click', '.btn-close', function() {
            $('#rejectModal').hide();
        });
    });
</script>
</x-admin-layout>