<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FastpikCab | Online Taxi Booking & Cab Service</title>

    <meta charset="UTF-8" />
    <meta name="description"
        content="Book a taxi online with FastpikCab for fast, safe, and affordable rides. Your trusted local cab service for airport transfers, and reliable taxi booking." />
    <meta name="keywords"
        content="Outstation Cab Service, One Way Drop Taxi, Drop Taxi Service, Outstation Taxi Booking, South India Taxi service, Cheap Taxi Service, 24/7 Cab Booking, Local Taxi, book cabs online, book taxi online, airport taxi india, cabs in india, taxi in india, car rentals, taxi, cabs, hire, rent, FastpikCab,Fastpikcab taxi booking, online taxi booking, cab service, book a cab, affordable taxi, safe rides, local cabs, airport taxi, fast taxi, reliable taxi, taxi service near me, online cab booking" />
    <meta name="author" content="Fastpikcab" />
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://fastpikcab.com/" />

    <meta property="og:title" content="Fastpikcab - Online Taxi Booking & Cab Service" />
    <meta property="og:description"
        content="Book your next ride with Fastpikcab — affordable, safe, and fast taxi service available online. Trusted for local, airport, and city cab bookings." />
    <meta property="og:image" content="https://fastpikcab.com/img/FastPik%20Logo.png" />
    <meta property="og:url" content="https://www.fastpikcab.com/" />
    <meta property="og:type" content="website" />


    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Fastpikcab - Trusted Online Taxi & Cab Service" />
    <meta name="twitter:description"
        content="Fast and affordable cab service from Fastpik. Book your ride in minutes for safe and reliable transportation!" />
    <meta name="twitter:image" content="https://www.fastpikcab.com/logo.png" />

    <link rel="icon" href="../img/FastPik icon.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="https://www.fastpikcab.com/logo.png" />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>


