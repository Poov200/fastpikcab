

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
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
        .info-item {
            padding: 10px 0;
            border-bottom: 1px solid #F0F0E0;
        }
        .info-item:last-child {
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
            font-weight: 600;
        }
        .message-box {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 4px;
            margin-top: 15px;
            border: 1px solid #eee;
        }
        .subject-box {
            background-color: #000000;
            color: #FFD700;
            padding: 15px;
            border-radius: 4px;
            margin-bottom: 25px;
            text-align: center;
            font-weight: 600;
            font-size: 18px;
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
        .action-button {
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
        .timestamp {
            text-align: right;
            font-size: 14px;
            color: #777;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>New Contact Form Submission</h1>
        </div>

        <div class="yellow-bar"></div>

        <div class="content">
            <div class="icon-container">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                </svg>
            </div>

            <div class="subject-box">
                {{ $contactMessage->subject }}
            </div>

            <div class="info-box">
                <h3>Contact Information:</h3>
                <div class="info-item">
                    <strong>Name:</strong> {{ $contactMessage->name }}
                </div>
                <div class="info-item">
                    <strong>Email:</strong> {{ $contactMessage->email }}
                </div>
                <div class="info-item">
                    <strong>Phone:</strong> {{ $contactMessage->phone ?? 'N/A' }}
                </div>
            </div>

            <div class="info-box">
                <h3>Message:</h3>
                <div class="message-box">
                    {{ $contactMessage->message }}
                </div>
            </div>

            <div class="timestamp">
                Submitted on: {{ date('F j, Y h:i A') }}
            </div>

            <div class="divider"></div>

            <p>This message was sent through the FASTPIK contact form. Please respond to the customer as soon as possible.</p>

            <a href="mailto:{{ $contactMessage->email }}" class="action-button">Reply Now</a>
        </div>

        <div class="footer">
            <p>FASTPIK - Your Reliable Travel Partner</p>
            <p>&copy; 2023 FASTPIK. All rights reserved.</p>
        </div>
    </div>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'942ab3c5d09d7f69',t:'MTc0NzczMjI0MC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>

