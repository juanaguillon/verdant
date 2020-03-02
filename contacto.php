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
        <form action="./includes/envioform.php"  id="form_proyecto_interesado" method="post">
          <div class="row">

            <div class="col-md-6">
              <div class="proyecto_interes_wrapc">
                <div class="proyecto_interes_title form_label">
                  <i class="icon-man"></i>
                  <h4>Nombre completo</h4>
                  <span class="required">*</span>
                </div>
                <div class="proyecto_interes_list">
                  <input type="text" placeholder="Escriba su nombre o el de su compañía" name="nombre" id="" class="form-control">
                </div>
              </div>
              <div class="proyecto_interes_wrapc">
                <div class="proyecto_interes_title form_label">
                  <i class="icon-mail"></i>
                  <h4>Correo electrónico</h4>
                  <span class="required">*</span>
                </div>
                <div class="proyecto_interes_list">
                  <input type="email" placeholder="ejemplo@dominio.com" name="email" id="" class="form-control">
                </div>
              </div>
              <div class="proyecto_interes_wrapc">
                <div class="proyecto_interes_title form_label">
                  <i class="icon-residential"></i>
                  <h4>Ciudad</h4>
                  <span class="required">*</span>
                </div>
                <div class="proyecto_interes_list">
                  <input type="text" placeholder="" name="ciudad" id="" class="form-control">
                </div>
              </div>
              <div class="proyecto_interes_wrapc">
                <div class="proyecto_interes_title form_label">
                  <i class="icon-phone"></i>
                  <h4>Número de teléfono</h4>
                  <span class="required">*</span>
                </div>
                <div class="proyecto_interes_list">
                  <input type="number" placeholder="" name="cell" id="" class="form-control">
                </div>
              </div>
              <div class="proyecto_interes_wrapc">
                <div class="proyecto_interes_title form_label">
                  <i class="icon-stack"></i>
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
              <div class="proyecto_interes_wrapc">
                <div class="proyecto_interes_title form_label">
                  <h4>Mensaje</h4>
                </div>
                <div class="proyecto_interes_list">
                  <textarea name="mensaje" id="" cols="30" rows="4" class="form-control textarea"></textarea>
                </div>
              </div>
              <div class="proyecto_interes_wrapc text-center">
                <button class="g_button" name="enviar" type="submit">Enviar</button>
              </div>
            </div>
            <div class="col-md-6">

              <div class="contacto_data_wrap">
                <div class="contacto_wrap_container">
                  <h3>Información de contacto</h3>
                  <div class="contacto_data_field">
                    <span class="contacto_field"><i class="icon-mail"></i>Email:</span>
                    <span class="contacto_value">someemail@domain.com</span>
                  </div>
                  <div class="contacto_data_field">
                    <span class="contacto_field"><i class="icon-phone"></i>Teléfono:</span>
                    <span class="contacto_value">(+57) 441 31 78</span>
                  </div>
                  <div class="contacto_data_field">
                    <span class="contacto_field"><i class="icon-map"></i>Dirección:</span>
                    <span class="contacto_value">5 S. Wentworth Street, Roy, UT 84067</span>
                  </div>
                  <div class="contacto_data_field">
                    <ul class="contacto_redes">
                      <li><a href="https://www.facebook.com/Verdantcomfortmx/" target="_blank"><i class="icon-facebook"></i></a></li>
                      <li><a href="" class="instagram-verdant" target="_blank"><i class="icon-instagram"></i></a></li>
                      <li><a href="https://wa.me/5215548991475?text=Hola,%20estoy%20interesad@%20en%20sus%20servicios." target="_blank"><i class="icon-whatsapp"></i></a></li>
                    </ul>
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
