
/**
* pengiklanan.route.js
*
*/

angular.module('papweb')
  .run(['$rootScope', '$state', '$stateParams', percetakanInit])
  .config(['$stateProvider', '$urlRouterProvider', '$locationProvider', percetakanRoute]);

function percetakanInit ($rootScope, $state, $stateParams) {
  $rootScope.$state = $state;
  $rootScope.$stateParams = $stateParams;
  $rootScope.$on("$stateChangeStart", function (event, toState, toParams, fromState, fromParams) {
    if (toState.redirectTo) {
      event.preventDefault();
      $state.go(toState.redirectTo, toParams)
    }
  });
}

function percetakanRoute ($stateProvider, $urlRouterProvider, $locationProvider) {
  $stateProvider
    // pengiklanan route
    .state('percetakan', {
      url         : '/percetakan',
      templateUrl : 'views/percetakan/percetakan.html',
      title       : 'Pengiklanan',
      redirectTo  : 'percetakan.overview'
    })
    .state('percetakan.overview', {
      url         : '/overview',
      templateUrl : 'views/percetakan/percetakan.overview.html',
      title       : 'Konsep Pengiklanan',
    })
    .state('percetakan.bunting', {
      url         : '/bunting',
      templateUrl : 'views/percetakan/percetakan.bunting.html',
      title       : 'Model Pengiklanan Bunting',
    })
    .state('percetakan.billboard', {
      url         : '/billboard',
      templateUrl : 'views/percetakan/percetakan.billboard.html',
      title       : 'Model Pengiklanan Billboard',
    })
};
