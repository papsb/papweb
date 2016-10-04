
/**
* perkhidmatan bas routes
**/

angular.module('papweb')
  .run(['$rootScope', '$state', '$stateParams', basInit])
  .config(['$stateProvider', '$urlRouterProvider', '$locationProvider', basRoute]);

function basInit ($rootScope, $state, $stateParams) {
  $rootScope.$state = $state;
  $rootScope.$stateParams = $stateParams;
  $rootScope.$on("$stateChangeStart", function (event, toState, toParams, fromState, fromParams) {
    if (toState.redirectTo) {
      event.preventDefault();
      $state.go(toState.redirectTo, toParams)
    }
  });
}

function basRoute ($stateProvider, $urlRouterProvider, $locationProvider) {
  $locationProvider.hashPrefix('!');
  $urlRouterProvider.otherwise('/home'); // for any unmatched url, redirect here

  $stateProvider
    // route for the perkhidmatan bas section
    .state('perkhidmatan-bas', {
      url         : '/perkhidmatan-bas',
      templateUrl : 'views/perkhidmatan-bas/perkhidmatan-bas.html',
      title       : 'Perkhidmatan Bas',
      controller  : 'RouteCtrl as vm',
      redirectTo  : 'perkhidmatan-bas.laluan-dalam'
    })
    .state('perkhidmatan-bas.laluan-dalam', {
      url         : '/laluan-dalam',
      templateUrl : 'views/perkhidmatan-bas/perkhidmatan-bas.laluan-dalam.html',
      title       : 'Perkhidmatan Bas Henti-Henti Dalam Putrajaya'
    })
    .state('perkhidmatan-bas.laluan-luar', {
      url         : '/laluan-luar',
      templateUrl : 'views/perkhidmatan-bas/perkhidmatan-bas.laluan-luar.html',
      title       : 'Perkhidmatan Bas Henti-Henti Luar Putrajaya'
    })
    .state('perkhidmatan-bas.laluan-terus', {
      url         : '/laluan-terus',
      templateUrl : 'views/perkhidmatan-bas/perkhidmatan-bas.laluan-terus.html',
      title       : 'Perkhidmatan Bas Laluan Terus Dalam Putrajaya'
    })
    .state('perkhidmatan-bas.laluan-malam', {
      url         : '/laluan-malam',
      templateUrl : 'views/perkhidmatan-bas/perkhidmatan-bas.laluan-malam.html',
      title       : 'Perkhidmatan Bas Waktu Malam Dalam Putrajaya'
    })
    .state('perkhidmatan-bas.laluan-sekolah', {
      url         : '/laluan-sekolah',
      templateUrl : 'views/perkhidmatan-bas/perkhidmatan-bas.laluan-sekolah.html',
      title       : 'Perkhidmatan Bas Sekolah Dalam Putrajaya'
    })
    .state('perkhidmatan-bas.tambang', {
      url         : '/jadual-tambang',
      templateUrl : 'views/perkhidmatan-bas/perkhidmatan-bas.tambang.html',
      title       : 'Jadual Tambang',
    })
    // .state('perkhidmatan-bas.sewa-khas', {
    //   url         : '/sewa-khas',
    //   templateUrl : 'views/perkhidmatan-bas/perkhidmatan-bas.sewa-khas.html',
    //   title       : 'Sewaan Bas',
    // })
    .state('perkhidmatan-bas.sightseeing', {
      url         : '/putrajaya-sightseeing',
      templateUrl : 'views/perkhidmatan-bas/perkhidmatan-bas.sightseeing.html',
      title       : 'Putrajaya Sightseeing',
    })
};
