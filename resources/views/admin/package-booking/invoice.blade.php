<x-admin-layout>
  @section('css_includes')
    <link href="{{ asset('css/invoice-style.css') }}?v=0.2" rel="stylesheet" />
  @endsection
@if($booking->status=='1' || $booking->status=='2' && $booking->payment_status!=1)
<form method="POST" action="{{ route('package-bookings.adjustments') }}" class="d-flex align-items-center">
  <div class="row p-2" style="background-color: white; color: black;border-bottom: 3px solid #d9d1d1">
    <div class="col-md-6 p-2">
      @csrf
      <div class="col-md-12 p-2">
        Adjustments (+/- adjustments on final price)
      </div>
      <div class="col-md-12 p-2">
        <input type="hidden" name="package_booking_id" value="{{$booking->id}}">
        <input type="number" class="form-control" name="adjustments" placeholder="Adjustment Amount" value="{{$adjustments?->total_cost}}">
      </div>
      <div class="col-md-12 p-2">
        <textarea class="form-control" name="description" placeholder="Description">{{$adjustments?->description}}</textarea>
      </div>
      <div class="col-md-12 p-2">
        <button type="submit" class="btn btn-primary" style="background:blue">Add</button>
      </div>
    </div>
    <div class="col-md-6 p-2">
      <div class="col-md-12 p-2">
          Quote Status
      </div>
      <div class="col-lg-12">
        <select class="form-control" name="invoice_status" id="invoice_status">
          <option value="" disabled selected>Select Option</option>
          @if($booking->status=='1')
          {{--          <option value="1" @if($booking->status=='1') selected @endif>Pending Quote</option>--}}
          <option value="2" @if($booking->status=='2') selected @endif>Generate Quote</option>
          @endif
            <option value="0" @if($booking->status=='0') selected @endif>Cancel Request</option>
        </select>
      </div>
      <div class="col-md-12 p-2" id="remarks_container" style="display: none;">
        <textarea class="form-control"  id="remarks" name="remarks" placeholder="Remarks">{{$booking->remarks??''}}</textarea>
      </div>
      <div class="col-lg-12 p-2">
        <button type="button" class="btn btn-primary" id="update_invoice" style="background:blue">Update Quote</button>
      </div>
    </div>
  </div>
</form>
<div class="row" style="background-color: white; color: black; padding-bottom:15px;">
  
</div>
@else
      <div class="col-lg-12">
        @if($booking->payment_status==1)
          <p style="padding: 12px 15px; background: lightblue; color: black; font-weight: 800; font-size: 17px; text-align: center;"> Invoice Paid </p>
        @else
          @if($booking->status=='2')
            <p style="padding: 12px 15px; background: lightblue; color: black; font-weight: 800; font-size: 17px; text-align: center;"> Quote Generated </p>
          @endif
          @if($booking->status=='3')
            <p style="padding: 12px 15px; background: lightblue; color: black; font-weight: 800; font-size: 17px; text-align: center;"> Payment Refunded </p>
          @endif
          @if($booking->status=='0')
            <p style="padding: 12px 15px; background: #d92550; color: black; font-weight: 800; font-size: 17px; text-align: center;">
              Request Cancelled
              <br>
              <span style="font-weight: normal; text-align: left; display: block;">Remarks: {{$booking->remarks}}</span>
            </p>
          @endif
        @endif
      </div>

