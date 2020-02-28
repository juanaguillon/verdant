import "bootstrap/scss/bootstrap.scss";
import "slick-carousel/slick/slick-theme.scss";
import "slick-carousel/slick/slick.scss";
import "slick-carousel/slick/slick"
import $ from "jquery"

import "./sass/index.scss";

import "./js/index"
$('.banner-carousel').slick({
     autoplay: true,
     autoplaySpeed: 3000,
    //  fade: true,
     infinite: true,
     lazyLoad: 'ondemand'
});

    var ua = navigator.userAgent.toLowerCase();
    var isAndroid = ua.indexOf("android") > -1; //&& ua.indexOf("mobile");
    var iOS = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
    var b = $(".instagram-verdant")
    b.click(function () {
      var userName = "verdantcomfortmex"
      if (isAndroid || iOS) {
        b.attr("href", "instagram://user?username=" + userName)
      } else {
        b.attr("href", "https://www.instagram.com/" + userName)
      }
    })

// var altobanner = window.innerHeight;

// $(document).scroll(function () {
//     var scrollvideo = $(document).scrollTop()
//     console.log(scrollvideo, altobanner)
//     if (scrollvideo > altobanner) {
//         $('.video-home video').attr("autoplay", true);
//     }
// });