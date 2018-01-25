app.factory('venues', ['$http', function($http) {
  return $http.get('utils/venues.php')
         .success(function(data) {
           return data;
         })
         .error(function(data) {
           return data;
         });
}]);
