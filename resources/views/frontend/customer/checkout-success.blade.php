<x-website-layout>
    <style>
        .payment_box{
            padding-top: 150px;
        }

        .successMessage {
            color: #4caf50;
            font-size: 1.2rem;
            margin: 10px 0;
        }

        .transactionDetails, .receiptDetails {
            margin-top: 20px;
            border: 1px solid #e0e0e0;
            padding: 15px;
            border-radius: 8px;
            background-color: #fafafa;
        }

        .detailHeading {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #333;
        }

        .detailList {
            list-style: none;
            padding: 0;
        }

        .detailList li {
            margin: 8px 0;
            font-size: 1rem;
            color: #555;
        }

        .statusBadge {
            font-weight: bold;
            color: #4caf50;
        }

        .receiptLink {
            color: #1e88e5;
            text-decoration: underline;
            font-size: 1rem;
        }

        .noReceipt {
            color: #999;
            font-size: 0.9rem;
        }

        .actionButtons {
            margin-top: 20px;
            text-align: center;
        }


    </style>
    <section class="container">
        <div class="payment_box">
            <div class="topHeading">
                <h1 class="trendTxt">🎉 Payment Successful!</h1>
                <p class="successMessage">Thank you for your payment. Your transaction details are below:</p>
            </div>
            <div>
                <div class="transactionDetails">
                    <h2 class="detailHeading">Payment Details</h2>
                    <ul class="detailList">
                        <li><strong>Session ID:</strong> {{ $session->id }}</li>
                        <li><strong>Customer Email:</strong> {{ $session->customer_details->email }}</li>
                        <li><strong>Amount Paid:</strong> ₹{{ number_format($session->amount_total / 100, 2) }}</li>
                        <li><strong>Status:</strong> <span class="statusBadge">{{ $session->payment_status }}</span></li>
                    </ul>
                </div>
                <div class="receiptDetails">
                    <h2 class="detailHeading">Receipt</h2>
                    @if($receipt_url)
                        <p>
                            <a class="receiptLink" href="{{ $receipt_url }}" target="_blank">View Receipt</a>
                        </p>
                    @else
                        <p class="noReceipt">No receipt available.</p>
                    @endif
                </div>
                
                <div class="actionButtons">
                    <a href="{{ route('customer.my_booking_requests.view') }}" class="loginBtn">
                        <span class="buttonText">Back to Home</span>
                    </a>
                </div>

            </div>
        </div>
    </section>
</x-website-layout>
