<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>New Client Request — {{ $client->shop_name ?? 'New Business' }}</title>

  <!-- ===== Google Fonts (safe fallback) ===== -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  <style type="text/css">
    /* Reset */
    body { margin:0; padding:0; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; }
    table, td, img { border:0; border-collapse: collapse; }
    img { max-width:100%; height:auto; }

    body, table, td, a {
      font-family: 'Inter', Helvetica, Arial, sans-serif;
      color: #1f2937;
    }

    .container { max-width: 600px; margin: 0 auto; }

    /* Dark mode neutral support */
    @media (prefers-color-scheme: dark) {
      body, .bg-white { background: #111827 !important; color: #e5e7eb !important; }
      .bg-gray { background: #1f2937 !important; }
      .text-dark { color: #f3f4f6 !important; }
      .text-muted { color: #9ca3af !important; }
    }

    @media only screen and (max-width: 600px) {
      .container { width: 100% !important; }
      .stack { display: block !important; width: 100% !important; }
      .pad { padding: 24px !important; }
      .center-mobile { text-align: center !important; }
    }
  </style>
</head>
<body style="margin:0; padding:0; background:#f3f4f6;">

  <table role="presentation" width="100%" border="0" cellspacing="0" cellpadding="0" style="background:#f3f4f6; padding:30px 10px;">
    <tr>
      <td align="center">

        <!-- Main Container -->
        <table class="container" role="presentation" border="0" cellspacing="0" cellpadding="0" style="background:#ffffff; border-radius:16px; overflow:hidden; box-shadow:0 4px 20px rgba(0,0,0,0.08);">

          <!-- Header -->
          <tr>
            <td align="center" style="background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%); padding:48px 30px 40px; color:#ffffff; text-align:center;">
              <h1 style="margin:0; font-size:30px; font-weight:700; line-height:1.15;">{{ $client->shop_name ?? 'New Business' }}</h1>
              <p style="margin:8px 0 24px; font-size:16px; opacity:0.95;">New Client Registration Request</p>

              <div style="display:inline-block; background:rgba(255,255,255,0.22); backdrop-filter:blur(6px); padding:8px 20px; border-radius:50px; font-size:14px; font-weight:500; border:1px solid rgba(255,255,255,0.3);">
                Pending Review
              </div>

              <!-- Logo – placed lower -->
              <div style="margin:32px auto 0; width:90px; height:90px; background:#ffffff; border-radius:16px; padding:10px; box-shadow:0 8px 24px rgba(0,0,0,0.2); overflow:hidden;">
                @if($client->logo && trim($client->logo) !== '')
                  <img src="{{ $client->logo }}" alt="{{ $client->shop_name ?? 'Logo' }}" style="width:100%; height:100%; object-fit:contain; display:block;">
                @else
                  <div style="width:100%; height:100%; background:linear-gradient(135deg, #6366f1, #8b5cf6); color:#ffffff; font-size:40px; font-weight:700; display:flex; align-items:center; justify-content:center; border-radius:10px;">
                    {{ strtoupper(substr(trim($client->shop_name ?? $client->name ?? 'N'), 0, 2)) }}
                  </div>
                @endif
              </div>
            </td>
          </tr>

          <!-- Content -->
          <tr>
            <td class="pad" style="padding:40px 30px 36px; text-align:center;">
              <div style="display:inline-flex; align-items:center; gap:10px; background:#f1f5f9; padding:10px 24px; border-radius:50px; font-size:14px; font-weight:500; color:#374151; margin-bottom:28px;">
                <span style="width:10px; height:10px; background:#10b981; border-radius:50%; animation:pulse 2.4s infinite;"></span>
                New request received
              </div>

              <h2 style="margin:0 0 12px; font-size:24px; font-weight:700; color:#111827;">Client Information</h2>
              <p style="margin:0 0 36px; font-size:16px; line-height:1.6; color:#4b5563;">
                A new business has submitted a request to join your platform.<br>Please review the details below.
              </p>

              <!-- Details Grid (table-based for Outlook) -->
              <table role="presentation" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-bottom:40px;">
                <tr>
                  <td width="50%" valign="top" style="padding:0 10px 20px;">
                    <table role="presentation" width="100%" border="0" cellspacing="0" cellpadding="0" style="background:#f9fafb; border-radius:12px; padding:18px; border:1px solid #e5e7eb;">
                      <tr><td style="font-size:12px; font-weight:600; color:#6b7280; text-transform:uppercase; letter-spacing:0.4px;">Owner</td></tr>
                      <tr><td style="font-size:16px; font-weight:600; color:#111827; padding-top:4px;">{{ $client->name ?? '—' }}</td></tr>
                    </table>
                  </td>
                  <td width="50%" valign="top" style="padding:0 10px 20px;">
                    <table role="presentation" width="100%" border="0" cellspacing="0" cellpadding="0" style="background:#f9fafb; border-radius:12px; padding:18px; border:1px solid #e5e7eb;">
                      <tr><td style="font-size:12px; font-weight:600; color:#6b7280; text-transform:uppercase; letter-spacing:0.4px;">Business Name</td></tr>
                      <tr><td style="font-size:16px; font-weight:600; color:#111827; padding-top:4px;">{{ $client->shop_name ?? '—' }}</td></tr>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td width="50%" valign="top" style="padding:0 10px 20px;">
                    <table role="presentation" width="100%" border="0" cellspacing="0" cellpadding="0" style="background:#f9fafb; border-radius:12px; padding:18px; border:1px solid #e5e7eb;">
                      <tr><td style="font-size:12px; font-weight:600; color:#6b7280; text-transform:uppercase; letter-spacing:0.4px;">Phone</td></tr>
                      <tr><td style="font-size:16px; font-weight:600; color:#111827; padding-top:4px;">{{ $client->contact ?? '—' }}</td></tr>
                    </table>
                  </td>
                  <td width="50%" valign="top" style="padding:0 10px 20px;">
                    <table role="presentation" width="100%" border="0" cellspacing="0" cellpadding="0" style="background:#f9fafb; border-radius:12px; padding:18px; border:1px solid #e5e7eb;">
                      <tr><td style="font-size:12px; font-weight:600; color:#6b7280; text-transform:uppercase; letter-spacing:0.4px;">Email</td></tr>
                      <tr><td style="font-size:16px; font-weight:600; color:#111827; padding-top:4px;">
                        <a href="mailto:{{ $client->email ?? '' }}" style="color:#6366f1; text-decoration:none;">{{ $client->email ?? '—' }}</a>
                      </td></tr>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td colspan="2" style="padding:0 10px;">
                    <table role="presentation" width="100%" border="0" cellspacing="0" cellpadding="0" style="background:#f9fafb; border-radius:12px; padding:18px; border:1px solid #e5e7eb;">
                      <tr><td style="font-size:12px; font-weight:600; color:#6b7280; text-transform:uppercase; letter-spacing:0.4px;">Address</td></tr>
                      <tr><td style="font-size:16px; font-weight:600; color:#111827; padding-top:4px;">{{ $client->address ?? '—' }}</td></tr>
                    </table>
                  </td>
                </tr>
              </table>

              <h2 style="margin:0 0 24px; font-size:22px; font-weight:700; color:#111827;">Actions</h2>

              <table role="presentation" border="0" cellspacing="0" cellpadding="0" style="margin:0 auto;">
                <tr>
                  <td style="padding:0 8px;">
                    <a href="/admin" style="display:inline-block; min-width:160px; padding:14px 28px; background:#10b981; color:#ffffff; font-size:15px; font-weight:600; text-decoration:none; border-radius:10px;">Approve</a>
                  </td>
                  <td style="padding:0 8px;">
                    <a href="/admin" style="display:inline-block; min-width:160px; padding:14px 28px; background:#3b82f6; color:#ffffff; font-size:15px; font-weight:600; text-decoration:none; border-radius:10px;">Review</a>
                  </td>
                  <td style="padding:0 8px;">
                    <a href="/admin" style="display:inline-block; min-width:160px; padding:14px 28px; background:#ef4444; color:#ffffff; font-size:15px; font-weight:600; text-decoration:none; border-radius:10px;">Decline</a>
                  </td>
                </tr>
              </table>
            </td>
          </tr>

          <!-- Footer -->
          <tr>
            <td align="center" style="background:#111827; color:#9ca3af; padding:28px 30px; font-size:14px; line-height:1.5;">
              This is an automated notification.<br>
              © {{ date('Y') }} • Your Platform
            </td>
          </tr>

        </table>

      </td>
    </tr>
  </table>

  <!-- Pulse animation (safe) -->
  <style>
    @keyframes pulse { 0%,100% { transform:scale(1); opacity:1; } 50% { transform:scale(1.4); opacity:0.7; } }
  </style>

</body>
</html>
