app.controller('ArtistController', ['$scope', 'artist', function($scope, artist) {
  artist.success(function(data) {
    $scope.artist = data;
  });
}]);