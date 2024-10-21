<x-website-layout>
    <style>
        .contactUsBtn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #007bff; /* Change to your desired color */
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            display: flex;
            align-items: center;
            cursor: pointer;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            z-index: 1000; /* Ensure it is on top of other elements */
        }

        .contactUsBtn i {
            margin-right: 5px; /* Space between icon and text */
        }
    </style>
    <section class="center-section">
        <div class="costCalculateContainer">
            <div class="container">
                <div class="backBtn ">
                    <a class="backAnchor" href="{{ url()->previous() }}">
                        <img src="{{ secure_asset('images/cheveron-right.png') }}" alt="">
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
                            <th class="tDetailTxt">{{ $freezone->name }}</th>
                            <th></th>
                        </tr>

                        <tr>
                            <td class="tHeadingTxt">License Type</td>
                            <td class="tDetailTxt">{{ $freezone->licenses[0]->name }}</td>
                            <td class="tDetailTxt">
                                {{ $freezone->licenses[0]->price > 0 ? 'AED ' . number_format($freezone->licenses[0]->price, 2) : '' }}
                            </td>
                        </tr>
                        <tr>
                            <td class="tHeadingTxt">Office</td>
                            <td class="tDetailTxt">{{ $freezone->packages[0]->office ?? 'N/A' }}</td>
                            <td class="tDetailTxt"></td>
                        </tr>
                        <tr>
                            <td class="tHeadingTxt">Package</td>
                            <td class="tDetailTxt">{{ $package_detail->title }}</td>
                            <td class="tDetailTxt">
                                {{$package_detail->price > 0 ? $package_detail->currency . ' ' . number_format($package_detail->price, 2) : '' }}
                            </td>
                        </tr>
                        <tr>
                            <td class="tHeadingTxt">Package Inclusions</td>
                            <td class="tDetailTxt">Total {{ count($package_detail->packageLines) }} in Quantity</td>
                            <td class="tDetailTxt"></td>
                        </tr>

                        @foreach ($package_detail->packageLines as $key => $item)
                            <tr>
                                <td class="">{{ $item->attribute->label}}</td>
                                <td class="">{{ $item->attributeOption->value }}</td>
                                <td class="tDetailTxt text-center">
                                {{ $item->addon_cost>0 ? $package_detail->currency . ' ' . $item->addon_cost : '-' }}
                                </td>
                            </tr>
                        @endforeach

                        
                        <tr>
                            <td class="tHeadingTxt">Activities</td>
                            <td class="tDetailTxt">{{ $activities[0]->name . ' (' . $activities[0]->activity_group->name . ')' }}</td>
                            <td class="tDetailTxt">AED {{ $activities[0]->price }}</td>
                        </tr>
                        
                        @foreach ($activities as $key => $item)
                            @if ($key != 0)
                                <tr>
                                    <td></td>
                                    <td class="tDetailTxt">{{ $item->name . ' (' . $item->activity_group->name . ')' }}</td>
                                    <td class="tDetailTxt">AED {{$item->price}}</td>
                                </tr>
                            @endif
                        @endforeach
                        <tr>
                            <td class="tHeadingTxt">Visa Details</td>
                            <td class="tDetailTxt">Total {{ count($packages_array) }} in Quantity</td>
                            <td class="tDetailTxt"></td>
                        </tr>

                        @foreach ($packages_array as $key => $item)
                            <tr>
                                <td class="tHeadingTxt lightTxt">Visa Package {{ $key + 1 }}</td>
                                <td class="tDetailTxt">{{ $item['name'] }}</td>
                                <td class="tDetailTxt">{{ number_format($item['price'], 2) > 0 ? 'AED ' . number_format($item['price'], 2) : '' }}</td>
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
                    <a class="compBtn" target="_blank" href="{{ route('calculate-licensecost.compare.ai', ['id' => $id]) }}">
                        AI comparison
                    </a>
                    <a class="compBtn" target="_blank" href="{{ route('explore-freezone', ['id' => $id]) }}">
                        Manual compare
                    </a>
                    <a class="bookConsBtn" target="_blank" href="{{ route('calculate-licensecosts.settle_payment', ['id' => $id]) }}">
                        Proceed with Payment
                    </a>
                </div>
            </div>
        </div>
    </section>

    <a href="{{ url('contact-us') }}" class="contactUsBtn">
        <i class="bi bi-telephone"></i> Contact Us
    </a>

</x-website-layout>
