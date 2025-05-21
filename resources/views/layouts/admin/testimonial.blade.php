<!DOCTYPE html>
<html lang="en" ng-app="testimonial">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Testimonials</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/angular@1.8.2/angular.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f3f4f6;
        }

        .testimonial-card {
            transition: all 0.2s ease;
        }

        .testimonial-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        .star-rating {
            display: inline-block;
            unicode-bidi: bidi-override;
            color: #ddd;
            font-size: 24px;
            position: relative;
            margin: 0;
            padding: 0;
        }

        .star-rating .fill {
            color: #FFD700;
            padding: 0;
            position: absolute;
            z-index: 1;
            display: block;
            top: 0;
            left: 0;
            overflow: hidden;
        }

        .star-rating .base {
            z-index: 0;
            padding: 0;
        }

        .star-input label {
            cursor: pointer;
            padding: 0 2px;
        }

        .star-input input {
            display: none;
        }

        .star-input label:hover,
        .star-input label:hover~label,
        .star-input input:checked~label {
            color: #FFD700;
        }

        .badge {
            position: absolute;
            top: -8px;
            right: -8px;
        }

        .toast {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
            animation: slideIn 0.3s, fadeOut 0.5s 2.5s forwards;
        }

        @keyframes slideIn {
            from {
                transform: translateX(100%);
            }

            to {
                transform: translateX(0);
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
    </style>
</head>

<body ng-controller="testimonialController">
    <!-- Admin Navbar Placeholder -->
    @extends('layouts.admin.adminDashboard')


    @section('AdminContent')
    <div class="container mx-auto p-6">
        <!-- Toast Notification -->
        <div ng-if="showToast" class="toast bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg flex items-center">
            <i class="fas fa-check-circle mr-2"></i>
            <span>@{{ toastMessage }}</span>
        </div>

        <div class="flex justify-between items-center mb-6">
            <div>
                <h1 class="text-3xl font-bold text-gray-800">Testimonials</h1>
                <p class="text-gray-600">Manage customer testimonials and reviews</p>
            </div>
            <div class="flex space-x-3">
                <div class="relative">
                    <input type="text" ng-model="searchText" placeholder="Search testimonials..." class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                </div>
                <select ng-model="filterRating" class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">All Ratings</option>
                    <option value="5">5 Stars</option>
                    <option value="4">4 Stars</option>
                    <option value="3">3 Stars</option>
                    <option value="2">2 Stars</option>
                    <option value="1">1 Star</option>
                </select>
                <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg flex items-center" ng-click="exportTestimonials()">
                    <i class="fas fa-download mr-2"></i> Export
                </button>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-md p-6 mb-6">
            <div class="flex items-center justify-between mb-4">
                <div class="flex space-x-6">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-blue-600">@{{ testimonials.length }}</div>
                        <div class="text-gray-600 text-sm">Total Testimonials</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-yellow-500">@{{ getAverageRating() }}</div>
                        <div class="text-gray-600 text-sm">Average Rating</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-green-600">@{{ getHighRatingCount() }}</div>
                        <div class="text-gray-600 text-sm">5-Star Reviews</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add New Testimonial Form -->
        <div class="bg-white rounded-xl shadow-md p-6 mb-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Add New Testimonial</h2>
            <form ng-submit="addTestimonial()" class="space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Customer Name</label>
                        <input type="text" id="name" ng-model="newTestimonial.name" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter customer name">
                    </div>

                    <div>
                        <label for="position" class="block text-sm font-medium text-gray-700 mb-1">Position/Company (Optional)</label>
                        <input type="text" id="position" ng-model="newTestimonial.position" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="E.g. CEO at Company">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Rating</label>
                    <div class="star-input text-2xl">
                        <input type="radio" id="star5" name="rating" value="5" ng-model="newTestimonial.rating">
                        <label for="star5" title="5 stars"><i class="fas fa-star"></i></label>

                        <input type="radio" id="star4" name="rating" value="4" ng-model="newTestimonial.rating">
                        <label for="star4" title="4 stars"><i class="fas fa-star"></i></label>

                        <input type="radio" id="star3" name="rating" value="3" ng-model="newTestimonial.rating">
                        <label for="star3" title="3 stars"><i class="fas fa-star"></i></label>

                        <input type="radio" id="star2" name="rating" value="2" ng-model="newTestimonial.rating">
                        <label for="star2" title="2 stars"><i class="fas fa-star"></i></label>

                        <input type="radio" id="star1" name="rating" value="1" ng-model="newTestimonial.rating">
                        <label for="star1" title="1 star"><i class="fas fa-star"></i></label>
                    </div>
                </div>

                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Testimonial Message</label>
                    <textarea id="message" ng-model="newTestimonial.message" required rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter customer testimonial"></textarea>
                </div>

                <div class="flex justify-end">
                    <button type="button" ng-click="resetForm()" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 mr-2 hover:bg-gray-50">Reset</button>
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg flex items-center">
                        <i class="fas fa-plus mr-2"></i> Add Testimonial
                    </button>
                </div>
            </form>
        </div>

        <!-- Testimonials List -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden">
            <div class="p-6 border-b border-gray-200">
                <div class="flex justify-between items-center">
                    <h2 class="text-xl font-semibold text-gray-800">All Testimonials</h2>
                    <div class="flex items-center">
                        <span class="text-gray-600 mr-2">Sort by:</span>
                        <select ng-model="sortOption" class="border border-gray-300 rounded-lg px-3 py-1 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="-created_at">Newest First</option>
                            <option value="created_at">Oldest First</option>
                            <option value="-rating">Highest Rating</option>
                            <option value="rating">Lowest Rating</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Empty State -->
            <div ng-if="testimonials.length === 0" class="p-10 text-center">
                <div class="flex flex-col items-center justify-center">
                    <div class="bg-yellow-100 p-4 rounded-full mb-4">
                        <i class="fas fa-star text-yellow-500 text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">No Testimonials Yet</h3>
                    <p class="text-gray-600 max-w-md mx-auto mb-6">Start adding customer testimonials using the form above. They will appear here once added.</p>
                </div>
            </div>

            <!-- Testimonials Grid -->
            <div ng-if="testimonials.length > 0" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-6">
                <div ng-repeat="testimonial in testimonials | filter:searchFilter | orderBy:sortOption" class="testimonial-card bg-white border border-gray-200 rounded-xl overflow-hidden">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <div class="flex items-center">
                                <div class="bg-gradient-to-r from-blue-500 to-purple-600 rounded-full h-12 w-12 flex items-center justify-center text-white font-bold text-lg mr-3">
                                    @{{ testimonial.name.charAt(0) }}
                                </div>
                                <div>
                                    <h3 class="font-semibold text-lg text-gray-800">@{{ testimonial.name }}</h3>
                                    <p ng-if="testimonial.position" class="text-gray-500 text-sm">@{{ testimonial.position }}</p>
                                </div>
                            </div>
                            <div class="flex">
                                <span ng-if="testimonial.featured" class="bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded-full mr-1">Featured</span>
                                <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full">@{{ formatDate(testimonial.created_at) }}</span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="star-rating">
                                <div class="fill" ng-style="{width: (testimonial.rating * 20) + '%'}">
                                    <span>★★★★★</span>
                                </div>
                                <div class="base">★★★★★</div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <p class="text-gray-600">@{{ testimonial.message }}</p>
                        </div>

                        <div class="flex justify-between items-center pt-3 border-t border-gray-100">
                            <div class="flex space-x-2">
                                <button ng-click="toggleFeatured(testimonial)" class="text-gray-500 hover:text-yellow-500 p-1" title="@{{ testimonial.featured ? 'Remove from featured' : 'Mark as featured' }}">
                                    <i class="fas" ng-class="{'fa-star': testimonial.featured, 'fa-star-half-alt': !testimonial.featured}"></i>
                                </button>
                                <button ng-click="editTestimonial(testimonial)" class="text-blue-600 hover:text-blue-900 p-1" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button ng-click="deleteTestimonial(testimonial.id)" class="text-red-600 hover:text-red-900 p-1" title="Delete">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                            <button ng-click="approveTestimonial(testimonial)" ng-if="!testimonial.approved" class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded-full hover:bg-green-200">
                                Approve
                            </button>
                            <span ng-if="testimonial.approved" class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded-full">
                                <i class="fas fa-check mr-1"></i> Approved
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
                <div class="flex items-center justify-between">
                    <div class="text-sm text-gray-700">
                        Showing <span class="font-medium">@{{ (currentPage - 1) * itemsPerPage + 1 }}</span> to
                        <span class="font-medium">@{{ Math.min(currentPage * itemsPerPage, filteredTestimonials().length) }}</span> of
                        <span class="font-medium">@{{ filteredTestimonials().length }}</span> testimonials
                    </div>
                    <div class="flex space-x-1">
                        <button ng-click="prevPage()" ng-disabled="currentPage === 1" ng-class="{'opacity-50 cursor-not-allowed': currentPage === 1}" class="px-3 py-1 border border-gray-300 rounded-md text-sm font-medium text-gray-700">
                            Previous
                        </button>
                        <button ng-repeat="page in getPages()" ng-click="goToPage(page)" ng-class="{'bg-blue-600 text-white': currentPage === page, 'text-gray-700': currentPage !== page}" class="px-3 py-1 border border-gray-300 rounded-md text-sm font-medium">
                            @{{ page }}
                        </button>
                        <button ng-click="nextPage()" ng-disabled="currentPage === totalPages()" ng-class="{'opacity-50 cursor-not-allowed': currentPage === totalPages()}" class="px-3 py-1 border border-gray-300 rounded-md text-sm font-medium text-gray-700">
                            Next
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Testimonial Modal -->
    <div ng-if="showEditModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white rounded-xl shadow-xl p-6 w-full max-w-2xl">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-semibold text-gray-800">Edit Testimonial</h2>
                <button ng-click="closeEditModal()" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <form ng-submit="updateTestimonial()" class="space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="edit-name" class="block text-sm font-medium text-gray-700 mb-1">Customer Name</label>
                        <input type="text" id="edit-name" ng-model="editingTestimonial.name" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div>
                        <label for="edit-position" class="block text-sm font-medium text-gray-700 mb-1">Position/Company</label>
                        <input type="text" id="edit-position" ng-model="editingTestimonial.position" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Rating</label>
                    <div class="star-input text-2xl">
                        <input type="radio" id="edit-star5" name="edit-rating" value="5" ng-model="editingTestimonial.rating">
                        <label for="edit-star5" title="5 stars"><i class="fas fa-star"></i></label>

                        <input type="radio" id="edit-star4" name="edit-rating" value="4" ng-model="editingTestimonial.rating">
                        <label for="edit-star4" title="4 stars"><i class="fas fa-star"></i></label>

                        <input type="radio" id="edit-star3" name="edit-rating" value="3" ng-model="editingTestimonial.rating">
                        <label for="edit-star3" title="3 stars"><i class="fas fa-star"></i></label>

                        <input type="radio" id="edit-star2" name="edit-rating" value="2" ng-model="editingTestimonial.rating">
                        <label for="edit-star2" title="2 stars"><i class="fas fa-star"></i></label>

                        <input type="radio" id="edit-star1" name="edit-rating" value="1" ng-model="editingTestimonial.rating">
                        <label for="edit-star1" title="1 star"><i class="fas fa-star"></i></label>
                    </div>
                </div>

                <div>
                    <label for="edit-message" class="block text-sm font-medium text-gray-700 mb-1">Testimonial Message</label>
                    <textarea id="edit-message" ng-model="editingTestimonial.message" required rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>

                <div class="flex items-center">
                    <input type="checkbox" id="edit-featured" ng-model="editingTestimonial.featured" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <label for="edit-featured" class="ml-2 block text-sm text-gray-700">Featured testimonial</label>
                </div>

                <div class="flex items-center">
                    <input type="checkbox" id="edit-approved" ng-model="editingTestimonial.approved" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <label for="edit-approved" class="ml-2 block text-sm text-gray-700">Approved for display</label>
                </div>

                <div class="flex justify-end pt-4">
                    <button type="button" ng-click="closeEditModal()" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 mr-2 hover:bg-gray-50">Cancel</button>
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg flex items-center">
                        <i class="fas fa-save mr-2"></i> Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div ng-if="showDeleteModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white rounded-xl shadow-xl p-6 w-full max-w-md">
            <div class="text-center">
                <div class="mx-auto flex items-center justify-center h-16 w-16 rounded-full bg-red-100 mb-4">
                    <i class="fas fa-exclamation-triangle text-red-600 text-2xl"></i>
                </div>
                <h3 class="text-lg font-medium text-gray-900 mb-2">Delete Testimonial</h3>
                <p class="text-gray-500 mb-6">Are you sure you want to delete this testimonial? This action cannot be undone.</p>
                <div class="flex justify-center space-x-3">
                    <button type="button" ng-click="cancelDelete()" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">
                        Cancel
                    </button>
                    <button type="button" ng-click="confirmDelete()" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg">
                        Yes, Delete
                    </button>
                </div>
            </div>
        </div>
    </div>
    @endsection


    <script>
        angular.module('testimonial', [])
            .controller('testimonialController', function($scope, $http, $timeout) {
                // Sample data - would be replaced with API calls in production
                $scope.testimonials = [];
                // Initialize variables


                $http.get('api/testimonial') // Use full URL
                    .then(function(response) {
                        $scope.testimonials = response.data;
                    })
                    .catch(function(error) {
                        console.error('API error:', error);
                    });
                $scope.newTestimonial = {
                    name: '',
                    position: '',
                    rating: 5,
                    message: '',
                    approved: false,
                    featured: false
                };

                $scope.searchText = '';
                $scope.filterRating = '';
                $scope.sortOption = '-created_at';
                $scope.showEditModal = false;
                $scope.showDeleteModal = false;
                $scope.editingTestimonial = {};
                $scope.deleteId = null;
                $scope.showToast = false;
                $scope.toastMessage = '';
                $scope.currentPage = 1;
                $scope.itemsPerPage = 6;
                $scope.Math = window.Math;

                // Filter function for testimonials
                $scope.searchFilter = function(testimonial) {
                    var matchesText = !$scope.searchText ||
                        testimonial.name.toLowerCase().includes($scope.searchText.toLowerCase()) ||
                        testimonial.message.toLowerCase().includes($scope.searchText.toLowerCase());

                    var matchesRating = !$scope.filterRating ||
                        testimonial.rating == $scope.filterRating;

                    return matchesText && matchesRating;
                };

                // Get filtered testimonials
                $scope.filteredTestimonials = function() {
                    return $scope.testimonials.filter($scope.searchFilter);
                };

                // Pagination functions
                $scope.totalPages = function() {
                    return Math.ceil($scope.filteredTestimonials().length / $scope.itemsPerPage);
                };

                $scope.getPages = function() {
                    var total = $scope.totalPages();
                    var pages = [];
                    for (var i = 1; i <= total; i++) {
                        pages.push(i);
                    }
                    return pages;
                };

                $scope.goToPage = function(page) {
                    $scope.currentPage = page;
                };

                $scope.nextPage = function() {
                    if ($scope.currentPage < $scope.totalPages()) {
                        $scope.currentPage++;
                    }
                };

                $scope.prevPage = function() {
                    if ($scope.currentPage > 1) {
                        $scope.currentPage--;
                    }
                };

                // Format date
                $scope.formatDate = function(dateString) {
                    const date = new Date(dateString);
                    return date.toLocaleDateString('en-US', {
                        year: 'numeric',
                        month: 'short',
                        day: 'numeric'
                    });
                };

                // Get average rating
                $scope.getAverageRating = function() {
                    if ($scope.testimonials.length === 0) return '0.0';

                    var total = $scope.testimonials.reduce(function(sum, testimonial) {
                        return sum + parseInt(testimonial.rating);
                    }, 0);

                    return (total / $scope.testimonials.length).toFixed(1);
                };

                // Get count of high ratings (5 stars)
                $scope.getHighRatingCount = function() {
                    return $scope.testimonials.filter(function(testimonial) {
                        return testimonial.rating == 5;
                    }).length;
                };

                // Add new testimonial
                $scope.addTestimonial = function() {
                    // In a real app, this would be an API call
                    var newId = $scope.testimonials.length > 0 ?
                        Math.max(...$scope.testimonials.map(t => t.id)) + 1 : 1;

                    var testimonial = {
                        id: newId,
                        name: $scope.newTestimonial.name,
                        position: $scope.newTestimonial.position,
                        rating: $scope.newTestimonial.rating,
                        message: $scope.newTestimonial.message,
                        created_at: new Date().toISOString(),
                        approved: false,
                        featured: false
                    };

                    // Simulate API call
                    $http.post('/api/testimonial/add', testimonial)
                        .then(function(response) {
                            $scope.testimonials.push(response.data);
                            $scope.resetForm();
                            $scope.showToastMessage('Testimonial added successfully!');
                        })
                        .catch(function(error) {
                            console.error('Error adding testimonial:', error);
                        });


                };

                // Reset form
                $scope.resetForm = function() {
                    $scope.newTestimonial = {
                        name: '',
                        position: '',
                        rating: 5,
                        message: '',
                        approved: false,
                        featured: false
                    };
                };

                // Edit testimonial
                $scope.editTestimonial = function(testimonial) {
                    $scope.editingTestimonial = angular.copy(testimonial);
                    $scope.showEditModal = true;
                };

                // Close edit modal
                $scope.closeEditModal = function() {
                    $scope.showEditModal = false;
                    $scope.editingTestimonial = {};
                };

                // Update testimonial
                $scope.updateTestimonial = function() {
                    // In a real app, this would be an API call
                    $http.put('/api/testimonial/' + $scope.editingTestimonial.id, $scope.editingTestimonial)
                        .then(function(response) {
                            var index = $scope.testimonials.findIndex(t => t.id === $scope.editingTestimonial.id);
                            if (index !== -1) {
                                $scope.testimonials[index] = response.data;
                            }
                            $scope.closeEditModal();
                            $scope.showToastMessage('Testimonial updated successfully!');
                        })
                        .catch(function(error) {
                            console.error('Error updating testimonial:', error);
                        });


                };

                // Delete testimonial
                $scope.deleteTestimonial = function(id) {
                    $scope.deleteId = id;
                    $scope.showDeleteModal = true;
                };

                // Cancel delete
                $scope.cancelDelete = function() {
                    $scope.showDeleteModal = false;
                    $scope.deleteId = null;
                };

                // Confirm delete
                $scope.confirmDelete = function() {
                    // In a real app, this would be an API call
                    $http.delete('/api/testimonial/' + $scope.deleteId)
                        .then(function() {
                            $scope.testimonials = $scope.testimonials.filter(t => t.id !== $scope.deleteId);
                            $scope.cancelDelete();
                            $scope.showToastMessage('Testimonial deleted successfully!');
                        })
                        .catch(function(error) {
                            console.error('Error deleting testimonial:', error);
                        });


                };

                // Toggle featured status
                $scope.toggleFeatured = function(testimonial) {
                    // In a real app, this would be an API call
                    $http.patch('/api/testimonial/' + testimonial.id, {
                            featured: !testimonial.featured
                        })
                        .then(function(response) {
                            testimonial.featured = !testimonial.featured;
                            $scope.showToastMessage(testimonial.featured ? 'Testimonial marked as featured!' : 'Testimonial removed from featured.');
                        })
                        .catch(function(error) {
                            console.error('Error updating testimonial:', error);
                        });


                };

                // Approve testimonial
                $scope.approveTestimonial = function(testimonial) {
                    // In a real app, this would be an API call
                    $http.patch('/api/testimonial/' + testimonial.id, {
                            approved: true
                        })
                        .then(function(response) {
                            testimonial.approved = true;
                            $scope.showToastMessage('Testimonial approved successfully!');
                        })
                        .catch(function(error) {
                            console.error('Error approving testimonial:', error);
                        });



                };

                // Export testimonials



                    $scope.exportTestimonials = function() {
    $http.get('api/testimonial/export', { responseType: 'blob' })
      .then(function(response) {
        const blob = new Blob([response.data], { type: 'text/csv' });
        const url = window.URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = 'testimonials_export.csv'; // consistent with backend
        document.body.appendChild(a);
        a.click();
        window.URL.revokeObjectURL(url);
        $scope.showToastMessage('Testimonials exported successfully!');
      })
      .catch(function(error) {
        console.error('Error exporting testimonials:', error);
      });
};



                // Show toast message
                $scope.showToastMessage = function(message) {
                    $scope.toastMessage = message;
                    $scope.showToast = true;

                    $timeout(function() {
                        $scope.showToast = false;
                    }, 3000);
                };
            });
    </script>

</body>

</html>
