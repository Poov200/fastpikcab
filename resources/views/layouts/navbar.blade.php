
    <style>
        /* Custom transition for mobile submenu */
        .mobile-submenu {
            transition: max-height 0.3s ease-out, opacity 0.3s ease-out;
            max-height: 0;
            opacity: 0;
            overflow: hidden;
        }
        .mobile-submenu.open {
            max-height: 500px; /* Arbitrary large height */
            opacity: 1;
        }
    </style>


   <div class="booking-banner">
        <span>📞 For Immediate Booking: <a href="tel:8825694157">+91 8825694157</a></span>
    </div>

    <!-- HEADER START -->
    <!-- Added overflow-visible to prevent dropdowns from being clipped -->
    <header class="bg-gray-900 shadow-md sticky z-50 transition-all duration-300" style="top: 37px;">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 overflow-visible">
            <nav class="flex flex-wrap items-center justify-between py-4 relative">

                <!-- Logo -->
                <div class="flex items-center">
                    <a href="#" class="flex items-center gap-2">
                        <img style="max-width:150px; height: 55px; " src="../img/FastPik Logo.png" alt="FastPik Logo">
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex flex-wrap items-center space-x-6">
                    <a href="/" class="text-white hover:text-yellow-400 font-medium transition">Home</a>
                    <a href="#about" class="text-white hover:text-yellow-400 font-medium transition">About</a>

                    <!-- DROP TAXI DROPDOWN -->
                    <div class="relative group py-4">
                        <button class="flex items-center text-white hover:text-yellow-400 font-medium focus:outline-none">
                            Drop Taxi
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 transition-transform duration-200 group-hover:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <!-- Dropdown Content -->
                        <div class="absolute left-0 mt-0 w-56 bg-white rounded-md shadow-lg py-2 hidden group-hover:block z-50 ring-1 ring-black ring-opacity-5">
                            <a href="{{ route('one-way-drop-taxi') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-yellow-50 hover:text-yellow-600">One Way Drop Taxi</a>
                            <a href="{{ route('outstation-drop-taxi') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-yellow-50 hover:text-yellow-600">Outstation Drop Taxi</a>
                            <a href="{{ route('airport-drop-taxi') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-yellow-50 hover:text-yellow-600">Airport Drop Taxi</a>
                            <a href="{{ route('round-trip-taxi') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-yellow-50 hover:text-yellow-600">Round Trip Taxi</a>
                            <a href="{{ route('corporate-taxi') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-yellow-50 hover:text-yellow-600">Corporate Taxi</a>
                        </div>
                    </div>

                    <!-- ROUTES MEGA MENU -->
                    <div class="relative group py-4">
                        <button class="flex items-center text-white hover:text-yellow-400 font-medium focus:outline-none">
                            Routes
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 transition-transform duration-200 group-hover:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <!-- Mega Menu Content -->
                        <div class="absolute left-0 mt-0 w-[500px] bg-white rounded-md shadow-lg p-6 hidden group-hover:block z-50 ring-1 ring-black ring-opacity-5">
                            <div class="grid grid-cols-2 gap-8">
                                <!-- Column 1 -->
                                <div>
                                    <h3 class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-3">Tamil Nadu</h3>
                                    <ul class="space-y-2">
                                        <li><a href="{{ route('chennai-to-coimbatore') }}" class="block text-sm text-gray-700 hover:text-yellow-600 hover:underline">Chennai → Coimbatore</a></li>
                                        <li><a href="{{ route('chennai-to-trichy') }}" class="block text-sm text-gray-700 hover:text-yellow-600 hover:underline">Chennai → Trichy</a></li>
                                        <li><a href="{{ route('chennai-to-madurai') }}" class="block text-sm text-gray-700 hover:text-yellow-600 hover:underline">Chennai → Madurai</a></li>
                                        <li><a href="{{ route('coimbatore-to-chennai') }}" class="block text-sm text-gray-700 hover:text-yellow-600 hover:underline">Coimbatore → Chennai</a></li>
                                    </ul>
                                </div>
                                <!-- Column 2 -->
                                <div>
                                    <h3 class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-3">Other States</h3>
                                    <ul class="space-y-2">
                                        <li><a href="{{ route('chennai-to-bangalore') }}" class="block text-sm text-gray-700 hover:text-yellow-600 hover:underline">Chennai → Bangalore</a></li>
                                        <li><a href="{{ route('bangalore-to-chennai') }}" class="block text-sm text-gray-700 hover:text-yellow-600 hover:underline">Bangalore → Chennai</a></li>
                                        <li><a href="{{ route('chennai-to-kerala') }}" class="block text-sm text-gray-700 hover:text-yellow-600 hover:underline">Chennai → Kerala</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mt-4 pt-4 border-t border-gray-100 text-center">
                                <a href="#" class="text-xs font-semibold text-yellow-600 hover:text-yellow-800">View All Routes &rarr;</a>
                            </div>
                        </div>
                    </div>

                    <a href="#pricing" class="text-white hover:text-yellow-400 font-semibold transition">Pricing</a>
                    <a href="#" class="text-white hover:text-yellow-400 font-semibold transition">Blogs</a>
                    <a href="#" class="text-white hover:text-yellow-400 font-medium transition">Contact</a>
                </div>

                <!-- CTA Button -->
                <div class="hidden md:block">
                    <a href="#booking"
                        class="bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-bold py-2 px-6 rounded-lg transition duration-300 whitespace-nowrap shadow-lg hover:shadow-yellow-400/30">
                        Book Now
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-btn" class="text-white hover:text-yellow-400 focus:outline-none p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </nav>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="md:hidden hidden bg-gray-800 border-t border-gray-700 absolute top-full left-0 w-full shadow-2xl">
                <div class="flex flex-col">

                    <a href="/" class="text-gray-200 hover:text-white hover:bg-gray-700 font-medium px-4 py-3 border-b border-gray-700">Home</a>
                    <a href="#about" class="text-gray-200 hover:text-white hover:bg-gray-700 font-medium px-4 py-3 border-b border-gray-700">About</a>

                    <!-- Mobile: Drop Taxi Submenu -->
                    <div class="border-b border-gray-700">
                        <!-- Added 'mobile-submenu-trigger' class for JS targeting -->
                        <button class="mobile-submenu-trigger w-full flex justify-between items-center text-gray-200 hover:text-white hover:bg-gray-700 font-medium px-4 py-3 text-left focus:outline-none">
                            Drop Taxi
                            <svg xmlns="http://www.w3.org/2000/svg" class="submenu-arrow h-4 w-4 transform transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <!-- Added 'mobile-submenu' class for animation and JS targeting -->
                        <div class="mobile-submenu bg-gray-900">
                            <a href="{{ route('one-way-drop-taxi') }}" class="block pl-8 pr-4 py-2 text-sm text-gray-400 hover:text-yellow-400 hover:bg-gray-800">One Way Drop Taxi</a>
                            <a href="{{ route('outstation-drop-taxi') }}" class="block pl-8 pr-4 py-2 text-sm text-gray-400 hover:text-yellow-400 hover:bg-gray-800">Outstation Drop Taxi</a>
                            <a href="{{ route('airport-drop-taxi') }}" class="block pl-8 pr-4 py-2 text-sm text-gray-400 hover:text-yellow-400 hover:bg-gray-800">Airport Drop Taxi</a>
                            <a href="{{ route('round-trip-taxi') }}" class="block pl-8 pr-4 py-2 text-sm text-gray-400 hover:text-yellow-400 hover:bg-gray-800">Round Trip Taxi</a>
                            <a href="{{ route('corporate-taxi') }}" class="block pl-8 pr-4 py-2 text-sm text-gray-400 hover:text-yellow-400 hover:bg-gray-800">Corporate Taxi</a>
                        </div>
                    </div>

                    <!-- Mobile: Routes Submenu -->
                    <div class="border-b border-gray-700">
                        <button class="mobile-submenu-trigger w-full flex justify-between items-center text-gray-200 hover:text-white hover:bg-gray-700 font-medium px-4 py-3 text-left focus:outline-none">
                            Routes
                            <svg xmlns="http://www.w3.org/2000/svg" class="submenu-arrow h-4 w-4 transform transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="mobile-submenu bg-gray-900">
                            <div class="px-4 py-2 text-xs font-bold text-gray-500 uppercase tracking-wider">Tamil Nadu</div>
                            <a href="{{ route('chennai-to-coimbatore') }}" class="block pl-8 pr-4 py-2 text-sm text-gray-400 hover:text-yellow-400 hover:bg-gray-800">Chennai → Coimbatore</a>
                            <a href="{{ route('chennai-to-trichy') }}" class="block pl-8 pr-4 py-2 text-sm text-gray-400 hover:text-yellow-400 hover:bg-gray-800">Chennai → Trichy</a>
                            <a href="{{ route('chennai-to-madurai') }}" class="block pl-8 pr-4 py-2 text-sm text-gray-400 hover:text-yellow-400 hover:bg-gray-800">Chennai → Madurai</a>

                            <div class="px-4 py-2 text-xs font-bold text-gray-500 uppercase tracking-wider mt-2">Other States</div>
                            <a href="{{ route('chennai-to-bangalore') }}" class="block pl-8 pr-4 py-2 text-sm text-gray-400 hover:text-yellow-400 hover:bg-gray-800">Chennai → Bangalore</a>
                            <a href="{{ route('bangalore-to-chennai') }}" class="block pl-8 pr-4 py-2 text-sm text-gray-400 hover:text-yellow-400 hover:bg-gray-800">Bangalore → Chennai</a>
                            <a href="{{ route('chennai-to-kerala') }}" class="block pl-8 pr-4 py-2 text-sm text-gray-400 hover:text-yellow-400 hover:bg-gray-800">Chennai → Kerala</a>
                        </div>
                    </div>

                    <a href="#pricing" class="text-gray-200 hover:text-white hover:bg-gray-700 font-medium px-4 py-3 border-b border-gray-700">Pricing</a>
                    <a href="#" class="text-gray-200 hover:text-white hover:bg-gray-700 font-medium px-4 py-3 border-b border-gray-700">Blogs</a>
                    <a href="#" class="text-gray-200 hover:text-white hover:bg-gray-700 font-medium px-4 py-3 border-b border-gray-700">Contact</a>

                    <!-- Mobile CTA -->
                    <div class="px-4 py-4">
                        <a href="#booking"
                            class="block text-center bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-bold py-3 px-6 rounded-lg transition duration-300">
                            Book Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER END -->


    <!-- JAVASCRIPT LOGIC -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            // 1. Main Mobile Menu Toggle
            const menuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');

            if(menuBtn && mobileMenu) {
                menuBtn.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden');
                });
            }

            // 2. Submenu Toggles (Robust method without inline onclick)
            const subMenuTriggers = document.querySelectorAll('.mobile-submenu-trigger');

            subMenuTriggers.forEach(trigger => {
                trigger.addEventListener('click', (e) => {
                    e.preventDefault(); // Prevent any default link behavior

                    // Find the next sibling element (the content div)
                    const content = trigger.nextElementSibling;
                    const arrow = trigger.querySelector('.submenu-arrow');

                    if (content && content.classList.contains('mobile-submenu')) {
                        // Toggle the open class
                        const isOpen = content.classList.contains('open');

                        if (isOpen) {
                            content.classList.remove('open');
                            arrow.classList.remove('rotate-180');
                        } else {
                            content.classList.add('open');
                            arrow.classList.add('rotate-180');
                        }
                    }
                });
            });
        });
    </script>

