angular.module('PizzaApp', []).controller('PizzaCtrl', function($scope, $http) {
  $scope.orders = [];
  $scope.avgwait = 0;

  $http.get('/api/orders').success(function(data) {
    $scope.orders = data.data;
  });

  $http.get('/api/average_wait').success(function(data) {
    $scope.avgwait = data.data.time;
  });
});
