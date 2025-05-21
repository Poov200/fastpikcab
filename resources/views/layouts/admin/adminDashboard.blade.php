<!DOCTYPE html>
<html lang="en" ng-app="navbarApp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transportation Management System</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('css/admindashboard.css') }}" rel="stylesheet" />

</head>

<body ng-controller="NavbarController" class="bg-gray-100">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar / Left Navigation -->
        <div class="sidebar bg-gradient-to-b from-blue-800 to-blue-900 text-white w-64 fixed h-full shadow-lg z-20"
            ng-class="{'open': sidebarOpen}">
            <!-- Logo and Brand -->
            <div class="p-4 border-b border-blue-700 flex items-center justify-between">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7h12m0 0l-4-4m4 4l-4 4m-8 6H4m0 0l4 4m-4-4l4-4" />
                    </svg>
                    <span class="font-bold text-xl">FastPik</span>
                </div>
                <button class="md:hidden text-white focus:outline-none" ng-click="toggleSidebar()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Navigation Items -->
            <div class="py-4">
                {{-- <a href="/admindashboard" ng-class="{'active-link': isActive('home')}" ng-click="setActive('home')" class="nav-item flex items-center px-6 py-3 text-white hover:text-blue-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Home
                </a> --}}
                <a href="/bookinglist" ng-class="{'active-link': isActive('booking-list')}"
                    ng-click="setActive('booking-list')"
                    class="nav-item flex items-center px-6 py-3 text-white hover:text-blue-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                    </svg>
                    Booking List
                </a>
                {{-- <a href="/adminassigndriver" ng-class="{'active-link': isActive('assign-booking')}"
                    ng-click="setActive('assign-booking')"
                    class="nav-item flex items-center px-6 py-3 text-white hover:text-blue-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                    </svg>
                    Assign Booking
                </a> --}}
                {{-- <a href="#/send-mail" ng-class="{'active-link': isActive('send-mail')}" ng-click="setActive('send-mail')" class="nav-item flex items-center px-6 py-3 text-white hover:text-blue-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    Send Mail
                </a> --}}
                <a href="/admindriverManagement" ng-class="{'active-link': isActive('add-driver')}"
                    ng-click="setActive('add-driver')"
                    class="nav-item flex items-center px-6 py-3 text-white hover:text-blue-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                    </svg>
                    Add Driver
                </a>
                <a href="/admintestimonial" ng-class="{'active-link': isActive('testimonials')}"
                    ng-click="setActive('testimonials')"
                    class="nav-item flex items-center px-6 py-3 text-white hover:text-blue-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                    </svg>
                    Testimonials
                </a>
                <a href="/adminContact" ng-class="{'active-link': isActive('contact')}" ng-click="setActive('contact')"
                    class="nav-item flex items-center px-6 py-3 text-white hover:text-blue-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    Contact Form
                </a>
                <a href="/adminpricing" ng-class="{'active-link': isActive('pricing')}" ng-click="setActive('pricing')"
                    class="nav-item flex items-center px-6 py-3 text-white hover:text-blue-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Pricing
                </a>
                <a href="/route" ng-class="{'active-link': isActive('route')}" ng-click="setActive('route')"
                    class="nav-item flex items-center px-6 py-3 text-white hover:text-blue-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                    </svg>
                    Add Route
                </a>
                <a href="/commissions" ng-class="{'active-link': isActive('commissions')}"
                    ng-click="setActive('commissions')"
                    class="nav-item flex items-center px-6 py-3 text-white hover:text-blue-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Add commissions
                </a>
                <div class="px-6 py-4 mt-4">
                    <a href="{{ url('/adminlogout') }}"
                        class="w-full bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md font-medium transition duration-150 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        Logout
                    </a>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <!-- Main Content -->
        <div class="content-wrapper flex-1 ml-0 md:ml-64 bg-gray-100 min-h-screen overflow-y-auto">
            @yield('AdminContent')
        </div>

    </div>

    <!-- Overlay for mobile when sidebar is open -->
    <div ng-show="sidebarOpen" ng-click="toggleSidebar()"
        class="md:hidden fixed inset-0 bg-black bg-opacity-50 z-10"></div>

    <script src="{{ asset('js/admindashboard.js') }}"></script>
    <script>
        (function() {
            function c() {
                var b = a.contentDocument || a.contentWindow.document;
                if (b) {
                    var d = b.createElement('script');
                    d.innerHTML =
                        "window.__CF$cv$params={r:'939de6a2846f7f4a',t:'MTc0NjI1NTgzMS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";
                    b.getElementsByTagName('head')[0].appendChild(d)
                }
            }
            if (document.body) {
                var a = document.createElement('iframe');
                a.height = 1;
                a.width = 1;
                a.style.position = 'absolute';
                a.style.top = 0;
                a.style.left = 0;
                a.style.border = 'none';
                a.style.visibility = 'hidden';
                document.body.appendChild(a);
                if ('loading' !== document.readyState) c();
                else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c);
                else {
                    var e = document.onreadystatechange || function() {};
                    document.onreadystatechange = function(b) {
                        e(b);
                        'loading' !== document.readyState && (document.onreadystatechange = e, c())
                    }
                }
            }
        })();
        app.controller('AdminController', function($scope, $http, $window) {
            $scope.logout = function() {
                $http.post('/logout') // Your Laravel route
                    .then(function(response) {
                        $window.location.href = '/adminlogin';
                    }, function(error) {
                        console.error('Logout failed:', error);
                    });
            };
        });
    </script>



</body>

</html>