

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






// Declare global variables to store place details from Autocomplete
// These need to be accessible across different event listeners.
let pickupPlace = null;
let dropPlace = null;

// Define the Angular module and controller
angular.module('bookingApp', []) // Changed module name to bookingApp
    .controller('BookingController', function ($scope, $http, $filter) { // Inject $filter for currency
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
                    angular.forEach($scope.pricings, function (item) {
                        if (!$scope.pricings.hasOwnProperty(item.vehicle_type)) {
                            $scope.pricings[item.vehicle_type] = item;
                        }
                    });
                    $scope.pricings.unique = function (key) {
                        var unique = {};
                        var distinct = [];
                        angular.forEach(this, function (item) {
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

                // Convert to 12-hour format for display
                const displayHours = hours % 12 || 12; // Convert to 12-hour format
                const ampm = hours >= 12 ? 'PM' : 'AM';
                const displayTime = `${displayHours}:${minutes} ${ampm}`;

                const finalBooking = {
                    ...$scope.booking,
                    pickup_details: pickupPlace,
                    destination_details: dropPlace,
                    date: formattedDate,
                    time: formattedTime, // Keep 24-hour format for backend
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

    const pickupInput =
        document.querySelector('input[ng-model="booking.pickup"]');

    const dropInput =
        document.querySelector('input[ng-model="booking.destination"]');

    const mapElement =
        document.getElementById("map");

    if (!pickupInput || !dropInput || !mapElement) {
        console.error("Pickup, drop or map element not found.");
        return;
    }


    // =========================================
    // LEAFLET MAP
    // =========================================

    const map = L.map("map").setView(
        [11.1271, 78.6569],
        7
    );


    // =========================================
    // OPENSTREETMAP
    // =========================================

    L.tileLayer(
        "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",
        {
            maxZoom: 19,
            attribution:
                '&copy; OpenStreetMap contributors'
        }
    ).addTo(map);


    let pickupMarker = null;
    let dropMarker = null;
    let routeLayer = null;

    let pickupTimer = null;
    let dropTimer = null;


    // =========================================
    // CREATE AUTOCOMPLETE BOX
    // =========================================

    function createSuggestionBox(input) {

        const wrapper = input.parentElement;

        if (
            window.getComputedStyle(wrapper).position ===
            "static"
        ) {
            wrapper.style.position = "relative";
        }

        const box = document.createElement("div");

        box.className = "osm-suggestions";

        box.style.position = "absolute";
        box.style.left = "0";
        box.style.right = "0";
        box.style.top = "100%";
        box.style.background = "#fff";
        box.style.border = "1px solid #ddd";
        box.style.zIndex = "99999";
        box.style.maxHeight = "250px";
        box.style.overflowY = "auto";
        box.style.display = "none";

        wrapper.appendChild(box);

        return box;
    }


    const pickupSuggestions =
        createSuggestionBox(pickupInput);

    const dropSuggestions =
        createSuggestionBox(dropInput);


    // =========================================
    // NOMINATIM LOCATION SEARCH
    // =========================================

    async function searchLocation(query) {

        if (!query || query.length < 3) {
            return [];
        }

        const url =
            "https://nominatim.openstreetmap.org/search" +
            "?format=json" +
            "&addressdetails=1" +
            "&limit=5" +
            "&countrycodes=in" +
            "&q=" +
            encodeURIComponent(query);

        try {

            const response = await fetch(url, {
                headers: {
                    "Accept": "application/json"
                }
            });

            if (!response.ok) {
                throw new Error(
                    "Location search failed"
                );
            }

            return await response.json();

        } catch (error) {

            console.error(
                "Nominatim error:",
                error
            );

            return [];
        }
    }


    // =========================================
    // DISPLAY SEARCH RESULTS
    // =========================================

    function displaySuggestions(
        results,
        box,
        type
    ) {

        box.innerHTML = "";

        if (!results.length) {
            box.style.display = "none";
            return;
        }

        results.forEach(function (place) {

            const item =
                document.createElement("div");

            item.textContent =
                place.display_name;

            item.style.padding = "10px";
            item.style.cursor = "pointer";
            item.style.borderBottom =
                "1px solid #eee";

            item.addEventListener(
                "mouseenter",
                function () {
                    item.style.background =
                        "#f5f5f5";
                }
            );

            item.addEventListener(
                "mouseleave",
                function () {
                    item.style.background =
                        "#fff";
                }
            );


            item.addEventListener(
                "click",
                function () {

                    selectLocation(
                        place,
                        type
                    );

                    box.style.display =
                        "none";
                }
            );


            box.appendChild(item);

        });

        box.style.display = "block";
    }


    // =========================================
    // SELECT LOCATION
    // =========================================

    function selectLocation(
        place,
        type
    ) {

        const lat =
            parseFloat(place.lat);

        const lon =
            parseFloat(place.lon);

        const placeDetails = {

            formatted_address:
                place.display_name,

            lat: lat,

            lng: lon,

            place_id:
                place.place_id,

            osm_id:
                place.osm_id,

            osm_type:
                place.osm_type
        };


        const $scope =
            window.angularScope;


        if (type === "pickup") {

            pickupPlace =
                placeDetails;

            pickupInput.value =
                place.display_name;


            if (pickupMarker) {

                map.removeLayer(
                    pickupMarker
                );
            }


            pickupMarker =
                L.marker([lat, lon])
                    .addTo(map)
                    .bindPopup("Pickup");


            if ($scope) {

                $scope.$applyAsync(
                    function () {

                        $scope.booking.pickup =
                            place.display_name;

                        $scope.pickupRequired =
                            false;

                    }
                );
            }

        } else {

            dropPlace =
                placeDetails;

            dropInput.value =
                place.display_name;


            if (dropMarker) {

                map.removeLayer(
                    dropMarker
                );
            }


            dropMarker =
                L.marker([lat, lon])
                    .addTo(map)
                    .bindPopup("Drop");


            if ($scope) {

                $scope.$applyAsync(
                    function () {

                        $scope.booking.destination =
                            place.display_name;

                        $scope.dropRequired =
                            false;

                    }
                );
            }
        }


        calculateRoute();
    }


    // =========================================
    // OSRM ROUTE
    // =========================================

    async function calculateRoute() {

        const $scope =
            window.angularScope;


        if (!pickupPlace || !dropPlace) {

            if ($scope) {

                $scope.$applyAsync(
                    function () {

                        $scope.booking.distance =
                            "";

                        $scope.assigned_amount =
                            0;

                    }
                );
            }

            return;
        }


        const url =
            "https://router.project-osrm.org/" +
            "route/v1/driving/" +

            pickupPlace.lng +
            "," +
            pickupPlace.lat +

            ";" +

            dropPlace.lng +
            "," +
            dropPlace.lat +

            "?overview=full" +
            "&geometries=geojson";


        try {

            const response =
                await fetch(url);


            if (!response.ok) {

                throw new Error(
                    "OSRM route failed"
                );
            }


            const data =
                await response.json();


            if (
                data.code !== "Ok" ||
                !data.routes ||
                !data.routes.length
            ) {

                throw new Error(
                    "No driving route found"
                );
            }


            const route =
                data.routes[0];


            // meters → kilometers
            const distanceKm =
                route.distance / 1000;


            // seconds → minutes
            const durationMinutes =
                Math.round(
                    route.duration / 60
                );


            console.log(
                "Distance:",
                distanceKm.toFixed(2),
                "km"
            );

            console.log(
                "ETA:",
                durationMinutes,
                "minutes"
            );


            // =================================
            // UPDATE ANGULAR
            // =================================

            if ($scope) {

                $scope.$applyAsync(
                    function () {

                        $scope.booking.distance =
                            distanceKm.toFixed(2) +
                            " km";


                        $scope.calculateassigned_amount();

                    }
                );
            }


            // =================================
            // REMOVE OLD ROUTE
            // =================================

            if (routeLayer) {

                map.removeLayer(
                    routeLayer
                );
            }


            // =================================
            // DRAW NEW ROUTE
            // =================================

            routeLayer =
                L.geoJSON(
                    route.geometry,
                    {
                        style: {
                            weight: 5,
                            opacity: 0.8
                        }
                    }
                ).addTo(map);


            // Zoom to route
            map.fitBounds(
                routeLayer.getBounds(),
                {
                    padding: [30, 30]
                }
            );


        } catch (error) {

            console.error(
                "Route calculation error:",
                error
            );


            if ($scope) {

                $scope.$applyAsync(
                    function () {

                        $scope.booking.distance =
                            "";

                        $scope.assigned_amount =
                            0;

                    }
                );
            }
        }
    }


    // =========================================
    // PICKUP AUTOCOMPLETE
    // =========================================

    pickupInput.addEventListener(
        "input",
        function () {

            pickupPlace = null;

            clearTimeout(
                pickupTimer
            );


            const query =
                pickupInput.value.trim();


            if (query.length < 3) {

                pickupSuggestions.style.display =
                    "none";

                return;
            }


            pickupTimer =
                setTimeout(
                    async function () {

                        const results =
                            await searchLocation(
                                query
                            );


                        displaySuggestions(
                            results,
                            pickupSuggestions,
                            "pickup"
                        );

                    },
                    500
                );
        }
    );


    // =========================================
    // DROP AUTOCOMPLETE
    // =========================================

    dropInput.addEventListener(
        "input",
        function () {

            dropPlace = null;

            clearTimeout(
                dropTimer
            );


            const query =
                dropInput.value.trim();


            if (query.length < 3) {

                dropSuggestions.style.display =
                    "none";

                return;
            }


            dropTimer =
                setTimeout(
                    async function () {

                        const results =
                            await searchLocation(
                                query
                            );


                        displaySuggestions(
                            results,
                            dropSuggestions,
                            "drop"
                        );

                    },
                    500
                );
        }
    );


    // =========================================
    // CLOSE AUTOCOMPLETE
    // =========================================

    document.addEventListener(
        "click",
        function (event) {

            if (
                event.target !==
                pickupInput
            ) {

                pickupSuggestions.style.display =
                    "none";
            }


            if (
                event.target !==
                dropInput
            ) {

                dropSuggestions.style.display =
                    "none";
            }
        }
    );

};

// Add this to your main app.js file, after you define your module
// This assumes your app module is named 'bookingApp'
angular.module('bookingApp').directive('autofillFix', function ($timeout) {
    return {
        restrict: 'A',
        require: 'ngModel',
        link: function (scope, element, attrs, ngModel) {
            // Use a short timeout to let the browser autofill the value
            $timeout(function () {
                // Manually trigger the 'input' event, which ng-model listens to
                element.triggerHandler('input');
            }, 100); // 100 milliseconds is usually enough
        }
    };
});

// Disable right-click
document.addEventListener('contextmenu', function (e) {
    e.preventDefault();
});

// Disable F12, Ctrl+Shift+I, Ctrl+Shift+J, Ctrl+U
document.addEventListener('keydown', function (e) {
    if (
        e.key === 'F12' ||
        (e.ctrlKey && e.shiftKey && (e.key === 'I' || e.key === 'J')) ||
        (e.ctrlKey && e.key === 'U')
    ) {
        e.preventDefault();
    }
});

document.addEventListener('keydown', function (e) {
    if (
        e.key === 'F12' ||
        (e.ctrlKey && e.shiftKey && ['I', 'J', 'C', 'K'].includes(e.key)) ||
        (e.ctrlKey && e.key === 'U')
    ) {
        e.preventDefault();
    }
});









