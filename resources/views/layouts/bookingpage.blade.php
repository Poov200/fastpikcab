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

                <a href="{{ route('contactpage') }}" class="text-white hover:text-yellow-400 font-medium">Contact</a>
                <a href="{{ route('blog') }}" class="text-white hover:text-yellow-400 font-medium">Blogs</a>
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



  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17877026034"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'AW-17877026034');
  </script>

