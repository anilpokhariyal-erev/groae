<x-website-layout>
<link href="{{ asset('css/invoice-style.css') }}?v=0.1" rel="stylesheet" />
@php(
    $ref_num = ($company_info['Company Invoice Prefix'] ?? "").str_pad($booking->id, 5, '0', STR_PAD_LEFT)
)
<section class="center-section">
  <div class="container invoice_page myProfileContainer">
    @if($booking->status ==0) 
    <p style="text-align: center;color: red;font-size:22px; font-weight:700;">
      Cancellation Reason: {{$booking->remarks}}
    </p>
     @endif
     @if($booking->status=='3') 
      <p style="padding: 12px 15px;
      background: lightblue;
      color: black;
      font-weight: 800;
      font-size: 17px; text-align: center;"> Payment Refunded </p> 
    @endif
    @if($booking->downloads->isNotEmpty())
          <div class="px-14 py-10 text-sm text-neutral-700">
              <p class="font-bold">Related Downloads:</p>
              @foreach($booking->downloads as $download)
                  <button class="btn btn-primary download-btn mt-2" onclick="window.location.href='{{ route('downloads.show', $download->id) }}'">
                      Download {{ $download->name }}
                  </button>
              @endforeach
          </div>
      @endif
    <div class="py-4 @if($booking->payment_status == 1) watermarked @endif" id="contentToPrint" style="--watermark-text:' Invoice Paid'">
      <div class="py-4 @if($booking->status == 0) watermarked @endif" id="contentToPrint" style="--watermark-text:'Cancelled'">
      <div class="py-4 @if($booking->status == 3) watermarked @endif" id="contentToPrint" style="--watermark-text:'Refunded'">
    <div class="px-14 pdf-adjust">
      <table class="w-full border-collapse border-spacing-0" id="pdfHeader" style="width: 100% !important;">
        <tbody>
          <tr>
            <td class="w-full align-top">
              <div>
                <img src="{{ secure_asset('images/GroAE_Logo.png') }}" class="h-12" 
                style="max-height: 4rem; max-width: 100%; height: auto; width: auto;">
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
                            {{$ref_num}}
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

      <div class="px-14 text-sm">
        <table class="w-full border-collapse border-spacing-0"  style="width: 100% !important;">
          <tbody>
          <tr>
              <div class="text-neutral-600">
            <p class="font-bold text-center" style="background-color: #f1f5f9">Quotation</p>
              </div>
          </tr>
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
              <td class="w-1/2 align-top">
              <div class="col-md-12 font-bold">Freezone: {{$booking?->package?->freezone?->name}}</div>
                <div class="col-md-9 px-2 font-bold">
                  Package: {{$booking->package->title}}
                </div>
              </td>
              <td></td>
            </tr>
            <tr>
              <td class="w-1/2 align-top">
                <div class="col-md-9 px-2 font-bold">
                {{$booking->package->currency}} {{$booking->package->price}}
                </div>
              </td>
              <td></td>
            </tr>
          </tbody>
        </table>
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
                            <tr>
                              <td class="border-b p-3">
                                <div class="whitespace-nowrap text-slate-400">Net total:</div>
                              </td>
                              <td class="border-b p-3 text-right">
                                <div class="whitespace-nowrap font-bold text-main">{{$booking->package->currency}} {{number_format($booking->original_cost,2)}}</div>
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
      @if($booking->payment_status != 1)
      <div class="px-14 text-sm text-neutral-700">
          <p class="text-main font-bold">PAYMENT DETAILS</p>
          <p>{{ $company_info['Bank Name'] ?? 'N/A' }}</p>
          <p>Bank/Sort Code: {{ $company_info['Bank Code'] ?? 'N/A' }}</p>
          <p>Account Number: {{ $company_info['Account Number'] ?? 'N/A' }}</p>
          <p>Payment Reference:   {{$ref_num}}</p>
          @if($booking->status == 2)
          <p class="p-4">
            <form id="checkout-form">
                @csrf
                <button type="button" class="btn btn-primary paynow-btn" id="checkout-button">Pay Now</button>
            </form>
           </p>
           @endif
      </div>
      @endif

      <div class="px-14 py-10 text-sm text-neutral-700">
        <p class="text-main font-bold">Notes</p>
        <pre class="italic">{{ $booking->package->description }} </pre>
      </div>
      @if($booking->payment_status == 1)
          <div class="px-14 py-10 text-sm text-neutral-700">
              <button class="btn btn-primary download-btn" id="downloadPdf">Download Invoice</button>
          </div>
      @endif
      
      <div>
        <footer class="fixed bottom-0 left-0 bg-slate-100 w-full text-neutral-600 text-center text-xs py-3">
          Groae
          <span class="text-slate-300 px-2">|</span>
          admin@groae.com
          <span class="text-slate-300 px-2">|</span>
          +1-202-555-0106
        </footer>
      </div>
    </div>
  </section>
 
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
  <script>
    $(document).ready(function () {
      $(document).on('click', '#checkout-button', async function () {
            const $button = $(this);

            // Disable the button and show a processing message
            $button.attr('disabled', true);
            $button.text('Processing...');

            try {
                // Make the POST request to the payment checkout endpoint
                const response = await fetch('/payment-checkout', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                    body: JSON.stringify({
                        amount: "{{$booking->final_cost}}",
                        order_id: "{{$ref_num}}",
                        booking_id: "{{$booking->id}}"
                    }),
                });

                // Parse the JSON response
                const session = await response.json();

                // Handle success: Redirect to the payment URL
                if (session.url) {
                    window.location.href = session.url;
                } else {
                    // Handle error response
                    console.error(session.error);
                    alert('Payment initialization failed. Please try again.');
                    $button.attr('disabled', false).text('Checkout'); // Re-enable button
                }
            } catch (error) {
                // Handle network or other unexpected errors
                console.error('Error during checkout:', error);
                alert('An error occurred. Please try again later.');
                $button.attr('disabled', false).text('Checkout'); // Re-enable button
            }
        });


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

        $(document).on('click', '#downloadPdf', function(){
          const element = document.getElementById('contentToPrint');
          // Remove the footer
          const footer = element.querySelector('footer');
          if (footer) {
              footer.remove(); // Removes the footer and all its content
          }
          // Remove the button
          const button = element.querySelector('#downloadPdf');
          if (button) {
              button.remove();
          }

          // Remove Info icons
          const infomation = element.querySelector('.infomation');
          if (infomation) {
            infomation.remove();
          }

          const options = {
              margin: 0.2,
              filename: 'invoice_{{$ref_num}}.pdf',
              image: { type: 'jpeg', quality: 0.98 },
              html2canvas: { scale: 2, useCORS: true },
              jsPDF: { 
                  unit: 'in', 
                  format: 'letter', 
                  orientation: 'portrait' 
              },
              pagebreak: {mode: ['css', 'legacy']}
          };

          html2pdf().set(options).from(element).toPdf().get('pdf').save();
          setTimeout(function(){
            location.reload();
          },500);
      });

    });

</script>
</x-website-layout>