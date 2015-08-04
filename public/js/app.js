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

    $http.get('http://papsb.com.my/data/routes.json')
      .success(function (data) {
        vm.routes = data;
      })
  }])
