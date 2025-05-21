/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function ownKeys(e, r) { var t = Object.keys(e); if (Object.getOwnPropertySymbols) { var o = Object.getOwnPropertySymbols(e); r && (o = o.filter(function (r) { return Object.getOwnPropertyDescriptor(e, r).enumerable; })), t.push.apply(t, o); } return t; }
function _objectSpread(e) { for (var r = 1; r < arguments.length; r++) { var t = null != arguments[r] ? arguments[r] : {}; r % 2 ? ownKeys(Object(t), !0).forEach(function (r) { _defineProperty(e, r, t[r]); }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(t)) : ownKeys(Object(t)).forEach(function (r) { Object.defineProperty(e, r, Object.getOwnPropertyDescriptor(t, r)); }); } return e; }
function _defineProperty(e, r, t) { return (r = _toPropertyKey(r)) in e ? Object.defineProperty(e, r, { value: t, enumerable: !0, configurable: !0, writable: !0 }) : e[r] = t, e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
// Back to top button functionality
var backToTopButton = document.getElementById('back-to-top');
window.addEventListener('scroll', function () {
  if (window.pageYOffset > 300) {
    backToTopButton.classList.remove('opacity-0', 'invisible');
    backToTopButton.classList.add('opacity-100', 'visible');
  } else {
    backToTopButton.classList.add('opacity-0', 'invisible');
    backToTopButton.classList.remove('opacity-100', 'visible');
  }
});
backToTopButton.addEventListener('click', function () {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
});
(function () {
  function c() {
    var b = a.contentDocument || a.contentWindow.document;
    if (b) {
      var d = b.createElement('script');
      d.innerHTML = "window.__CF$cv$params={r:'9395e34806ac17a7',t:'MTc0NjE3MTgwOC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";
      b.getElementsByTagName('head')[0].appendChild(d);
    }
  }
  if (document.body) {
    var a = document.createElement('iframe');
    a.height = 1;
    a.width = 1;
    a.style.position = 'absolute';
    a.style.top = 0;
    a.style.left = 0;
    a.style.border = 'none';
    a.style.visibility = 'hidden';
    document.body.appendChild(a);
    if ('loading' !== document.readyState) c();else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c);else {
      var e = document.onreadystatechange || function () {};
      document.onreadystatechange = function (b) {
        e(b);
        'loading' !== document.readyState && (document.onreadystatechange = e, c());
      };
    }
  }
})();
var btn = document.getElementById('mobile-menu-button');
var menu = document.getElementById('mobile-menu');

// Toggle menu
btn.addEventListener('click', function (e) {
  e.stopPropagation();
  menu.classList.toggle('hidden');
});

// Close menu when clicking outside
document.addEventListener('click', function (e) {
  var isClickInsideMenu = menu.contains(e.target);
  var isClickOnButton = btn.contains(e.target);
  if (!isClickInsideMenu && !isClickOnButton) {
    menu.classList.add('hidden');
  }
});

// Close menu when a link inside it is clicked
var links = menu.querySelectorAll('a');
links.forEach(function (link) {
  link.addEventListener('click', function () {
    menu.classList.add('hidden');
  });
});
var navLinks = document.querySelectorAll('.nav-link');
navLinks.forEach(function (link) {
  if (link.href === window.location.href) {
    link.classList.add('text-yellow-400', 'font-semibold');
  } else {
    link.classList.remove('text-yellow-400', 'font-semibold');
  }
});

// Declare global variables to store place details from Autocomplete
// These need to be accessible across different event listeners.
var pickupPlace = null;
var dropPlace = null;

