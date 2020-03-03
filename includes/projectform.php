<?php
require "./config.php";

$solution = $_POST['solution'];
$size = $_POST['size'];
$type = $_POST['type'];
$use = $_POST['use'];
$name = $_POST['name'];
$email = $_POST['email'];
$postalCode = $_POST['postalCode'];
$message = $_POST['message'];
$adjunt = $_FILES['adjunt'];
$imagen_respuesta = "https://verdantcomfort.com/resources/images/verdantLogo.png";
$imgWidth = 230;
$imgHeigt = 71;

$url_enviado = "https://verdantcomfort.com/";
$nombre_sitio = "Verdant";

if (preg_match("/((http|https|ftp|ftps)\:\/\/)?(www.)?[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/", $message)) {
  return 0;
}

try {
  if ($solution != "") {
    require "./_includes/class.phpmailer.php";
    $mail = new phpmailer();
    $visitante =  new phpmailer();
    $mail->PluginDir = "_includes/";
    $visitante->PluginDir = "_includes/";
    $mail->IsSMTP();
    $visitante->IsSMTP();
    $mail->SMTPAuth = true;
    $visitante->SMTPAuth = true;

    $mail->Host = $host;
    $visitante->Host = $host;
    $mail->Username = $username;
    $visitante->Username = $username;
    $mail->Password = $password;
    $visitante->Password = $password;
    $mail->Port = $port;
    $visitante->Port = $port;


    $mail->From = $from;
    $mail->FromName = $nombre_sitio;
    $visitante->From = $from;
    $visitante->FromName = $nombre_sitio;

    $mail->AddAttachment($adjunt["tmp_name"], $adjunt["name"], base64, $adjunt["type"]);
    $mail->AddCC($addCC);
    $visitante->AddAddress($email);

    $mail->IsHTML(true);
    $visitante->IsHTML(true);

    $mail->Subject = "Formulario enviado desde el website " . $nombre_sitio;
    $visitante->Subject =  "Gracias por escribirnos";

    $mail->CharSet = 'UTF-8';
    $visitante->CharSet = 'UTF-8';
    ob_start();
?>
    <html>

    <head>
      <title><?php echo $nombre_sitio; ?></title>
    </head>

    <body>
      <table width="500" align="center" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="500" height="56" valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td height="134" valign="top">
            <table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="<?php echo $imgWidth ?>" height="<?php echo $imgHeigt ?>" align="center" valign="top"><img src="<?php echo $imagen_respuesta; ?>" width="<?php echo $imgWidth ?>" height="<?php echo $imgHeigt ?>" /></td>
              </tr>
            </table>
          </td>
        </tr>

        <tr>

          <td height="134" valign="top">
            <table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="500" height="134" valign="top" style="font-Tamaño: 12px; font-family: Arial, Helvetica, sans-serif; ">
                  <p align="center">
                    Formulario enviado desde el website <a href="<?php echo $url_enviado; ?>"><?php echo $nombre_sitio; ?></a>
                  </p>
                  <table width="384" border="1" align="center" cellpadding="3" cellspacing="0" bordercolor="#000" style="font-Tamaño: 12px; font-family: Arial, Helvetica, sans-serif;">

                    <tr>
                      <td width="84"><span><strong>Nombre</strong></span></td>
                      <td width="251">
                        <span>
                          <?php echo $name; ?>
                        </span>
                      </td>
                    </tr>

                    <tr>
                      <td><span><strong>Email</strong></span></td>
                      <td>
                        <span>
                          <?php echo $email; ?>
                        </span>
                      </td>
                    </tr>

                    <tr>
                      <td><span><strong>Solucion </strong></span></td>
                      <td>
                        <ul>
                          <?php
                          foreach ($solution as $s) : ?>
                            <li><?= $s ?></li>
                          <?php endforeach; ?>
                        </ul>
                      </td>
                    </tr>

                    <tr>
                      <td><span><strong>Cantidad</strong></span></td>
                      <td>
                        <span>
                          <?php echo $size; ?>
                        </span>
                      </td>
                    </tr>

                    <tr>
                      <td><span><strong>Tipp de inmueble</strong></span></td>
                      <td>
                        <ul>
                          <?php
                          foreach ($type as $s) : ?>
                            <li><?= $s ?></li>
                          <?php endforeach; ?>
                        </ul>
                      </td>
                    </tr>

                    <tr>
                      <td><span><strong>Uso</strong></span></td>
                      <td>
                        <span>
                          <?php echo $use; ?>
                        </span>
                      </td>
                    </tr>

                    <tr>
                      <td><span><strong>Codigo Postal</strong></span></td>
                      <td>
                        <span>
                          <?php echo $postalCode; ?>
                        </span>
                      </td>
                    </tr>

                    <tr>
                      <td><span><strong>Mensaje</strong></span></td>
                      <td>
                        <span>
                          <?php echo $message; ?>
                        </span>
                      </td>
                    </tr>
                  </table>

                  <p>&nbsp;</p>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </body>

    </html>
    <?php
    $mensaje = ob_get_contents();
    ob_end_clean();
    ob_start();
    ?>

    <html>

    <head>
      <title><?php echo $nombre_sitio; ?></title>
    </head>


    <body>
      <table width="500" align="center" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="500" height="56" valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td height="134" valign="top">
            <table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="<?php echo $imgWidth ?>" height="<?php echo $imgHeigt ?>" align="center" valign="top"><img src="<?php echo $imagen_respuesta; ?>" width="<?php echo $imgWidth ?>" height="<?php echo $imgHeigt ?>" /></td>
              </tr>
            </table>
          </td>
        </tr>
        <tr>
          <td height="268" valign="top">
            <table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td>
                  <img src="<?php echo $imgCotiza ?>" width="230"> <br>
                  Se ha generado una nueva cotización del proyecto, pronto nos pondremos en contacto con usted lo más pronto posible.
                </td>
              </tr>
            </table>
          </td>
        </tr>

      </table>
    </body>

    </html>

    <script>
      function alerta() {
        document.write('Datos recibidos');
      }
    </script>

<?php
    
    
    $mensajes = ob_get_contents();
    ob_clean();
    $mail->Body = $mensaje;
    $visitante->Body = $mensajes;
    $exito = $mail->Send();
    $exito = $visitante->Send();
    $intentos = 1;
    while ((!$exito) && ($intentos < 5)) {
      $exito = $mail->Send();
      $exito = $visitante->Send();
      $intentos = $intentos + 1;
    }

    $server = "db5000315045.hosting-data.io";
    $user = "dbu565072";
    $password = "Verdant1234%";
    $db = "dbs307615";

    $enlace = mysqli_connect($server, $user, $password, $db);


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

    $adjuntRute = time() . basename($_FILES['adjunt']['name']);
    $dir_subida = dirname(__FILE__) . "/storage/";
    $fichero_subido =  $dir_subida . $adjuntRute;
    // move_uploaded_file($_FILES['adjunt']['tmp_name'], $fichero_subido);
    if (!move_uploaded_file($_FILES['adjunt']['tmp_name'], $fichero_subido)) {
      $fichero_subido = "error";
    }

    $insert = "INSERT INTO project VALUES('','$nombreS', '$emailS', '$solutions', '$sizeS' ,'$types', '$use', '$postalCodeS', '$msjS', '$adjuntRute' )";
    $executeInsert = mysqli_query($enlace, $insert);
    
    if (!$exito) {
      echo "<script>alert('No se han podido registrar los datos');window.location.href='https://verdantcomfort.com/proyecto.php';</script>";
    } else {
      echo "<script>alert('Los datos han sido registrados');window.location.href='https://verdantcomfort.com/proyecto.php';</script>";

    }
  } else {
    echo "Data no pass";
  }
} catch (\Throwable $th) {
  echo "ERROR: " .  $th->getMessage() . " in file " . $th->getFile() . " in line " . $th->getLine();
}
