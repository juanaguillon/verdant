<?php require "./_header.php";
$server = "db5000315045.hosting-data.io";
$user = "dbu565072";
$password = "Verdant1234%";
$db = "dbs307615";

$enlace = mysqli_connect($server, $user, $password, $db);
?>

<main id="main_contacto">
  <section id="page_banner" class="general_section">
    <div class="page_banner_wrap container-fluid">
      <div class="page_banner_container">
        <div class="page_banner_slick">
          <div class="page_banner_slick_i">

            <div class="page_banner_context">
              <div class="page_banner_context_wrap">
                <div class="page_banner_title">
                  <h3>Contáctanos</h3>
                </div>
              </div>
            </div>

            <div class="page_banner_img imagefill_">
              <img src="resources\images\contacto-banner-verdant.jpg" alt="">
            </div>

          </div>
        </div>
      </div>

      <div class="page_banner_arrowdown">
        <div class="page_banner_arrow_button">
          <button>
            <i class="icon-arrow-down"></i>
          </button>
        </div>
      </div>

    </div>
  </section>


  <div id="proyecto_interesado" class="general_section">
    <div class="proyecto_interesado_wrap container">
      <div class="proyecto_interesado_container">
        <div class="section_title">
          <h3>Contáctanos para recibir información de tu interés</h3>
        </div>
        <form action="./includes/envioform.php" name="form" id="form_proyecto_interesado" method="post">
          <div class="row">

            <div class="col-md-7 col-lg-8">
              <div class="row">
                <div class="proyecto_interes_wrapc col-md-12">
                  <div class="proyecto_interes_title form_label">
                    <i class="icon-man"></i>
                    <h4>Nombre completo</h4>
                    <span class="required">*</span>
                  </div>
                  <div class="proyecto_interes_list">
                    <input type="text" placeholder="Escriba su nombre o el de su compañía" name="nombre" id="" class="form-control" onkeypress="return check(event)">
                  </div>
                </div>
                <div class="proyecto_interes_wrapc col-12 col-sm-6 col-md-6">
                  <div class="proyecto_interes_title form_label">
                    <i class="icon-mail"></i>
                    <h4>Correo electrónico</h4>
                    <span class="required">*</span>
                  </div>
                  <div class="proyecto_interes_list">
                    <input type="email" placeholder="ejemplo@dominio.com" name="email" id="" class="form-control">
                  </div>
                </div>
                <div class="proyecto_interes_wrapc col-12 col-sm-6 col-md-6">
                  <div class="proyecto_interes_title form_label">
                    <i class="icon-company"></i>
                    <h4>Ciudad</h4>
                    <span class="required">*</span>
                  </div>
                  <div class="proyecto_interes_list">
                    <input type="text" placeholder="Escriba su ciudad" name="ciudad" id="" class="form-control">
                  </div>
                </div>
                <div class="proyecto_interes_wrapc col-12 col-sm-6 col-md-6">
                  <div class="proyecto_interes_title form_label">
                    <i class="icon-phone"></i>
                    <h4>Número de teléfono</h4>
                    <span class="required">*</span>
                  </div>
                  <div class="proyecto_interes_list">
                    <input type="tel" placeholder="Escriba su numero de contacto" name="cell" id="" class="form-control">
                  </div>
                </div>
                <div class="proyecto_interes_wrapc col-12 col-sm-6 col-md-6">
                  <div class="proyecto_interes_title form_label">
                    <i class="icon-blueprint-house"></i>
                    <h4>Area de interés</h4>
                    <span class="required">*</span>
                  </div>
                  <div class="proyecto_interes_list">
                    <select id="inputState" name="area" class="form-control">
                      <option selected disabled>Area de interés</option>
                      <option>Iluminación</option>
                      <option>Cortinas y Toldos</option>
                      <option>Sistemas de Climatización</option>
                      <option>Seguridad y Monitoreo</option>
                      <option>Multimedia</option>
                    </select>
                  </div>
                </div>
                <div class="proyecto_interes_wrapc col-md-12">
                  <div class="proyecto_interes_title form_label">
                    <h4>Mensaje</h4>
                  </div>
                  <div class="proyecto_interes_list">
                    <textarea name="mensaje" id="" cols="30" rows="4" class="form-control textarea" onkeypress="return check(event)"></textarea>
                  </div>
                </div>
                <div class=" proyecto_interes_wrapc col-md-12 ">
                  <button class=" g_button" name="enviar" type="submit" onclick="validar()">Enviar</button>
                </div>
              </div>
            </div>
            <div class="col-md-5 col-lg-4">

              <div class="contacto_data_wrap">
                <div class="contacto_wrap_container">
                  <h3>Información de contacto</h3>
                  <div class="contacto_data_field">
                    <span class="contacto_field">Email:</span>
                    <span class="contacto_value">info@verdantcomfort.com</span>
                  </div>
                  <div class="contacto_data_field">
                    <span class="contacto_field">Teléfono:</span>
                    <span class="contacto_value">+52 55 5611 8391</span>
                  </div>
                  <div class="contacto_data_field">
                    <span class="contacto_field">Dirección:</span>
                    <span class="contacto_value">Cincinnati 81, Noche Buena, Benito Juárez, 03720 Ciudad de México, CDMX, México</span>
                  </div>
                  <div class="contacto_data_field">
                    <span class="contacto_field">Nuestras redes</span>
                    <ul class="contacto_redes">
                      <li><a href="https://www.facebook.com/Verdantcomfortmx/" target="_blank"><i class="icon-facebook"></i></a></li>
                      <li><a href="" class="instagram-verdant" target="_blank"><i class="icon-instagram"></i></a></li>
                      <!-- <li><a href="https://wa.me/5215548991475?text=Hola,%20estoy%20interesad@%20en%20sus%20servicios." target="_blank"><i class="icon-whatsapp"></i></a></li> -->
                    </ul>
                  </div>
                  <div class="contacto_data_field">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.754576505592!2d-99.1821286857294!3d19.37977664739094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff833ec74c57%3A0xcf9c3f574afe85b0!2sVerdant%20Comfort!5e0!3m2!1ses!2sco!4v1583191498583!5m2!1ses!2sco" width="100%" height="200px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </form>

      </div>
    </div>
  </div>



</main>
<script>
  function check(e) {
    t = (document.all) ? e.keyCode : e.which;

    if (t == 33 || t == 35 || t == 36 || t == 37 || t == 38 || t == 47 || t == 33 || t == 64) {
      return false;
    } else {
      return true;
    }
  }
</script>
<?php require "./_footer.php" ?>
<?php
if (isset($_POST['enviar'])) {
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $phone = $_POST['cell'];
  $city = $_POST['ciudad'];
  $area = $_POST['area'];
  $msj = $_POST['mensaje'];
  $nombreS = mysqli_real_escape_string($enlace, $nombre);
  $emailS = mysqli_real_escape_string($enlace, $email);
  $phoneS = mysqli_real_escape_string($enlace, $phone);
  $cityS = mysqli_real_escape_string($enlace, $city);
  $areaS = mysqli_real_escape_string($enlace, $area);
  $msjS = mysqli_real_escape_string($enlace, $msj);
  $insert = "INSERT INTO contact VALUES('','$nombreS', '$emailS', '$phoneS' ,'$cityS', '$areaS', '$msjS')";
  $executeInsert = mysqli_query($enlace, $insert);
}
