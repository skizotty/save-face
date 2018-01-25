app.factory('artist', ['$http', function($http) {
  return $http.get('utils/artist.php')
         .success(function(data) {
           return data;
         })
         .error(function(data) {
           return data;
         });
}]);

app.factory('contact', ['$http', function($http) {
  return $http.get('utils/contacts.php')
         .success(function(data) {
           return data;
         })
         .error(function(data) {
           return data;
         });
}]);


app.factory('event', ['$http', function($http) {
  return $http.get('utils/select_events.php')
         .success(function(data) {
           return data;
         })
         .error(function(data) {
           return data;
         });
}]);

app.factory('venues', ['$http', function($http) {
  return $http.get('utils/venues.php')
         .success(function(data) {
           return data;
         })
         .error(function(data) {
           return data;
         });
}]);


app.factory('event_detail', ['$http', function($http) {
  return $http.get('utils/event_details.php')
         .success(function(data) {
           return data;
         })
         .error(function(data) {
           return data;
         });
}]);
