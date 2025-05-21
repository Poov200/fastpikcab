
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Booking Assigned</title>
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
        .amount-box {
            background-color: #000000;
            color: #FFD700;
            padding: 15px;
            border-radius: 4px;
            margin-bottom: 25px;
            text-align: center;
            font-weight: 600;
            font-size: 18px;
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
        .icon-container {
            text-align: center;
            margin: 20px 0;
        }
        .icon-container svg {
            width: 60px;
            height: 60px;
            fill: #000000;
        }
        .important-note {
            background-color: #FFF8E1;
            border-left: 4px solid #FFD700;
            padding: 15px;
            border-radius: 4px;
            margin-bottom: 25px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>New Booking Assigned</h1>
        </div>

        <div class="yellow-bar"></div>

        <div class="content">
            <div class="greeting">
                <h2>Hello {{ $booking->driver->name }},</h2>
                <p>You have been assigned a new booking. Below are the details:</p>
            </div>

            <div class="icon-container">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.21.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.5 16c-.83 0-1.5-.67-1.5-1.5S5.67 13 6.5 13s1.5.67 1.5 1.5S7.33 16 6.5 16zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM5 11l1.5-4.5h11L19 11H5z"/>
                </svg>
            </div>

            <div class="info-box">
                <h3>Customer Details:</h3>
                <ul>
                    <li><strong>Name:</strong> {{ $booking->name }}</li>
                    <li><strong>Phone:</strong> {{ $booking->contact }}</li>
                    <li><strong>Email:</strong> {{ $booking->email }}</li>
                </ul>
            </div>

            <div class="info-box">
                <h3>Booking Details:</h3>
                <ul>
                    <li><strong>Pickup Location:</strong> {{ $booking->pickup }}</li>
                    <li><strong>Drop Location:</strong> {{ $booking->destination }}</li>
                    <li><strong>Date & Time:</strong> {{ \Carbon\Carbon::parse($booking->booking_date)->format('F j, Y h:i A') }}</li>
                </ul>
            </div>

            <div class="amount-box">
                Assigned Amount: ₹{{ $booking->assigned_amount }}
            </div>

            <div class="important-note">
                <p><strong>Important:</strong> Please call the customer 30 minutes before the scheduled pickup time to confirm the trip details.</p>
            </div>

            <p>Please get in touch with the customer and be on time. Providing excellent service is our priority.</p>

            <a href="tel:{{ $booking->contact }}" class="contact-button">Call Customer</a>

            <div class="divider"></div>

            <p>Thank you for your service with FASTPIK.</p>

            <p>— FASTPIK Team</p>
        </div>

        <div class="footer">
            <p>FASTPIK - Your Reliable Travel Partner</p>
            <p>&copy;FASTPIK. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
