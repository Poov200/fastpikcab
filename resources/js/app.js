

// Back to top button functionality
const backToTopButton = document.getElementById('back-to-top');

window.addEventListener('scroll', () => {
    if (window.pageYOffset > 300) {
        backToTopButton.classList.remove('opacity-0', 'invisible');
        backToTopButton.classList.add('opacity-100', 'visible');
    } else {
        backToTopButton.classList.add('opacity-0', 'invisible');
        backToTopButton.classList.remove('opacity-100', 'visible');
    }
});

backToTopButton.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

(function () { function c() { var b = a.contentDocument || a.contentWindow.document; if (b) { var d = b.createElement('script'); d.innerHTML = "window.__CF$cv$params={r:'9395e34806ac17a7',t:'MTc0NjE3MTgwOC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);"; b.getElementsByTagName('head')[0].appendChild(d) } } if (document.body) { var a = document.createElement('iframe'); a.height = 1; a.width = 1; a.style.position = 'absolute'; a.style.top = 0; a.style.left = 0; a.style.border = 'none'; a.style.visibility = 'hidden'; document.body.appendChild(a); if ('loading' !== document.readyState) c(); else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c); else { var e = document.onreadystatechange || function () { }; document.onreadystatechange = function (b) { e(b); 'loading' !== document.readyState && (document.onreadystatechange = e, c()) } } } })();







const btn = document.getElementById('mobile-menu-button');
const menu = document.getElementById('mobile-menu');

// Toggle menu
btn.addEventListener('click', (e) => {
    e.stopPropagation();
    menu.classList.toggle('hidden');
});

// Close menu when clicking outside
document.addEventListener('click', (e) => {
    const isClickInsideMenu = menu.contains(e.target);
    const isClickOnButton = btn.contains(e.target);

    if (!isClickInsideMenu && !isClickOnButton) {
        menu.classList.add('hidden');
    }
});

// Close menu when a link inside it is clicked
const links = menu.querySelectorAll('a');
links.forEach(link => {
    link.addEventListener('click', () => {
        menu.classList.add('hidden');
    });
});

const navLinks = document.querySelectorAll('.nav-link');

