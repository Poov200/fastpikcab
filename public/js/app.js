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

  var pickupPlace;
  var dropPlace;
  $http.get('/api/pricings').then(function (response) {
    $scope.pricings = response.data;
    console.log("Pricings fetched:", $scope.pricings);
  })["catch"](function (error) {
    console.error("Error fetching pricings:", error);
  });
  window.initMap = function () {
    var pickupInput = document.querySelector('input[ng-model="booking.pickup"]');
    var dropInput = document.querySelector('input[ng-model="booking.destination"]');
    if (!pickupInput || !dropInput) {
      console.error("Pickup and destination inputs must be <input> elements.");
      return;
    }
    var options = {
      componentRestrictions: {
        country: 'in'
      }
    };
    var pickupAutocomplete = new google.maps.places.Autocomplete(pickupInput, options);
    var dropAutocomplete = new google.maps.places.Autocomplete(dropInput, options);
    var directionsService = new google.maps.DirectionsService();
    var map = new google.maps.Map(document.getElementById("map"), {
      zoom: 7,
      center: {
        lat: 11.1271,
        lng: 78.6569
      }
    });
    var directionsRenderer = new google.maps.DirectionsRenderer();
    directionsRenderer.setMap(map);
    function calculateDistance() {
      var origin = pickupPlace ? pickupPlace.formatted_address : pickupInput.value;
      var destination = dropPlace ? dropPlace.formatted_address : dropInput.value;
      if (origin && destination) {
        directionsService.route({
          origin: origin,
          destination: destination,
          travelMode: google.maps.TravelMode.DRIVING
        }, function (response, status) {
          if (status === google.maps.DirectionsStatus.OK) {
            directionsRenderer.setDirections(response);
            var route = response.routes[0];
            var distanceText = route.legs[0].distance.text;
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
      var place = pickupAutocomplete.getPlace();
      if (place && place.geometry) {
        pickupPlace = place;
        calculateDistance();
        $scope.$apply(function () {
          $scope.booking.pickup = place.formatted_address || '';
          $scope.pickupRequired = false;
        });
      } else {
        pickupPlace = null;
        $scope.$apply(function () {
          $scope.booking.pickup = '';
          $scope.booking.distance = '';
          $scope.assigned_amount = 0;
          $scope.pickupRequired = true;
        });
        console.log("Pickup location not found or cleared.");
      }
    });
    dropAutocomplete.addListener('place_changed', function () {
      var place = dropAutocomplete.getPlace();
      if (place && place.geometry) {
        dropPlace = place;
        calculateDistance();
        $scope.$apply(function () {
          $scope.booking.destination = place.formatted_address || '';
          $scope.dropRequired = false;
        });
      } else {
        dropPlace = null;
        $scope.$apply(function () {
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
        if (distanceInKm < 300 && pricingRule.driver_beta_300 !== undefined) {
          calculatedPrice += parseFloat(pricingRule.driver_beta_300) * (isRoundTrip ? numberOfDays : 1);
        } else if (distanceInKm > 500 && pricingRule.driver_beta_500 !== undefined) {
          calculatedPrice += parseFloat(pricingRule.driver_beta_500) * (isRoundTrip ? numberOfDays : 1);
        }
        $scope.assigned_amount = calculatedPrice;
        console.log("Pricing rule found:", pricingRule, "Total Price:", $scope.assigned_amount, "Round Trip:", isRoundTrip, "Days:", numberOfDays);
      } else {
        $scope.assigned_amount = 0;
        console.warn("No pricing rule found or missing data for ".concat(selectedVehicle, " and ").concat(selectedTripType));
      }
    } else {
      $scope.assigned_amount = 0;
    }
  };
  $scope.$watchGroup(['booking.vehicle', 'booking.tripType', 'booking.no_of_days'], function (newValues, oldValues) {
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
      var formattedDate = new Date($scope.booking.date).toISOString().split('T')[0];
      var timeString = String($scope.booking.time);
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
      $http.post('/api/add/bookings', finalBooking).then(function (response) {
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
      })["catch"](function (error) {
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