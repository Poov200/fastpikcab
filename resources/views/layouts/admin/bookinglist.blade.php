<!DOCTYPE html>
<html lang="en" ng-app="bookingApp">

<head>
    <meta charset="UTF-8" />
    <title>All Bookings</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.3/angular.min.js"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f5f7fa;
        }

        .dashboard-container {
            max-width: 1400px;
        }

        .booking-table {
            border-collapse: separate;
            border-spacing: 0;
            width: 100%;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        .booking-table th {
            background-color: #1e40af;
            color: white;
            font-weight: 600;
            text-align: left;
            padding: 12px 16px;
            font-size: 14px;
        }

        .booking-table td {
            padding: 12px 16px;
            font-size: 14px;
            border-bottom: 1px solid #e5e7eb;
        }

        .booking-table tr:last-child td {
            border-bottom: none;
        }

        .booking-table tbody tr:nth-child(odd) {
            background-color: #ffffff;
        }

        .booking-table tbody tr:nth-child(even) {
            background-color: #f9fafb;
        }

        .booking-table tbody tr:hover {
            background-color: #f3f4f6;
        }

        .btn {
            padding: 6px 12px;
            border-radius: 6px;
            font-weight: 500;
            font-size: 13px;
            transition: all 0.2s;
        }

        .btn-primary {
            background-color: #1e40af;
            color: white;
        }

        .btn-primary:hover {
            background-color: #1e3a8a;
        }

        .btn-secondary {
            background-color: #6b7280;
            color: white;
        }

        .btn-secondary:hover {
            background-color: #4b5563;
        }

        .btn-outline {
            border: 1px solid #d1d5db;
            background-color: white;
        }

        .btn-outline:hover {
            background-color: #f3f4f6;
        }

        .badge {
            padding: 4px 8px;
            border-radius: 9999px;
            font-size: 12px;
            font-weight: 500;
        }

        .badge-pending {
            background-color: #fef3c7;
            color: #92400e;
        }

        .badge-assigned {
            background-color: #dcfce7;
            color: #166534;
        }

        .badge-completed {
            background-color: #dbeafe;
            color: #1e40af;
        }

        .badge-delayed {
            background-color: #fee2e2;
            color: #b91c1c;
        }

        .badge-cancelled {
            background-color: #f3f4f6;
            color: #4b5563;
        }

        .driver-select {
            background-color: #f9fafb;
            border-radius: 8px;
            padding: 12px;
            margin-top: 8px;
            border: 1px solid #e5e7eb;
        }

        select,
        input {
            border: 1px solid #d1d5db;
            border-radius: 6px;
            padding: 6px 10px;
            font-size: 14px;
            width: 100%;
            margin-bottom: 8px;
        }

        select:focus,
        input:focus {
            outline: none;
            border-color: #93c5fd;
            ring: 2px solid #bfdbfe;
        }

        .status-select {
            background-color: white;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            padding: 6px 10px;
            font-size: 14px;
            width: 100%;
        }

        .header-section {
            background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);
            border-radius: 12px;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        .section-header {
            position: relative;
            padding-left: 16px;
            margin-bottom: 16px;
        }

        .section-header:before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            height: 24px;
            width: 4px;
            background-color: #1e40af;
            border-radius: 4px;
        }

        .tab-button {
            padding: 10px 16px;
            font-weight: 500;
            border-radius: 8px 8px 0 0;
            transition: all 0.2s;
        }

        .tab-button.active {
            background-color: white;
            color: #1e40af;
            border-top: 2px solid #1e40af;
            border-left: 1px solid #e5e7eb;
            border-right: 1px solid #e5e7eb;
            border-bottom: none;
        }

        .tab-button:not(.active) {
            background-color: #f3f4f6;
            color: #6b7280;
            border: 1px solid #e5e7eb;
            border-bottom: none;
        }

        .tab-button:not(.active):hover {
            background-color: #f9fafb;
            color: #4b5563;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        .rating {
            display: flex;
            align-items: center;
        }

        .star {
            color: #d1d5db;
        }

        .star.filled {
            color: #f59e0b;
        }

        .animate-spin {
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .animate-pulse {
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: .5;
            }
        }
    </style>

