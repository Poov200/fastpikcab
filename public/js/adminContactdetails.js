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
  !*** ./resources/js/adminContactdetails.js ***!
  \*********************************************/
__webpack_require__.r(__webpack_exports__);
angular.module('adminContactApp', []).controller('adminContactControllers', function ($scope, $http) {
  $scope.contactMessages = [];
  console.log("ContactControllers initialized");
  $scope.viewMode = 'table';
  $scope.searchText = '';
  $scope.formatDate = function (dateString) {
    var date = new Date(dateString);
    return date.toLocaleDateString('en-US', {
      year: 'numeric',
      month: 'short',
      day: 'numeric',
      hour: '2-digit',
      minute: '2-digit'
    });
  };
  $scope.getUnreadCount = function () {
    return $scope.contactMessages.filter(function (msg) {
      return !msg.read;
    }).length;
  };
  $scope.getThisWeekCount = function () {
    var oneWeekAgo = new Date();
    oneWeekAgo.setDate(oneWeekAgo.getDate() - 7);
    return $scope.contactMessages.filter(function (msg) {
      var msgDate = new Date(msg.created_at);
      return msgDate >= oneWeekAgo;
    }).length;
  };
  $http.get('/contact-messages').then(function (response) {
    $scope.contactMessages = response.data;
    console.log('Contact messages:', $scope.contactMessages);
  })["catch"](function (error) {
    console.error('Error fetching contact messages:', error);
  });
});
/******/ })()
;