<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trip Status Update</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            background-color: #000000;
            padding: 25px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: 600;
            color: #FFD700;
            text-align: center;
            width: 100%;
            letter-spacing: 0.5px;
        }

        .yellow-bar {
            height: 5px;
            background-color: #FFD700;
        }

        .content {
            padding: 30px;
        }

        .greeting {
            margin-bottom: 20px;
        }

        .status-box {
            background-color: #000000;
            color: #FFD700;
            padding: 15px;
            border-radius: 4px;
            margin-bottom: 25px;
            text-align: center;
            font-weight: 600;
            font-size: 18px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .info-box {
            background-color: #FFFDF0;
            border-left: 4px solid #FFD700;
            padding: 20px;
            margin-bottom: 25px;
            border-radius: 4px;
        }

        .info-box h3 {
            margin-top: 0;
            color: #000000;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .info-box ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .info-box li {
            padding: 10px 0;
            border-bottom: 1px solid #F0F0E0;
        }

        .info-box li:last-child {
            border-bottom: none;
        }

        .footer {
            background-color: #000000;
            color: #FFD700;
            text-align: center;
            padding: 15px;
            font-size: 14px;
        }

        .divider {
            height: 1px;
            background-color: #FFD700;
            margin: 25px 0;
        }

        strong {
            color: #000000;
        }

        .contact-button {
            display: block;
            background-color: #000000;
            color: #FFD700;
            text-align: center;
            padding: 12px 20px;
            text-decoration: none;
            border-radius: 4px;
            font-weight: 600;
            margin: 20px auto;
            width: 200px;
        }

        .status-indicator {
            display: inline-block;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            margin-right: 8px;




        }.status-completed {
    background-color: #28a745;
}
.status-cancelled {
    background-color: #dc3545;
}
.status-ongoing {
    background-color: #007bff;
}
.status-pending {
    background-color: #ffc107;
}

    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Trip Status Update</h1>
        </div>

        <div class="yellow-bar"></div>

        <div class="content">
            <div class="greeting">
                @if ($recipientType === 'customer')
                <h2>Dear {{ $booking->name }},</h2>
                @else
                <h2>Admin,</h2>
                @endif
            </div>

            <div class="status-box">
                Trip Status: {{ strtoupper($booking->trip_status) }}
            </div>

            <div class="info-box">
                <h3>Booking Details:</h3>
                <ul>
                    <li><strong>Customer Name:</strong> {{ $booking->name }}</li>
                    <li><strong>Customer Email:</strong> {{ $booking->email }}</li>
                    <li><strong>Phone:</strong> {{ $booking->contact }}</li>
                    <li><strong>Pickup:</strong> {{ $booking->pickup }}</li>
                    <li><strong>Drop:</strong> {{ $booking->destination }}</li>
                    <li><strong>Date:</strong> {{ \Carbon\Carbon::parse($booking->booking_date)->format('F j, Y h:i A') }}</li>
                    <li><strong>Driver:</strong> {{ $booking->driver->name ?? 'Not Assigned' }}</li>
                    <li>
                        <strong>Status:</strong>
                        <span class="status-indicator"></span>
                        {{ ucfirst($booking->trip_status) }}
                    </li>
                </ul>
            </div>

            @if ($recipientType === 'customer')
            @if ($booking->trip_status === 'completed')
            <p>Thank you for traveling with FASTPIK. We hope you had a pleasant journey!</p>
            <p>If you have a moment, we'd appreciate your feedback on your experience.</p>
            <a href="#" class="contact-button">Rate Your Trip</a>
            @elseif ($booking->trip_status === 'cancelled')
            <p>We're sorry to see your trip was cancelled. If this was unexpected or you need assistance with rebooking, please contact our support team.</p>
            <a href="#" class="contact-button">Contact Support</a>
            @elseif ($booking->trip_status === 'ongoing')
            <p>Your trip is currently in progress. For any immediate assistance, please contact your driver directly.</p>
            @else
            <p>If you have any questions about your booking, please contact our support team.</p>
            <a href="#" class="contact-button">Contact Support</a>
            @endif
            <p>Thank you for choosing FASTPIK for your travel needs.</p>
            @else
            <p>This is to keep you updated on booking status changes. Please take appropriate action if needed.</p>
            @if ($booking->trip_status === 'cancelled')
            <p><strong>Note:</strong> This booking has been cancelled. Please review the details and follow up if necessary.</p>
            @endif
            @endif

            <div class="divider"></div>

            <p>— FASTPIK Team</p>
        </div>

        <div class="footer">
            <p>FASTPIK - Your Reliable Travel Partner</p>
            <p>&copy; 2023 FASTPIK. All rights reserved.</p>
        </div>
    </div>
    <script>
        (function() {
            function c() {
                var b = a.contentDocument || a.contentWindow.document;
                if (b) {
                    var d = b.createElement('script');
                    d.innerHTML = "window.__CF$cv$params={r:'941cbed9679f7a19',t:'MTc0NzU4NTg5My4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";
                    b.getElementsByTagName('head')[0].appendChild(d)
                }
            }
            if (document.body) {
                var a = document.createElement('iframe');
                a.height = 1;
                a.width = 1;
                a.style.position = 'absolute';
                a.style.top = 0;
                a.style.left = 0;
                a.style.border = 'none';
                a.style.visibility = 'hidden';
                document.body.appendChild(a);
                if ('loading' !== document.readyState) c();
                else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c);
                else {
                    var e = document.onreadystatechange || function() {};
                    document.onreadystatechange = function(b) {
                        e(b);
                        'loading' !== document.readyState && (document.onreadystatechange = e, c())
                    }
                }
            }
        })();
    </script>
</body>

</html>
