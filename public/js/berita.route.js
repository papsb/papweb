/**
* about routes
**/

angular.module('papweb')
  .run(['$rootScope', '$state', '$stateParams', beritaInit])
  .config(['$stateProvider', '$urlRouterProvider', '$locationProvider', beritaRoute]);

function beritaInit ($rootScope, $state, $stateParams) {
  $rootScope.$state = $state;
  $rootScope.$stateParams = $stateParams;
  $rootScope.$on("$stateChangeStart", function (event, toState, toParams, fromState, fromParams) {
    if (toState.redirectTo) {
      event.preventDefault();
      $state.go(toState.redirectTo, toParams)
    }
  });
}

function beritaRoute ($stateProvider, $urlRouterProvider, $locationProvider) {
  $locationProvider.hashPrefix('!');
  $urlRouterProvider.otherwise('/home'); // for any unmatched url, redirect here

  $stateProvider
    // route for the about section
    .state('berita', {
      url         : '/berita-peristiwa',
      templateUrl : 'views/berita/berita.html',
      title       : 'Berita PAPSB',
      controller  : 'BeritaCtrl as vm',
      redirectTo  : 'berita.bengkel'
    })
    .state('berita.bengkel', {
      url         : '/bengkel',
      templateUrl : 'views/berita/berita.bengkel.html',
      title       : 'Mengenai Berita Bengkel',
    })
    .state('berita.mattafair2016', {
      url         : '/matta-fair-2016',
      templateUrl : 'views/berita/berita.mattafair2016.html',
      title       : 'Matta Fair 2016',
    })
};
