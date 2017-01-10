/**
* papweb Module
*
* Description
*/

angular.module('papweb', [ 'ui.router', 'angular-loading-bar', 'ngAnimate' ])

  .controller('HeaderCtrl', ['$scope', function(){
    var vm = this

    vm.slider = {
      caption: false,
      multi_image: 2,
      items: [
        { caption: "Kompleks Perbadanan Putrajaya", url: "/img/slider/1.jpg" },
        { caption: "Kompleks Instana Kehakiman", url: "/img/slider/2.jpg" }
      ]
    }
  }])

  .controller('PengumumanCtrl', ['$scope', function() {
    var vm = this;
    vm.pengumuman = true;

    angular.element(document).ready(function() {
      angular.element('#pengumuman').modal('show');
    })
  }])

  .controller('RouteCtrl', [ '$scope', '$http', function ($scope, $http) {
    var vm = this

    $http.get('../data/routes.json')
      .success(function (data) {
        vm.route_local = data.route_local;
        vm.route_journey = data.route_journey;
        vm.route_night = data.route_night;
        vm.route_direct = data.route_direct;
      })
      .error(function (data) {
        console.log('GET ROUTES: Something went wrong' + data);
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
