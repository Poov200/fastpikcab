
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FastPik - Under Maintenance</title>
   
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8fafc;
        }
        .maintenance-car {
            animation: drive 8s infinite linear;
        }
        @keyframes drive {
            0% {
                transform: translateX(-100%);
            }
            100% {
                transform: translateX(100vw);
            }
        }
        .progress-bar {
            animation: progress 3s infinite ease-in-out;
            background: linear-gradient(90deg, #fbbf24, #f59e0b, #d97706);
            background-size: 200% 100%;
        }
        @keyframes progress {
            0% {
                background-position: 0% 50%;
                width: 10%;
            }
            50% {
                background-position: 100% 50%;
                width: 80%;
            }
            100% {
                background-position: 0% 50%;
                width: 10%;
            }
        }
        .pulse {
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0.7;
            }
        }
    </style>
</head>
<body>
    <div class="min-h-screen flex flex-col items-center justify-center p-4 bg-gradient-to-br from-yellow-50 to-amber-100">
        <div class="w-full max-w-3xl bg-white rounded-2xl shadow-xl overflow-hidden">
            <!-- Header -->
            <div class="bg-amber-500 py-6 px-8">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.21.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.5 16c-.83 0-1.5-.67-1.5-1.5S5.67 13 6.5 13s1.5.67 1.5 1.5S7.33 16 6.5 16zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM5 11l1.5-4.5h11L19 11H5z"/>
                        </svg>
                        <h1 class="ml-3 text-2xl font-bold text-white">FastPik</h1>
                    </div>
                    <div class="text-white text-sm font-medium bg-amber-600 px-3 py-1 rounded-full">Taxi Booking</div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="p-8 md:p-12">
                <div class="flex flex-col items-center text-center">
                    <!-- Maintenance Illustration -->
                    <div class="relative w-full h-48 mb-8 overflow-hidden">
                        <!-- Road -->
                        <div class="absolute bottom-8 left-0 right-0 h-2 bg-gray-300"></div>

                        <!-- Car -->
                        <div class="maintenance-car absolute bottom-10">
                            <svg class="w-20 h-20 text-amber-500" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.21.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.5 16c-.83 0-1.5-.67-1.5-1.5S5.67 13 6.5 13s1.5.67 1.5 1.5S7.33 16 6.5 16zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM5 11l1.5-4.5h11L19 11H5z"/>
                            </svg>
                        </div>

                        <!-- Tools -->
                        <div class="absolute top-4 right-1/4">
                            <svg class="w-12 h-12 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.7 19l-9.1-9.1c.9-2.3.4-5-1.5-6.9-2-2-5-2.4-7.4-1.3L9 6 6 9 1.6 4.7C.4 7.1.9 10.1 2.9 12.1c1.9 1.9 4.6 2.4 6.9 1.5l9.1 9.1c.4.4 1 .4 1.4 0l2.3-2.3c.5-.4.5-1.1.1-1.4z"/>
                            </svg>
                        </div>

                        <!-- Cones -->
                        <div class="absolute bottom-10 left-1/3">
                            <svg class="w-8 h-8 text-orange-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M13.95 13.5l.05-.5h-4l.05.5h3.9zm-.5-5l.05-.5h-3l.05.5h2.9zm1.95 9.5h-7.9l1.1-11h5.7l1.1 11zm1.6-13h-11l2 20h7l2-20z"/>
                            </svg>
                        </div>

                        <div class="absolute bottom-10 right-1/3">
                            <svg class="w-8 h-8 text-orange-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M13.95 13.5l.05-.5h-4l.05.5h3.9zm-.5-5l.05-.5h-3l.05.5h2.9zm1.95 9.5h-7.9l1.1-11h5.7l1.1 11zm1.6-13h-11l2 20h7l2-20z"/>
                            </svg>
                        </div>
                    </div>

                    <h2 class="text-3xl font-bold text-gray-800 mb-4">We're Under Maintenance</h2>
                    <p class="text-gray-600 mb-8 max-w-md">We're working hard to improve our website and will be back very soon. Thank you for your patience!</p>

                    <!-- Progress Bar -->
                    <div class="w-full max-w-md bg-gray-200 rounded-full h-3 mb-8 overflow-hidden">
                        <div class="progress-bar h-full rounded-full"></div>
                    </div>

                    <!-- Estimated Time -->
                    <div class="bg-amber-50 border border-amber-200 rounded-lg p-4 mb-8 w-full max-w-md">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-amber-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                            </svg>
                            <p class="text-amber-800 font-medium">Estimated completion time: <span id="countdown" class="font-bold">24:00:00</span></p>
                        </div>
                    </div>

                    <!-- Contact Info -->
                    <div class="flex flex-col sm:flex-row gap-4 w-full max-w-md">
                        <a href="mailto:support@fastpik.com" class="flex-1 bg-amber-500 hover:bg-amber-600 text-white font-medium py-3 px-4 rounded-lg flex items-center justify-center transition-colors">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                            </svg>
                            Contact Support
                        </a>
                        <a href="tel:+1234567890" class="flex-1 bg-white border border-gray-300 hover:bg-gray-50 text-gray-700 font-medium py-3 px-4 rounded-lg flex items-center justify-center transition-colors">
                            <svg class="w-5 h-5 mr-2 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                            </svg>
                            Call Helpline
                        </a>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="bg-gray-50 py-4 px-8 border-t border-gray-200">
                <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                    <p class="text-gray-500 text-sm">© 2023 FastPik. All rights reserved.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-amber-500 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-amber-500 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-amber-500 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Notification -->
        <div class="fixed bottom-4 left-1/2 transform -translate-x-1/2 bg-white rounded-lg shadow-lg p-4 flex items-center pulse">
            <svg class="w-5 h-5 text-amber-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2h-1V9a1 1 0 00-1-1z" clip-rule="evenodd"/>
            </svg>
            <span class="text-gray-700">We'll notify you when we're back online!</span>
        </div>
    </div>

    <script>
        // Countdown timer
        function updateCountdown() {
            const countdownEl = document.getElementById('countdown');
            const parts = countdownEl.textContent.split(':');
            let hours = parseInt(parts[0]);
            let minutes = parseInt(parts[1]);
            let seconds = parseInt(parts[2]);

            seconds--;

            if (seconds < 0) {
                seconds = 59;
                minutes--;

                if (minutes < 0) {
                    minutes = 59;
                    hours--;

                    if (hours < 0) {
                        hours = 0;
                        minutes = 0;
                        seconds = 0;
                    }
                }
            }

            countdownEl.textContent = `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;

            if (hours === 0 && minutes === 0 && seconds === 0) {
                clearInterval(countdownInterval);
            }
        }

        const countdownInterval = setInterval(updateCountdown, 1000);
    </script>
</body>
</html>
