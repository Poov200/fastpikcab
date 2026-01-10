<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fastpikcab FAQ</title>
    <style>
        /* CSS STYLES */
        :root {
            --primary-color: #fbbf24; /* Taxi Yellow color - adjustable */
            --text-dark: #1f2937;
            --text-light: #4b5563;
            --bg-light: #f3f4f6;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: var(--bg-light);
        }

        .faq-section {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .faq-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .faq-header h2 {
            color: var(--text-dark);
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .faq-header p {
            color: var(--text-light);
        }

        /* Accordion Styles */
        details {
            border-bottom: 1px solid #e5e7eb;
            margin-bottom: 10px;
            overflow: hidden;
        }

        details:last-child {
            border-bottom: none;
        }

        summary {
            font-weight: 600;
            color: var(--text-dark);
            cursor: pointer;
            padding: 20px;
            list-style: none; /* Removes default triangle */
            position: relative;
            transition: background 0.3s;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        summary:hover {
            background-color: #fffbeb; /* Light yellow tint on hover */
        }

        /* Custom Plus/Minus Icon */
        summary::after {
            content: '+';
            font-size: 1.5rem;
            color: var(--text-light);
            transition: transform 0.3s ease;
        }

        details[open] summary::after {
            content: '-';
            transform: rotate(180deg);
        }

        /* The Answer Text */
        .faq-content {
            padding: 0 20px 20px 20px;
            color: var(--text-light);
            line-height: 1.6;
            animation: slideDown 0.3s ease-in-out;
        }

        .faq-content ul {
            margin-top: 10px;
            padding-left: 20px;
        }

        .faq-content li {
            margin-bottom: 5px;
        }

        /* Animation */
        @keyframes slideDown {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Responsive */
        @media (max-width: 600px) {
            .faq-section {
                margin: 20px;
                padding: 15px;
            }
            .faq-header h2 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>

    <section class="faq-section">
        <div class="faq-header">
            <h2>Frequency Asked Questions</h2>
            <p>Everything you need to know about Fastpikcab services</p>
        </div>

        <details>
            <summary>What services does Fastpikcab offer?</summary>
            <div class="faq-content">
                We provide a complete range of taxi services across India:
                <ul>
                    <li><strong>Local Trips:</strong> For daily commutes and city sightseeing.</li>
                    <li><strong>Drop Taxi (One-Way):</strong> Pay only for the distance traveled.</li>
                    <li><strong>Airport Transfers:</strong> Reliable pickup/drop for all major airports.</li>
                    <li><strong>Round Trips:</strong> Outstation packages where the cab stays with you.</li>
                </ul>
            </div>
        </details>

        <details>
            <summary>Is Fastpikcab available 24/7?</summary>
            <div class="faq-content">
                Yes, our services are available 24 hours a day, 7 days a week. Whether it's an early morning flight or a late-night emergency, we are ready to serve you anywhere in India.
            </div>
        </details>

        <details>
            <summary>How do I book a cab?</summary>
            <div class="faq-content">
                You can book in 3 easy steps via our website or app:
                1. Enter pickup/drop location and time.
                2. Choose your vehicle.
                3. Confirm booking. You can also call our customer support for assistance.
            </div>
        </details>

        <details>
            <summary>What is your cancellation policy?</summary>
            <div class="faq-content">
                We offer a flexible cancellation policy. You can cancel your booking free of charge up to 2 hours before the scheduled pickup time.
            </div>
        </details>

        <details open> <summary>What is a "Drop Taxi" or "One-Way" service?</summary>
            <div class="faq-content">
                Unlike traditional taxis that charge for a round trip (up and down), Fastpikcab’s Drop Taxi service charges you <strong>only for the distance you travel</strong>. You do not pay for the driver's return journey.
            </div>
        </details>

        <details>
            <summary>Are there any hidden charges?</summary>
            <div class="faq-content">
                No, we believe in transparency. The estimated fare shown is what you pay. However, State Entry Taxes, Toll Charges, and Parking Fees are paid directly by you to the authorities during the trip.
            </div>
        </details>

        <details>
            <summary>How can I pay for my ride?</summary>
            <div class="faq-content">
                We accept Cash, UPI (GPay, PhonePe, Paytm), and Credit/Debit Cards via our app.
            </div>
        </details>

        <details>
            <summary>Are your drivers verified and safe?</summary>
            <div class="faq-content">
                Absolutely. All Fastpikcab drivers undergo background verification and are trained in professional etiquette and highway safety. We also offer real-time ride tracking for your peace of mind.
            </div>
        </details>

    </section>

</body>
</html>
