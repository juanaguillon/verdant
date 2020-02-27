<?php
// $mainUrl = "/Verdant/verdant";
$mainUrl = "/verdant";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Verdant</title>
  <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
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