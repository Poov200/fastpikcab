/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	// The require scope
/******/ 	var __webpack_require__ = {};
/******/ 	
/************************************************************************/
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
/************************************************************************/
var __webpack_exports__ = {};
/*!****************************************!*\
  !*** ./resources/js/admindashboard.js ***!
  \****************************************/
__webpack_require__.r(__webpack_exports__);
angular.module('navbarApp', []).controller('NavbarController', function ($scope) {
  // Initialize active page
  $scope.activePage = 'home';
  $scope.pageTitle = 'Home';
  $scope.sidebarOpen = false;

  // Set active page
  $scope.setActive = function (page) {
    $scope.activePage = page;

    // Set page title based on active page
    switch (page) {
      case 'home':
        $scope.pageTitle = 'Home';
        break;
      case 'booking-list':
        $scope.pageTitle = 'Booking List';
        break;
      case 'assign-booking':
        $scope.pageTitle = 'Assign Booking';
        break;
      case 'send-mail':
        $scope.pageTitle = 'Send Mail';
        break;
      case 'add-driver':
        $scope.pageTitle = 'Add Driver';
        break;
      case 'testimonials':
        $scope.pageTitle = 'Testimonials';
        break;
      case 'contact':
        $scope.pageTitle = 'Contact Form';
        break;
      case 'pricing':
        $scope.pageTitle = 'Pricing';
        break;
      default:
        $scope.pageTitle = 'Home';
    }

    // Close sidebar on mobile after navigation
    if (window.innerWidth < 768) {
      $scope.sidebarOpen = false;
    }
  };

  // Check if page is active
  $scope.isActive = function (page) {
    return $scope.activePage === page;
  };

  // Toggle sidebar for mobile
  $scope.toggleSidebar = function () {
    $scope.sidebarOpen = !$scope.sidebarOpen;
  };

  // Logout function
  $scope.logout = function () {
    // In a real application, this would connect to your PHP logout endpoint
    alert('Logout functionality would connect to your PHP backend');
    // Example of how you might redirect after logout
    // window.location.href = 'logout.php';
  };
});
/******/ })()
;