</head>

<body ng-controller="BookingController">


    @extends('layouts.admin.adminDashboard')
    @section('AdminContent')
        <div class="min-h-screen py-8 px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="header-section text-white p-6 mb-8">
                <div class="flex justify-between items-center">
                    <div>
                        <h1 class="text-2xl font-bold">Taxi Booking Management</h1>
                        <p class="text-blue-100 mt-1">Manage and assign drivers to bookings</p>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="text-right">
                            <p class="text-sm text-blue-100">Today's Date</p>
                            <p class="font-semibold">@{{ currentDate | date: 'MMM dd, yyyy' }}</p>
                        </div>
                        <div class="bg-white bg-opacity-20 p-3 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-1 md:grid-cols-5 gap-4 mt-6">
                    <div class="bg-white bg-opacity-10 rounded-lg p-4">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-blue-500 bg-opacity-30 mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-blue-100">Total Bookings</p>
                                <p class="text-xl font-bold">@{{ bookings.length }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white bg-opacity-10 rounded-lg p-4">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-yellow-500 bg-opacity-30 mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-blue-100">Pending</p>
                                <p class="text-xl font-bold">@{{ (bookings | filter: {
    status: 'pending'
}).length }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white bg-opacity-10 rounded-lg p-4">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-green-500 bg-opacity-30 mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-blue-100">Assigned</p>
                                <p class="text-xl font-bold">@{{ getBookingsByTripStatus('pending').length }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white bg-opacity-10 rounded-lg p-4">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-blue-500 bg-opacity-30 mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-blue-100">Completed</p>
                                <p class="text-xl font-bold">@{{ getBookingsByTripStatus('completed').length }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white bg-opacity-10 rounded-lg p-4">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-purple-500 bg-opacity-30 mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-blue-100">Active Drivers</p>
                                <p class="text-xl font-bold">@{{ activeDrivers.length }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="dashboard-container mx-auto">
                <!-- Tabs -->
                <div class="flex border-b border-gray-200 mb-4">
                    <button class="tab-button" ng-class="{'active': activeTab === 'pending'}"
                        ng-click="setActiveTab('pending')">
                        <div class="flex items-center">
                            <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Pending Bookings
                        </div>
                    </button>
                    <button class="tab-button" ng-class="{'active': activeTab === 'assigned'}"
                        ng-click="setActiveTab('assigned')">
                        <div class="flex items-center">
                            <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                            Assigned Bookings
                        </div>
                    </button>
                    <button class="tab-button" ng-class="{'active': activeTab === 'completed'}"
                        ng-click="setActiveTab('completed')">
                        <div class="flex items-center">
                            <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Completed Bookings
                        </div>
                    </button>

                    <button class="tab-button" ng-class="{'active': activeTab === 'delay'}"
                        ng-click="setActiveTab('delay')">
                        <div class="flex items-center">
                            <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            delay Bookings
                        </div>
                    </button>
                    <button class="tab-button" ng-class="{'active': activeTab === 'cancel'}"
                        ng-click="setActiveTab('cancel')">
                        <div class="flex items-center">
                            <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            cancel Bookings
                        </div>
                    </button>
                </div>

                <!-- Pending Bookings Section -->
                <div class="tab-content bg-white rounded-lg shadow-md p-6 mb-8"
                    ng-class="{'active': activeTab === 'pending'}">
                    <h2 class="section-header text-xl font-semibold text-gray-800">Pending Bookings</h2>

                    <div class="overflow-x-auto">
                        <table class="booking-table">
                            <thead>
                                <tr>
                                    <th>Booking ID</th>
                                    <th>Name</th>
                                    <th>Pickup</th>
                                    <th>Destination</th>
                                    <th>Total Km</th>
                                    <th>Amount</th>
                                    <th>Vehicle</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Assign Driver</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="booking in bookings | filter:{status:'pending'}">
                                    <td class="font-medium">#@{{ booking.booking_id }}</td>
                                    <td>@{{ booking.name }}</td>
                                    <td>
                                        <div class="flex items-center">
                                            <svg class="h-4 w-4 text-green-600 mr-1" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                            @{{ booking.pickup }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex items-center">
                                            <svg class="h-4 w-4 text-red-600 mr-1" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                            @{{ booking.destination }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex items-center">
                                            <svg class="h-4 w-4 text-yellow-600 mr-1" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 9v2m0 2v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            @{{ booking.distance }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex items-center">
                                            <svg class="h-4 w-4 text-yellow-600 mr-1" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 9v2m0 2v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            @{{ booking.assigned_amount }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex items-center">
                                            <svg class="h-4 w-4 text-blue-600 mr-1" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                                            </svg>
                                            @{{ booking.vehicle }}
                                        </div>
                                    </td>
                                    <td>@{{ booking.date }}</td>
                                    <td>@{{ booking.time }}</td>
                                    <td>
                                        <div class="driver-select">
                                            <select ng-model="booking.selectedDriverId"
                                                ng-options="driver.id as driver.name for driver in activeDrivers">
                                                <option value="">Select Active Driver</option>
                                            </select>

                                            <div class="relative mt-2">
                                                <div
                                                    class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                    <span class="text-gray-500 sm:text-sm">₹</span>
                                                </div>
                                                <input type="number" ng-model="booking.assignedAmount"
                                                    placeholder="Enter Amount" min="0" step="0.01"
                                                    class="pl-7" />
                                            </div>

                                            <div class="flex space-x-2 mt-2">
                                                <button class="btn btn-primary flex-1"
                                                    ng-click="assignDriver(booking); booking.isAssigning = true"
                                                    ng-disabled="booking.isAssigning">
                                                    <div class="flex items-center justify-center"
                                                        ng-if="!booking.isAssigning">
                                                        <svg class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                                                            stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                        Assign
                                                    </div>
                                                    <div class="flex items-center justify-center"
                                                        ng-if="booking.isAssigning">
                                                        <svg class="animate-spin h-5 w-5 mr-2 text-white"
                                                            viewBox="0 0 24 24" fill="currentColor">
                                                            <path
                                                                d="M12 4v1m6 1l-2 2M4 6h1m10 8v1m-4 4l2-2M16 18h1m-2-2l-2-2M6 16v-1m-4-3l2 2M6 8h1m4-4l-2 2m4 4v-1M8 8l2-2m-2 2l2 2m4-2v-1m2 2l-2-2m-2 2l2 2" />
                                                        </svg>
                                                        Assigning...
                                                    </div>
                                                </button>
                                                <button class="btn btn-outline flex-1"
                                                    ng-click="booking.showDriverSelect = false; booking.isCancelling = true"
                                                    ng-disabled="booking.isCancelling">
                                                    <div class="flex items-center justify-center"
                                                        ng-if="!booking.isCancelling">
                                                        <svg class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                                                            stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                        </svg>
                                                        Cancel
                                                    </div>
                                                    <div class="flex items-center justify-center"
                                                        ng-if="booking.isCancelling">
                                                        <svg class="animate-pulse h-5 w-5 mr-2 text-gray-600"
                                                            fill="currentColor" viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd"
                                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 100-2 1 1 0 000 2zM13 9a1 1 0 100-2 1 1 0 000 2z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                        Cancelling...
                                                    </div>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr ng-if="(bookings | filter:{status:'pending'}).length === 0">
                                    <td colspan="9" class="text-center py-8">
                                        <div class="flex flex-col items-center justify-center text-gray-500">
                                            <svg class="h-12 w-12 mb-2" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <p>No pending bookings found.</p>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Assigned Bookings Section -->
                <div class="tab-content bg-white rounded-lg shadow-md p-6 mb-8"
                    ng-class="{'active': activeTab === 'assigned'}">
                    <h2 class="section-header text-xl font-semibold text-gray-800">Assigned Bookings</h2>

                    <div class="overflow-x-auto">
                        <table class="booking-table">
                            <thead>
                                <tr>
                                    <th>Booking ID</th>
                                    <th>Name</th>
                                    <th>Pickup</th>
                                    <th>Destination</th>
                                    <th>Vehicle</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Driver</th>
                                    <th>Amount</th>
                                    <th>Trip Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="booking in getBookingsByTripStatus('pending')">
                                    <td class="font-medium">#@{{ booking.booking_id }}</td>
                                    <td>@{{ booking.name }}</td>
                                    <td>
                                        <div class="flex items-center">
                                            <svg class="h-4 w-4 text-green-600 mr-1" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                            @{{ booking.pickup }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex items-center">
                                            <svg class="h-4 w-4 text-red-600 mr-1" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                            @{{ booking.destination }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex items-center">
                                            <svg class="h-4 w-4 text-blue-600 mr-1" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                                            </svg>
                                            @{{ booking.vehicle }}
                                        </div>
                                    </td>
                                    <td>@{{ booking.date }}</td>
                                    <td>@{{ booking.time }}</td>
                                    <td>
                                        <div ng-if="!booking.editDriver">
                                            <div class="flex items-center">
                                                <svg class="h-4 w-4 text-blue-600 mr-1" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                                </svg>
                                                <span class="font-medium">@{{ getDriverDetails(booking.driver_id) || 'Not Assigned' }}</span>
                                            </div>
                                            <button class="btn btn-outline mt-2 text-xs"
                                                ng-click="editDriverAssignment(booking)">
                                                <div class="flex items-center">
                                                    <svg class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                    </svg>
                                                    Edit
                                                </div>
                                            </button>
                                        </div>
                                        <div ng-if="booking.editDriver" class="driver-select">
                                            <select ng-model="booking.selectedDriverId"
                                                ng-options="driver.id as driver.name for driver in activeDrivers">
                                                <option value="">Select Driver</option>
                                            </select>
                                            <div class="relative mt-2">
                                                <div
                                                    class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                    <span class="text-gray-500 sm:text-sm">₹</span>
                                                </div>
                                                <input type="number" ng-model="booking.assignedAmount"
                                                    placeholder="Enter Amount" min="0" step="0.01"
                                                    class="pl-7" />
                                            </div>
                                            <div class="flex space-x-2 mt-2">
                                                <button class="btn btn-primary flex-1"
                                                    ng-click="assignDriver(booking); booking.isUpdatingDriver = true"
                                                    ng-disabled="booking.isUpdatingDriver">
                                                    <div class="flex items-center justify-center"
                                                        ng-if="!booking.isUpdatingDriver">
                                                        <svg class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                                                            stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                        Update
                                                    </div>
                                                    <div class="flex items-center justify-center"
                                                        ng-if="booking.isUpdatingDriver">
                                                        <svg class="animate-spin h-5 w-5 mr-2 text-white"
                                                            viewBox="0 0 24 24" fill="currentColor">
                                                            <path
                                                                d="M12 4v1m6 1l-2 2M4 6h1m10 8v1m-4 4l2-2M16 18h1m-2-2l-2-2M6 16v-1m-4-3l2 2M6 8h1m4-4l-2 2m4 4v-1M8 8l2-2m-2 2l2 2m4-2v-1m2 2l-2-2m-2 2l2 2" />
                                                        </svg>
                                                        Updating...
                                                    </div>
                                                </button>
                                                <button class="btn btn-outline flex-1"
                                                    ng-click="booking.editDriver = false; booking.isCancellingEdit = true"
                                                    ng-disabled="booking.isCancellingEdit">
                                                    <div class="flex items-center justify-center"
                                                        ng-if="!booking.isCancellingEdit">
                                                        <svg class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                                                            stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                        </svg>
                                                        Cancel
                                                    </div>
                                                    <div class="flex items-center justify-center"
                                                        ng-if="booking.isCancellingEdit">
                                                        <svg class="animate-pulse h-5 w-5 mr-2 text-gray-600"
                                                            fill="currentColor" viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd"
                                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 100-2 1 1 0 000 2zM13 9a1 1 0 100-2 1 1 0 000 2z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                        Cancelling...
                                                    </div>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="font-medium">₹@{{ booking.assigned_amount }}</td>
                                    <td>
                                        <select ng-model="booking.trip_status" ng-change="updateTripStatus(booking)"
                                            class="status-select"
                                            ng-class="{
            'text-green-700 bg-green-50 border-green-200': booking.trip_status === 'completed',
            'text-red-700 bg-red-50 border-red-200': booking.trip_status === 'cancel',
            'text-yellow-700 bg-yellow-50 border-yellow-200': booking.trip_status === 'delay',
            'text-blue-700 bg-blue-50 border-blue-200': booking.trip_status === 'pending'
        }">
                                            <option value="completed">Completed</option>
                                            <option value="delay">Delayed</option>
                                            {{-- <option value="pending">Pending</option> --}}
                                            <option value="cancelled">Cancel</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr ng-if="getBookingsByTripStatus('pending').length === 0">
                                    <td colspan="10" class="text-center py-8">
                                        <div class="flex flex-col items-center justify-center text-gray-500">
                                            <svg class="h-12 w-12 mb-2" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <p>No assigned bookings found.</p>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Completed Bookings Section -->
                <div class="tab-content bg-white rounded-lg shadow-md p-6"
                    ng-class="{'active': activeTab === 'completed'}">
                    <h2 class="section-header text-xl font-semibold text-gray-800">Completed Bookings</h2>

                    <div class="overflow-x-auto">
                        <table class="booking-table">
                            <thead>
                                <tr>
                                    <th>Booking ID</th>
                                    <th>Name</th>
                                    <th>Pickup</th>
                                    <th>Destination</th>
                                    <th>Vehicle</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Driver</th>
                                    <th>Amount</th>
                                    <th>Rating</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="booking in getBookingsByTripStatus('completed')">
                                    <td class="font-medium">#@{{ booking.booking_id }}</td>
                                    <td>@{{ booking.name }}</td>
                                    <td>
                                        <div class="flex items-center">
                                            <svg class="h-4 w-4 text-green-600 mr-1" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                            @{{ booking.pickup }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex items-center">
                                            <svg class="h-4 w-4 text-red-600 mr-1" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                            @{{ booking.destination }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex items-center">
                                            <svg class="h-4 w-4 text-blue-600 mr-1" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                                            </svg>
                                            @{{ booking.vehicle }}
                                        </div>
                                    </td>
                                    <td>@{{ booking.date }}</td>
                                    <td>@{{ booking.time }}</td>
                                    <td>
                                        <div class="flex items-center">
                                            <svg class="h-4 w-4 text-blue-600 mr-1" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                            </svg>
                                            <span class="font-medium">@{{ getDriverDetails(booking.driver_id) || 'Not Assigned' }}</span>
                                        </div>
                                    </td>
                                    <td class="font-medium">₹@{{ booking.assigned_amount }}</td>
                                    <td>
                                        <div class="rating">
                                            <span ng-repeat="i in [1, 2, 3, 4, 5]" class="star"
                                                ng-class="{'filled': i <= booking.rating}">★</span>
                                            <span class="ml-1 text-sm text-gray-600">(@{{ booking.rating || 0 }})</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex space-x-2">
                                            <button class="btn btn-outline text-xs"
                                                ng-click="viewBookingDetails(booking)">
                                                <div class="flex items-center">
                                                    <svg class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                                    View
                                                </div>
                                            </button>
                                            <button class="btn btn-outline text-xs" ng-click="printInvoice(booking)">
                                                <div class="flex items-center">
                                                    <svg class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                                                    </svg>
                                                    Invoice
                                                </div>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr ng-if="getBookingsByTripStatus('completed').length === 0">
                                    <td colspan="11" class="text-center py-8">
                                        <div class="flex flex-col items-center justify-center text-gray-500">
                                            <svg class="h-12 w-12 mb-2" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <p>No completed bookings found.</p>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-content bg-white rounded-lg shadow-md p-6" ng-class="{'active': activeTab === 'delay'}">
                    <h2 class="section-header text-xl font-semibold text-gray-800">Completed Bookings</h2>

                    <div class="overflow-x-auto">
                        <table class="booking-table">
                            <thead>
                                <tr>
                                    <th>Booking ID</th>
                                    <th>Name</th>
                                    <th>Pickup</th>
                                    <th>Destination</th>
                                    <th>Vehicle</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Driver</th>
                                    <th>Amount</th>
                                    <th>status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="booking in getBookingsByTripStatus('delay')">
                                    <td class="font-medium">#@{{ booking.booking_id }}</td>
                                    <td>@{{ booking.name }}</td>
                                    <td>
                                        <div class="flex items-center">
                                            <svg class="h-4 w-4 text-green-600 mr-1" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                            @{{ booking.pickup }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex items-center">
                                            <svg class="h-4 w-4 text-red-600 mr-1" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                            @{{ booking.destination }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex items-center">
                                            <svg class="h-4 w-4 text-blue-600 mr-1" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                                            </svg>
                                            @{{ booking.vehicle }}
                                        </div>
                                    </td>
                                    <td>@{{ booking.date }}</td>
                                    <td>@{{ booking.time }}</td>
                                    <td>
                                        <div class="flex items-center">
                                            <svg class="h-4 w-4 text-blue-600 mr-1" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                            </svg>
                                            <span class="font-medium">@{{ getDriverDetails(booking.driver_id) || 'Not Assigned' }}</span>
                                        </div>
                                    </td>
                                    <td class="font-medium">₹@{{ booking.assigned_amount }}</td>
                                    <td>
                                        <select ng-model="booking.trip_status" ng-change="updateTripStatus(booking)"
                                            class="status-select"
                                            ng-class="{
                      'text-green-700 bg-green-50 border-green-200': booking.trip_status === 'completed',
                      'text-red-700 bg-red-50 border-red-200': booking.trip_status === 'cancel',
                      'text-yellow-700 bg-yellow-50 border-yellow-200': booking.trip_status === 'delay',
                      'text-blue-700 bg-blue-50 border-blue-200': booking.trip_status === 'pending'
                    }">
                                            <option value="completed">Completed</option>
                                            <option value="delay">Delayed</option>
                                            {{-- <option value="pending">Pending</option> --}}
                                            <option value="cancelled">Cancel</option>
                                        </select>
                                    </td>
                                    <td>
                                        <div class="flex space-x-2">
                                            <button class="btn btn-outline text-xs"
                                                ng-click="viewBookingDetails(booking)">
                                                <div class="flex items-center">
                                                    <svg class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                                    View
                                                </div>
                                            </button>
                                            <button class="btn btn-outline text-xs" ng-click="printInvoice(booking)">
                                                <div class="flex items-center">
                                                    <svg class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                                                    </svg>
                                                    Invoice
                                                </div>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr ng-if="getBookingsByTripStatus('delay').length === 0">
                                    <td colspan="11" class="text-center py-8">
                                        <div class="flex flex-col items-center justify-center text-gray-500">
                                            <svg class="h-12 w-12 mb-2" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <p>No delay bookings found.</p>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-content bg-white rounded-lg shadow-md p-6" ng-class="{'active': activeTab === 'cancel'}">
                    <h2 class="section-header text-xl font-semibold text-gray-800">Completed Bookings</h2>

                    <div class="overflow-x-auto">
                        <table class="booking-table">
                            <thead>
                                <tr>
                                    <th>Booking ID</th>
                                    <th>Name</th>
                                    <th>Pickup</th>
                                    <th>Destination</th>
                                    <th>Vehicle</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Driver</th>
                                    <th>Amount</th>
                                    <th>Rating</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="booking in getBookingsByTripStatus('cancelled')">
                                    <td class="font-medium">#@{{ booking.booking_id }}</td>
                                    <td>@{{ booking.name }}</td>
                                    <td>
                                        <div class="flex items-center">
                                            <svg class="h-4 w-4 text-green-600 mr-1" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                            @{{ booking.pickup }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex items-center">
                                            <svg class="h-4 w-4 text-red-600 mr-1" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                            @{{ booking.destination }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex items-center">
                                            <svg class="h-4 w-4 text-blue-600 mr-1" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                                            </svg>
                                            @{{ booking.vehicle }}
                                        </div>
                                    </td>
                                    <td>@{{ booking.date }}</td>
                                    <td>@{{ booking.time }}</td>
                                    <td>
                                        <div class="flex items-center">
                                            <svg class="h-4 w-4 text-blue-600 mr-1" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                            </svg>
                                            <span class="font-medium">@{{ getDriverDetails(booking.driver_id) || 'Not Assigned' }}</span>
                                        </div>
                                    </td>
                                    <td class="font-medium">₹@{{ booking.assigned_amount }}</td>
                                    <td>
                                        <div class="rating">
                                            <span ng-repeat="i in [1, 2, 3, 4, 5]" class="star"
                                                ng-class="{'filled': i <= booking.rating}">★</span>
                                            <span class="ml-1 text-sm text-gray-600">(@{{ booking.rating || 0 }})</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex space-x-2">
                                            <button class="btn btn-outline text-xs"
                                                ng-click="viewBookingDetails(booking)">
                                                <div class="flex items-center">
                                                    <svg class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                                    View
                                                </div>
                                            </button>
                                            <button class="btn btn-outline text-xs" ng-click="printInvoice(booking)">
                                                <div class="flex items-center">
                                                    <svg class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                                                    </svg>
                                                    Invoice
                                                </div>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr ng-if="getBookingsByTripStatus('cancelled').length === 0">
                                    <td colspan="11" class="text-center py-8">
                                        <div class="flex flex-col items-center justify-center text-gray-500">
                                            <svg class="h-12 w-12 mb-2" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <p>No cancelled bookings found.</p>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Booking Details Modal -->
        <div class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50"
            ng-if="showBookingDetails">
            <div class="bg-white rounded-lg shadow-xl w-full max-w-3xl mx-4">
                <div class="border-b border-gray-200 px-6 py-4 flex justify-between items-center">
                    <h3 class="text-lg font-semibold text-gray-800">Booking Details</h3>
                    <button class="text-gray-400 hover:text-gray-500" ng-click="closeBookingDetails()">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h4 class="text-sm font-medium text-gray-500 mb-1">Booking Information</h4>
                            <div class="bg-gray-50 rounded-lg p-4">
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <p class="text-xs text-gray-500">Booking ID</p>
                                        <p class="font-medium">#@{{ selectedBooking.booking_id }}</p>
                                    </div>
                                    <div>
                                        <p class="text-xs text-gray-500">Date & Time</p>
                                        <p class="font-medium">@{{ selectedBooking.date }} at @{{ selectedBooking.time }}</p>
                                    </div>
                                    <div>
                                        <p class="text-xs text-gray-500">Vehicle Type</p>
                                        <p class="font-medium">@{{ selectedBooking.vehicle }}</p>
                                    </div>
                                    <div>
                                        <p class="text-xs text-gray-500">Total KM</p>
                                        <p class="font-medium">@{{ selectedBooking.distance }}</p>
                                    </div>
                                    <div>
                                        <p class="text-xs text-gray-500">Amount</p>
                                        <p class="font-medium">₹@{{ selectedBooking.assigned_amount }}</p>
                                    </div>
                                </div>
                            </div>

                            <h4 class="text-sm font-medium text-gray-500 mb-1 mt-4">Customer Information</h4>
                            <div class="bg-gray-50 rounded-lg p-4">
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <p class="text-xs text-gray-500">Name</p>
                                        <p class="font-medium">@{{ selectedBooking.name }}</p>
                                    </div>
                                    <div>
                                        <p class="text-xs text-gray-500">Phone</p>
                                        <p class="font-medium">@{{ selectedBooking.contact || '(Not provided)' }}</p>
                                    </div>
                                    <div class="col-span-2">
                                        <p class="text-xs text-gray-500">Email</p>
                                        <p class="font-medium">@{{ selectedBooking.email || '(Not provided)' }}</p>
                                    </div>
                                </div>
                            </div>

                            <h4 class="text-sm font-medium text-gray-500 mb-1 mt-4">Driver Information</h4>
                            <div class="bg-gray-50 rounded-lg p-4">
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <p class="text-xs text-gray-500">Driver Name</p>
                                        <p class="font-medium">@{{ getDriverDetails(selectedBooking.driver_id) }}</p>
                                    </div>
                                    <div>
                                        <p class="text-xs text-gray-500">Rating</p>
                                        <div class="rating">
                                            <span ng-repeat="i in [1, 2, 3, 4, 5]" class="star"
                                                ng-class="{'filled': i <= selectedBooking.rating}">★</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h4 class="text-sm font-medium text-gray-500 mb-1">Trip Details</h4>
                            <div class="bg-gray-50 rounded-lg p-4 h-full">
                                <div class="flex flex-col h-full">
                                    <div class="flex items-start mb-4">
                                        <div class="bg-green-100 rounded-full p-2 mr-3">
                                            <svg class="h-5 w-5 text-green-600" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="text-xs text-gray-500">Pickup Location</p>
                                            <p class="font-medium">@{{ selectedBooking.pickup }}</p>
                                        </div>
                                    </div>

                                    <div class="border-l-2 border-dashed border-gray-300 h-16 ml-6"></div>

                                    <div class="flex items-start">
                                        <div class="bg-red-100 rounded-full p-2 mr-3">
                                            <svg class="h-5 w-5 text-red-600" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="text-xs text-gray-500">Destination</p>
                                            <p class="font-medium">@{{ selectedBooking.destination }}</p>
                                        </div>
                                    </div>

                                    <div class="mt-6 pt-6 border-t border-gray-200">
                                        <h5 class="text-sm font-medium mb-2">Trip Timeline</h5>
                                        <div class="space-y-3">
                                            <div class="flex items-center">
                                                <div class="bg-blue-100 rounded-full p-1 mr-2">
                                                    <svg class="h-3 w-3 text-blue-600" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                </div>
                                                <p class="text-xs">Booking Created: <span
                                                        class="font-medium">@{{ selectedBooking.date }}
                                                        @{{ selectedBooking.time }}</span></p>
                                            </div>
                                            <div class="flex items-center">
                                                <div class="bg-green-100 rounded-full p-1 mr-2">
                                                    <svg class="h-3 w-3 text-green-600" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                </div>
                                                <p class="text-xs">Driver Assigned: <span
                                                        class="font-medium">@{{ selectedBooking.assigned_date || 'Same day' }}</span></p>
                                            </div>
                                            <div class="flex items-center">
                                                <div class="bg-purple-100 rounded-full p-1 mr-2">
                                                    <svg class="h-3 w-3 text-purple-600" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                </div>
                                                <p class="text-xs">Trip Completed: <span
                                                        class="font-medium">@{{ selectedBooking.completed_date || 'Same day' }}</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 flex justify-end space-x-3">
                        <button class="btn btn-outline" ng-click="printInvoice(selectedBooking)">
                            <div class="flex items-center">
                                <svg class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                                </svg>
                                Print Invoice
                            </div>
                        </button>
                        <button class="btn btn-primary" ng-click="closeBookingDetails()">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    <script src="{{ asset('js/adminjsController.js') }}"></script>


</body>

</html>
