app.controller('VenueController', ['$scope', 'venues', '$routeParams', function($scope, venues, $routeParams) {
  venues.success(function(data) {
    $scope.detail = data[$routeParams.id];
    $scope.events = data[$routeParams.id].events;
  });
}]);