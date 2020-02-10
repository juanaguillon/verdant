import "imagefill/src/imagefill";

/**
 * Mostrar/Ocultar el menú de navegación en resposive
 */
function toggleNavInResponsive() {
  $("#header_right_toggle_button").click(function() {
    $(".header_menu").toggleClass("show");
  });
}

function initPlugins() {
  // $(".imagefill_").imagefill({ runOnce: true na});
}

/**
 * Cuando se haga scroll, debe cambiar el header. Esta función creará este comportamiento
 */
function setFixedHeaderInScroll() {
  var header = $("header");
  let $document = $(document);
  
  if ($document.scrollTop() > 100) {
    header.addClass("fixed");
  } else {
    header.removeClass("fixed");
  }

  $document.scroll(function() {
    if ($document.scrollTop() > 100) {
      header.addClass("fixed");
    } else {
      header.removeClass("fixed");
    }
  });
}

window.onload = function() {
  toggleNavInResponsive();
  initPlugins();
  setFixedHeaderInScroll();
};
