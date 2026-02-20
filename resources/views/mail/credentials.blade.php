<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Your Account is Approved – Login Details</title>

    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            background: #f3f4f6;
            font-family: Helvetica, Arial, sans-serif;
            -webkit-font-smoothing: antialiased;
        }

        table,
        td {
            border-collapse: collapse;
        }

        img {
            border: 0;
            max-width: 100%;
            height: auto;
        }

        a {
            color: #6366f1;
            text-decoration: none;
        }

        .container {
            max-width: 580px;
            margin: 0 auto;
        }

        .btn {
            display: inline-block;
            padding: 14px 32px;
            background: #6366f1;
            color: #ffffff !important;
            font-weight: 600;
            border-radius: 8px;
            text-decoration: none;
        }

        .password-box {
            background: #f1f5f9;
            padding: 16px 24px;
            border-radius: 8px;
            font-family: monospace;
            font-size: 20px;
            font-weight: 600;
            letter-spacing: 2px;
            color: #111827;
            text-align: center;
            border: 1px solid #d1d5db;
        }

        @media only screen and (max-width:600px) {
            .container {
                width: 100% !important;
            }

            .pad {
                padding: 24px 16px !important;
            }

            .btn {
                width: 100% !important;
                box-sizing: border-box;
                text-align: center;
            }
        }
    </style>
</head>

<body style="margin:0; padding:0; background:#f3f4f6;">

    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="background:#f3f4f6; padding:30px 10px;">
        <tr>
            <td align="center">

                <table class="container" border="0" cellspacing="0" cellpadding="0"
                    style="background:#ffffff; border-radius:12px; overflow:hidden; box-shadow:0 4px 16px rgba(0,0,0,0.06);">

                    <!-- Header -->
                    <tr>
                        <td align="center"
                            style="background:#6366f1; padding:40px 30px; color:#ffffff; text-align:center;">
                            <h1 style="margin:0; font-size:28px; font-weight:700;">Welcome! Your Account is Approved
                            </h1>
                            <p style="margin:12px 0 0; font-size:16px; opacity:0.95;">You can now access your dashboard
                            </p>
                        </td>
                    </tr>

                    <!-- Content -->
                    <tr>
                        <td class="pad"
                            style="padding:40px 30px 32px; text-align:center; color:#374151; font-size:15px; line-height:1.6;">

                            <p style="margin:0 0 24px;">
                                Hi <strong>{{ $client->name ?? ($client->shop_name ?? 'there') }}</strong>,
                            </p>

                            <p style="margin:0 0 24px;">
                                Great news — your registration has been <strong>approved</strong>!<br>
                                Your account is now active. Use the credentials below to log in for the first time.
                            </p>

                            <div style="margin:32px 0 40px;">
                                <div style="font-weight:600; color:#4b5563; margin-bottom:12px; font-size:15px;">Your
                                    Login Details</div>

                                <table border="0" cellspacing="0" cellpadding="0" width="100%"
                                    style="max-width:360px; margin:0 auto 24px;">
                                    <tr>
                                        <td
                                            style="padding:12px 0; border-bottom:1px solid #e5e7eb; text-align:left; font-size:15px;">
                                            <strong>Email:</strong>
                                        </td>
                                        <td
                                            style="padding:12px 0; border-bottom:1px solid #e5e7eb; text-align:right; font-size:15px;">
                                            {{ $client->email }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="padding:12px 0; border-bottom:1px solid #e5e7eb; text-align:left; font-size:15px;">
                                            <strong>Temporary Password:</strong>
                                        </td>
                                        <td style="padding:12px 0; border-bottom:1px solid #e5e7eb; text-align:right;">
                                            <div class="password-box">{{ $password }}</div>
                                        </td>
                                    </tr>
                                </table>

                                <p style="margin:0 0 20px; font-size:14px; color:#6b7280;">
                                    <strong>Important security notice:</strong><br>
                                    For your safety, please <strong>change your password immediately</strong> after your
                                    first login.
                                </p>
                            </div>

                            <p style="margin:0 0 32px;">
                                <a href="{{ url('/client') }}" class="btn"
                                    style="color:#ffffff !important;">Login to Your Dashboard →</a>
                            </p>

                            <p style="margin:0 0 12px; font-size:14px; color:#6b7280;">
                                If you didn’t request this approval or believe this is an error,<br>
                                please contact us immediately at <a
                                    href="mailto:support@yourdomain.com">support@yourdomain.com</a>.
                            </p>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td align="center"
                            style="background:#111827; color:#9ca3af; padding:28px 30px; font-size:13px; line-height:1.5;">
                            © {{ date('Y') }} {{ config('app.name', 'Your Platform') }}<br>
                            This is an automated message — please do not reply directly.
                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>

</html>
