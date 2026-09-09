/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ (() => {

function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _regeneratorRuntime() { "use strict"; /*! regenerator-runtime -- Copyright (c) 2014-present, Facebook, Inc. -- license (MIT): https://github.com/babel/babel/blob/main/packages/babel-helpers/LICENSE */ _regeneratorRuntime = function _regeneratorRuntime() { return r; }; var t, r = {}, e = Object.prototype, n = e.hasOwnProperty, o = "function" == typeof Symbol ? Symbol : {}, i = o.iterator || "@@iterator", a = o.asyncIterator || "@@asyncIterator", u = o.toStringTag || "@@toStringTag"; function c(t, r, e, n) { return Object.defineProperty(t, r, { value: e, enumerable: !n, configurable: !n, writable: !n }); } try { c({}, ""); } catch (t) { c = function c(t, r, e) { return t[r] = e; }; } function h(r, e, n, o) { var i = e && e.prototype instanceof Generator ? e : Generator, a = Object.create(i.prototype); return c(a, "_invoke", function (r, e, n) { var o = 1; return function (i, a) { if (3 === o) throw Error("Generator is already running"); if (4 === o) { if ("throw" === i) throw a; return { value: t, done: !0 }; } for (n.method = i, n.arg = a;;) { var u = n.delegate; if (u) { var c = d(u, n); if (c) { if (c === f) continue; return c; } } if ("next" === n.method) n.sent = n._sent = n.arg;else if ("throw" === n.method) { if (1 === o) throw o = 4, n.arg; n.dispatchException(n.arg); } else "return" === n.method && n.abrupt("return", n.arg); o = 3; var h = s(r, e, n); if ("normal" === h.type) { if (o = n.done ? 4 : 2, h.arg === f) continue; return { value: h.arg, done: n.done }; } "throw" === h.type && (o = 4, n.method = "throw", n.arg = h.arg); } }; }(r, n, new Context(o || [])), !0), a; } function s(t, r, e) { try { return { type: "normal", arg: t.call(r, e) }; } catch (t) { return { type: "throw", arg: t }; } } r.wrap = h; var f = {}; function Generator() {} function GeneratorFunction() {} function GeneratorFunctionPrototype() {} var l = {}; c(l, i, function () { return this; }); var p = Object.getPrototypeOf, y = p && p(p(x([]))); y && y !== e && n.call(y, i) && (l = y); var v = GeneratorFunctionPrototype.prototype = Generator.prototype = Object.create(l); function g(t) { ["next", "throw", "return"].forEach(function (r) { c(t, r, function (t) { return this._invoke(r, t); }); }); } function AsyncIterator(t, r) { function e(o, i, a, u) { var c = s(t[o], t, i); if ("throw" !== c.type) { var h = c.arg, f = h.value; return f && "object" == _typeof(f) && n.call(f, "__await") ? r.resolve(f.__await).then(function (t) { e("next", t, a, u); }, function (t) { e("throw", t, a, u); }) : r.resolve(f).then(function (t) { h.value = t, a(h); }, function (t) { return e("throw", t, a, u); }); } u(c.arg); } var o; c(this, "_invoke", function (t, n) { function i() { return new r(function (r, o) { e(t, n, r, o); }); } return o = o ? o.then(i, i) : i(); }, !0); } function d(r, e) { var n = e.method, o = r.i[n]; if (o === t) return e.delegate = null, "throw" === n && r.i["return"] && (e.method = "return", e.arg = t, d(r, e), "throw" === e.method) || "return" !== n && (e.method = "throw", e.arg = new TypeError("The iterator does not provide a '" + n + "' method")), f; var i = s(o, r.i, e.arg); if ("throw" === i.type) return e.method = "throw", e.arg = i.arg, e.delegate = null, f; var a = i.arg; return a ? a.done ? (e[r.r] = a.value, e.next = r.n, "return" !== e.method && (e.method = "next", e.arg = t), e.delegate = null, f) : a : (e.method = "throw", e.arg = new TypeError("iterator result is not an object"), e.delegate = null, f); } function w(t) { this.tryEntries.push(t); } function m(r) { var e = r[4] || {}; e.type = "normal", e.arg = t, r[4] = e; } function Context(t) { this.tryEntries = [[-1]], t.forEach(w, this), this.reset(!0); } function x(r) { if (null != r) { var e = r[i]; if (e) return e.call(r); if ("function" == typeof r.next) return r; if (!isNaN(r.length)) { var o = -1, a = function e() { for (; ++o < r.length;) if (n.call(r, o)) return e.value = r[o], e.done = !1, e; return e.value = t, e.done = !0, e; }; return a.next = a; } } throw new TypeError(_typeof(r) + " is not iterable"); } return GeneratorFunction.prototype = GeneratorFunctionPrototype, c(v, "constructor", GeneratorFunctionPrototype), c(GeneratorFunctionPrototype, "constructor", GeneratorFunction), GeneratorFunction.displayName = c(GeneratorFunctionPrototype, u, "GeneratorFunction"), r.isGeneratorFunction = function (t) { var r = "function" == typeof t && t.constructor; return !!r && (r === GeneratorFunction || "GeneratorFunction" === (r.displayName || r.name)); }, r.mark = function (t) { return Object.setPrototypeOf ? Object.setPrototypeOf(t, GeneratorFunctionPrototype) : (t.__proto__ = GeneratorFunctionPrototype, c(t, u, "GeneratorFunction")), t.prototype = Object.create(v), t; }, r.awrap = function (t) { return { __await: t }; }, g(AsyncIterator.prototype), c(AsyncIterator.prototype, a, function () { return this; }), r.AsyncIterator = AsyncIterator, r.async = function (t, e, n, o, i) { void 0 === i && (i = Promise); var a = new AsyncIterator(h(t, e, n, o), i); return r.isGeneratorFunction(e) ? a : a.next().then(function (t) { return t.done ? t.value : a.next(); }); }, g(v), c(v, u, "Generator"), c(v, i, function () { return this; }), c(v, "toString", function () { return "[object Generator]"; }), r.keys = function (t) { var r = Object(t), e = []; for (var n in r) e.unshift(n); return function t() { for (; e.length;) if ((n = e.pop()) in r) return t.value = n, t.done = !1, t; return t.done = !0, t; }; }, r.values = x, Context.prototype = { constructor: Context, reset: function reset(r) { if (this.prev = this.next = 0, this.sent = this._sent = t, this.done = !1, this.delegate = null, this.method = "next", this.arg = t, this.tryEntries.forEach(m), !r) for (var e in this) "t" === e.charAt(0) && n.call(this, e) && !isNaN(+e.slice(1)) && (this[e] = t); }, stop: function stop() { this.done = !0; var t = this.tryEntries[0][4]; if ("throw" === t.type) throw t.arg; return this.rval; }, dispatchException: function dispatchException(r) { if (this.done) throw r; var e = this; function n(t) { a.type = "throw", a.arg = r, e.next = t; } for (var o = e.tryEntries.length - 1; o >= 0; --o) { var i = this.tryEntries[o], a = i[4], u = this.prev, c = i[1], h = i[2]; if (-1 === i[0]) return n("end"), !1; if (!c && !h) throw Error("try statement without catch or finally"); if (null != i[0] && i[0] <= u) { if (u < c) return this.method = "next", this.arg = t, n(c), !0; if (u < h) return n(h), !1; } } }, abrupt: function abrupt(t, r) { for (var e = this.tryEntries.length - 1; e >= 0; --e) { var n = this.tryEntries[e]; if (n[0] > -1 && n[0] <= this.prev && this.prev < n[2]) { var o = n; break; } } o && ("break" === t || "continue" === t) && o[0] <= r && r <= o[2] && (o = null); var i = o ? o[4] : {}; return i.type = t, i.arg = r, o ? (this.method = "next", this.next = o[2], f) : this.complete(i); }, complete: function complete(t, r) { if ("throw" === t.type) throw t.arg; return "break" === t.type || "continue" === t.type ? this.next = t.arg : "return" === t.type ? (this.rval = this.arg = t.arg, this.method = "return", this.next = "end") : "normal" === t.type && r && (this.next = r), f; }, finish: function finish(t) { for (var r = this.tryEntries.length - 1; r >= 0; --r) { var e = this.tryEntries[r]; if (e[2] === t) return this.complete(e[4], e[3]), m(e), f; } }, "catch": function _catch(t) { for (var r = this.tryEntries.length - 1; r >= 0; --r) { var e = this.tryEntries[r]; if (e[0] === t) { var n = e[4]; if ("throw" === n.type) { var o = n.arg; m(e); } return o; } } throw Error("illegal catch attempt"); }, delegateYield: function delegateYield(r, e, n) { return this.delegate = { i: x(r), r: e, n: n }, "next" === this.method && (this.arg = t), f; } }, r; }
function asyncGeneratorStep(n, t, e, r, o, a, c) { try { var i = n[a](c), u = i.value; } catch (n) { return void e(n); } i.done ? t(u) : Promise.resolve(u).then(r, o); }
function _asyncToGenerator(n) { return function () { var t = this, e = arguments; return new Promise(function (r, o) { var a = n.apply(t, e); function _next(n) { asyncGeneratorStep(a, r, o, _next, _throw, "next", n); } function _throw(n) { asyncGeneratorStep(a, r, o, _next, _throw, "throw", n); } _next(void 0); }); }; }
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

      // Convert to 12-hour format for display
      var displayHours = hours % 12 || 12; // Convert to 12-hour format
      var ampm = hours >= 12 ? 'PM' : 'AM';
      var displayTime = "".concat(displayHours, ":").concat(minutes, " ").concat(ampm);
      var finalBooking = _objectSpread(_objectSpread({}, $scope.booking), {}, {
        pickup_details: pickupPlace,
        destination_details: dropPlace,
        date: formattedDate,
        time: formattedTime,
        // Keep 24-hour format for backend
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
  var pickupInput = document.querySelector('input[ng-model="booking.pickup"]');
  var dropInput = document.querySelector('input[ng-model="booking.destination"]');
  var mapElement = document.getElementById("map");
  if (!pickupInput || !dropInput || !mapElement) {
    console.error("Pickup, drop or map element not found.");
    return;
  }

  // =========================================
  // LEAFLET MAP
  // =========================================

  var map = L.map("map").setView([11.1271, 78.6569], 7);

  // =========================================
  // OPENSTREETMAP
  // =========================================

  L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
    maxZoom: 19,
    attribution: '&copy; OpenStreetMap contributors'
  }).addTo(map);
  var pickupMarker = null;
  var dropMarker = null;
  var routeLayer = null;
  var pickupTimer = null;
  var dropTimer = null;

  // =========================================
  // CREATE AUTOCOMPLETE BOX
  // =========================================

  function createSuggestionBox(input) {
    var wrapper = input.parentElement;
    if (window.getComputedStyle(wrapper).position === "static") {
      wrapper.style.position = "relative";
    }
    var box = document.createElement("div");
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
  var pickupSuggestions = createSuggestionBox(pickupInput);
  var dropSuggestions = createSuggestionBox(dropInput);

  // =========================================
  // NOMINATIM LOCATION SEARCH
  // =========================================
  function searchLocation(_x) {
    return _searchLocation.apply(this, arguments);
  } // =========================================
  // DISPLAY SEARCH RESULTS
  // =========================================
  function _searchLocation() {
    _searchLocation = _asyncToGenerator(/*#__PURE__*/_regeneratorRuntime().mark(function _callee3(query) {
      var url, response;
      return _regeneratorRuntime().wrap(function _callee3$(_context3) {
        while (1) switch (_context3.prev = _context3.next) {
          case 0:
            if (!(!query || query.length < 3)) {
              _context3.next = 2;
              break;
            }
            return _context3.abrupt("return", []);
          case 2:
            url = "https://nominatim.openstreetmap.org/search" + "?format=json" + "&addressdetails=1" + "&limit=5" + "&countrycodes=in" + "&q=" + encodeURIComponent(query);
            _context3.prev = 3;
            _context3.next = 6;
            return fetch(url, {
              headers: {
                "Accept": "application/json"
              }
            });
          case 6:
            response = _context3.sent;
            if (response.ok) {
              _context3.next = 9;
              break;
            }
            throw new Error("Location search failed");
          case 9:
            _context3.next = 11;
            return response.json();
          case 11:
            return _context3.abrupt("return", _context3.sent);
          case 14:
            _context3.prev = 14;
            _context3.t0 = _context3["catch"](3);
            console.error("Nominatim error:", _context3.t0);
            return _context3.abrupt("return", []);
          case 18:
          case "end":
            return _context3.stop();
        }
      }, _callee3, null, [[3, 14]]);
    }));
    return _searchLocation.apply(this, arguments);
  }
  function displaySuggestions(results, box, type) {
    box.innerHTML = "";
    if (!results.length) {
      box.style.display = "none";
      return;
    }
    results.forEach(function (place) {
      var item = document.createElement("div");
      item.textContent = place.display_name;
      item.style.padding = "10px";
      item.style.cursor = "pointer";
      item.style.borderBottom = "1px solid #eee";
      item.addEventListener("mouseenter", function () {
        item.style.background = "#f5f5f5";
      });
      item.addEventListener("mouseleave", function () {
        item.style.background = "#fff";
      });
      item.addEventListener("click", function () {
        selectLocation(place, type);
        box.style.display = "none";
      });
      box.appendChild(item);
    });
    box.style.display = "block";
  }

  // =========================================
  // SELECT LOCATION
  // =========================================

  function selectLocation(place, type) {
    var lat = parseFloat(place.lat);
    var lon = parseFloat(place.lon);
    var placeDetails = {
      formatted_address: place.display_name,
      lat: lat,
      lng: lon,
      place_id: place.place_id,
      osm_id: place.osm_id,
      osm_type: place.osm_type
    };
    var $scope = window.angularScope;
    if (type === "pickup") {
      pickupPlace = placeDetails;
      pickupInput.value = place.display_name;
      if (pickupMarker) {
        map.removeLayer(pickupMarker);
      }
      pickupMarker = L.marker([lat, lon]).addTo(map).bindPopup("Pickup");
      if ($scope) {
        $scope.$applyAsync(function () {
          $scope.booking.pickup = place.display_name;
          $scope.pickupRequired = false;
        });
      }
    } else {
      dropPlace = placeDetails;
      dropInput.value = place.display_name;
      if (dropMarker) {
        map.removeLayer(dropMarker);
      }
      dropMarker = L.marker([lat, lon]).addTo(map).bindPopup("Drop");
      if ($scope) {
        $scope.$applyAsync(function () {
          $scope.booking.destination = place.display_name;
          $scope.dropRequired = false;
        });
      }
    }
    calculateRoute();
  }

  // =========================================
  // OSRM ROUTE
  // =========================================
  function calculateRoute() {
    return _calculateRoute.apply(this, arguments);
  } // =========================================
  // PICKUP AUTOCOMPLETE
  // =========================================
  function _calculateRoute() {
    _calculateRoute = _asyncToGenerator(/*#__PURE__*/_regeneratorRuntime().mark(function _callee4() {
      var $scope, url, response, data, route, distanceKm, durationMinutes;
      return _regeneratorRuntime().wrap(function _callee4$(_context4) {
        while (1) switch (_context4.prev = _context4.next) {
          case 0:
            $scope = window.angularScope;
            if (!(!pickupPlace || !dropPlace)) {
              _context4.next = 4;
              break;
            }
            if ($scope) {
              $scope.$applyAsync(function () {
                $scope.booking.distance = "";
                $scope.assigned_amount = 0;
              });
            }
            return _context4.abrupt("return");
          case 4:
            url = "https://router.project-osrm.org/" + "route/v1/driving/" + pickupPlace.lng + "," + pickupPlace.lat + ";" + dropPlace.lng + "," + dropPlace.lat + "?overview=full" + "&geometries=geojson";
            _context4.prev = 5;
            _context4.next = 8;
            return fetch(url);
          case 8:
            response = _context4.sent;
            if (response.ok) {
              _context4.next = 11;
              break;
            }
            throw new Error("OSRM route failed");
          case 11:
            _context4.next = 13;
            return response.json();
          case 13:
            data = _context4.sent;
            if (!(data.code !== "Ok" || !data.routes || !data.routes.length)) {
              _context4.next = 16;
              break;
            }
            throw new Error("No driving route found");
          case 16:
            route = data.routes[0]; // meters → kilometers
            distanceKm = route.distance / 1000; // seconds → minutes
            durationMinutes = Math.round(route.duration / 60);
            console.log("Distance:", distanceKm.toFixed(2), "km");
            console.log("ETA:", durationMinutes, "minutes");

            // =================================
            // UPDATE ANGULAR
            // =================================

            if ($scope) {
              $scope.$applyAsync(function () {
                $scope.booking.distance = distanceKm.toFixed(2) + " km";
                $scope.calculateassigned_amount();
              });
            }

            // =================================
            // REMOVE OLD ROUTE
            // =================================

            if (routeLayer) {
              map.removeLayer(routeLayer);
            }

            // =================================
            // DRAW NEW ROUTE
            // =================================

            routeLayer = L.geoJSON(route.geometry, {
              style: {
                weight: 5,
                opacity: 0.8
              }
            }).addTo(map);

            // Zoom to route
            map.fitBounds(routeLayer.getBounds(), {
              padding: [30, 30]
            });
            _context4.next = 31;
            break;
          case 27:
            _context4.prev = 27;
            _context4.t0 = _context4["catch"](5);
            console.error("Route calculation error:", _context4.t0);
            if ($scope) {
              $scope.$applyAsync(function () {
                $scope.booking.distance = "";
                $scope.assigned_amount = 0;
              });
            }
          case 31:
          case "end":
            return _context4.stop();
        }
      }, _callee4, null, [[5, 27]]);
    }));
    return _calculateRoute.apply(this, arguments);
  }
  pickupInput.addEventListener("input", function () {
    pickupPlace = null;
    clearTimeout(pickupTimer);
    var query = pickupInput.value.trim();
    if (query.length < 3) {
      pickupSuggestions.style.display = "none";
      return;
    }
    pickupTimer = setTimeout(/*#__PURE__*/_asyncToGenerator(/*#__PURE__*/_regeneratorRuntime().mark(function _callee() {
      var results;
      return _regeneratorRuntime().wrap(function _callee$(_context) {
        while (1) switch (_context.prev = _context.next) {
          case 0:
            _context.next = 2;
            return searchLocation(query);
          case 2:
            results = _context.sent;
            displaySuggestions(results, pickupSuggestions, "pickup");
          case 4:
          case "end":
            return _context.stop();
        }
      }, _callee);
    })), 500);
  });

  // =========================================
  // DROP AUTOCOMPLETE
  // =========================================

  dropInput.addEventListener("input", function () {
    dropPlace = null;
    clearTimeout(dropTimer);
    var query = dropInput.value.trim();
    if (query.length < 3) {
      dropSuggestions.style.display = "none";
      return;
    }
    dropTimer = setTimeout(/*#__PURE__*/_asyncToGenerator(/*#__PURE__*/_regeneratorRuntime().mark(function _callee2() {
      var results;
      return _regeneratorRuntime().wrap(function _callee2$(_context2) {
        while (1) switch (_context2.prev = _context2.next) {
          case 0:
            _context2.next = 2;
            return searchLocation(query);
          case 2:
            results = _context2.sent;
            displaySuggestions(results, dropSuggestions, "drop");
          case 4:
          case "end":
            return _context2.stop();
        }
      }, _callee2);
    })), 500);
  });

  // =========================================
  // CLOSE AUTOCOMPLETE
  // =========================================

  document.addEventListener("click", function (event) {
    if (event.target !== pickupInput) {
      pickupSuggestions.style.display = "none";
    }
    if (event.target !== dropInput) {
      dropSuggestions.style.display = "none";
    }
  });
};

// Add this to your main app.js file, after you define your module
// This assumes your app module is named 'bookingApp'
angular.module('bookingApp').directive('autofillFix', function ($timeout) {
  return {
    restrict: 'A',
    require: 'ngModel',
    link: function link(scope, element, attrs, ngModel) {
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
  if (e.key === 'F12' || e.ctrlKey && e.shiftKey && (e.key === 'I' || e.key === 'J') || e.ctrlKey && e.key === 'U') {
    e.preventDefault();
  }
});
document.addEventListener('keydown', function (e) {
  if (e.key === 'F12' || e.ctrlKey && e.shiftKey && ['I', 'J', 'C', 'K'].includes(e.key) || e.ctrlKey && e.key === 'U') {
    e.preventDefault();
  }
});

/***/ }),

/***/ "./resources/scss/adminLogin.scss":
/*!****************************************!*\
  !*** ./resources/scss/adminLogin.scss ***!
  \****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/scss/admindashboard.scss":
/*!********************************************!*\
  !*** ./resources/scss/admindashboard.scss ***!
  \********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/scss/app.scss":
/*!*********************************!*\
  !*** ./resources/scss/app.scss ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
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