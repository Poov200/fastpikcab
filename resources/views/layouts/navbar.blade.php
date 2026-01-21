

    <style>
        /* Custom Styles for smoother transitions */
        .dropdown-menu {
            transition: all 0.2s ease-in-out;
            transform-origin: top center;
        }
        /* Prevent sub-menus from closing instantly when moving mouse to submenu */
        .group:hover .group-hover\:block {
            display: block;
            animation: fadeIn 0.2s ease-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        /* Chevron rotation for mobile */
        .rotate-180 {
            transform: rotate(180deg);
        }
    </style>



    <!-- HEADER START -->
    <header class="bg-gray-900 shadow-md sticky z-50 transition-all duration-300" style="top: 37px;">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex flex-wrap items-center justify-between py-4">

                <!-- Logo -->
                <div class="flex items-center">
                    <a href="#" class="flex items-center gap-2">
                        <!-- Using text as placeholder since image path is local -->
                        {{-- <div class="text-yellow-400 font-extrabold text-2xl tracking-tighter italic">FastPik</div> --}}
                         <img style="max-width:150px; height: 55px; " src="../img/FastPik Logo.png" alt="">
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
                            <!-- Chevron Down Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 transition-transform duration-200 group-hover:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        
                        <!-- Dropdown Content -->
                        <div class="absolute left-0 mt-0 w-56 bg-white rounded-md shadow-lg py-2 hidden group-hover:block z-50 ring-1 ring-black ring-opacity-5">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-yellow-50 hover:text-yellow-600">One Way Drop Taxi</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-yellow-50 hover:text-yellow-600">Outstation Drop Taxi</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-yellow-50 hover:text-yellow-600">Airport Drop Taxi</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-yellow-50 hover:text-yellow-600">Round Trip Taxi</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-yellow-50 hover:text-yellow-600">Corporate Taxi</a>
                        </div>
                    </div>

                    <!-- ROUTES MEGA MENU -->
                    <div class="relative group py-4">
                        <button class="flex items-center text-white hover:text-yellow-400 font-medium focus:outline-none">
                            Routes
                            <!-- Chevron Down Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 transition-transform duration-200 group-hover:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <!-- Mega Menu Content -->
                        <div class="absolute left-0 mt-0 w-[500px] bg-white rounded-md shadow-lg p-6 hidden group-hover:block z-50 ring-1 ring-black ring-opacity-5">
                            <div class="grid grid-cols-2 gap-8">
                                
                                <!-- Column 1: Tamil Nadu -->
                                <div>
                                    <h3 class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-3">Tamil Nadu</h3>
                                    <ul class="space-y-2">
                                        <li><a href="#" class="block text-sm text-gray-700 hover:text-yellow-600 hover:underline">Chennai → Coimbatore</a></li>
                                        <li><a href="#" class="block text-sm text-gray-700 hover:text-yellow-600 hover:underline">Chennai → Trichy</a></li>
                                        <li><a href="#" class="block text-sm text-gray-700 hover:text-yellow-600 hover:underline">Chennai → Madurai</a></li>
                                        <li><a href="#" class="block text-sm text-gray-700 hover:text-yellow-600 hover:underline">Coimbatore → Chennai</a></li>
                                    </ul>
                                </div>

                                <!-- Column 2: Other States -->
                                <div>
                                    <h3 class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-3">Other States</h3>
                                    <ul class="space-y-2">
                                        <li><a href="#" class="block text-sm text-gray-700 hover:text-yellow-600 hover:underline">Chennai → Bangalore</a></li>
                                        <li><a href="#" class="block text-sm text-gray-700 hover:text-yellow-600 hover:underline">Bangalore → Chennai</a></li>
                                        <li><a href="#" class="block text-sm text-gray-700 hover:text-yellow-600 hover:underline">Chennai → Hyderabad</a></li>
                                    </ul>
                                </div>

                            </div>
                            <!-- Mega Menu Footer -->
                            <div class="mt-4 pt-4 border-t border-gray-100 text-center">
                                <a href="#" class="text-xs font-semibold text-yellow-600 hover:text-yellow-800">View All Routes &rarr;</a>
                            </div>
                        </div>
                    </div>

                    <a href="#pricing" class="text-white hover:text-yellow-400 font-semibold transition">Pricing</a>
                    <a href="{{ route('blogs') }}" class="text-white hover:text-yellow-400 font-semibold transition">Blogs</a>
                    <a href="{{ route('contactpage') }}" class="text-white hover:text-yellow-400 font-medium transition">Contact</a>
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
                    <button id="mobile-menu-button" class="text-white hover:text-yellow-400 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </nav>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="md:hidden bg-gray-800 border-t border-gray-700 hidden overflow-hidden transition-all duration-300">
                <div class="flex flex-col space-y-0">
                    
                    <a href="/" class="text-gray-200 hover:text-white hover:bg-gray-700 font-medium px-4 py-3 border-b border-gray-700">Home</a>
                    <a href="#about" class="text-gray-200 hover:text-white hover:bg-gray-700 font-medium px-4 py-3 border-b border-gray-700">About</a>
                    
                    <!-- Mobile: Drop Taxi Submenu -->
                    <div class="border-b border-gray-700">
                        <button onclick="toggleMobileSubmenu('mobile-drop-taxi', this)" class="w-full flex justify-between items-center text-gray-200 hover:text-white hover:bg-gray-700 font-medium px-4 py-3 text-left focus:outline-none">
                            Drop Taxi
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transform transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div id="mobile-drop-taxi" class="hidden bg-gray-900">
                            <a href="#" class="block pl-8 pr-4 py-2 text-sm text-gray-400 hover:text-yellow-400 hover:bg-gray-800">One Way Drop Taxi</a>
                            <a href="#" class="block pl-8 pr-4 py-2 text-sm text-gray-400 hover:text-yellow-400 hover:bg-gray-800">Outstation Drop Taxi</a>
                            <a href="#" class="block pl-8 pr-4 py-2 text-sm text-gray-400 hover:text-yellow-400 hover:bg-gray-800">Airport Drop Taxi</a>
                            <a href="#" class="block pl-8 pr-4 py-2 text-sm text-gray-400 hover:text-yellow-400 hover:bg-gray-800">Round Trip Taxi</a>
                            <a href="#" class="block pl-8 pr-4 py-2 text-sm text-gray-400 hover:text-yellow-400 hover:bg-gray-800">Corporate Taxi</a>
                        </div>
                    </div>

                    <!-- Mobile: Routes Submenu -->
                    <div class="border-b border-gray-700">
                        <button onclick="toggleMobileSubmenu('mobile-routes', this)" class="w-full flex justify-between items-center text-gray-200 hover:text-white hover:bg-gray-700 font-medium px-4 py-3 text-left focus:outline-none">
                            Routes
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transform transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div id="mobile-routes" class="hidden bg-gray-900">
                            <div class="px-4 py-2 text-xs font-bold text-gray-500 uppercase tracking-wider">Tamil Nadu</div>
                            <a href="#" class="block pl-8 pr-4 py-2 text-sm text-gray-400 hover:text-yellow-400 hover:bg-gray-800">Chennai → Coimbatore</a>
                            <a href="#" class="block pl-8 pr-4 py-2 text-sm text-gray-400 hover:text-yellow-400 hover:bg-gray-800">Chennai → Trichy</a>
                            <a href="#" class="block pl-8 pr-4 py-2 text-sm text-gray-400 hover:text-yellow-400 hover:bg-gray-800">Chennai → Madurai</a>
                            
                            <div class="px-4 py-2 text-xs font-bold text-gray-500 uppercase tracking-wider mt-2">Other States</div>
                            <a href="#" class="block pl-8 pr-4 py-2 text-sm text-gray-400 hover:text-yellow-400 hover:bg-gray-800">Chennai → Bangalore</a>
                            <a href="#" class="block pl-8 pr-4 py-2 text-sm text-gray-400 hover:text-yellow-400 hover:bg-gray-800">Bangalore → Chennai</a>
                            <a href="#" class="block pl-8 pr-4 py-2 text-sm text-gray-400 hover:text-yellow-400 hover:bg-gray-800">Chennai → Hyderabad</a>
                        </div>
                    </div>

                    <a href="#pricing" class="text-gray-200 hover:text-white hover:bg-gray-700 font-medium px-4 py-3 border-b border-gray-700">Pricing</a>
                    <a href="{{ route('blogs') }}" class="text-gray-200 hover:text-white hover:bg-gray-700 font-medium px-4 py-3 border-b border-gray-700">Blogs</a>
                    <a href="{{ route('contactpage') }}" class="text-gray-200 hover:text-white hover:bg-gray-700 font-medium px-4 py-3 border-b border-gray-700">Contact</a>

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
        // Toggle Main Mobile Menu
        const btn = document.getElementById('mobile-menu-button');
        const menu = document.getElementById('mobile-menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });

        // Toggle Submenus in Mobile View
        function toggleMobileSubmenu(menuId, buttonElement) {
            const submenu = document.getElementById(menuId);
            const arrow = buttonElement.querySelector('svg');
            
            if (submenu.classList.contains('hidden')) {
                // Open
                submenu.classList.remove('hidden');
                arrow.classList.add('rotate-180');
            } else {
                // Close
                submenu.classList.add('hidden');
                arrow.classList.remove('rotate-180');
            }
        }
    </script>
