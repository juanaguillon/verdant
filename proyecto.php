<?php require "./_header.php";
$server = "db5000315045.hosting-data.io";
$user = "dbu565072";
$password = "Verdant1234%";
$db = "dbs307615";

$enlace = mysqli_connect($server, $user, $password, $db);
?>
<main id="main_proyecto">

  <section id="page_banner" class="general_section">
    <div class="page_banner_wrap container-fluid">
      <div class="page_banner_container">
        <div class="page_banner_slick">
          <div class="page_banner_slick_i">

            <div class="page_banner_context">
              <div class="page_banner_context_wrap">
                <div class="page_banner_title">
                  <h3>Cotiza tu Proyecto</h3>
                </div>
              </div>
            </div>

            <div class="page_banner_img imagefill_">
              <img src="resources/images/proyecto-banner-verdant.jpg" alt="">
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
          <h3>¿Estás interesado en convertir tu inmueble en uno inteligente?</h3>
        </div>
        <form action="./includes/projectform.php" enctype="multipart/form-data" method="post" id="form_proyecto_interesado">
          <div class="row">
            <div class="col-md-6">
              <div class="proyecto_interes_wrapc">
                <div class="proyecto_interes_title">
                  <i class="icon-support"></i>
                  <h4>¿Qué solución te gustaría integrar?</h4>
                </div>
                <div class="proyecto_interes_list">
                  <ul class="page_list_checkbox">
                    <li>
                      <div class="page_cbox_wrap">
                        <input type="checkbox" name="solution[]" id="integrity1" value="Iluminación">
                        <i class="icon-check"></i>
                      </div>
                      <label for="integrity1">Iluminación</label>
                    </li>
                    <li>
                      <div class="page_cbox_wrap">
                        <input type="checkbox" name="solution[]" id="integrity2" value="Cortinas y Toldos">
                        <i class="icon-check"></i>
                      </div>
                      <label for="integrity2">Cortinas y Toldos</label>
                    </li>
                    <li>
                      <div class="page_cbox_wrap">
                        <input type="checkbox" name="solution[]" id="integrity3" value="Sistemas de climatización">
                        <i class="icon-check"></i>
                      </div>
                      <label for="integrity3">Sistemas de climatización</label>
                    </li>
                    <li>
                      <div class="page_cbox_wrap">
                        <input type="checkbox" name="solution[]" id="integrity4" value="Seguridad y monitoreo">
                        <i class="icon-check"></i>
                      </div>
                      <label for="integrity4">Seguridad y monitoreo</label>
                    </li>
                    <li>
                      <div class="page_cbox_wrap">
                        <input type="checkbox" name="solution[]" id="integrity5" value="Sistema de multimedia">
                        <i class="icon-check"></i>
                      </div>
                      <label for="integrity5">Sistema de multimedia</label>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="proyecto_interes_wrapc">
                <div class="proyecto_interes_title">
                  <i class="icon-clipboard"></i>
                  <h4>¿Cuántos inmuebles desea transformar?</h4>
                </div>
                <div class="proyecto_interes_list">
                  <input type="number" name="size" id="" class="form-control">
                </div>
              </div>
              <div class="proyecto_interes_wrapc">
                <div class="proyecto_interes_title">
                  <i class="icon-wardrobe"></i>
                  <h4>¿Qué tipo de inmueble desea transformar?</h4>
                </div>
                <div class="proyecto_interes_list">
                  <ul class="page_list_checkbox">
                    <li>
                      <div class="page_cbox_wrap">
                        <input type="checkbox" name="type[]" id="transform1" value="Casa">
                        <i class=" icon-check"></i>
                      </div>
                      <label for="transform1">Casa</label>
                    </li>
                    <li>
                      <div class="page_cbox_wrap">
                        <input type="checkbox" name="type[]" id="transform2" value="Departamento">
                        <i class="icon-check"></i>
                      </div>
                      <label for="transform2">Departamento</label>
                    </li>
                    <li>
                      <div class="page_cbox_wrap">
                        <input type="checkbox" name="type[]" id="transform3" value="Edificio">
                        <i class="icon-check"></i>
                      </div>
                      <label for="transform3">Edificio</label>
                    </li>
                    <li>
                      <div class="page_cbox_wrap">
                        <input type="checkbox" name="type[]" id="transform3" value="Oficina">
                        <i class="icon-check"></i>
                      </div>
                      <label for="transform3">Oficina</label>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="proyecto_interes_wrapc">
                <div class="proyecto_interes_title">
                  <i class="icon-residential"></i>
                  <h4>¿Qué uso le da al inmueble?</h4>
                </div>
                <div class="proyecto_interes_list">
                  <ul class="page_list_radio">
                    <li>
                      <input type="radio" name="use" id="useidal1" value="Vivienda">
                      <label for="useidal1">Vivienda</label>
                    </li>
                    <li>
                      <input type="radio" name="use" id="useidal2" value="Laboral">
                      <label for="useidal2">Laboral</label>
                    </li>
                    <li>
                      <input type="radio" name="use" id="useidal3" value="Comercial">
                      <label for="useidal3">Comercial</label>
                    </li>
                    <li>
                      <input type="radio" name="use" id="useidal3" value="Hospitalidad">
                      <label for="useidal3">Hospitalidad</label>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="proyecto_interes_wrapc">
                <div class="proyecto_interes_title form_label">
                  <i class="icon-man"></i>
                  <h4>Nombre completo</h4>
                  <span class="required">*</span>
                </div>
                <div class="proyecto_interes_list">
                  <input type="text" placeholder="Escriba su nombre o el de su compañía" name="name" id="" class="form-control">
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
                  <i class="icon-scan"></i>
                  <h4>Ingrese código postal del inmueble</h4>
                  <span class="required">*</span>
                </div>
                <div class="proyecto_interes_list">
                  <input type="text" placeholder="" name="postalCode" id="" class="form-control">
                </div>
              </div>
              <div class="proyecto_interes_wrapc">
                <div class="proyecto_interes_title form_label">
                  <h4>Situación/Problema que se presenta en el inmueble (en caso de que exista)</h4>
                </div>
                <div class="proyecto_interes_list">
                  <textarea name="message" id="" cols="30" rows="4" class="form-control textarea"></textarea>
                </div>
              </div>

              <div class="proyecto_interes_wrapc">
                <div class="proyecto_interes_title form_label">
                  <h4>Estamos seguros de que nuestros precios son os mejores, si ya cuentas con una cotización de otra empresa, <strong>¡Envíala juanto con el formulario y nosotros la mejoraremos!</strong>
                  </h4>
                </div>
                <div class="proyecto_interes_list">
                  <div class="page_input_file">
                    <input type="file" name="adjunt" id="adjunto">
                    <div class="page_input_wrap">
                      <div class="page_input_icon">
                        <i class="icon-attach_file"></i>
                      </div>
                      <div class="page_input_label">Adjunta la cotización</div>
                    </div>
                    <span>El archivo no debe ser superior a 10MB</span>

                  </div>
                </div>

              </div>


            </div>
            <div class="col-12">
              <div class="proyecto_interes_wrapc text-center">
                <button class="g_button" type="submit" name="enviar">Enviar cotización</button>
              </div>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>



