 // Initialize AngularJS application
 var app = angular.module('contactApp', []);

 app.controller('ContactController', function($scope, $http) {
    $scope.formData = {};
    $scope.isSubmitting = false;
    $scope.formSubmitted = false;
    $scope.formError = false;

    $scope.submitForm = function () {
        if ($scope.contactForm.$valid) {
            $scope.isSubmitting = true;

            $http.post('/api/contact', $scope.formData)
                .then(function (response) {
                    $scope.formSubmitted = true;
                    $scope.formError = false;
                    $scope.isSubmitting = false;
                    $scope.formData = {}; // Clear the form
                    $scope.contactForm.$setPristine();
                    $scope.contactForm.$setUntouched();
                })
                .catch(function (error) {
                    $scope.formError = true;
                    $scope.isSubmitting = false;
                });
        }
    };
});
