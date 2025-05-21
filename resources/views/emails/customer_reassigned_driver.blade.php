
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver Reassigned</title>
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
            margin-bottom: 20px;
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
        .content {
            padding: 30px;
        }
        .greeting {
            margin-top: 15px;
            margin-bottom: 20px;
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
            color: #000;
            font-weight: 600;
            margin-bottom: 15px;
        }
        .info-box ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        .info-box li {
            padding: 8px 0;
            border-bottom: 1px solid #f0f0f0;
        }
        .info-box li:last-child {
            border-bottom: none;
        }
        .notice-box {
            background-color: #FFF8E1;
            border-left: 4px solid #FFC107;
            padding: 15px;
            border-radius: 4px;
            margin-bottom: 25px;
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
            background-color: #eaeaea;
            margin: 25px 0;
        }
        .amount {
            font-weight: bold;
            color: #000;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Driver Reassigned for Your Booking</h1>
        </div>

        <div class="content">
            <div class="greeting">
                <h2>Hello {{ $booking->name }},</h2>
            </div>

            <div class="notice-box">
                <p>We apologize for the inconvenience, but your assigned driver has been changed for your upcoming booking.</p>
            </div>

            <div class="info-box">
                <h3>New Driver Details:</h3>
                <ul>
                    <li><strong>Name:</strong> {{ $driver->name }}</li>
                    <li><strong>Phone:</strong> {{ $driver->phone }}</li>
                    <li><strong>Email:</strong> {{ $driver->email }}</li>
                </ul>
            </div>

            <div class="info-box">
                <h3>Booking Details:</h3>
                <ul>
                    <li><strong>Pickup Location:</strong> {{ $booking->pickup }}</li>
                    <li><strong>Drop Location:</strong> {{ $booking->destination }}</li>
                    <li><strong>Date & Time:</strong> {{ \Carbon\Carbon::parse($booking->booking_date)->format('F j, Y h:i A') }}</li>
                    <li><strong>Amount:</strong> <span class="amount">₹{{ $booking->assigned_amount }}</span></li>
                </ul>
            </div>

            <p>Your new driver will call you 30 minutes before the scheduled pickup time. Please ensure your phone is accessible.</p>

            <p>If you have any questions or concerns about this change, please don't hesitate to contact our customer support team.</p>

            <div class="divider"></div>

            <p>Thank you for choosing FASTPIK. We appreciate your understanding.</p>

            <p>— FASTPIK Team</p>
        </div>

        <div class="footer">
            <p>FASTPIK - Your Reliable Travel Partner</p>
            <p>&copy;FASTPIK. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
