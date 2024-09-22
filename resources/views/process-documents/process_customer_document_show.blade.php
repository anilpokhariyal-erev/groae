<x-admin-layout>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="row">

                <div class="col-md-6">
                    <div class="position-relative form-group">
                        <label for="document_type">Document Type</label>
                        <input value="{{$processDocument->document_type}}" readonly type="text" class="form-control">
                    </div>

                    <div class="position-relative form-group">
                        <label for="document_name">Document Name</label>
                        <input value="{{$processDocument->document_name}}" readonly type="text" class="form-control">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="position-relative form-group">
                        <label for="document_format">Document Format</label>

                        @php $document_format_type = implode(', ', json_decode($processDocument->document_format_type)); @endphp
                        <input value="{{$document_format_type}}" readonly type="text" class="form-control">
                    </div>
                </div>

                @if($processDocument->document_format)
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label>Document</label>
                            <div>
                                <img width="150" src='{{ Storage::url($processDocument->document_format) }}'>
                            </div>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>

</x-admin-layout>
