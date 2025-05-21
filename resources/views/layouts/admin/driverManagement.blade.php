<!DOCTYPE html>
<html lang="en" ng-app="driverManagementApp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver Management | Admin Dashboard</title>
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
    </style>
</head>

<body class="min-h-screen" ng-controller="DriverController">

    @extends('layouts.admin.adminDashboard')
    @section('AdminContent')
        <div class="container mx-auto px-4 py-6">
            <!-- Toast Notification -->
            <div ng-if="showToast"
                class="toast fixed top-4 right-4 z-50 bg-white shadow-lg rounded-lg px-6 py-4 flex items-center border-l-4"
                ng-class="{'border-green-500': toastType === 'success', 'border-red-500': toastType === 'error', 'border-blue-500': toastType === 'info'}">
                <div ng-if="toastType === 'success'" class="text-green-500 mr-3">
                    <i class="fas fa-check-circle text-xl"></i>
                </div>
                <div ng-if="toastType === 'error'" class="text-red-500 mr-3">
                    <i class="fas fa-exclamation-circle text-xl"></i>
                </div>
                <div ng-if="toastType === 'info'" class="text-blue-500 mr-3">
                    <i class="fas fa-info-circle text-xl"></i>
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
                    <h1 class="text-2xl font-bold text-gray-800">Driver Management</h1>
                    <p class="text-gray-600">Add, edit and manage your driver fleet</p>
                </div>
                <div class="flex space-x-3">
                    <button ng-click="refreshDrivers()"
                        class="px-4 py-2 bg-white text-gray-700 rounded-lg border border-gray-300 hover:bg-gray-50 flex items-center">
                        <i class="fas fa-sync-alt mr-2"></i> Refresh
                    </button>
                    <button ng-click="exportDrivers()"
                        class="px-4 py-2 bg-white text-gray-700 rounded-lg border border-gray-300 hover:bg-gray-50 flex items-center">
                        <i class="fas fa-file-export mr-2"></i> Export
                    </button>
                    <button ng-click="showAddDriverModal()"
                        class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 flex items-center">
                        <i class="fas fa-plus mr-2"></i> Add Driver
                    </button>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm font-medium text-gray-500">Total Drivers</p>
                            <h3 class="text-2xl font-bold text-gray-800 mt-1">@{{ drivers.length }}</h3>
                        </div>
                        <div class="p-3 bg-blue-100 rounded-full">
                            <i class="fas fa-users text-blue-600"></i>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center text-sm">
                        <span class="text-green-500 flex items-center">
                            <i class="fas fa-arrow-up mr-1"></i> @{{ newDriversThisMonth }}
                        </span>
                        <span class="text-gray-500 ml-2">new this month</span>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm font-medium text-gray-500">Active Drivers</p>
                            <h3 class="text-2xl font-bold text-gray-800 mt-1">@{{ getActiveDriversCount() }}</h3>
                        </div>
                        <div class="p-3 bg-green-100 rounded-full">
                            <i class="fas fa-user-check text-green-600"></i>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center text-sm">
                        <span class="text-gray-500">@{{ getActiveDriversPercentage() }}% of total</span>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm font-medium text-gray-500">Sedan Drivers</p>
                            <h3 class="text-2xl font-bold text-gray-800 mt-1">@{{ getDriverCountByCarType('sedan') }}</h3>
                        </div>
                        <div class="p-3 bg-yellow-100 rounded-full">
                            <i class="fas fa-car text-yellow-600"></i>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center text-sm">
                        <span class="text-gray-500">@{{ getCarTypePercentage('sedan') }}% of fleet</span>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm font-medium text-gray-500">SUV Drivers</p>
                            <h3 class="text-2xl font-bold text-gray-800 mt-1">@{{ getDriverCountByCarType('suv') }}</h3>
                        </div>
                        <div class="p-3 bg-purple-100 rounded-full">
                            <i class="fas fa-truck text-purple-600"></i>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center text-sm">
                        <span class="text-gray-500">@{{ getCarTypePercentage('suv') }}% of fleet</span>
                    </div>
                </div>
            </div>

            <!-- Filters and Search -->
            <div class="bg-white rounded-lg shadow mb-6">
                <div class="p-6">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between space-y-4 md:space-y-0">
                        <div class="flex flex-col md:flex-row md:items-center space-y-4 md:space-y-0 md:space-x-4">
                            <div class="relative">
                                <input type="text" ng-model="searchQuery" placeholder="Search drivers..."
                                    class="search-input pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 w-full md:w-64">
                                <i class="fas fa-search search-icon absolute left-3 top-3 text-gray-400"></i>
                            </div>

                            <div class="flex items-center space-x-2">
                                <span class="text-sm text-gray-500">Status:</span>
                                <select ng-model="statusFilter"
                                    class="border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                                    <option value="all">All</option>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
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
                        </div>

                        <div class="flex items-center space-x-2">
                            <span class="text-sm text-gray-500">Sort by:</span>
                            <select ng-model="sortOption"
                                class="border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                                <option value="name">Name</option>
                                <option value="date">Date Added</option>
                                <option value="status">Status</option>
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

            <!-- Driver List -->
            <div class="bg-white rounded-lg shadow">
                <div class="p-6">
                    <h2 class="text-lg font-semibold text-gray-800 mb-4">Driver List</h2>

                    <!-- Loading State -->
                    <div ng-if="isLoading" class="space-y-4">
                        <div ng-repeat="i in [1, 2, 3, 4, 5]" class="shimmer h-16 rounded-lg"></div>
                    </div>

                    <!-- Empty State -->
                    <div ng-if="!isLoading && filteredDrivers().length === 0"
                        class="flex flex-col items-center justify-center py-12">
                        <div class="bg-gray-100 p-4 rounded-full mb-4">
                            <i class="fas fa-user-slash text-gray-500 text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-medium text-gray-800">No drivers found</h3>
                        <p class="text-gray-500 mt-1">Try adjusting your search or filters</p>
                        <button ng-click="resetFilters()"
                            class="mt-4 px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
                            Reset Filters
                        </button>
                    </div>

                    <!-- Driver Table -->
                    <div ng-if="!isLoading && filteredDrivers().length > 0" class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
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
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Added On</th>
                                    <th
                                        class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr ng-repeat="driver in filteredDrivers() | orderBy:getSortField():sortOrder === 'desc'"
                                    class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div
                                                class="flex-shrink-0 h-10 w-10 bg-indigo-100 rounded-full flex items-center justify-center">
                                                <span
                                                    class="text-indigo-700 font-medium">@{{ driver.name.charAt(0) }}@{{ driver.name.split(' ')[1] ? driver.name.split(' ')[1].charAt(0) : '' }}</span>
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">@{{ driver.name }}
                                                </div>
                                                <div class="text-sm text-gray-500">ID: @{{ driver.id }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">@{{ driver.phone }}</div>
                                        <div class="text-sm text-gray-500">@{{ driver.email }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <span class="px-2 py-1 text-xs rounded-full"
                                                ng-class="{'bg-yellow-100 text-yellow-800': driver.carType === 'sedan', 'bg-purple-100 text-purple-800': driver.carType === 'suv'}">
                                                @{{ driver.carType | uppercase }}
                                            </span>
                                            <span class="ml-2 text-sm text-gray-500">@{{ driver.carNumber }}</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full"
                                            ng-class="{'bg-green-100 text-green-800': driver.status === 'active', 'bg-red-100 text-red-800': driver.status === 'inactive'}">
                                            @{{ driver.status | capitalize }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        @{{ formatDate(driver.created_at) }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <div class="relative" ng-init="driver.showActions = false">
                                            <button ng-click="driver.showActions = !driver.showActions"
                                                class="text-gray-400 hover:text-gray-600">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <div ng-show="driver.showActions"
                                                class="dropdown-menu origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-10">
                                                <div class="py-1">
                                                    <a ng-click="showEditDriverModal(driver)"
                                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 cursor-pointer">
                                                        <i class="fas fa-edit mr-2"></i> Edit
                                                    </a>
                                                    <a ng-click="toggleDriverStatus(driver)"
                                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 cursor-pointer">
                                                        <i class="fas"
                                                            ng-class="{'fa-toggle-on text-green-600': driver.status === 'active', 'fa-toggle-off text-red-600': driver.status === 'inactive'}"></i>
                                                        @{{ driver.status === 'active' ? ' Deactivate' : ' Activate' }}
                                                    </a>
                                                    <a ng-click="showDeleteDriverModal(driver)"
                                                        class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 cursor-pointer">
                                                        <i class="fas fa-trash-alt mr-2"></i> Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div ng-if="!isLoading && filteredDrivers().length > 0"
                        class="flex items-center justify-between border-t border-gray-200 px-4 py-3 sm:px-6 mt-4">
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
                                    <span class="font-medium">@{{ Math.min(currentPage * pageSize, filteredDrivers().length) }}</span>
                                    of
                                    <span class="font-medium">@{{ filteredDrivers().length }}</span>
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

            <!-- Add/Edit Driver Modal -->
            <div ng-if="showModal" class="fixed inset-0 z-50 overflow-y-auto">
                <div class="modal-overlay fixed inset-0" ng-click="closeModal()"></div>
                <div class="flex items-center justify-center min-h-screen p-4">
                    <div class="modal-content bg-white rounded-lg shadow-xl w-full max-w-md mx-auto z-50">
                        <div class="px-6 py-4 border-b border-gray-200">
                            <h3 class="text-lg font-medium text-gray-900">@{{ isEditing ? 'Edit Driver' : 'Add New Driver' }}</h3>
                        </div>

                        <form ng-submit="saveDriver()" class="px-6 py-4">
                            <div class="space-y-4">
                                <!-- Name -->
                                <div>
                                    <label for="driverName" class="block text-sm font-medium text-gray-700">Driver
                                        Name</label>
                                    <input type="text" id="driverName" ng-model="driverForm.name" required
                                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <p ng-if="formErrors.name" class="mt-1 text-sm text-red-600">@{{ formErrors.name }}
                                    </p>
                                </div>

                                <!-- Phone -->
                                <div>
                                    <label for="driverPhone" class="block text-sm font-medium text-gray-700">Phone
                                        Number</label>
                                    <input type="tel" id="driverPhone" ng-model="driverForm.phone" required
                                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <p ng-if="formErrors.phone" class="mt-1 text-sm text-red-600">@{{ formErrors.phone }}
                                    </p>
                                </div>

                                <!-- Email -->
                                <div>
                                    <label for="driverEmail" class="block text-sm font-medium text-gray-700">Email
                                        Address</label>
                                    <input type="email" id="driverEmail" ng-model="driverForm.email" required
                                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <p ng-if="formErrors.email" class="mt-1 text-sm text-red-600">@{{ formErrors.email }}
                                    </p>
                                </div>

                                <!-- Car Type -->
                                <div>
                                    <label for="carType" class="block text-sm font-medium text-gray-700">Car Type</label>
                                    <select id="carType" ng-model="driverForm.carType" required
                                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option value="sedan">Sedan</option>
                                        <option value="suv">SUV</option>
                                    </select>
                                </div>

                                <!-- Car Number -->
                                <div>
                                    <label for="carNumber" class="block text-sm font-medium text-gray-700">Car
                                        Number</label>
                                    <input type="text" id="carNumber" ng-model="driverForm.carNumber" required
                                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <p ng-if="formErrors.carNumber" class="mt-1 text-sm text-red-600">
                                        @{{ formErrors.carNumber }}</p>
                                </div>

                                <!-- Status -->
                                <div>
                                    <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                                    <div class="mt-1 flex items-center">
                                        <div class="flex items-center">
                                            <input id="active" name="status" type="radio"
                                                ng-model="driverForm.status" value="active"
                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                            <label for="active" class="ml-2 block text-sm text-gray-700">Active</label>
                                        </div>
                                        <div class="flex items-center ml-6">
                                            <input id="inactive" name="status" type="radio"
                                                ng-model="driverForm.status" value="inactive"
                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                            <label for="inactive"
                                                class="ml-2 block text-sm text-gray-700">Inactive</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-6 flex justify-end space-x-3">
                                <button type="button" ng-click="closeModal()"
                                    class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Cancel
                                </button>
                                <button type="submit"
                                    class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    @{{ isEditing ? 'Update Driver' : 'Add Driver' }}
                                </button>
                                <button type="submit"
                                    class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    @{{ isEditing ? 'Update Driver' : 'Add Driver' }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Delete Confirmation Modal -->
            <div ng-if="showDeleteModal" class="fixed inset-0 z-50 overflow-y-auto">
                <div class="modal-overlay fixed inset-0" ng-click="closeDeleteModal()"></div>
                <div class="flex items-center justify-center min-h-screen p-4">
                    <div class="modal-content bg-white rounded-lg shadow-xl w-full max-w-md mx-auto z-50">
                        <div class="p-6">
                            <div class="flex items-center justify-center w-12 h-12 mx-auto bg-red-100 rounded-full">
                                <i class="fas fa-exclamation-triangle text-red-600"></i>
                            </div>
                            <div class="mt-3 text-center">
                                <h3 class="text-lg font-medium text-gray-900">Delete Driver</h3>
                                <div class="mt-2">
                                    <p class="text-sm text-gray-500">
                                        Are you sure you want to delete @{{ driverToDelete.name }}? This action cannot be
                                        undone.
                                    </p>
                                </div>
                                <div class="mt-4 flex justify-center space-x-3">
                                    <button type="button" ng-click="closeDeleteModal()"
                                        class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        Cancel
                                    </button>
                                    <button type="button" ng-click="deleteDriver()"
                                        class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                        Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    <script src="{{ asset('js/adminjsController.js') }}"></script>

</body>

</html>
