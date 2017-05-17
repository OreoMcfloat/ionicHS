angular.module('starter', ['ionic', 'starter.controllers'])
.config(function($stateProvider, $urlRouterProvider, $ionicConfigProvider) {
	$ionicConfigProvider.tabs.position('bottom');
	
  $stateProvider
    .state('app', {
    url: '/app',
    abstract: true,
    templateUrl: 'templates/menu.html',
	controller: 'ProfileCtrl'
  })
  .state('app.home', {
    url: '/home',
    views: {
      'menuContent': {
        templateUrl: 'templates/home.html',
		controller: 'HistoryCtrl'
      }
    }
  }) 
   .state('app.report', {
    url: '/report',
    views: {
      'menuContent': {
        templateUrl: 'templates/report.html'

      }
    }
  }) 
   .state('login', {
      url: '/login',
      templateUrl: 'templates/login.html'
  })  
     .state('register', {
      url: '/register',
      templateUrl: 'templates/register.html'
  })   
  .state('app.statistics', {
    url: '/statistics',
    views: {
      'menuContent': {
        templateUrl: 'templates/statistics.html'
		
      }
    }
  })
   .state('app.discover', {
    url: '/discover',
    views: {
      'menuContent': {
        templateUrl: 'templates/discover.html'
      }
    }
  })
   .state('app.share', {
    url: '/share',
    views: {
      'menuContent': {
        templateUrl: 'templates/share.html'
      }
    }
  })
    .state('app.comment', {
    url: '/comment',
    views: {
      'menuContent': {
        templateUrl: 'templates/comment.html'
		
      }
    }
  })
    .state('app.account', {
    url: '/account',
    views: {
      'menuContent': {
        templateUrl: 'templates/account.html'
      }
    }
  })
    .state('app.notification', {
    url: '/notification',
    views: {
      'menuContent': {
        templateUrl: 'templates/notification.html'
      }
    }
  })
    .state('app.faq', {
    url: '/faq',
    views: {
      'menuContent': {
        templateUrl: 'templates/faq.html'
      }
    }
  })
    .state('app.about', {
    url: '/about',
    views: {
      'menuContent': {
        templateUrl: 'templates/about.html'
      }
    }
  });
  $urlRouterProvider.otherwise('/login');
});
