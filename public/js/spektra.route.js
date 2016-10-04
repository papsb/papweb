
/**
* spektra.route.js
*
* SPEKTRA Route file
*/

angular.module('papweb')
  .run(['$rootScope', '$state', '$stateParams', spektraInit])
  .config(['$stateProvider', '$urlRouterProvider', '$locationProvider', spektraRoute]);

function spektraInit ($rootScope, $state, $stateParams) {
  $rootScope.$state = $state;
  $rootScope.$stateParams = $stateParams;
  $rootScope.$on("$stateChangeStart", function (event, toState, toParams, fromState, fromParams) {
    if (toState.redirectTo) {
      event.preventDefault();
      $state.go(toState.redirectTo, toParams)
    }
  });
}

function spektraRoute ($stateProvider, $urlRouterProvider, $locationProvider) {
  $locationProvider.hashPrefix('!');
  $urlRouterProvider.otherwise('/home'); // for any unmatched url, redirect here

  $stateProvider
    // route for the spektra section
    .state('spektra', {
      url         : '/spektra',
      templateUrl : 'views/spektra/spektra.html',
      title       : 'Konsep SPEKTRA',
      redirectTo  : 'spektra.konsep'
    })

        .state('spektra.konsep', {
          url         : '/konsep-spektra',
          templateUrl : 'views/spektra/spektra.konsep.html',
          title       : 'Konsep SPEKTRA',
        })
        .state('spektra.spb', {
          url         : '/sistem-pengurusan-bas',
          templateUrl : 'views/spektra/spektra.spb.html',
          title       : 'Sistem Pengurusan Bas',
        })
        .state('spektra.smb', {
          url         : '/sistem-maklumat-bas',
          templateUrl : 'views/spektra/spektra.smb.html',
          title       : 'Sistem Maklumat Bas',
        })
        .state('spektra.ste', {
          url         : '/sistem-tiket-elektronik',
          templateUrl : 'views/spektra/spektra.ste.html',
          title       : 'Sistem Tiket Elektronik',
        })
        .state('spektra.spa', {
          url         : '/sistem-parkir-automatik',
          templateUrl : 'views/spektra/spektra.spa.html',
          title       : 'Sistem Parkir Automatik',
        })
};
