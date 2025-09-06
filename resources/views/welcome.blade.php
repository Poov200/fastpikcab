<!DOCTYPE html>
<html>

 <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FastpikCab | Online Taxi Booking & Cab Service | Affordable, Safe Rides</title>

    <meta charset="UTF-8" />
    <meta name="description"
        content="Book a taxi online with FastpikCab for fast, safe, and affordable rides. Your trusted local cab service for airport transfers, city commutes, and reliable taxi booking." />
    <meta name="keywords"
        content="FastpikCab,Fastpik Cab taxi booking, online taxi booking, cab service, book a cab, affordable taxi, safe rides, local cabs, airport taxi, fast taxi, reliable taxi, taxi service near me, online cab booking" />
    <meta name="author" content="Fastpik Cab" />
    <meta name="robots" content="index, follow"> <link rel="canonical" href="https://fastpikcab.com/" />

    <meta property="og:title" content="Fastpik Cab - Online Taxi Booking & Cab Service" />
    <meta property="og:description"
        content="Book your next ride with Fastpik Cab — affordable, safe, and fast taxi service available online. Trusted for local, airport, and city cab bookings." />
    <meta property="og:image" content="https://fastpikcab.com/img/FastPik%20Logo.png" />
    <meta property="og:url" content="https://www.fastpikcab.com/" />
    <meta property="og:type" content="website" />


    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Fastpik Cab - Trusted Online Taxi & Cab Service" />
    <meta name="twitter:description"
        content="Fast and affordable cab service from Fastpik. Book your ride in minutes for safe and reliable transportation!" />
    <meta name="twitter:image" content="https://www.fastpikcab.com/logo.png" />

    <link rel="icon" href="../img/FastPik icon.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="https://www.fastpikcab.com/logo.png" />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
 <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
 </head>


