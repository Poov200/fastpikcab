/******/ (() => { // webpackBootstrap
/*!*******************************************!*\
  !*** ./resources/js/adminjsController.js ***!
  \*******************************************/
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _toConsumableArray(r) { return _arrayWithoutHoles(r) || _iterableToArray(r) || _unsupportedIterableToArray(r) || _nonIterableSpread(); }
function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }
function _unsupportedIterableToArray(r, a) { if (r) { if ("string" == typeof r) return _arrayLikeToArray(r, a); var t = {}.toString.call(r).slice(8, -1); return "Object" === t && r.constructor && (t = r.constructor.name), "Map" === t || "Set" === t ? Array.from(r) : "Arguments" === t || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(t) ? _arrayLikeToArray(r, a) : void 0; } }
function _iterableToArray(r) { if ("undefined" != typeof Symbol && null != r[Symbol.iterator] || null != r["@@iterator"]) return Array.from(r); }
function _arrayWithoutHoles(r) { if (Array.isArray(r)) return _arrayLikeToArray(r); }
function _arrayLikeToArray(r, a) { (null == a || a > r.length) && (a = r.length); for (var e = 0, n = Array(a); e < a; e++) n[e] = r[e]; return n; }
function ownKeys(e, r) { var t = Object.keys(e); if (Object.getOwnPropertySymbols) { var o = Object.getOwnPropertySymbols(e); r && (o = o.filter(function (r) { return Object.getOwnPropertyDescriptor(e, r).enumerable; })), t.push.apply(t, o); } return t; }
function _objectSpread(e) { for (var r = 1; r < arguments.length; r++) { var t = null != arguments[r] ? arguments[r] : {}; r % 2 ? ownKeys(Object(t), !0).forEach(function (r) { _defineProperty(e, r, t[r]); }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(t)) : ownKeys(Object(t)).forEach(function (r) { Object.defineProperty(e, r, Object.getOwnPropertyDescriptor(t, r)); }); } return e; }
function _defineProperty(e, r, t) { return (r = _toPropertyKey(r)) in e ? Object.defineProperty(e, r, { value: t, enumerable: !0, configurable: !0, writable: !0 }) : e[r] = t, e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
var app = angular.module('RouteApp', []);
app.controller('RouteController', function ($scope, $http, $timeout) {
  $scope.routes = [];
  $scope.form = {};
  $scope.loading = true;
  $scope.notification = null;
  $scope.getRoutes = function () {
    $scope.loading = true;
    $http.get('/routes').then(function (res) {
      $scope.routes = res.data;
      $scope.loading = false;
    })["catch"](function (err) {
      $scope.showNotification('Error loading routes', 'error');
      $scope.loading = false;
    });
  };
  $scope.saveRoute = function () {
    if ($scope.form.id) {
      // Update
      $http.put('/routes/' + $scope.form.id, $scope.form).then(function (res) {
        $scope.showNotification('Route updated successfully', 'success');
        $scope.resetForm();
        $scope.getRoutes();
      })["catch"](function (err) {
        $scope.showNotification('Error updating route', 'error');
      });
    } else {
      // Add
      $http.post('/routes', $scope.form).then(function (res) {
        $scope.showNotification('Route added successfully', 'success');
        $scope.getRoutes();
        $scope.resetForm();
      })["catch"](function (err) {
        $scope.showNotification('Error adding route', 'error');
      });
    }
  };
  $scope.editRoute = function (route) {
    $scope.form = angular.copy(route);
    // Scroll to form
    document.querySelector('form').scrollIntoView({
      behavior: 'smooth'
    });
  };
  $scope.deleteRoute = function (id) {
    if (confirm("Are you sure you want to delete this route?")) {
      $http["delete"]('/routes/' + id).then(function (res) {
        $scope.showNotification('Route deleted successfully', 'success');
        $scope.getRoutes();
      })["catch"](function (err) {
        $scope.showNotification('Error deleting route', 'error');
      });
    }
  };
  $scope.resetForm = function () {
    $scope.form = {};
  };
  $scope.showNotification = function (message, type) {
    $scope.notification = {
      message: message,
      type: type
    };
    $timeout(function () {
      $scope.notification = null;
    }, 3000);
  };
  $scope.closeNotification = function () {
    $scope.notification = null;
  };

  // Initialize
  $scope.getRoutes();
});
var app = angular.module('pricingApp', []);
app.controller('PricingController', function ($scope, $http) {
  $scope.form = {};
  $scope.editMode = false;
  $scope.groupedPricings = {};
  $scope.hasData = false;

  // Show custom alert
  function showAlert(message, isSuccess) {
    var alertEl = document.getElementById('alertMessage');
    alertEl.textContent = message;
    alertEl.className = "alert fixed top-4 right-4 z-50 px-6 py-3 rounded-lg shadow-lg text-white font-medium ".concat(isSuccess ? 'bg-green-600' : 'bg-red-600');
    setTimeout(function () {
      alertEl.className = 'alert hidden';
    }, 5000);
  }

  // Fetch pricing data
  var fetchData = function fetchData() {
    $http.get('/pricings').then(function (res) {
      var data = res.data;
      var grouped = {};
      data.forEach(function (item) {
        if (!grouped[item.vehicle_type]) grouped[item.vehicle_type] = [];
        grouped[item.vehicle_type].push(item);
      });
      $scope.groupedPricings = grouped;
      $scope.hasData = Object.keys(grouped).length > 0;
    })["catch"](function (err) {
      console.error('Error fetching pricing data:', err);
      showAlert('Error loading pricing data', false);
    });
  };

  // Add or update pricing
  $scope.addPricing = function () {
    // Check if duplicate entry exists when not editing
    if (!$scope.editMode) {
      var existing = ($scope.groupedPricings[$scope.form.vehicle_type] || []).find(function (p) {
        return p.trip_type === $scope.form.trip_type;
      });
      if (existing) {
        showAlert("This pricing for the selected Vehicle and Trip Type already exists. Please click Edit to update it.", false);
        return;
      }
    }
    var url = $scope.editMode ? "/pricings/".concat($scope.form.id) : '/add/pricings';
    var method = $scope.editMode ? 'put' : 'post';
    $http[method](url, $scope.form).then(function (res) {
      showAlert("Pricing ".concat($scope.editMode ? 'updated' : 'added', " successfully!"), true);
      $scope.form = {};
      $scope.editMode = false;
      fetchData();
    })["catch"](function (err) {
      showAlert("Error ".concat($scope.editMode ? 'updating' : 'adding', " pricing"), false);
      console.error(err);
    });
  };

  // Start editing
  $scope.startEdit = function (pricing) {
    $scope.form = angular.copy(pricing);
    $scope.editMode = true;

    // Scroll to form
    document.querySelector('.form-container').scrollIntoView({
      behavior: 'smooth',
      block: 'start'
    });
  };

  // Cancel editing
  $scope.cancelEdit = function () {
    $scope.form = {};
    $scope.editMode = false;
  };

  // Initialize
  fetchData();
});
var app = angular.module('bookingApp', []);
app.controller('BookingController', function ($scope, $http) {
  $scope.bookings = [];
  $scope.activeDrivers = [];
  $scope.currentDate = new Date();
  $scope.activeTab = 'pending';
  $scope.booking = {}; // form model
  $scope.isSubmitting = false; // disable button while submitting
  $scope.showMissingFieldsMessage = false; // error message toggle

  $scope.setActiveTab = function (tab) {
    $scope.activeTab = tab;
  };

  // Fetch bookings and active drivers
  $http.get('/bookings').then(function (response) {
    $scope.bookings = response.data;
  });
  $http.get('/drivers/active').then(function (response) {
    $scope.activeDrivers = response.data;
  });

  // Driver functions
  $scope.getDriverDetails = function (id) {
    var driver = $scope.activeDrivers.find(function (d) {
      return d.id === id;
    });
    return driver ? "".concat(driver.name, " (").concat(driver.phone || '', ")") : null;
  };
  $scope.showDriverSelector = function (booking) {
    booking.showDriverSelect = true;
    booking.selectedDriverId = booking.driver_id || '';
    booking.assignedAmount = booking.assigned_amount || '';
  };
  $scope.editDriverAssignment = function (booking) {
    booking.editDriver = true;
    booking.selectedDriverId = booking.driver_id;
    booking.assignedAmount = booking.assigned_amount;
  };
  $scope.assignDriver = function (booking) {
    if (!booking.selectedDriverId) {
      alert('Please select a driver.');
      return;
    }
    if (booking.assignedAmount !== undefined && booking.assignedAmount < 0) {
      alert('Please enter a valid non-negative amount.');
      return;
    }
    var data = {
      driver_id: booking.selectedDriverId
    };
    if (booking.assignedAmount !== undefined && booking.assignedAmount !== null) {
      data.amount = booking.assignedAmount;
    }
    $http.patch('/bookings/' + booking.id + '/assign-driver', data).then(function (response) {
      var updated = response.data.booking;
      booking.driver_id = updated.driver_id;
      booking.status = updated.status;
      booking.assigned_amount = updated.assigned_amount;
      booking.assignedAmount = updated.assigned_amount;
      booking.showDriverSelect = false;
      booking.editDriver = false;
      alert(response.data.message || 'Driver updated successfully.');
    })["catch"](function (error) {
      var _error$data;
      alert(((_error$data = error.data) === null || _error$data === void 0 ? void 0 : _error$data.message) || 'Failed to assign driver.');
      console.error(error);
    });
  };
  $scope.updateTripStatus = function (booking) {
    if (!booking.driver_id) {
      alert('Assign a driver before updating trip status.');
      return;
    }
    var allowedStatuses = ['pending', 'cancelled', 'completed', 'delay'];
    if (!allowedStatuses.includes(booking.trip_status)) {
      alert('Invalid trip status selected.');
      return;
    }
    $http.patch('/bookings/' + booking.id + '/trip-status', {
      trip_status: booking.trip_status
    }).then(function (response) {
      alert(response.data.message || 'Trip status updated.');
    })["catch"](function (error) {
      var _error$data2;
      alert(((_error$data2 = error.data) === null || _error$data2 === void 0 ? void 0 : _error$data2.message) || 'Failed to update trip status.');
    });
  };

  // Filter bookings by status
  $scope.getBookingsByTripStatus = function (status) {
    return $scope.bookings.filter(function (booking) {
      return booking.status === 'assigned' && booking.trip_status === status;
    });
  };

  // Booking details
  $scope.viewBookingDetails = function (booking) {
    $scope.selectedBooking = booking;
    $scope.showBookingDetails = true;
  };
  $scope.closeBookingDetails = function () {
    $scope.showBookingDetails = false;
  };

  // Print invoice
  $scope.printInvoice = function (booking) {
    console.log('Printing invoice for booking: ' + booking.booking_id || 0);
    alert('Invoice printing functionality would be implemented here.');
  };

  // -----------------------------
  // NEW: Booking form submission
  // -----------------------------
  $scope.submitBooking = function (isValid) {
    if (!isValid) {
      $scope.showMissingFieldsMessage = true; // show error
      return;
    }
    $scope.showMissingFieldsMessage = false;
    $scope.isSubmitting = true;
    $http.post('/bookings', $scope.booking).then(function (response) {
      $scope.isSubmitting = false;
      alert('Booking successful!');
      $scope.booking = {}; // reset form
      $scope.bookingForm.$setPristine();
      $scope.bookingForm.$setUntouched();
    })["catch"](function (error) {
      $scope.isSubmitting = false;
      alert('Booking failed. Please try again.');
    });
  };
});
var app = angular.module('CommissionApp', []);
app.controller('CommissionController', function ($scope, $http) {
  $scope.completedBookings = [];
  $scope.message = '';
  $scope.loading = true;
  $http.defaults.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
  function fetchBookings() {
    $scope.loading = true;
    $http.get('/completed-bookings').then(function (response) {
      $scope.completedBookings = response.data;
      $scope.loading = false;
    })["catch"](function (error) {
      console.error('Error fetching bookings:', error);
      $scope.loading = false;
    });
  }
  fetchBookings();
  $scope.saveCommission = function (booking) {
    if (!booking.amount || !booking.selectedStatus) {
      alert("Please fill amount and status");
      return;
    }
    $scope.loading = true;
    $http.post('/commissions', {
      booking_id: booking.id,
      amount: booking.amount,
      status: booking.selectedStatus // updated here
    }).then(function (response) {
      $scope.message = response.data.message;

      // Show notification
      var notification = document.getElementById('notification');
      notification.classList.add('show');
      setTimeout(function () {
        notification.classList.remove('show');
      }, 3000);
      fetchBookings(); // Refresh to reflect changes
    })["catch"](function (error) {
      console.error('Error saving commission:', error);
      alert('Failed to save commission. Please try again.');
      $scope.loading = false;
    });
  };

  // Handle horizontal scroll shadows
  document.addEventListener('DOMContentLoaded', function () {
    var tableContainers = document.querySelectorAll('.table-container');
    tableContainers.forEach(function (container) {
      container.addEventListener('scroll', function () {
        var shadowLeft = container.previousElementSibling;
        var shadowRight = container.previousElementSibling.previousElementSibling;
        if (container.scrollLeft > 0) {
          shadowLeft.style.opacity = '1';
        } else {
          shadowLeft.style.opacity = '0';
        }
        if (container.scrollLeft + container.clientWidth < container.scrollWidth) {
          shadowRight.style.opacity = '1';
        } else {
          shadowRight.style.opacity = '0';
        }
      });

      // Trigger initial check
      container.dispatchEvent(new Event('scroll'));
    });
  });
});
var app = angular.module('driverManagementApp', []);
app.controller('DriverController', function ($scope, $timeout, $http) {
  // API endpoints

  $scope.driverManagementApp = [];
  // Initialize state
  $scope.drivers = [];
  $scope.isLoading = true;
  $scope.showModal = false;
  $scope.showDeleteModal = false;
  $scope.isEditing = false;
  $scope.driverToDelete = null;
  $scope.showToast = false;
  $scope.toastMessage = '';
  $scope.toastTitle = '';
  $scope.toastType = 'success';
  $scope.formErrors = {};

  // Pagination
  $scope.currentPage = 1;
  $scope.pageSize = 10;

  // Filters
  $scope.searchQuery = '';
  $scope.statusFilter = 'all';
  $scope.carTypeFilter = 'all';
  $scope.sortOption = 'name';
  $scope.sortOrder = 'asc';

  // Form model
  $scope.driverForm = {
    name: '',
    phone: '',
    email: '',
    carType: 'sedan',
    carNumber: '',
    status: 'active'
  };

  // Stats
  $scope.newDriversThisMonth = 0;

  // Initialize with sample data (will be replaced with API call)
  var initializeSampleData = function initializeSampleData() {
    var sampleDrivers = [];
    $scope.drivers = sampleDrivers;
    $scope.isLoading = false;

    // Calculate new drivers this month
    var currentDate = new Date();
    var firstDayOfMonth = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1);
    $scope.newDriversThisMonth = $scope.drivers.filter(function (driver) {
      var driverDate = new Date(driver.created_at);
      return driverDate >= firstDayOfMonth;
    }).length;
  };

  // Fetch drivers from API
  $scope.fetchDrivers = function () {
    $scope.isLoading = true;
    $http.get('/drivers').then(function (response) {
      $scope.drivers = response.data;
      $scope.isLoading = false;
    })["catch"](function (error) {
      $scope.isLoading = false;
      var errorMessage = error.data ? error.data.message : 'Failed to load drivers. Please try again.';
      $scope.showToastMessage('Error', errorMessage, 'error');
    });
  };

  // Initialize by fetching drivers
  $scope.fetchDrivers();

  // Filter drivers based on search and filters
  $scope.filteredDrivers = function () {
    return $scope.drivers.filter(function (driver) {
      // Search query filter
      var searchMatch = !$scope.searchQuery || driver.name.toLowerCase().includes($scope.searchQuery.toLowerCase()) || driver.email.toLowerCase().includes($scope.searchQuery.toLowerCase()) || driver.phone.includes($scope.searchQuery) || driver.carNumber.toLowerCase().includes($scope.searchQuery.toLowerCase());

      // Status filter
      var statusMatch = $scope.statusFilter === 'all' || driver.status === $scope.statusFilter;

      // Car type filter
      var carTypeMatch = $scope.carTypeFilter === 'all' || driver.carType === $scope.carTypeFilter;
      return searchMatch && statusMatch && carTypeMatch;
    });
  };

  // Get sort field based on sort option
  $scope.getSortField = function () {
    switch ($scope.sortOption) {
      case 'name':
        return 'name';
      case 'date':
        return 'created_at';
      case 'status':
        return 'status';
      default:
        return 'name';
    }
  };

  // Toggle sort order
  $scope.toggleSortOrder = function () {
    $scope.sortOrder = $scope.sortOrder === 'asc' ? 'desc' : 'asc';
  };

  // Reset filters
  $scope.resetFilters = function () {
    $scope.searchQuery = '';
    $scope.statusFilter = 'all';
    $scope.carTypeFilter = 'all';
    $scope.sortOption = 'name';
    $scope.sortOrder = 'asc';
  };

  // Format date
  $scope.formatDate = function (dateString) {
    if (!dateString) return 'N/A';
    var date = new Date(dateString);
    return date.toLocaleDateString('en-US', {
      year: 'numeric',
      month: 'short',
      day: 'numeric'
    });
  };

  // Get active drivers count
  $scope.getActiveDriversCount = function () {
    return $scope.drivers.filter(function (driver) {
      return driver.status === 'active';
    }).length;
  };

  // Get active drivers percentage
  $scope.getActiveDriversPercentage = function () {
    if ($scope.drivers.length === 0) return 0;
    return Math.round($scope.getActiveDriversCount() / $scope.drivers.length * 100);
  };

  // Get driver count by car type
  $scope.getDriverCountByCarType = function (carType) {
    return $scope.drivers.filter(function (driver) {
      return driver.carType === carType;
    }).length;
  };

  // Get car type percentage
  $scope.getCarTypePercentage = function (carType) {
    if ($scope.drivers.length === 0) return 0;
    return Math.round($scope.getDriverCountByCarType(carType) / $scope.drivers.length * 100);
  };

  // Pagination methods
  $scope.totalPages = function () {
    return Math.ceil($scope.filteredDrivers().length / $scope.pageSize);
  };
  $scope.getPageNumbers = function () {
    var totalPages = $scope.totalPages();
    if (totalPages <= 5) {
      return Array.from({
        length: totalPages
      }, function (_, i) {
        return i + 1;
      });
    }
    if ($scope.currentPage <= 3) {
      return [1, 2, 3, 4, 5];
    }
    if ($scope.currentPage >= totalPages - 2) {
      return [totalPages - 4, totalPages - 3, totalPages - 2, totalPages - 1, totalPages];
    }
    return [$scope.currentPage - 2, $scope.currentPage - 1, $scope.currentPage, $scope.currentPage + 1, $scope.currentPage + 2];
  };
  $scope.prevPage = function () {
    if ($scope.currentPage > 1) {
      $scope.currentPage--;
    }
  };
  $scope.nextPage = function () {
    if ($scope.currentPage < $scope.totalPages()) {
      $scope.currentPage++;
    }
  };
  $scope.goToPage = function (page) {
    $scope.currentPage = page;
  };

  // Show toast message
  $scope.showToastMessage = function (title, message, type) {
    $scope.toastTitle = title;
    $scope.toastMessage = message;
    $scope.toastType = type || 'success';
    $scope.showToast = true;
    $timeout(function () {
      $scope.hideToast();
    }, 3000);
  };

  // Hide toast
  $scope.hideToast = function () {
    $scope.showToast = false;
  };

  // Show add driver modal
  $scope.showAddDriverModal = function () {
    $scope.isEditing = false;
    $scope.driverForm = {
      name: '',
      phone: '',
      email: '',
      carType: 'sedan',
      carNumber: '',
      status: 'active'
    };
    $scope.formErrors = {};
    $scope.showModal = true;
  };

  // Show edit driver modal
  $scope.showEditDriverModal = function (driver) {
    $scope.isEditing = true;
    $scope.driverForm = {
      id: driver.id,
      name: driver.name,
      phone: driver.phone,
      email: driver.email,
      carType: driver.carType,
      carNumber: driver.carNumber,
      status: driver.status
    };
    $scope.formErrors = {};
    $scope.showModal = true;

    // Close dropdown menu if open
    driver.showActions = false;
  };

  // Close modal
  $scope.closeModal = function () {
    $scope.showModal = false;
  };

  // Validate form
  $scope.validateForm = function () {
    $scope.formErrors = {};
    var isValid = true;

    // Validate name
    if (!$scope.driverForm.name || $scope.driverForm.name.trim() === '') {
      $scope.formErrors.name = 'Driver name is required';
      isValid = false;
    }

    // Validate phone
    if (!$scope.driverForm.phone || $scope.driverForm.phone.trim() === '') {
      $scope.formErrors.phone = 'Phone number is required';
      isValid = false;
    } else if (!/^[+]?[\d\s-]{10,15}$/.test($scope.driverForm.phone)) {
      $scope.formErrors.phone = 'Please enter a valid phone number';
      isValid = false;
    }

    // Validate email
    if (!$scope.driverForm.email || $scope.driverForm.email.trim() === '') {
      $scope.formErrors.email = 'Email address is required';
      isValid = false;
    } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test($scope.driverForm.email)) {
      $scope.formErrors.email = 'Please enter a valid email address';
      isValid = false;
    }

    // Validate car number
    if (!$scope.driverForm.carNumber || $scope.driverForm.carNumber.trim() === '') {
      $scope.formErrors.carNumber = 'Car number is required';
      isValid = false;
    }
    return isValid;
  };

  // Save driver (add or update)
  $scope.saveDriver = function () {
    if (!$scope.validateForm()) {
      return;
    }
    if ($scope.isEditing) {
      // Update existing driver
      var driverIndex = $scope.drivers.findIndex(function (d) {
        return d.id === $scope.driverForm.id;
      });
      if (driverIndex !== -1) {
        // In a real app, this would be an API call
        $http.put("/drivers/".concat($scope.driverForm.id), $scope.driverForm).then(function (response) {
          $scope.drivers[driverIndex] = response.data;
          $scope.closeModal();
          $scope.showToastMessage('Success', 'Driver updated successfully', 'success');
        })["catch"](function (error) {
          console.error('Error updating driver:', error);
          $scope.showToastMessage('Error', 'Failed to update driver. Please try again.', 'error');
        });
        $scope.closeModal();
        $scope.showToastMessage('Success', 'Driver updated successfully', 'success');
      }
    } else {
      // Add new driver
      var newDriver = _objectSpread(_objectSpread({}, $scope.driverForm), {}, {
        id: $scope.drivers.length > 0 ? Math.max.apply(Math, _toConsumableArray($scope.drivers.map(function (d) {
          return d.id;
        }))) + 1 : 1,
        created_at: new Date().toISOString()
      });

      // In a real app, this would be an API call
      $http.post("/add/drivers", newDriver).then(function (response) {
        $scope.drivers.push(response.data);
        $scope.closeModal();
        $scope.showToastMessage('Success', 'Driver added successfully', 'success');

        // Update new drivers this month count
        $scope.newDriversThisMonth++;
      })["catch"](function (error) {
        console.error('Error adding driver:', error);
        $scope.showToastMessage('Error', 'Failed to add driver. Please try again.', 'error');
      });
    }
  };

  // Show delete driver modal
  $scope.showDeleteDriverModal = function (driver) {
    $scope.driverToDelete = driver;
    $scope.showDeleteModal = true;

    // Close dropdown menu if open
    driver.showActions = false;
  };

  // Close delete modal
  $scope.closeDeleteModal = function () {
    $scope.showDeleteModal = false;
    $scope.driverToDelete = null;
  };

  // Delete driver
  $scope.deleteDriver = function () {
    if (!$scope.driverToDelete) return;

    // In a real app, this would be an API call
    $http["delete"]("/drivers/".concat($scope.driverToDelete.id)).then(function () {
      $scope.drivers = $scope.drivers.filter(function (d) {
        return d.id !== $scope.driverToDelete.id;
      });
      $scope.closeDeleteModal();
      $scope.showToastMessage('Success', 'Driver deleted successfully', 'success');

      // Update new drivers this month count if needed
      var driverDate = new Date($scope.driverToDelete.created_at);
      var currentDate = new Date();
      var firstDayOfMonth = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1);
      if (driverDate >= firstDayOfMonth) {
        $scope.newDriversThisMonth--;
      }
    })["catch"](function (error) {
      console.error('Error deleting driver:', error);
      $scope.showToastMessage('Error', 'Failed to delete driver. Please try again.', 'error');
    });

    // For demo purposes
    $scope.drivers = $scope.drivers.filter(function (d) {
      return d.id !== $scope.driverToDelete.id;
    });

    // Update new drivers this month count if needed
    var driverDate = new Date($scope.driverToDelete.created_at);
    var currentDate = new Date();
    var firstDayOfMonth = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1);
    if (driverDate >= firstDayOfMonth) {
      $scope.newDriversThisMonth--;
    }
    $scope.closeDeleteModal();
    $scope.showToastMessage('Success', 'Driver deleted successfully', 'success');
  };

  // Toggle driver status
  $scope.toggleDriverStatus = function (driver) {
    var newStatus = driver.status === 'active' ? 'inactive' : 'active';

    // In a real app, this would be an API call
    $http.patch("".concat(DRIVERS_ENDPOINT, "/").concat(driver.id), {
      status: newStatus
    }).then(function (response) {
      driver.status = newStatus;
      $scope.showToastMessage('Success', "Driver ".concat(newStatus === 'active' ? 'activated' : 'deactivated', " successfully"), 'success');
    })["catch"](function (error) {
      console.error('Error updating driver status:', error);
      $scope.showToastMessage('Error', 'Failed to update driver status. Please try again.', 'error');
    });
  };

  // Refresh drivers
  $scope.refreshDrivers = function () {
    $scope.fetchDrivers();
    $scope.showToastMessage('Info', 'Refreshing driver data...', 'info');
  };

  // Export drivers
  $scope.exportDrivers = function () {
    // In a real app, this would generate and download a CSV/Excel file
    var exportData = {
      drivers: $scope.drivers,
      exportedAt: new Date().toISOString(),
      exportedBy: 'Admin User'
    };

    // Create a download link for the JSON data
    var dataStr = "data:text/json;charset=utf-8," + encodeURIComponent(JSON.stringify(exportData, null, 2));
    var downloadAnchorNode = document.createElement('a');
    downloadAnchorNode.setAttribute("href", dataStr);
    downloadAnchorNode.setAttribute("download", "drivers_export_" + new Date().toISOString().split('T')[0] + ".json");
    document.body.appendChild(downloadAnchorNode);
    downloadAnchorNode.click();
    downloadAnchorNode.remove();
    $scope.showToastMessage('Success', 'Driver data exported successfully', 'success');
  };

  // Close dropdown menus when clicking outside
  document.addEventListener('click', function (event) {
    if (!event.target.closest('.dropdown-menu') && !event.target.closest('button')) {
      $scope.$apply(function () {
        $scope.drivers.forEach(function (driver) {
          driver.showActions = false;
        });
      });
    }
  });
}).filter('capitalize', function () {
  return function (input) {
    if (!input) return '';
    return input.charAt(0).toUpperCase() + input.slice(1);
  };
});
var app = angular.module('testimonial', []);
app.controller('testimonialController', function ($scope, $http, $timeout) {
  // Sample data - would be replaced with API calls in production
  $scope.testimonials = [];
  // Initialize variables

  $http.get('/testimonial') // Use full URL
  .then(function (response) {
    $scope.testimonials = response.data;
  })["catch"](function (error) {
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
  $scope.searchFilter = function (testimonial) {
    var matchesText = !$scope.searchText || testimonial.name.toLowerCase().includes($scope.searchText.toLowerCase()) || testimonial.message.toLowerCase().includes($scope.searchText.toLowerCase());
    var matchesRating = !$scope.filterRating || testimonial.rating == $scope.filterRating;
    return matchesText && matchesRating;
  };

  // Get filtered testimonials
  $scope.filteredTestimonials = function () {
    return $scope.testimonials.filter($scope.searchFilter);
  };

  // Pagination functions
  $scope.totalPages = function () {
    return Math.ceil($scope.filteredTestimonials().length / $scope.itemsPerPage);
  };
  $scope.getPages = function () {
    var total = $scope.totalPages();
    var pages = [];
    for (var i = 1; i <= total; i++) {
      pages.push(i);
    }
    return pages;
  };
  $scope.goToPage = function (page) {
    $scope.currentPage = page;
  };
  $scope.nextPage = function () {
    if ($scope.currentPage < $scope.totalPages()) {
      $scope.currentPage++;
    }
  };
  $scope.prevPage = function () {
    if ($scope.currentPage > 1) {
      $scope.currentPage--;
    }
  };

  // Format date
  $scope.formatDate = function (dateString) {
    var date = new Date(dateString);
    return date.toLocaleDateString('en-US', {
      year: 'numeric',
      month: 'short',
      day: 'numeric'
    });
  };

  // Get average rating
  $scope.getAverageRating = function () {
    if ($scope.testimonials.length === 0) return '0.0';
    var total = $scope.testimonials.reduce(function (sum, testimonial) {
      return sum + parseInt(testimonial.rating);
    }, 0);
    return (total / $scope.testimonials.length).toFixed(1);
  };

  // Get count of high ratings (5 stars)
  $scope.getHighRatingCount = function () {
    return $scope.testimonials.filter(function (testimonial) {
      return testimonial.rating == 5;
    }).length;
  };

  // Add new testimonial
  $scope.addTestimonial = function () {
    // In a real app, this would be an API call
    var newId = $scope.testimonials.length > 0 ? Math.max.apply(Math, _toConsumableArray($scope.testimonials.map(function (t) {
      return t.id;
    }))) + 1 : 1;
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
    $http.post('/testimonial/add', testimonial).then(function (response) {
      $scope.testimonials.push(response.data);
      $scope.resetForm();
      $scope.showToastMessage('Testimonial added successfully!');
    })["catch"](function (error) {
      console.error('Error adding testimonial:', error);
    });
  };

  // Reset form
  $scope.resetForm = function () {
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
  $scope.editTestimonial = function (testimonial) {
    $scope.editingTestimonial = angular.copy(testimonial);
    $scope.showEditModal = true;
  };

  // Close edit modal
  $scope.closeEditModal = function () {
    $scope.showEditModal = false;
    $scope.editingTestimonial = {};
  };

  // Update testimonial
  $scope.updateTestimonial = function () {
    // In a real app, this would be an API call
    $http.put('/testimonial/' + $scope.editingTestimonial.id, $scope.editingTestimonial).then(function (response) {
      var index = $scope.testimonials.findIndex(function (t) {
        return t.id === $scope.editingTestimonial.id;
      });
      if (index !== -1) {
        $scope.testimonials[index] = response.data;
      }
      $scope.closeEditModal();
      $scope.showToastMessage('Testimonial updated successfully!');
    })["catch"](function (error) {
      console.error('Error updating testimonial:', error);
    });
  };

  // Delete testimonial
  $scope.deleteTestimonial = function (id) {
    $scope.deleteId = id;
    $scope.showDeleteModal = true;
  };

  // Cancel delete
  $scope.cancelDelete = function () {
    $scope.showDeleteModal = false;
    $scope.deleteId = null;
  };

  // Confirm delete
  $scope.confirmDelete = function () {
    // In a real app, this would be an API call
    $http["delete"]('/testimonial/' + $scope.deleteId).then(function () {
      $scope.testimonials = $scope.testimonials.filter(function (t) {
        return t.id !== $scope.deleteId;
      });
      $scope.cancelDelete();
      $scope.showToastMessage('Testimonial deleted successfully!');
    })["catch"](function (error) {
      console.error('Error deleting testimonial:', error);
    });
  };

  // Toggle featured status
  $scope.toggleFeatured = function (testimonial) {
    // In a real app, this would be an API call
    $http.patch('/testimonial/' + testimonial.id, {
      featured: !testimonial.featured
    }).then(function (response) {
      testimonial.featured = !testimonial.featured;
      $scope.showToastMessage(testimonial.featured ? 'Testimonial marked as featured!' : 'Testimonial removed from featured.');
    })["catch"](function (error) {
      console.error('Error updating testimonial:', error);
    });
  };

  // Approve testimonial
  $scope.approveTestimonial = function (testimonial) {
    // In a real app, this would be an API call
    $http.patch('/testimonial/' + testimonial.id, {
      approved: true
    }).then(function (response) {
      testimonial.approved = true;
      $scope.showToastMessage('Testimonial approved successfully!');
    })["catch"](function (error) {
      console.error('Error approving testimonial:', error);
    });
  };

  // Export testimonials

  $scope.exportTestimonials = function () {
    $http.get('/testimonial/export', {
      responseType: 'blob'
    }).then(function (response) {
      var blob = new Blob([response.data], {
        type: 'text/csv'
      });
      var url = window.URL.createObjectURL(blob);
      var a = document.createElement('a');
      a.href = url;
      a.download = 'testimonials_export.csv'; // consistent with backend
      document.body.appendChild(a);
      a.click();
      window.URL.revokeObjectURL(url);
      $scope.showToastMessage('Testimonials exported successfully!');
    })["catch"](function (error) {
      console.error('Error exporting testimonials:', error);
    });
  };

  // Show toast message
  $scope.showToastMessage = function (message) {
    $scope.toastMessage = message;
    $scope.showToast = true;
    $timeout(function () {
      $scope.showToast = false;
    }, 3000);
  };
});
var app = angular.module('adminBlogApp', []);
app.controller('BlogController', function ($scope, $http) {
  $scope.blogs = [];
  $scope.loadBlogs = function () {
    $http.get('/api/admin/blogs').then(function (res) {
      if (res.data.status) {
        $scope.blogs = res.data.data;
      }
    });
  };
  $scope.deleteBlog = function (id) {
    if (!confirm('Delete this blog?')) return;
    $http["delete"]('/api/admin/blogs/' + id).then(function () {
      $scope.loadBlogs();
    });
  };
  $scope.loadBlogs();
});
/******/ })()
;