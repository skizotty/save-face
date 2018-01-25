app.controller('ArtistDetailController', ['$scope', 'artist', '$routeParams', function($scope, artist, $routeParams) {
  artist.success(function(data) {
    $scope.artist= data[$routeParams.id];
  });
}]);