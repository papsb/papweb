/**
* papweb Module
*
* Description
*/

angular.module('papweb', [ 'ui.router', 'angular-loading-bar', 'ngAnimate', 'ngCookies' ])

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

  .controller('PengumumanCtrl', ['$scope', '$cookies', function($scope, $cookies) {
    var vm = this;
    var cookiesCheck = $cookies.get('pengumuman');
    var now = new Date();

    vm.pengumuman = true;
    vm.imgBase = "/img/makluman/";
    vm.imgName = "ppa1m-larai.jpg";
    vm.imgAlt = "Makluman PPA1M Larai, Presint 6";
    vm.imgPath = vm.imgBase + vm.imgName;

    if (cookiesCheck) { vm.pengumuman = false }

    angular.element(document).ready(function() {
      angular.element('#pengumuman').modal('show');
    })

    // calculate cookies to expire in an hour
    now.setTime(now.getTime() + 1*3600*1000);
    $cookies.put('pengumuman', true, { expires: now.toUTCString() });
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
