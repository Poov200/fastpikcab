<!DOCTYPE html>
<html lang="en" ng-app="CommissionApp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commission Management System</title>
    <meta name="csrf-token" content="@{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .table-container {
            overflow-x: auto;
            max-width: 100%;
        }

        table {
            min-width: 100%;
            border-collapse: separate;
            border-spacing: 0;
        }

        th {
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .notification {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 50;
            transition: all 0.3s ease;
            transform: translateX(120%);
        }

        .notification.show {
            transform: translateX(0);
        }

        .table-wrapper {
            position: relative;
        }

        .table-shadow-left,
        .table-shadow-right {
            position: absolute;
            top: 0;
            bottom: 0;
            width: 15px;
            pointer-events: none;
            z-index: 20;
        }

        .table-shadow-left {
            left: 0;
            background: linear-gradient(to right, rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0));
        }

        .table-shadow-right {
            right: 0;
            background: linear-gradient(to left, rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0));
        }

        .loading-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(255, 255, 255, 0.7);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 30;
        }

        .spinner {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 3px solid rgba(59, 130, 246, 0.2);
            border-top-color: rgba(59, 130, 246, 1);
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body class="bg-gray-50" ng-controller="CommissionController">

    @extends('layouts.admin.adminDashboard')
    @section('AdminContent')
    <div class="container mx-auto px-4 py-8">
        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-2xl font-bold text-gray-800">Commission Management System</h1>
            <p class="text-gray-600">Manage driver commissions for completed bookings</p>
        </div>

        <!-- Notification -->
        <div id="notification" class="notification bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded shadow-md">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium" ng-bind="message"></p>
                </div>
            </div>
        </div>

        <!-- Pending Commissions Section -->
        <div class="bg-white rounded-lg shadow-md mb-8 relative">
            <div class="px-6 py-4 border-b border-gray-200">
                <h2 class="text-lg font-semibold text-gray-800 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                    </svg>
                    Pending Commissions (Editable)
                </h2>
            </div>

            <div class="loading-overlay" ng-if="loading">
                <div class="spinner"></div>
            </div>

            <div class="table-wrapper">
                <div class="table-shadow-left"></div>
                <div class="table-shadow-right"></div>
                <div class="table-container">
                    <table class="w-full">
                        <thead>
                            <tr class="bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <th class="px-4 py-3 border-b border-gray-200 sticky left-0 bg-gray-50">#</th>
                                <th class="px-4 py-3 border-b border-gray-200">Booking ID</th>
                                <th class="px-4 py-3 border-b border-gray-200">Customer Name</th>
                                <th class="px-4 py-3 border-b border-gray-200">Contact</th>
                                <th class="px-4 py-3 border-b border-gray-200">Pickup</th>
                                <th class="px-4 py-3 border-b border-gray-200">Destination</th>
                                <th class="px-4 py-3 border-b border-gray-200">Trip Type</th>
                                <th class="px-4 py-3 border-b border-gray-200">Vehicle</th>
                                <th class="px-4 py-3 border-b border-gray-200">Distance</th>
                                <th class="px-4 py-3 border-b border-gray-200">Date</th>
                                <th class="px-4 py-3 border-b border-gray-200">Time</th>
                                <th class="px-4 py-3 border-b border-gray-200">Status</th>
                                <th class="px-4 py-3 border-b border-gray-200">Trip Status</th>
                                <th class="px-4 py-3 border-b border-gray-200">Assigned Amount</th>
                                <th class="px-4 py-3 border-b border-gray-200">Driver Name</th>
                                <th class="px-4 py-3 border-b border-gray-200">Commission Amount</th>
                                <th class="px-4 py-3 border-b border-gray-200">Select Status</th>
                                <th class="px-4 py-3 border-b border-gray-200">Save</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr ng-repeat="booking in completedBookings" ng-if="!booking.commission || booking.commission.status !== 'Paid'" class="hover:bg-gray-50">
                                <td class="px-4 py-3 text-sm text-gray-500 whitespace-nowrap sticky left-0 bg-white">@{{$index + 1}}</td>
                                <td class="px-4 py-3 text-sm text-gray-900 whitespace-nowrap">@{{booking.booking_id}}</td>
                                <td class="px-4 py-3 text-sm text-gray-900">@{{booking.name}}</td>
                                <td class="px-4 py-3 text-sm text-gray-500">@{{booking.contact}}</td>
                                <td class="px-4 py-3 text-sm text-gray-500">@{{booking.pickup}}</td>
                                <td class="px-4 py-3 text-sm text-gray-500">@{{booking.destination}}</td>
                                <td class="px-4 py-3 text-sm text-gray-500">@{{booking.tripType}}</td>
                                <td class="px-4 py-3 text-sm text-gray-500">@{{booking.vehicle}}</td>
                                <td class="px-4 py-3 text-sm text-gray-500">@{{booking.distance}}</td>
                                <td class="px-4 py-3 text-sm text-gray-500 whitespace-nowrap">@{{booking.date}}</td>
                                <td class="px-4 py-3 text-sm text-gray-500 whitespace-nowrap">@{{booking.time}}</td>
                                <td class="px-4 py-3 text-sm">
                                    <span class="px-2 py-1 text-xs font-medium rounded-full"
                                        ng-class="{'bg-green-100 text-green-800': booking.status === 'Completed',
                                                    'bg-yellow-100 text-yellow-800': booking.status === 'Pending',
                                                    'bg-blue-100 text-blue-800': booking.status === 'In Progress'}">
                                        @{{booking.status}}
                                    </span>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <span class="px-2 py-1 text-xs font-medium rounded-full"
                                        ng-class="{'bg-green-100 text-green-800': booking.trip_status === 'Completed',
                                                    'bg-yellow-100 text-yellow-800': booking.trip_status === 'Pending',
                                                    'bg-blue-100 text-blue-800': booking.trip_status === 'In Progress'}">
                                        @{{booking.trip_status}}
                                    </span>
                                </td>
                                <td class="px-4 py-3 text-sm text-gray-900 whitespace-nowrap">@{{booking.assigned_amount}}</td>
                                <td class="px-4 py-3 text-sm text-gray-900">@{{booking.driver.name}}</td>
                                <td class="px-4 py-3">
                                    <div class="relative rounded-md shadow-sm">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <span class="text-gray-500 sm:text-sm"></span>
                                        </div>
                                        <input type="number" ng-model="booking.amount" class="focus:ring-blue-500 focus:border-blue-500 block w-full pl-7 pr-3 py-2 sm:text-sm border-gray-300 rounded-md" placeholder="Amount">
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <select ng-model="booking.selectedStatus"
                                        class="border rounded px-2 py-1 text-sm text-gray-700">
                                        <option value="" disabled selected>Select</option>
                                        <option value="Paid">Paid</option>
                                        <option value="Unpaid">Unpaid</option>
                                    </select>
                                </td>

                                <td class="px-4 py-3 text-right text-sm font-medium">
                                    <button ng-click="saveCommission(booking)" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                        Save
                                    </button>
                                </td>
                            </tr>
                            <tr ng-if="loading">
                                <td colspan="18" class="px-4 py-8 text-center text-sm text-gray-500">
                                    <p>Loading bookings...</p>
                                </td>
                            </tr>
                            <tr ng-if="!loading && (completedBookings | filter: {commission: {status: '!Paid'}}).length === 0 && (completedBookings | filter: {commission: undefined}).length === 0">
                                <td colspan="18" class="px-4 py-8 text-center text-sm text-gray-500">
                                    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <p class="mt-2 font-medium">No pending commissions</p>
                                    <p class="mt-1">All commissions have been processed</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Paid Commissions Section -->
        <div class="bg-white rounded-lg shadow-md relative">
            <div class="px-6 py-4 border-b border-gray-200">
                <h2 class="text-lg font-semibold text-gray-800 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-green-500" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                    Paid Commissions (Read Only)
                </h2>
            </div>

            <div class="loading-overlay" ng-if="loading">
                <div class="spinner"></div>
            </div>

            <div class="table-wrapper">
                <div class="table-shadow-left"></div>
                <div class="table-shadow-right"></div>
                <div class="table-container">
                    <table class="w-full">
                        <thead>
                            <tr class="bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <th class="px-4 py-3 border-b border-gray-200 sticky left-0 bg-gray-50">#</th>
                                <th class="px-4 py-3 border-b border-gray-200">Booking ID</th>
                                <th class="px-4 py-3 border-b border-gray-200">Customer Name</th>
                                <th class="px-4 py-3 border-b border-gray-200">Contact</th>
                                <th class="px-4 py-3 border-b border-gray-200">Pickup</th>
                                <th class="px-4 py-3 border-b border-gray-200">Destination</th>
                                <th class="px-4 py-3 border-b border-gray-200">Trip Type</th>
                                <th class="px-4 py-3 border-b border-gray-200">Vehicle</th>
                                <th class="px-4 py-3 border-b border-gray-200">Distance</th>
                                <th class="px-4 py-3 border-b border-gray-200">Date</th>
                                <th class="px-4 py-3 border-b border-gray-200">Time</th>
                                <th class="px-4 py-3 border-b border-gray-200">Status</th>
                                <th class="px-4 py-3 border-b border-gray-200">Trip Status</th>
                                <th class="px-4 py-3 border-b border-gray-200">Assigned Amount</th>
                                <th class="px-4 py-3 border-b border-gray-200">Driver Name</th>
                                <th class="px-4 py-3 border-b border-gray-200">Commission Amount</th>
                                <th class="px-4 py-3 border-b border-gray-200">Status</th>
                                <th class="px-4 py-3 border-b border-gray-200">Paid Date</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr ng-repeat="booking in completedBookings" ng-if="booking.commission && booking.commission.status === 'Paid'" class="hover:bg-gray-50">
                                <td class="px-4 py-3 text-sm text-gray-500 whitespace-nowrap sticky left-0 bg-white">@{{$index + 1}}</td>
                                <td class="px-4 py-3 text-sm text-gray-900 whitespace-nowrap">@{{booking.booking_id}}</td>
                                <td class="px-4 py-3 text-sm text-gray-900">@{{booking.name}}</td>
                                <td class="px-4 py-3 text-sm text-gray-500">@{{booking.contact}}</td>
                                <td class="px-4 py-3 text-sm text-gray-500">@{{booking.pickup}}</td>
                                <td class="px-4 py-3 text-sm text-gray-500">@{{booking.destination}}</td>
                                <td class="px-4 py-3 text-sm text-gray-500">@{{booking.tripType}}</td>
                                <td class="px-4 py-3 text-sm text-gray-500">@{{booking.vehicle}}</td>
                                <td class="px-4 py-3 text-sm text-gray-500">@{{booking.distance}}</td>
                                <td class="px-4 py-3 text-sm text-gray-500 whitespace-nowrap">@{{booking.date}}</td>
                                <td class="px-4 py-3 text-sm text-gray-500 whitespace-nowrap">@{{booking.time}}</td>
                                <td class="px-4 py-3 text-sm">
                                    <span class="px-2 py-1 text-xs font-medium rounded-full"
                                        ng-class="{'bg-green-100 text-green-800': booking.status === 'Completed',
                                                    'bg-yellow-100 text-yellow-800': booking.status === 'Pending',
                                                    'bg-blue-100 text-blue-800': booking.status === 'In Progress'}">
                                        @{{booking.status}}
                                    </span>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <span class="px-2 py-1 text-xs font-medium rounded-full"
                                        ng-class="{'bg-green-100 text-green-800': booking.trip_status === 'Completed',
                                                    'bg-yellow-100 text-yellow-800': booking.trip_status === 'Pending',
                                                    'bg-blue-100 text-blue-800': booking.trip_status === 'In Progress'}">
                                        @{{booking.trip_status}}
                                    </span>
                                </td>
                                <td class="px-4 py-3 text-sm text-gray-900 whitespace-nowrap">@{{booking.assigned_amount}}</td>
                                <td class="px-4 py-3 text-sm text-gray-900">@{{booking.driver.name}}</td>
                                <td class="px-4 py-3 text-sm text-gray-900 whitespace-nowrap">@{{booking.commission.amount}}</td>
                                <td class="px-4 py-3 text-sm">
                                    <span class="px-2 py-1 text-xs font-medium bg-green-100 text-green-800 rounded-full">
                                        @{{booking.commission.status}}
                                    </span>
                                </td>
                                <td class="px-4 py-3 text-sm text-gray-500 whitespace-nowrap">@{{booking.commission.paid_date}}</td>
                            </tr>
                            <tr ng-if="loading">
                                <td colspan="18" class="px-4 py-8 text-center text-sm text-gray-500">
                                    <p>Loading bookings...</p>
                                </td>
                            </tr>
                            <tr ng-if="!loading && (completedBookings | filter: {commission: {status: 'Paid'}}).length === 0">
                                <td colspan="18" class="px-4 py-8 text-center text-sm text-gray-500">
                                    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                    </svg>
                                    <p class="mt-2 font-medium">No paid commissions yet</p>
                                    <p class="mt-1">Paid commissions will appear here</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endsection


<script src="{{ asset('js/adminjsController.js') }}"></script>
</body>

</html>
