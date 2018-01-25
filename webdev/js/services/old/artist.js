app.factory('artist', ['$http', function($http) {
  return $http.get('utils/artist.php')
         .success(function(data) {
           return data;
         })
         .error(function(data) {
           return data;
         });
}]);