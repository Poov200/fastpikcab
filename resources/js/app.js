

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

(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'9395e34806ac17a7',t:'MTc0NjE3MTgwOC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();







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


var app = angular.module('bookingApp', []);


   app.controller('BookingController', function ($scope, $http) {
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
        $scope.currentStep = 1; // Initialize the current step

        let pickupPlace;
        let dropPlace;

        $http.get('/api/pricings')
            .then(function (response) {
                $scope.pricings = response.data;
                console.log("Pricings fetched:", $scope.pricings);
            })
            .catch(function (error) {
                console.error("Error fetching pricings:", error);
            });

        window.initMap = function () {
            const pickupInput = document.querySelector('input[ng-model="booking.pickup"]');
            const dropInput = document.querySelector('input[ng-model="booking.destination"]');

            if (!pickupInput || !dropInput) {
                console.error("Pickup and destination inputs must be <input> elements.");
                return;
            }

            const options = {
                componentRestrictions: { country: 'in' }
            };
            const pickupAutocomplete = new google.maps.places.Autocomplete(pickupInput, options);
            const dropAutocomplete = new google.maps.places.Autocomplete(dropInput, options);

            const directionsService = new google.maps.DirectionsService();
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 7,
                center: { lat: 11.1271, lng: 78.6569 },
            });
            const directionsRenderer = new google.maps.DirectionsRenderer();
            directionsRenderer.setMap(map);

            function calculateDistance() {
                const origin = pickupPlace ? pickupPlace.formatted_address : pickupInput.value;
                const destination = dropPlace ? dropPlace.formatted_address : dropInput.value;

                if (origin && destination) {
                    directionsService.route({
                        origin,
                        destination,
                        travelMode: google.maps.TravelMode.DRIVING
                    }, function (response, status) {
                        if (status === google.maps.DirectionsStatus.OK) {
                            directionsRenderer.setDirections(response);
                            const route = response.routes[0];
                            const distanceText = route.legs[0].distance.text;
                            $scope.$apply(function () {
                                $scope.booking.distance = distanceText;
                                $scope.calculateassigned_amount();
                            });
                        } else {
                            console.error("Directions request failed: " + status);
                            $scope.$apply(function () {
                                $scope.booking.distance = '';
                                $scope.assigned_amount = 0;
                            });
                        }
                    });
                } else {
                    $scope.$apply(function () {
                        $scope.booking.distance = '';
                        $scope.assigned_amount = 0;
                    });
                }
            }

            pickupAutocomplete.addListener('place_changed', function () {
                const place = pickupAutocomplete.getPlace();
                if (place && place.geometry) {
                    pickupPlace = place;
                    calculateDistance();
                    $scope.$apply(() => {
                        $scope.booking.pickup = place.formatted_address || '';
                        $scope.pickupRequired = false;
                    });
                } else {
                    pickupPlace = null;
                    $scope.$apply(() => {
                        $scope.booking.pickup = '';
                        $scope.booking.distance = '';
                        $scope.assigned_amount = 0;
                        $scope.pickupRequired = true;
                    });
                    console.log("Pickup location not found or cleared.");
                }
            });

            dropAutocomplete.addListener('place_changed', function () {
                const place = dropAutocomplete.getPlace();
                if (place && place.geometry) {
                    dropPlace = place;
                    calculateDistance();
                    $scope.$apply(() => {
                        $scope.booking.destination = place.formatted_address || '';
                        $scope.dropRequired = false;
                    });
                } else {
                    dropPlace = null;
                    $scope.$apply(() => {
                        $scope.booking.destination = '';
                        $scope.booking.distance = '';
                        $scope.assigned_amount = 0;
                        $scope.dropRequired = true;
                    });
                    console.log("Destination location not found or cleared.");
                }
            });

        };

        $scope.nextStep = function () {
            $scope.currentStep++;
            if ($scope.currentStep === 4 && $scope.booking.tripType !== 'round') {
                $scope.currentStep++; // Skip the number of days step if it's a one-way trip
            }
        };

        $scope.prevStep = function () {
            $scope.currentStep--;
            if ($scope.currentStep === 4 && $scope.booking.tripType !== 'round') {
                $scope.currentStep--; // Skip back past the number of days step if it's a one-way trip
            }
        };

        $scope.calculateassigned_amount = function() {
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

                    if (distanceInKm < 300 && pricingRule.driver_beta_300 !== undefined) {
                        calculatedPrice += parseFloat(pricingRule.driver_beta_300) * (isRoundTrip ? numberOfDays : 1);
                    } else if (distanceInKm > 500 && pricingRule.driver_beta_500 !== undefined) {
                        calculatedPrice += parseFloat(pricingRule.driver_beta_500) * (isRoundTrip ? numberOfDays : 1);
                    }

                    $scope.assigned_amount = calculatedPrice;
                    console.log("Pricing rule found:", pricingRule, "Total Price:", $scope.assigned_amount, "Round Trip:", isRoundTrip, "Days:", numberOfDays);
                } else {
                    $scope.assigned_amount = 0;
                    console.warn(`No pricing rule found or missing data for ${selectedVehicle} and ${selectedTripType}`);
                }
            } else {
                $scope.assigned_amount = 0;
            }
        };

        $scope.$watchGroup(['booking.vehicle', 'booking.tripType', 'booking.no_of_days'], function(newValues, oldValues) {
            if (newValues !== oldValues) {
                $scope.calculateassigned_amount();
            }
        });

        $scope.submitBooking = function (isValid) {
            $scope.showMissingFieldsMessage = false;
            $scope.bookingSuccess = false;
            $scope.bookingError = false;
            $scope.pickupRequired = !pickupPlace;
            $scope.dropRequired = !dropPlace;

            if (isValid && pickupPlace && dropPlace) {
                $scope.isSubmitting = true;

                const formattedDate = new Date($scope.booking.date).toISOString().split('T')[0];
                const timeString = String($scope.booking.time);
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
                   assigned_amount : $scope.assigned_amount
                };

                $http.post('/api/add/bookings', finalBooking)
                    .then(function (response) {
                        $scope.isSubmitting = false;
                        $scope.bookingSuccess = true;
                        // Optionally reset the form after success
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
                        pickupPlace = null;
                        dropPlace = null;
                        $scope.currentStep = 1; // Reset to the first step

                         // telegram bot integration
                    const telegramBotToken = '7564604815:AAHJIDEaXESZ67a48uNX8xkD4_zPPS8T640';
                    const chatId = '1259937658';
                    const chatId1 = '1747811808';

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

                    $http.post(`https://api.telegram.org/bot${telegramBotToken}/sendMessage`, {
                        chat_id: chatId,
                        chat_id: chatId1,
                        text: message,
                        parse_mode: 'Markdown'
                    })
                        .then(function () {
                            console.log("Booking sent to Telegram successfully.");
                        })
                        .catch(function (err) {
                            console.error("Failed to send booking to Telegram:", err);
                        });

                    })
                    .catch(function (error) {
                        $scope.isSubmitting = false;
                        $scope.bookingError = true;
                        console.error(error);
                    });
            } else {
                $scope.showMissingFieldsMessage = true;
                console.log("Please fill in all the required fields and select valid pickup and drop locations.");
            }
        };
    });