@endif
  <div class="invoice_page" style="width: 90%;margin:auto;background:#fff;">
    <div class="py-4">
      <div class="px-14 py-6">
        <table class="w-full border-collapse border-spacing-0">
          <tbody>
            <tr>
              <td class="w-full align-top">
                <div>
                  <img src="{{ secure_asset('images/GroAE_Logo.png') }}" class="groae-admin-logo">
                </div>
              </td>

              <td class="align-top">
                <div class="text-sm">
                  <table class="border-collapse border-spacing-0">
                    <tbody>
                      <tr>
                        <td class="border-r pr-4">
                          <div>
                            <p class="whitespace-nowrap text-slate-400 text-right">Date</p>
                            <p class="whitespace-nowrap font-bold text-main text-right">{{ $booking->created_at->format('F d, Y') }}</p>
                          </div>
                        </td>
                        <td class="pl-4">
                          <div>
                            <p class="whitespace-nowrap text-slate-400 text-right">Booking Ref. #</p>
                            <p class="whitespace-nowrap font-bold text-main text-right">
                              {{$company_info['Company Invoice Prefix'] ?? null}}{{ str_pad($booking->id, 5, '0', STR_PAD_LEFT) }}
                            </p>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="bg-slate-100 px-14 py-6 text-sm" style="background: #fff;">
        <table class="w-full border-collapse border-spacing-0">
          <tbody>
            <tr>
              <td class="w-1/2 align-top">
                <div class="text-sm text-neutral-600">
                  <p class="font-bold">{{$company_info['Company Name'] ?? null;}}</p>
                  <p>Number: {{$company_info['Company Phone'] ?? null;}}</p>
                  <p>TIN: {{$company_info['Company TIN No'] ?? null;}}</p>
                  <p>{{$company_info['Company Address'] ?? null;}}</p>
                </div>
              </td>
              <td class="w-1/2 align-top text-right">
                <div class="text-sm text-neutral-600">
                  <p class="font-bold">{{$booking->customer->name}}</p>
                  <p>Mob: {{$booking->customer->mobile_number}}</p>
                  <p>{{$booking->customer->address}}</p>
                  <p>{{$booking->customer->state?->name}}</p>
                  <p>{{$booking->customer->country?->name}}</p>
                </div>
              </td>
            </tr>
          <tr>
            <p class="font-bold text-center">Quotation</p>
          </tr>
          </tbody>
        </table>
      </div>
      <div class="row px-14 font-bold">
        <div class="col-md-12">Freezone: {{$booking?->package?->freezone?->name}}</div>
        <div class="col-md-9">
          Package: {{$booking->package->title}}
        </div>
        <div class="col-md-2">{{$booking->package->currency}} {{$booking->package->price}}</div>
      </div>

      <div class="px-14 py-10 text-sm text-neutral-700">
        <table class="w-full border-collapse border-spacing-0">
          <thead>
            <tr>
              <td class="border-b-2 border-main pb-3 pl-3 font-bold text-main">#</td>
              <td class="border-b-2 border-main pb-3 pl-2 font-bold text-main">Add-Ons</td>
              <td class="border-b-2 border-main pb-3 pl-2 text-right font-bold text-main">Price</td>
              <td class="border-b-2 border-main pb-3 pl-2 text-center font-bold text-main">Qty.</td>
              <td class="border-b-2 border-main pb-3 pl-2 text-right font-bold text-main">Subtotal</td>
            </tr>
          </thead>
          <tbody>
          @php($sr=1)
          @foreach ($booking->bookingDetails as $detail)
            @if($detail->attribute_name !="FixedFee")
              <tr>
                <td class="border-b py-3 pl-3">{{$sr++}}</td>
                <td class="border-b py-3 pl-2">{{$detail->attribute_name}} ( {{$detail->attribute_value}} )
                  @if($detail->description)
                    <span class="infomation" title="{{$detail->description}}"
                          style="background-color: black; color: white; border-radius: 50%; padding: 0px 5px; display: inline-block; text-align: center; cursor: pointer;">
                  i
                </span>

                  @endif
                </td>
                <td class="border-b py-3 pl-2 text-right">{{ number_format($detail->price_per_unit, 2) }}</td>
                <td class="border-b py-3 pl-2 text-center">{{ $detail->quantity }}</td>
                <td class="border-b py-3 pl-2 text-right">{{ number_format($detail->price_per_unit*$detail->quantity, 2) }}</td>
              </tr>
            @endif
          @endforeach
            <tr>
              <td colspan="7">
                <table class="w-full border-collapse border-spacing-0">
                  <tbody>
                    <tr>
                      <td class="w-full"></td>
                      <td>
                        <table class="w-full border-collapse border-spacing-0">
                          <tbody>
                          @php($fixedCost = 0)
                          @foreach($booking->bookingDetails as $detail)
                            @if($detail->attribute_name =="FixedFee")
                                <?php  $fixedCost += $detail->price_per_unit ?>
                            @endif
                          @endforeach
                            <tr>
                              <td class="border-b p-3">
                                <div class="whitespace-nowrap text-slate-400">Net total:</div>
                              </td>
                              <td class="border-b p-3 text-right">

                                <div class="whitespace-nowrap font-bold text-main">{{$booking->package->currency}}
{{--                                  {{dd($booking->original_cost +$adjustments->total_cost -$fixedCost)}}--}}
                                  @if($adjustments && $adjustments->total_cost <> 0)
                                    {{ number_format($booking->original_cost + $adjustments->total_cost, 2) }}
                                  @else
                                    {{ number_format($booking->original_cost, 2) }}
                                  @endif
                                 </div>
                              </td>
                            </tr>

                            @php($fixedCost = 0)
                            @foreach($booking->bookingDetails as $detail)
                              @if($detail->attribute_name =="FixedFee")
                                <tr>
                                  <td class="p-3">
                                    <div class="whitespace-nowrap text-slate-400" title="{{$detail->attribute_name}}">
                                      {{$detail->attribute_value}}
                                      :</div>
                                  </td>
                                  <td class="p-3 text-right">
                                    <div class="whitespace-nowrap font-bold text-main">
                                      {{$booking->package->currency}}
                                        <?php  $fixedCost += $detail->price_per_unit ?>
                                      {{number_format($detail->price_per_unit, 2)}}
                                    </div>
                                  </td>
                                </tr>
                              @endif
                            @endforeach
                            @if($booking->status == 2)
                              @php($fixedCost = 0)
                            @endif
                            <tr>
                              <td class="bg-main p-3">
                                <div class="whitespace-nowrap font-bold text-white">Total:</div>
                              </td>
                              <td class="bg-main p-3 text-right">
                                <div class="whitespace-nowrap font-bold text-white">
                                  {{$booking->package->currency}}
                                  {{number_format($booking->final_cost,2)}}
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="px-14 text-sm text-neutral-700">
          <p class="text-main font-bold">PAYMENT DETAILS</p>
          <p>{{ $company_info['Bank Name'] ?? 'N/A' }}</p>
          <p>Bank/Sort Code: {{ $company_info['Bank Code'] ?? 'N/A' }}</p>
          <p>Account Number: {{ $company_info['Account Number'] ?? 'N/A' }}</p>
          <p>Payment Reference:  {{$company_info['Company Invoice Prefix'] ?? null;}}{{ str_pad($booking->id, 5, '0', STR_PAD_LEFT) }}</p>
      </div>

      <div class="px-14 py-10 text-sm text-neutral-700">
        <p class="text-main font-bold">Notes</p>
        <pre class="italic">{{ $booking->package->description }} </pre>
        </dvi>

        <footer class="fixed bottom-0 left-0 bg-slate-100 w-full text-neutral-600 text-center text-xs py-3">
          Groae
          <span class="text-slate-300 px-2">|</span>
          admin@groae.com
          <span class="text-slate-300 px-2">|</span>
          +1-202-555-0106
        </footer>
      </div>
    </div>
 
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function () {
        $('#update_invoice').on('click', function () {
            // Get the selected status and package booking ID
            const status = $('#invoice_status').val();
            const packageBookingId = $('input[name="package_booking_id"]').val();
            data = {
              _token: "{{ csrf_token() }}", // CSRF token for security
              status: status,
              package_booking_id: packageBookingId,
            }
          if (status === '0' || status == '3' || status == '4'){
            reason = $('#remarks').val();
            data['remarks'] = reason;
          }
            // Make an AJAX POST request
            $.ajax({
                url: "{{ route('package-bookings.update_status') }}", // Route for the AJAX call
                type: "POST",
                data: data,
                success: function (response) {
                    // Handle success response
                    alert(response.message || 'Quote status updated successfully!');
                    location.reload();
                },
                error: function (xhr) {
                    // Handle error response
                    alert(xhr.responseJSON.message || 'An error occurred while updating the Quote status.');
                },
            });
        });
    });
    document.addEventListener('DOMContentLoaded', (event) => {
      // Get the invoice status dropdown and cancel reason container
      const invoiceStatus = document.getElementById('invoice_status');
      const cancelReasonContainer = document.getElementById('remarks_container');

      // Function to check the selected value and show/hide the cancel reason field
      function checkInvoiceStatus() {
        if (invoiceStatus.value === "0" || invoiceStatus.value === "3" || invoiceStatus.value === "4") {
          cancelReasonContainer.style.display = 'block'; // Show the cancel reason field
        } else {
          cancelReasonContainer.style.display = 'none'; // Hide the cancel reason field
        }
      }

      // Initial check when the page loads
      checkInvoiceStatus();

      // Add an event listener to check when the dropdown value changes
      invoiceStatus.addEventListener('change', checkInvoiceStatus);
    });

  </script>
</x-admin-layout>