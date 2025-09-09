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
                <a href="#home" class="text-white hover:text-yellow-400 font-medium">Home</a>

                <a href="{{ route('contactpage') }}" class="text-white hover:text-yellow-400 font-medium">Contact</a>
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
                    <label class="block text-gray-700 font-medium mb-2">Email (Optional)</label>
                    <input type="email" name="email" ng-model="booking.email" placeholder="Enter your email"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg">
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
                        placeholder="Enter pickup address" class="w-full px-4 py-2 border border-gray-300 rounded-lg"
                        required>
                    <p ng-show="bookingForm.pickup.$invalid && bookingForm.pickup.$touched"
                        class="text-red-500 text-sm mt-1">Pickup location is required.</p>
                    <p ng-show="pickupRequired && !booking.pickup" class="text-red-500 text-sm mt-1">Please select
                        a valid pickup location from the map.</p>
                </div>

                <div>
                    <label class="block text-gray-700 font-medium mb-2">Drop Location</label>
                    <input id="destination" type="text" name="destination" ng-model="booking.destination"
                        placeholder="Enter destination address"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg" required>
                    <p ng-show="bookingForm.destination.$invalid && bookingForm.destination.$touched"
                        class="text-red-500 text-sm mt-1">Drop location is required.</p>
                    <p ng-show="dropRequired && !booking.destination" class="text-red-500 text-sm mt-1">Please
                        select a valid drop location from the map.</p>
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
                <p class="mt-2 text-lg font-semibold text-gray-800">Estimated Price: @{{ assigned_amount | currency: '₹' }}</p>

                <div class="md:col-span-2">
                    <p ng-show="showMissingFieldsMessage" class="text-red-500 text-center mb-4">
                        Please fill in all the required fields and select valid pickup and drop locations.
                    </p>
                    <button type="submit"
                        class="w-full bg-gray-900 hover:bg-gray-800 text-white font-bold py-3 px-6 rounded-lg transition duration-300">
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
