<x-website-layout>
    <section class="center-section">
        <h1>🎉 Payment Successful!</h1>
        <p>Thank you for your payment.</p>
        
            <h2>Payment Details</h2>
        <ul>
        <li><strong>Session ID:</strong> {{ $session->id }}</li>
        <li><strong>Customer Email:</strong> {{ $session->customer_details->email }}</li>
        <li><strong>Amount Paid:</strong> {{ number_format($session->amount_total / 100, 2) }}</li>
        <li><strong>Status:</strong> {{ $session->payment_status }}</li>
        </ul>
        
        <h2>Receipt</h2>
        @if($receipt_url)
        <p>
            <a href="{{ $receipt_url }}" target="_blank">View Receipt</a>
        </p>
        @else
        <p>No receipt available.</p>
        @endif
    <a href="/">Back to Home</a>
    </section>
</x-website-layout>