</main>
<?php require "./_footer.php";
if (isset($_POST['enviar'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $solution = $_POST['solution'];
  $size = $_POST['size'];
  $type = $_POST['type'];
  $use = $_POST['use'];
  $postalCode = $_POST['postalCode'];
  $message = $_POST['message'];


  $nombreS = mysqli_real_escape_string($enlace, $name);
  $emailS = mysqli_real_escape_string($enlace, $email);
  $sizeS = mysqli_real_escape_string($enlace, $size);
  $postalCodeS = mysqli_real_escape_string($enlace, $postalCode);
  $msjS = mysqli_real_escape_string($enlace, $message);

  $solutions;
  $types;
  foreach ($solution as $s) {
    if (!$solutions) {
      $solutions = $s;
    } else {
      $solutions = $solutions . ", " . $s;
    }
  }

  foreach ($type as $t) {
    if (!$types) {
      $types = $t;
    } else {
      $types = $types . ", " . $t;
    }
  }

  $dir_subida = dirname(__FILE__) . "/includes/storage/";
  $fichero_subido =  $dir_subida . basename($_FILES['adjunt']['name']);


  if (move_uploaded_file($_FILES['adjunt']['tmp_name'], $fichero_subido)) {
    echo "bien";
  } else {
    echo "mal";
  }


  $insert = "INSERT INTO project VALUES('','$nombreS', '$emailS', '$solutions', '$sizeS' ,'$types', '$use', '$postalCodeS', '$msjS', '$fichero_subido' )";
  $executeInsert = mysqli_query($enlace, $insert);
}

?>