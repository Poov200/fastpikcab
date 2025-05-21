<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Fastpik Cab - Online Taxi Booking Service | Safe & Affordable Rides</title>

        <!-- ✅ SEO Meta Tags -->
        <meta name="description" content="Fastpik Cab offers reliable and affordable taxi booking services. Book your ride instantly online with Fastpik for a smooth and safe journey." />
        <meta name="keywords" content="Fastpik Cab, taxi booking, online cab service, book cab, affordable taxi, safe rides, local cabs, airport taxi" />
        <meta name="author" content="Fastpik Cab" />

        <!-- ✅ Open Graph (for social media preview) -->
        <meta property="og:title" content="Fastpik Cab - Your Trusted Taxi Booking Partner" />
        <meta property="og:description" content="Book your next ride with Fastpik Cab — affordable, safe, and fast taxi service available online." />
        <meta property="og:image" content="https://www.fastpikcab.com/logo.png" />
        <meta property="og:url" content="https://www.fastpikcab.com/" />
        <meta property="og:type" content="website" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        <!-- ✅ Twitter Card -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Fastpik Cab - Trusted Taxi Booking Service" />
        <meta name="twitter:description" content="Fast and affordable cab service from Fastpik. Book your ride in minutes!" />
        <meta name="twitter:image" content="https://www.fastpikcab.com/logo.png" />

        <!-- ✅ Favicon and Logo -->
        <link rel="icon" href="/favicon.ico" type="image/x-icon" />
        <link rel="apple-touch-icon" href="https://www.fastpikcab.com/logo.png" />

        <!-- ✅ Font and Tailwind -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- ✅ AngularJS -->
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>

        <!-- ✅ Bootstrap -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


        <!-- ✅ Google Maps API -->
           <script
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFS0STKnYFbgLIwD6MH37_Zymm388hUO8&libraries=places&callback=initMap"
  async
  defer
