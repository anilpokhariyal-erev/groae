<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quotation Request Received</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #304a6f;
            text-align: center;
        }

        .container {
            width: 90%;
            max-width: 800px;
            margin: 20px auto;
            background-color: #ffffff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
            overflow: hidden;
        }

        .invoice-header {
            margin-bottom: 20px;
            border: 1px solid #304a6f;
            border-radius: 15px;
            padding: 10px;
        }

        .invoice-header img {
            display: block;
            margin: 0 auto;
            max-width: 150px;
        }

        .invoice-header p {
            font-size: 1.5em;
            margin: 10px 0;
            color: #304a6f;
            text-align: center;
        }

        .invoice-body {
            margin-left: 5%;
            margin-bottom: 20px;
            font-size: 1.1em;
        }

        .invoice-body p {
            margin: 10px 0;
        }

        .footer {
            background-color: #304a6f;
            color: white;
            padding: 20px 0;
            border-radius: 8px;
            text-align: center;
        }

        .footer p {
            margin: 5px 0;
            font-size: 0.9em;
        }

        .footer .social-icons {
            margin: 10px 0;
        }

        .footer .social-icons img {
            width: 32px;
            height: 32px;
            margin: 0 10px;
            vertical-align: middle;
            transition: transform 0.2s;
        }

        .footer .social-icons img:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body>

<div class="container">
    <div class="invoice-header">
        <img src="https://groae.com/GroAE_Logo.png" alt="GroAE Logo">
        <p>{{ $headerText }}</p>
    </div>

    <div class="invoice-body">
        {!! $bodyText !!}
    </div>

    <div class="footer">
        <p>Follow us:</p>
        <div class="social-icons">
            <!-- Replace 'url-to-icon' with the path to your icon images or URLs -->
            <a href="https://www.facebook.com/GroAEbusinesssetup/" target="_blank">
                <img src="https://groae.com/fb.svg" alt="Facebook">
            </a>
            <a href="https://www.instagram.com/gro.ae" target="_blank">
                <img src="https://groae.com/instagram.svg" alt="Instagram">
            </a>
            <a href="https://www.linkedin.com/company/groae/" target="_blank">
                <img src="https://groae.com/linkedin.png" alt="LinkedIn">
            </a>
            <a href="https://www.youtube.com/@GroAE" target="_blank">
                <img src="https://groae.com/youtube.svg" alt="YouTube">
            </a>
        </div>
        <p>A Unit of Falcon International Consulting & Auditing L.L.C</p>
        <p>Copyright © Falcon International Consulting & Auditing L.L.C 2024. All rights reserved.</p>
        <p>Contact: +971559386418</p>
    </div>
</div>

</body>
</html>
