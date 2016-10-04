/**
* about routes
**/

angular.module('papweb')
  .run(['$rootScope', '$state', '$stateParams', aboutInit])
  .config(['$stateProvider', '$urlRouterProvider', '$locationProvider', aboutRoute]);

function aboutInit ($rootScope, $state, $stateParams) {
  $rootScope.$state = $state;
  $rootScope.$stateParams = $stateParams;
  $rootScope.$on("$stateChangeStart", function (event, toState, toParams, fromState, fromParams) {
    if (toState.redirectTo) {
      event.preventDefault();
      $state.go(toState.redirectTo, toParams)
    }
  });
}

function aboutRoute ($stateProvider, $urlRouterProvider, $locationProvider) {
  $locationProvider.hashPrefix('!');
  $urlRouterProvider.otherwise('/home'); // for any unmatched url, redirect here

  $stateProvider
    // route for the about section
    .state('about', {
      url         : '/about',
      templateUrl : 'views/about/about.html',
      title       : 'Mengenai PAPSB',
      // abstract    : true,
      redirectTo  : 'about.about-us'
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
