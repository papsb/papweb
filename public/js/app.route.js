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
    //.state('workshop.index', {
    //  url         : '/index',
    //  templateUrl : 'views/workshop.html'
    //})

    .state('workshop.message1', {
      url         : '/message1',
      templateUrl : 'views/workshop.message1.html',
      title       : 'Message 1',
      controller  : function ($scope, toastr) {
        $scope.names = ["Nizam", "Hassan", "Adam", "Burhan"];
        toastr.success('The message from message 1: ' + $scope.names[2]);
      }
    })

};
