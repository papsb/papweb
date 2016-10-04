
/**
* pengiklanan.route.js
*
*/

angular.module('papweb')
  .run(['$rootScope', '$state', '$stateParams', pengiklananInit])
  .config(['$stateProvider', '$urlRouterProvider', '$locationProvider', pengiklananRoute]);

function pengiklananInit ($rootScope, $state, $stateParams) {
  $rootScope.$state = $state;
  $rootScope.$stateParams = $stateParams;
  $rootScope.$on("$stateChangeStart", function (event, toState, toParams, fromState, fromParams) {
    if (toState.redirectTo) {
      event.preventDefault();
      $state.go(toState.redirectTo, toParams)
    }
  });
}

function pengiklananRoute ($stateProvider, $urlRouterProvider, $locationProvider) {
  $locationProvider.hashPrefix('!');
  $urlRouterProvider.otherwise('/home'); // for any unmatched url, redirect here

  $stateProvider
    // pengiklanan route
    .state('pengiklanan', {
      url         : '/pengiklanan',
      templateUrl : 'views/pengiklanan/pengiklanan.html',
      title       : 'Pengiklanan',
      redirectTo  : 'pengiklanan.overview'
    })
    .state('pengiklanan.overview', {
      url         : '/overview',
      templateUrl : 'views/pengiklanan/pengiklanan.overview.html',
      title       : 'Konsep Pengiklanan',
    })
    .state('pengiklanan.bunting', {
      url         : '/bunting',
      templateUrl : 'views/pengiklanan/pengiklanan.bunting.html',
      title       : 'Model Pengiklanan Bunting',
    })
    .state('pengiklanan.billboard', {
      url         : '/billboard',
      templateUrl : 'views/pengiklanan/pengiklanan.billboard.html',
      title       : 'Model Pengiklanan Billboard',
    })
};
