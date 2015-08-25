/**
* papweb Module
*
* Description
*/

angular.module('papweb', [ 'ui.router' ])

  .controller('HeaderCtrl', ['$scope', function($scope){
    var vm = this;

    angular.element(document).ready(function () {
      angular.element('.bxslider').bxSlider();
    });
  }])

  .controller('RouteCtrl', [ '$scope', '$http', function ($scope, $http) {
    var vm = this;

    $http.get('../data/routes.json')
      .success(function (data) {
        vm.route_local = data.route_local;
        vm.route_journey = data.route_journey;
        vm.route_night = data.route_night;
        vm.route_direct = data.route_direct;
      })
  }])
