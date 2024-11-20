<x-website-layout>
    <style>
        .fail_payment_box {
            padding-top: 150px;
        }

        .errorMessage {
            color: #f44336;
            font-size: 1.2rem;
            margin: 10px 0;
        }

        .errorDetails, .errorReceiptDetails {
            margin-top: 20px;
            border: 1px solid #e0e0e0;
            padding: 15px;
            border-radius: 8px;
            background-color: #fff5f5;
        }

        .errorHeading {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #d32f2f;
        }

        .errorList {
            list-style: none;
            padding: 0;
        }

        .errorList li {
            margin: 8px 0;
            font-size: 1rem;
            color: #555;
        }

        .statusErrorBadge {
            font-weight: bold;
            color: #f44336;
        }

        .errorReceiptLink {
            color: #d32f2f;
            text-decoration: underline;
            font-size: 1rem;
        }

        .noErrorReceipt {
            color: #999;
            font-size: 0.9rem;
        }

        .errorActionButtons {
            margin-top: 20px;
            text-align: center;
        }

        .tryAgainBtn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #d32f2f;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1rem;
        }

        .tryAgainBtn:hover {
            background-color: #b71c1c;
        }
    </style>
    <section class="container">
        <div class="fail_payment_box">
            <div class="topHeading">
                <h1 class="trendTxt">❌ Payment Failed</h1>
                <p class="errorMessage">Unfortunately, your payment was not successful. Please find the details below:</p>
            </div>
            <div>
                <div class="errorDetails">
                    <h2 class="errorHeading">Transaction Details</h2>
                    <ul class="errorList">
                        <li><strong>Session ID:</strong> {{ $session->id }}</li>
                        <li><strong>Customer Email:</strong> {{ $session->customer_details->email }}</li>
                        <li><strong>Attempted Amount:</strong> ₹{{ number_format($session->amount_total / 100, 2) }}</li>
                        <li><strong>Status:</strong> <span class="statusErrorBadge">{{ $session->payment_status }}</span></li>
                    </ul>
                </div>
                <div class="errorReceiptDetails">
                    <h2 class="errorHeading">Receipt</h2>
                    @if($receipt_url)
                        <p>
                            <a class="errorReceiptLink" href="{{ $receipt_url }}" target="_blank">View Receipt</a>
                        </p>
                    @else
                        <p class="noErrorReceipt">No receipt available.</p>
                    @endif
                </div>
                <div class="errorActionButtons">
                    <a class="tryAgainBtn" href="{{ route('customer.my_booking_requests.view') }}">Back</a>
                </div>
            </div>
        </div>
    </section>
</x-website-layout>
