<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link href="{{ asset('css/invoice-style.css') }}?v=0.1" rel="stylesheet" />
    <style>
        /* Add custom CSS styles for your invoice */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        .invoice-header {
            margin-bottom: 20px;
        }

        .invoice-header h1 {
            margin: 0;
        }

        .invoice-header p {
            margin: 5px 0;
        }

        .invoice-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .invoice-table th, .invoice-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .invoice-table th {
            background-color: #f4f4f4;
        }

        .total-cost {
            font-weight: bold;
            text-align: right;
            padding-right: 10px;
        }

        .footer {
            text-align: center;
            font-size: 12px;
            margin-top: 30px;
        }
    </style>
</head>
<body>

<div class="invoice-header">
    <h1>Invoice #{{ $booking->id }}</h1>
    <p>Date: {{ \Carbon\Carbon::now()->format('F j, Y') }}</p>
    <p>Customer: {{ $booking->customer->name }}</p>
    <p>Package: {{ $booking->package->title }}</p> <!-- Package title -->
    <p>Amount: {{ number_format($booking->package->price, 2) }} {{ $booking->package->currency }}</p> <!-- Package price -->
</div>

<table class="invoice-table">
    <thead>
    <tr>
        <th>Description</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Total</th>
    </tr>
    </thead>
    <tbody>
    @php($visaDetails=[])
    @foreach ($booking->bookingDetails as $detail)
        @if(strpos($detail->attribute_name, 'Visa Detail') === 0)
                        <?php
                            $pattern = '/^(Visa Detail)\s(\d+)\s:\s(.+)$/';
                            preg_match($pattern, $detail->attribute_name, $matches);
                            if (count($matches) > 2) {
                                $key = (int)$matches[2];
                                if (!isset($visaDetails[$key])) {
                                    $visaDetails[$key] = []; // Initialize the array if it doesn't exist
                                }
                                $visaDetails[$key][] = [
                                    "attribute_name" => $matches[3]."(".$detail->attribute_value.")",
                                    "qty" => 1,
                                    "price" => $detail->price_per_unit
                                ];
                            }
                        ?>
        @else
            <tr>
                <td>{{ $detail->attribute_name }} ({{ $detail->attribute_value }})</td>
                <td>{{ $detail->quantity }}</td>
                <td>{{ number_format($detail->price_per_unit, 2) }}</td>
                <td>{{ number_format($detail->price_per_unit * $detail->quantity, 2) }}</td>
            </tr>
        @endif
    @endforeach
    @foreach ($visaDetails as $visaDetail)
        <tr>
            <td>
                @php($visaCost = 0)
                @php($visaQty=1)
                @foreach($visaDetail as $vd)
                    {{$vd['attribute_name']}},
                    @php($visaCost += $vd["price"])
                    @php($visaQty = $vd["qty"])
                @endforeach
            </td>
            <td>{{$visaQty}}</td>
            <td>{{number_format($visaCost,2)}}</td>
            <td>{{number_format($visaQty*$visaCost,2)}}</td>
        </tr>
      @endforeach

    <!-- Add any additional rows for adjustments or other charges -->
    @if ($adjustments && $adjustments->total_cost != 0)
        <tr>
            <td>{{ $adjustments->attribute_name }}</td>
            <td>1</td>
            <td>{{ number_format($adjustments->price_per_unit, 2) }}</td>
            <td>{{ number_format($adjustments->total_cost, 2) }}</td>
        </tr>
    @endif
    </tbody>
</table>

<div class="total-cost">
    <p><strong>Total Amount: {{ number_format($booking->final_cost, 2) }} {{ $booking->package->currency }}</strong></p>
</div>

<div class="footer">
    <p>Thank you for your business!</p>
    <p>If you have any questions, feel free to contact us at {{ $company_info['Company Phone'] ?? 'N/A' }}</p>
</div>

</body>
</html>
