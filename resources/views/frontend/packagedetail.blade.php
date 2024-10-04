<x-website-layout>
    <section class="center-section">
        <div class="costCalculateContainer">
            <div class="container">
                <div class="backBtn ">
                    <a class="backAnchor" href="{{ url()->previous() }}">
                        <img src="{{ asset('images/cheveron-right.png') }}" alt="">
                    </a>
                    <h2 class="backTxt">Back</h2>
                </div>
                <div class="topHeading">
                    <h2 class="trendTxt">Summary</h2>
                </div>
                <div class="summaryTableContainer">
                    <table class="summTable">
                        <tr>
                            <th class="tHeadingTxt">Freezone</th>
                            <th class="tDetailTxt">{{ $package_detail->freezone->name }}</th>
                            <th></th>
                        </tr>
{{--                        <tr>--}}
{{--                            <td class="tHeadingTxt">License Type</td>--}}
{{--                            <td class="tDetailTxt">{{ $freezone->licenses[0]->name }}</td>--}}
{{--                            <td class="tDetailTxt">--}}
{{--                                {{ $freezone->licenses[0]->price > 0 ? 'AED ' . number_format($freezone->licenses[0]->price, 2) : '' }}--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td class="tHeadingTxt">Office</td>--}}
{{--                            <td class="tDetailTxt">{{ $freezone->packages[0]->office ?? 'N/A' }}</td>--}}
{{--                            <td class="tDetailTxt"></td>--}}
{{--                        </tr>--}}
                        <tr>
                            <td class="tHeadingTxt">Package</td>
                            <td class="tDetailTxt">{{ $package_detail->title }}</td>
                            <td class="tDetailTxt">
                                {{$package_detail->price > 0 ? 'AED ' . number_format($package_detail->price, 2) : '' }}
                            </td>
                        </tr>
{{--                        <tr>--}}
{{--                            <td class="tHeadingTxt">Activities</td>--}}
{{--                            <td class="tDetailTxt">{{ $activities[0]->name . ' (' . $activities[0]->activity_group->name . ')' }}</td>--}}
{{--                            <td class="tDetailTxt"></td>--}}
{{--                        </tr>--}}
{{--                        @foreach ($activities as $key => $item)--}}
{{--                            @if ($key != 0)--}}
{{--                                <tr>--}}
{{--                                    <td></td>--}}
{{--                                    <td class="tDetailTxt">{{ $item->name . ' (' . $item->activity_group->name . ')' }}</td>--}}
{{--                                    <td class="tDetailTxt"></td>--}}
{{--                                </tr>--}}
{{--                            @endif--}}
{{--                        @endforeach--}}
                        <tr>
                            <td class="tHeadingTxt">Package Attributes</td>
                            <td class="tDetailTxt">Total {{ count($package_detail->packageLines) }} in Quantity</td>
                            <td class="tDetailTxt"></td>
                        </tr>

                        @foreach ($package_detail->packageLines as $key => $item)
                            <tr>
                                <td class="tHeadingTxt lightTxt">Attribute {{ $key + 1 }}</td>
                                <td class="tDetailTxt">{{ $item->attribute->label}}</td>
                                <td class="tDetailTxt">{{ $item->attributeOption->value }}</td>
                            </tr>
                        @endforeach

                        <tr>
                            <td class="totalTitleTxt">Actual Cost</td>
                            <td></td>
                            <td class="amntTxt">AED {{ number_format($package_detail->price, 2) }}</td>
                        </tr>
                    </table>
                </div>
                <div class="noteContainer">
                    <h3>Note:</h3>
                    <p> For comparison we consider <span>license, package</span> and <span>visa type</span> cost only to compare with other freezones. Price will vary depending on the number of activities you choose at the final stage.</p>
                </div>
                <div class="bannerBtns">
                    <a class="compBtn" target="_blank" href="{{ route('calculate-licensecost.compare.ai', ['id' => $package_detail['id']]) }}">
                        AI comparison
                    </a>
                    <a class="compBtn" target="_blank" href="{{ route('explore-freezone', ['id' => $package_detail['id']]) }}">
                        Manual compare
                    </a>
                    <a class="bookConsBtn" target="_blank" href="{{ route('calculate-licensecosts.settle_payment', ['id' => $package_detail['id']]) }}">
                        Proceed with Payment
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-website-layout>
