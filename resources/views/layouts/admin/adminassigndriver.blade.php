<!DOCTYPE html>
<html lang="en" ng-app="bookingAssignmentApp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign Bookings | Admin Dashboard</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f3f4f6;
        }

        .toast {
            animation: slideIn 0.3s, fadeOut 0.5s 2.5s forwards;
        }

        @keyframes slideIn {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes fadeOut {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
            }
        }

        .modal-overlay {
            background-color: rgba(0, 0, 0, 0.5);
            animation: fadeIn 0.3s;
        }

        .modal-content {
            animation: scaleIn 0.3s;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes scaleIn {
            from {
                transform: scale(0.95);
                opacity: 0;
            }

            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        .shimmer {
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 200% 100%;
            animation: shimmer 1.5s infinite;
        }

        @keyframes shimmer {
            0% {
                background-position: -200% 0;
            }

            100% {
                background-position: 200% 0;
            }
        }

        .dropdown-menu {
            transform-origin: top right;
            transition: transform 0.2s, opacity 0.2s;
        }

        .dropdown-menu.hidden {
            transform: scale(0.95);
            opacity: 0;
        }

        .tab-indicator {
            transition: left 0.3s ease, width 0.3s ease;
        }

        .badge {
            transition: all 0.2s ease;
        }

        .badge:hover {
            transform: scale(1.05);
        }

        .search-input:focus+.search-icon {
            color: #4f46e5;
        }

        .notification-dot {
            animation: pulse 1.5s infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(0.95);
                opacity: 0.9;
            }

            50% {
                transform: scale(1.05);
                opacity: 1;
            }

            100% {
                transform: scale(0.95);
                opacity: 0.9;
            }
        }

        .booking-card {
            transition: all 0.3s ease;
        }

        .booking-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        .driver-card {
            transition: all 0.2s ease;
        }

        .driver-card.selected {
            border-color: #4f46e5;
            background-color: #eef2ff;
        }

        .driver-card:hover:not(.selected) {
            border-color: #a5b4fc;
        }

        .status-badge {
            transition: all 0.3s ease;
        }
    </style>
</head>

<body class="min-h-screen" ng-controller="BookingAssignmentController">
    @extends('layouts.admin.adminDashboard')
    @section('AdminContent')
        <div class="container mx-auto px-4 py-6">
            <!-- Toast Notification -->
            <div ng-if="showToast"
                class="toast fixed top-4 right-4 z-50 bg-white shadow-lg rounded-lg px-6 py-4 flex items-center border-l-4"
                ng-class="{'border-green-500': toastType === 'success', 'border-red-500': toastType === 'error', 'border-blue-500': toastType === 'info', 'border-yellow-500': toastType === 'warning'}">
                <div ng-if="toastType === 'success'" class="text-green-500 mr-3">
                    <i class="fas fa-check-circle text-xl"></i>
                </div>
                <div ng-if="toastType === 'error'" class="text-red-500 mr-3">
                    <i class="fas fa-exclamation-circle text-xl"></i>
                </div>
                <div ng-if="toastType === 'info'" class="text-blue-500 mr-3">
                    <i class="fas fa-info-circle text-xl"></i>
                </div>
                <div ng-if="toastType === 'warning'" class="text-yellow-500 mr-3">
                    <i class="fas fa-exclamation-triangle text-xl"></i>
                </div>
                <div>
                    <p class="font-medium">@{{ toastTitle }}</p>
                    <p class="text-sm text-gray-600">@{{ toastMessage }}</p>
                </div>
                <button ng-click="hideToast()" class="ml-6 text-gray-400 hover:text-gray-600">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <!-- Header -->
            <div class="flex justify-between items-center mb-6">
                <div>
                    <h1 class="text-2xl font-bold text-gray-800">Booking Assignment</h1>
                    <p class="text-gray-600">Assign drivers to bookings and manage ride status</p>
                </div>
                <div class="flex space-x-3">
                    <button ng-click="refreshBookings()"
                        class="px-4 py-2 bg-white text-gray-700 rounded-lg border border-gray-300 hover:bg-gray-50 flex items-center">
                        <i class="fas fa-sync-alt mr-2"></i> Refresh
                    </button>
                    <button ng-click="exportAssignments()"
                        class="px-4 py-2 bg-white text-gray-700 rounded-lg border border-gray-300 hover:bg-gray-50 flex items-center">
                        <i class="fas fa-file-export mr-2"></i> Export
                    </button>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm font-medium text-gray-500">Total Bookings</p>
                            <h3 class="text-2xl font-bold text-gray-800 mt-1">@{{ bookings . length }}</h3>
                        </div>
                        <div class="p-3 bg-blue-100 rounded-full">
                            <i class="fas fa-calendar-check text-blue-600"></i>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center text-sm">
                        <span class="text-green-500 flex items-center">
                            <i class="fas fa-arrow-up mr-1"></i> @{{ newBookingsToday }}
                        </span>
                        <span class="text-gray-500 ml-2">new today</span>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm font-medium text-gray-500">Unassigned Bookings</p>
                            <h3 class="text-2xl font-bold text-gray-800 mt-1">@{{ getUnassignedBookingsCount() }}</h3>
                        </div>
                        <div class="p-3 bg-yellow-100 rounded-full">
                            <i class="fas fa-exclamation-circle text-yellow-600"></i>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center text-sm">
                        <span ng-if="getUrgentUnassignedCount() > 0" class="text-red-500 flex items-center">
                            <i class="fas fa-exclamation-triangle mr-1"></i> @{{ getUrgentUnassignedCount() }} urgent
                        </span>
                        <span ng-if="getUrgentUnassignedCount() === 0" class="text-gray-500">No urgent bookings</span>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm font-medium text-gray-500">Ongoing Rides</p>
                            <h3 class="text-2xl font-bold text-gray-800 mt-1">@{{ getOngoingRidesCount() }}</h3>
                        </div>
                        <div class="p-3 bg-green-100 rounded-full">
                            <i class="fas fa-car text-green-600"></i>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center text-sm">
                        <span class="text-gray-500">@{{ getOngoingRidesPercentage() }}% of assigned</span>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm font-medium text-gray-500">Completed Rides</p>
                            <h3 class="text-2xl font-bold text-gray-800 mt-1">@{{ getCompletedRidesCount() }}</h3>
                        </div>
                        <div class="p-3 bg-purple-100 rounded-full">
                            <i class="fas fa-check-double text-purple-600"></i>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center text-sm">
                        <span class="text-gray-500">@{{ getCompletedRidesPercentage() }}% completion rate</span>
                    </div>
                </div>
            </div>

            <!-- Tabs -->
            <div class="bg-white rounded-lg shadow mb-6">
                <div class="border-b border-gray-200">
                    <div class="flex relative">
                        <button ng-click="setActiveTab('unassigned')" class="px-6 py-4 text-sm font-medium"
                            ng-class="{'text-indigo-600': activeTab === 'unassigned', 'text-gray-500 hover:text-gray-700': activeTab !== 'unassigned'}">
                            Unassigned
                            <span ng-if="getUnassignedBookingsCount() > 0"
                                class="ml-2 px-2 py-0.5 text-xs font-medium rounded-full bg-yellow-100 text-yellow-800">
                                @{{ getUnassignedBookingsCount() }}
                            </span>
                            <span ng-if="getUrgentUnassignedCount() > 0"
                                class="ml-1 inline-block w-2 h-2 bg-red-500 rounded-full notification-dot"></span>
                        </button>
                        <button ng-click="setActiveTab('assigned')" class="px-6 py-4 text-sm font-medium"
                            ng-class="{'text-indigo-600': activeTab === 'assigned', 'text-gray-500 hover:text-gray-700': activeTab !== 'assigned'}">
                            Assigned
                            <span ng-if="getAssignedBookingsCount() > 0"
                                class="ml-2 px-2 py-0.5 text-xs font-medium rounded-full bg-blue-100 text-blue-800">
                                @{{ getAssignedBookingsCount() }}
                            </span>
                        </button>
                        <button ng-click="setActiveTab('completed')" class="px-6 py-4 text-sm font-medium"
                            ng-class="{'text-indigo-600': activeTab === 'completed', 'text-gray-500 hover:text-gray-700': activeTab !== 'completed'}">
                            Completed
                            <span ng-if="getCompletedRidesCount() > 0"
                                class="ml-2 px-2 py-0.5 text-xs font-medium rounded-full bg-green-100 text-green-800">
                                @{{ getCompletedRidesCount() }}
                            </span>
                        </button>
                        <button ng-click="setActiveTab('all')" class="px-6 py-4 text-sm font-medium"
                            ng-class="{'text-indigo-600': activeTab === 'all', 'text-gray-500 hover:text-gray-700': activeTab !== 'all'}">
                            All Bookings
                        </button>
                        <div class="absolute bottom-0 left-0 h-0.5 bg-indigo-600 tab-indicator"
                            ng-style="getTabIndicatorStyle()"></div>
                    </div>
                </div>
            </div>

            <!-- Filters and Search -->
            <div class="bg-white rounded-lg shadow mb-6">
                <div class="p-6">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between space-y-4 md:space-y-0">
                        <div class="flex flex-col md:flex-row md:items-center space-y-4 md:space-y-0 md:space-x-4">
                            <div class="relative">
                                <input type="text" ng-model="searchQuery" placeholder="Search bookings..."
                                    class="search-input pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 w-full md:w-64">
                                <i class="fas fa-search search-icon absolute left-3 top-3 text-gray-400"></i>
                            </div>

                            <div class="flex items-center space-x-2">
                                <span class="text-sm text-gray-500">Car Type:</span>
                                <select ng-model="carTypeFilter"
                                    class="border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                                    <option value="all">All</option>
                                    <option value="sedan">Sedan</option>
                                    <option value="suv">SUV</option>
                                </select>
                            </div>

                            <div class="flex items-center space-x-2">
                                <span class="text-sm text-gray-500">Trip Type:</span>
                                <select ng-model="tripTypeFilter"
                                    class="border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                                    <option value="all">All</option>
                                    <option value="oneway">One Way</option>
                                    <option value="round">Round Trip</option>
                                </select>
                            </div>
                        </div>

                        <div class="flex items-center space-x-2">
                            <span class="text-sm text-gray-500">Sort by:</span>
                            <select ng-model="sortOption"
                                class="border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                                <option value="pickupTime">Pickup Time</option>
                                <option value="bookingTime">Booking Time</option>
                                <option value="distance">Distance</option>
                                <option value="amount">Amount</option>
                            </select>
                            <button ng-click="toggleSortOrder()"
                                class="p-2 border border-gray-300 rounded-lg hover:bg-gray-50">
                                <i class="fas"
                                    ng-class="{'fa-sort-amount-down': sortOrder === 'asc', 'fa-sort-amount-up': sortOrder === 'desc'}"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bookings List -->
            <div class="bg-white rounded-lg shadow">
                <div class="p-6">
                    <h2 class="text-lg font-semibold text-gray-800 mb-4">
                        @{{ getTabTitle() }}
                        <span ng-if="isLoading" class="ml-2 text-sm text-gray-500">(Loading...)</span>
                    </h2>

                    <!-- Loading State -->
                    <div ng-if="isLoading" class="space-y-4">
                        <div ng-repeat="i in [1, 2, 3]" class="shimmer h-48 rounded-lg"></div>
                    </div>

                    <!-- Empty State -->
                    <div ng-if="!isLoading && filteredBookings().length === 0"
                        class="flex flex-col items-center justify-center py-12">
                        <div class="bg-gray-100 p-4 rounded-full mb-4">
                            <i class="fas fa-calendar-times text-gray-500 text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-medium text-gray-800">No bookings found</h3>
                        <p class="text-gray-500 mt-1">Try adjusting your search or filters</p>
                        <button ng-click="resetFilters()"
                            class="mt-4 px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
                            Reset Filters
                        </button>
                    </div>

                    <!-- Bookings Grid -->
                    <div ng-if="!isLoading && filteredBookings().length > 0"
                        class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <!-- Booking Card -->
                        <div ng-repeat="booking in filteredBookings() | orderBy:getSortField():sortOrder === 'desc'"
                            class="booking-card bg-white border rounded-lg shadow-sm overflow-hidden">
                            <!-- Booking Header -->
                            <div class="px-6 py-4 bg-gray-50 border-b flex justify-between items-center">
                                <div class="flex items-center">
                                    <span class="text-sm font-semibold text-gray-800">Booking
                                        #@{{ booking . bookingId }}</span>
                                    <span ng-if="booking.status === 'unassigned'"
                                        class="ml-2 px-2 py-0.5 text-xs font-medium rounded-full bg-yellow-100 text-yellow-800">
                                        Unassigned
                                    </span>
                                    <span ng-if="booking.status === 'assigned'"
                                        class="ml-2 px-2 py-0.5 text-xs font-medium rounded-full bg-blue-100 text-blue-800">
                                        Assigned
                                    </span>
                                    <span ng-if="booking.status === 'ongoing'"
                                        class="ml-2 px-2 py-0.5 text-xs font-medium rounded-full bg-green-100 text-green-800">
                                        Ongoing
                                    </span>
                                    <span ng-if="booking.status === 'completed'"
                                        class="ml-2 px-2 py-0.5 text-xs font-medium rounded-full bg-purple-100 text-purple-800">
                                        Completed
                                    </span>
                                    <span ng-if="isUrgent(booking)"
                                        class="ml-2 px-2 py-0.5 text-xs font-medium rounded-full bg-red-100 text-red-800 flex items-center">
                                        <i class="fas fa-exclamation-circle mr-1"></i> Urgent
                                    </span>
                                </div>
                                <div class="relative" ng-init="booking.showActions = false">
                                    <button ng-click="booking.showActions = !booking.showActions"
                                        class="text-gray-400 hover:text-gray-600">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    <div ng-show="booking.showActions"
                                        class="dropdown-menu origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-10">
                                        <div class="py-1">
                                            <a ng-if="booking.status === 'unassigned'"
                                                ng-click="showAssignDriverModal(booking)"
                                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 cursor-pointer">
                                                <i class="fas fa-user-plus mr-2"></i> Assign Driver
                                            </a>
                                            <a ng-if="booking.status === 'assigned' || booking.status === 'ongoing'"
                                                ng-click="showChangeDriverModal(booking)"
                                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 cursor-pointer">
                                                <i class="fas fa-exchange-alt mr-2"></i> Change Driver
                                            </a>
                                            <a ng-if="booking.status === 'assigned'"
                                                ng-click="updateBookingStatus(booking, 'ongoing')"
                                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 cursor-pointer">
                                                <i class="fas fa-car mr-2"></i> Mark as Ongoing
                                            </a>
                                            <a ng-if="booking.status === 'ongoing'"
                                                ng-click="updateBookingStatus(booking, 'completed')"
                                                class="block px-4 py-2 text-sm text-green-600 hover:bg-gray-100 cursor-pointer">
                                                <i class="fas fa-check-circle mr-2"></i> Mark as Completed
                                            </a>
                                            <a ng-if="booking.status === 'completed'"
                                                ng-click="updateBookingStatus(booking, 'assigned')"
                                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 cursor-pointer">
                                                <i class="fas fa-undo mr-2"></i> Revert to Assigned
                                            </a>
                                            <a ng-click="viewBookingDetails(booking)"
                                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 cursor-pointer">
                                                <i class="fas fa-info-circle mr-2"></i> View Details
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Booking Content -->
                            <div class="px-6 py-4">
                                <div class="grid grid-cols-2 gap-4">
                                    <!-- Customer Info -->
                                    <div>
                                        <p class="text-xs font-medium text-gray-500 uppercase">Customer</p>
                                        <p class="text-sm font-medium text-gray-800">@{{ booking . customerName }}</p>
                                        <p class="text-sm text-gray-600">@{{ booking . customerPhone }}</p>
                                    </div>

                                    <!-- Trip Info -->
                                    <div>
                                        <p class="text-xs font-medium text-gray-500 uppercase">Trip Details</p>
                                        <div class="flex items-center">
                                            <span class="px-2 py-0.5 text-xs rounded-full mr-2"
                                                ng-class="{'bg-yellow-100 text-yellow-800': booking.carType === 'sedan', 'bg-purple-100 text-purple-800': booking.carType === 'suv'}">
                                                @{{ (booking . carType) | uppercase }}
                                            </span>
                                            <span
                                                class="text-sm text-gray-600">@{{ booking . tripType === 'oneway' ? 'One Way' : 'Round Trip' }}</span>
                                        </div>
                                        <p class="text-sm text-gray-600">@{{ booking . persons }} persons,
                                            @{{ booking . distance }} km</p>
                                    </div>

                                    <!-- Pickup Info -->
                                    <div>
                                        <p class="text-xs font-medium text-gray-500 uppercase">Pickup</p>
                                        <p class="text-sm text-gray-800 truncate" title="@{{ booking . pickupLocation }}">
                                            @{{ booking . pickupLocation }}</p>
                                        <p class="text-sm text-gray-600">@{{ formatDateTime(booking . pickupTime) }}</p>
                                    </div>

                                    <!-- Drop Info -->
                                    <div>
                                        <p class="text-xs font-medium text-gray-500 uppercase">Drop</p>
                                        <p class="text-sm text-gray-800 truncate" title="@{{ booking . dropLocation }}">
                                            @{{ booking . dropLocation }}</p>
                                        <p class="text-sm text-gray-600">₹@{{ booking . totalAmount }}</p>
                                    </div>
                                </div>

                                <!-- Driver Info (if assigned) -->
                                <div ng-if="booking.driver" class="mt-4 pt-4 border-t border-gray-200">
                                    <p class="text-xs font-medium text-gray-500 uppercase mb-2">Assigned Driver</p>
                                    <div class="flex items-center">
                                        <div
                                            class="flex-shrink-0 h-10 w-10 bg-indigo-100 rounded-full flex items-center justify-center">
                                            <span
                                                class="text-indigo-700 font-medium">@{{ booking . driver . name . charAt(0) }}@{{ booking . driver . name . split(' ')[1] ? booking . driver . name . split(' ')[1] . charAt(0) : '' }}</span>
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-sm font-medium text-gray-800">@{{ booking . driver . name }}</p>
                                            <div class="flex items-center text-sm text-gray-600">
                                                <span>@{{ booking . driver . phone }}</span>
                                                <span class="mx-2">•</span>
                                                <span>@{{ booking . driver . carNumber }}</span>
                                            </div>
                                        </div>
                                        <div class="ml-auto">
                                            <button ng-click="callDriver(booking.driver.phone)"
                                                class="p-2 text-gray-500 hover:text-indigo-600">
                                                <i class="fas fa-phone"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Assign Button (if unassigned) -->
                                <div ng-if="!booking.driver" class="mt-4 pt-4 border-t border-gray-200">
                                    <button ng-click="showAssignDriverModal(booking)"
                                        class="w-full py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg flex items-center justify-center">
                                        <i class="fas fa-user-plus mr-2"></i> Assign Driver
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <div ng-if="!isLoading && filteredBookings().length > 0"
                        class="flex items-center justify-between border-t border-gray-200 px-4 py-3 sm:px-6 mt-6">
                        <div class="flex-1 flex justify-between sm:hidden">
                            <button ng-click="prevPage()" ng-disabled="currentPage === 1"
                                class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"
                                ng-class="{'opacity-50 cursor-not-allowed': currentPage === 1}">
                                Previous
                            </button>
                            <button ng-click="nextPage()" ng-disabled="currentPage === totalPages()"
                                class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"
                                ng-class="{'opacity-50 cursor-not-allowed': currentPage === totalPages()}">
                                Next
                            </button>
                        </div>
                        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                            <div>
                                <p class="text-sm text-gray-700">
                                    Showing
                                    <span class="font-medium">@{{ (currentPage - 1) * pageSize + 1 }}</span>
                                    to
                                    <span
                                        class="font-medium">@{{ Math . min(currentPage * pageSize, filteredBookings() . length) }}</span>
                                    of
                                    <span class="font-medium">@{{ filteredBookings() . length }}</span>
                                    results
                                </p>
                            </div>
                            <div>
                                <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px"
                                    aria-label="Pagination">
                                    <button ng-click="prevPage()" ng-disabled="currentPage === 1"
                                        class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50"
                                        ng-class="{'opacity-50 cursor-not-allowed': currentPage === 1}">
                                        <span class="sr-only">Previous</span>
                                        <i class="fas fa-chevron-left"></i>
                                    </button>

                                    <button ng-repeat="page in getPageNumbers()" ng-click="goToPage(page)"
                                        class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium"
                                        ng-class="{'bg-indigo-50 text-indigo-600 z-10': currentPage === page, 'text-gray-500 hover:bg-gray-50': currentPage !== page}">
                                        @{{ page }}
                                    </button>

                                    <button ng-click="nextPage()" ng-disabled="currentPage === totalPages()"
                                        class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50"
                                        ng-class="{'opacity-50 cursor-not-allowed': currentPage === totalPages()}">
                                        <span class="sr-only">Next</span>
                                        <i class="fas fa-chevron-right"></i>
                                    </button>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Assign Driver Modal -->
            <div ng-if="showAssignModal" class="fixed inset-0 z-50 overflow-y-auto">
                <div class="modal-overlay fixed inset-0" ng-click="closeAssignModal()"></div>
                <div class="flex items-center justify-center min-h-screen p-4">
                    <div class="modal-content bg-white rounded-lg shadow-xl w-full max-w-4xl mx-auto z-50">
                        <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
                            <h3 class="text-lg font-medium text-gray-900">
                                @{{ isChangingDriver ? 'Change Driver' : 'Assign Driver' }}</h3>
                            <button ng-click="closeAssignModal()" class="text-gray-400 hover:text-gray-600">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>

                        <div class="px-6 py-4">
                            <!-- Booking Summary -->
                            <div class="bg-gray-50 rounded-lg p-4 mb-6">
                                <h4 class="text-sm font-medium text-gray-700 mb-2">Booking Summary</h4>
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                    <div>
                                        <p class="text-xs text-gray-500">Customer</p>
                                        <p class="text-sm font-medium">@{{ selectedBooking . customerName }}</p>
                                        <p class="text-sm text-gray-600">@{{ selectedBooking . customerPhone }}</p>
                                    </div>
                                    <div>
                                        <p class="text-xs text-gray-500">Trip Details</p>
                                        <p class="text-sm font-medium">@{{ (selectedBooking . carType) | uppercase }} •
                                            @{{ selectedBooking . tripType === 'oneway' ? 'One Way' : 'Round Trip' }}</p>
                                        <p class="text-sm text-gray-600">@{{ formatDateTime(selectedBooking . pickupTime) }}
                                        </p>
                                    </div>
                                    <div>
                                        <p class="text-xs text-gray-500">Route</p>
                                        <p class="text-sm font-medium truncate"
                                            title="@{{ selectedBooking . pickupLocation }}">
                                            @{{ selectedBooking . pickupLocation }}</p>
                                        <p class="text-sm text-gray-600 truncate"
                                            title="@{{ selectedBooking . dropLocation }}">to
                                            @{{ selectedBooking . dropLocation }}</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Driver Search -->
                            <div class="mb-6">
                                <div class="flex items-center justify-between mb-4">
                                    <h4 class="text-sm font-medium text-gray-700">Available Drivers</h4>
                                    <div class="relative">
                                        <input type="text" ng-model="driverSearchQuery"
                                            placeholder="Search drivers..."
                                            class="search-input pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 w-64">
                                        <i class="fas fa-search search-icon absolute left-3 top-3 text-gray-400"></i>
                                    </div>
                                </div>

                                <!-- Driver Filters -->
                                <div class="flex items-center space-x-4 mb-4">
                                    <div class="flex items-center space-x-2">
                                        <span class="text-sm text-gray-500">Car Type:</span>
                                        <select ng-model="driverCarTypeFilter"
                                            class="border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                                            <option value="all">All</option>
                                            <option value="sedan">Sedan</option>
                                            <option value="suv">SUV</option>
                                        </select>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="checkbox" id="availableOnly" ng-model="availableDriversOnly"
                                            class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                                        <label for="availableOnly" class="ml-2 text-sm text-gray-700">Available drivers
                                            only</label>
                                    </div>
                                </div>

                                <!-- Driver List -->
                                <div class="border border-gray-200 rounded-lg overflow-hidden">
                                    <div ng-if="isLoadingDrivers" class="p-6 text-center">
                                        <div
                                            class="inline-block animate-spin rounded-full h-8 w-8 border-4 border-gray-200 border-t-indigo-600">
                                        </div>
                                        <p class="mt-2 text-sm text-gray-600">Loading drivers...</p>
                                    </div>

                                    <div ng-if="!isLoadingDrivers && filteredDrivers().length === 0"
                                        class="p-6 text-center">
                                        <div class="bg-gray-100 p-3 rounded-full inline-block mb-2">
                                            <i class="fas fa-user-slash text-gray-500 text-xl"></i>
                                        </div>
                                        <p class="text-sm text-gray-600">No matching drivers found</p>
                                    </div>

                                    <div ng-if="!isLoadingDrivers && filteredDrivers().length > 0"
                                        class="max-h-64 overflow-y-auto">
                                        <table class="min-w-full divide-y divide-gray-200">
                                            <thead class="bg-gray-50 sticky top-0">
                                                <tr>
                                                    <th
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Driver</th>
                                                    <th
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Contact</th>
                                                    <th
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Vehicle</th>
                                                    <th
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Status</th>
                                                    <th
                                                        class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200">
                                                <tr ng-repeat="driver in filteredDrivers()"
                                                    ng-class="{'bg-indigo-50': selectedDriver && selectedDriver.id === driver.id}">
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div
                                                                class="flex-shrink-0 h-10 w-10 bg-indigo-100 rounded-full flex items-center justify-center">
                                                                <span
                                                                    class="text-indigo-700 font-medium">@{{ driver . name . charAt(0) }}@{{ driver . name . split(' ')[1] ? driver . name . split(' ')[1] . charAt(0) : '' }}</span>
                                                            </div>
                                                            <div class="ml-4">
                                                                <div class="text-sm font-medium text-gray-900">
                                                                    @{{ driver . name }}</div>
                                                                <div class="text-sm text-gray-500">ID: @{{ driver . id }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">@{{ driver . phone }}</div>
                                                        <div class="text-sm text-gray-500">@{{ driver . email }}</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <span class="px-2 py-1 text-xs rounded-full"
                                                                ng-class="{'bg-yellow-100 text-yellow-800': driver.carType === 'sedan', 'bg-purple-100 text-purple-800': driver.carType === 'suv'}">
                                                                @{{ (driver . carType) | uppercase }}
                                                            </span>
                                                            <span
                                                                class="ml-2 text-sm text-gray-500">@{{ driver . carNumber }}</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span
                                                            class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full"
                                                            ng-class="{'bg-green-100 text-green-800': driver.isAvailable, 'bg-red-100 text-red-800': !driver.isAvailable}">
                                                            @{{ driver . isAvailable ? 'Available' : 'Busy' }}
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                        <button ng-click="selectDriver(driver)"
                                                            class="text-indigo-600 hover:text-indigo-900"
                                                            ng-class="{'font-bold': selectedDriver && selectedDriver.id === driver.id}">
                                                            @{{ selectedDriver && selectedDriver . id === driver . id ? 'Selected' : 'Select' }}
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- Assignment Notes -->
                            <div class="mb-6">
                                <label for="assignmentNotes"
                                    class="block text-sm font-medium text-gray-700 mb-1">Assignment Notes
                                    (Optional)</label>
                                <textarea id="assignmentNotes" ng-model="assignmentNotes" rows="2"
                                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                    placeholder="Add any special instructions for the driver..."></textarea>
                            </div>

                            <!-- Action Buttons -->
                            <div class="flex justify-end space-x-3">
                                <button ng-click="closeAssignModal()"
                                    class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Cancel
                                </button>
                                <button ng-click="assignDriver()" ng-disabled="!selectedDriver"
                                    class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 disabled:opacity-50 disabled:cursor-not-allowed">
                                    @{{ isChangingDriver ? 'Change Driver' : 'Assign Driver' }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Booking Details Modal -->
            <div ng-if="showDetailsModal" class="fixed inset-0 z-50 overflow-y-auto">
                <div class="modal-overlay fixed inset-0" ng-click="closeDetailsModal()"></div>
                <div class="flex items-center justify-center min-h-screen p-4">
                    <div class="modal-content bg-white rounded-lg shadow-xl w-full max-w-2xl mx-auto z-50">
                        <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
                            <h3 class="text-lg font-medium text-gray-900">Booking Details</h3>
                            <button ng-click="closeDetailsModal()" class="text-gray-400 hover:text-gray-600">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>

                        <div class="px-6 py-4">
                            <!-- Booking ID and Status -->
                            <div class="flex justify-between items-center mb-6">
                                <div>
                                    <span class="text-sm text-gray-500">Booking ID</span>
                                    <h4 class="text-lg font-semibold text-gray-900">#@{{ selectedBooking . bookingId }}</h4>
                                </div>
                                <div>
                                    <span class="status-badge px-3 py-1 rounded-full text-sm font-medium"
                                        ng-class="{
                  'bg-yellow-100 text-yellow-800': selectedBooking.status === 'unassigned',
                  'bg-blue-100 text-blue-800': selectedBooking.status === 'assigned',
                  'bg-green-100 text-green-800': selectedBooking.status === 'ongoing',
                  'bg-purple-100 text-purple-800': selectedBooking.status === 'completed'
                }">
                                        @{{ (selectedBooking . status) | capitalize }}
                                    </span>
                                </div>
                            </div>

                            <!-- Customer Information -->
                            <div class="mb-6">
                                <h5 class="text-sm font-medium text-gray-700 mb-2">Customer Information</h5>
                                <div class="bg-gray-50 rounded-lg p-4">
                                    <div class="grid grid-cols-2 gap-4">
                                        <div>
                                            <p class="text-xs text-gray-500">Name</p>
                                            <p class="text-sm font-medium">@{{ selectedBooking . customerName }}</p>
                                        </div>
                                        <div>
                                            <p class="text-xs text-gray-500">Phone</p>
                                            <p class="text-sm font-medium">@{{ selectedBooking . customerPhone }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Trip Details -->
                            <div class="mb-6">
                                <h5 class="text-sm font-medium text-gray-700 mb-2">Trip Details</h5>
                                <div class="bg-gray-50 rounded-lg p-4">
                                    <div class="grid grid-cols-2 gap-4">
                                        <div>
                                            <p class="text-xs text-gray-500">Car Type</p>
                                            <p class="text-sm font-medium">@{{ (selectedBooking . carType) | uppercase }}</p>
                                        </div>
                                        <div>
                                            <p class="text-xs text-gray-500">Trip Type</p>
                                            <p class="text-sm font-medium">
                                                @{{ selectedBooking . tripType === 'oneway' ? 'One Way' : 'Round Trip' }}</p>
                                        </div>
                                        <div>
                                            <p class="text-xs text-gray-500">Persons</p>
                                            <p class="text-sm font-medium">@{{ selectedBooking . persons }}</p>
                                        </div>
                                        <div>
                                            <p class="text-xs text-gray-500">Distance</p>
                                            <p class="text-sm font-medium">@{{ selectedBooking . distance }} km</p>
                                        </div>
                                        <div>
                                            <p class="text-xs text-gray-500">Pickup Time</p>
                                            <p class="text-sm font-medium">
                                                @{{ formatDateTime(selectedBooking . pickupTime) }}</p>
                                        </div>
                                        <div>
                                            <p class="text-xs text-gray-500">Booking Time</p>
                                            <p class="text-sm font-medium">
                                                @{{ formatDateTime(selectedBooking . bookingTime) }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Locations -->
                            <div class="mb-6">
                                <h5 class="text-sm font-medium text-gray-700 mb-2">Locations</h5>
                                <div class="bg-gray-50 rounded-lg p-4">
                                    <div class="mb-4">
                                        <p class="text-xs text-gray-500">Pickup Location</p>
                                        <p class="text-sm font-medium">@{{ selectedBooking . pickupLocation }}</p>
                                    </div>
                                    <div>
                                        <p class="text-xs text-gray-500">Drop Location</p>
                                        <p class="text-sm font-medium">@{{ selectedBooking . dropLocation }}</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Payment Details -->
                            <div class="mb-6">
                                <h5 class="text-sm font-medium text-gray-700 mb-2">Payment Details</h5>
                                <div class="bg-gray-50 rounded-lg p-4">
                                    <div class="grid grid-cols-2 gap-4">
                                        <div>
                                            <p class="text-xs text-gray-500">Total Amount</p>
                                            <p class="text-sm font-medium">₹@{{ selectedBooking . totalAmount }}</p>
                                        </div>
                                        <div>
                                            <p class="text-xs text-gray-500">Payment Status</p>
                                            <p class="text-sm font-medium">@{{ selectedBooking . paymentStatus }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Driver Information (if assigned) -->
                            <div ng-if="selectedBooking.driver" class="mb-6">
                                <h5 class="text-sm font-medium text-gray-700 mb-2">Driver Information</h5>
                                <div class="bg-gray-50 rounded-lg p-4">
                                    <div class="flex items-center">
                                        <div
                                            class="flex-shrink-0 h-12 w-12 bg-indigo-100 rounded-full flex items-center justify-center">
                                            <span
                                                class="text-indigo-700 font-medium">@{{ selectedBooking . driver . name . charAt(0) }}@{{ selectedBooking . driver . name . split(' ')[1] ? selectedBooking . driver . name . split(' ')[1] . charAt(0) : '' }}</span>
                                        </div>
                                        <div class="ml-4">
                                            <p class="text-sm font-medium text-gray-900">@{{ selectedBooking . driver . name }}
                                            </p>
                                            <p class="text-sm text-gray-600">@{{ selectedBooking . driver . phone }}</p>
                                        </div>
                                    </div>
                                    <div class="mt-4 grid grid-cols-2 gap-4">
                                        <div>
                                            <p class="text-xs text-gray-500">Car Type</p>
                                            <p class="text-sm font-medium">
                                                @{{ (selectedBooking . driver . carType) | uppercase }}</p>
                                        </div>
                                        <div>
                                            <p class="text-xs text-gray-500">Car Number</p>
                                            <p class="text-sm font-medium">@{{ selectedBooking . driver . carNumber }}</p>
                                        </div>
                                        <div>
                                            <p class="text-xs text-gray-500">Assigned At</p>
                                            <p class="text-sm font-medium">
                                                @{{ formatDateTime(selectedBooking . assignedAt) }}</p>
                                        </div>
                                        <div>
                                            <p class="text-xs text-gray-500">Assignment Notes</p>
                                            <p class="text-sm font-medium">@{{ selectedBooking . assignmentNotes || 'None' }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="flex justify-end space-x-3">
                                <button ng-click="closeDetailsModal()"
                                    class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Close
                                </button>
                                <button ng-if="selectedBooking.status === 'unassigned'"
                                    ng-click="showAssignDriverModal(selectedBooking); closeDetailsModal();"
                                    class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Assign Driver
                                </button>
                                <button ng-if="selectedBooking.status === 'assigned'"
                                    ng-click="updateBookingStatus(selectedBooking, 'ongoing'); closeDetailsModal();"
                                    class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                    Mark as Ongoing
                                </button>
                                <button ng-if="selectedBooking.status === 'ongoing'"
                                    ng-click="updateBookingStatus(selectedBooking, 'completed'); closeDetailsModal();"
                                    class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                                    Mark as Completed
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    <script>
        angular.module('bookingAssignmentApp', [])
            .controller('BookingAssignmentController', function($scope, $timeout, $http, $interval) {
                // API endpoints
                const API_BASE_URL = 'https://api.example.com/v1'; // Replace with your actual API base URL
                const BOOKINGS_ENDPOINT = `${API_BASE_URL}/bookings`;
                const DRIVERS_ENDPOINT = `${API_BASE_URL}/drivers`;
                const ASSIGNMENTS_ENDPOINT = `${API_BASE_URL}/assignments`;

                // Initialize state
                $scope.bookings = [];
                $scope.drivers = [];
                $scope.isLoading = true;
                $scope.isLoadingDrivers = false;
                $scope.showAssignModal = false;
                $scope.showDetailsModal = false;
                $scope.selectedBooking = null;
                $scope.selectedDriver = null;
                $scope.assignmentNotes = '';
                $scope.isChangingDriver = false;
                $scope.showToast = false;
                $scope.toastMessage = '';
                $scope.toastTitle = '';
                $scope.toastType = 'success';

                // Pagination
                $scope.currentPage = 1;
                $scope.pageSize = 10;

                // Tabs
                $scope.activeTab = 'unassigned';

                // Filters
                $scope.searchQuery = '';
                $scope.carTypeFilter = 'all';
                $scope.tripTypeFilter = 'all';
                $scope.sortOption = 'pickupTime';
                $scope.sortOrder = 'asc';

                // Driver filters
                $scope.driverSearchQuery = '';
                $scope.driverCarTypeFilter = 'all';
                $scope.availableDriversOnly = true;

                // Stats
                $scope.newBookingsToday = 0;

                // Initialize with sample data (will be replaced with API call)
                const initializeSampleData = function() {
                    const sampleBookings = [{
                            id: 1,
                            bookingId: 'BK001',
                            customerName: 'Rahul Sharma',
                            customerPhone: '+91 98765 43210',
                            pickupLocation: 'Indira Gandhi International Airport, New Delhi',
                            dropLocation: 'The Leela Palace, Chanakyapuri, New Delhi',
                            pickupTime: '2023-07-15T10:30:00',
                            bookingTime: '2023-07-14T15:45:00',
                            tripType: 'oneway',
                            carType: 'sedan',
                            persons: 2,
                            totalAmount: 1200,
                            distance: 15,
                            status: 'completed',
                            paymentStatus: 'Paid',
                            driver: {
                                id: 3,
                                name: 'Vikram Singh',
                                phone: '+91 87654 32109',
                                email: 'vikram.singh@example.com',
                                carType: 'sedan',
                                carNumber: 'DL 01 AB 1234',
                                isAvailable: false
                            },
                            assignedAt: '2023-07-14T16:30:00',
                            assignmentNotes: 'Customer requested for a clean car'
                        },
                        {
                            id: 2,
                            bookingId: 'BK002',
                            customerName: 'Priya Patel',
                            customerPhone: '+91 87654 32109',
                            pickupLocation: 'Taj Palace Hotel, Diplomatic Enclave, New Delhi',
                            dropLocation: 'Jaipur Marriott Hotel, Ashram Marg, Jaipur',
                            pickupTime: '2023-07-16T08:00:00',
                            bookingTime: '2023-07-15T12:20:00',
                            tripType: 'oneway',
                            carType: 'suv',
                            persons: 4,
                            totalAmount: 5500,
                            distance: 280,
                            status: 'ongoing',
                            paymentStatus: 'Pending',
                            driver: {
                                id: 5,
                                name: 'Rajesh Kumar',
                                phone: '+91 76543 21098',
                                email: 'rajesh.kumar@example.com',
                                carType: 'suv',
                                carNumber: 'HR 02 CD 5678',
                                isAvailable: false
                            },
                            assignedAt: '2023-07-15T14:15:00',
                            assignmentNotes: ''
                        },
                        {
                            id: 3,
                            bookingId: 'BK003',
                            customerName: 'Amit Verma',
                            customerPhone: '+91 76543 21098',
                            pickupLocation: 'DLF Cyber City, Gurugram',
                            dropLocation: 'Noida Sector 18, Uttar Pradesh',
                            pickupTime: '2023-07-17T09:15:00',
                            bookingTime: '2023-07-16T10:30:00',
                            tripType: 'oneway',
                            carType: 'sedan',
                            persons: 3,
                            totalAmount: 1800,
                            distance: 35,
                            status: 'assigned',
                            paymentStatus: 'Pending',
                            driver: {
                                id: 2,
                                name: 'Sanjay Gupta',
                                phone: '+91 98765 12345',
                                email: 'sanjay.gupta@example.com',
                                carType: 'sedan',
                                carNumber: 'UP 03 EF 9012',
                                isAvailable: false
                            },
                            assignedAt: '2023-07-16T11:45:00',
                            assignmentNotes: 'Driver to call 15 minutes before arrival'
                        },
                        {
                            id: 4,
                            bookingId: 'BK004',
                            customerName: 'Neha Gupta',
                            customerPhone: '+91 65432 10987',
                            pickupLocation: 'Connaught Place, New Delhi',
                            dropLocation: 'Agra Fort, Agra, Uttar Pradesh',
                            pickupTime: '2023-07-18T07:30:00',
                            bookingTime: '2023-07-16T16:20:00',
                            tripType: 'round',
                            carType: 'suv',
                            persons: 5,
                            totalAmount: 8000,
                            distance: 230,
                            status: 'unassigned',
                            paymentStatus: 'Pending',
                            driver: null,
                            assignedAt: null,
                            assignmentNotes: null
                        },
                        {
                            id: 5,
                            bookingId: 'BK005',
                            customerName: 'Suresh Reddy',
                            customerPhone: '+91 54321 09876',
                            pickupLocation: 'Hyderabad Airport, Telangana',
                            dropLocation: 'Taj Krishna, Banjara Hills, Hyderabad',
                            pickupTime: '2023-07-16T23:45:00',
                            bookingTime: '2023-07-16T18:30:00',
                            tripType: 'oneway',
                            carType: 'sedan',
                            persons: 2,
                            totalAmount: 1500,
                            distance: 25,
                            status: 'unassigned',
                            paymentStatus: 'Paid',
                            driver: null,
                            assignedAt: null,
                            assignmentNotes: null
                        },
                        {
                            id: 6,
                            bookingId: 'BK006',
                            customerName: 'Anita Desai',
                            customerPhone: '+91 43210 98765',
                            pickupLocation: 'Mumbai International Airport, Mumbai',
                            dropLocation: 'Taj Mahal Palace, Colaba, Mumbai',
                            pickupTime: '2023-07-17T14:00:00',
                            bookingTime: '2023-07-16T09:15:00',
                            tripType: 'oneway',
                            carType: 'sedan',
                            persons: 1,
                            totalAmount: 1800,
                            distance: 22,
                            status: 'unassigned',
                            paymentStatus: 'Pending',
                            driver: null,
                            assignedAt: null,
                            assignmentNotes: null
                        },
                        {
                            id: 7,
                            bookingId: 'BK007',
                            customerName: 'Kiran Rao',
                            customerPhone: '+91 32109 87654',
                            pickupLocation: 'Bengaluru International Airport, Karnataka',
                            dropLocation: 'Electronic City, Bengaluru',
                            pickupTime: '2023-07-17T11:30:00',
                            bookingTime: '2023-07-16T14:45:00',
                            tripType: 'oneway',
                            carType: 'suv',
                            persons: 3,
                            totalAmount: 2200,
                            distance: 55,
                            status: 'unassigned',
                            paymentStatus: 'Paid',
                            driver: null,
                            assignedAt: null,
                            assignmentNotes: null
                        },
                        {
                            id: 8,
                            bookingId: 'BK008',
                            customerName: 'Vijay Malhotra',
                            customerPhone: '+91 21098 76543',
                            pickupLocation: 'Chennai Central Railway Station, Tamil Nadu',
                            dropLocation: 'Mahabalipuram, Tamil Nadu',
                            pickupTime: '2023-07-18T09:00:00',
                            bookingTime: '2023-07-16T11:20:00',
                            tripType: 'round',
                            carType: 'suv',
                            persons: 4,
                            totalAmount: 4500,
                            distance: 60,
                            status: 'completed',
                            paymentStatus: 'Paid',
                            driver: {
                                id: 7,
                                name: 'Prakash Rao',
                                phone: '+91 65432 56789',
                                email: 'prakash.rao@example.com',
                                carType: 'suv',
                                carNumber: 'TN 04 GH 3456',
                                isAvailable: true
                            },
                            assignedAt: '2023-07-16T12:30:00',
                            assignmentNotes: 'Customer requested for AC at maximum'
                        }
                    ];

                    const sampleDrivers = [{
                            id: 1,
                            name: 'Ajay Sharma',
                            phone: '+91 99887 76655',
                            email: 'ajay.sharma@example.com',
                            carType: 'sedan',
                            carNumber: 'DL 05 IJ 7890',
                            isAvailable: true
                        },
                        {
                            id: 2,
                            name: 'Sanjay Gupta',
                            phone: '+91 98765 12345',
                            email: 'sanjay.gupta@example.com',
                            carType: 'sedan',
                            carNumber: 'UP 03 EF 9012',
                            isAvailable: false
                        },
                        {
                            id: 3,
                            name: 'Vikram Singh',
                            phone: '+91 87654 32109',
                            email: 'vikram.singh@example.com',
                            carType: 'sedan',
                            carNumber: 'DL 01 AB 1234',
                            isAvailable: true
                        },
                        {
                            id: 4,
                            name: 'Anand Patel',
                            phone: '+91 77889 90012',
                            email: 'anand.patel@example.com',
                            carType: 'sedan',
                            carNumber: 'MH 06 KL 1234',
                            isAvailable: true
                        },
                        {
                            id: 5,
                            name: 'Rajesh Kumar',
                            phone: '+91 76543 21098',
                            email: 'rajesh.kumar@example.com',
                            carType: 'suv',
                            carNumber: 'HR 02 CD 5678',
                            isAvailable: false
                        },
                        {
                            id: 6,
                            name: 'Dinesh Yadav',
                            phone: '+91 88990 12345',
                            email: 'dinesh.yadav@example.com',
                            carType: 'suv',
                            carNumber: 'KA 07 MN 5678',
                            isAvailable: true
                        },
                        {
                            id: 7,
                            name: 'Prakash Rao',
                            phone: '+91 65432 56789',
                            email: 'prakash.rao@example.com',
                            carType: 'suv',
                            carNumber: 'TN 04 GH 3456',
                            isAvailable: true
                        },
                        {
                            id: 8,
                            name: 'Mohan Lal',
                            phone: '+91 90123 45678',
                            email: 'mohan.lal@example.com',
                            carType: 'suv',
                            carNumber: 'PB 08 OP 9012',
                            isAvailable: true
                        }
                    ];

                    $scope.bookings = sampleBookings;
                    $scope.drivers = sampleDrivers;
                    $scope.isLoading = false;

                    // Calculate new bookings today
                    const currentDate = new Date();
                    const startOfDay = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate
                        .getDate());
                    $scope.newBookingsToday = $scope.bookings.filter(booking => {
                        const bookingDate = new Date(booking.bookingTime);
                        return bookingDate >= startOfDay;
                    }).length;
                };

                // Fetch bookings from API
                $scope.fetchBookings = function() {
                    $scope.isLoading = true;

                    // In a real application, this would be an API call
                    // $http.get(BOOKINGS_ENDPOINT)
                    //   .then(function(response) {
                    //     $scope.bookings = response.data;
                    //     $scope.isLoading = false;
                    //
                    //     // Calculate new bookings today
                    //     const currentDate = new Date();
                    //     const startOfDay = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate());
                    //     $scope.newBookingsToday = $scope.bookings.filter(booking => {
                    //       const bookingDate = new Date(booking.bookingTime);
                    //       return bookingDate >= startOfDay;
                    //     }).length;
                    //   })
                    //   .catch(function(error) {
                    //     console.error('Error fetching bookings:', error);
                    //     $scope.isLoading = false;
                    //     $scope.showToastMessage('Error', 'Failed to load bookings. Please try again.', 'error');
                    //   });

                    // For demo purposes, use sample data
                    $timeout(function() {
                        initializeSampleData();
                    }, 1000);
                };

                // Fetch drivers from API
                $scope.fetchDrivers = function() {
                    $scope.isLoadingDrivers = true;

                    // In a real application, this would be an API call
                    // $http.get(DRIVERS_ENDPOINT)
                    //   .then(function(response) {
                    //     $scope.drivers = response.data;
                    //     $scope.isLoadingDrivers = false;
                    //   })
                    //   .catch(function(error) {
                    //     console.error('Error fetching drivers:', error);
                    //     $scope.isLoadingDrivers = false;
                    //     $scope.showToastMessage('Error', 'Failed to load drivers. Please try again.', 'error');
                    //   });

                    // For demo purposes, we already have drivers in the sample data
                    $timeout(function() {
                        $scope.isLoadingDrivers = false;
                    }, 800);
                };

                // Initialize by fetching bookings
                $scope.fetchBookings();

                // Set active tab
                $scope.setActiveTab = function(tab) {
                    $scope.activeTab = tab;
                    $scope.currentPage = 1; // Reset to first page when changing tabs
                };

                // Get tab indicator style for animation
                $scope.getTabIndicatorStyle = function() {
                    let left = 0;
                    let width = 0;

                    switch ($scope.activeTab) {
                        case 'unassigned':
                            left = '0%';
                            width = '25%';
                            break;
                        case 'assigned':
                            left = '25%';
                            width = '25%';
                            break;
                        case 'completed':
                            left = '50%';
                            width = '25%';
                            break;
                        case 'all':
                            left = '75%';
                            width = '25%';
                            break;
                    }

                    return {
                        left: left,
                        width: width
                    };
                };

                // Get tab title
                $scope.getTabTitle = function() {
                    switch ($scope.activeTab) {
                        case 'unassigned':
                            return 'Unassigned Bookings';
                        case 'assigned':
                            return 'Assigned Bookings';
                        case 'completed':
                            return 'Completed Rides';
                        case 'all':
                            return 'All Bookings';
                        default:
                            return 'Bookings';
                    }
                };

                // Filter bookings based on active tab, search and filters
                $scope.filteredBookings = function() {
                    return $scope.bookings.filter(function(booking) {
                        // Tab filter
                        let tabMatch = true;
                        if ($scope.activeTab === 'unassigned') {
                            tabMatch = booking.status === 'unassigned';
                        } else if ($scope.activeTab === 'assigned') {
                            tabMatch = booking.status === 'assigned' || booking.status === 'ongoing';
                        } else if ($scope.activeTab === 'completed') {
                            tabMatch = booking.status === 'completed';
                        }

                        // Search query filter
                        const searchMatch = !$scope.searchQuery ||
                            booking.customerName.toLowerCase().includes($scope.searchQuery.toLowerCase()) ||
                            booking.customerPhone.includes($scope.searchQuery) ||
                            booking.bookingId.toLowerCase().includes($scope.searchQuery.toLowerCase()) ||
                            booking.pickupLocation.toLowerCase().includes($scope.searchQuery
                        .toLowerCase()) ||
                            booking.dropLocation.toLowerCase().includes($scope.searchQuery.toLowerCase());

                        // Car type filter
                        const carTypeMatch = $scope.carTypeFilter === 'all' || booking.carType === $scope
                            .carTypeFilter;

                        // Trip type filter
                        const tripTypeMatch = $scope.tripTypeFilter === 'all' || booking.tripType === $scope
                            .tripTypeFilter;

                        return tabMatch && searchMatch && carTypeMatch && tripTypeMatch;
                    });
                };

                // Filter drivers based on search and filters
                $scope.filteredDrivers = function() {
                    return $scope.drivers.filter(function(driver) {
                        // Search query filter
                        const searchMatch = !$scope.driverSearchQuery ||
                            driver.name.toLowerCase().includes($scope.driverSearchQuery.toLowerCase()) ||
                            driver.phone.includes($scope.driverSearchQuery) ||
                            driver.carNumber.toLowerCase().includes($scope.driverSearchQuery.toLowerCase());

                        // Car type filter
                        const carTypeMatch = $scope.driverCarTypeFilter === 'all' || driver.carType ===
                            $scope.driverCarTypeFilter;

                        // Availability filter
                        const availabilityMatch = !$scope.availableDriversOnly || driver.isAvailable;

                        // Match with selected booking car type
                        const bookingCarTypeMatch = $scope.selectedBooking ?
                            ($scope.selectedBooking.carType === driver.carType) : true;

                        return searchMatch && carTypeMatch && availabilityMatch && bookingCarTypeMatch;
                    });
                };

                // Get sort field based on sort option
                $scope.getSortField = function() {
                    switch ($scope.sortOption) {
                        case 'pickupTime':
                            return 'pickupTime';
                        case 'bookingTime':
                            return 'bookingTime';
                        case 'distance':
                            return 'distance';
                        case 'amount':
                            return 'totalAmount';
                        default:
                            return 'pickupTime';
                    }
                };

                // Toggle sort order
                $scope.toggleSortOrder = function() {
                    $scope.sortOrder = $scope.sortOrder === 'asc' ? 'desc' : 'asc';
                };

                // Reset filters
                $scope.resetFilters = function() {
                    $scope.searchQuery = '';
                    $scope.carTypeFilter = 'all';
                    $scope.tripTypeFilter = 'all';
                    $scope.sortOption = 'pickupTime';
                    $scope.sortOrder = 'asc';
                };

                // Format date and time
                $scope.formatDateTime = function(dateString) {
                    if (!dateString) return 'N/A';
                    const date = new Date(dateString);
                    return date.toLocaleString('en-US', {
                        year: 'numeric',
                        month: 'short',
                        day: 'numeric',
                        hour: '2-digit',
                        minute: '2-digit'
                    });
                };

                // Get unassigned bookings count
                $scope.getUnassignedBookingsCount = function() {
                    return $scope.bookings.filter(booking => booking.status === 'unassigned').length;
                };

                // Get assigned bookings count
                $scope.getAssignedBookingsCount = function() {
                    return $scope.bookings.filter(booking => booking.status === 'assigned' || booking.status ===
                        'ongoing').length;
                };

                // Get ongoing rides count
                $scope.getOngoingRidesCount = function() {
                    return $scope.bookings.filter(booking => booking.status === 'ongoing').length;
                };

                // Get completed rides count
                $scope.getCompletedRidesCount = function() {
                    return $scope.bookings.filter(booking => booking.status === 'completed').length;
                };

                // Get ongoing rides percentage
                $scope.getOngoingRidesPercentage = function() {
                    const assigned = $scope.getAssignedBookingsCount();
                    if (assigned === 0) return 0;
                    return Math.round(($scope.getOngoingRidesCount() / assigned) * 100);
                };

                // Get completed rides percentage
                $scope.getCompletedRidesPercentage = function() {
                    const total = $scope.bookings.filter(booking => booking.status !== 'unassigned').length;
                    if (total === 0) return 0;
                    return Math.round(($scope.getCompletedRidesCount() / total) * 100);
                };

                // Check if booking is urgent (pickup time within 1 hour)
                $scope.isUrgent = function(booking) {
                    if (booking.status !== 'unassigned') return false;

                    const pickupTime = new Date(booking.pickupTime);
                    const now = new Date();
                    const diffMs = pickupTime - now;
                    const diffHours = diffMs / (1000 * 60 * 60);

                    return diffHours <= 1 && diffHours > 0;
                };

                // Get urgent unassigned bookings count
                $scope.getUrgentUnassignedCount = function() {
                    return $scope.bookings.filter(booking => $scope.isUrgent(booking)).length;
                };

                // Pagination methods
                $scope.totalPages = function() {
                    return Math.ceil($scope.filteredBookings().length / $scope.pageSize);
                };

                $scope.getPageNumbers = function() {
                    const totalPages = $scope.totalPages();
                    if (totalPages <= 5) {
                        return Array.from({
                            length: totalPages
                        }, (_, i) => i + 1);
                    }

                    if ($scope.currentPage <= 3) {
                        return [1, 2, 3, 4, 5];
                    }


                    if ($scope.currentPage <= 3) {
                        return [1, 2, 3, 4, 5];
                    }

                    if ($scope.currentPage >= totalPages - 2) {
                        return [totalPages - 4, totalPages - 3, totalPages - 2, totalPages - 1, totalPages];
                    }

                    return [$scope.currentPage - 2, $scope.currentPage - 1, $scope.currentPage, $scope.currentPage +
                        1, $scope.currentPage + 2
                    ];
                };

                $scope.prevPage = function() {
                    if ($scope.currentPage > 1) {
                        $scope.currentPage--;
                    }
                };

                $scope.nextPage = function() {
                    if ($scope.currentPage < $scope.totalPages()) {
                        $scope.currentPage++;
                    }
                };

                $scope.goToPage = function(page) {
                    $scope.currentPage = page;
                };

                // Show assign driver modal
                $scope.showAssignDriverModal = function(booking) {
                    $scope.selectedBooking = booking;
                    $scope.selectedDriver = null;
                    $scope.assignmentNotes = '';
                    $scope.isChangingDriver = false;
                    $scope.showAssignModal = true;
                    $scope.fetchDrivers();
                };

                // Show change driver modal
                $scope.showChangeDriverModal = function(booking) {
                    $scope.selectedBooking = booking;
                    $scope.selectedDriver = null;
                    $scope.assignmentNotes = booking.assignmentNotes || '';
                    $scope.isChangingDriver = true;
                    $scope.showAssignModal = true;
                    $scope.fetchDrivers();
                };

                // Close assign driver modal
                $scope.closeAssignModal = function() {
                    $scope.showAssignModal = false;
                    $scope.selectedBooking = null;
                    $scope.selectedDriver = null;
                    $scope.assignmentNotes = '';
                    $scope.isChangingDriver = false;
                    $scope.driverSearchQuery = '';
                    $scope.driverCarTypeFilter = 'all';
                    $scope.availableDriversOnly = true;
                };

                // Select driver
                $scope.selectDriver = function(driver) {
                    $scope.selectedDriver = driver;
                };

                // Assign driver to booking
                $scope.assignDriver = function() {
                    if (!$scope.selectedDriver || !$scope.selectedBooking) {
                        $scope.showToastMessage('Error', 'Please select a driver to assign', 'error');
                        return;
                    }

                    $scope.isLoading = true;

                    // Prepare assignment data
                    const assignmentData = {
                        bookingId: $scope.selectedBooking.id,
                        driverId: $scope.selectedDriver.id,
                        notes: $scope.assignmentNotes,
                        assignedAt: new Date().toISOString()
                    };

                    // In a real application, this would be an API call
                    // $http.post(ASSIGNMENTS_ENDPOINT, assignmentData)
                    //   .then(function(response) {
                    //     // Update booking with assigned driver
                    //     updateBookingWithDriver();
                    //     $scope.showToastMessage('Success', 'Driver assigned successfully', 'success');
                    //     $scope.closeAssignModal();
                    //     $scope.isLoading = false;
                    //   })
                    //   .catch(function(error) {
                    //     console.error('Error assigning driver:', error);
                    //     $scope.isLoading = false;
                    //     $scope.showToastMessage('Error', 'Failed to assign driver. Please try again.', 'error');
                    //   });

                    // For demo purposes, simulate API call
                    $timeout(function() {
                        // Update booking with assigned driver
                        updateBookingWithDriver();
                        $scope.showToastMessage(
                            'Success',
                            $scope.isChangingDriver ? 'Driver changed successfully' :
                            'Driver assigned successfully',
                            'success'
                        );
                        $scope.closeAssignModal();
                        $scope.isLoading = false;
                    }, 1000);

                    // Helper function to update booking with driver
                    function updateBookingWithDriver() {
                        // Find booking and update it
                        const bookingIndex = $scope.bookings.findIndex(b => b.id === $scope.selectedBooking.id);
                        if (bookingIndex !== -1) {
                            // Update driver availability
                            if ($scope.selectedBooking.driver) {
                                // Make previous driver available
                                const prevDriverIndex = $scope.drivers.findIndex(d => d.id === $scope
                                    .selectedBooking.driver.id);
                                if (prevDriverIndex !== -1) {
                                    $scope.drivers[prevDriverIndex].isAvailable = true;
                                }
                            }

                            // Make new driver unavailable
                            const driverIndex = $scope.drivers.findIndex(d => d.id === $scope.selectedDriver.id);
                            if (driverIndex !== -1) {
                                $scope.drivers[driverIndex].isAvailable = false;
                            }

                            // Update booking
                            $scope.bookings[bookingIndex].driver = $scope.selectedDriver;
                            $scope.bookings[bookingIndex].status = 'assigned';
                            $scope.bookings[bookingIndex].assignedAt = new Date().toISOString();
                            $scope.bookings[bookingIndex].assignmentNotes = $scope.assignmentNotes;
                        }
                    }
                };

                // Update booking status
                $scope.updateBookingStatus = function(booking, newStatus) {
                    $scope.isLoading = true;

                    // Prepare status update data
                    const statusUpdateData = {
                        bookingId: booking.id,
                        status: newStatus,
                        updatedAt: new Date().toISOString()
                    };

                    // In a real application, this would be an API call
                    // $http.put(`${BOOKINGS_ENDPOINT}/${booking.id}/status`, statusUpdateData)
                    //   .then(function(response) {
                    //     // Update booking status
                    //     updateBookingStatus();
                    //     $scope.showToastMessage('Success', 'Booking status updated successfully', 'success');
                    //     $scope.isLoading = false;
                    //   })
                    //   .catch(function(error) {
                    //     console.error('Error updating booking status:', error);
                    //     $scope.isLoading = false;
                    //     $scope.showToastMessage('Error', 'Failed to update booking status. Please try again.', 'error');
                    //   });

                    // For demo purposes, simulate API call
                    $timeout(function() {
                        // Update booking status
                        updateBookingStatus();
                        $scope.showToastMessage('Success', 'Booking status updated successfully',
                        'success');
                        $scope.isLoading = false;
                    }, 800);

                    // Helper function to update booking status
                    function updateBookingStatus() {
                        // Find booking and update its status
                        const bookingIndex = $scope.bookings.findIndex(b => b.id === booking.id);
                        if (bookingIndex !== -1) {
                            $scope.bookings[bookingIndex].status = newStatus;

                            // If status is changed to completed, make driver available again
                            if (newStatus === 'completed' && $scope.bookings[bookingIndex].driver) {
                                const driverIndex = $scope.drivers.findIndex(d => d.id === $scope.bookings[
                                    bookingIndex].driver.id);
                                if (driverIndex !== -1) {
                                    $scope.drivers[driverIndex].isAvailable = true;
                                }
                            }

                            // If status is changed from completed to assigned, make driver unavailable
                            if (booking.status === 'completed' && newStatus === 'assigned' && $scope.bookings[
                                    bookingIndex].driver) {
                                const driverIndex = $scope.drivers.findIndex(d => d.id === $scope.bookings[
                                    bookingIndex].driver.id);
                                if (driverIndex !== -1) {
                                    $scope.drivers[driverIndex].isAvailable = false;
                                }
                            }
                        }
                    }
                };

                // Show booking details modal
                $scope.viewBookingDetails = function(booking) {
                    $scope.selectedBooking = booking;
                    $scope.showDetailsModal = true;
                };

                // Close booking details modal
                $scope.closeDetailsModal = function() {
                    $scope.showDetailsModal = false;
                    $scope.selectedBooking = null;
                };

                // Call driver
                $scope.callDriver = function(phoneNumber) {
                    // In a real application, this might integrate with a calling system
                    // For demo purposes, just show a toast
                    $scope.showToastMessage('Info', `Calling driver at ${phoneNumber}`, 'info');
                };

                // Refresh bookings
                $scope.refreshBookings = function() {
                    $scope.fetchBookings();
                    $scope.showToastMessage('Info', 'Refreshing bookings...', 'info');
                };

                // Export assignments
                $scope.exportAssignments = function() {
                    // In a real application, this would generate and download a report
                    // For demo purposes, just show a toast
                    $scope.showToastMessage('Success', 'Assignments exported successfully', 'success');
                };

                // Show toast message
                $scope.showToastMessage = function(title, message, type) {
                    $scope.toastTitle = title;
                    $scope.toastMessage = message;
                    $scope.toastType = type;
                    $scope.showToast = true;

                    // Auto hide toast after 3 seconds
                    $timeout(function() {
                        $scope.hideToast();
                    }, 3000);
                };

                // Hide toast
                $scope.hideToast = function() {
                    $scope.showToast = false;
                };

                // Check for unassigned urgent bookings periodically
                const checkUrgentBookings = function() {
                    const urgentCount = $scope.getUrgentUnassignedCount();
                    if (urgentCount > 0) {
                        $scope.showToastMessage('Warning',
                            `You have ${urgentCount} urgent unassigned bookings that need attention!`, 'warning'
                            );
                    }
                };

                // Set up interval to check for urgent bookings every 5 minutes
                const urgentCheckInterval = $interval(checkUrgentBookings, 300000);

                // Clean up interval when controller is destroyed
                $scope.$on('$destroy', function() {
                    if (urgentCheckInterval) {
                        $interval.cancel(urgentCheckInterval);
                    }
                });

                // Check for urgent bookings after initial load
                $timeout(function() {
                    checkUrgentBookings();
                }, 2000);

                // Filter for capitalizing first letter
                $scope.capitalize = function(input) {
                    if (!input) return '';
                    return input.charAt(0).toUpperCase() + input.slice(1);
                };
            })
            .filter('capitalize', function() {
                return function(input) {
                    if (!input) return '';
                    return input.charAt(0).toUpperCase() + input.slice(1);
                };
            });
    </script>
</body>

</html>
