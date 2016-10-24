
/**
* spektra.route.js
*
* SPEKTRA Route file
*/

angular.module('papweb')
  .config(['$stateProvider', spektraRoute]);

function spektraRoute ($stateProvider) {
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
          title       : 'Konsep SPEKTRA'
        })
        .state('spektra.spb', {
          url         : '/sistem-pengurusan-bas',
          templateUrl : 'views/spektra/spektra.spb.html',
          title       : 'Sistem Pengurusan Bas'
        })
        .state('spektra.smb', {
          url         : '/sistem-maklumat-bas',
          templateUrl : 'views/spektra/spektra.smb.html',
          title       : 'Sistem Maklumat Bas'
        })
        .state('spektra.ste', {
          url         : '/sistem-tiket-elektronik',
          templateUrl : 'views/spektra/spektra.ste.html',
          title       : 'Sistem Tiket Elektronik'
        })
        .state('spektra.spa', {
          url         : '/sistem-parkir-automatik',
          templateUrl : 'views/spektra/spektra.spa.html',
          title       : 'Sistem Parkir Automatik'
        });
}
