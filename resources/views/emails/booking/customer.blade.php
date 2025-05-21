
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FASTPIK Booking Confirmation</title>
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
            margin-bottom: 20px; /* Added space after header */
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
            margin-top: 15px; /* Added extra space after header */
            margin-bottom: 20px;
        }
        .booking-details {
            background-color: #FFFDF0;
            border-left: 4px solid #FFD700;
            padding: 20px;
            margin-bottom: 25px;
            border-radius: 4px;
        }
        .booking-item {
            margin-bottom: 10px;
            display: flex;
        }
        .booking-label {
            font-weight: 600;
            width: 120px;
            color: #000;
        }
        .booking-value {
            flex: 1;
        }
        .additional-info {
            background-color: #FFFDF0;
            border-left: 4px solid #FFD700;
            padding: 20px;
            margin-bottom: 25px;
            border-radius: 4px;
        }
        .additional-info h3 {
            margin-top: 0;
            font-weight: 600;
        }
        .important-note {
            background-color: #000;
            color: #FFD700;
            padding: 15px;
            border-radius: 4px;
            margin-bottom: 25px;
            font-weight: 600;
            text-align: center;
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
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Thank you for your booking with FASTPIK!</h1>
        </div>

        <div class="content">
            <div class="greeting">
                <p>Dear {{ $booking->name }},</p>
            </div>

            <p>Thank you for booking with us. Here are your booking details:</p>

            <div class="booking-details">
                <div class="booking-item">
                    <div class="booking-label">Pickup:</div>
                    <div class="booking-value">{{ $booking->pickup }}</div>
                </div>

                <div class="booking-item">
                    <div class="booking-label">Destination:</div>
                    <div class="booking-value">{{ $booking->destination }}</div>
                </div>

                <div class="booking-item">
                    <div class="booking-label">Date:</div>
                    <div class="booking-value">{{ \Carbon\Carbon::parse($booking->date)->format('F j, Y') }}</div>
                </div>

                <div class="booking-item">
                    <div class="booking-label">Time:</div>
                    <div class="booking-value">{{ \Carbon\Carbon::parse($booking->time)->format('h:i A') }}</div>
                </div>

                <div class="booking-item">
                    <div class="booking-label">Passengers:</div>
                    <div class="booking-value">{{ $booking->passengers }}</div>
                </div>

                <div class="booking-item">
                    <div class="booking-label">Vehicle:</div>
                    <div class="booking-value">{{ $booking->vehicle }}</div>
                </div>

                <div class="booking-item">
                    <div class="booking-label">Trip Type:</div>
                    <div class="booking-value">{{ $booking->tripType }}</div>
                </div>
            </div>

            <div class="important-note">
                Our driver will call you 30 minutes before the scheduled pickup time. Please ensure your phone is accessible.
            </div>

            <div class="additional-info">
                <h3>Additional Information</h3>
                <p><strong>Please Note:</strong> The following charges are not included in the base fare and will be collected separately if applicable:</p>
                <ul>
                    <li><strong>Toll Charges:</strong> Any toll fees encountered during the journey</li>
                    <li><strong>Permits:</strong> Special area entry permits</li>
                    <li><strong>Hill Station Charges:</strong> Additional fees for hill station routes</li>
                    <li><strong>Driver Beta:</strong> Food allowance for long journeys</li>
                    <li><strong>Parking:</strong> Any parking fees at destinations</li>
                </ul>
            </div>

            <div class="additional-info">
                <h3>Useful Information</h3>
                <ul>
                    <li>Please be ready at the pickup location 5 minutes before the scheduled time.</li>
                    <li>For any changes to your booking, please contact us at least 2 hours before the scheduled pickup.</li>
                    <li>In case of any delays or emergencies, please contact our customer support.</li>
                </ul>
            </div>

            <p>We look forward to serving you!</p>

            <div class="divider"></div>

            <p>Thanks,<br>FASTPIK Team</p>
        </div>

        <div class="footer">
            <p>&copy;FASTPIK. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
