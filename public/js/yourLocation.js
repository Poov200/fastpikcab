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
/*!**************************************!*\
  !*** ./resources/js/yourLocation.js ***!
  \**************************************/
__webpack_require__.r(__webpack_exports__);
angular.module('cabApp', []).controller('CabController', function ($scope) {
  $scope.cities = [{
    name: 'Chennai',
    open: false,
    routes: ['Chennai to Bangalore one way taxi', 'Chennai to Pondicherry one way taxi', 'Chennai to Madurai one way taxi', 'Chennai to Trichy one way taxi', 'Chennai to Vellore one way taxi']
  }, {
    name: 'Coimbatore',
    open: false,
    routes: ['Coimbatore to Chennai one way taxi', 'Coimbatore to Salem one way taxi', 'Coimbatore to Trichy one way taxi']
  }
  // Add more cities...
  ];
  $scope.toggle = function (city) {
    city.open = !city.open;
  };
});
/******/ })()
;