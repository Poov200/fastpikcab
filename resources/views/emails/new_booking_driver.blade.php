
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
        .booking-details {
            background-color: #FFFDF0;
            border-left: 4px solid #FFD700;
            padding: 20px;
            margin-bottom: 25px;
            border-radius: 4px;
        }
        .booking-details h3 {
            margin-top: 0;
            color: #000000;
            font-weight: 600;
            margin-bottom: 15px;
        }
        .booking-details ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        .booking-details li {
            padding: 10px 0;
            border-bottom: 1px solid #F0F0E0;
        }
        .booking-details li:last-child {
            border-bottom: none;
        }
        .alert-box {
            background-color: #000000;
            color: #FFD700;
            padding: 15px;
            border-radius: 4px;
            margin-bottom: 25px;
            text-align: center;
            font-weight: 600;
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
        .booking-id {
            font-weight: bold;
            color: #000000;
            font-size: 18px;
        }
        .important-note {
            background-color: #FFF8E1;
            border-left: 4px solid #FFD700;
            padding: 15px;
            border-radius: 4px;
            margin-bottom: 25px;
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
                <h2>Hi {{ $booking->driver->name ?? 'Driver' }},</h2>
                <p>A new booking has been assigned to you. Here are the details:</p>
            </div>

            <div class="icon-container">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.21.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.5 16c-.83 0-1.5-.67-1.5-1.5S5.67 13 6.5 13s1.5.67 1.5 1.5S7.33 16 6.5 16zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM5 11l1.5-4.5h11L19 11H5z"/>
                </svg>
            </div>

            <div class="alert-box">
                Booking ID: {{ $booking->booking_id }}
            </div>

            <div class="booking-details">
                <h3>Customer Details:</h3>
                <ul>
                    <li><strong>Name:</strong> {{ $booking->name }}</li>
                    <li><strong>Phone:</strong> {{ $booking->contact }}</li>
                </ul>
            </div>

            <div class="booking-details">
                <h3>Trip Details:</h3>
                <ul>
                    <li><strong>Pickup Location:</strong> {{ $booking->pickup }}</li>
                    <li><strong>Destination:</strong> {{ $booking->destination }}</li>
                    <li><strong>Trip Type:</strong> {{ $booking->tripType }}</li>
                    <li><strong>Passengers:</strong> {{ $booking->passengers }}</li>
                    <li><strong>Date & Time:</strong> {{ $booking->date }} {{ $booking->time }}</li>
                </ul>
            </div>

            <div class="important-note">
                <p><strong>Important:</strong> Please call the customer 30 minutes before the scheduled pickup time to confirm the trip details.</p>
            </div>

            <p>Please contact the customer directly to coordinate the trip. Ensure you arrive at the pickup location on time and provide excellent service.</p>

            <a href="tel:{{ $booking->contact }}" class="contact-button">Call Customer</a>

            <div class="divider"></div>

            <p>Thank you for your service with FASTPIK.</p>

            <p>— FASTPIK Team</p>
        </div>

        <div class="footer">
            <p>FASTPIK - Your Reliable Travel Partner</p>
            <p>&copy; 2023 FASTPIK. All rights reserved.</p>
        </div>
    </div>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'941cc61440c47ea6',t:'MTc0NzU4NjE4OS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>
