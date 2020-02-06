<?php require "./_header.php" ?>
<main id="main_proyecto">
  <section id="page_banner" class="general_section">
    <div class="page_banner_wrap container">
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

            <div class="page_banner_img">
              <img src="./resources/images/image5.jpg" alt="">
            </div>
          </div>
        </div>
      </div>

      <div class="page_banner_arrowdown">
        <div class="page_banner_arrow_button">
          <button>ARROW</button>
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
        <form>
          <div class="row">
            <div class="col-md-6 d-flex align-items-center proyecto_interes_col proyecto_interes_coleft">
              <div class="form_label">
                <span class="required">*</span>
                <label for="">¿Qué te gustaría integrar?</label>
              </div>
            </div>
            <div class="col-md-6 d-flex align-items-center proyecto_interes_col">
              <select multiple class="form-control" name="" id="">
                <option value="Iluminación">Iluminación</option>
                <option value="Cortina y toldso">Cortina y toldso</option>
                <option value="Sistema de Climatización">Sistema de Climatización</option>
                <option value="Seguridad y monitoreo">Seguridad y monitoreo</option>
                <option value="Sistema Multimedia">Sistema Multimedia</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 d-flex align-items-center proyecto_interes_col proyecto_interes_coleft">
              <div class="form_label">
                <span class="required">*</span>
                <label for="">Tipo de inmueble</label>
              </div>
            </div>
            <div class="col-md-6 d-flex align-items-center proyecto_interes_col">
              <select multiple class="form-control" name="" id="">
                <option value="Casa">Casa</option>
                <option value="Departamento">Departamento</option>
                <option value="Edificio">Edificio</option>
                <option value="Oficina">Oficina</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 d-flex align-items-center proyecto_interes_col proyecto_interes_coleft">
              <div class="form_label">
                <span class="required">*</span>
                <label for="">Uso que se le da al inmueble</label>
              </div>
            </div>
            <div class="col-md-6 d-flex align-items-center proyecto_interes_col">
              <select multiple class="form-control" name="" id="">
                <option value="Vivienda">Vivienda</option>
                <option value="Laboral">Laboral</option>
                <option value="Comercial">Comercial</option>
                <option value="Hospitalidad">Hospitalidad</option>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 d-flex align-items-center proyecto_interes_col proyecto_interes_coleft">
              <div class="form_label">
                <label for="">Situación/ Problema que presenta
                  el inmueble (en caso de que existia)</label>
              </div>
            </div>
            <div class="col-md-6 d-flex align-items-center proyecto_interes_col">
              <input type="text" class="form-control">
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 d-flex align-items-center proyecto_interes_col proyecto_interes_coleft">
              <div class="form_label">
                <span class="required">*</span>
                <label for="">Ingresa el código postal del inmueble</label>
              </div>
            </div>
            <div class="col-md-6 d-flex align-items-center proyecto_interes_col">
              <input type="text" class="form-control">
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 d-flex align-items-center proyecto_interes_col proyecto_interes_coleft">
              <div class="form_label">
                <span class="required">*</span>
                <label for="">Nombre completo</label>
              </div>
            </div>
            <div class="col-md-6 d-flex align-items-center proyecto_interes_col">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 d-flex align-items-center proyecto_interes_col proyecto_interes_coleft">
              <div class="form_label">
                <span class="required">*</span>
                <label for="">Correo electrónico</label>
              </div>
            </div>
            <div class="col-md-6 d-flex align-items-center proyecto_interes_col">
              <input type="email" class="form-control">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 d-flex align-items-center proyecto_interes_col proyecto_interes_coleft">
              <div class="form_label">
                <span class="required">*</span>
                <label for="">Teléfono</label>
              </div>
            </div>
            <div class="col-md-6 d-flex align-items-center proyecto_interes_col">
              <input type="tel" class="form-control">
            </div>
          </div>

          <div class="section_parraf">
            <p>Estamos seguros de que nuestros precios son los mejores, si ya cuentas con una cotización de otra
              empresa, ¡envíala junto con el formulario y nosotros la mejoraremos!</p>
          </div>
          <div class="row">
            <div class="col-md-6 d-flex align-items-center proyecto_interes_col proyecto_interes_coleft">
              <div class="form_label">
                <label for="">Adjuntar cotización</label>
              </div>
            </div>
            <div class="col-md-6 d-flex align-items-center proyecto_interes_col">
              <input type="number" class="form-control">
            </div>
          </div>

          <button class="g_button">Enviar</button>

        </form>

      </div>
    </div>
  </div>



</main>
<?php require "./_footer.php" ?>