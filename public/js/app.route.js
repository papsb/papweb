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

    // route for the about page
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

};
