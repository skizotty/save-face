app.factory('contact', ['$http', function($http) {
  return $http.get('utils/contacts.php')
         .success(function(data) {
           return data;
         })
         .error(function(data) {
           return data;
         });
}]);