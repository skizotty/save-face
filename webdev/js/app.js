var app = angular.module('TicketApp', ['ngRoute']);

app.config(function ($routeProvider) { 
  $routeProvider 
    .when('/', { 
      controller: 'HomeController', 
      templateUrl: 'views/home.html' 
    })
    .when('/venues/:id', { 
      controller: 'VenueController', 
      templateUrl: 'views/venue.html' 
    })
    .when('/contact/', { 
      controller: 'ContactController', 
      templateUrl: 'views/contact.html' 
    })
    .when('/events/', { 
      controller: 'EventController', 
      templateUrl: 'views/events.html' 
    })
    .when('/events/:id', { 
      controller: 'EventDetailController', 
      templateUrl: 'views/event_detail.html' 
    })
    .when('/artist/', { 
      controller: 'ArtistController', 
      templateUrl: 'views/artists.html' 
    })
    .when('/artist/:id', { 
      controller: 'ArtistDetailController', 
      templateUrl: 'views/artist_detail.html' 
    })
    .when('/login/', { 
      templateUrl: 'views/login.html' 
    }) 
    
});


app.config(['$locationProvider', function($locationProvider) {
   $locationProvider.hashPrefix(''); // by default '!'
   $locationProvider.html5Mode(true);
}]);


app.filter("formatDate", function(){
   return function(input){
      var date = date.split("-").join("/");
      var dateOut = new Date(date);
      return dateOut;
   }
});