navLinks.forEach(link => {
    if (link.href === window.location.href) {
        link.classList.add('text-yellow-400', 'font-semibold');
    } else {
        link.classList.remove('text-yellow-400', 'font-semibold');
    }
});


        // Declare global variables to store place details from Autocomplete
        // These need to be accessible across different event listeners.
        let pickupPlace = null;
        let dropPlace = null;

        // Define the Angular module and controller
        angular.module('bookingApp', []) // Changed module name to bookingApp
            .controller('BookingController', function($scope, $http, $filter) { // Inject $filter for currency
                // Initialize booking and assigned_amount properties
                $scope.booking = {
                    tripType: 'oneway',
                    name: '',
                    email: '',
                    contact: '',
                    pickup: '',
                    destination: '',
                    date: null,
                    time: null,
                    vehicle: '',
                    passengers: '',
                    distance: '',
                    no_of_days: '1' // Default to 1 day
                };

                $scope.assigned_amount = 0;
                $scope.showMissingFieldsMessage = false;
                $scope.isSubmitting = false;
                $scope.bookingSuccess = false;
                $scope.bookingError = false;
                $scope.pickupRequired = false;
                $scope.dropRequired = false;
                $scope.pricings = [];
                // Removed currentStep as it's no longer a multi-step form

                // Expose the AngularJS $scope to the global window object.
                // This allows the global initMap function to access and update Angular's model.
                window.angularScope = $scope;

                // Fetch pricing data on controller initialization
                $http.get('/pricings')
                    .then(function (response) {
                        $scope.pricings = response.data;
                        // Ensure unique filter for vehicle types
                        if (!angular.isFunction($scope.pricings.unique)) {
                            angular.forEach($scope.pricings, function(item) {
                                if (!$scope.pricings.hasOwnProperty(item.vehicle_type)) {
                                    $scope.pricings[item.vehicle_type] = item;
                                }
                            });
                            $scope.pricings.unique = function(key) {
                                var unique = {};
                                var distinct = [];
                                angular.forEach(this, function(item) {
                                    if (unique[item[key]] === undefined) {
                                        unique[item[key]] = true;
                                        distinct.push(item);
                                    }
                                });
                                return distinct;
                            };
                        }
                        $scope.calculateassigned_amount(); // Recalculate if pricing affects initial values
                    })
                    .catch(function (error) {
                        console.error("Error fetching pricings:", error);
                        // Optionally show an error message to the user
                    });

                // Function to calculate assigned amount based on distance, vehicle, trip type, and days
                $scope.calculateassigned_amount = function () {
                    const distanceInKm = parseFloat($scope.booking.distance.replace(' km', '').replace(',', ''));
                    const selectedVehicle = $scope.booking.vehicle;
                    const selectedTripType = $scope.booking.tripType;
                    const numberOfDays = parseInt($scope.booking.no_of_days) || 1; // Default to 1 if not round trip or days not selected
                    let calculatedPrice = 0;

                    if (!isNaN(distanceInKm) && selectedVehicle && selectedTripType && $scope.pricings.length > 0) {
                        const pricingRule = $scope.pricings.find(pricing =>
                            pricing.vehicle_type.toLowerCase() === selectedVehicle.toLowerCase() &&
                            pricing.trip_type.toLowerCase() === (selectedTripType === 'oneway' ? 'one-way' : 'round trip').toLowerCase()
                        );

                        if (pricingRule && pricingRule.base_price_per_km !== undefined && pricingRule.minimum_distance !== undefined) {
                            const basePricePerKm = parseFloat(pricingRule.base_price_per_km);
                            const minDistance = parseFloat(pricingRule.minimum_distance);
                            const isRoundTrip = selectedTripType === 'round';

                            const billingDistance = Math.max(distanceInKm, minDistance);
                            let baseFare = billingDistance * basePricePerKm;

                            if (isRoundTrip) {
                                baseFare *= numberOfDays; // Multiply by the number of days for round trips
                            }

                            calculatedPrice = baseFare;

                            // Add driver beta based on distance
                            if (distanceInKm < 300 && pricingRule.driver_beta_300 !== undefined) {
                                calculatedPrice += parseFloat(pricingRule.driver_beta_300) * (isRoundTrip ? numberOfDays : 1);
                            } else if (distanceInKm >= 300 && distanceInKm <= 500 && pricingRule.driver_beta_500 !== undefined) {
                                // Assuming driver_beta_500 applies to distances >= 300 and <= 500
                                calculatedPrice += parseFloat(pricingRule.driver_beta_500) * (isRoundTrip ? numberOfDays : 1);
                            } else if (distanceInKm > 500 && pricingRule.driver_beta_500 !== undefined) {
                                // If there's a separate rule for > 500, add it. Otherwise, use driver_beta_500
                                calculatedPrice += parseFloat(pricingRule.driver_beta_500) * (isRoundTrip ? numberOfDays : 1);
                            }

                            $scope.assigned_amount = calculatedPrice;

                        } else {
                            $scope.assigned_amount = 0;
                            console.warn("No matching pricing rule found or incomplete pricing rule for selected vehicle/trip type.");
                        }
                    } else {
                        $scope.assigned_amount = 0;
                    }
                };

                // Watch for changes in vehicle, tripType, or no_of_days to recalculate price
                $scope.$watchGroup(['booking.vehicle', 'booking.tripType', 'booking.no_of_days'], function (newValues, oldValues) {
                    if (newValues !== oldValues) {
                        $scope.calculateassigned_amount();
                    }
                });

                // Form submission logic
                $scope.submitBooking = function (isValid) {
                    $scope.showMissingFieldsMessage = false;
                    $scope.bookingSuccess = false;
                    $scope.bookingError = false;
                    $scope.pickupRequired = !pickupPlace; // Re-check if place data is available
                    $scope.dropRequired = !dropPlace;

                    // Check if form is valid and places are selected
                    if (isValid && pickupPlace && dropPlace) {
                        $scope.isSubmitting = true;

                        // Format date and time for submission
                        const formattedDate = $scope.booking.date ? $filter('date')($scope.booking.date, 'yyyy-MM-dd') : null;
                        const timeString = $scope.booking.time ? String($scope.booking.time) : '00:00';
                        const timeParts = timeString.split(':');
                        const hours = timeParts[0] || '00';
                        const minutes = timeParts[1] || '00';
                        const seconds = '00';
                        const formattedTime = `${hours}:${minutes}:${seconds}`;

                        const finalBooking = {
                            ...$scope.booking,
                            pickup_details: pickupPlace,
                            destination_details: dropPlace,
                            date: formattedDate,
                            time: formattedTime,
                            assigned_amount: $scope.assigned_amount
                        };

                        // Send booking data to backend (mocked for this example)
                        // In a real application, replace this with your actual API endpoint
                        $http.post('/add/bookings', finalBooking)
                            .then(function (response) {

                                // Telegram bot integration
                                const telegramBotToken = '7564604815:AAHJIDEaXESZ67a48uNX8xkD4_zPPS8T640';
                                const chatIds = ['1259937658', '1247656681']; // Array of chat IDs

                                const message = `
🚖 *New Booking Received* 🚖

👤 *Name:* ${finalBooking.name}
📧 *Email:* ${finalBooking.email}
📞 *Contact:* ${finalBooking.contact}

📍 *Pickup:* ${finalBooking.pickup}
📍 *Destination:* ${finalBooking.destination}
📅 *Date:* ${formattedDate}
⏰ *Time:* ${formattedTime}

🚗 *Vehicle:* ${finalBooking.vehicle}
🧍 *Passengers:* ${finalBooking.passengers}
📏 *Distance:* ${finalBooking.distance}
🔁 *Trip Type:* ${finalBooking.tripType}
🗓️ *No. of Days:* ${finalBooking.no_of_days}

💰 *Total Amount:* ₹${$scope.assigned_amount}
`;
                                chatIds.forEach(chatId => {
                                    $http.post(`https://api.telegram.org/bot${telegramBotToken}/sendMessage`, {
                                        chat_id: chatId,
                                        text: message,
                                        parse_mode: 'Markdown'
                                    })
                                    .then(() => {

                                    })
                                    .catch(err => {

                                    });
                                });


                                 $scope.isSubmitting = false;
                                $scope.bookingSuccess = true;

                                // Reset form after successful submission
                                $scope.booking = {
                                    tripType: 'oneway',
                                    name: '',
                                    email: '',
                                    contact: '',
                                    pickup: '',
                                    destination: '',
                                    date: null,
                                    time: null,
                                    vehicle: '',
                                    passengers: '',
                                    distance: '',
                                    no_of_days: '1'
                                };
                                $scope.assigned_amount = 0;
                                $scope.bookingForm.$setPristine();
                                $scope.bookingForm.$setUntouched();
                                $scope.pickupRequired = false;
                                $scope.dropRequired = false;
                                pickupPlace = null; // Clear global place data
                                dropPlace = null;


                            })
                            .catch(function (error) {
                                $scope.isSubmitting = false;
                                $scope.bookingError = true;
                                console.error("Booking submission failed:", error);
                            });
                    } else {
                        $scope.showMissingFieldsMessage = true; // Show general error for missing fields
                    }
                };
            });

        // The initMap function, globally exposed via window.
        // This function will be called by the Google Maps API script once it's loaded.
        window.initMap = function () {
            // Get references to the input fields and the map container
            const pickupInput = document.querySelector('input[ng-model="booking.pickup"]');
            const dropInput = document.querySelector('input[ng-model="booking.destination"]');
            const mapElement = document.getElementById("map");

            // If any required elements are not found, log an error and return.
            // This prevents further errors and indicates a problem with DOM readiness or selection.
            if (!pickupInput || !dropInput || !mapElement) {
                console.error("Map elements (pickupInput, dropInput, or map div) not found. Cannot initialize Google Maps.");
                return;
            }

            // Options for Google Places Autocomplete, restricting to India.
            const options = {
                componentRestrictions: { country: 'in' }
            };

            // Initialize Autocomplete for pickup and destination input fields.
            const pickupAutocomplete = new google.maps.places.Autocomplete(pickupInput, options);
            const dropAutocomplete = new google.maps.places.Autocomplete(dropInput, options);

            // Initialize Google Maps Directions Service and Renderer.
            const directionsService = new google.maps.DirectionsService();
            const directionsRenderer = new google.maps.DirectionsRenderer(); // Corrected initialization
            directionsRenderer.setMap(new google.maps.Map(mapElement, { // Initialize map here
                zoom: 7,
                center: { lat: 11.1271, lng: 78.6569 }, // Centered on Tamil Nadu, India
            }));

            /**
             * Calculates the distance and displays the route on the map.
             * Updates the AngularJS scope with distance and calculated amount.
             */
            function calculateDistance() {
                // Retrieve the AngularJS $scope from the global window object.
                const $scope = window.angularScope;
                if (!$scope) {
                    console.error("$scope not available for distance calculation. Ensure it's exposed globally.");
                    return;
                }

                // Determine the origin and destination for the directions request.
                // Prioritize formatted address from place data if available, otherwise use input value.
                const origin = pickupPlace ? pickupPlace.formatted_address : pickupInput.value;
                const destination = dropPlace ? dropPlace.formatted_address : dropInput.value;

                if (origin && destination) {
                    directionsService.route({
                        origin: origin,
                        destination: destination,
                        travelMode: google.maps.TravelMode.DRIVING // Calculate driving distance
                    }, function (response, status) {
                        if (status === google.maps.DirectionsStatus.OK) {
                            // Display the route on the map
                            directionsRenderer.setDirections(response);
                            // Get distance from the first leg of the route
                            const route = response.routes[0];
                            const distanceText = route.legs[0].distance.text;

                            // Update AngularJS scope and trigger digest cycle
                            $scope.$apply(function () {
                                $scope.booking.distance = distanceText;
                                $scope.calculateassigned_amount(); // Call Angular function to update amount
                            });
                        } else {
                            // Handle directions request failure
                            console.error("Directions request failed: " + status);
                            $scope.$apply(function () {
                                $scope.booking.distance = '';
                                $scope.assigned_amount = 0;
                            });
                        }
                    });
                } else {
                    // If origin or destination is missing, clear distance and amount
                    $scope.$apply(function () {
                        $scope.booking.distance = '';
                        $scope.assigned_amount = 0;
                    });
                }
            }

            // Listen for 'place_changed' event on pickup Autocomplete
            pickupAutocomplete.addListener('place_changed', function () {
                const place = pickupAutocomplete.getPlace();
                const $scope = window.angularScope; // Re-get $scope for the listener
                if (!$scope) return; // Exit if $scope is not available

                if (place && place.geometry) {
                    pickupPlace = place; // Store the selected place details
                    calculateDistance(); // Recalculate distance
                    $scope.$apply(() => {
                        $scope.booking.pickup = place.formatted_address || ''; // Update Angular model
                        $scope.pickupRequired = false; // Clear validation error
                    });
                } else {
                    // If no valid place is selected, clear related data and set validation
                    pickupPlace = null;
                    $scope.$apply(() => {
                        $scope.booking.pickup = '';
                        $scope.booking.distance = '';
                        $scope.assigned_amount = 0;
                        $scope.pickupRequired = true;
                    });
                }
            });

            // Listen for 'place_changed' event on drop Autocomplete
            dropAutocomplete.addListener('place_changed', function () {
                const place = dropAutocomplete.getPlace();
                const $scope = window.angularScope; // Re-get $scope for the listener
                if (!$scope) return; // Exit if $scope is not available

                if (place && place.geometry) {
                    dropPlace = place; // Store the selected place details
                    calculateDistance(); // Recalculate distance
                    $scope.$apply(() => {
                        $scope.booking.destination = place.formatted_address || ''; // Update Angular model
                        $scope.dropRequired = false; // Clear validation error
                    });
                } else {
                    // If no valid place is selected, clear related data and set validation
                    dropPlace = null;
                    $scope.$apply(() => {
                        $scope.booking.destination = '';
                        $scope.booking.distance = '';
                        $scope.assigned_amount = 0;
                        $scope.dropRequired = true;
                    });
                }
            });
        }; // End of window.initMap function


