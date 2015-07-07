/**
* papweb Module
*
* Description
*/

angular.module('papweb', ['ui.router'])

.controller('HeaderCtrl', ['$scope', function($scope){
  var vm = this;

  angular.element(document).ready(function () {
    angular.element('.bxslider').bxSlider();
  });

}]);