<body>

    <div class="booking-banner">
        <span>📞 For Immediate Booking: <a href="tel:1234567890">+91 8825694157</a></span>
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
                    <p class="text-xl mb-8 text-gray-300">Fast, safe, and comfortable rides whenever you need them. Book
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
                    <img src="./img/heroimg.png" alt="">

                </div>
            </div>
        </div>
    </section>


    <section id="booking" class="py-16" ng-app="bookingApp" ng-controller="BookingController">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 section-heading">Book Your Ride</h2>

            <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg p-8">
                <form name="bookingForm" class="grid grid-cols-1 md:grid-cols-2 gap-6"
                      ng-submit="submitBooking(bookingForm.$valid)" novalidate>

                    <div class="md:col-span-2 flex items-center space-x-4">
                        <label class="font-medium text-gray-700">Trip Type:</label>
                        <label><input type="radio" ng-model="booking.tripType" value="oneway"
                                        ng-change="calculateassigned_amount()" class="mr-1"> One Way</label>
                        <label><input type="radio" ng-model="booking.tripType" value="round"
                                        ng-change="calculateassigned_amount()" class="mr-1"> Round Trip</label>
                    </div>

                    <div ng-show="booking.tripType === 'round'">
                        <label class="block text-gray-700 font-medium mb-2">Number of Days</label>
                        <select name="no_of_days" ng-model="booking.no_of_days" ng-change="calculateassigned_amount()"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg" required>
                            <option value="">Select Days</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <p ng-show="bookingForm.no_of_days.$invalid && bookingForm.no_of_days.$touched"
                           class="text-red-500 text-sm mt-1">Number of days is required.</p>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Name</label>
                        <input type="text" name="name" ng-model="booking.name" placeholder="Enter your name"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg" required>
                        <p ng-show="bookingForm.name.$invalid && bookingForm.name.$touched"
                           class="text-red-500 text-sm mt-1">Name is required.</p>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Email</label>
                        <input type="email" name="email" ng-model="booking.email" placeholder="Enter your email"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg" required>
                        <p ng-show="bookingForm.email.$invalid && bookingForm.email.$touched"
                           class="text-red-500 text-sm mt-1">Invalid email format.</p>
                    </div>

                    <div class="md:col-span-2">
                        <label class="block text-gray-700 font-medium mb-2">Contact Number</label>
                        <input type="tel" name="contact" ng-model="booking.contact" placeholder="Enter contact number"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg" required>
                        <p ng-show="bookingForm.contact.$invalid && bookingForm.contact.$touched"
                           class="text-red-500 text-sm mt-1">Contact number is required.</p>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Pickup Location</label>
                        <input id="pickup" type="text" name="pickup" ng-model="booking.pickup"
                               placeholder="Enter pickup address"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg" required>
                        <p ng-show="bookingForm.pickup.$invalid && bookingForm.pickup.$touched"
                           class="text-red-500 text-sm mt-1">Pickup location is required.</p>
                        <p ng-show="pickupRequired && !booking.pickup" class="text-red-500 text-sm mt-1">Please select a valid pickup location from the map.</p>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Drop Location</label>
                        <input id="destination" type="text" name="destination" ng-model="booking.destination"
                               placeholder="Enter destination address"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg" required>
                        <p ng-show="bookingForm.destination.$invalid && bookingForm.destination.$touched"
                           class="text-red-500 text-sm mt-1">Drop location is required.</p>
                        <p ng-show="dropRequired && !booking.destination" class="text-red-500 text-sm mt-1">Please select a valid drop location from the map.</p>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Date</label>
                        <input type="date" name="date" ng-model="booking.date"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg" required>
                        <p ng-show="bookingForm.date.$invalid && bookingForm.date.$touched"
                           class="text-red-500 text-sm mt-1">Date is required.</p>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Time</label>
                        <input type="time" name="time" ng-model="booking.time"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg" required>
                        <p ng-show="bookingForm.time.$invalid && bookingForm.time.$touched"
                           class="text-red-500 text-sm mt-1">Time is required.</p>
                    </div>

                     <div>
                    <label class="block text-gray-700 font-medium mb-2">Vehicle Type</label>
                    <select ng-model="booking.vehicle" class="w-full px-4 py-2 border border-gray-300 rounded-lg"
                            required>
                        <option value="">Select Vehicle</option>
                        <option value="Sedan">Sedan</option>
                        <option value="suv">SUV</option>
                        {{-- <option value="premium">MPV</option> --}}
                        {{-- <option value="van">Minivan</option> --}}
                    </select>
                    <p ng-show="bookingForm.vehicle.$invalid && bookingForm.vehicle.$touched"
                       class="text-red-500 text-sm mt-1">Vehicle type is required.</p>
                </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Number of Passengers</label>
                        <select name="passengers" ng-model="booking.passengers"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg" required>
                            <option value="">Select Passengers</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5+">5+</option>
                        </select>
                        <p ng-show="bookingForm.passengers.$invalid && bookingForm.passengers.$touched"
                           class="text-red-500 text-sm mt-1">Number of passengers is required.</p>
                    </div>

                    <p class="mt-4 text-lg font-semibold text-gray-800">Distance: @{{ booking.distance }}</p>
                    <p class="mt-2 text-lg font-semibold text-gray-800">Estimated Price: @{{ assigned_amount | currency:'₹' }}</p>

                    <div class="md:col-span-2">
                        <p ng-show="showMissingFieldsMessage" class="text-red-500 text-center mb-4">Please fill in all the required fields and select valid pickup and drop locations.</p>
                        <button type="submit"
                                class="w-full bg-gray-900 hover:bg-gray-800 text-white font-bold py-3 px-6 rounded-lg transition duration-300"
                                ng-disabled="bookingForm.$invalid || isSubmitting || !booking.pickup || !booking.destination">
                            <span ng-if="!isSubmitting">Book Now</span>
                            <span ng-if="isSubmitting">Booking...</span>
                        </button>
                    </div>
                </form>

                <div ng-show="bookingSuccess" class="mt-8 text-center text-green-500 font-semibold text-lg">
                    Booking Successful!
                </div>
                <div ng-show="bookingError" class="mt-8 text-center text-red-500 font-semibold text-lg">
                    Booking Failed. Please try again.
                </div>

                <div id="map" class="w-full h-64 mt-6 rounded-lg"></div>
            </div>
        </div>
    </section>






    <!-- About Section -->
    <section id="about" class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 section-heading">About FastPik Cab</h2>
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0 md:pr-8">
                    <h3 class="text-2xl font-semibold mb-4">Reliable, Fast, and Affordable Transportation</h3>
                    <p class="text-gray-600 mb-6">
                        Welcome to FastPik Cab, your go-to choice for reliable, fast, and affordable transportation. We
                        are a newly established taxi service with a mission to make your travel experience seamless and
                        stress-free. Whether you're headed to work, the airport, or simply need a ride around town,
                        FastPik Cab is here to get you to your destination safely and on time.
                    </p>
                    <p class="text-gray-600 mb-6">
                        At FastPik Cab, we prioritize your comfort and convenience. Our professional, friendly drivers
                        are dedicated to providing an exceptional ride, and our fleet of clean, well-maintained vehicles
                        ensures a pleasant experience every time you step in.
                    </p>
                    <p class="text-gray-600 mb-6">
                        What sets us apart? Our commitment to customer satisfaction, competitive pricing, and flexible
                        booking options. With FastPik Cab, you can enjoy a hassle-free ride that suits your schedule,
                        all at a price that fits your budget.
                    </p>
                    <p class="text-gray-600 mb-6">
                        Thank you for choosing FastPik Cab – your trusted ride, anytime, anywhere.
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
                            extraCostDetails.textContent = routeData.description || 'Details not available.'; // Use API data or default
                            extraCostCol.appendChild(extraCostDetails);
                            routeItem.appendChild(extraCostCol);

                            // Cab Cost Column
                            const cabCostCol = document.createElement('div');
                            cabCostCol.classList.add('route-col', 'cab-cost');
                            const currentPrice = document.createElement('span');
                            currentPrice.classList.add('current-price');
                            currentPrice.textContent = `Rs ${parseFloat(routeData.pricing).toLocaleString('en-IN')}*`; // Format as Indian Rupee
                            cabCostCol.appendChild(currentPrice);

                            if (routeData.old_pricing) {
                                const oldPrice = document.createElement('span');
                                oldPrice.classList.add('old-price');
                                oldPrice.textContent = `Rs. ${parseFloat(routeData.old_pricing).toLocaleString('en-IN')}`;
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
      <div class="absolute top-0 right-0 bg-gray-900 text-white text-xs font-bold px-3 py-1 rounded-bl-lg">
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
                        document.getElementById('sedan-oneway-rate').textContent = `₹${pricing.base_price_per_km}/km`;
                        document.getElementById('sedan-oneway-min-km').textContent = pricing.minimum_distance;
                        sedanOneway = pricing;
                    } else if (pricing.trip_type === 'Round Trip') {
                        document.getElementById('sedan-roundtrip-rate').textContent = `₹${pricing.base_price_per_km}/km`;
                        document.getElementById('sedan-roundtrip-min-km').textContent = pricing.minimum_distance;
                        sedanRoundtrip = pricing;
                    }
                } else if (pricing.vehicle_type === 'SUV') {
                    if (pricing.trip_type === 'One-way') {
                        document.getElementById('suv-oneway-rate').textContent = `₹${pricing.base_price_per_km}/km`;
                        document.getElementById('suv-oneway-min-km').textContent = pricing.minimum_distance;
                        suvOneway = pricing;
                    } else if (pricing.trip_type === 'Round Trip') {
                        document.getElementById('suv-roundtrip-rate').textContent = `₹${pricing.base_price_per_km}/km`;
                        document.getElementById('suv-roundtrip-min-km').textContent = pricing.minimum_distance;
                        suvRoundtrip = pricing;
                    }
                    // Apply SUV pricing to MPV
                    const mpvOnewayRateElement = document.getElementById('mpv-oneway-rate');
                    if (mpvOnewayRateElement && suvOneway) {
                        mpvOnewayRateElement.textContent = `₹${suvOneway.base_price_per_km}/km`;
                        document.getElementById('mpv-oneway-min-km').textContent = suvOneway.minimum_distance;
                    }
                    const mpvRoundtripRateElement = document.getElementById('mpv-roundtrip-rate');
                    if (mpvRoundtripRateElement && suvRoundtrip) {
                        mpvRoundtripRateElement.textContent = `₹${suvRoundtrip.base_price_per_km}/km`;
                        document.getElementById('mpv-roundtrip-min-km').textContent = suvRoundtrip.minimum_distance;
                    }
                    // Get additional charges from SUV data (assuming it's the same for MPV)
                    document.getElementById('waiting-charge').textContent = `₹${pricing.waiting_charge_per_hour}`;
                    document.getElementById('luggage-charge').textContent = `₹${pricing.luggage_charge_per_kg}/kg`;
                    document.getElementById('hill-station-charge').textContent = `₹${pricing.hill_station_charge}`;
                }
            });

            // Set the general minimum distance and driver bata info (using Sedan data)
            if (sedanOneway) {
                document.getElementById('oneway-min-km-all').textContent = sedanOneway.minimum_distance;
                const driverBataOneWay = parseInt(sedanOneway.minimum_distance) > 400 ? `₹${sedanOneway.driver_beta_500}` : `₹${sedanOneway.driver_beta_300}`;
                document.getElementById('oneway-driver-bata').textContent = `Driver Bata ${driverBataOneWay} (₹600/- if above 400 kms)`;
            }
            if (sedanRoundtrip) {
                document.getElementById('roundtrip-min-km-all').textContent = sedanRoundtrip.minimum_distance;
                const driverBataRoundTrip = parseInt(sedanRoundtrip.minimum_distance) > 500 ? `₹${sedanRoundtrip.driver_beta_500}/day` : `₹${sedanRoundtrip.driver_beta_300}/day`;
                document.getElementById('roundtrip-driver-bata').textContent = `Driver Bata ${driverBataRoundTrip} (₹600/day if >500 kms)`;
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
                testimonialsContainer.textContent = 'No testimonials found yet. Be the first to share your experience!';
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
    <a href="https://wa.me/+918825694157" target="_blank" class="whatsapp-link">
        <i class="fab fa-whatsapp"></i>
    </a>

    @include('layouts.routes')

    <footer class="bg-gray-900 text-white">
        <!-- Top Footer Section -->
        <div class="container mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div>
                    <div class="flex items-center space-x-2 mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-400" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                            <path
                                d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H11a1 1 0 001-1v-1h3.5a1 1 0 00.8-.4l2.5-3.33a1 1 0 00.2-.6V8a1 1 0 00-1-1h-2V5a1 1 0 00-1-1H3zm11 6h2v2.67l-1.87 2.5H11V10h3z" />
                        </svg>
                        <span class="font-bold text-xl">Fastpik</span>
                    </div>
                    <p class="text-gray-400 mb-4">Your trusted taxi service partner since 2025. We're committed to
                        providing safe, reliable, and comfortable transportation.</p>
                    <div class="flex space-x-4">
                        <a href="#"
                            class="social-icon bg-gray-800 hover:bg-gray-700 h-10 w-10 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="social-icon bg-gray-800 hover:bg-gray-700 h-10 w-10 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="social-icon bg-gray-800 hover:bg-gray-700 h-10 w-10 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="social-icon bg-gray-800 hover:bg-gray-700 h-10 w-10 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-semibold mb-6 relative">
                        Quick Links
                        <span class="absolute bottom-0 left-0 w-10 h-1 bg-yellow-400 -mb-2"></span>
                    </h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="footer-link text-gray-400 hover:text-white">Home</a></li>
                        <li><a href="#" class="footer-link text-gray-400 hover:text-white">About Us</a></li>
                        <li><a href="#" class="footer-link text-gray-400 hover:text-white">Services</a></li>
                        <li><a href="#" class="footer-link text-gray-400 hover:text-white">Fleet</a></li>
                        <li><a href="#" class="footer-link text-gray-400 hover:text-white">Pricing</a></li>
                        <li><a href="#" class="footer-link text-gray-400 hover:text-white">Contact</a></li>
                    </ul>
                </div>

                <!-- Our Services -->
                <div>
                    <h3 class="text-lg font-semibold mb-6 relative">
                        Our Services
                        <span class="absolute bottom-0 left-0 w-10 h-1 bg-yellow-400 -mb-2"></span>
                    </h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="footer-link text-gray-400 hover:text-white">City Transfers</a>
                        </li>
                        <li><a href="#" class="footer-link text-gray-400 hover:text-white">Airport Pickups</a>
                        </li>
                        <li><a href="#" class="footer-link text-gray-400 hover:text-white">Corporate
                                Services</a></li>
                        <li><a href="#" class="footer-link text-gray-400 hover:text-white">Event
                                Transportation</a></li>
                        <li><a href="#" class="footer-link text-gray-400 hover:text-white">Hourly Rentals</a>
                        </li>
                        <li><a href="#" class="footer-link text-gray-400 hover:text-white">Tour Packages</a>
                        </li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="text-lg font-semibold mb-6 relative">
                        Contact Us
                        <span class="absolute bottom-0 left-0 w-10 h-1 bg-yellow-400 -mb-2"></span>
                    </h3>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400 mr-3 mt-1"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="text-gray-400">Throw Pathi Amman Kovil Street <br> Kalanjukuppam, Tamil Nadu
                                607104</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400 mr-3 mt-1"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span class="text-gray-400">+91 8825694157<br>+91 9597258671</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400 mr-3 mt-1"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span class="text-gray-400">fastpikcab@gmail.com<br></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bg-gray-800 py-8">
        <div class="container mx-auto px-4">
            <h3 class="text-lg font-semibold mb-6 relative">
                Our Cities
                <span class="absolute bottom-0 left-0 w-10 h-1 bg-yellow-400 -mb-2"></span>
            </h3>
            <ul class="flex flex-wrap items-center space-x-4 space-y-2 lg:space-y-0">
                <li><a href="{{ route('chennai-taxi-service') }}" class="footer-link text-gray-400 hover:text-white">Chennai</a></li>
                <li><a href="{{ route('coimbatore-taxi-service') }}" class="footer-link text-gray-400 hover:text-white">Coimbatore</a></li>
                <li><a href="{{ route('madurai-taxi-service') }}" class="footer-link text-gray-400 hover:text-white">Madurai</a></li>
                <li><a href="{{ route('trichy-taxi-service') }}" class="footer-link text-gray-400 hover:text-white">Tiruchirappalli (Trichy)</a></li>
                <li><a href="{{ route('salem-taxi-service') }}" class="footer-link text-gray-400 hover:text-white">Salem</a></li>
                <li><a href="{{ route('tirunelveli-taxi-service') }}" class="footer-link text-gray-400 hover:text-white">Tirunelveli</a></li>
                <li><a href="{{ route('erode-taxi-service') }}" class="footer-link text-gray-400 hover:text-white">Erode</a></li>
                <li><a href="{{ route('vellore-taxi-service') }}" class="footer-link text-gray-400 hover:text-white">Vellore</a></li>
                <li><a href="{{ route('thoothukudi-taxi-service') }}" class="footer-link text-gray-400 hover:text-white">Thoothukudi (Tuticorin)</a></li>
                <li><a href="{{ route('thanjavur-taxi-service') }}" class="footer-link text-gray-400 hover:text-white">Thanjavur</a></li>
                <li><a href="{{ route('dindigul-taxi-service') }}" class="footer-link text-gray-400 hover:text-white">Dindigul</a></li>
                <li><a href="{{ route('cuddalore-taxi-service') }}" class="footer-link text-gray-400 hover:text-white">Cuddalore</a></li>
                <li><a href="{{ route('kanchipuram-taxi-service') }}" class="footer-link text-gray-400 hover:text-white">Kanchipuram</a></li>
                <li><a href="{{ route('nagercoil-taxi-service') }}" class="footer-link text-gray-400 hover:text-white">Nagercoil</a></li>
                <li><a href="{{ route('karur-taxi-service') }}" class="footer-link text-gray-400 hover:text-white">Karur</a></li>
                <li><a href="{{ route('tiruppur-taxi-service') }}" class="footer-link text-gray-400 hover:text-white">Tiruppur</a></li>
                <li><a href="{{ route('sivakasi-taxi-service') }}" class="footer-link text-gray-400 hover:text-white">Sivakasi</a></li>
                <li><a href="{{ route('hosur-taxi-service') }}" class="footer-link text-gray-400 hover:text-white">Hosur</a></li>
                <li><a href="{{ route('krishnagiri-taxi-service') }}" class="footer-link text-gray-400 hover:text-white">Krishnagiri</a></li>
                <li><a href="{{ route('namakkal-taxi-service') }}" class="footer-link text-gray-400 hover:text-white">Namakkal</a></li>
                <li><a href="{{ route('villupuram-taxi-service') }}" class="footer-link text-gray-400 hover:text-white">Villupuram</a></li>
                <li><a href="{{ route('pudukkottai-taxi-service') }}" class="footer-link text-gray-400 hover:text-white">Pudukkottai</a></li>
                <li><a href="{{ route('nagapattinam-taxi-service') }}" class="footer-link text-gray-400 hover:text-white">Nagapattinam</a></li>
                <li><a href="{{ route('arakkonam-taxi-service') }}" class="footer-link text-gray-400 hover:text-white">Arakkonam</a></li>
                <li><a href="{{ route('chengalpattu-taxi-service') }}" class="footer-link text-gray-400 hover:text-white">Chengalpattu</a></li>
                <li><a href="{{ route('mayiladuthurai-taxi-service') }}" class="footer-link text-gray-400 hover:text-white">Mayiladuthurai</a></li>
                <li><a href="{{ route('thiruvarur-taxi-service') }}" class="footer-link text-gray-400 hover:text-white">Thiruvarur</a></li>
                {{-- <li><a href="{{ route('arani-taxi-service') }}" class="footer-link text-gray-400 hover:text-white">Arani</a></li> --}}
                <li><a href="{{ route('ranipet-taxi-service') }}" class="footer-link text-gray-400 hover:text-white">Ranipet</a></li>
                <li><a href="{{ route('perambalur-taxi-service') }}" class="footer-link text-gray-400 hover:text-white">Perambalur</a></li>
                <li><a href="{{ route('tenkasi-taxi-service') }}" class="footer-link text-gray-400 hover:text-white">Tenkasi</a></li>
                <li><a href="{{ route('virudhunagar-taxi-service') }}" class="footer-link text-gray-400 hover:text-white">Virudhunagar</a></li>
                <li><a href="{{ route('ramanathapuram-taxi-service') }}" class="footer-link text-gray-400 hover:text-white">Ramanathapuram</a></li>
                <li><a href="{{ route('dharmapuri-taxi-service') }}" class="footer-link text-gray-400 hover:text-white">Dharmapuri</a></li>
            </ul>
        </div>
    </div>

        <!-- App Download Section -->
        <div class="bg-gray-900 py-8 border-t border-gray-800">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row items-center justify-between">
                    <div class="mb-6 md:mb-0 text-center md:text-left">
                        <h4 class="text-lg font-semibold mb-2 text-white">Mobile App Coming Soon</h4>
                        <p class="text-gray-400">Book rides on the go with our upcoming mobile app.</p>
                    </div>
                    <div class="text-center md:text-right">
                        <span
                            class="inline-block bg-yellow-500 text-black font-semibold px-6 py-2 rounded-lg shadow-md">
                            Coming Soon on App Store & Google Play
                        </span>
                    </div>
                </div>
            </div>
        </div>


        <!-- Bottom Footer -->
        <div class="bg-gray-950 py-6">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="text-gray-500 text-sm mb-4 md:mb-0">
                        © 2025 Fastpik Taxi Service. All rights reserved.
                    </div>
                    <div class="flex space-x-6">
                        <a href="#"
                            class="text-gray-500 hover:text-white text-sm transition duration-300">Privacy Policy</a>
                        <a href="#" class="text-gray-500 hover:text-white text-sm transition duration-300">Terms
                            of Service</a>
                        <a href="#"
                            class="text-gray-500 hover:text-white text-sm transition duration-300">Cookie Policy</a>
                    </div>
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
