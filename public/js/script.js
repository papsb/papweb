/**
* papweb Module
*
* Description
*/
angular.module('papweb', [])

.controller('HeaderCtrl', ['$scope', function($scope){
  var vm = this;

  angular.element(document).ready(function () {
    console.log('from document ready');
    angular.element('.bxslider').bxSlider();
  });

}]);

// $(document).ready(function() {
//   $('.bxslider').bxSlider();
// });
