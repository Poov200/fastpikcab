
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonials</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .testimonial-slider {
            overflow: hidden;
            position: relative;
        }

        .testimonial-container {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .testimonial-card {
            flex: 0 0 calc(33.333% - 1rem);
            margin-right: 1rem;
        }

        .star-rating {
            color: #FFD700;
        }

        @media (max-width: 768px) {
            .testimonial-card {
                flex: 0 0 calc(100% - 1rem);
            }
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .fade-in {
            animation: fadeIn 0.5s ease-out forwards;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen p-4 md:p-8">
    @include('welcome')
    @section('pagecontent')
    <div ng-app="testimonialApp" ng-controller="TestimonialController" class="max-w-6xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-indigo-800 mb-2">What Our Clients Say</h2>
            <div class="w-24 h-1 bg-indigo-600 mx-auto mb-4"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">Discover what our valued clients have to say about their experiences working with us.</p>
        </div>

        <div class="testimonial-slider rounded-xl bg-white shadow-xl p-6 mb-8">
            <div class="testimonial-container" ng-style="{'transform': 'translateX(' + (-currentIndex * slideWidth) + '%)'}">
                <div class="testimonial-card fade-in" ng-repeat="testimonial in testimonials" ng-style="{'animation-delay': $index * 0.2 + 's'}">
                    <div class="bg-gradient-to-br from-indigo-50 to-blue-50 rounded-lg p-6 h-full shadow-md hover:shadow-lg transition-shadow duration-300 flex flex-col">
                        <div class="mb-4 star-rating">
                            <span ng-repeat="star in getStars(testimonial.rating)">★</span>
                        </div>
                        <div class="flex-grow">
                            <p class="text-gray-700 italic mb-4">"@{{ testimonial.message }}"</p>
                        </div>
                        <div class="mt-4 flex items-center">
                            <div class="w-10 h-10 rounded-full bg-indigo-600 flex items-center justify-center text-white font-bold">
                                @{{ testimonial.name.charAt(0) }}
                            </div>
                            <div class="ml-3">
                                <h4 class="font-semibold text-indigo-800">@{{ testimonial.name }}</h4>
                                <p class="text-sm text-gray-600">@{{ testimonial.position }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-center gap-4">
            <button ng-click="prevSlide()" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors duration-300 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                Previous
            </button>
            <button ng-click="nextSlide()" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors duration-300 flex items-center">
                Next
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>

        <div class="flex justify-center mt-6">
            <div class="flex space-x-2">
                <button
                    ng-repeat="i in getNumberOfSlides() track by $index"
                    ng-click="goToSlide($index)"
                    class="w-3 h-3 rounded-full transition-colors duration-300"
                    ng-class="{'bg-indigo-600': currentIndex === $index, 'bg-gray-300': currentIndex !== $index}">
                </button>
            </div>
        </div>
    </div>
@endsection
    <script>
        angular.module('testimonialApp', [])
            .controller('TestimonialController', ['$scope', '$http', function($scope, $http) {
                $scope.testimonials = [];
                $scope.currentIndex = 0;
                $scope.slideWidth = 33.333; // For desktop, showing 3 testimonials

                // Check if we're on mobile
                if (window.innerWidth <= 768) {
                    $scope.slideWidth = 100; // For mobile, showing 1 testimonial
                }

                // Fetch testimonials from your API
                $http.get('/api/testimonial')
                    .then(function(response) {
                        $scope.testimonials = response.data;

                        // If no testimonials are returned, add sample data
                        if ($scope.testimonials.length === 0) {
                            $scope.testimonials = [
                                {
                                    id: 1,
                                    name: "Poovarasan S",
                                    position: "FullStack Developer",
                                    message: "Working with this team has been an amazing experience. They delivered beyond my expectations!",
                                    rating: 5,
                                    approved: 0,
                                    created_at: "2025-05-17T16:13:48.000000Z",
                                    updated_at: "2025-05-17T16:13:48.000000Z"
                                },
                                {
                                    id: 2,
                                    name: "Jane Smith",
                                    position: "Project Manager",
                                    message: "The attention to detail and quality of work is outstanding. Highly recommended!",
                                    rating: 5,
                                    approved: 0,
                                    created_at: "2025-05-18T10:23:48.000000Z",
                                    updated_at: "2025-05-18T10:23:48.000000Z"
                                },
                                {
                                    id: 3,
                                    name: "Michael Johnson",
                                    position: "UI/UX Designer",
                                    message: "Excellent communication and timely delivery. The results exceeded my expectations.",
                                    rating: 4,
                                    approved: 0,
                                    created_at: "2025-05-19T14:45:22.000000Z",
                                    updated_at: "2025-05-19T14:45:22.000000Z"
                                },
                                {
                                    id: 4,
                                    name: "Sarah Williams",
                                    position: "Marketing Director",
                                    message: "Very professional and responsive. They understood our requirements perfectly.",
                                    rating: 5,
                                    approved: 0,
                                    created_at: "2025-05-20T09:12:33.000000Z",
                                    updated_at: "2025-05-20T09:12:33.000000Z"
                                }
                            ];
                        }
                    })
                    .catch(function(error) {
                        console.error('Error fetching testimonials:', error);

                        // Add sample data if API fails
                        $scope.testimonials = [
                            {
                                id: 1,
                                name: "Poovarasan S",
                                position: "FullStack Developer",
                                message: "Working with this team has been an amazing experience. They delivered beyond my expectations!",
                                rating: 5,
                                approved: 0,
                                created_at: "2025-05-17T16:13:48.000000Z",
                                updated_at: "2025-05-17T16:13:48.000000Z"
                            },
                            {
                                id: 2,
                                name: "Jane Smith",
                                position: "Project Manager",
                                message: "The attention to detail and quality of work is outstanding. Highly recommended!",
                                rating: 5,
                                approved: 0,
                                created_at: "2025-05-18T10:23:48.000000Z",
                                updated_at: "2025-05-18T10:23:48.000000Z"
                            },
                            {
                                id: 3,
                                name: "Michael Johnson",
                                position: "UI/UX Designer",
                                message: "Excellent communication and timely delivery. The results exceeded my expectations.",
                                rating: 4,
                                approved: 0,
                                created_at: "2025-05-19T14:45:22.000000Z",
                                updated_at: "2025-05-19T14:45:22.000000Z"
                            },
                            {
                                id: 4,
                                name: "Sarah Williams",
                                position: "Marketing Director",
                                message: "Very professional and responsive. They understood our requirements perfectly.",
                                rating: 5,
                                approved: 0,
                                created_at: "2025-05-20T09:12:33.000000Z",
                                updated_at: "2025-05-20T09:12:33.000000Z"
                            }
                        ];
                    });

                // Generate stars based on rating
                $scope.getStars = function(rating) {
                    return new Array(rating);
                };

                // Navigation functions
                $scope.nextSlide = function() {
                    let maxIndex;
                    if (window.innerWidth <= 768) {
                        maxIndex = $scope.testimonials.length - 1;
                    } else {
                        maxIndex = Math.max(0, $scope.testimonials.length - 3);
                    }

                    if ($scope.currentIndex < maxIndex) {
                        $scope.currentIndex++;
                    } else {
                        $scope.currentIndex = 0; // Loop back to the beginning
                    }
                };

                $scope.prevSlide = function() {
                    let maxIndex;
                    if (window.innerWidth <= 768) {
                        maxIndex = $scope.testimonials.length - 1;
                    } else {
                        maxIndex = Math.max(0, $scope.testimonials.length - 3);
                    }

                    if ($scope.currentIndex > 0) {
                        $scope.currentIndex--;
                    } else {
                        $scope.currentIndex = maxIndex; // Loop to the end
                    }
                };

                $scope.goToSlide = function(index) {
                    $scope.currentIndex = index;
                };

                $scope.getNumberOfSlides = function() {
                    if (!$scope.testimonials.length) return [];

                    if (window.innerWidth <= 768) {
                        return new Array($scope.testimonials.length);
                    } else {
                        return new Array(Math.max(1, $scope.testimonials.length - 2));
                    }
                };

                // Auto-slide functionality
                let autoSlideInterval = setInterval(function() {
                    $scope.$apply(function() {
                        $scope.nextSlide();
                    });
                }, 5000);

                // Clean up interval when scope is destroyed
                $scope.$on('$destroy', function() {
                    clearInterval(autoSlideInterval);
                });

                // Handle window resize
                window.addEventListener('resize', function() {
                    $scope.$apply(function() {
                        if (window.innerWidth <= 768) {
                            $scope.slideWidth = 100;
                        } else {
                            $scope.slideWidth = 33.333;
                        }
                    });
                });
            }]);
    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'9414736f85877ff2',t:'MTc0NzQ5ODkxOS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>
