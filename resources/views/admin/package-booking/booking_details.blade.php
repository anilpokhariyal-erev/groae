<x-admin-layout>

<div class="main-card mb-3 card mt-2">
    <div class="card-body">
        <h5 class="card-heading">Package Bookings</h5>
        <div class="table-responsive">
            <table class="summTable">
                @foreach ($packageBookingsDetails as $booking)
                    <tr>
                        <th colspan="3" class="tHeadingTxt">Booking ID: {{ $booking->id }}</th>
                    </tr>
                    <tr>
                        <td class="tHeadingTxt">Customer</td>
                        <td class="tDetailTxt">{{ $booking->customer->name ?? 'N/A' }}</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td class="tHeadingTxt">Original Cost</td>
                        <td class="tDetailTxt">{{ number_format($booking->original_cost, 2) }}</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td class="tHeadingTxt">Discount Amount</td>
                        <td class="tDetailTxt">{{ number_format($booking->discount_amount, 2) }}</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td class="tHeadingTxt">Final Cost</td>
                        <td class="tDetailTxt">{{ number_format($booking->final_cost, 2) }}</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td class="tHeadingTxt">Payment Status</td>
                        <td class="tDetailTxt">{{ $booking->payment_status_label }}</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td class="tHeadingTxt">Booking Status</td>
                        <td class="tDetailTxt">{{ $booking->status_label }}</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td class="tHeadingTxt">Payment Method</td>
                        <td class="tDetailTxt">{{ $booking->payment_method }}</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td class="tHeadingTxt">Transaction ID</td>
                        <td class="tDetailTxt">{{ $booking->transaction_id ?? 'N/A' }}</td>
                        <td></td>
                    </tr>

                    <tr>
                        <th colspan="3" class="tHeadingTxt">Booking Details</th>
                    </tr>

                    @foreach ($booking->bookingDetails as $detail)
                        <tr>
                            <td class="tHeadingTxt">Attribute</td>
                            <td class="tDetailTxt">{{ $detail->attribute_name }}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="tHeadingTxt">Value</td>
                            <td class="tDetailTxt">{{ $detail->attribute_value }}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="tHeadingTxt">Quantity</td>
                            <td class="tDetailTxt">{{ $detail->quantity }}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="tHeadingTxt">Price per Unit</td>
                            <td class="tDetailTxt">{{ number_format($detail->price_per_unit, 2) }}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="tHeadingTxt">Total Cost</td>
                            <td class="tDetailTxt">{{ number_format($detail->total_cost, 2) }}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="tHeadingTxt">Description</td>
                            <td class="tDetailTxt">{{ $detail->description ?? 'N/A' }}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="tHeadingTxt">Status</td>
                            <td class="tDetailTxt">{{ $detail->status_label }}</td>
                            <td></td>
                        </tr>
                        <tr><td colspan="3"><hr></td></tr>
                    @endforeach
                @endforeach
            </table>
        </div>      
    </div>
</div>
</x-admin-layout>
