app.controller('HomeController', ['$scope', 'venues', function($scope, photos) {
  photos.success(function(data) {
    $scope.photos = data;
  });
}]);