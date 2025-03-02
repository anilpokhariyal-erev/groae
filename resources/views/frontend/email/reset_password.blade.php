<html>
<body style="margin:0; padding:0; font-family:Arial, sans-serif; background-color:#f9f9f9;">
    <!-- Header Section -->
    <table width="100%" style="background-color:#ffffff; padding:20px 0; text-align:center; border-spacing:0; border:0;">
        <tr>
            <td>
                <a href="https://groae.com" target="_blank">
                    <img src="{{ $app_url }}/images/GroAE_Logo.png" alt="GroAE Logo" width="250" style="margin-bottom:10px;">
                </a>
            </td>
        </tr>
        <tr>
            <td style="font-size:24px; color:#304A6F; font-weight:bold; padding-bottom:10px;">
                Password Reset Request
            </td>
        </tr>
    </table>

    <!-- Content Section -->
    <table width="100%" style="max-width:600px; margin:20px auto; padding:20px; background-color:#ffffff; border-spacing:0; border:0; border-radius:8px; box-shadow:0 4px 10px rgba(0,0,0,0.1);">
        <tr>
            <td style="font-size:16px; color:#304A6F; line-height:1.8; padding:20px;">
                Hi <strong>{{ $name }}</strong>,<br><br>
                We received a request to reset your password. You can reset it by clicking the button below.<br><br>
               <br>
            </td>
        </tr>
        <tr>
            <td style="text-align:center; padding:20px;">
                <a href="{{ route('customer.password.reset', $token)  }}" style="background-color:#304A6F; color:#ffffff; padding:15px 30px; font-size:16px; font-weight:bold; text-decoration:none; border-radius:5px; display:inline-block;">Reset My Password</a>
            </td>
        </tr>
        <tr>
            <td style="font-size:16px; color:#304A6F; line-height:1.8; padding:20px;">
                If you did not request this, you can safely ignore this email. Your password will remain unchanged.<br><br>
                Regards,<br>
                <strong>Team GroAE</strong>
            </td>
        </tr>
    </table>

    <!-- Footer Section -->
    <table width="100%" style="max-width:600px; margin:0 auto; padding:20px 0; background-color:#304A6F; color:#ffffff; text-align:center; border-spacing:0; border:0; border-radius:0 0 8px 8px;">
        <tr>
            <td style="font-size:14px; padding:10px;">
                <strong>Follow us:</strong><br>
                <a href="https://www.facebook.com/GroAEbusinesssetup/" target="_blank" style="color:#ffffff; margin:0 10px; text-decoration:none;">
                    <img src="{{ $app_url }}/images/facebook.png" alt="Facebook" width="24" height="24" style="vertical-align:middle;">
                </a>
                <a href="https://www.instagram.com/gro.ae" target="_blank" style="color:#ffffff; margin:0 10px; text-decoration:none;">
                    <img src="{{ $app_url }}/images/instagram.png" alt="Instagram" width="24" height="24" style="vertical-align:middle;">
                </a>
                <a href="https://www.youtube.com/@GroAE" target="_blank" style="color:#ffffff; margin:0 10px; text-decoration:none;">
                    <img src="{{ $app_url }}/images/youtube.png" alt="YouTube" width="24" height="24" style="vertical-align:middle;">
                </a>
                <a href="https://www.linkedin.com/company/groae/" target="_blank" style="color:#ffffff; margin:0 10px; text-decoration:none;">
                    <img src="{{ $app_url }}/images/linkedin.png" alt="LinkedIn" width="24" height="24" style="vertical-align:middle;">
                </a>
            </td>
        </tr>
        <tr>
            <td style="font-size:12px; line-height:1.6; padding:10px;">
                A Unit of Falcon International Consulting & Auditing L.L.C<br>
                Copyright © Falcon International Consulting & Auditing L.L.C 2024. All rights reserved.
            </td>
        </tr>
        <tr>
            <td style="font-size:12px; line-height:1.6; padding:5px 10px;">
                213 & 214, Millennium Tower, Hamdan Street, Abu Dhabi, UAE
            </td>
        </tr>
        <tr>
            <td style="font-size:12px; line-height:1.6; padding-bottom:10px;">
                Contact: +971559386418
            </td>
        </tr>
    </table>
</body>
</html>
