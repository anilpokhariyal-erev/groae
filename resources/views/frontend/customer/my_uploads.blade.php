<x-website-layout>
    @section('js-imports')
        <script src="{{ secure_asset('js/website/my_upload.js') }}" crossorigin="anonymous"></script>
    @endsection
    <section>
        <div class="container">
            <div class="myProfileContainer">
                <div class="backBtn">
                    <a class="backAnchor" href="{{ url()->previous() }}"><img
                            src="{{ secure_asset('images/cheveron-right.png') }}" alt="">
                    <h2 class="backTxt">Back</h2>
                    </a>
                </div>
                <div class="topHeading">
                    <h2 class="trendTxt">My Account</h2>
                </div>

                <div class="profileWrapper">
                    @include('frontend.components.profile_sidebar')
                    <div class="profileDetailWrapper">
                        <form method="POST" action="{{ route('customer.upload.update') }}" id="uploadForm"
                            enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            @if ($customer->customer_documents()->where('request_type', 'document')->count() == 0)
                                <span class="noRecordFound">
                                    <h3 class="transactionIdTxt">
                                        Nothing to show here
                                    </h3>
                                </span>
                            @endif
                            @foreach ($customer->customer_documents as $item)
                                @if ($item->request_type == 'document')
                                    <input type="file"
                                        name="uploads[docuploadBtn_{{ $item->id }}_{{ Crypt::encryptString(implode(',', $item->format)) }}]"
                                        id="docuploadBtn_{{ $item->id }}"
                                        accept=".{{ implode(', .', $item->format) }}" style="display: none;">
                                    <div class="drivingLicenseUpload">
                                        <div class="uploadBlock-1">
                                            <div class="verifyBlock">
                                                <h2>{{ $item->name }}</h2>
                                                @if ($item->status == 'approved')
                                                    <img class="verifyImg" src="{{ asset('images/verify-image.png') }}"
                                                        alt="">
                                                @endif
                                            </div>
                                            <h3>{{ $item->type }}</h3>
                                            <h4>Supported format: .{{ implode(', .', $item->format) }}</h4>
                                        </div>
                                        <div class="uploadBlock-2">
                                            @switch($item->status)
                                                @case('requested')
                                                    <a id="uploadBtn_{{ $item->id }}"><img
                                                            src="{{ asset('images/upload-whiteicon.png') }}"
                                                            alt="">Upload
                                                        Document</a>
                                                @break

                                                @case('submitted')
                                                    <a class="downloadBtns"
                                                        href="{{ route('protected-file.download', ['path' => $item->value]) }}"><img
                                                            src="{{ asset('images/downloads-whiteicon.png') }}"
                                                            alt=""></a>
                                                    <a href="{{ route('customer.upload.delete', ['id' => $item->id]) }}"
                                                        class="deltImg"><img src="{{ secure_asset('images/delete-icon.png') }}"
                                                            alt=""></a>
                                                @break

                                                @case('approved')
                                                    <div class="downloadBtns">
                                                        <a
                                                            href="{{ route('protected-file.download', ['path' => $item->value]) }}"><img
                                                                src="{{ asset('images/downloads-whiteicon.png') }}"
                                                                alt="">Download Document</a>
                                                    </div>
                                                @break

                                                @case('rejected')
                                                    <a id="uploadBtn_{{ $item->id }}" class="upload"><img
                                                            src="{{ asset('images/upload-whiteicon.png') }}"
                                                            alt="">Upload
                                                        Document</a>
                                                @break
                                            @endswitch
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-website-layout>
