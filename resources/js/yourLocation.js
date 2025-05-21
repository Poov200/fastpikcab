angular.module('cabApp', [])
  .controller('CabController', function ($scope) {
    $scope.cities = [
      {
        name: 'Chennai',
        open: false,
        routes: [
          'Chennai to Bangalore one way taxi',
          'Chennai to Pondicherry one way taxi',
          'Chennai to Madurai one way taxi',
          'Chennai to Trichy one way taxi',
          'Chennai to Vellore one way taxi'
        ]
      },
      {
        name: 'Coimbatore',
        open: false,
        routes: [
          'Coimbatore to Chennai one way taxi',
          'Coimbatore to Salem one way taxi',
          'Coimbatore to Trichy one way taxi'
        ]
      }
      // Add more cities...
    ];

    $scope.toggle = function(city) {
      city.open = !city.open;
    };
  });
