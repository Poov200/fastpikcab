/******/ (() => { // webpackBootstrap
/*!*********************************************!*\
  !*** ./resources/js/adminContactdetails.js ***!
  \*********************************************/
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