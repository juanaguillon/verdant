<?php
// $mainUrl = "/Verdant/verdant";
$mainUrl = "https://verdantcomfort.com";
?>
<footer class="general_section">

  <div class="footer_container container">
    <div class="footer_wrap">
      <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="row footer_items_row">
            <div class="col-sm-6 footer_col footer_col_left">
              <ul>
                <li><a href="<?= $mainUrl ?>">Inicio</a></li>
                <li><a href="<?= $mainUrl ?>/somos">Nosotros</a></li>
                <li><a href="<?= $mainUrl ?>/proyecto">Proyecto</a></li>
                <li><a href="<?= $mainUrl ?>/politicas">Políticas</a></li>
              </ul>
            </div>
            <div class="col-sm-6 footer_col footer_col_right">
              <ul>
                <li><a href="<?= $mainUrl ?>/soluciones">Soluciones</a></li>
                <li><a href="<?= $mainUrl ?>/tecnologia">Tecnología</a></li>
                <li><a href="<?= $mainUrl ?>/contacto">Contacto</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-8 col-lg-9">
          <div class="row">
            <div class="col-md-6">
              <div class="footer_redes">
                <div class="footer_redes_text">
                  <span>¡Síguenos en nuestras redes sociales</span>
                </div>
                <div class="footer_redes_list">
                  <ul>
                    <li><a href="https://www.facebook.com/Verdantcomfortmx/" target="_blank"><i class="icon-facebook"></i></a></li>
                    <li><a href="" class="instagram-verdant" target="_blank"><i class="icon-instagram"></i></a></li>
                    <!-- <li><a href="https://wa.me/5215548991475?text=Hola,%20estoy%20interesad@%20en%20sus%20servicios." target="_blank"><i class="icon-whatsapp"></i></a></li> -->
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="footer_news">
                <div class="footer_news_text">
                  Recibe las mejores noticias de tecnología:
                </div>
                <div class="footer_news_form">
                  <form id="footer_news_form">
                    <div class="form-group">
                      <input class="form-control" type="text" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                      <input class="form-control" type="text" placeholder="Correo electrónico">
                    </div>
                    <div class="form-group">
                      <button class="g_button light">Enviar</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>


      </div>
    </div>
  </div>

  <div class="footer_rights_wrap">
    <div class="footer_rights_container">
      <div class="footer_rights_logo">
        <img src="./resources/images/verdant_logo.svg" alt="">
      </div>
      <div class="footer_rights_text">
        <span>Todos los derechos reservados. Verdant 2020</span>
      </div>
    </div>
  </div>

  <script src="./assets/app.js"></script>
</footer>

<link  rel="icon" href="imagenes/favicon.ico" type="image/ico" />
</body>

</html>