<x-website-layout>

    <!-- Payment Mode -->
    <section class="center-section">
        <div class="costCalculateContainer">
            <div class="container">
                <div class="paymntConfirmationContainer">
                    <div class="paymntConfirmWrapper">
                        <div class="thankyouWrap1">
                            <img src="{{ asset('images/check-icon.png') }}" alt="">
                            <h2>Thank You!</h2>
                        </div>
                        <div class="thankyouWrap2">
                            <h2>We are delighted to inform you that your recent payment has been successfully processed.
                            </h2>
                            <div class="transHistory">
                                <h3>Transaction ID:<span>{{ $transaction->transaction_id }}</span></h3>
                                <h3>Transaction Date and
                                    Time:<span>{{ \Carbon\Carbon::parse($transaction->created_at)->format('d M Y') }}</span>
                                </h3>
                                <h3>Service Opted:<span>Via GroAE</span></h3>
                                <h3>Total Amount Paid:<span>AED {{ $transaction->amount }}</span></h3>
                            </div>
                        </div>
                        <div class="thankyouWrap3">
                            <h2>You will also receive an email confirmation shortly,
                                containing the same details for your records.</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-website-layout>
