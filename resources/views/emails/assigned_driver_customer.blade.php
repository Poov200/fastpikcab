
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FASTPIK Driver Assignment</title>
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
        .driver-details {
            background-color: #FFFDF0;
            border-left: 4px solid #FFD700;
            padding: 20px;
            margin-bottom: 25px;
            border-radius: 4px;
        }
        .driver-details h3 {
            margin-top: 0;
            color: #000;
            font-weight: 600;
            margin-bottom: 15px;
        }
        .driver-details ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        .driver-details li {
            padding: 8px 0;
            border-bottom: 1px solid #f0f0f0;
        }
        .driver-details li:last-child {
            border-bottom: none;
        }
        .amount-box {
            background-color: #000;
            color: #FFD700;
            padding: 15px;
            border-radius: 4px;
            margin-bottom: 25px;
            font-weight: 600;
            text-align: center;
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
            background-color: #eaeaea;
            margin: 25px 0;
        }
        .driver-icon {
            text-align: center;
            margin-bottom: 20px;
        }
        .driver-icon svg {
            width: 60px;
            height: 60px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Driver Assigned to Your Booking</h1>
        </div>

        <div class="content">
            <div class="greeting">
                <p>Hi {{ $booking->name }},</p>
                <p>Great news! Your driver has been assigned for your upcoming trip with FASTPIK.</p>
            </div>

            <div class="driver-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFD700">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/>
                </svg>
            </div>

            <div class="driver-details">
                <h3>Driver Details:</h3>
                <ul>
                    <li><strong>Name:</strong> {{ $driver->name }}</li>
                    <li><strong>Contact:</strong> {{ $driver->phone }}</li>
                    <li><strong>Email:</strong> {{ $driver->email }}</li>
                </ul>
            </div>

            <div class="amount-box">
                Assigned Amount: {{ $booking->assigned_amount }}
            </div>

            <p>Your driver will call you 30 minutes before the scheduled pickup time. Please ensure your phone is accessible.</p>

            <p>If you need to contact your driver before your trip, you can use the contact details provided above.</p>

            <div class="divider"></div>

            <p>Thank you for choosing FASTPIK for your travel needs. We hope you have a pleasant journey!</p>
        </div>

        <div class="footer">
            <p>FASTPIK - Your Reliable Travel Partner</p>
            <p>&copy; 2023 FASTPIK. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
