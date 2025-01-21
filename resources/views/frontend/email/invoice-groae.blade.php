<!DOCTYPE html>
<html lang="en">
  <head>
  <style>
        .text-right{
          text-align: right !important;
        }
        .header-invoice{
            background-color: white !important; width: 100%; border-collapse: collapse;
        }
        .header-invoice tr{
            background-color: #fff !important;
        }
        .proforma-invoice {
        display: flex;
        align-items: center;
        justify-content: space-between;
        font-size: 22px; /* Adjust font size */
        text-transform: uppercase; /* Make text uppercase */
        margin: 20px 0; /* Add spacing above and below */
        color: #000; /* Text color */
      }

      .proforma-invoice::before,
      .proforma-invoice::after {
        content: '';
        height: 1px;
        background-color: lightgray; /* Line color */
      }

      .proforma-invoice::before {
        flex: 6; /* Adjust length of the left line (60%) */
        margin-right: 10px; /* Spacing between text and line */
      }

      .proforma-invoice::after {
        flex: 4; /* Adjust length of the right line (40%) */
        margin-left: 10px; /* Spacing between text and line */
      }
      .invoice-section {
        display: flex;
        justify-content: space-between;
        margin: 20px 0; /* Add spacing above and below */
      }

      .invoice-left {
        width: 70%; /* Left section width */
      }

      .invoice-right {
        width: 30%; /* Right section width */
        text-align: right; /* Align text to the right */
      }

      .invoice-right p {
        margin: 0; /* Remove default paragraph margin */
        display: flex;
        justify-content: space-between; /* Space between label and value */
      }

      .detail-label {
        font-weight: bold; /* Bold for the label */
        min-width: 200px; /* Minimum width for labels to ensure alignment */
        text-align: left; /* Align labels to the left */
      }

      .detail-value {
        flex: 1; /* Take up remaining space */
        text-align: left; /* Align values to the right */
      }

      .bg-light-gray{
        background-color: #f5f5f5 !important; /* Light gray background */
      }
      /* Scope styles to .invoice-calculation */
      table.invoice-calculation {
        width: 100%;
        border-collapse: collapse; /* Remove gaps between cells */
        border-spacing: 0; /* Ensure no additional space */
      }

      table.invoice-calculation thead td {
        background-color: #f5f5f5; /* Light gray background for header */
        border: 1px solid #d3d3d3; /* Thin solid gray border */
        font-weight: bold;
      }

      table.invoice-calculation tbody td {
        background-color: #ffffff; /* White background for body rows */
        border: 1px solid #d3d3d3; /* Thin solid gray border */
      }

      table.invoice-calculation td {
        padding: 8px; /* Add padding inside cells */
        font-size: 14px; /* Adjust font size */
      }

      /* Scope styles to .bank details */
      table.bank-details {
        width: 100%;
        border-collapse: collapse; /* Remove gaps between cells */
        border-spacing: 0; /* Ensure no additional space */
      }

      table.bank-details tbody td {
        background-color: #ffffff; /* White background for body rows */
        border: 1px solid #d3d3d3; /* Thin solid gray border */
      }

      table.bank-details td {
        padding: 8px; /* Add padding inside cells */
        font-size: 14px; /* Adjust font size */
      }
    </style>
  </head>
  <body>
