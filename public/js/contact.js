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
/*!*********************************!*\
  !*** ./resources/js/contact.js ***!
  \*********************************/
__webpack_require__.r(__webpack_exports__);
// Initialize AngularJS application
var app = angular.module('contactApp', []);
app.controller('ContactController', function ($scope, $http) {
  $scope.formData = {};
  $scope.isSubmitting = false;
  $scope.formSubmitted = false;
  $scope.formError = false;
  $scope.submitForm = function () {
    if ($scope.contactForm.$valid) {
      $scope.isSubmitting = true;
      $http.post('/contact', $scope.formData).then(function (response) {
        $scope.formSubmitted = true;
        $scope.formError = false;
        $scope.isSubmitting = false;
        $scope.formData = {}; // Clear the form
        $scope.contactForm.$setPristine();
        $scope.contactForm.$setUntouched();
      })["catch"](function (error) {
        $scope.formError = true;
        $scope.isSubmitting = false;
      });
    }
  };
});
/******/ })()
;