 // Initialize AngularJS application
 angular.module('adminPortal', [])
 .controller('LoginController', ['$scope', '$http', '$timeout', function($scope, $http, $timeout) {
     // Initialize variables
     $scope.username = '';
     $scope.password = '';
     $scope.rememberMe = false;
     $scope.showPassword = false;
     $scope.isLoading = false;
     $scope.showNotification = false;
     $scope.notificationMessage = '';
     $scope.notificationType = 'error';

     // Toggle password visibility
     $scope.togglePassword = function() {
         $scope.showPassword = !$scope.showPassword;
     };

     // Show notification
     $scope.showNotificationMessage = function(message, type) {
         $scope.notificationMessage = message;
         $scope.notificationType = type;
         $scope.showNotification = true;

         // Auto-hide notification after 3 seconds
         $timeout(function() {
             $scope.showNotification = false;
         }, 3000);
     };

     // Login function
     $scope.login = function() {
         if (!$scope.username || !$scope.password) {
             $scope.showNotificationMessage('Please enter both username and password.', 'error');
             return;
         }

         $scope.isLoading = true;

         // Create form data for PHP processing
         var formData = new FormData();
         formData.append('username', $scope.username);
         formData.append('password', $scope.password);
         formData.append('remember_me', $scope.rememberMe ? 1 : 0);

         // Send login request to PHP backend
         $http({
            method: 'POST',
            url: '/adminlogin',
            data: formData,
            headers: { 'Content-Type': undefined },
            transformRequest: angular.identity
        }).then(function successCallback(response) {
            $scope.isLoading = false;

            if (response.data.success) {
                $scope.showNotificationMessage('Login successful! Redirecting...', 'success');

                // Redirect to Laravel route
                $timeout(function () {
                    window.location.href = response.data.redirect; // Laravel route
                }, 1500);
            } else {
                $scope.showNotificationMessage(response.data.message || 'Invalid username or password.', 'error');
            }
        }, function errorCallback(response) {
            $scope.isLoading = false;
            $scope.showNotificationMessage('Server error. Please try again later.', 'error');
            console.error('Login error:', response);
        });



     };

     // Initialize with animation
     $timeout(function() {
         var loginContainer = document.querySelector('.login-container');
         loginContainer.style.opacity = '0';
         loginContainer.style.transform = 'translateY(20px)';
         loginContainer.style.transition = 'opacity 0.5s ease, transform 0.5s ease';

         $timeout(function() {
             loginContainer.style.opacity = '1';
             loginContainer.style.transform = 'translateY(0)';
         }, 100);
     }, 0);
 }]);
