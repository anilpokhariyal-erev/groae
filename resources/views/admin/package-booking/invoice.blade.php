<x-admin-layout>
<link href="{{ asset('css/invoice-style.css') }}?v=0.1" rel="stylesheet" />
@if($booking->status=='1')
<form method="POST" action="{{ route('package-bookings.adjustments') }}" class="d-flex align-items-center">
  <div class="row p-2" style="background-color: white; color: black;">
      @csrf
      <div class="col-lg-3">
        Adjustments (+/- adjustments on final price)
      </div>
      <div class="col-lg-3">
        <input type="hidden" name="package_booking_id" value="{{$booking->id}}">
        <input type="number" class="form-control" name="adjustments" placeholder="Adjustment Amount" value="{{$adjustments?->total_cost}}">
      </div>
      <div class="col-lg-3">
        <textarea class="form-control" name="description" placeholder="Description">{{$adjustments?->description}}</textarea>
      </div>
      <div class="col-lg-3">
        <button type="submit" class="btn btn-primary" style="background:blue">Add</button>
      </div>
  </div>
</form>
<div class="row" style="background-color: white; color: black; padding-bottom:15px;">
  <div class="col-lg-3">
    <select class="form-control" name="invoice_status" id="invoice_status">
      <option value="1" @if($booking->status=='1') selected @endif>Pending Invoice</option>
      <option value="2" @if($booking->status=='2') selected @endif>Generate Invoice</option>
      <option value="0" @if($booking->status=='0') selected @endif>Cancel Request</option>
    </select>
  </div>
  <div class="col-lg-3">
  <button type="button" class="btn btn-primary" id="update_invoice" style="background:blue">Update Invoice</button>
  </div>
</div>
@else
<div class="col-lg-12">
  <p style="padding: 12px 15px;
    background: lightblue;
    color: black;
    font-weight: 800;
    font-size: 17px;">
    @if($booking->status=='2') Invoice Generated @endif
    @if($booking->status=='0') Request Cancelled @endif
  </p>
</div>
@endif
  <div>
    <div class="py-4">
      <div class="px-14 py-6">
        <table class="w-full border-collapse border-spacing-0">
          <tbody>
            <tr>
              <td class="w-full align-top">
                <div>
                  <img src="{{ secure_asset('images/GroAE_Logo.png') }}" class="h-12">
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
                              {{$company_info['Company Invoice Prefix'] ?? null;}}{{ str_pad($booking->id, 5, '0', STR_PAD_LEFT) }}
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

      <div class="bg-slate-100 px-14 py-6 text-sm">
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
          </tbody>
        </table>
      </div>
      <div class="row px-14 font-bold">
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
            <tr>
              <td class="border-b py-3 pl-3">{{$sr++}}</td>
              <td class="border-b py-3 pl-2">{{$detail->attribute_name}} ( {{$detail->attribute_value}} ) 
                @if($detail->description)
                <span title="{{$detail->description}}" 
                      style="background-color: black; color: white; border-radius: 50%; padding: 0px 5px; display: inline-block; text-align: center; cursor: pointer;">
                  i
                </span>

                @endif
              </td>
              <td class="border-b py-3 pl-2 text-right">{{ number_format($detail->price_per_unit, 2) }}</td>
              <td class="border-b py-3 pl-2 text-center">{{ $detail->quantity }}</td>
              <td class="border-b py-3 pl-2 text-right">{{ number_format($detail->price_per_unit*$detail->quantity, 2) }}</td>
            </tr>
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
                            <tr>
                              <td class="border-b p-3">
                                <div class="whitespace-nowrap text-slate-400">Net total:</div>
                              </td>
                              <td class="border-b p-3 text-right">
                                <div class="whitespace-nowrap font-bold text-main">{{$booking->package->currency}} {{number_format($booking->final_cost,2)}}</div>
                              </td>
                            </tr>
                            @if($adjustments && $adjustments->total_cost<>0)
                            <tr>
                              <td class="bg-main p-3">
                                <div class="whitespace-nowrap font-bold text-white">Adjustments:</div>
                              </td>
                              <td class="bg-main p-3 text-right">
                                <div class="whitespace-nowrap font-bold text-white">
                                  {{$booking->package->currency}}
                                  {{number_format($adjustments?->total_cost,2)}}
                                  @php($booking->final_cost += $adjustments?->total_cost)
                                </div>
                              </td>
                            </tr>
                            @endif

                            @php($fixedCost = 0)
                            @foreach($fixedFees as $fixedFee)
                            <tr>
                              <td class="p-3">
                                <div class="whitespace-nowrap text-slate-400" title="{{$fixedFee->description}}">
                                  {{$fixedFee->label}} 
                                  @if($fixedFee->type!='fixed')
                                  ({{$fixedFee->value}}%)
                                  @endif
                                  :</div>
                              </td>
                              <td class="p-3 text-right">
                                <div class="whitespace-nowrap font-bold text-main">
                                {{$booking->package->currency}}
                                  @if($fixedFee->type=='fixed')
                                   {{$fixedFee->value}}
                                  @else
                                  {{$booking->final_cost*($fixedFee->value/100)}}
                                  @endif
                                </div>
                              </td>
                            </tr>
                            <?php
                            if($fixedFee->type=='fixed'){
                              $fixedCost += $fixedFee->value;
                            }else{
                              $fixedCost = $booking->final_cost*($fixedFee->value/100);
                            }
                            ?>
                            @endforeach
                            <tr>
                              <td class="bg-main p-3">
                                <div class="whitespace-nowrap font-bold text-white">Total:</div>
                              </td>
                              <td class="bg-main p-3 text-right">
                                <div class="whitespace-nowrap font-bold text-white">
                                  {{$booking->package->currency}}
                                  {{number_format($booking->final_cost+$fixedCost,2)}}
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
        <p>Banks of Banks</p>
        <p>Bank/Sort Code: 1234567</p>
        <p>Account Number: 123456678</p>
        <p>Payment Reference: BRA-00335</p>
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

            // Make an AJAX POST request
            $.ajax({
                url: "{{ route('package-bookings.update_status') }}", // Route for the AJAX call
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}", // CSRF token for security
                    status: status,
                    package_booking_id: packageBookingId,
                },
                success: function (response) {
                    // Handle success response
                    alert(response.message || 'Invoice status updated successfully!');
                    location.reload();
                },
                error: function (xhr) {
                    // Handle error response
                    alert(xhr.responseJSON.message || 'An error occurred while updating the invoice status.');
                },
            });
        });
    });
</script>
</x-admin-layout>