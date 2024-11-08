<!DOCTYPE html>
<html>
<head>
    <title>Verification Code</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border: 1px solid #e0e0e0;
        }
        .header {
            text-align: center;
            padding: 10px 0;
            background-color: #0073e6;
            color: #ffffff;
        }
        .content {
            padding: 20px;
            color: #333333;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #0073e6;
            color: #ffffff;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 20px;
        }
        .footer {
            margin-top: 30px;
            font-size: 12px;
            color: #888888;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="email-container">
    <div class="header">
        <h1>Welcome to GroAE!</h1>
    </div>
    <div class="content">
        <p>Hi {{$name}},</p>
        <p>Thank you for signing up. We’re excited to have you as part of our community and can’t wait for you to explore everything we have to offer.</p>
        <p>To complete your registration, please verify your email address by clicking the button below:</p>
        <p style="text-align: center;">
            <a href="{{$code}}" class="btn">Verify My Email</a>
        </p>
        <p>If you have any questions, feel free to reach out to us at <a href="mailto:admin@groae.com">admin@groae.com</a>. We're here to help!</p>
        <p>Thanks again, and welcome aboard!</p>
        <p>Best regards,<br>The GroAE Team</p>
    </div>
    <div class="footer">
        <p>GroAE, Inc. | All Rights Reserved</p>
    </div>
</div>
</body>
</html>
