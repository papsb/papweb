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
}

function papwebRoute ($stateProvider, $urlRouterProvider, $locationProvider) {
  $locationProvider.hashPrefix('!');
  $urlRouterProvider.otherwise('/home'); // for any unmatched url, redirect here

  $stateProvider
    .state('home', {
      url         : '/home',
      title       : 'Selamat Datang',
    })

    // route for the about section
    .state('about', {
      url         : '/about',
      templateUrl : 'views/about/about.html',
      title       : 'Mengenai PAPSB',
      controller  : function ($state){
        $state.go('.about-us');
      }
    })

        .state('about.about-us', {
          url         : '/about-us',
          templateUrl : 'views/about/about.about-us.html',
          title       : 'Mengenai PAPSB',
        })
        .state('about.visi', {
          url         : '/visi',
          templateUrl : 'views/about/about.visi.html',
          title       : 'Visi, Misi & Objectif',
        })
        .state('about.pengarah', {
          url         : '/lembaga-pengarah',
          templateUrl : 'views/about/about.pengarah.html',
          title       : 'Ahli Lembaga Pengarah',
        })
        .state('about.carta', {
          url         : '/carta-organisasi',
          templateUrl : 'views/about/about.carta.html',
          title       : 'Carta Organisasi',
        })

    // route for the perkhidmatan bas section
    .state('perkhidmatan-bas', {
      url         : '/perkhidmatan-bas',
      templateUrl : 'views/perkhidmatan-bas/perkhidmatan-bas.html',
      title       : 'Perkhidmatan Bas',
      controller  : function ($state){
        $state.go('.henti-henti');
      }
    })

        .state('perkhidmatan-bas.henti-henti', {
          url         : '/bas-henti-henti',
          templateUrl : 'views/perkhidmatan-bas/perkhidmatan-bas.henti-henti.html',
          title       : 'Perkhidmatan Bas Henti-Henti',
        })
        .state('perkhidmatan-bas.tambang', {
          url         : '/jadual-tambang',
          templateUrl : 'views/perkhidmatan-bas/perkhidmatan-bas.tambang.html',
          title       : 'Jadual Tambang',
        })
        .state('perkhidmatan-bas.sewa-khas', {
          url         : '/sewa-khas',
          templateUrl : 'views/perkhidmatan-bas/perkhidmatan-bas.sewa-khas.html',
          title       : 'Sewaan Bas',
        })
        .state('perkhidmatan-bas.sightseeing', {
          url         : '/putrajaya-sightseeing',
          templateUrl : 'views/perkhidmatan-bas/perkhidmatan-bas.sightseeing.html',
          title       : 'Putrajaya Sightseeing',
        })

    // route for the tlk section
    .state('tlk', {
      url         : '/tempat-letak-kereta',
      templateUrl : 'views/tempat-letak-kereta.html',
      title       : 'Tempat Letak Kereta',
      controller  : function ($state){
        // $state.go('.henti-henti');
      }
    })
    // route for the park&ride section
    .state('park-n-ride', {
      url         : '/park-and-ride',
      templateUrl : 'views/park-and-ride.html',
      title       : 'Park & Ride',
      controller  : function ($state){
        // $state.go('.henti-henti');
      }
    })
};
