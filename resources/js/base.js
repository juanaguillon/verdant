import "imagefill/src/imagefill";

/**
 * Mostrar/Ocultar el menú de navegación en resposive
 */
function toggleNavInResponsive() {
  $("#header_right_toggle_button").click(function() {
    $(".header_menu").toggleClass("show");
  });
}

function initPlugins(){
  // $(".imagefill_container").imagefill()
}

window.onload = function() {
  toggleNavInResponsive();
  initPlugins();
};
