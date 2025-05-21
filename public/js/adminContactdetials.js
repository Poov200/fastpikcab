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
/*!*********************************************!*\
  !*** ./resources/js/adminContactdetials.js ***!
  \*********************************************/
__webpack_require__.r(__webpack_exports__);
var app = angular.module('contactApp', []);
app.controller('ContactControllers', function ($scope, $http) {
  $scope.contactMessages = [];
  $http.get('/contact-messages').then(function (response) {
    $scope.contactMessages = response.data;
    console.log('Contact messages:', $scope.contactMessages); // ✅ Debug output
  })["catch"](function (error) {
    console.error('Error fetching contact messages:', error);
  });
});
/******/ })()
;