<body>

    <div class="booking-banner">
        <span>📞 For Immediate Booking: <a href="tel:8825694157">+91 8825694157</a></span>
    </div>

    <!-- Header Section -->
    <header class="bg-gray-900 shadow-md sticky  z-50" style="top: 37px;">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex flex-wrap items-center justify-between py-4">

                <!-- Logo -->
                <div class="flex items-center">
                    <a href="#" class="flex items-center">

                        <img style="max-width:150px; height: 55px; " src="../img/FastPik Logo.png" alt="">
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex flex-wrap items-center space-x-6">
                    <a href="/" class="text-white hover:text-yellow-400 font-medium">Home</a>
                    <a href="#about" class="text-white hover:text-yellow-400 font-medium">About</a>
                    <a href="#services" class="text-white hover:text-yellow-400 font-medium">Services</a>
                    <a href="#pricing" class=" text-white hover:text-yellow-400 font-semibold">Pricing</a>
                    <a href="{{ route('blogs') }}" class=" text-white hover:text-yellow-400 font-semibold">Blogs</a>
                    <a href="{{ route('contactpage') }}"
                        class="text-white hover:text-yellow-400 font-medium">Contact</a>
                    {{-- <a href="#" class="text-white hover:text-yellow-400 font-medium">FAQ</a> --}}
                </div>

                <!-- CTA Button -->
                <div class="hidden md:block">
                    <a href="#booking"
                        class="bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-bold py-2 px-4 rounded-lg transition duration-300 whitespace-nowrap">
                        Book Now
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-white hover:text-yellow-400 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </nav>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="md:hidden bg-white py-4 hidden">
                <div class="flex flex-col space-y-4">
                    <a href="#"
                        class="text-gray-700 hover:text-gray-900 font-medium px-4 py-2 hover:bg-gray-100 rounded">Home</a>
                    <a href="#about"
                        class="text-gray-700 hover:text-gray-900 font-medium px-4 py-2 hover:bg-gray-100 rounded">About</a>
                    <a href="#services"
                        class="text-gray-700 hover:text-gray-900 font-medium px-4 py-2 hover:bg-gray-100 rounded">Services</a>
                    <a href="#pricing" class="text-gray-900 font-semibold px-4 py-2 bg-gray-100 rounded">Pricing</a>
                    <a href="#contact"
                        class="text-gray-700 hover:text-gray-900 font-medium px-4 py-2 hover:bg-gray-100 rounded">Contact</a>
                    <a href="{{ route('blogs') }}"
                        class="text-gray-700 hover:text-gray-900 font-medium px-4 py-2 hover:bg-gray-100 rounded">Blogs</a>
                    {{-- <a href="#" class="text-gray-700 hover:text-gray-900 font-medium px-4 py-2 hover:bg-gray-100 rounded">FAQ</a> --}}
                    <div class="px-4 pt-2">
                        <a href="#booking"
                            class="block text-center bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-bold py-2 px-6 rounded-lg transition duration-300">
                            Book Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>





    <!-- Hero Section -->
    <section id="home" class="pt-24 pb-16 bg-gray-900 text-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">Your Reliable Taxi Service Partner</h1>
                    <p class="text-xl mb-8 text-gray-300">Fast, safe, and comfortable rides whenever you need them.
                        Book
                        your taxi in seconds and enjoy the journey.</p>
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="#booking"
                            class="bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-bold py-3 px-6 rounded-lg transition duration-300 text-center">
                            Book Now
                        </a>
                        <a href="#services"
                            class="bg-transparent hover:bg-gray-800 text-white border border-white hover:border-gray-800 font-bold py-3 px-6 rounded-lg transition duration-300 text-center">
                            Our Services
                        </a>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <img src="./img/heroimg.png" alt="Fastpikcab">

                </div>
            </div>
        </div>
    </section>


    <section id="booking" class="py-8 bg-gradient-to-br from-gray-50 to-gray-100" ng-app="bookingApp"
        ng-controller="BookingController">
        <div class="container mx-auto px-4">
            <div class="text-center mb-6">
                <h2 class="text-3xl font-bold text-gray-800 mb-2">Book Your Ride</h2>
                <p class="text-gray-600 px-2">Experience hassle-free transportation with our simple booking process</p>
            </div>

            <div class="max-w-5xl mx-auto bg-white rounded-2xl shadow-xl overflow-hidden">
                <!-- Progress Indicator - Mobile Friendly -->
                <div class="bg-gray-800 text-white py-3 px-4">
                    <div class="flex justify-between items-center">
                        <div class="flex flex-col items-center">
                            <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center mb-1">
                                <span class="font-bold text-sm">1</span>
                            </div>
                            <span class="text-xs">Trip</span>
                        </div>
                        <div class="flex-1 h-1 bg-gray-600 mx-1"></div>
                        <div class="flex flex-col items-center">
                            <div class="w-8 h-8 rounded-full bg-gray-600 flex items-center justify-center mb-1">
                                <span class="font-bold text-sm">2</span>
                            </div>
                            <span class="text-xs">Info</span>
                        </div>
                        <div class="flex-1 h-1 bg-gray-600 mx-1"></div>
                        <div class="flex flex-col items-center">
                            <div class="w-8 h-8 rounded-full bg-gray-600 flex items-center justify-center mb-1">
                                <span class="font-bold text-sm">3</span>
                            </div>
                            <span class="text-xs">Location</span>
                        </div>
                        <div class="flex-1 h-1 bg-gray-600 mx-1"></div>
                        <div class="flex flex-col items-center">
                            <div class="w-8 h-8 rounded-full bg-gray-600 flex items-center justify-center mb-1">
                                <span class="font-bold text-sm">4</span>
                            </div>
                            <span class="text-xs">Complete</span>
                        </div>
                    </div>
                </div>

                <form name="bookingForm" class="p-4 md:p-8" ng-submit="submitBooking(bookingForm.$valid)" novalidate>
                    <!-- Trip Type Section -->
                    <div class="mb-6 p-4 bg-blue-50 rounded-xl border border-blue-100">
                        <h3 class="text-lg font-semibold text-gray-800 mb-3 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z">
                                </path>
                            </svg>
                            Trip Type
                        </h3>
                        <div class="flex flex-col space-y-3">
                            <label
                                class="flex items-center p-3 bg-white rounded-lg border-2 border-gray-200 cursor-pointer hover:border-blue-400 transition-colors">
                                <input type="radio" ng-model="booking.tripType" value="oneway"
                                    ng-change="calculateassigned_amount()" class="mr-3 h-5 w-5 text-blue-600">
                                <div>
                                    <div class="font-medium text-gray-800">One Way</div>
                                    <div class="text-sm text-gray-500">Single trip to destination</div>
                                </div>
                            </label>
                            <label
                                class="flex items-center p-3 bg-white rounded-lg border-2 border-gray-200 cursor-pointer hover:border-blue-400 transition-colors">
                                <input type="radio" ng-model="booking.tripType" value="round"
                                    ng-change="calculateassigned_amount()" class="mr-3 h-5 w-5 text-blue-600">
                                <div>
                                    <div class="font-medium text-gray-800">Round Trip</div>
                                    <div class="text-sm text-gray-500">Return trip included</div>
                                </div>
                            </label>
                        </div>

                        <div ng-show="booking.tripType === 'round'" class="mt-4">
                            <label class="block text-gray-700 font-medium mb-2">Number of Days</label>
                            <select name="no_of_days" ng-model="booking.no_of_days"
                                ng-change="calculateassigned_amount()"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                required>
                                <option value="">Select Days</option>
                                <option value="1">1 Day</option>
                                <option value="2">2 Days</option>
                                <option value="3">3 Days</option>
                                <option value="4">4 Days</option>
                                <option value="5">5 Days</option>
                            </select>
                            <p ng-show="bookingForm.no_of_days.$invalid && bookingForm.no_of_days.$touched"
                                class="text-red-500 text-sm mt-1">Number of days is required.</p>
                        </div>
                    </div>

                    <!-- Personal Information Section -->
                    <div class="mb-6 p-4 bg-green-50 rounded-xl border border-green-100">
                        <h3 class="text-lg font-semibold text-gray-800 mb-3 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Personal Information
                        </h3>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-gray-700 font-medium mb-2">Full Name</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input type="text" name="name" ng-model="booking.name"
                                        placeholder="Enter your name"
                                        class="w-full pl-10 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500"
                                        required autofill-fix>
                                </div>
                                <p ng-show="bookingForm.name.$invalid && bookingForm.name.$touched"
                                    class="text-red-500 text-sm mt-1">Name is required.</p>
                            </div>

                            <div>
                                <label class="block text-gray-700 font-medium mb-2">Email (Optional)</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                                            </path>
                                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                        </svg>
                                    </div>
                                    <input type="email" name="email" ng-model="booking.email"
                                        placeholder="Enter your email"
                                        class="w-full pl-10 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500"
                                        autofill-fix>
                                </div>
                                <p ng-show="bookingForm.email.$invalid && bookingForm.email.$touched"
                                    class="text-red-500 text-sm mt-1">Invalid email format.</p>
                            </div>

                            <div>
                                <label class="block text-gray-700 font-medium mb-2">Contact Number</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z">
                                            </path>
                                        </svg>
                                    </div>
                                    <input type="tel" name="contact" ng-model="booking.contact"
                                        placeholder="Enter contact number"
                                        class="w-full pl-10 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500"
                                        required autofill-fix>
                                </div>
                                <p ng-show="bookingForm.contact.$invalid && bookingForm.contact.$touched"
                                    class="text-red-500 text-sm mt-1">Contact number is required.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Location Details Section -->
                    <div class="mb-6 p-4 bg-purple-50 rounded-xl border border-purple-100">
                        <h3 class="text-lg font-semibold text-gray-800 mb-3 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-purple-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Location Details
                        </h3>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-gray-700 font-medium mb-2">Pickup Location</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input id="pickup" type="text" name="pickup" ng-model="booking.pickup"
                                        placeholder="Enter pickup address"
                                        class="w-full pl-10 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500"
                                        required autofill-fix>
                                </div>
                                <p ng-show="bookingForm.pickup.$invalid && bookingForm.pickup.$touched"
                                    class="text-red-500 text-sm mt-1">Pickup location is required.</p>
                                <p ng-show="pickupRequired && !booking.pickup" class="text-red-500 text-sm mt-1">
                                    Please select a valid pickup location from the map.</p>
                            </div>

                            <div>
                                <label class="block text-gray-700 font-medium mb-2">Drop Location</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input id="destination" type="text" name="destination"
                                        ng-model="booking.destination" placeholder="Enter destination address"
                                        class="w-full pl-10 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500"
                                        required autofill-fix>
                                </div>
                                <p ng-show="bookingForm.destination.$invalid && bookingForm.destination.$touched"
                                    class="text-red-500 text-sm mt-1">Drop location is required.</p>
                                <p ng-show="dropRequired && !booking.destination" class="text-red-500 text-sm mt-1">
                                    Please select a valid drop location from the map.</p>
                            </div>
                        </div>

                        <div class="mt-6">
                            <div id="map" class="w-full h-48 md:h-64 rounded-lg border-2 border-gray-200"></div>
                        </div>
                    </div>

                    <!-- Schedule & Vehicle Section -->
                    <div class="mb-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Schedule -->
                            <div class="p-4 bg-yellow-50 rounded-xl border border-yellow-100">
                                <h3 class="text-lg font-semibold text-gray-800 mb-3 flex items-center">
                                    <svg class="w-5 h-5 mr-2 text-yellow-500" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    Schedule
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <label class="block text-gray-700 font-medium mb-2">Date</label>
                                        <div class="relative">
                                            <div
                                                class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                <svg class="h-5 w-5 text-gray-400" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zM4 8h12v8H4V8z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                            <input type="date" name="date" ng-model="booking.date"
                                                class="w-full pl-10 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500"
                                                required>
                                        </div>
                                        <p ng-show="bookingForm.date.$invalid && bookingForm.date.$touched"
                                            class="text-red-500 text-sm mt-1">Date is required.</p>
                                    </div>

                                    <div>
                                        <label class="block text-gray-700 font-medium mb-2">Time</label>
                                        <div class="relative">
                                            <div
                                                class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                <svg class="h-5 w-5 text-gray-400" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                            <input type="time" name="time" ng-model="booking.time"
                                                class="w-full pl-10 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500"
                                                required>
                                        </div>
                                        <p ng-show="bookingForm.time.$invalid && bookingForm.time.$touched"
                                            class="text-red-500 text-sm mt-1">Time is required.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Vehicle Details -->
                            <div class="p-4 bg-red-50 rounded-xl border border-red-100">
                                <h3 class="text-lg font-semibold text-gray-800 mb-3 flex items-center">
                                    <svg class="w-5 h-5 mr-2 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z">
                                        </path>
                                        <path
                                            d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1v-1h4.05a2.5 2.5 0 014.9 0H20a1 1 0 001-1v-6a1 1 0 00-.293-.707l-4-4A1 1 0 0016 3H3a1 1 0 00-1 1zm11.464 6L14 6.586V10h.464z">
                                        </path>
                                    </svg>
                                    Vehicle Details
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <label class="block text-gray-700 font-medium mb-2">Vehicle Type</label>
                                        <div class="relative">
                                            <div
                                                class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                <svg class="h-5 w-5 text-gray-400" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z">
                                                    </path>
                                                    <path
                                                        d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1v-1h4.05a2.5 2.5 0 014.9 0H20a1 1 0 001-1v-6a1 1 0 00-.293-.707l-4-4A1 1 0 0016 3H3a1 1 0 00-1 1zm11.464 6L14 6.586V10h.464z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <select ng-model="booking.vehicle"
                                                class="w-full pl-10 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500"
                                                required>
                                                <option value="">Select Vehicle</option>
                                                <option value="Sedan">Sedan - Comfortable & Economical</option>
                                                <option value="suv">SUV - Spacious & Powerful</option>
                                            </select>
                                        </div>
                                        <p ng-show="bookingForm.vehicle.$invalid && bookingForm.vehicle.$touched"
                                            class="text-red-500 text-sm mt-1">Vehicle type is required.</p>
                                    </div>

                                    <div>
                                        <label class="block text-gray-700 font-medium mb-2">Number of
                                            Passengers</label>
                                        <div class="relative">
                                            <div
                                                class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                <svg class="h-5 w-5 text-gray-400" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <select name="passengers" ng-model="booking.passengers"
                                                class="w-full pl-10 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500"
                                                required>
                                                <option value="">Select Passengers</option>
                                                <option value="1">1 Passenger</option>
                                                <option value="2">2 Passengers</option>
                                                <option value="3">3 Passengers</option>
                                                <option value="4">4 Passengers</option>
                                                <option value="5+">5+ Passengers</option>
                                            </select>
                                        </div>
                                        <p ng-show="bookingForm.passengers.$invalid && bookingForm.passengers.$touched"
                                            class="text-red-500 text-sm mt-1">Number of passengers is required.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Trip Summary -->
                    <div class="mb-6 p-4 bg-gray-800 text-white rounded-xl">
                        <h3 class="text-lg font-semibold mb-3 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z">
                                </path>
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Trip Summary
                        </h3>
                        <div class="space-y-3">
                            <div class="flex items-center justify-between p-3 bg-gray-700 rounded-lg">
                                <span class="text-gray-300">Distance:</span>
                                <span class="font-semibold">@{{ booking.distance }}</span>
                            </div>
                            <div class="flex items-center justify-between p-3 bg-gray-700 rounded-lg">
                                <span class="text-gray-300">Estimated Price:</span>
                                <span class="font-semibold text-xl text-yellow-400">@{{ assigned_amount | currency: '₹' }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Section -->
                    <div class="text-center">
                        <p ng-show="showMissingFieldsMessage"
                            class="text-red-500 mb-4 p-3 bg-red-50 rounded-lg inline-block text-sm">
                            Please fill in all the required fields and select valid pickup and drop locations.
                        </p>

                        <button type="submit"
                            class="w-full bg-gradient-to-r from-blue-600 to-indigo-700 hover:from-blue-700 hover:to-indigo-800 text-white font-bold py-4 px-8 rounded-full text-lg shadow-lg transform transition-all duration-300 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                            <span ng-if="!isSubmitting" class="flex items-center justify-center">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z">
                                    </path>
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Book Your Ride Now
                            </span>
                            <span ng-if="isSubmitting" class="flex items-center justify-center">
                                <svg class="animate-spin -ml-1 mr-2 h-5 w-5 text-white"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10"
                                        stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor"
                                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                    </path>
                                </svg>
                                Processing Your Booking...
                            </span>
                        </button>

                        <div ng-show="bookingSuccess"
                            class="mt-6 p-4 bg-green-100 text-green-700 rounded-lg inline-block">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="font-semibold">Booking Successful!</span>
                            </div>
                        </div>

                        <div ng-show="bookingError" class="mt-6 p-4 bg-red-100 text-red-700 rounded-lg inline-block">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="font-semibold">Booking Failed. Please try again.</span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>



    <head>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17877026034"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'AW-17877026034');
        </script>
    </head>



    <!-- About Section -->
    <section id="about" class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 section-heading">About Fastpikcab</h2>
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0 md:pr-8">
                    <h3 class="text-2xl font-semibold mb-4">Reliable, Fast, and Affordable Transportation</h3>
                    <p class="text-gray-600 mb-6">
                        Welcome to Fastpikcab, your go-to choice for reliable, fast, and affordable transportation. We
                        are a newly established taxi service with a mission to make your travel experience seamless and
                        stress-free. Whether you're headed to work, the airport, or simply need a ride around town,
                        Fastpikcab is here to get you to your destination safely and on time.
                    </p>
                    <p class="text-gray-600 mb-6">
                        At Fastpikcab, we prioritize your comfort and convenience. Our professional, friendly drivers
                        are dedicated to providing an exceptional ride, and our fleet of clean, well-maintained vehicles
                        ensures a pleasant experience every time you step in.
                    </p>
                    <p class="text-gray-600 mb-6">
                        What sets us apart? Our commitment to customer satisfaction, competitive pricing, and flexible
                        booking options. With Fastpikcab, you can enjoy a hassle-free ride that suits your schedule,
                        all at a price that fits your budget.
                    </p>
                    <p class="text-gray-600 mb-6">
                        Thank you for choosing Fastpikcab – your trusted ride, anytime, anywhere.
                    </p>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-gray-100 p-4 rounded-lg text-center">
                            <div class="text-3xl font-bold text-yellow-500 mb-2">New</div>
                            <div class="text-gray-700">Established Service</div>
                        </div>
                        <div class="bg-gray-100 p-4 rounded-lg text-center">
                            <div class="text-3xl font-bold text-yellow-500 mb-2">24/7</div>
                            <div class="text-gray-700">Flexible Bookings</div>
                        </div>
                        <div class="bg-gray-100 p-4 rounded-lg text-center">
                            <div class="text-3xl font-bold text-yellow-500 mb-2">100%</div>
                            <div class="text-gray-700">Customer Focused</div>
                        </div>
                        <div class="bg-gray-100 p-4 rounded-lg text-center">
                            <div class="text-3xl font-bold text-yellow-500 mb-2">Affordable</div>
                            <div class="text-gray-700">Transparent Pricing</div>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <div class="relative">
                        <div class="bg-yellow-400 w-64 h-64 rounded-full absolute -top-6 -left-6 -z-10"></div>
                        <svg class="w-full h-auto" viewBox="0 0 600 400" xmlns="http://www.w3.org/2000/svg">
                            <rect x="50" y="50" width="500" height="300" rx="20" fill="#f3f4f6" />
                            <circle cx="150" cy="150" r="50" fill="#FFCB05" />
                            <rect x="220" y="110" width="280" height="20" rx="10" fill="#d1d5db" />
                            <rect x="220" y="150" width="200" height="20" rx="10" fill="#d1d5db" />
                            <rect x="100" y="230" width="400" height="1" fill="#d1d5db" />
                            <circle cx="150" cy="280" r="30" fill="#FFCB05" />
                            <rect x="200" y="260" width="300" height="15" rx="7.5" fill="#d1d5db" />
                            <rect x="200" y="290" width="200" height="15" rx="7.5" fill="#d1d5db" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>








    <!-- Fleet Section -->
    <section id="fleet" class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 section-heading">Our Fleet</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Vehicle 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden taxi-card">
                    <div class="h-48 bg-gray-200 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                            class="h-32 w-32 text-gray-700">
                            <path fill="currentColor"
                                d="M544 192h-16L419.22 56.02A64.025 64.025 0 0 0 369.24 32H155.33c-26.17 0-49.7 15.93-59.42 40.23L48 194.26C20.44 201.4 0 226.21 0 256v112c0 8.84 7.16 16 16 16h48c0 53.02 42.98 96 96 96s96-42.98 96-96h128c0 53.02 42.98 96 96 96s96-42.98 96-96h48c8.84 0 16-7.16 16-16v-80c0-53.02-42.98-96-96-96zM160 432c-26.47 0-48-21.53-48-48s21.53-48 48-48 48 21.53 48 48-21.53 48-48 48zm72-240H116.93l38.4-96H232v96zm48 0V96h89.24l76.8 96H280zm200 240c-26.47 0-48-21.53-48-48s21.53-48 48-48 48 21.53 48 48-21.53 48-48 48z" />
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Standard Sedan</h3>
                        <div class="flex items-center mb-4">
                            <div class="text-yellow-500 mr-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                            <div class="text-yellow-500 mr-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                            <div class="text-yellow-500 mr-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                            <div class="text-yellow-500 mr-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                            <div class="text-gray-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                        </div>
                        <ul class="text-gray-600 mb-4">
                            <li class="flex items-center mb-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500 mr-2"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                Up to 4 passengers
                            </li>
                            <li class="flex items-center mb-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500 mr-2"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                2 pieces of luggage
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500 mr-2"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                Air conditioning
                            </li>
                        </ul>
                        <a href="#booking"
                            class="block text-center bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-bold py-2 px-4 rounded-lg transition duration-300">
                            Book This Vehicle
                        </a>
                    </div>
                </div>

                <!-- Vehicle 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden taxi-card">
                    <div class="h-48 bg-gray-200 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                            class="h-32 w-32 text-gray-700">
                            <path fill="currentColor"
                                d="M544 192h-16L419.22 56.02A64.025 64.025 0 0 0 369.24 32H155.33c-26.17 0-49.7 15.93-59.42 40.23L48 194.26C20.44 201.4 0 226.21 0 256v112c0 8.84 7.16 16 16 16h48c0 53.02 42.98 96 96 96s96-42.98 96-96h128c0 53.02 42.98 96 96 96s96-42.98 96-96h48c8.84 0 16-7.16 16-16v-80c0-53.02-42.98-96-96-96zM160 432c-26.47 0-48-21.53-48-48s21.53-48 48-48 48 21.53 48 48-21.53 48-48 48zm72-240H116.93l38.4-96H232v96zm48 0V96h89.24l76.8 96H280zm200 240c-26.47 0-48-21.53-48-48s21.53-48 48-48 48 21.53 48 48-21.53 48-48 48z" />
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Premium Sedan</h3>
                        <div class="flex items-center mb-4">
                            <div class="text-yellow-500 mr-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                            <div class="text-yellow-500 mr-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                            <div class="text-yellow-500 mr-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                            <div class="text-yellow-500 mr-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                            <div class="text-yellow-500 mr-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                        </div>
                        <ul class="text-gray-600 mb-4">
                            <li class="flex items-center mb-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500 mr-2"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                Up to 4 passengers
                            </li>
                            <li class="flex items-center mb-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500 mr-2"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                3 pieces of luggage
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500 mr-2"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                Luxury amenities
                            </li>
                        </ul>
                        <a href="#booking"
                            class="block text-center bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-bold py-2 px-4 rounded-lg transition duration-300">
                            Book This Vehicle
                        </a>
                    </div>
                </div>

                <!-- Vehicle 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden taxi-card">
                    <div class="h-48 bg-gray-200 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                            class="h-32 w-32 text-gray-700">
                            <path fill="currentColor"
                                d="M192 160h-64V64h64v96zm384 0h-64V64h64v96zM384 64l-64 .0001V160h64V64zM128 64H64v96h64V64zM624 384c8.75 0 16-7.25 16-16v-32c0-8.75-7.25-16-16-16H16c-8.75 0-16 7.25-16 16v32c0 8.75 7.25 16 16 16h608zM288 64l-64 .0001V160h64V64zm-288 0v96h32V64H0zm608 0h-32v96h32V64zm0-64v32c0 17.75-14.25 32-32 32H64c-17.75 0-32-14.25-32-32V0c0-17.75 14.25-32 32-32h512c17.75 0 32 14.25 32 32zM112 416c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48zm416 0c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48zm-288 0c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48z" />
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">SUV</h3>
                        <div class="flex items-center mb-4">
                            <div class="text-yellow-500 mr-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                            <div class="text-yellow-500 mr-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                            <div class="text-yellow-500 mr-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                            <div class="text-yellow-500 mr-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                            <div class="text-yellow-500 mr-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                        </div>
                        <ul class="text-gray-600 mb-4">
                            <li class="flex items-center mb-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500 mr-2"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                Up to 6 passengers
                            </li>
                            <li class="flex items-center mb-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500 mr-2"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                4 pieces of luggage
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500 mr-2"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                Extra space
                            </li>
                        </ul>
                        <a href="#booking"
                            class="block text-center bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-bold py-2 px-4 rounded-lg transition duration-300">
                            Book This Vehicle
                        </a>
                    </div>
                </div>

                <!-- Vehicle 4 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden taxi-card">
                    <div class="h-48 bg-gray-200 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                            class="h-32 w-32 text-gray-700">
                            <path fill="currentColor"
                                d="M488 192H336v56c0 39.7-32.3 72-72 72s-72-32.3-72-72v-56H48c-26.5 0-48 21.5-48 48v128c0 53 43 96 96 96h544c53 0 96-43 96-96V240c0-26.5-21.5-48-48-48zM240 320c-44.1 0-80-35.9-80-80v-48h64v48c0 8.8 7.2 16 16 16s16-7.2 16-16v-48h64v48c0 44.1-35.9 80-80 80zm400 128H240v-32h400v32zM640 64v48c0 8.8-7.2 16-16 16H16c-8.8 0-16-7.2-16-16V64C0 28.7 28.7 0 64 0h512c35.3 0 64 28.7 64 64z" />
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Minivan</h3>
                        <div class="flex items-center mb-4">
                            <div class="text-yellow-500 mr-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                            <div class="text-yellow-500 mr-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                            <div class="text-yellow-500 mr-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                            <div class="text-yellow-500 mr-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                            <div class="text-yellow-500 mr-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                        </div>
                        <ul class="text-gray-600 mb-4">
                            <li class="flex items-center mb-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500 mr-2"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                Up to 7 passengers
                            </li>
                            <li class="flex items-center mb-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500 mr-2"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                5+ pieces of luggage
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500 mr-2"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                Perfect for groups
                            </li>
                        </ul>
                        <a href="#booking"
                            class="block text-center bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-bold py-2 px-4 rounded-lg transition duration-300">
                            Book This Vehicle
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- route to the booking section --}}

    <section class="cab-routes-section">
        <div class="container">
            <div class="header-row">
                <div class="header-cell">CAB ROUTES</div>
                <div class="header-cell">EXTRA COST</div>
                <div class="header-cell">CAB COST</div>
                <div class="header-cell action-header"></div>
            </div>

            <div id="routes-container" class="routes-list">
                <div class="loading-message">Loading cab routes...</div>
            </div>

            <div class="error-message" id="error-message" style="display:none;">
                Failed to load routes. Please try again later.
            </div>
        </div>
    </section>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            fetch('/routes') // Your API endpoint
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    const routesContainer = document.getElementById('routes-container');
                    routesContainer.innerHTML = ''; // Clear loading message

                    if (data && data.length > 0) {
                        data.forEach(routeData => {
                            const routeItem = document.createElement('div');
                            routeItem.classList.add('route-item');

                            // Cab Routes Column
                            const cabRoutesCol = document.createElement('div');
                            cabRoutesCol.classList.add('route-col', 'cab-routes');
                            const routeTitle = document.createElement('h3');
                            routeTitle.textContent = `Drop taxi ${routeData.route}`;
                            const routeDescription = document.createElement('p');
                            cabRoutesCol.appendChild(routeTitle);
                            cabRoutesCol.appendChild(routeDescription);
                            routeItem.appendChild(cabRoutesCol);

                            // Extra Cost Column
                            const extraCostCol = document.createElement('div');
                            extraCostCol.classList.add('route-col', 'extra-cost');
                            const extraCostDetails = document.createElement('p');
                            extraCostDetails.textContent = routeData.description ||
                                'Details not available.'; // Use API data or default
                            extraCostCol.appendChild(extraCostDetails);
                            routeItem.appendChild(extraCostCol);

                            // Cab Cost Column
                            const cabCostCol = document.createElement('div');
                            cabCostCol.classList.add('route-col', 'cab-cost');
                            const currentPrice = document.createElement('span');
                            currentPrice.classList.add('current-price');
                            currentPrice.textContent =
                                `Rs ${parseFloat(routeData.pricing).toLocaleString('en-IN')}*`; // Format as Indian Rupee
                            cabCostCol.appendChild(currentPrice);

                            if (routeData.old_pricing) {
                                const oldPrice = document.createElement('span');
                                oldPrice.classList.add('old-price');
                                oldPrice.textContent =
                                    `Rs. ${parseFloat(routeData.old_pricing).toLocaleString('en-IN')}`;
                                cabCostCol.appendChild(oldPrice);
                            }
                            const onwardsText = document.createElement('span');
                            onwardsText.classList.add('onwards-text');
                            onwardsText.textContent = 'Onwards';
                            cabCostCol.appendChild(onwardsText);
                            routeItem.appendChild(cabCostCol);

                            // Book Now Column
                            const bookNowCol = document.createElement('div');
                            bookNowCol.classList.add('route-col', 'book-now-col');
                            const bookNowButton = document.createElement('a');
                            bookNowButton.href = `#booking`; // Or a relevant booking link
                            bookNowButton.classList.add('book-now-btn');
                            bookNowButton.textContent = 'BOOK NOW';
                            bookNowCol.appendChild(bookNowButton);
                            routeItem.appendChild(bookNowCol);

                            routesContainer.appendChild(routeItem);
                        });
                    } else {
                        routesContainer.textContent = 'No cab routes found at the moment.';
                    }
                })
                .catch(error => {
                    console.error('Error fetching routes:', error);
                    document.getElementById('routes-container').innerHTML = ''; // Clear loading message
                    document.getElementById('error-message').style.display = 'block'; // Show error message
                });
        });
    </script>






    <!-- Pricing Cards -->
    <section>
        <div id="pricing" class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12 px-4">

            <!-- Sedan Card -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden pricing-card flex flex-col">
                <div class="bg-gray-900 text-white p-6 text-center">
                    <h3 class="text-xl font-bold">🚗 Sedan</h3>
                    <p class="mt-2 text-sm">Etios, Swift, Zest, Xcent</p>
                </div>
                <div class="p-6 flex-grow flex flex-col justify-between">
                    <ul class="mb-6 space-y-4 text-sm">
                        <li>👥 Capacity: Up to 4 passengers</li>
                        <li>⏱️ Free Cancellation: Within 10 minutes of booking</li>
                        <li>🧳 Luggage: Fits 3 mid-size suitcases</li>
                        <li>📏 One Way Min: <span id="sedan-oneway-min-km">--</span>KM</li>
                        <li>🔁 Round Trip Min: <span id="sedan-roundtrip-min-km">--</span>KM</li>
                        <li>💰 One Way Rate: <span id="sedan-oneway-rate">₹--/km</span></li>
                        <li>💰 Round Trip Rate: <span id="sedan-roundtrip-rate">₹--/km</span></li>
                        <li class="text-xs text-gray-500">* Toll, Parking, State Permit extra</li>
                    </ul>
                    <button href="#booking"
                        class="w-full bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-bold py-3 px-6 rounded-lg transition duration-300">
                        <a href="#booking"> Book Now</a>
                    </button>
                </div>
            </div>

            <!-- SUV Card -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden pricing-card flex flex-col">
                <div class="bg-yellow-400 text-gray-900 p-6 text-center relative">
                    <div
                        class="absolute top-0 right-0 bg-gray-900 text-white text-xs font-bold px-3 py-1 rounded-bl-lg">
                        POPULAR
                    </div>
                    <h3 class="text-xl font-bold">🚙 SUV</h3>
                    <p class="mt-2 text-sm">Xylo, INNOVA, XUV 700, ENJOY</p>
                </div>
                <div class="p-6 flex-grow flex flex-col justify-between">
                    <ul class="mb-6 space-y-4 text-sm">
                        <li>👥 Capacity: Up to 6 passengers</li>
                        <li>⏱️ Free Cancellation: Within 20 minutes of booking</li>
                        <li>🧳 Luggage: Fits 4 mid-size suitcases</li>
                        <li>📏 One Way Min: <span id="suv-oneway-min-km">--</span>KM</li>
                        <li>🔁 Round Trip Min: <span id="suv-roundtrip-min-km">--</span>KM</li>
                        <li>💰 One Way Rate: <span id="suv-oneway-rate">₹--/km</span></li>
                        <li>💰 Round Trip Rate: <span id="suv-roundtrip-rate">₹--/km</span></li>
                        <li class="text-xs text-gray-500">* Toll, Parking, State Permit extra</li>
                    </ul>
                    <button href="#booking"
                        class="w-full bg-gray-900 hover:bg-gray-800 text-white font-bold py-3 px-6 rounded-lg transition duration-300">
                        <a href="#booking"> Book Now</a>
                    </button>
                </div>
            </div>
        </div>



        <div class="bg-white rounded-lg shadow-md p-8">
            <h3 class="text-2xl font-semibold mb-6">Additional Charges</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h4 class="text-lg font-medium mb-4 text-gray-900">Standard Fees</h4>
                    <ul class="space-y-3">
                        <li class="flex justify-between"><span class="text-gray-600">Waiting Time (per
                                Hour)</span><span class="font-medium" id="waiting-charge">Rs.120</span></li>
                        <li class="flex justify-between"><span class="text-gray-600">Demand and Place</span><span
                                class="font-medium">Taxi Price Will Be Changed</span></li>
                        <li class="flex justify-between"><span class="text-gray-600">Over Luggage Charge</span><span
                                class="font-medium" id="luggage-charge">Rs.300</span></li>
                        <li class="flex justify-between"><span class="text-gray-600">Toll/Permit/Tax</span><span
                                class="font-medium">Extra</span></li>
                        <li class="flex justify-between"><span class="text-gray-600">Hill Station Charges</span><span
                                class="font-medium" id="hill-station-charge">Rs.300</span></li>
                        <li class="flex justify-between"><span class="text-gray-600">GST</span><span
                                class="font-medium">Included in Tariff</span></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-medium mb-4 text-gray-900">Trip & Cab Info</h4>
                    <ul class="space-y-3">
                        <li class="flex justify-between"><span class="text-gray-600">One Way (Min <span
                                    id="oneway-min-km-all">--</span> kms)</span><span class="font-medium"
                                id="oneway-driver-bata">Driver Bata Rs.300/- (Rs.600/- if above 400 kms)</span></li>
                        <li class="flex justify-between"><span class="text-gray-600">Round Trip (Min <span
                                    id="roundtrip-min-km-all">--</span> kms/day)</span><span class="font-medium"
                                id="roundtrip-driver-bata">Driver Bata Rs.300/day (Rs.600/day if >500 kms)</span></li>
                        <li class="flex justify-between"><span class="text-gray-600">SEDAN Capacity</span><span
                                class="font-medium">4 persons, 3 mid-size suitcases</span></li>
                        <li class="flex justify-between"><span class="text-gray-600">SUV Capacity</span><span
                                class="font-medium">7 persons, 4 mid-size suitcases</span></li>
                        <li class="flex justify-between"><span class="text-gray-600">Specific Cab Models</span><span
                                class="font-medium">Innova, Etios – rates may vary</span></li>
                        <li class="flex justify-between"><span class="text-gray-600">1 Day Definition</span><span
                                class="font-medium">Calendar day (12AM–12AM)</span></li>
                        <li class="flex justify-between"><span class="text-gray-600">Call Us</span><span
                                class="font-medium">+91 8825694157</span></li>

                    </ul>
                </div>
            </div>

        </div>
        </div>
    </section>


    <script>
        fetch('/pricings')
            .then(response => response.json())
            .then(data => {
                let sedanOneway, sedanRoundtrip;
                let suvOneway, suvRoundtrip;

                data.forEach(pricing => {
                    if (pricing.vehicle_type === 'Sedan') {
                        if (pricing.trip_type === 'One-way') {
                            document.getElementById('sedan-oneway-rate').textContent =
                                `₹${pricing.base_price_per_km}/km`;
                            document.getElementById('sedan-oneway-min-km').textContent = pricing
                                .minimum_distance;
                            sedanOneway = pricing;
                        } else if (pricing.trip_type === 'Round Trip') {
                            document.getElementById('sedan-roundtrip-rate').textContent =
                                `₹${pricing.base_price_per_km}/km`;
                            document.getElementById('sedan-roundtrip-min-km').textContent = pricing
                                .minimum_distance;
                            sedanRoundtrip = pricing;
                        }
                    } else if (pricing.vehicle_type === 'SUV') {
                        if (pricing.trip_type === 'One-way') {
                            document.getElementById('suv-oneway-rate').textContent =
                                `₹${pricing.base_price_per_km}/km`;
                            document.getElementById('suv-oneway-min-km').textContent = pricing.minimum_distance;
                            suvOneway = pricing;
                        } else if (pricing.trip_type === 'Round Trip') {
                            document.getElementById('suv-roundtrip-rate').textContent =
                                `₹${pricing.base_price_per_km}/km`;
                            document.getElementById('suv-roundtrip-min-km').textContent = pricing
                                .minimum_distance;
                            suvRoundtrip = pricing;
                        }
                        // Apply SUV pricing to MPV
                        const mpvOnewayRateElement = document.getElementById('mpv-oneway-rate');
                        if (mpvOnewayRateElement && suvOneway) {
                            mpvOnewayRateElement.textContent = `₹${suvOneway.base_price_per_km}/km`;
                            document.getElementById('mpv-oneway-min-km').textContent = suvOneway
                                .minimum_distance;
                        }
                        const mpvRoundtripRateElement = document.getElementById('mpv-roundtrip-rate');
                        if (mpvRoundtripRateElement && suvRoundtrip) {
                            mpvRoundtripRateElement.textContent = `₹${suvRoundtrip.base_price_per_km}/km`;
                            document.getElementById('mpv-roundtrip-min-km').textContent = suvRoundtrip
                                .minimum_distance;
                        }
                        // Get additional charges from SUV data (assuming it's the same for MPV)
                        document.getElementById('waiting-charge').textContent =
                            `₹${pricing.waiting_charge_per_hour}`;
                        document.getElementById('luggage-charge').textContent =
                            `₹${pricing.luggage_charge_per_kg}/kg`;
                        document.getElementById('hill-station-charge').textContent =
                            `₹${pricing.hill_station_charge}`;
                    }
                });

                // Set the general minimum distance and driver bata info (using Sedan data)
                if (sedanOneway) {
                    document.getElementById('oneway-min-km-all').textContent = sedanOneway.minimum_distance;
                    const driverBataOneWay = parseInt(sedanOneway.minimum_distance) > 400 ?
                        `₹${sedanOneway.driver_beta_500}` : `₹${sedanOneway.driver_beta_300}`;
                    document.getElementById('oneway-driver-bata').textContent =
                        `Driver Bata ${driverBataOneWay} (₹600/- if above 400 kms)`;
                }
                if (sedanRoundtrip) {
                    document.getElementById('roundtrip-min-km-all').textContent = sedanRoundtrip.minimum_distance;
                    const driverBataRoundTrip = parseInt(sedanRoundtrip.minimum_distance) > 500 ?
                        `₹${sedanRoundtrip.driver_beta_500}/day` : `₹${sedanRoundtrip.driver_beta_300}/day`;
                    document.getElementById('roundtrip-driver-bata').textContent =
                        `Driver Bata ${driverBataRoundTrip} (₹600/day if >500 kms)`;
                }
            })
            .catch(error => {
                console.error('Error fetching pricing data:', error);
            });
    </script>




    <section class="testimonials-section">
        <div class="container">
            <h2 class="section-title">What Our Customers Say</h2>
            <p class="section-subtitle">Hear directly from those who've experienced our exceptional service.</p>

            <div id="testimonials-container" class="testimonials-grid">
                <div class="loading-message">Loading testimonials...</div>
            </div>
            <div class="error-message" id="error-message" style="display:none;">
                Failed to load testimonials. Please try again later.
            </div>
        </div>
    </section>

    <script>
        fetch('/testimonial')
            .then(response => {
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                return response.json();
            })
            .then(data => {
                const testimonialsContainer = document.getElementById('testimonials-container');
                testimonialsContainer.innerHTML = ''; // Clear loading message

                if (data && data.length > 0) {
                    data.forEach(testimonial => {
                        const testimonialCard = document.createElement('div');
                        testimonialCard.classList.add('testimonial-card');

                        // Star Rating
                        const starRatingDiv = document.createElement('div');
                        starRatingDiv.classList.add('star-rating');
                        for (let i = 0; i < testimonial.rating; i++) {
                            const starIcon = document.createElement('span');
                            starIcon.classList.add('star');
                            starIcon.innerHTML = '&#9733;'; // Unicode for a solid star
                            starRatingDiv.appendChild(starIcon);
                        }
                        testimonialCard.appendChild(starRatingDiv);

                        // Message (content)
                        const contentParagraph = document.createElement('p');
                        contentParagraph.classList.add('testimonial-content');
                        contentParagraph.textContent = `"${testimonial.message}"`; // Use 'message' property
                        testimonialCard.appendChild(contentParagraph);

                        // Name
                        const authorParagraph = document.createElement('p');
                        authorParagraph.classList.add('testimonial-author');
                        authorParagraph.textContent = `- ${testimonial.name}`; // Use 'name' property
                        testimonialCard.appendChild(authorParagraph);

                        // Optional: Position (if you want to display it)
                        if (testimonial.position) {
                            const positionParagraph = document.createElement('p');
                            positionParagraph.classList.add('testimonial-position');
                            positionParagraph.textContent = testimonial.position;
                            testimonialCard.appendChild(positionParagraph);
                        }

                        testimonialsContainer.appendChild(testimonialCard);
                    });
                } else {
                    testimonialsContainer.textContent =
                        'No testimonials found yet. Be the first to share your experience!';
                    testimonialsContainer.classList.add('no-testimonials');
                }
            })
            .catch(error => {
                console.error('Error fetching testimonials:', error);
                document.getElementById('testimonials-container').innerHTML = ''; // Clear loading message
                document.getElementById('error-message').style.display = 'block'; // Show error message
            });
    </script>









    <!-- Replace PHONE_NUMBER with your actual WhatsApp number in international format, without + or spaces -->
    <a href="https://wa.me/+918825694157" target="_blank" rel="noopener noreferrer" class="whatsapp-link">
        <i class="fab fa-whatsapp"></i>
    </a>


    @include('layouts.faq')
    @include('layouts.routes')

    <footer class="bg-[#001f3f] text-white pt-16 pb-8">
        <div class="container mx-auto px-4">

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 mb-12">

                <div class="lg:col-span-1">
                    <div class="flex items-center gap-2 mb-6">
                        <img src="../img/FastPik icon.png" alt="logo" class="h-8 w-8 text-yellow-400">
                        <span class="text-2xl font-bold italic text-white">Fast<span
                                class="text-yellow-400">pikcab</span></span>
                    </div>

                    <div
                        class="border border-gray-600 rounded-lg p-3 mb-4 flex items-center hover:border-yellow-400 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white mr-3" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <div>
                            <p class="text-xs text-gray-400">Contact number</p>
                            <p class="font-bold text-sm">+91 88256 94157</p>
                        </div>
                    </div>

                    <div
                        class="border border-gray-600 rounded-lg p-3 mb-6 flex items-center hover:border-yellow-400 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white mr-3" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <div>
                            <p class="text-xs text-gray-400">Contact email</p>
                            <p class="font-bold text-sm">fastpikcab@gmail.com</p>
                        </div>
                    </div>

                    <div class="mb-6">
                        <h5 class="font-bold mb-2">Address</h5>
                        <p class="text-sm text-gray-400 leading-relaxed">
                            Throw Pathi Amman Kovil Street,<br>
                            Kalanjukuppam, Tamil Nadu 607104
                        </p>
                    </div>

                    <div class="flex gap-2">
                        <a href="#"
                            class="border border-gray-600 rounded px-3 py-1 flex items-center hover:bg-gray-800 transition">
                            <svg class="h-6 w-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M3,20.5V3.5C3,2.91 3.34,2.39 3.84,2.15L13.69,12L3.84,21.85C3.34,21.6 3,21.09 3,20.5M16.81,15.12L6.05,21.34L14.54,12.85L16.81,15.12M20.16,10.81C20.5,11.08 20.75,11.5 20.75,12C20.75,12.5 20.5,12.92 20.16,13.19L17.89,14.5L15.39,12L17.89,9.5L20.16,10.81M6.05,2.66L16.81,8.88L14.54,11.15L6.05,2.66Z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="border border-gray-600 rounded px-3 py-1 flex items-center hover:bg-gray-800 transition">
                            <svg class="h-6 w-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M18.71,19.5C17.88,20.74 17,21.95 15.66,21.97C14.32,22 13.89,21.18 12.37,21.18C10.84,21.18 10.37,21.95 9.1,22C7.79,22.05 6.8,20.68 5.96,19.47C4.25,17 2.94,12.45 4.7,9.39C5.57,7.87 7.13,6.91 8.82,6.88C10.1,6.86 11.32,7.75 12.11,7.75C12.89,7.75 14.37,6.68 15.92,6.84C16.57,6.87 18.39,7.1 19.56,8.82C19.47,8.88 17.39,10.1 17.41,12.63C17.44,15.65 20.06,16.66 20.09,16.67C20.06,16.74 19.67,18.11 18.71,19.5M13,3.5C13.73,2.67 14.94,2.04 15.94,2C16.07,3.17 15.6,4.35 14.9,5.19C14.21,6.04 13.04,6.7 11.95,6.61C11.8,5.45 12.36,4.26 13,3.5Z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div>
                    <h3 class="font-bold text-lg mb-4">Services</h3>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-yellow-400 transition">Cab Booking</a></li>
                        <li><a href="#" class="hover:text-yellow-400 transition">Outstation One-Way Drop</a>
                        </li>
                        <li><a href="#" class="hover:text-yellow-400 transition">Airport Cab Booking</a></li>
                        <li><a href="#" class="hover:text-yellow-400 transition">Hourly Car Rental</a></li>
                        <li><a href="#" class="hover:text-yellow-400 transition">Corporate Enquiry</a></li>
                        <li><a href="#" class="hover:text-yellow-400 transition">Round Trip Packages</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-bold text-lg mb-4">Top Cities</h3>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="{{ route('chennai-taxi-service') }}"
                                class="hover:text-yellow-400 transition">Chennai</a></li>
                        <li><a href="{{ route('villupuram-taxi-service') }}"
                                class="hover:text-yellow-400 transition">Villupuram</a></li>
                        <li><a href="{{ route('coimbatore-taxi-service') }}"
                                class="hover:text-yellow-400 transition">Coimbatore</a></li>
                        <li><a href="{{ route('madurai-taxi-service') }}"
                                class="hover:text-yellow-400 transition">Madurai</a></li>
                        <li><a href="{{ route('trichy-taxi-service') }}"
                                class="hover:text-yellow-400 transition">Trichy</a></li>
                        <li><a href="{{ route('salem-taxi-service') }}"
                                class="hover:text-yellow-400 transition">Salem</a></li>
                        <li><a href="{{ route('tirunelveli-taxi-service') }}"
                                class="hover:text-yellow-400 transition">Tirunelveli</a></li>
                        <li><a href="{{ route('vellore-taxi-service') }}"
                                class="hover:text-yellow-400 transition">Vellore</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-bold text-lg mb-4">Top Routes</h3>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="{{ route('chennai-to-vellore') }}"
                                class="hover:text-yellow-400 transition">Chennai to Vellore</a></li>
                        <li><a href="{{ route('chennai-to-puducherry') }}"
                                class="hover:text-yellow-400 transition">Chennai to Pondicherry</a></li>
                        <li><a href="{{ route('chennai-to-tiruvannamalai') }}"
                                class="hover:text-yellow-400 transition">Chennai to Tiruvannamalai</a></li>
                        <li><a href="{{ route('chennai-to-tirupati') }}"
                                class="hover:text-yellow-400 transition">Chennai to Tirupati</a></li>
                        <li><a href="{{ route('trichy-to-thanjavur') }}"
                                class="hover:text-yellow-400 transition">Trichy to Thanjavur</a></li>
                        <li><a href="{{ route('madurai-to-chennai') }}"
                                class="hover:text-yellow-400 transition">Madurai to chennai</a></li>
                        <li><a href="{{ route('coimbatore-to-chennai') }}"
                                class="hover:text-yellow-400 transition">Coimbatore to chennai</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-bold text-lg mb-4">Company</h3>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-yellow-400 transition">About Us</a></li>
                        <li><a href="#" class="hover:text-yellow-400 transition">Contact Us</a></li>
                        <li><a href="#" class="hover:text-yellow-400 transition">Careers</a></li>
                        <li><a href="{{ route('blogs') }}" class="hover:text-yellow-400 transition">Blog</a></li>
                        <li><a href="#" class="hover:text-yellow-400 transition">Terms & Conditions</a></li>
                        <li><a href="{{ route('privacypolicy') }}" class="hover:text-yellow-400 transition">Privacy
                                Policy</a></li>
                    </ul>
                </div>

            </div>

            <div class="border-t border-gray-700 my-8"></div>

            <div class="flex flex-col md:flex-row justify-between items-center gap-4">

                <div class="text-sm text-gray-400 flex gap-4">
                    <a href="#" class="hover:text-white">Terms and Conditions</a>
                    <span>|</span>
                    <a href="{{ route('privacypolicy') }}" class="hover:text-white">Privacy Policy</a>
                </div>

                <div class="text-sm text-gray-500 text-center md:text-left">
                    © 2025 Fastpik Taxi Service. All rights reserved.
                </div>

                <div class="flex space-x-4">
                    <a href="https://www.facebook.com/share/19y3UEM333/"
                        class="text-gray-400 hover:text-white transition">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z" />
                        </svg>
                    </a>
                    <a href="https://x.com/fastpikcab" class="text-gray-400 hover:text-white transition">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/fastpikcab/" class="text-gray-400 hover:text-white transition">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </a>
                </div>
            </div>

        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="back-to-top"
        class="fixed bottom-6 right-6 bg-yellow-400 hover:bg-yellow-500 text-gray-900 h-12 w-12 rounded-full flex items-center justify-center shadow-lg transition duration-300 opacity-0 invisible">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
    </button>

    <script src="{{ asset('js/app.js') }}"></script>
    <!-- ✅ Google Maps API -->
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFS0STKnYFbgLIwD6MH37_Zymm388hUO8&libraries=places&callback=initMap"
        async defer></script>
</body>

</html>
