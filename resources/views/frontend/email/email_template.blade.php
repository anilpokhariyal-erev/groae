<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quotation Request Received</title>
    <style>
        body {
            text-align: center;
            background-color: white;
            color: #304a6f;
            font-family: Arial, sans-serif;
        }

        .footer {
            text-align: center;
            background-color: #304a6f;
            color: white;
            padding: 20px 0;
        }

        .invoice-header img {
            display: block;
            margin: 0 auto;
        }

        .invoice-header p {
            font-size: 1.5em;
            margin: 10px 0;
        }

        .invoice-body p {
            margin: 10px 0;
        }

        .footer p {
            margin: 5px 0;
        }
    </style>
</head>
<body>

<div class="invoice-header" style="text-align: center">
    <img src="{{ asset('images/GroAE_Logo.png') }}" alt="GroAE Logo">
    <p>{{ $headerText }}</p>
</div>

<div class="invoice-body" style="text-align: center">
    {!! $bodyText !!}
</div>

<div class="footer">
    <p>Follow us:</p>
    <p>[icon 1] [icon 2]</p>
    <p>A Unit of Falcon International Consulting & Auditing L.L.C</p>
    <p>Copyright © Falcon International Consulting & Auditing L.L.C 2024. All rights reserved.</p>
    <p>Contact: +971559386418</p>
</div>

</body>
</html>
