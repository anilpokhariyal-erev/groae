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
        .info-icon {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 18px;         /* Adjust size */
            height: 18px;        /* Make it a perfect circle */
            background-color: black;
            color: white;
            font-weight: bold;
            border-radius: 50%;  /* Makes it a circle */
            font-size: 16px;     /* Adjust font size */
            cursor: pointer;     /* Optional: pointer cursor */
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
                                {{ $freezone->licenses[0]->price > 0 ? $package_detail->currency.' '. number_format($freezone->licenses[0]->price, 2) : '' }}
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
                                <td class="tDetailTxt">
                                {{ $item->addon_cost>0 ? $package_detail->currency . ' ' . $item->addon_cost : '-' }}
                                </td>
                            </tr>
                        @endforeach

                        <tr>
                            <td class="tHeadingTxt">Activities</td>
                            <td class="tDetailTxt">
                                {{ $package_activities[0]->activity->name . ' (' . $package_activities[0]->activity->activity_group->name . ')' }}
                            </td>
                            <td class="tDetailTxt">
                                {!! $package_activities[0]->allowed_free ? '<del>' : '' !!}
                                {{$package_detail->currency}}  {{$package_activities[0]->price }}
                                {!! $package_activities[0]->allowed_free ? '</del><p>Free</p>' : '' !!}
                            </td>
                        </tr>


                    @foreach ($package_activities as $key => $item)
                            @if ($key != 0)
                                <tr>
                                    <td></td>
                                    <td class="tDetailTxt">{{ $item->activity->name . ' (' . $item->activity->activity_group->name . ')' }}</td>
                                    <td class="tDetailTxt"> {!! $item->allowed_free ? '<del>' : '' !!} {{$package_detail->currency }} {{$item->price }}  {!! $item->allowed_free ? '</del><p>Free</p>' : '' !!}</td>
                                </tr>
                            @endif
                        @endforeach
                        <tr>
                            <td class="tHeadingTxt">Visa Details</td>
                            <td class="tDetailTxt">Total {{count($packages_arr['visa_package_attributes'])}} in Quantity</td>
                            <td class="tDetailTxt"></td>
                        </tr>

                        @foreach ($packages_arr['visa_package_attributes'] as $items)
                            @php($total_attr_cost = 0)
                            @php($attribute_cost_calculation = "")
                            <tr>
                                <td class="tHeadingTxt lightTxt">
                                </td>
                                <td class="tDetailTxt">
                                    @foreach ($items as $key =>$item)
                                        <span title="{{ $item->attribute_header->title }}">{{ $item->value }},</span>
                                        @php($total_attr_cost += $item->price)
                                        @php(  $attribute_cost_calculation .= $item->attribute_header->title . '-'. $item->value . ": $package_detail->currency ". $item->price . "\n" )
                                    @endforeach
                                </td>
                                <td class="tDetailTxt">
                                    {{$package_detail->currency }} {{ number_format($total_attr_cost,2)}} <span  class="info-icon" title="{{$attribute_cost_calculation}}">i</span></td>
                            </tr>
                        @endforeach

                        <tr>
                            <td class="totalTitleTxt">Actual Cost</td>
                            <td></td>
                            <td class="amntTxt">{{$package_detail->currency }} {{ number_format($package_detail->price, 2) }}</td>
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
                        Request Invoice
                    </a>
                </div>
            </div>
        </div>
    </section>

    <a href="{{ url('contact-us') }}" class="contactUsBtn">
        <i class="bi bi-telephone"></i> Contact Us
    </a>

</x-website-layout>
