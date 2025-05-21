<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Contacting Us</title>
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
        .message-box {
            background-color: #FFFDF0;
            border-left: 4px solid #FFD700;
            padding: 20px;
            margin-bottom: 25px;
            border-radius: 4px;
        }
        .message-box h3 {
            margin-top: 0;
            color: #000000;
            font-weight: 600;
            margin-bottom: 15px;
        }
        .message-content {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 4px;
            margin-top: 15px;
            border: 1px solid #eee;
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
        .subject-box {
            background-color: #000000;
            color: #FFD700;
            padding: 15px;
            border-radius: 4px;
            margin-bottom: 15px;
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
        .contact-info {
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 4px;
            margin-top: 25px;
            text-align: center;
        }
        .contact-info p {
            margin: 5px 0;
        }
        .social-icons {
            text-align: center;
            margin-top: 20px;
        }
        .social-icons a {
            display: inline-block;
            margin: 0 10px;
            text-decoration: none;
        }
        .social-icons svg {
            width: 24px;
            height: 24px;
            fill: #000000;
        }
        .thank-you-message {
            text-align: center;
            font-size: 18px;
            font-weight: 500;
            margin: 20px 0;
            color: #000000;
        }
        .signature {
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Thank You for Contacting Us</h1>
        </div>

        <div class="yellow-bar"></div>

        <div class="content">
            <div class="greeting">
                <h2>Dear {{ $contactMessage->name }},</h2>
                <p>Thank you for reaching out to us. We have received your message and our team will review it promptly.</p>
            </div>

            <div class="icon-container">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                </svg>
            </div>

            <div class="thank-you-message">
                Your message has been successfully received!
            </div>

            <p>We strive to respond to all inquiries within 24 hours during business days. A member of our team will get back to you as soon as possible.</p>

            <div class="message-box">
                <h3>Here is a copy of your message:</h3>
                <div class="subject-box">
                    {{ $contactMessage->subject }}
                </div>
                <div class="message-content">
                    {{ $contactMessage->message }}
                </div>
            </div>

            <div class="divider"></div>

            <div class="contact-info">
                <p>If you need immediate assistance, please contact us at:</p>
                <p><strong>Phone:</strong> +91 1234567890</p>
                <p><strong>Email:</strong> support@fastpikcab.com</p>
            </div>

            <div class="social-icons">
                <a href="#" title="Facebook">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M12 2.04C6.5 2.04 2 6.53 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.85C10.44 7.34 11.93 5.96 14.22 5.96C15.31 5.96 16.45 6.15 16.45 6.15V8.62H15.19C13.95 8.62 13.56 9.39 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96A10 10 0 0 0 22 12.06C22 6.53 17.5 2.04 12 2.04Z"/>
                    </svg>
                </a>
                <a href="#" title="Twitter">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                    </svg>
                </a>
                <a href="#" title="Instagram">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                </a>
            </div>

            <div class="signature">
                <p>Best regards,</p>
                <p><strong>FASTPIK Team</strong></p>
            </div>
        </div>

        <div class="footer">
            <p>FASTPIK - Your Reliable Travel Partner</p>
            <p>&copy; 2023 FASTPIK. All rights reserved.</p>
        </div>
    </div>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'942ab7c321717fda',t:'MTc0NzczMjQwNC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>
