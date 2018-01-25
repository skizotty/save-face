app.controller('ArtistController', ['$scope', 'artist', function($scope, artist) {
  artist.success(function(data) {
    $scope.artist = data;
  });
}]);

app.controller('ArtistDetailController', ['$scope', 'artist', '$routeParams', function($scope, artist, $routeParams) {
  artist.success(function(data) {
    $scope.artist= data[$routeParams.id];
  });
}]);

app.controller('ContactController', ['$scope', 'contact', function($scope, contact) {
  contact.success(function(data) {
    $scope.contact = data;
  });
}]);

app.controller('EventController', ['$scope', 'event', function($scope, event) {
  event.success(function(data) {
    $scope.event = data;
  });
}]);


app.controller('EventDetailController', ['$scope', 'event_detail', '$routeParams', function($scope, event_detail, $routeParams) {
  event_detail.success(function(data) {
    $scope.detail = data[$routeParams.id];
    $scope.tickets = data[$routeParams.id].tickets;

  });
}]);

app.controller('HomeController', ['$scope', 'venues', function($scope, photos) {
  photos.success(function(data) {
    $scope.photos = data;
  });
}]);

app.controller('VenueController', ['$scope', 'venues', '$routeParams', function($scope, venues, $routeParams) {
  venues.success(function(data) {
    $scope.detail = data[$routeParams.id];
    $scope.events = data[$routeParams.id].events;
  });
}]);