// Define the Angular module and controller
angular.module('bookingApp', []) // Changed module name to bookingApp
.controller('BookingController', function ($scope, $http, $filter) {
  // Inject $filter for currency
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
  $http.get('/pricings').then(function (response) {
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
  })["catch"](function (error) {
    console.error("Error fetching pricings:", error);
    // Optionally show an error message to the user
  });

  // Function to calculate assigned amount based on distance, vehicle, trip type, and days
  $scope.calculateassigned_amount = function () {
    var distanceInKm = parseFloat($scope.booking.distance.replace(' km', '').replace(',', ''));
    var selectedVehicle = $scope.booking.vehicle;
    var selectedTripType = $scope.booking.tripType;
    var numberOfDays = parseInt($scope.booking.no_of_days) || 1; // Default to 1 if not round trip or days not selected
    var calculatedPrice = 0;
    if (!isNaN(distanceInKm) && selectedVehicle && selectedTripType && $scope.pricings.length > 0) {
      var pricingRule = $scope.pricings.find(function (pricing) {
        return pricing.vehicle_type.toLowerCase() === selectedVehicle.toLowerCase() && pricing.trip_type.toLowerCase() === (selectedTripType === 'oneway' ? 'one-way' : 'round trip').toLowerCase();
      });
      if (pricingRule && pricingRule.base_price_per_km !== undefined && pricingRule.minimum_distance !== undefined) {
        var basePricePerKm = parseFloat(pricingRule.base_price_per_km);
        var minDistance = parseFloat(pricingRule.minimum_distance);
        var isRoundTrip = selectedTripType === 'round';
        var billingDistance = Math.max(distanceInKm, minDistance);
        var baseFare = billingDistance * basePricePerKm;
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
      var formattedDate = $scope.booking.date ? $filter('date')($scope.booking.date, 'yyyy-MM-dd') : null;
      var timeString = $scope.booking.time ? String($scope.booking.time) : '00:00';
      var timeParts = timeString.split(':');
      var hours = timeParts[0] || '00';
      var minutes = timeParts[1] || '00';
      var seconds = '00';
      var formattedTime = "".concat(hours, ":").concat(minutes, ":").concat(seconds);
      var finalBooking = _objectSpread(_objectSpread({}, $scope.booking), {}, {
        pickup_details: pickupPlace,
        destination_details: dropPlace,
        date: formattedDate,
        time: formattedTime,
        assigned_amount: $scope.assigned_amount
      });

      // Send booking data to backend (mocked for this example)
      // In a real application, replace this with your actual API endpoint
      $http.post('/add/bookings', finalBooking).then(function (response) {
        // Telegram bot integration
        var telegramBotToken = '7564604815:AAHJIDEaXESZ67a48uNX8xkD4_zPPS8T640';
        var chatIds = ['1259937658', '1247656681']; // Array of chat IDs

        var message = "\n\uD83D\uDE96 *New Booking Received* \uD83D\uDE96\n\n\uD83D\uDC64 *Name:* ".concat(finalBooking.name, "\n\uD83D\uDCE7 *Email:* ").concat(finalBooking.email, "\n\uD83D\uDCDE *Contact:* ").concat(finalBooking.contact, "\n\n\uD83D\uDCCD *Pickup:* ").concat(finalBooking.pickup, "\n\uD83D\uDCCD *Destination:* ").concat(finalBooking.destination, "\n\uD83D\uDCC5 *Date:* ").concat(formattedDate, "\n\u23F0 *Time:* ").concat(formattedTime, "\n\n\uD83D\uDE97 *Vehicle:* ").concat(finalBooking.vehicle, "\n\uD83E\uDDCD *Passengers:* ").concat(finalBooking.passengers, "\n\uD83D\uDCCF *Distance:* ").concat(finalBooking.distance, "\n\uD83D\uDD01 *Trip Type:* ").concat(finalBooking.tripType, "\n\uD83D\uDDD3\uFE0F *No. of Days:* ").concat(finalBooking.no_of_days, "\n\n\uD83D\uDCB0 *Total Amount:* \u20B9").concat($scope.assigned_amount, "\n");
        chatIds.forEach(function (chatId) {
          $http.post("https://api.telegram.org/bot".concat(telegramBotToken, "/sendMessage"), {
            chat_id: chatId,
            text: message,
            parse_mode: 'Markdown'
          }).then(function () {})["catch"](function (err) {});
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
      })["catch"](function (error) {
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
  var pickupInput = document.querySelector('input[ng-model="booking.pickup"]');
  var dropInput = document.querySelector('input[ng-model="booking.destination"]');
  var mapElement = document.getElementById("map");

  // If any required elements are not found, log an error and return.
  // This prevents further errors and indicates a problem with DOM readiness or selection.
  if (!pickupInput || !dropInput || !mapElement) {
    console.error("Map elements (pickupInput, dropInput, or map div) not found. Cannot initialize Google Maps.");
    return;
  }

  // Options for Google Places Autocomplete, restricting to India.
  var options = {
    componentRestrictions: {
      country: 'in'
    }
  };

  // Initialize Autocomplete for pickup and destination input fields.
  var pickupAutocomplete = new google.maps.places.Autocomplete(pickupInput, options);
  var dropAutocomplete = new google.maps.places.Autocomplete(dropInput, options);

  // Initialize Google Maps Directions Service and Renderer.
  var directionsService = new google.maps.DirectionsService();
  var directionsRenderer = new google.maps.DirectionsRenderer(); // Corrected initialization
  directionsRenderer.setMap(new google.maps.Map(mapElement, {
    // Initialize map here
    zoom: 7,
    center: {
      lat: 11.1271,
      lng: 78.6569
    } // Centered on Tamil Nadu, India
  }));

  /**
   * Calculates the distance and displays the route on the map.
   * Updates the AngularJS scope with distance and calculated amount.
   */
  function calculateDistance() {
    // Retrieve the AngularJS $scope from the global window object.
    var $scope = window.angularScope;
    if (!$scope) {
      console.error("$scope not available for distance calculation. Ensure it's exposed globally.");
      return;
    }

    // Determine the origin and destination for the directions request.
    // Prioritize formatted address from place data if available, otherwise use input value.
    var origin = pickupPlace ? pickupPlace.formatted_address : pickupInput.value;
    var destination = dropPlace ? dropPlace.formatted_address : dropInput.value;
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
          var route = response.routes[0];
          var distanceText = route.legs[0].distance.text;

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
    var place = pickupAutocomplete.getPlace();
    var $scope = window.angularScope; // Re-get $scope for the listener
    if (!$scope) return; // Exit if $scope is not available

    if (place && place.geometry) {
      pickupPlace = place; // Store the selected place details
      calculateDistance(); // Recalculate distance
      $scope.$apply(function () {
        $scope.booking.pickup = place.formatted_address || ''; // Update Angular model
        $scope.pickupRequired = false; // Clear validation error
      });
    } else {
      // If no valid place is selected, clear related data and set validation
      pickupPlace = null;
      $scope.$apply(function () {
        $scope.booking.pickup = '';
        $scope.booking.distance = '';
        $scope.assigned_amount = 0;
        $scope.pickupRequired = true;
      });
    }
  });

  // Listen for 'place_changed' event on drop Autocomplete
  dropAutocomplete.addListener('place_changed', function () {
    var place = dropAutocomplete.getPlace();
    var $scope = window.angularScope; // Re-get $scope for the listener
    if (!$scope) return; // Exit if $scope is not available

    if (place && place.geometry) {
      dropPlace = place; // Store the selected place details
      calculateDistance(); // Recalculate distance
      $scope.$apply(function () {
        $scope.booking.destination = place.formatted_address || ''; // Update Angular model
        $scope.dropRequired = false; // Clear validation error
      });
    } else {
      // If no valid place is selected, clear related data and set validation
      dropPlace = null;
      $scope.$apply(function () {
        $scope.booking.destination = '';
        $scope.booking.distance = '';
        $scope.assigned_amount = 0;
        $scope.dropRequired = true;
      });
    }
  });
}; // End of window.initMap function

/***/ }),

/***/ "./resources/scss/adminLogin.scss":
/*!****************************************!*\
  !*** ./resources/scss/adminLogin.scss ***!
  \****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/scss/admindashboard.scss":
/*!********************************************!*\
  !*** ./resources/scss/admindashboard.scss ***!
  \********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/scss/app.scss":
/*!*********************************!*\
  !*** ./resources/scss/app.scss ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/app": 0,
/******/ 			"css/adminLogin": 0,
/******/ 			"css/admindashboard": 0,
/******/ 			"css/app": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/adminLogin","css/admindashboard","css/app"], () => (__webpack_require__("./resources/js/app.js")))
/******/ 	__webpack_require__.O(undefined, ["css/adminLogin","css/admindashboard","css/app"], () => (__webpack_require__("./resources/scss/app.scss")))
/******/ 	__webpack_require__.O(undefined, ["css/adminLogin","css/admindashboard","css/app"], () => (__webpack_require__("./resources/scss/admindashboard.scss")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/adminLogin","css/admindashboard","css/app"], () => (__webpack_require__("./resources/scss/adminLogin.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;