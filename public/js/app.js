* papweb Module
*
* Description
*/

angular.module('papweb', [ 'ui.router', 'angular-loading-bar', 'ngAnimate' ])

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
      .error(function (data) {
        console.log('GET ROUTES: Something went wrong');
      });

    vm.combineAndSlice = function (data) {
      return data.outbound.join(" - ") +
             (data.inbound ? " - " : "") + //check if there is inbound route to add 'dash'
             (data.inbound ? data.inbound.slice(1).join(" - ") : "")
    }

    vm.combineList = function (data) {
      return data.outbound.join(" - ")
    }

  }])
