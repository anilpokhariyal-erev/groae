<x-website-layout>
    @section('js-imports')
        <script src="{{ secure_asset('js/website/my_upload.js') }}" crossorigin="anonymous"></script>
    @endsection

    <style>
        /* Style for the main alert card */
        .card-body {
            padding: 10px;
        }
        .custom-red-alert {
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            color: #721c24;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 15px;
            font-size: 16px;
        }
        .custom-red-alert ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        .custom-red-alert li {
            margin-bottom: 10px;
        }
        .custom-red-alert .close-alert {
            font-size: 18px;
            cursor: pointer;
            background: none;
            border: none;
            color: #721c24;
            padding: 0;
            margin-left: 10px;
        }
        .custom-red-alert .close-alert:hover {
            color: #f5c6cb;
        }

        .pending-toggle {
            margin-left: 0; /* Default margin for mobile view */
        }

        @media (min-width: 768px) { /* Adjust the breakpoint as needed */
            .pending-toggle {
                margin-left: 80%;
            }
        }
    </style>

    <section>
        <div class="container">
            <div class="myProfileContainer">
                <div class="backBtn">
                    <a class="backAnchor" href="{{ url()->previous() }}">
                        <img src="{{ secure_asset('images/cheveron-right.png') }}" alt="">
                        <h2 class="backTxt">Back</h2>
                    </a>
                </div>
                <div class="topHeading">
                    <h2 class="trendTxt">My Account</h2>
                </div>

                <div class="profileWrapper">
                    @include('frontend.components.profile_sidebar')

                    <div class="profileDetailWrapper">
                        <form method="POST" action="{{ route('customer.upload.update') }}" id="uploadForm" enctype="multipart/form-data">
                            @csrf
                            @method('patch')

                            <!-- Error Display -->
                            @if ($errors->any())
                                <div class="main-card">
                                    <div class="card-body">
                                        <div class="custom-red-alert" role="alert">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <!-- No Records Found -->
                            @if ($customer_documents->count() == 0)
                                <span class="noRecordFound">
                                    <h3 class="transactionIdTxt">Nothing to show here</h3>
                                </span>
                            @else
                            <span class="pending-toggle form-group">
                                <div class="switch">
                                    <input type="checkbox" id="showPendingSwitch" name="show_pending" {{ $show_pending ? 'checked' : '' }}>
                                    <label class="slider" for="showPendingSwitch"></label>
                                </div>
                            </span>
                            @endif
                            <!-- Loop through the paginated documents -->
                            @foreach ($customer_documents as $item)
                                <input type="file" name="uploads[docuploadBtn_{{ $item->id }}_{{ Crypt::encryptString(implode(',', $item->format)) }}]"
                                       id="docuploadBtn_{{ $item->id }}" accept=".{{ implode(', .', $item->format) }}" style="display: none;">
                                <div class="drivingLicenseUpload">
                                    <div class="uploadBlock-1">
                                        <div class="verifyBlock">
                                            <h2>{{ $item->name }}</h2>
                                            @if ($item->status == 'approved')
                                                <img class="verifyImg" src="{{ asset('images/verify-image.png') }}" alt="">
                                            @endif
                                            @if($item->status == 'rejected' && $item->additional_comment!="")
                                                <span class="rejectedComment text-red">({{ $item->additional_comment }})</span> 
                                            @endif
                                        </div>
                                        <h3>{{ $item->type }}</h3>
                                        <h4>Supported format: .{{ implode(', .', $item->format) }}</h4>
                                    </div>
                                    <div class="uploadBlock-2">
                                        @switch($item->status)
                                            @case('requested')
                                                <a id="uploadBtn_{{ $item->id }}"><img src="{{ asset('images/upload-whiteicon.png') }}" alt="">Upload Document</a>
                                                @break
                                            @case('submitted')
                                                <a class="downloadBtns" href="{{ route('protected-file.download', ['path' => $item->value]) }}"><img src="{{ asset('images/downloads-whiteicon.png') }}" alt=""></a>
                                                <a href="{{ route('customer.upload.delete', ['id' => $item->id]) }}" class="deltImg"><img src="{{ secure_asset('images/delete-icon.png') }}" alt=""></a>
                                                @break
                                            @case('approved')
                                                <div class="downloadBtns">
                                                    <a href="{{ route('protected-file.download', ['path' => $item->value]) }}">
                                                        <img src="{{ asset('images/downloads-whiteicon.png') }}" alt="">Download Document
                                                    </a>
                                                </div>
                                                @break
                                            @case('rejected')
                                                <a id="uploadBtn_{{ $item->id }}" class="upload"><img src="{{ asset('images/upload-whiteicon.png') }}" alt="">Upload Document</a>
                                                @break
                                        @endswitch
                                    </div>
                                </div>
                            @endforeach

                            <!-- Pagination links -->
                            @if ($customer_documents->hasPages())
                                <div class="commonViewMoreBtn">
                                    <ul class="pager">
                                        <li>
                                            <a class="{{ $customer_documents->currentPage() > 1 ? 'neTxt' : 'preTxt' }}"
                                               href="{{ $customer_documents->previousPageUrl() }}">Previous</a>
                                        </li>
                                        <li>
                                            <a class="{{ $customer_documents->hasMorePages() ? 'neTxt' : 'preTxt' }}"
                                               href="{{ $customer_documents->nextPageUrl() }}">Next</a>
                                        </li>
                                    </ul>
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const checkbox = document.querySelector('input[name="show_pending"]');

            checkbox.addEventListener("change", function () {
                const url = new URL(window.location.href);
                // Update the 'show_pending' parameter based on checkbox state
                url.searchParams.set("show_pending", checkbox.checked ? "1" : "0");
                // Reload the page with the updated URL
                window.location.href = url.toString();
            });
        });
    </script>

</x-website-layout>
