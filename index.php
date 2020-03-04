<?php require "./_header.php";
$server = "db5000315045.hosting-data.io";
$user = "dbu565072";
$password = "Verdant1234%";
$db = "dbs307615";

$enlace = mysqli_connect($server, $user, $password, $db);

?>

<style>
  #aro {
    stroke-dasharray: 0;
    stroke-dashoffset: 1000;
    animation-duration: 3s;
    animation-timing-function: ease-in;
    animation-name: bombillo;
  }

  @keyframes bombillo {
    to {
      stroke-dashoffset: 0;
    }
  }
</style>
<main id="main_home">
  <section id="page_banner" class="general_section banner-home">
    <div class="page_banner_wrap container-fluid p-0">

      <div class="page_banner_container">
        <div class="page_banner_slick">
          <div class="page_banner_context col-md-5 col-lg-4 p-0 d-flex align-items-center justify-content-center">
            <div class="page_banner_context_wrap">
              <div class="page_banner_title home-title">
                <!-- <h3>Tecnología para tu Vida</h3> -->
                <h3>Es hora de renovar tu hogar</h3>
              </div>
              <div class="formulario-home"> 

                <form action="./includes/bannerform.php" method="post">

                  <div class="form-group">

                    <input type="text" class="form-control" id="inputAddress" placeholder="Nombre" name="nombre">
                  </div>
                  <div class="form-group">

                    <input type="email" class="form-control" id="inputAddress2" placeholder="Correo electrónico" name="email">
                  </div>
                  <div class="form-row custom-field-responsive-banner">
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control" id="inputCity" placeholder="Ciudad" name="ciudad">
                    </div>
                    <div class="form-group col-md-6">
                      <input type="tel" class="form-control" id="inputCity" placeholder="Teléfono" name="cell">
                    </div>

                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-12">

                      <select id="inputState" class="form-control" name="area">
                        <option selected disabled>Area de interés</option>
                        <option>Iluminación</option>
                        <option>Cortinas y Toldos</option>
                        <option>Sistemas de Climatización</option>
                        <option>Seguridad y Monitoreo</option>
                        <option>Multimedia</option>
                      </select>

                    </div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Describe brevemente tu solicitud" name="mensaje">
                  </div>
                  <button class="g_button" name="enviar" type="submit">Solicitar cotización</button>
                </form>


              </div>


            </div>
          </div>

          <div class="page_banner_img banner-carousel col-md-7 col-lg-8 p-0">
            <div class="slide-banner-home">
              <div class="imagefill_" style="width:100%;height:100vh;">
                <img src="resources/images/smart-home-media-2.jpg" alt="">
              </div>
              <div class="texto-banner-home">
                <h2>Tecnología para tu Vida</h2>
              </div>
            </div>

            <div class="slide-banner-home">
              <div class="imagefill_" style="width:100%;height:100vh;">
                <img src="./resources/images/iluminacion.jpg" alt="">
              </div>
              <div class="texto-banner-home">
                <h2>Iluminación</h2>
              </div>
            </div>

            <div class="slide-banner-home">
              <div class="imagefill_" style="width:100%;height:100vh;">
                <img src="resources/images/tecnologia.jpg" alt="">
              </div>
              <div class="texto-banner-home">
                <h2>Multimedia</h2>
              </div>
            </div>

            <div class="slide-banner-home">
              <div class="imagefill_" style="width:100%;height:100vh;">
                <img src="resources/images/seguridad-camaras.jpg" alt="">
              </div>
              <div class="texto-banner-home">
                <h2>Seguridad y Monitoreo</h2>
              </div>
            </div>
            <div class="slide-banner-home">
              <div class="imagefill_" style="width:100%;height:100vh;">
                <img src="resources/images/aire-acondicionado.jpg" alt="">
              </div>
              <div class="texto-banner-home">
                <h2>Sistemas de Climatización</h2>
              </div>
            </div>
            <div class="slide-banner-home">
              <div class="imagefill_" style="width:100%;height:100vh;">
                <img src="resources/images/cortina-automatica.jpg" alt="">
              </div>
              <div class="texto-banner-home">
                <h2>Cortinas y Toldos</h2>
              </div>
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

  <section id="home_domotica" class="general_section">

    <!-- <div class="home_domotica_left_image page_image_circle_wrap">
      <div class="page_imag_circle_bdotted left"></div>
      <div class="page_imag_circle_bsolid left"></div>
      <div class="page_image_circle_container imagefill_ left">
        <img src="./resources/images/image1.jpg" alt="">
      </div>
    </div> -->



    <div class="home_domotica_wrap container">
      <div class="row">
        <div class="col-lg-6 col-md-5 d-flex align-items-center">
          <div class="video-home">
            <video muted preload loop autoplay>
              <source src="resources/videos/animacion-verdant_3.mp4" type="video/mp4">
              <source src="resources/videos/animacion-verdant_3.ogv" type="video/ogv">
              <source src="resources/videos/animacion-verdant_3.webm" type="video/webm">
            </video>
          </div>
        </div>
        <div class="col-lg-6 col-md-7 p-0">
          <div class="home_domotica_context">
            <div class="home_domotica_title section_title">
              <h3>¿Qué es la Domótica e Inmótica?</h3>
            </div>
            <div class="home_domotica_desc">
              <p>La Domótica es el conjunto de sistemas que automatizan las diferentes funcionalidades de una vivienda
                mientras que la
                Inmótica
                es la implementación de dichas tecnologías en edificios. <br><br>
                Ambas aportan servicios de gestión energética, seguridad, bienestar y comuncación, y que pueden estar
                integrados por
                medio
                de redes interiores y exteriores de comunicación.</p>
            </div>
            <div class="home_domotica_action">
              <a href="somos" class="g_button">¿Quienes somos?</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="home_soluciones" class="general_section">
    <div class="home_soluciones_wrap container">
      <div class="home_soluciones_container">
        <div class="home_soluciones_context">
          <div class="row justify-content-center">

            <div class="col-md-6 col-lg-4">
              <div class="home_soluciones_title section_title">
                <h3>Soluciones Inteligentes</h3>
              </div>
              <div class="home_soluciones_desc">
                <p>
                  Automatización que
                  convierte tu casa en
                  un hogar. Tecnología
                  que convierte tus espacios en lugares
                  únicos y memorables.
                </p>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="home_solucion_card">
                <div class="home_solucion_card_wrap">
                  <div class="home_solucion_icon fadeInUp animated ">

                    <svg version="1.1" id="Capa_1" height="70px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 340 333" style="fill:#87b420;" xml:space="preserve">
                      <style type="text/css">

                      </style>
                      <path class="st0 bombillo" d="M66,133.5c0,0-21-57,18-67s49-4,65,8s30,41,53,27s66,4,58,32s-5,44,18,57s22,46,0,45s-54-40-68-16s-40,88-83,48
                        s11-61-11-80s-79-7-70-41C46,146.5,53,128.5,66,133.5z" />
                      <path class="st1 bombillo" d="M197.7,294.4h-66.4c-4.2,0-7.7-3.4-7.7-7.7v-0.2c0-4.2,3.4-7.7,7.7-7.7h66.4c4.2,0,7.7,3.4,7.7,7.7v0.2
                            C205.4,291,201.9,294.4,197.7,294.4z" />
                      <path class="st2 bombillo" d="M188.1,324.8h-47.2c-4.2,0-7.7-3.4-7.7-7.7V317c0-4.2,3.4-7.7,7.7-7.7h47.2c4.2,0,7.7,3.4,7.7,7.7v0.2
                            C195.8,321.4,192.3,324.8,188.1,324.8z" />
                      <path class="st1 bombillo" d="M216.8,216.5c-0.3,0.3-1,1-1,1.3c-11.4,12.3-14.3,31.7-15,43.1c-0.1,1.8-1.6,3.1-3.3,3.1h-64.6
                            c-1.8,0-3.2-1.4-3.3-3.2c-0.7-11.5-3.6-31.8-15.9-44.4c-17-14.8-27-36.3-27-59.1c0-43.4,35-78.4,78.4-78.4s78.4,35,78.4,78.4
                            C243.5,180.1,233.9,201.7,216.8,216.5z" />
                      <g>
                        <g>
                          <path class="st3 bombillo" d="M164.5,107.1c1.6,0,3.1,0.1,4.7,0.2c0.7,0.1,1.5,0.1,2.2,0.2c0.2,0,0.3,0,0.5,0.1c0.7,0.1-0.8-0.1-0.7-0.1
                        c0.4,0.1,0.9,0.1,1.4,0.2c2.9,0.5,5.9,1.2,8.7,2.1c1.4,0.5,2.8,1,4.2,1.5c1,0.4-1.1-0.5-0.2-0.1c0.3,0.1,0.6,0.3,0.9,0.4
                        c0.7,0.3,1.4,0.7,2.1,1c2.6,1.3,5.2,2.9,7.6,4.6c0.5,0.4,1.1,0.8,1.6,1.2c0.8,0.6-1-0.8,0,0c0.3,0.2,0.6,0.5,0.9,0.7
                        c1.1,0.9,2.2,1.9,3.3,2.9c1.1,1,2.1,2.1,3.1,3.2c0.5,0.5,0.9,1.1,1.4,1.6c0.2,0.3,0.4,0.5,0.6,0.8c0.1,0.1,0.2,0.3,0.3,0.4
                        c0.6,0.8-0.6-0.9-0.2-0.3c1.7,2.3,3.3,4.7,4.8,7.3c0.7,1.3,1.4,2.6,2,4c0.1,0.3,0.3,0.6,0.4,0.9c0.5,1.2-0.4-0.9,0,0
                        c0.3,0.7,0.5,1.3,0.8,2c1.2,3.2,2.1,6.4,2.7,9.7c0.2,0.8,0.3,1.7,0.4,2.5c0,0.1-0.2-1.4-0.1-0.7c0,0.3,0.1,0.6,0.1,0.9
                        c0,0.4,0.1,0.8,0.1,1.2c0.2,1.8,0.2,3.6,0.2,5.4c0,3.1,2.7,6,5.9,5.9c3.2-0.1,5.9-2.6,5.9-5.9c0-13.3-4.1-26.6-11.8-37.5
                        c-7.8-11-18.7-19.3-31.4-24.1c-7.1-2.6-14.7-3.9-22.3-3.9c-3.1,0-6,2.7-5.9,5.9C158.8,104.4,161.2,107.1,164.5,107.1L164.5,107.1z
                        " />
                        </g>
                      </g>
                      <g>
                        <g>
                          <path class="st3 bombillo-line" d="M294.5,82.8c-9.7,5.1-19.3,10.2-29,15.3c-1.4,0.7-2.7,1.4-4.1,2.2c-2.1,1.1-2.9,4.2-1.6,6.2
                                c1.4,2.1,3.9,2.8,6.2,1.6c9.7-5.1,19.3-10.2,29-15.3c1.4-0.7,2.7-1.4,4.1-2.2c2.1-1.1,2.9-4.2,1.6-6.2
                                C299.3,82.3,296.7,81.6,294.5,82.8L294.5,82.8z" />
                        </g>
                      </g>
                      <g>
                        <g>
                          <path class="st3 bombillo-line" d="M244.2,31c-6.1,9-12.3,18.1-18.4,27.1c-0.9,1.3-1.7,2.6-2.6,3.8c-1.3,2-0.4,5.1,1.6,6.2
                                c2.3,1.2,4.8,0.5,6.2-1.6c6.1-9,12.3-18.1,18.4-27.1c0.9-1.3,1.7-2.6,2.6-3.8c1.3-2,0.4-5.1-1.6-6.2
                                C248.1,28.2,245.6,28.9,244.2,31L244.2,31z" />
                        </g>
                      </g>
                      <g>
                        <g>
                          <path class="st3 bombillo-line" d="M30.6,90.6c9.7,5.1,19.3,10.2,29,15.3c1.4,0.7,2.7,1.4,4.1,2.2c2.1,1.1,5,0.6,6.2-1.6c1.1-2.1,0.6-5-1.6-6.2
                                c-9.7-5.1-19.3-10.2-29-15.3c-1.4-0.7-2.7-1.4-4.1-2.2c-2.1-1.1-5-0.6-6.2,1.6C27.9,86.5,28.4,89.4,30.6,90.6L30.6,90.6z" />
                        </g>
                      </g>
                      <g>
                        <g>
                          <path class="st3 bombillo-line" d="M79.7,35.6c6.1,9,12.3,18.1,18.4,27.1c0.9,1.3,1.7,2.6,2.6,3.8c1.3,2,4,3,6.2,1.6c1.9-1.3,3-4.1,1.6-6.2
                                c-6.1-9-12.3-18.1-18.4-27.1c-0.9-1.3-1.7-2.6-2.6-3.8c-1.3-2-4-3-6.2-1.6C79.4,30.7,78.3,33.5,79.7,35.6L79.7,35.6z" />
                        </g>
                      </g>
                      <g>
                        <g>
                          <path class="st3 bombillo-line" d="M160.6,7.3c0,10.9,0,21.9,0,32.8c0,1.5,0,3.1,0,4.6c0,2.4,2.1,4.6,4.5,4.5c2.4-0.1,4.5-2,4.5-4.5
                                c0-10.9,0-21.9,0-32.8c0-1.5,0-3.1,0-4.6c0-2.4-2.1-4.6-4.5-4.5C162.6,2.9,160.6,4.8,160.6,7.3L160.6,7.3z" />
                        </g>
                      </g>
                    </svg>
                  </div>
                  <div class="home_solucion_title">
                    <span>Iluminación</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="home_solucion_card">
                <div class="home_solucion_card_wrap">
                  <div class="home_solucion_icon fadeInUp animated ">
                    <svg version="1.1" id="Capa_1" height="70px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 281.4 333" style="enable-background:new 0 0 281.4 333;" xml:space="preserve">
                      <style type="text/css">
                        .st0 {
                          display: none;
                          fill: #FFFFFF;
                          stroke: #000000;
                          stroke-width: 4;
                        }

                        .st1 {
                          stroke: #87B420;
                          stroke-width: 9;
                          stroke-miterlimit: 10;
                        }

                        .st2 {
                          fill: none !important;
                          stroke: #87B420;
                          stroke-width: 9.3154;
                          stroke-miterlimit: 10;
                        }

                        .ventana {
                          fill: none;
                          stroke: #87B420;
                          stroke-width: 8.5277;
                          stroke-miterlimit: 10;
                        }

                        .st4 {
                          fill: none;
                          stroke: #87B420;
                          stroke-width: 7.9752;
                          stroke-miterlimit: 10;
                        }

                        .st5 {
                          fill: #fff;
                          stroke: #87B420;
                          stroke-width: 9.3154;
                          stroke-miterlimit: 10;
                        }
                      </style>
                      <path class="st0" d="M36.7,133.5c0,0-21-57,18-67s49-4,65,8s30,41,53,27s66,4,58,32s-5,44,18,57s22,46,0,45s-54-40-68-16
                    s-40,88-83,48s11-61-11-80s-79-7-70-41C16.7,146.5,23.7,128.5,36.7,133.5z" />
                      <path class="st1" d="M263.2,59.2H19c-0.9,0-1.6-0.7-1.6-1.6V43.3c0-0.9,0.7-1.6,1.6-1.6h244.2c0.9,0,1.6,0.7,1.6,1.6v14.2
                    C264.9,58.4,264.1,59.2,263.2,59.2z" />
                      <path class="st2" d="M272,218.6H10.2c-0.9,0-1.6-0.7-1.6-1.6v-14.2c0-0.9,0.7-1.6,1.6-1.6H272c0.9,0,1.6,0.7,1.6,1.6v14.2
                    C273.7,217.8,272.9,218.6,272,218.6z" />
                      <path class="st2" d="M272,41.7H10.2c-0.9,0-1.6-0.7-1.6-1.6V25.8c0-0.9,0.7-1.6,1.6-1.6H272c0.9,0,1.6,0.7,1.6,1.6V40
                    C273.7,40.9,272.9,41.7,272,41.7z" />
                      <path class="ventana" d="M226.5,201.2H55.8c-1.6,0-2.9-1.3-2.9-2.9V79.9c0-1.6,1.3-2.9,2.9-2.9h170.7c1.6,0,2.9,1.3,2.9,2.9v118.4
                    C229.4,199.9,228.1,201.2,226.5,201.2z" />
                      <path class="st4" d="M122.7,138.9H73.5c-1.6,0-2.9-1.3-2.9-2.9V97.5c0-1.6,1.3-2.9,2.9-2.9h49.2c1.6,0,2.9,1.3,2.9,2.9V136
                    C125.6,137.6,124.3,138.9,122.7,138.9z" />
                      <path class="st4" d="M122.7,201H73.5c-1.6,0-2.9-1.3-2.9-2.9v-38.5c0-1.6,1.3-2.9,2.9-2.9h49.2c1.6,0,2.9,1.3,2.9,2.9v38.5
                    C125.6,199.7,124.3,201,122.7,201z" />
                      <path class="st4" d="M196.5,138.9h-49.2c-1.6,0-2.9-1.3-2.9-2.9V97.5c0-1.6,1.3-2.9,2.9-2.9h49.2c1.6,0,2.9,1.3,2.9,2.9V136
                    C199.4,137.6,198.1,138.9,196.5,138.9z" />
                      <path class="st4" d="M196.5,201h-49.2c-1.6,0-2.9-1.3-2.9-2.9v-38.5c0-1.6,1.3-2.9,2.9-2.9h49.2c1.6,0,2.9,1.3,2.9,2.9v38.5
                    C199.4,199.7,198.1,201,196.5,201z" />
                      <line class="st2" x1="34.9" y1="236.3" x2="110.1" y2="236.3" />
                      <line class="st2" x1="26.1" y1="254" x2="92.4" y2="254" />
                      <line class="st2" x1="34.9" y1="271.7" x2="110.1" y2="271.7" />
                      <line class="st2" x1="101.3" y1="254" x2="110.1" y2="254" />
                      <g class="cortina">
                        <path class="st5 " d="M248.6,285.3L248.6,285.3c-3.7,2.1-8.2,2.3-12.1,0.8l-6.4-2.6c-3.5-1.4-7.4-1.4-10.9,0.2l-5.8,2.6
                    c-3.4,1.5-7.3,1.6-10.7,0.2l-8-3.1c-3.5-1.3-7.3-1.3-10.7,0.2l-6,2.6c-3.4,1.5-7.3,1.6-10.7,0.2l-8.3-3.2c-3.3-1.3-7-1.3-10.3,0.1
                    l-6.7,2.7c-3.9,1.6-8.4,1.3-12.1-0.8h0c-4.5-2.5-7.3-7.2-7.3-12.3V59.2h133.2V273C255.9,278.1,253.1,282.8,248.6,285.3z" />
                        <line class="st2" x1="224.7" y1="59.2" x2="224.7" y2="281.9" />
                        <line class="st2" x1="189.3" y1="59.2" x2="189.3" y2="281.9" />
                        <line class="st2" x1="153.9" y1="59.2" x2="153.9" y2="281.9" />
                      </g>

                    </svg>
                  </div>
                  <div class="home_solucion_title">
                    <span>Cortinas y Toldos</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="home_solucion_card">
                <div class="home_solucion_card_wrap">
                  <div class="home_solucion_icon">
                    <svg version="1.1" id="Capa_1" height="70px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 281.4 333" style="enable-background:new 0 0 281.4 333;" xml:space="preserve">
                      <style type="text/css">
                        .st0 {
                          display: none;
                          fill: #FFFFFF;
                          stroke: #000000;
                          stroke-width: 4;
                        }

                        .st1 {
                          stroke: #87B420;
                          stroke-width: 11.3267;
                          stroke-miterlimit: 10;
                        }

                        .st2 {
                          fill: #87B420;
                        }
                      </style>
                      <path class="st0" d="M36.7,133.5c0,0-21-57,18-67s49-4,65,8s30,41,53,27s66,4,58,32s-5,44,18,57s22,46,0,45s-54-40-68-16
                    s-40,88-83,48s11-61-11-80s-79-7-70-41C16.7,146.5,23.7,128.5,36.7,133.5z" />
                      <path class="st1 clima" d="M170.5,325.7c-36.2,0-65.6-29.4-65.6-65.6c0-21.4,10.4-41.4,27.9-53.7c1.3-0.9,2.1-2.5,2.1-4.1V44.2
                    c0-19.6,15.9-35.5,35.5-35.5S206,24.5,206,44.2v158.1c0,1.6,0.8,3.2,2.1,4.1c29.7,20.8,36.8,61.7,16,91.4
                    C211.9,315.2,191.9,325.6,170.5,325.7z" />
                      <path style="fill:#87B420;" d="M191.6,210.7V45.3c-0.4-11.7-10.2-20.8-21.9-20.4c-11.1,0.4-20,9.3-20.4,20.4v15c-0.2,2.7,1.8,5,4.5,5.2
                    c2.7,0.2,5-1.8,5.2-4.5c0-0.2,0-0.5,0-0.7v-15c0.3-6.3,5.7-11.2,12.1-10.9c5.9,0.3,10.6,5,10.9,10.9v143.2h-23V79.6
                    c-0.2-2.7-2.5-4.7-5.2-4.5c-2.4,0.2-4.3,2.1-4.5,4.5v131c-25.9,11.7-37.5,42.2-25.8,68.1s42.2,37.5,68.1,25.8s37.5-42.2,25.8-68.1
                    C212.3,225.1,203.1,215.9,191.6,210.7z M170.5,299.5c-23.1,0-41.9-18.6-41.9-41.7c0-17.5,10.9-33.2,27.3-39.3
                    c1.9-0.7,3.1-2.4,3.1-4.4v-15.9h23V214c0,2,1.3,3.8,3.1,4.5c21.6,8.1,32.6,32.2,24.5,53.9c-6.1,16.3-21.7,27.1-39.1,27.2
                    L170.5,299.5z" />
                      <g>
                        <g>
                          <path style="fill:#87B420;" class="bombillo-line" d="M235,158.5c3.7,0,7.5,0,11.2,0c0.5,0,1.1,0,1.6,0c2.7,0,5.2-2.3,5.1-5.1c-0.1-2.8-2.2-5.1-5.1-5.1
                        c-3.7,0-7.5,0-11.2,0c-0.5,0-1.1,0-1.6,0c-2.7,0-5.2,2.3-5.1,5.1C230.1,156.2,232.2,158.5,235,158.5L235,158.5z" />
                        </g>
                      </g>
                      <g>
                        <g>
                          <path style="fill:#87B420;" class="bombillo-line" d="M235,80.3c3.7,0,7.5,0,11.2,0c0.5,0,1.1,0,1.6,0c2.7,0,5.2-2.3,5.1-5.1c-0.1-2.8-2.2-5.1-5.1-5.1
                        c-3.7,0-7.5,0-11.2,0c-0.5,0-1.1,0-1.6,0c-2.7,0-5.2,2.3-5.1,5.1C230.1,77.9,232.2,80.3,235,80.3L235,80.3z" />
                        </g>
                      </g>
                      <g>
                        <g>
                          <path style="fill:#87B420;" class="bombillo-line" d="M235,41.1c5.2,0,10.5,0,15.7,0c0.8,0,1.5,0,2.3,0c2.7,0,5.2-2.3,5.1-5.1c-0.1-2.8-2.2-5.1-5.1-5.1
                        c-5.2,0-10.5,0-15.7,0c-0.8,0-1.5,0-2.3,0c-2.7,0-5.2,2.3-5.1,5.1C230.1,38.8,232.2,41.1,235,41.1L235,41.1z" />
                        </g>
                      </g>
                      <g>
                        <g>
                          <path style="fill:#87B420;" class="bombillo-line" d="M235,119.4c8.2,0,16.4,0,24.7,0c1.2,0,2.3,0,3.5,0c2.7,0,5.2-2.3,5.1-5.1c-0.1-2.8-2.2-5.1-5.1-5.1
                        c-8.2,0-16.4,0-24.7,0c-1.2,0-2.3,0-3.5,0c-2.7,0-5.2,2.3-5.1,5.1C230.1,117.1,232.2,119.4,235,119.4L235,119.4z" />
                        </g>
                      </g>
                      <g>
                        <g>
                          <path style="fill:#87B420;" class="bombillo-line" d="M235,197.7c5.2,0,10.5,0,15.7,0c0.8,0,1.5,0,2.3,0c2.7,0,5.2-2.3,5.1-5.1c-0.1-2.8-2.2-5.1-5.1-5.1
                        c-5.2,0-10.5,0-15.7,0c-0.8,0-1.5,0-2.3,0c-2.7,0-5.2,2.3-5.1,5.1C230.1,195.3,232.2,197.7,235,197.7L235,197.7z" />
                        </g>
                      </g>
                      <path style="fill:#87B420;" class="bombillo-line snow-spot" d="M91.2,106.4c8,4.2,8.5,5.2,10.6,5.2c2.7,0,4.8-2.2,4.8-4.8c0-1.7-0.9-3.4-2.5-4.2l-8.2-4.7l6.1-2.5
                    c2.3-1.3,3.1-4.3,1.7-6.6c-1.1-1.9-3.3-2.8-5.4-2.2L85.1,92l-17.3-9.6l17.3-9.7c13.5,5.4,13.3,5.7,15,5.7c2.7,0,4.8-2.2,4.8-4.9
                    c0-1.9-1.2-3.6-2.9-4.4l-6.1-2.3l8.2-4.6c2.3-1.3,3.2-4.3,1.9-6.6c-1.3-2.3-4.3-3.2-6.6-1.9l-8.2,4.6l1-6.5c0.4-2.6-1.4-5.1-4-5.5
                    c-2.6-0.4-5.1,1.4-5.5,4l-2.3,14.2l-17.6,9.9V53.9l11.1-8.8c2.2-1.6,2.6-4.6,1.1-6.8s-4.6-2.6-6.8-1.1c-0.1,0.1-0.2,0.2-0.3,0.2
                    l-5.1,4.1v-9.4c0.2-2.7-1.8-5-4.5-5.2c-2.7-0.2-5,1.8-5.2,4.5c0,0.2,0,0.5,0,0.7v9.4L48,37.5c-2-1.7-5.1-1.5-6.8,0.5
                    c-1.7,2-1.5,5.1,0.5,6.8c0.1,0.1,0.2,0.2,0.3,0.2l11.1,8.8v20.2l-17.6-9.9l-2.3-14.2c-0.4-2.6-2.9-4.4-5.5-4c-2.6,0.4-4.4,2.9-4,5.5
                    l1,6.7l-8.2-4.7c-2.3-1.3-5.3-0.5-6.6,1.9c-1.3,2.3-0.5,5.3,1.9,6.6l8.2,4.7L14,69.3c-2.3,1.4-3,4.4-1.6,6.7
                    c1.1,1.8,3.2,2.7,5.3,2.2l13.1-5.4l17.3,9.7l-17.3,9.7l-13.1-5.4c-2.5-0.9-5.3,0.4-6.2,2.9c-0.9,2.4,0.2,5,2.5,6l6.1,2.4l-8.2,4.7
                    c-2.3,1.3-3.2,4.3-1.8,6.6c0.9,1.5,2.5,2.5,4.2,2.5c2.1,0,2.6-1,10.6-5.2l-1,6.5c-0.4,2.6,1.4,5.1,4,5.5s5.1-1.4,5.5-4l2.3-14.2
                    l17.6-9.9v20.2L42,119.5c-2.1,1.7-2.4,4.7-0.8,6.8c1.7,2.1,4.7,2.4,6.8,0.8l0,0l5.1-4.1v9.5c0.2,2.7,2.5,4.7,5.2,4.5
                    c2.4-0.2,4.3-2.1,4.5-4.5v-9.3c4.4,3.2,5.4,5.1,8.1,5.1c2.7-0.1,4.8-2.3,4.7-4.9c0-1.4-0.7-2.7-1.7-3.6l-11.1-8.9V90.6l17.6,9.9
                    l2.3,14.2c0.4,2.6,2.9,4.4,5.5,4s4.4-2.9,4-5.5l0,0L91.2,106.4z" />
                    </svg>
                  </div>
                  <div class="home_solucion_title">
                    <span>Sistemas de Climatización</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="home_solucion_card">
                <div class="home_solucion_card_wrap">
                  <div class="home_solucion_icon fadeInUp animated ">
                    <svg version="1.1" id="Capa_1" height="85px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 281.4 333" style="enable-background:new 0 0 281.4 333;" xml:space="preserve">
                      <style type="text/css">
                        .st0 {
                          display: none;
                          fill: #FFFFFF !important;
                          stroke: #000000;
                        }

                        .st1 {
                          fill: #FFFFFF;
                          stroke: #87B420;
                          stroke-width: 9;
                        }

                        .st2 {
                          fill: #87B420;
                        }

                        .eje-giro {
                          fill: #FFF;
                          stroke: #87B420;
                          stroke-width: 9;
                        }
                      </style>
                      <path class="st0" d="M36.7,133.5c0,0-21-57,18-67s49-4,65,8s30,41,53,27s66,4,58,32s-5,44,18,57s22,46,0,45s-54-40-68-16
                      s-40,88-83,48s11-61-11-80s-79-7-70-41C16.7,146.5,23.7,128.5,36.7,133.5z" />
                      <g class="base-seguridad">
                        <path class="st1" d="M145.3,191.3v60c0,5.2-4.2,9.4-9.4,9.4h0c-5.2,0-9.4-4.2-9.4-9.4v-60c0-1.3,1-2.3,2.3-2.3H143
                      C144.3,189,145.3,190.1,145.3,191.3z" />
                        <g class="seguridad">
                          <path class="eje-giro" d="M134.6,194.9l-4.6-1.7c-8.7-3.2-13.1-12.7-10-21.4l3.5-9.7c0.4-1.1,1.7-1.7,2.8-1.3l31.8,11.6
                      c1.1,0.4,1.7,1.7,1.3,2.8l-3.5,9.7C152.8,193.6,143.2,198.1,134.6,194.9z" />
                          <circle class="eje-giro" cx="213.1" cy="156.8" r="25.4" />
                          <path class="st1" d="M215.7,153.3l-41.5-14.8c-0.9-0.3-1.8-0.1-2.5,0.5l-14.1,13.4l-98.8-36c-2-0.7-3-2.9-2.3-4.9l18.4-50.5
                      c0.7-2,2.9-3,4.9-2.3L264,125.9c1.4,0.5,2,0.9,1.9,1.9c-0.1,0.8-0.6,1.5-1.3,1.9L220.1,153C218.8,153.7,217.1,153.8,215.7,153.3z" />

                          <path class="st1" d="M81.6,124.8l-5.4,16.5c-0.2,0.7,0.1,1.5,0.8,1.7l126,46.3c0.7,0.3,1.5-0.1,1.8-0.8l12.5-34.9l-40-14.1
                      c-1.9-0.7-4-0.3-5.5,1l-14.2,11.9L81.6,124.8z" />
                          <path class="st2" d="M100.2,116.2l3.2-8.9l8.9,3.3l-3.3,8.9L100.2,116.2z" />
                          <path class="st2" d="M118,122.8l3.2-8.9l8.9,3.3l-3.3,8.9L118,122.8z" />
                          <path class="st2" d="M135.7,129.3l3.3-8.9l8.9,3.3l-3.2,8.9L135.7,129.3z" />

                        </g>
                        <path class="st1" d="M143.1,241.6H48.7c-1.3,0-2.3-1-2.3-2.3v-14.2c0-1.3,1-2.3,2.3-2.3h94.4c1.3,0,2.3,1,2.3,2.3v14.2
                      C145.4,240.5,144.4,241.6,143.1,241.6z" />
                      </g>
                      <path class="st1" d="M17.1,269v-73.3c0-1,0.8-1.8,1.8-1.8h16c1,0,1.8,0.8,1.8,1.8V269c0,1-0.8,1.8-1.8,1.8h-16
                      C17.9,270.8,17.1,270,17.1,269z" />
                      <g>
                        <path class="st1" d="M56.2,232.4c0-12-8.1-22.2-19.5-26v52C48.1,254.6,56.2,244.4,56.2,232.4z" />
                      </g>
                    </svg>
                  </div>
                  <div class="home_solucion_title">
                    <span>Seguridad y Monitoreo</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="home_solucion_card">
                <div class="home_solucion_card_wrap">
                  <div class="home_solucion_icon fadeInUp animated ">
                    <svg version="1.1" id="Capa_1" height="70px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 281.4 333" style="enable-background:new 0 0 281.4 333;" xml:space="preserve">
                      <style type="text/css">
                        .st0 {
                          display: none;
                          fill: #FFFFFF;
                          stroke: #000000;
                        }

                        .st1 {
                          stroke: #87B420;
                        }
                      </style>
                      <path class="st0 " d="M36.7,133.5c0,0-21-57,18-67s49-4,65,8s30,41,53,27s66,4,58,32s-5,44,18,57s22,46,0,45s-54-40-68-16
                    s-40,88-83,48s11-61-11-80s-79-7-70-41C16.7,146.5,23.7,128.5,36.7,133.5z" />
                      <g class="multimedia-top">
                        <path class="st1 " d="M252.3,76L30.2,139.7c-1.7,0.5-3.4-0.5-3.9-2.1L13.2,91.6c-1.5-5.3,1.5-10.8,6.8-12.3l208.7-59.9
                    c4.4-1.3,9,1.3,10.3,5.7l14.2,49.4C253.3,75.1,253,75.8,252.3,76z" />
                        <line class="st1 " x1="42.5" y1="72.8" x2="93.3" y2="121.6" />

                        <line class="st1 " x1="83.6" y1="58.9" x2="134.3" y2="107.7" />
                        <line class="st1 " x1="129.4" y1="47.9" x2="180.2" y2="96.7" />
                        <line class="st1 " x1="171.7" y1="35.8" x2="222.4" y2="84.6" />
                      </g>


                      <path class="st1 " d="M37.1,303.8h216.3c5.5,0,10-4.5,10-10V144.7c0-1.3-1.1-2.4-2.4-2.4H29.5c-1.3,0-2.4,1.1-2.4,2.4v149.1
                    C27.1,299.3,31.6,303.8,37.1,303.8z" />
                      <path class="st1 multimedia" d="M176.9,250.2l-44.1,25.8c-1.8,1-4-0.2-4-2.3v-51.6c0-2.1,2.2-3.3,4-2.3l44.1,25.8
                    C178.7,246.6,178.7,249.1,176.9,250.2z" />
                      <line class="st1 " x1="27.1" y1="193.1" x2="260.4" y2="193.1" />
                      <line class="st1 " x1="62.8" y1="193.8" x2="93.3" y2="140.6" />

                      <line class="st1 " x1="107.8" y1="193.8" x2="138.3" y2="140.6" />
                      <line class="st1 " x1="152.9" y1="193.8" x2="183.4" y2="140.6" />
                      <line class="st1 " x1="197.9" y1="193.8" x2="228.4" y2="140.6" />
                    </svg>
                  </div>
                  <div class="home_solucion_title">
                    <span>Multimedia</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="home_soluciones_right_image">
      <img src="./resources/images/image2.jpg" alt="">
    </div>
  </section>

  <section id="home_interes" class="general_section">
    <div class="home_interes_wrap">
      <div class="home_interes_container">
        <div class="home_interes_context">
          <div class="home_interes_title_wrap">
            <div class="home_interes_title section_title">
              <h3>¿Por qué me debería de interesar?</h3>
            </div>
            <div class="home_interes_description_wrap">
              <div class="home_interes_description _container">
                <p>La seguridad, el ahorro de energía y el confort son las
                  razones que han llevado a muchas personas a implementar tecnología domótica e inmótica.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="home_interes_cards">
          <div class="home_interes_cards_wrap">
            <div class="row justify-content-center">
              <div class="col-md-4 col-sm-6">
                <div class="home_interes_scard">
                  <div class="home_interes_card_number">
                    <span>01</span>
                  </div>
                  <div class="home_interes_card_context">
                    <div class="home_interes_card_icon">
                      <i class="icon-password"></i>
                    </div>
                    <div class="home_interes_card_title">
                      <h5>SEGURIDAD</h5>
                    </div>
                    <div class="home_interes_card_desc">
                      <p>Proteger el hogar u ofcina frente a robos, monitorearlos cuando se está ausente, aumentar la
                        seguridad de los lugares de
                        acceso, entre otras.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="home_interes_scard">
                  <div class="home_interes_card_number">
                    <span>02</span>
                  </div>
                  <div class="home_interes_card_context">
                    <div class="home_interes_card_icon">
                      <i class="icon-plug"></i>
                    </div>
                    <div class="home_interes_card_title">
                      <h5>AHORRO DE ENERGÍA</h5>
                    </div>
                    <div class="home_interes_card_desc">
                      <p>Un sistema automatizado
                        nos ayuda a aprovechar al
                        máximo todos los recursos que tenemos a nuestro servicio.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="home_interes_scard">
                  <div class="home_interes_card_number">
                    <span>03</span>
                  </div>
                  <div class="home_interes_card_context">
                    <div class="home_interes_card_icon">
                      <i class="icon-atom"></i>
                    </div>
                    <div class="home_interes_card_title">
                      <h5>CONFORT</h5>
                    </div>
                    <div class="home_interes_card_desc">
                      <p>Con un sistema automatizado aumenta los niveles de confort, mejora
                        todo lo que tiene que ver
                        con las experiencias y
                        ofrece la posibilidad de
                        crear escenarios o ambientes.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="home_tecno" class="general_section nuestra-tecnologia">

    <div class="home_tecno_left_image page_image_circle_wrap">
      <div class="page_imag_circle_bdotted left" style="right: -2%;"></div>
      <div class="page_imag_circle_bsolid left" style="right: -2%;"></div>
      <div class="page_image_circle_container imagefill_ left">
        <img src="./resources/images/image3.jpg" alt="">
      </div>
    </div>
    <div class="home_tecno_wrap container">
      <div class="home_tecno_container">
        <div class="home_tecno_context">
          <div class="home_tecno_context_wrap ">
            <div class="home_tecno_title section_title">
              <h3>Nuestra Tecnología</h3>
            </div>
            <div class="home_tecno_desc">
              <p>
                Fundada en 1985, HDL es una empresa global que fabrica
                productos de automatización de edifcios y hogares personalizados y equipos profesionales de
                iluminación escénica. Con
                una presencia verdaderamente mundial, las oficinas
                de HDL se encuentran en más de 100 países.
                <br><br>
                Los productos y soluciones HDL promueven el ahorro de
                energía, el control centralizado, el confort, la comodidad y
                la seguridad añadida para los clientes de todo el mundo.
              </p>
            </div>
            <div class="home_tecno_button">
              <a href="tecnologia" class="g_button">Descubre más</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="home_eligen" class="general_section">
    <div class="home_eligen_wrap container">
      <div class="home_eligen_container">

        <div class="home_eligen_context">
          <div class="home_eligen_context_wrap">
            <div class="home_eligen_title section_title">
              <h3>¿Por qué los clientes nos eligen?</h3>
            </div>
            <div class="home_eligen_list page_listing">
              <ul>
                <li>Excelente servicio al cliente</li>
                <li>El mejor precio</li>
                <li>Producto innovadores</li>
              </ul>
            </div>
            <div class="home_eligen_desc">
              <p>
                Contamos con un rango de productos innovadores y accesibles ¿no nos crees?
                <br><br>
                Ponnos a prueba, solicita tu cotización, o si ya cuentas con una, envíanosla y ¡nosotros la mejoramos!
              </p>
            </div>
            <div class="home_eligen_action">
              <a href="proyecto" class="g_button">Solicitar cotización</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="home_eligen_right_image page_image_circle_wrap">
      <div class="page_imag_circle_bdotted right"></div>
      <div class="page_imag_circle_bsolid right"></div>
      <div class="page_image_circle_container imagefill_ right">
        <img src="./resources/images/image4.jpg" alt="">
      </div>
    </div>

  </section>

</main>
<?php require "./_footer.php";

 ?>