/**
* papweb Module
*
* Description
*/

angular.module('papweb')
  .run(['$rootScope', '$state', '$stateParams', papwebInit])
  .config(['$stateProvider', '$urlRouterProvider', '$locationProvider', papwebRoute]);

function papwebInit ($rootScope, $state, $stateParams) {
  $rootScope.$state = $state;
  $rootScope.$stateParams = $stateParams;
  $rootScope.$on("$stateChangeStart", function (event, toState, toParams, fromState, fromParams) {
    if (toState.redirectTo) {
      event.preventDefault();
      $state.go(toState.redirectTo, toParams)
    }
  });
}

function papwebRoute ($stateProvider, $urlRouterProvider, $locationProvider) {
  $locationProvider
    .html5Mode({
      enabled: false,
      requireBase: true
    })
    .hashPrefix('!');
  $urlRouterProvider.otherwise('/'); // for any unmatched url, redirect here

  $stateProvider
    .state('/', {
      url         : '/',
      title       : 'Selamat Datang',
    })
    // route for the putrajaya sentral section
    .state('sentral', {
      url         : '/putrajaya-sentral',
      templateUrl : 'views/putrajaya-sentral.html',
      title       : 'Putrajaya Sentral',
    })
    // route for the tlk section
    .state('tlk', {
      url         : '/tempat-letak-kereta',
      templateUrl : 'views/tempat-letak-kereta.html',
      title       : 'Tempat Letak Kereta',
    })
    // route for the park&ride section
    .state('park-n-ride', {
      url         : '/park-and-ride',
      templateUrl : 'views/park-and-ride.html',
      title       : 'Park & Ride',
    })
    // route for the berita dan peristiwa section
    .state('berita-peristiwa', {
      url         : '/berita-dan-peristiwa',
      templateUrl : 'views/berita-dan-peristiwa.html',
      title       : 'Berita & Peristiwa',
    })
}
