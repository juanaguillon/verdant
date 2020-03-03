<?php
// $mainUrl = "/Verdant/verdant";
$mainUrl = "https://verdantcomfort.com";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Verdant</title>
  <link rel="icon" href="./resources/images/favicon.ico"> 
  <link rel="stylesheet" href="./assets/css/style.css">
  
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5LN7749');
  </script>

</head>

<body>
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5LN7749" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <header>
    <div class="header_wrap">
      <div class="header_container">
        <div class="header_left">
          <div class="header_logo">
            <a href="<?= $mainUrl ?>">
              <img class="logo_white" src="./resources/images/verdant_logo.svg" alt="">
              <img class="logo_color" src="./resources/images/verdant_logo_color.svg" alt="">
            </a>
          </div>
        </div>
        <div class="header_right">
          <button id="header_right_toggle_button" class="g_button square no-fill">
            <i class="icon-bars"></i>
          </button>
          <div class="header_menu">
            <ul id="header_menu_list">
              <li>
                <a href="<?= $mainUrl ?>">INICIO</a>
              </li>
              <li>
                <a href="<?= $mainUrl ?>/somos.php">NOSOTROS</a>
              </li>
              <li>
                <a href="<?= $mainUrl ?>/proyecto.php">PROYECTO</a>
              </li>
              <li>
                <a href="<?= $mainUrl ?>/soluciones.php">SOLUCIONES</a>
              </li>
              <li>
                <a href="<?= $mainUrl ?>/tecnologia.php">TECNOLOGÍA</a>
              </li>
              <li>
                <a href="<?= $mainUrl ?>/contacto.php">CONTACTO</a>
              </li>
              <li>
                <a class="contacto-whastapp" target="_blank" href="https://wa.me/5215548991475?text=Hola,%20estoy%20interesad@%20en%20sus%20servicios."><i class="icon-whatsapp"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>