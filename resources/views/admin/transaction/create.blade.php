<x-admin-layout>

    @if ($errors->any())
        <div class="main-card">
            <div class="card-body">
                <div class="custom-red-alert" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif
    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="ba_flex justify-between">
                <div class="ba_flex align_items_center">
                    <h5 class="card-heading">Create Transaction</h5>
                </div>

                <div class="ba_flex align_items_center">
                    <a href="{{ route('transaction.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
            &nbsp;
            <form method="post" action="{{ route('transaction.store') }}">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="package_booking_id">Package Booking <span class="text-danger">*</span></label>
                            <select name="freezone_booking_id" id="package_booking_id" class="form-control" required>
                                <option value="">Select a Package Booking</option>
                                @foreach ($packageBookings as $booking)
                                    <option value="{{ $booking->id }}" {{ old('package_booking_id') == $booking->id ? 'selected' : '' }}>
                                        {{ $booking->package->title }} - {{ $booking->customer->name }} - ₹{{ $booking->final_cost }}
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('package_booking_id')" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="transaction_id">Transaction ID <span class="text-danger">*</span></label>
                            <input name="transaction_id" id="transaction_id" value="{{ old('transaction_id') }}" type="text" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('transaction_id')" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="message">Message <span class="text-danger">*</span></label>
                            <input name="message" id="message" value="{{ old('message') }}" type="text" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('message')" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="reference_id">Reference ID</label>
                            <input name="reference_id" id="reference_id" value="{{ old('reference_id') }}" type="text" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('reference_id')" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="amount">Transaction Amount <span class="text-danger">*</span></label>
                            <input name="amount" id="amount" value="{{ old('amount') }}" type="number" step="0.01" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('amount')" />
                        </div>
                    </div>

                   
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="payment_status">Payment Status <span class="text-danger">*</span></label>
                            <select name="payment_status" id="payment_status" class="form-control">
                                <option value="pending" @if(old('payment_status') == 'pending') selected @endif>Pending</option>
                                <option value="successful" @if(old('payment_status') == 'successful') selected @endif>Successful</option>
                                <option value="failed" @if(old('payment_status') == 'failed') selected @endif>Failed</option>
                                <option value="cancelled" @if(old('payment_status') == 'cancelled') selected @endif>Cancelled</option>
                                <option value="refunded" @if(old('payment_status') == 'refunded') selected @endif>Refunded</option>
                            </select>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('payment_status')" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="response_obj">Response Object</label>
                            <textarea name="response_obj" id="response_obj" class="form-control">{{ old('response_obj') }}</textarea>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('response_obj')" />
                        </div>
                    </div>
                </div>

                <div class="ba_flex align_items_center">
                    <button class="mt-1 btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-12">
    <div class="position-relative form-group">
        <label for="reference_id">Reference ID</label>
        <input name="reference_id" id="reference_id" value="{{ old('reference_id') }}" type="text" class="form-control">
        <x-input-error class="mt-2 text-red" :messages="$errors->get('reference_id')" />
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const disableSpaces = (inputId) => {
            const inputField = document.getElementById(inputId);

            // Prevent spacebar input
            inputField.addEventListener('keypress', function (e) {
                if (e.key === ' ') {
                    e.preventDefault();
                }
            });

            // Remove spaces on paste or typing
            inputField.addEventListener('input', function () {
                this.value = this.value.replace(/\s/g, '');
            });
        };

        disableSpaces('transaction_id'); // For Transaction ID
        disableSpaces('reference_id');  // For Reference ID
    });
</script>
</x-admin-layout>
