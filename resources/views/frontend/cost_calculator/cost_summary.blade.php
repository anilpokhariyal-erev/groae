<x-website-layout>
    <style>
        .contactUsBtn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #007bff; /* Change as needed */
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            display: flex;
            align-items: center;
            cursor: pointer;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }

        .contactUsBtn i {
            margin-right: 5px;
        }

        .info-icon {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 18px;
            height: 18px;
            background-color: black;
            color: white;
            font-weight: bold;
            border-radius: 50%;
            font-size: 16px;
            cursor: pointer;
        }
    </style>

    <section class="center-section">
        <div class="costCalculateContainer">
            <div class="container">
                <div class="backBtn">
                    <a class="backAnchor" href="{{ url()->previous() }}">
                        <img src="{{ secure_asset('images/cheveron-right.png') }}" alt="Back">
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
                            <td class="tHeadingTxt">Package</td>
                            <td class="tDetailTxt">{{ $package_detail->title }}</td>
                            <td class="tDetailTxt">
                                {{ $package_detail->price > 0 ? $package_detail->currency . ' ' . number_format($package_detail->price, 2) : '' }}
                            </td>
                        </tr>
                        @php $total_price = $package_detail->price; @endphp

                        @foreach ($package_detail->attributeCosts as $attribute_cost)
                            @php
                                $total_visa_package = $request->input($attribute_cost->attribute->name) ?? $attribute_cost->allowed_free_qty;
                            @endphp
                            <tr>
                                <td class="tHeadingTxt">{{ $attribute_cost->attribute->label }}</td>
                                <td class="tDetailTxt">{{ $total_visa_package }}</td>
                                <td class="tDetailTxt">
                                    @if ($total_visa_package <= $attribute_cost->allowed_free_qty)
                                        <del title="{{ $attribute_cost->attribute->label }} free up to {{ $attribute_cost->allowed_free_qty }}">
                                            {{ $attribute_cost->unit_price > 0 ? $package_detail->currency . ' ' . number_format($attribute_cost->unit_price, 2) : '' }}
                                        </del>
                                        <div>Free</div>
                                    @else
                                        <div>
                                            @php $total_attribute_cost = $attribute_cost->calculateAttributeCost($total_visa_package) @endphp
                                            {{ $total_attribute_cost }}
                                            @php $total_price += str_replace($package_detail->currency.' ', '', $total_attribute_cost); @endphp
                                        </div>
                                    @endif
                                </td>
                            </tr>
                        @endforeach

                        <tr>
                            <td class="tHeadingTxt">Package Inclusions</td>
                            <td class="tDetailTxt">Total {{ count($package_detail->packageLines) }} in Quantity</td>
                            <td></td>
                        </tr>

                        @foreach ($package_detail->packageLines as $item)
                            <tr>
                                <td>{{ $item->attribute->label }}</td>
                                <td>{{ $item->attributeOption->value }}</td>
                                <td class="tDetailTxt">
                                    {{ $item->addon_cost > 0 ? $package_detail->currency . ' ' . $item->addon_cost : '-' }}
                                    @php $total_price += $item->addon_cost; @endphp
                                </td>
                            </tr>
                        @endforeach

                        <tr>
                            <td class="tHeadingTxt">Licences</td>
                            <td class="tDetailTxt">Total {{ count($licenses) }} in Quantity</td>
                            <td></td>
                        </tr>

                        @foreach ($licenses as $item)
                            <tr>
                                <td></td>
                                <td class="tDetailTxt">{{ $item->name }}</td>
                                <td class="tDetailTxt">
                                    {{ $package_detail->currency }} {{ $item->price }}
                                    @php $total_price += $item->price; @endphp
                                </td>
                            </tr>
                        @endforeach

                        <tr>
                            <td class="tHeadingTxt">Activities</td>
                            <td class="tDetailTxt">Total {{ count($package_activities) }} in Quantity</td>
                            <td></td>
                        </tr>

                        @foreach ($package_activities as $item)
                            <tr>
                                <td></td>
                                <td class="tDetailTxt">{{ $item->activity->name }} ({{ $item->activity->activity_group->name }})</td>
                                <td class="tDetailTxt">
                                    @if($item->allowed_free)
                                        <del>{!! $item->allowed_free !!}</del> <p>Free</p>
                                    @else
                                        {{ $package_detail->currency }} {{ $item->price }}
                                        @php $total_price += $item->price; @endphp
                                    @endif
                                </td>
                            </tr>
                        @endforeach

                        <tr>
                            <td class="tHeadingTxt">Visa Details</td>
                            <td class="tDetailTxt">Total {{ count($packages_arr['visa_package_attributes']) }} in Quantity</td>
                            <td></td>
                        </tr>

                        @foreach ($packages_arr['visa_package_attributes'] as $items)
                            @php
                                $total_attr_cost = 0;
                                $attribute_cost_calculation = "";
                            @endphp
                            <tr>
                                <td class="tHeadingTxt lightTxt"></td>
                                <td class="tDetailTxt">
                                    @foreach ($items as $item)
                                        <span title="{{ $item->attribute_header->title }}">{{ $item->value }},</span>
                                        @php
                                            $total_attr_cost += $item->price;
                                            $attribute_cost_calculation .= $item->attribute_header->title . ' - ' . $item->value . ": {$package_detail->currency} " . $item->price . "\n";
                                        @endphp
                                    @endforeach
                                </td>
                                <td class="tDetailTxt">
                                    {{ $package_detail->currency }} {{ number_format($total_attr_cost, 2) }}
                                    @php $total_price += $total_attr_cost; @endphp
                                    <span class="info-icon" title="{{ $attribute_cost_calculation }}">i</span>
                                </td>
                            </tr>
                        @endforeach

                        

                        <tr>
                            <td class="totalTitleTxt">Actual Cost</td>
                            <td></td>
                            <td class="amntTxt">{{ $package_detail->currency }} {{ number_format($total_price, 2) }}</td>
                        </tr>
                    </table>
                </div>

                <div class="noteContainer">
                    <h3>Note:</h3>
                    <p>For comparison, we consider <span>license, package</span> and <span>visa type</span> costs only. Prices may vary based on selected activities at the final stage.</p>
                </div>

                <div class="bannerBtns">
                    <a class="compBtn" href="{{ route('calculate-licensecost.compare.ai', ['id' => $id]) }}" target="_blank">AI Comparison</a>
                    <a class="compBtn" href="{{ route('explore-freezone', ['id' => $id]) }}" target="_blank">Manual Compare</a>
                    <a class="bookConsBtn" href="{{ route('calculate-licensecosts.settle_payment', ['id' => $id]) }}" target="_blank">Request Invoice</a>
                </div>
            </div>
        </div>
    </section>

    <a href="{{ url('contact-us') }}" class="contactUsBtn">
        <i class="bi bi-telephone"></i> Contact Us
    </a>
</x-website-layout>
