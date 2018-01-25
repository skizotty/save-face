
app.factory('event', ['$http', function($http) {
  return $http.get('utils/select_events.php')
         .success(function(data) {
           return data;
         })
         .error(function(data) {
           return data;
         });
}]);