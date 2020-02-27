import "bootstrap/scss/bootstrap.scss";
import "slick-carousel/slick/slick-theme.scss";
import "slick-carousel/slick/slick.scss";
import "slick-carousel/slick/slick"
import $ from "jquery"

import "./sass/index.scss";

import "./js/index"
$('.banner-carousel').slick({
     autoplay: true,
     autoplaySpeed: 2800,
    //  fade: true,
     infinite: true,
});

// var altobanner = window.innerHeight;

// $(document).scroll(function () {
//     var scrollvideo = $(document).scrollTop()
//     console.log(scrollvideo, altobanner)
//     if (scrollvideo > altobanner) {
//         $('.video-home video').attr("autoplay", true);
//     }
// });