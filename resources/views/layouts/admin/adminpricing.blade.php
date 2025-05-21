<!DOCTYPE html>
<html ng-app="pricingApp">

<head>
    <title>Vehicle Pricing</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.3/angular.min.js"></script>
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f5f7fa;
            color: #334155;
        }

        .form-container {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        .form-container:hover {
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
        }

        .pricing-card {
            transition: transform 0.2s ease;
        }

        .pricing-card:hover {
            transform: translateY(-3px);
        }

        input:focus, select:focus {
            outline: none;
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
        }

        .trip-section {
            border-left: 4px solid #3b82f6;
        }

        .trip-section:nth-child(even) {
            border-left: 4px solid #8b5cf6;
        }

        .btn-primary {
            transition: all 0.2s ease;
        }

        .btn-primary:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.25);
        }

        .btn-secondary:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(100, 116, 139, 0.25);
        }

        .btn-edit:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(139, 92, 246, 0.25);
        }

        .alert {
            animation: fadeOut 5s forwards;
        }

        @keyframes fadeOut {
            0% { opacity: 1; }
            70% { opacity: 1; }
            100% { opacity: 0; visibility: hidden; }
        }
    </style>
</head>

<body ng-controller="PricingController" class="min-h-screen">
    @extends('layouts.admin.adminDashboard')
    @section('AdminContent')
       <div class="container mx-auto px-4 py-8 max-w-6xl">
        <header class="mb-10 text-center">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">Vehicle Pricing Management</h1>
            <p class="text-gray-600">Manage your fleet pricing structure with ease</p>
        </header>

        <!-- Alert Messages -->
        <div id="alertMessage" class="alert hidden fixed top-4 right-4 z-50 px-6 py-3 rounded-lg shadow-lg text-white font-medium"></div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Form Section -->
            <div class="form-container bg-white rounded-xl p-6 lg:col-span-1">
                <h2 class="text-xl font-semibold mb-6 text-gray-800 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                    </svg>
                    @{{editMode ? 'Edit Pricing' : 'Add Pricing'}}
                </h2>

                <form ng-submit="addPricing()" class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Vehicle Type</label>
                        <select
                            ng-model="form.vehicle_type"
                            required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md text-gray-700 focus:ring-blue-500">
                            <option value="">-- Select Vehicle --</option>
                            <option value="Sedan">Sedan</option>
                            <option value="SUV">SUV</option>
                            <option value="Mini">Mini</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Trip Type</label>
                        <select
                            ng-model="form.trip_type"
                            required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md text-gray-700">
                            <option value="">-- Select Trip Type --</option>
                            <option value="One-way">One-way</option>
                            <option value="Round Trip">Round Trip</option>
                        </select>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Base Price per KM</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">₹</span>
                                <input
                                    type="number"
                                    ng-model="form.base_price_per_km"
                                    required
                                    class="w-full pl-8 pr-3 py-2 border border-gray-300 rounded-md text-gray-700">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Minimum Distance</label>
                            <div class="relative">
                                <input
                                    type="number"
                                    ng-model="form.minimum_distance"
                                    required
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md text-gray-700">
                                <span class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-500">KM</span>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Driver Beta (300+ KM)</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">₹</span>
                                <input
                                    type="number"
                                    ng-model="form.driver_beta_300"
                                    class="w-full pl-8 pr-3 py-2 border border-gray-300 rounded-md text-gray-700">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Driver Beta (500+ KM)</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">₹</span>
                                <input
                                    type="number"
                                    ng-model="form.driver_beta_500"
                                    class="w-full pl-8 pr-3 py-2 border border-gray-300 rounded-md text-gray-700">
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Waiting Charge/Hour</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">₹</span>
                                <input
                                    type="number"
                                    ng-model="form.waiting_charge_per_hour"
                                    required
                                    class="w-full pl-8 pr-3 py-2 border border-gray-300 rounded-md text-gray-700">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Free Waiting Minutes</label>
                            <div class="relative">
                                <input
                                    type="number"
                                    ng-model="form.free_waiting_minutes"
                                    required
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md text-gray-700">
                                <span class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-500">min</span>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Hill Station Charge</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">₹</span>
                            <input
                                type="number"
                                ng-model="form.hill_station_charge"
                                required
                                class="w-full pl-8 pr-3 py-2 border border-gray-300 rounded-md text-gray-700">
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Luggage Charge/KG</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">₹</span>
                                <input
                                    type="number"
                                    ng-model="form.luggage_charge_per_kg"
                                    required
                                    class="w-full pl-8 pr-3 py-2 border border-gray-300 rounded-md text-gray-700">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Free Luggage</label>
                            <div class="relative">
                                <input
                                    type="number"
                                    ng-model="form.free_luggage_kg"
                                    required
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md text-gray-700">
                                <span class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-500">KG</span>
                            </div>
                        </div>
                    </div>

                    <div class="flex space-x-3 pt-2">
                        <button
                            type="submit"
                            class="btn-primary flex-1 bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-md font-medium">
                            @{{editMode ? 'Update Pricing' : 'Add Pricing'}}
                        </button>
                        <button
                            type="button"
                            ng-if="editMode"
                            ng-click="cancelEdit()"
                            class="btn-secondary bg-gray-200 hover:bg-gray-300 text-gray-700 py-2 px-4 rounded-md font-medium">
                            Cancel
                        </button>
                    </div>
                </form>
            </div>

            <!-- Pricing Display Section -->
            <div class="lg:col-span-2 space-y-6">
                <div ng-if="!hasData" class="bg-white rounded-xl p-8 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-gray-400 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    <h3 class="text-lg font-medium text-gray-700">No pricing data available</h3>
                    <p class="text-gray-500 mt-1">Add your first pricing configuration to get started</p>
                </div>

                <div ng-repeat="(vehicleType, vehiclePricings) in groupedPricings" class="pricing-card bg-white rounded-xl overflow-hidden">
                    <div class="bg-gradient-to-r from-blue-600 to-indigo-600 px-6 py-4">
                        <div class="flex justify-between items-center">
                            <h2 class="text-xl font-bold text-white flex items-center">
                                <svg ng-if="vehicleType === 'Sedan'" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                                    <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H11a1 1 0 001-1v-1h3.5a1 1 0 00.8-.4l3-4a1 1 0 00.2-.6V8a1 1 0 00-1-1h-3.8L11.35 3.3A1 1 0 0010.5 3h-5a1 1 0 00-.8.4L2.2 7H3V4z" />
                                </svg>
                                <svg ng-if="vehicleType === 'SUV'" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                                    <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H11a1 1 0 001-1v-1h3.5a1 1 0 00.8-.4l3-4a1 1 0 00.2-.6V8a1 1 0 00-1-1h-3.8L11.35 3.3A1 1 0 0010.5 3h-5a1 1 0 00-.8.4L2.2 7H3V4z" />
                                </svg>
                                <svg ng-if="vehicleType === 'Mini'" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                                    <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H11a1 1 0 001-1v-1h3.5a1 1 0 00.8-.4l3-4a1 1 0 00.2-.6V8a1 1 0 00-1-1h-3.8L11.35 3.3A1 1 0 0010.5 3h-5a1 1 0 00-.8.4L2.2 7H3V4z" />
                                </svg>
                                @{{vehicleType}} Pricing
                            </h2>
                            <p class="text-blue-100 text-sm">Last updated: @{{vehiclePricings[0].updated_at | date: 'medium'}}</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-6">
                        <div ng-repeat="p in vehiclePricings" class="trip-section bg-gray-50 rounded-lg p-5">
                            <div class="flex justify-between items-center mb-4">
                                <h3 class="text-lg font-semibold text-gray-800">@{{p.trip_type}} Trip</h3>
                                <button
                                    ng-click="startEdit(p)"
                                    class="btn-edit flex items-center text-sm font-medium text-purple-600 hover:text-purple-800 bg-purple-100 hover:bg-purple-200 rounded-full px-3 py-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                    </svg>
                                    Edit
                                </button>
                            </div>

                            <div class="grid grid-cols-2 gap-x-4 gap-y-3 text-sm">
                                <div>
                                    <p class="text-gray-500">Base Price (per km)</p>
                                    <p class="font-semibold">₹@{{p.base_price_per_km}}</p>
                                </div>

                                <div>
                                    <p class="text-gray-500">Minimum Distance</p>
                                    <p class="font-semibold">@{{p.minimum_distance}} km</p>
                                </div>

                                <div>
                                    <p class="text-gray-500">Driver Beta (300+ km)</p>
                                    <p class="font-semibold">₹@{{p.driver_beta_300 || 0}}</p>
                                </div>

                                <div>
                                    <p class="text-gray-500">Driver Beta (500+ km)</p>
                                    <p class="font-semibold">₹@{{p.driver_beta_500 || 0}}</p>
                                </div>

                                <div>
                                    <p class="text-gray-500">Waiting Charge per Hour</p>
                                    <p class="font-semibold">₹@{{p.waiting_charge_per_hour}}</p>
                                </div>

                                <div>
                                    <p class="text-gray-500">Free Waiting Minutes</p>
                                    <p class="font-semibold">@{{p.free_waiting_minutes}} min</p>
                                </div>

                                <div>
                                    <p class="text-gray-500">Hill Station Charge</p>
                                    <p class="font-semibold">₹@{{p.hill_station_charge}}</p>
                                </div>

                                <div>
                                    <p class="text-gray-500">Luggage Charge per KG</p>
                                    <p class="font-semibold">₹@{{p.luggage_charge_per_kg}}</p>
                                </div>

                                <div>
                                    <p class="text-gray-500">Free Luggage</p>
                                    <p class="font-semibold">@{{p.free_luggage_kg}} kg</p>
                                </div>
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
