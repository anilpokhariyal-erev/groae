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
                        <h2 class="backTxt">Back</h2>
                    </a>
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
                                @if($package_detail->discounted_price)
                                <del>{{ $package_detail->price > 0 ? $package_detail->currency . ' ' . number_format($package_detail->price, 2) : '' }}</del><br>
                                {{ $package_detail->discounted_price > 0 ? $package_detail->currency . ' ' . number_format($package_detail->discounted_price, 2) : '' }}
                                @else
                                {{ $package_detail->price > 0 ? $package_detail->currency . ' ' . number_format($package_detail->price, 2) : '' }}
                                @endif
                            </td>
                        </tr>
                        @php $temp= 0; $total_price = $package_detail->discounted_price>0 ? $package_detail->discounted_price : $package_detail->price; $total_attribute_cost = 0; @endphp
                        @foreach ($filtered_package_lines_multiple as $attribute_cost)
                            @php
                                $total_visa_package = $request->input($attribute_cost->attribute->name) ?? $attribute_cost->allowed_free_qty;
                            @endphp
                            <tr>
                                <td class="tHeadingTxt">{{ $attribute_cost->attribute->label }}</td>
                                <td class="tDetailTxt">{{ $package_lines[$attribute_cost->attribute->name] }}</td>
                                <td class="tDetailTxt">
                                    @if ($package_lines[$attribute_cost->attribute->name] <= $attribute_cost->allowed_free_qty)
                                        <del title="{{ $attribute_cost->attribute->label }} free up to {{ $attribute_cost->allowed_free_qty }}">
                                            {{ $attribute_cost->unit_price > 0 ? $package_detail->currency . ' ' . number_format($attribute_cost->unit_price, 2) : '' }}
                                        </del>
                                        <div>Free</div>
                                        <span class="info-icon" title="{{ $total_attribute_cost }}">i</span>
                                    @else
                                        <div>
                                            @php
                                                $total_attribute_cost = $attribute_cost->calculateAttributeCost($package_lines[$attribute_cost->attribute->name]);
                                            @endphp
                                            {{ $total_attribute_cost }}
                                            @php
                                                $numeric_total_attribute_cost = floatval(preg_replace('/[^0-9.]/', '', $total_attribute_cost));
                                                $total_price += $numeric_total_attribute_cost;

                                                // Creating info_attribute_cost with line breaks
                                                $info_attribute_cost = $attribute_cost->allowed_free_qty . ' ' . $attribute_cost->attribute->label . ' = Free';
                                                $info_attribute_cost .= "\n";
                                                $info_attribute_cost .=  $package_lines[$attribute_cost->attribute->name] - $attribute_cost->allowed_free_qty . ' ' . $attribute_cost->attribute->label . ' = ' . $total_attribute_cost .' ('.$package_lines[$attribute_cost->attribute->name] - $attribute_cost->allowed_free_qty.'x'. $attribute_cost->unit_price .')';
                                            @endphp
                                            <span class="info-icon" title="{!! e($info_attribute_cost) !!}">i</span>
                                        </div>
                                    @endif

                                </td>
                            </tr>
                        @endforeach

                        <tr>
                            <td class="tHeadingTxt">Package Inclusions</td>
                            <td class="tDetailTxt">Total {{ count($filtered_package_lines) }} in Quantity</td>
                            <td></td>
                        </tr>
                        @foreach ($filtered_package_lines as $item)

                            <tr>
                                <td class="tHeadingTxt">{{ $item->attribute->label }}</td>
                                <td class="tDetailTxt">{{ $item->attributeOption->value }} 
                                    @if($item->attributeOption->description)
                                     <span class="info-icon" title="{{ $item->attributeOption->description }}">i</span>
                                    @endif
                                </td>
                                <td class="tDetailTxt">
                                    {{ $item->addon_cost > 0 ? $package_detail->currency . ' ' . $item->addon_cost : '-' }}
                                    @php $total_price += $item->addon_cost; @endphp
                                </td>
                            </tr>
                        @endforeach

                        <tr>
                            <td class="tHeadingTxt">Licenses</td>
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
                        @if(count($licenses)>1)
                        <tr>
                                <td></td>
                                <td class="tDetailTxt">Cross Platform Fee</td>
                                <td class="tDetailTxt">
                                    {{ $package_detail->currency }} {{ $package_detail->freezone->cross_platform_fee }}
                                    @php $total_price += $package_detail->freezone->cross_platform_fee; @endphp
                                </td>
                            </tr>
                        @endif

                        <tr>
                            <td class="tHeadingTxt">Activities</td>
                            <td class="tDetailTxt">Total {{ count($package_activities) }} in Quantity <span class="info-icon" title="Free Activities with Package: {{$package_detail->allowed_free_packages}}, Fixed Free Activities: {{$freeMarkedActivityCount}}, Free Any: {{$package_detail->allowed_free_packages-$freeMarkedActivityCount}}">i</span></td>
                            <td></td>
                        </tr>
                        @php
                            $marked_free = 0;
                        @endphp
                        @foreach ($package_activities as $item)
                            <tr>
                                <td></td>
                                <td class="tDetailTxt">{{ $item->activity->name }} ({{ $item->activity->activity_group->name }})</td>
                                <td class="tDetailTxt">
                                    @if($item->allowed_free || $marked_free < ($package_detail->allowed_free_packages - $freeMarkedActivityCount))
                                        @php
                                            if($item->allowed_free==0){
                                                $marked_free += 1;
                                            }
                                        @endphp
                                        <del>{{ $package_detail->currency }} {!! $item->price !!}</del> <p>Free</p>
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
                                        <span title="{{ $item->attribute_header->title }}">{{ $item->value }} ({{$item->attribute_header->title}})@if (!$loop->last),@endif</span>
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
                            <td class="totalTitleTxt">Net Cost</td>
                            <td></td>
                            <?php $temp = $total_price ?>
                            <td class="amntTxt">{{ $package_detail->currency }} {{ number_format($total_price, 2) }}</td>
                        </tr>
                        
                        @foreach($fixedFee as $fee)
                        <tr>
                            <td class="totalTitleTxt">
                                {{$fee->label}} 
                                @if($fee->type!='flat')({{$fee->value}}%)@endif
                            </td>
                            <td></td>
                            <td class="amntTxt">
                            @php
                                $fixedCost = 0;
                                if($fee->type=='flat'){
                                    $fixedCost = $fee->value;
                                }else{
                                    $fixedCost = $total_price*($fee->value/100);
                                }

                                $total_price += $fixedCost;
                            @endphp
                            {{ $package_detail->currency }} {{number_format($fixedCost, 2)}}
                            </td>
                        </tr>
                        @endforeach

                        <tr>
                            <td class="totalTitleTxt">Total Cost *</td>
                            <td></td>
                            <td class="amntTxt">{{ $package_detail->currency }} {{ number_format($total_price, 2) }}</td>
                        </tr>
                    </table>
                </div>

                <div class="noteContainer">
                    <h3>Notes:</h3>
                    <p>{{ $package_detail->description }}</p><br>
                    <p>* For comparison, we consider <span>license, package</span> and <span>visa type</span> costs only. Prices may vary based on selected activities at the final stage.</p>
                </div>

                <div class="bannerBtns">
                    <a class="bookConsBtn" id="requestInvoice" href="#">Request Quote</a>
                </div>
            </div>
        </div>
    </section>

    <a href="{{ url('contact-us') }}" class="contactUsBtn">
        <i class="bi bi-telephone"></i> Contact Us
    </a>

    <script type="text/javascript">
        $(document).ready(function () {
            const summaryData = {
                freezone: {
                    name: "{{ $freezone->name }}"
                },
                customer: {
                    id: "{{ $customer->id }}"
                },
                package: {
                    id: "{{ $package_detail->id }}",
                    title: "{{ $package_detail->title }}",
                    price: "{{ $package_detail->discounted_price > 0 ? $package_detail->discounted_price : $package_detail->price }}",
                    currency: "{{ $package_detail->currency }}"
                },
                attributes: [
                        @foreach ($filtered_package_lines_multiple as $attribute_cost)
                    {
                        label: "{{ $attribute_cost->attribute->label }}",
                        selectedQty: "{{ $package_lines[$attribute_cost->attribute->name] }}",
                        freeQty: "{{ $attribute_cost->allowed_free_qty }}",
                        unitPrice: "{{ $attribute_cost->unit_price }}",
                        totalCost: "{{ $attribute_cost->calculateAttributeCost($package_lines[$attribute_cost->attribute->name]) }}"
                    },
                    @endforeach
                ],
                inclusions: [
                        @foreach ($filtered_package_lines as $item)
                    {
                        label: "{{ $item->attribute->label }}",
                        option: "{{ $item->attributeOption->value }}",
                        addonCost: "{{ $item->addon_cost }}"
                    },
                    @endforeach
                ],
                licenses: [
                        @foreach ($licenses as $item)
                    {
                        name: "{{ $item->name }}",
                        price: "{{ $item->price }}"
                    },
                    @endforeach
                ],
                activities: [
                        @foreach ($package_activities as $item)
                    {
                        name: "{{ $item->activity->name }}",
                        group: "{{ $item->activity->activity_group->name }}",
                        allowedFree: "{{ $item->allowed_free }}",
                        price: "{{ $item->price }}"
                    },
                    @endforeach
                ],
                visaDetails: [
                        @foreach ($packages_arr['visa_package_attributes'] as $items)
                    {
                        items: [
                                @foreach ($items as $item)
                            {
                                attribute: "{{ $item->attribute_header->title }}",
                                value: "{{ $item->value }}",
                                price: "{{ $item->price }}"
                            },
                            @endforeach
                        ]
                    },
                    @endforeach
                ],
                fixedFee: [
                        @foreach ($fixedFee as $fee)
                    {
                        @php
                            $text = '';
                             // Calculate the fixed cost before embedding it in JavaScript
                             if ($fee->type == 'flat') {
                                 $fixedCost = $fee->value;
                             } else {
                                    $text = '%';
                                 $fixedCost = $temp * ($fee->value / 100);
                             }
                        @endphp
                        name: name="{{ $fee->label }} ({{ $fee->value . $text }})",
                        type: "{{ $fee->type }}",
                        price: "{{ number_format($fixedCost, 2) }}" // Ensure it's a formatted string
                    },
                    @endforeach
                ],
                totalCost: "{{ $total_price }}"
            };


            $(document).ready(function() {
                var requestInProgress = false;  // Flag to prevent multiple requests

                $('#requestInvoice').on('click', function (e) {
                    e.preventDefault();

                    // Check if a request is already in progress
                    if (requestInProgress) {
                        return;  // Prevent further clicks if a request is in progress
                    }

                    // Set the flag to true to indicate a request is in progress
                    requestInProgress = true;

                    // Disable the button to prevent further clicks
                    var $button = $(this);
                    $button.attr('disabled', true);
                    $button.text('Processing...');  // Optionally, change button text to indicate processing

                    $.ajax({
                        url: `/api/package/raise-invoice`,  // Update with the appropriate endpoint
                        type: 'POST',
                        data: JSON.stringify(summaryData),
                        contentType: 'application/json',
                        headers: {
                            'Authorization': 'Bearer {{$token}}', // Use your Sanctum token
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        success: function (response) {
                            // Handle success response
                            location.href = "/package-raised-success";
                        },
                        error: function (error) {
                            if (error.responseJSON && error.responseJSON.message) {
                                alert(error.responseJSON.message +':' + error.responseJSON.error);
                            } else if (error.responseText) {
                                alert('Error: ' + error.responseText);
                            } else {
                                alert('There was an unexpected error.');
                            }
                            // Re-enable the button and restore its text
                            $button.attr('disabled', false);
                            $button.text('Request Quote');
                        },
                        complete: function () {
                            // Reset the request flag after the request is complete
                            requestInProgress = false;
                        }
                    });
                });
            });


        });

    </script>
</x-website-layout>
