<x-website-layout>
    <section>
        <div class="container">
            <div class="myProfileContainer">
                <div class="backBtn">
                    <a class="backAnchor" href="{{ url()->previous() }}"><img
                            src="{{ asset('images/cheveron-right.png') }}" alt="">
                    <h2 class="backTxt">Back</h2>
                    </a>
                </div>
                <div class="topHeading p-t-20">
                    <h2 class="trendTxt">My Account</h2>
                </div>

                <div class="profileWrapper">
                    @include('frontend.components.profile_sidebar')
                    <div class="profileDetailWrapper">

                        <div class="downloadBoxContainer">
                            @if (count($downloads) == 0)
                                <span class="noRecordFound">
                                    <h3 class="transactionIdTxt">
                                        Nothing to show here
                                    </h3>
                                </span>
                            @endif
                            @foreach ($downloads as $item)
                                <div class="myDownloadWrapper">
                                    <div class="downloadBlock-1">
                                        <div class="downloadsubBlock-1">
                                            <img src="{{ secure_asset('images/' . strtolower(pathinfo($item->value, PATHINFO_EXTENSION)) . '-download.png') }}"
                                                alt="">
                                        </div>
                                        <div class="downloadsubBlock-2">
                                            <h3>{{ $item->name . '.' . strtolower(pathinfo($item->value, PATHINFO_EXTENSION)) }}</h3>
                                            <p>{{ number_format($item->size / 1048576, 2) == 0 ? number_format($item->size / 1024, 2) . ' KB' : number_format($item->size / 1048576, 2) . ' MB' }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="uploadBlock-2">
                                        <a class="uploadImg" href="{{ route('protected-file.download', ['path' => $item->value]) }}">
                                            <img src="{{ secure_asset('images/downloads-whiteicon.png') }}" alt="">
                                            Downlaod Document
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        @if ($downloads->hasPages())
                            <div class="commonViewMoreBtn">
                                <ul class="pager">
                                    <li>
                                        <a class="{{ $downloads->currentPage() > 1 ? 'neTxt' : 'preTxt' }}"
                                           href="{{ $downloads->previousPageUrl() }}">Previous</a>
                                    </li>
                                    <li>
                                        <a class="{{ $downloads->hasMorePages() ? 'neTxt' : 'preTxt' }}"
                                           href="{{ $downloads->nextPageUrl() }}">Next</a>
                                    </li>
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-website-layout>
