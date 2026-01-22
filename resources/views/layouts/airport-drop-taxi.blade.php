<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Airport Taxi Service in Tamil Nadu | Pickup & Drop Cabs – Fastpikcab</title>
    <meta name="description"
        content="Reliable airport taxi service in Tamil Nadu. Book safe & punctual cabs for airport drops and pickups. Chennai, Bangalore, Coimbatore Airport transfers. 24/7 Availability.">
    <meta name="keywords"
        content="airport taxi chennai, airport drop taxi, airport pickup cab, bangalore airport taxi, coimbatore airport cab, airport transfer service, reliable airport taxi">
    <link rel="canonical" href="https://fastpikcab.com/airport-taxi-tamil-nadu" />
    <link rel="icon" href="../img/FastPik icon.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="https://fastpikcab.com/img/FastPik%20Logo.png" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>

    <style>
        html {
            scroll-behavior: smooth;
        }

        /* Gradient Text Utility */
        .text-gradient {
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "name": "Airport Taxi Service",
      "description": "Fastpikcab provides punctual airport transfer services including drops and pickups across major airports in South India.",
      "provider": {
        "@type": "LocalBusiness",
        "name": "Fastpikcab",
        "image": "https://fastpikcab.com/img/logo.png",
        "telephone": "+919876543210",
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "Chennai",
          "addressRegion": "Tamil Nadu",
          "addressCountry": "IN"
        },
        "priceRange": "$$"
      },
      "areaServed": ["Chennai International Airport", "Kempegowda International Airport", "Coimbatore International Airport", "Trichy International Airport"],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Airport Packages",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Airport Drop Taxi"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Airport Pickup Taxi"
            }
          }
        ]
      }
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Do you offer service for late-night flights?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, our airport taxi service operates 24/7. Whether your flight is at 2 AM or 2 PM, we ensure a driver is assigned to you."
          }
        },
        {
          "@type": "Question",
          "name": "Are airport tolls included in the fare?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Toll charges are generally extra and paid by the customer directly. However, we offer some flat-rate packages where tolls might be included."
          }
        },
        {
          "@type": "Question",
          "name": "How will I find my driver for an airport pickup?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For airport pickups, our driver will share their live location and vehicle details 30 minutes prior to your arrival. They will wait at the designated pickup point."
          }
        }
      ]
    }
    </script>
</head>

