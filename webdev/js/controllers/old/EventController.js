app.controller('EventController', ['$scope', 'event', function($scope, event) {

  event.success(function(data) {
    $scope.event = data;

  });

}]);