></script>
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

          <img style="max-width:150px " src="../img/logo-removebg-preview.png" alt="">
          </a>
        </div>

        <!-- Desktop Navigation -->
        <div class="hidden md:flex flex-wrap items-center space-x-6">
          <a href="#" class="text-white hover:text-yellow-400 font-medium">Home</a>
          <a href="#about" class="text-white hover:text-yellow-400 font-medium">About</a>
          <a href="#services" class="text-white hover:text-yellow-400 font-medium">Services</a>
          <a href="#pricing" class="text-yellow-400 font-semibold">Pricing</a>
          <a href="{{ route('contactpage') }}" class="text-white hover:text-yellow-400 font-medium">Contact</a>
          {{-- <a href="#" class="text-white hover:text-yellow-400 font-medium">FAQ</a> --}}
        </div>

        <!-- CTA Button -->
        <div class="hidden md:block">
          <a href="#booking" class="bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-bold py-2 px-4 rounded-lg transition duration-300 whitespace-nowrap">
            Book Now
          </a>
        </div>

        <!-- Mobile Menu Button -->
        <div class="md:hidden">
          <button id="mobile-menu-button" class="text-white hover:text-yellow-400 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      </nav>

      <!-- Mobile Menu -->
      <div id="mobile-menu" class="md:hidden bg-white py-4 hidden">
        <div class="flex flex-col space-y-4">
          <a href="#" class="text-gray-700 hover:text-gray-900 font-medium px-4 py-2 hover:bg-gray-100 rounded">Home</a>
          <a href="#about" class="text-gray-700 hover:text-gray-900 font-medium px-4 py-2 hover:bg-gray-100 rounded">About</a>
          <a href="#services" class="text-gray-700 hover:text-gray-900 font-medium px-4 py-2 hover:bg-gray-100 rounded">Services</a>
          <a href="#pricing" class="text-gray-900 font-semibold px-4 py-2 bg-gray-100 rounded">Pricing</a>
          <a href="#contact" class="text-gray-700 hover:text-gray-900 font-medium px-4 py-2 hover:bg-gray-100 rounded">Contact</a>
          {{-- <a href="#" class="text-gray-700 hover:text-gray-900 font-medium px-4 py-2 hover:bg-gray-100 rounded">FAQ</a> --}}
          <div class="px-4 pt-2">
            <a href="#booking" class="block text-center bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-bold py-2 px-6 rounded-lg transition duration-300">
              Book Now
            </a>
          </div>
        </div>
      </div>
    </div>
  </header>


   <section id="contact" class="py-16" ng-app="contactApp" ng-controller="ContactController">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 section-heading">Contact Us</h2>

            <div class="flex flex-col lg:flex-row">
                <!-- Contact Form -->
                <div class="lg:w-2/3 lg:pr-8 mb-10 lg:mb-0">
                    <div class="bg-white rounded-lg shadow-md p-8">
                        <h3 class="text-2xl font-semibold mb-6">Send Us a Message</h3>
                        <!-- Success message -->
                        <div ng-if="formSubmitted" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                            <p>Thank you for your message! We'll get back to you soon.</p>
                        </div>

                        <!-- Error message -->
                        <div ng-if="formError" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                            <p>There was an error submitting your form. Please try again.</p>
                        </div>
                        <form id="contactForm" class="space-y-6" name="contactForm" ng-submit="submitForm()" novalidate>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="name" class="block text-gray-700 font-medium mb-2">Your Name</label>
                                    <input type="text" ng-model="formData.name" id="name" name="name" class="contact-input w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400" required>
                                    <div ng-show="contactForm.name.$touched && contactForm.name.$invalid" class="text-red-500 text-sm mt-1">
                                        Name is required
                                    </div>
                                </div>
                                <div>
                                    <label for="email" class="block text-gray-700 font-medium mb-2">Email Address</label>
                                    <input type="email" ng-model="formData.email" id="email" name="email" class="contact-input w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400" required>
                                    <div ng-show="contactForm.email.$touched && contactForm.email.$invalid" class="text-red-500 text-sm mt-1">
                                        <span ng-show="contactForm.email.$error.required">Email is required</span>
                                        <span ng-show="contactForm.email.$error.email">Invalid email format</span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label for="phone" class="block text-gray-700 font-medium mb-2">Phone Number</label>
                                <input type="tel" ng-model="formData.phone" id="phone" name="phone" class="contact-input w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400">
                            </div>
                            <div>
                                <label for="subject" class="block text-gray-700 font-medium mb-2">Subject</label>
                                <select id="subject" ng-model="formData.subject"  name="subject" class="contact-input w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400">
                                    <option value="general">General Inquiry</option>
                                    <option value="booking">Booking Question</option>
                                    <option value="corporate">Corporate Account</option>
                                    <option value="feedback">Feedback</option>
                                    <option value="complaint">Complaint</option>
                                </select>
                            </div>
                            <div>
                                <label for="message" class="block text-gray-700 font-medium mb-2">Your Message</label>
                                <textarea id="message" ng-model="formData.message" name="message" rows="5" class="contact-input w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400" required></textarea>
                                <div ng-show="contactForm.message.$touched && contactForm.message.$invalid" class="text-red-500 text-sm mt-1">
                                    Message is required
                                </div>
                            </div>
                            <div>
                                <button type="submit" ng-disabled="contactForm.$invalid || isSubmitting" class="w-full bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-bold py-3 px-6 rounded-lg transition duration-300">
                                    <span ng-if="!isSubmitting">Send Message</span>
                                        <span ng-if="isSubmitting">Sending...</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="lg:w-1/3">
                    <div class="bg-gray-900 text-white rounded-lg shadow-md p-8 h-full">
                        <h3 class="text-2xl font-semibold mb-6">Get In Touch</h3>

                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="bg-yellow-400 rounded-full p-3 mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-lg font-medium mb-1">Our Location</h4>
                                    <p class="text-gray-300">Throwpathi Amman Koil St,<br> Kalinjikuppam, Tamil Nadu 607104</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="bg-yellow-400 rounded-full p-3 mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-lg font-medium mb-1">Call Us</h4>
                                    <p class="text-gray-300">Booking: +91 8825694157</p>
                                    <p class="text-gray-300">Support: +91 9597258671</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="bg-yellow-400 rounded-full p-3 mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-lg font-medium mb-1">Email Us</h4>
                                    <p class="text-gray-300">fastpikcab@gmail.com</p>
                                    <p class="text-gray-300">support@swiftride.com</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="bg-yellow-400 rounded-full p-3 mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-lg font-medium mb-1">Business Hours</h4>
                                    <p class="text-gray-300">Monday - Friday: 8:00 AM - 8:00 PM</p>
                                    <p class="text-gray-300">Weekend: 9:00 AM - 5:00 PM</p>
                                    <p class="text-yellow-400 font-medium mt-1">24/7 Taxi Service Available</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8">
                            <h4 class="text-lg font-medium mb-4">Connect With Us</h4>
                            <div class="flex space-x-4">
                                <a href="#" class="bg-gray-800 hover:bg-yellow-400 hover:text-gray-900 h-10 w-10 rounded-full flex items-center justify-center transition duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                    </svg>
                                </a>
                                <a href="#" class="bg-gray-800 hover:bg-yellow-400 hover:text-gray-900 h-10 w-10 rounded-full flex items-center justify-center transition duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                    </svg>
                                </a>
                                <a href="#" class="bg-gray-800 hover:bg-yellow-400 hover:text-gray-900 h-10 w-10 rounded-full flex items-center justify-center transition duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                    </svg>
                                </a>
                                <a href="#" class="bg-gray-800 hover:bg-yellow-400 hover:text-gray-900 h-10 w-10 rounded-full flex items-center justify-center transition duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           
        </div>
    </section>


    <script src="{{ asset('js/contact.js') }}"></script>

</body>
</html>