<body class="bg-gray-50 font-sans antialiased text-gray-800">

    @include('layouts.navbar')

    <section class="relative bg-gray-900 text-white py-24 px-4 overflow-hidden">
        <img src="https://picsum.photos/seed/airport/1920/1080" alt="Airport Taxi"
            class="absolute inset-0 w-full h-full object-cover opacity-40 transform scale-105 transition-transform duration-1000">
        <div class="absolute inset-0 bg-gradient-to-r from-gray-900 via-gray-900/80 to-transparent"></div>

        <div class="relative z-10 max-w-6xl mx-auto flex flex-col md:flex-row items-center">
            <div class="md:w-3/5 text-center md:text-left mb-10 md:mb-0">
                <span
                    class="inline-block py-1 px-3 rounded-full bg-blue-600 text-white text-xs font-bold uppercase tracking-wide mb-4 shadow-lg ring-2 ring-blue-500 ring-offset-2 ring-offset-gray-900">
                    Never Miss a Flight
                </span>

                <h1 class="text-4xl md:text-6xl font-extrabold mb-6 leading-tight">
                    Punctual <span class="text-blue-400">Airport Taxi</span> <br> Service in Tamil Nadu
                </h1>

                <p class="text-lg md:text-xl text-gray-300 mb-8 max-w-2xl">
                    Start your journey with peace of mind. Fastpikcab offers reliable airport drops and pickups with
                    real-time tracking, clean cars, and professional drivers who value your time.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                    <a href="#booking"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 px-8 rounded-xl transition shadow-lg hover:shadow-blue-500/50 transform hover:-translate-y-1 flex items-center justify-center">
                        <i class="fas fa-plane-departure mr-2"></i> Book Airport Ride
                    </a>
                    <a href="#airports"
                        class="bg-transparent hover:bg-gray-800 text-white font-bold py-4 px-8 rounded-xl border border-gray-500 transition flex items-center justify-center">
                        <i class="fas fa-map-marker-alt mr-2"></i> View Airports
                    </a>
                </div>
            </div>

            <div class="hidden md:block md:w-2/5 pl-10">
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-gray-800/80 backdrop-blur-sm p-6 rounded-2xl border border-gray-700">
                        <div class="text-3xl font-bold text-blue-400 mb-1">24/7</div>
                        <div class="text-sm text-gray-300">Availability</div>
                    </div>
                    <div class="bg-gray-800/80 backdrop-blur-sm p-6 rounded-2xl border border-gray-700">
                        <div class="text-3xl font-bold text-yellow-400 mb-1">99%</div>
                        <div class="text-sm text-gray-300">On-Time Arrival</div>
                    </div>
                    <div class="bg-gray-800/80 backdrop-blur-sm p-6 rounded-2xl border border-gray-700 col-span-2">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-10 rounded-full bg-green-500/20 flex items-center justify-center text-green-400">
                                <i class="fas fa-luggage-cart"></i>
                            </div>
                            <div>
                                <div class="font-bold text-white">Spacious Boots</div>
                                <div class="text-xs text-gray-400">Ample space for your international luggage</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 px-4 bg-white">
        <div class="max-w-5xl mx-auto text-center">
            <h2 class="text-2xl md:text-4xl font-bold mb-6 text-gray-900">Hassle-Free Airport Transfers</h2>
            <p class="text-gray-600 text-lg mb-8 leading-relaxed max-w-3xl mx-auto">
                Avoid the stress of driving, expensive parking fees, or unreliable shuttle services.
                Our <strong>Airport Taxi Services</strong> are dedicated to getting you to the terminal comfortably and
                on time.
                Whether it's a <strong>One Way Drop</strong> or a <strong>Pickup</strong> for your guests, we handle the
                logistics.
            </p>
            <div class="grid md:grid-cols-3 gap-6 text-left mt-10">
                <div class="p-6 border-l-4 border-blue-500 bg-blue-50 rounded-r-lg">
                    <h4 class="font-bold text-blue-900 mb-2">Airport Drop</h4>
                    <p class="text-sm text-blue-800">Timely pickup from your doorstep to the airport departure terminal.
                        Ideal for departures.</p>
                </div>
                <div class="p-6 border-l-4 border-purple-500 bg-purple-50 rounded-r-lg">
                    <h4 class="font-bold text-purple-900 mb-2">Airport Pickup</h4>
                    <p class="text-sm text-purple-800">Driver waits at the arrival hall. No waiting in queues. Direct
                        travel to your city or home.</p>
                </div>
                <div class="p-6 border-l-4 border-green-500 bg-green-50 rounded-r-lg">
                    <h4 class="font-bold text-green-900 mb-2">Round Trip Transfers</h4>
                    <p class="text-sm text-green-800">Dropping a relative? Book a round trip to drop them at the airport
                        and return home comfortably.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 px-4 bg-gray-50">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Why Choose Us for Airport Travel?
                </h2>
                <p class="text-gray-500">Punctuality and reliability are our core promises.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition duration-300 group">
                    <div
                        class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 mb-6 group-hover:scale-110 transition">
                        <i class="fas fa-hourglass-half text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-xl mb-3 text-gray-900">On-Time Guarantee</h3>
                    <p class="text-gray-600">We understand the value of flight timings. Our drivers arrive 15 minutes
                        early to ensure you never rush.</p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition duration-300 group">
                    <div
                        class="w-14 h-14 bg-green-100 rounded-full flex items-center justify-center text-green-600 mb-6 group-hover:scale-110 transition">
                        <i class="fas fa-tag text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-xl mb-3 text-gray-900">Fixed Rates</h3>
                    <p class="text-gray-600">No surge pricing during peak hours or rain. Pay the booked price with
                        transparent billing details.</p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition duration-300 group">
                    <div
                        class="w-14 h-14 bg-red-100 rounded-full flex items-center justify-center text-red-600 mb-6 group-hover:scale-110 transition">
                        <i class="fas fa-suitcase-rolling text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-xl mb-3 text-gray-900">Luggage Assistance</h3>
                    <p class="text-gray-600">Heavy bags? No problem. Our drivers assist with loading and unloading your
                        luggage at the terminal.</p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition duration-300 group">
                    <div
                        class="w-14 h-14 bg-yellow-100 rounded-full flex items-center justify-center text-yellow-600 mb-6 group-hover:scale-110 transition">
                        <i class="fas fa-moon text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-xl mb-3 text-gray-900">Late Night / Early Morning</h3>
                    <p class="text-gray-600">Flights don't follow a 9-to-5 schedule, and neither do we. We operate 24/7
                        for all flight schedules.</p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition duration-300 group">
                    <div
                        class="w-14 h-14 bg-purple-100 rounded-full flex items-center justify-center text-purple-600 mb-6 group-hover:scale-110 transition">
                        <i class="fas fa-plane-arrival text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-xl mb-3 text-gray-900">Flight Tracking</h3>
                    <p class="text-gray-600">For pickups, we track your flight status. If your flight is delayed, our
                        driver waits for you automatically.</p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition duration-300 group">
                    <div
                        class="w-14 h-14 bg-indigo-100 rounded-full flex items-center justify-center text-indigo-600 mb-6 group-hover:scale-110 transition">
                        <i class="fas fa-headset text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-xl mb-3 text-gray-900">24/7 Support</h3>
                    <p class="text-gray-600">Change in plans? Dedicated support team available to handle rescheduling or
                        cancellations instantly.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="airports" class="py-16 px-4 bg-white">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold mb-10 text-center text-gray-900">Major Airports We Serve</h2>

            <div class="grid md:grid-cols-3 gap-6">
                <div class="rounded-xl overflow-hidden shadow-lg group relative">
                    <img src="https://picsum.photos/seed/chennaiairport/400/300"
                        class="w-full h-48 object-cover transition transform group-hover:scale-110 duration-500"
                        alt="Chennai Airport Taxi">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-90">
                    </div>
                    <div class="absolute bottom-0 left-0 p-5 w-full">
                        <h3 class="text-xl font-bold text-white mb-1">Chennai International Airport (MAA)</h3>
                        <div class="flex justify-between items-end">
                            <span class="text-yellow-400 text-sm"><i class="fas fa-city"></i> City & Outstation</span>
                            <a href="#"
                                class="text-white bg-blue-600 hover:bg-blue-700 px-3 py-1 rounded text-sm font-medium">Book
                                Cab</a>
                        </div>
                    </div>
                </div>

                <div class="rounded-xl overflow-hidden shadow-lg group relative">
                    <img src="https://picsum.photos/seed/bangaloreairport/400/300"
                        class="w-full h-48 object-cover transition transform group-hover:scale-110 duration-500"
                        alt="Bangalore Airport Taxi">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-90">
                    </div>
                    <div class="absolute bottom-0 left-0 p-5 w-full">
                        <h3 class="text-xl font-bold text-white mb-1">Bangalore Airport (BLR)</h3>
                        <div class="flex justify-between items-end">
                            <span class="text-yellow-400 text-sm"><i class="fas fa-road"></i> Intercity Transfer</span>
                            <a href="#"
                                class="text-white bg-blue-600 hover:bg-blue-700 px-3 py-1 rounded text-sm font-medium">Book
                                Cab</a>
                        </div>
                    </div>
                </div>

                <div class="rounded-xl overflow-hidden shadow-lg group relative">
                    <img src="https://picsum.photos/seed/coimbatoreairport/400/300"
                        class="w-full h-48 object-cover transition transform group-hover:scale-110 duration-500"
                        alt="Coimbatore Airport Taxi">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-90">
                    </div>
                    <div class="absolute bottom-0 left-0 p-5 w-full">
                        <h3 class="text-xl font-bold text-white mb-1">Coimbatore Airport (CJB)</h3>
                        <div class="flex justify-between items-end">
                            <span class="text-yellow-400 text-sm"><i class="fas fa-mountain"></i> Gateway to Ooty</span>
                            <a href="#"
                                class="text-white bg-blue-600 hover:bg-blue-700 px-3 py-1 rounded text-sm font-medium">Book
                                Cab</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-12 grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
                <a href="#" class="text-gray-600 hover:text-blue-600 flex items-center"><i
                        class="fas fa-chevron-right text-xs mr-2 text-blue-400"></i> Trichy Airport Taxi</a>
                <a href="#" class="text-gray-600 hover:text-blue-600 flex items-center"><i
                        class="fas fa-chevron-right text-xs mr-2 text-blue-400"></i> Madurai Airport Cabs</a>
                <a href="#" class="text-gray-600 hover:text-blue-600 flex items-center"><i
                        class="fas fa-chevron-right text-xs mr-2 text-blue-400"></i> Salem Airport Drop</a>
                <a href="#" class="text-gray-600 hover:text-blue-600 flex items-center"><i
                        class="fas fa-chevron-right text-xs mr-2 text-blue-400"></i> Pondicherry to Chennai Airport</a>
                <a href="#" class="text-gray-600 hover:text-blue-600 flex items-center"><i
                        class="fas fa-chevron-right text-xs mr-2 text-blue-400"></i> Vellore to MAA Airport</a>
                <a href="#" class="text-gray-600 hover:text-blue-600 flex items-center"><i
                        class="fas fa-chevron-right text-xs mr-2 text-blue-400"></i> Hosur to Bangalore Airport</a>
                <a href="#" class="text-gray-600 hover:text-blue-600 flex items-center"><i
                        class="fas fa-chevron-right text-xs mr-2 text-blue-400"></i> Ooty to Coimbatore Airport</a>
                <a href="#" class="text-gray-600 hover:text-blue-600 flex items-center"><i
                        class="fas fa-chevron-right text-xs mr-2 text-blue-400"></i> Tirupati to Chennai Airport</a>
            </div>
        </div>
    </section>

    <section class="py-16 px-4 bg-gray-50">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-10 text-gray-900">Common Questions about Airport Taxis
            </h2>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow-sm border-l-4 border-blue-500">
                    <h3 class="font-bold text-gray-900 mb-2 text-lg">Are there waiting charges for airport pickups?</h3>
                    <p class="text-gray-600 text-sm">We provide a complimentary 45-minute waiting period from the time
                        your flight lands. Post that, nominal waiting charges may apply. We track flights to minimize wait
                        times.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm border-l-4 border-blue-500">
                    <h3 class="font-bold text-gray-900 mb-2 text-lg">How early should I book for a departure?</h3>
                    <p class="text-gray-600 text-sm">We recommend booking at least 4 hours in advance to ensure availability,
                        especially for late-night or early-morning slots. However, we also accept last-minute bookings subject to availability.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm border-l-4 border-blue-500">
                    <h3 class="font-bold text-gray-900 mb-2 text-lg">Do you provide invoices for corporate travel?
                    </h3>
                    <p class="text-gray-600 text-sm">Yes. GST invoices are automatically generated and sent to your email
                        after the trip completion, which you can use for corporate reimbursements.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm border-l-4 border-blue-500">
                    <h3 class="font-bold text-gray-900 mb-2 text-lg">Are toll and parking charges included?</h3>
                    <p class="text-gray-600 text-sm">Our base fare covers the car and driver. Airport parking fees (if pickup is inside)
                        and highway tolls are extra and need to be paid by the customer.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="booking" class="py-8 bg-gradient-to-br from-gray-50 to-gray-100" ng-app="bookingApp"
        ng-controller="BookingController">
        <div class="container mx-auto px-4">
            <div class="text-center mb-6">
                <h2 class="text-3xl font-bold text-gray-800 mb-2">Book Airport Taxi</h2>
                <p class="text-gray-600 px-2">Instant confirmation for your airport pickup or drop</p>
            </div>

            <div class="max-w-5xl mx-auto bg-white rounded-2xl shadow-xl overflow-hidden">
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
                    <div class="mb-6 p-4 bg-blue-50 rounded-xl border border-blue-100">
                        <h3 class="text-lg font-semibold text-gray-800 mb-3 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z">
                                </path>
                            </svg>
                            Service Type
                        </h3>
                        <div class="flex flex-col space-y-3">
                            <label
                                class="flex items-center p-3 bg-white rounded-lg border-2 border-gray-200 cursor-pointer hover:border-blue-400 transition-colors">
                                <input type="radio" ng-model="booking.tripType" value="oneway"
                                    ng-change="calculateassigned_amount()" class="mr-3 h-5 w-5 text-blue-600">
                                <div>
                                    <div class="font-medium text-gray-800">One Way Drop / Pickup</div>
                                    <div class="text-sm text-gray-500">Direct transfer to or from airport</div>
                                </div>
                            </label>
                            <label
                                class="flex items-center p-3 bg-white rounded-lg border-2 border-gray-200 cursor-pointer hover:border-blue-400 transition-colors">
                                <input type="radio" ng-model="booking.tripType" value="round"
                                    ng-change="calculateassigned_amount()" class="mr-3 h-5 w-5 text-blue-600">
                                <div>
                                    <div class="font-medium text-gray-800">Round Trip (Pickup & Drop)</div>
                                    <div class="text-sm text-gray-500">Drop at airport and return (or vice versa)</div>
                                </div>
                            </label>
                        </div>

                        <div ng-show="booking.tripType === 'round'" class="mt-4">
                            <label class="block text-gray-700 font-medium mb-2">Duration</label>
                            <select name="no_of_days" ng-model="booking.no_of_days"
                                ng-change="calculateassigned_amount()"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                required>
                                <option value="">Select Duration</option>
                                <option value="1">Same Day Return</option>
                                <option value="2">2 Days</option>
                                <option value="3">3 Days</option>
                            </select>
                            <p ng-show="bookingForm.no_of_days.$invalid && bookingForm.no_of_days.$touched"
                                class="text-red-500 text-sm mt-1">Duration is required.</p>
                        </div>
                    </div>

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
                                                clip-rule="evenodd">
                                            </path>
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

                    <div class="mb-6 p-4 bg-purple-50 rounded-xl border border-purple-100">
                        <h3 class="text-lg font-semibold text-gray-800 mb-3 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-purple-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Route Details
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
                                        placeholder="Eg: Chennai Airport (or) Home Address"
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
                                        ng-model="booking.destination" placeholder="Eg: T-Nagar (or) Bangalore Airport"
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

                    <div class="mb-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="p-4 bg-yellow-50 rounded-xl border border-yellow-100">
                                <h3 class="text-lg font-semibold text-gray-800 mb-3 flex items-center">
                                    <svg class="w-5 h-5 mr-2 text-yellow-500" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    Flight/Trip Schedule
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <label class="block text-gray-700 font-medium mb-2">Pickup Date</label>
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
                                        <label class="block text-gray-700 font-medium mb-2">Pickup Time</label>
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
                                    Vehicle Preference
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
                                                <option value="Sedan">Sedan (Etios/Dzire) - Max 4 Pax</option>
                                                <option value="suv">SUV (Innova/Crysta) - Max 6/7 Pax</option>
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
                                Book Airport Taxi Now
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
                                Processing...
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
                                <span class="font-semibold">Booking Successful! Our driver will call you shortly.</span>
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

    @include('layouts.footer')

    <script src="{{ asset('js/app.js') }}"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFS0STKnYFbgLIwD6MH37_Zymm388hUO8&libraries=places&callback=initMap"
        async defer></script>

</body>

</html>
