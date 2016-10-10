/**
* papweb.berita module
*
* Description
*/

angular.module('papweb')

  .controller('BeritaCtrl', ['$scope', function($scope){
    angular.element(document).ready(function () {

      // angular.element('.bxslider').bxSlider();
      angular.element('#carousel').flexslider({
        animation: "slide",
        controlNav: true,
        animationLoop: false,
        slideshow: false,
        itemWidth: 210,
        itemMargin: 5,
        asNavFor: '#slider'
      });

      angular.element('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel"
      });
    });
  }])