@php(
    $ref_num = ($company_info['Company Invoice Prefix'] ?? "").str_pad($booking->id, 5, '0', STR_PAD_LEFT)
)
  <section class="center-section" style="padding: 1% 10% 0%">
      <table class="header-invoice">
          <tr>
          <td width="70%"><img src="{{ $app_url }}/images/GroAE_Logo.png" alt="GroAE" width="250px"></td>
          <td>
            <p style="font-weight: 800;">{{$company_info['Company Name'] ?? null;}}</p>
            <p>Number: {{$company_info['Company Phone'] ?? null;}}</p>
            <p>TIN: {{$company_info['Company TIN No'] ?? null;}}</p>
            <p>{{$company_info['Company Address'] ?? null;}}</p>
          </td>
          </tr>
      </table>
      <div class="proforma-invoice">
        ESTIMATE / QUOTE
      </div>
      <div class="invoice-section">
        <!-- Left Section -->
        <div class="invoice-left">
          <p>Invoice To</p>
          <p><strong>{{$booking->customer->name}} {{$booking->customer->mobile_number}}</strong></p>
          <p>{{$booking->customer->address}}, {{$booking->customer->state?->name}}, {{$booking->customer->country?->name}}</p>
        </div>

        <!-- Right Section -->
        <div class="invoice-right">
          <p>
            <span class="detail-label">Estimate#:</span>
            <span class="detail-value"> {{$ref_num}}</span>
          </p>
          <p>
            <span class="detail-label">Estimate Date:</span>
            <span class="detail-value">{{ $booking->created_at->format('d M Y') }}</span>
          </p>
        </div>
      </div>
      <!-- main calculation table -->
      <table class="invoice-calculation">
        <thead>
          <tr>
            <td class="border-b-2 border-main pb-3 pl-3 font-bold text-main">#</td>
            <td class="border-b-2 border-main pb-3 pl-2 font-bold text-main">Description</td>
            <td class="border-b-2 border-main pb-3 pl-2 text-right font-bold text-main">Price</td>
            <td class="border-b-2 border-main pb-3 pl-2 text-center font-bold text-main">Qty.</td>
            <td class="border-b-2 border-main pb-3 pl-2 text-right font-bold text-main">Amount</td>
          </tr>
        </thead>
        <tbody>
        @php($sr=1)
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
          @elseif($detail->attribute_name !="FixedFee")
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
          @foreach ($visaDetails as $visaDetail)
          <tr>
              <td class="border-b py-3 pl-3">{{$sr++}}</td>
              <td class="border-b py-3 pl-2">
                  @php($visaCost = 0)
                  @php($visaQty=1)
                  @foreach($visaDetail as $vd)
                      {{$vd['attribute_name']}},
                      @php($visaCost += $vd["price"])
                      @php($visaQty = $vd["qty"])
                  @endforeach
              </td>
              <td class="border-b py-3 pl-2 text-right">{{number_format($visaCost,2)}}</td>
              <td class="border-b py-3 pl-2 text-center">{{$visaQty}}</td>
              <td class="border-b py-3 pl-2 text-right">{{number_format($visaQty*$visaCost,2)}}</td>
          </tr>
        @endforeach

        <!-- Sub total -->
        <tr>
          <td colspan="4" style="padding-right:20px;font-weight:bold;"  class="text-right bg-light-gray">Sub Total</td>
          <td style="font-weight: bold;" class="text-right bg-light-gray">
          {{$booking->package->currency}}
            @if($adjustments && $adjustments->total_cost <> 0)
              {{ number_format($booking->original_cost + $adjustments->total_cost, 2) }}
            @else
              {{ number_format($booking->original_cost, 2) }}
            @endif
          </td>
        </tr>

        <!-- Fixed Fee -->
        @php($fixedCost = 0)
        @foreach($booking->bookingDetails as $detail)
          @if($detail->attribute_name =="FixedFee")
          <tr>
            <td colspan="4" style="padding-right:20px;font-weight:bold;"  class="text-right">{{$detail->attribute_value}}</td>
            <td class="text-right">
              {{$booking->package->currency}}
              <?php  $fixedCost += $detail->price_per_unit ?>
              {{number_format($detail->price_per_unit, 2)}}
            </td>
          </tr>
          @endif
        @endforeach

          <!-- total -->
          <tr>
            <td colspan="3" style="border: none;">
                Looking forward for your business.
            </td>
            <td style="padding-right: 20px; font-weight: bold; border-left: none; border-right: none; border-bottom: 1px solid #000;" class="text-right">
                Total
            </td>
            <td style="font-weight: bold; border-left: none; border-right: none; border-bottom: 1px solid #000;" class="text-right">
                {{$booking->package->currency}}
                {{number_format($booking->final_cost, 2)}}
            </td>
        </tr>

        </tbody>
      </table>

      <div style="font-family: Arial, sans-serif; line-height: 1.6; margin-top: 40px;">
          <h2 style="text-align: left; font-size: 18px; font-weight: bold;">Payment Details</h2>
          <p>Please note the bank charges are to be borne by the remitter. 
            Also, include the above mentioned estimate number in the reference/description field when making payment. 
            Failure to do so will result in a delay in us identifying the payment and hence a subsequent delay in the 
            processing of any application.</p>
          
          <table class="bank-details">
              <tr>
                  <td style="padding: 10px; border: 1px solid #ddd;" class="bg-light-gray">Account Name : </td>
                  <td style="padding: 10px; border: 1px solid #ddd;">{{$company_info['Company Name'] ?? null;}}</td>
                  <td style="padding: 10px; border: 1px solid #ddd;" class="bg-light-gray">Bank/Sort Code :</td>
                  <td style="padding: 10px; border: 1px solid #ddd;"> {{ $company_info['Bank Code'] ?? 'N/A' }}</td>
                </tr>
              <tr>
                  <td style="padding: 10px; border: 1px solid #ddd;" class="bg-light-gray">Bank Name : </td>
                  <td style="padding: 10px; border: 1px solid #ddd;">{{ $company_info['Bank Name'] ?? 'N/A' }}</td>
                  <td style="padding: 10px; border: 1px solid #ddd;" class="bg-light-gray">Account Number :</td>
                  <td style="padding: 10px; border: 1px solid #ddd;"> {{ $company_info['Account Number'] ?? 'N/A' }}</td>
                  
              </tr>
          </table>

          <p><strong>NB:</strong> This is a computer generated document and does not need a signature.</p>
      </div>
  </section>
  </body>
</html>