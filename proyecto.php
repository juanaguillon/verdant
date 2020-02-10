<?php require "./_header.php" ?>
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
              <img src="./resources/images/image5.jpg" alt="">
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
        <form action="" id="form_proyecto_interesado">
          <div class="row">
            <div class="col-md-6">
              <div class="proyecto_interes_wrapc">
                <div class="proyecto_interes_title">
                  <h4>¿Qué solución te gustaría integrar?</h4>
                </div>
                <div class="proyecto_interes_list">
                  <ul class="page_list_checkbox">
                    <li>
                      <div class="page_cbox_wrap">
                        <input type="checkbox" name="" id="integrity1">
                        <i class="icon-check"></i>
                      </div>
                      <label for="integrity1">Iluminación</label>
                    </li>
                    <li>
                      <div class="page_cbox_wrap">
                        <input type="checkbox" name="" id="integrity2">
                        <i class="icon-check"></i>
                      </div>
                      <label for="integrity2">Cortinas y Toldos</label>
                    </li>
                    <li>
                      <div class="page_cbox_wrap">
                        <input type="checkbox" name="" id="integrity3">
                        <i class="icon-check"></i>
                      </div>
                      <label for="integrity3">Sistemas de climatización</label>
                    </li>
                    <li>
                      <div class="page_cbox_wrap">
                        <input type="checkbox" name="" id="integrity4">
                        <i class="icon-check"></i>
                      </div>
                      <label for="integrity4">Seguridad y monitoreo</label>
                    </li>
                    <li>
                      <div class="page_cbox_wrap">
                        <input type="checkbox" name="" id="integrity5">
                        <i class="icon-check"></i>
                      </div>
                      <label for="integrity5">Sistema de multimedia</label>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="proyecto_interes_wrapc">
                <div class="proyecto_interes_title">
                  <h4>¿Cuántos inmuebles desea transformar?</h4>
                </div>
                <div class="proyecto_interes_list">
                  <input type="number" name="" id="" class="form-control">
                </div>
              </div>
              <div class="proyecto_interes_wrapc">
                <div class="proyecto_interes_title">
                  <h4>¿Qué tipo de inmueble desea transformar?</h4>
                </div>
                <div class="proyecto_interes_list">
                  <ul class="page_list_checkbox">
                    <li>
                      <div class="page_cbox_wrap">
                        <input type="checkbox" name="" id="transform1">
                        <i class="icon-check"></i>
                      </div>
                      <label for="transform1">Casa</label>
                    </li>
                    <li>
                      <div class="page_cbox_wrap">
                        <input type="checkbox" name="" id="transform2">
                        <i class="icon-check"></i>
                      </div>
                      <label for="transform2">Departamento</label>
                    </li>
                    <li>
                      <div class="page_cbox_wrap">
                        <input type="checkbox" name="" id="transform3">
                        <i class="icon-check"></i>
                      </div>
                      <label for="transform3">Edificio</label>
                    </li>
                    <li>
                      <div class="page_cbox_wrap">
                        <input type="checkbox" name="" id="transform3">
                        <i class="icon-check"></i>
                      </div>
                      <label for="transform3">Oficina</label>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="proyecto_interes_wrapc">
                <div class="proyecto_interes_title">
                  <h4>¿Qué uso le da al inmueble?</h4>
                </div>
                <div class="proyecto_interes_list">
                  <ul class="page_list_radio">
                    <li>
                      <input type="radio" name="usoinmueble" id="useidal1">
                      <label for="useidal1">Vivienda</label>
                    </li>
                    <li>
                      <input type="radio" name="usoinmueble" id="useidal2">
                      <label for="useidal2">Laboral</label>
                    </li>
                    <li>
                      <input type="radio" name="usoinmueble" id="useidal3">
                      <label for="useidal3">Comercial</label>
                    </li>
                    <li>
                      <input type="radio" name="usoinmueble" id="useidal3">
                      <label for="useidal3">Hospitalidad</label>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="proyecto_interes_wrapc">
                <div class="proyecto_interes_title form_label">
                  <h4>Nombre completo</h4>
                  <span class="required">*</span>
                </div>
                <div class="proyecto_interes_list">
                  <input type="text" placeholder="Escriba su nombre o el de su compañía" name="" id="" class="form-control">
                </div>
              </div>
              <div class="proyecto_interes_wrapc">
                <div class="proyecto_interes_title form_label">
                  <h4>Correo electrónico</h4>
                  <span class="required">*</span>
                </div>
                <div class="proyecto_interes_list">
                  <input type="email" placeholder="ejemplo@dominio.com" name="" id="" class="form-control">
                </div>
              </div>
              <div class="proyecto_interes_wrapc">
                <div class="proyecto_interes_title form_label">
                  <h4>Ingrese código postal del inmueble</h4>
                  <span class="required">*</span>
                </div>
                <div class="proyecto_interes_list">
                  <input type="text" placeholder="" name="" id="" class="form-control">
                </div>
              </div>
              <div class="proyecto_interes_wrapc">
                <div class="proyecto_interes_title form_label">
                  <h4>Situación/Problema que se presenta en el inmueble (en caso de que exista)</h4>
                </div>
                <div class="proyecto_interes_list">
                  <textarea name="" id="" cols="30" rows="4" class="form-control textarea"></textarea>
                </div>
              </div>

              <div class="proyecto_interes_wrapc">
                <div class="proyecto_interes_title form_label">
                  <h4>Estamos seguros de que nuestros precios son os mejores, si ya cuentas con una cotización de otra empresa, <strong>¡Envíala juanto con el formulario y nosotros la mejoraremos!</strong>
                  </h4>
                </div>
                <div class="proyecto_interes_list">
                  <div class="page_input_file">
                    <input type="file">
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
          </div>
        </form>

      </div>
    </div>
  </div>



</main>
<?php require "./_footer.php" ?>