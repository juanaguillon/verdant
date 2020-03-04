<?php
$server = "db5000315045.hosting-data.io";
$user = "dbu565072";
$password = "Verdant1234%";
$db = "dbs307615";

$enlace = mysqli_connect($server, $user, $password, $db);
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
  $insert = "INSERT INTO Banner VALUES('','$nombreS', '$emailS', '$phoneS' ,'$cityS', '$areaS', '$msjS')";
  $executeInsert = mysqli_query($enlace, $insert);
}

require "./config.php";
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$phone = $_POST['cell'];
$city = $_POST['ciudad'];
$area = $_POST['area'];
$msj = $_POST['mensaje'];

$imagen_respuesta = "https://verdantcomfort.com/resources/images/verdantLogo.png";
$imgWidth = 230;
$imgHeigt = 71;

$url_enviado = "https://verdantcomfort.com/";
$nombre_sitio = "Verdant";


if (preg_match("/((http|https|ftp|ftps)\:\/\/)?(www.)?[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/", $message)) {
  return 0;
}

try {
  if ($nombre != "" && $email != "" && $phone != "" && $area != "" && $city != "") {
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

    $mail->AddCC($addCC);
    $visitante->AddAddress($email);

    $mail->IsHTML(true);
    $mail->SMTPSecure = "ssl";
    $visitante->IsHTML(true);
    $mail->Port = "465";

    $mail->Subject = "Formulario enviado desde el banner " . $nombre_sitio;
    $visitante->Subject =  "Gracias por escribirnos";

    if (!$msj) {
      $msj = "Enviado desde el inicio";
    }

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
                          <?php echo $nombre; ?>
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
                      <td><span><strong>Ciudad</strong></span></td>
                      <td>
                        <span>
                          <?php echo $city; ?>
                        </span>
                      </td>
                    </tr>

                    <tr>
                      <td><span><strong>Teléfono</strong></span></td>
                      <td>
                        <span>
                          <?php echo $phone; ?>
                        </span>
                      </td>
                    </tr>

                    <tr>
                      <td><span><strong>Area de interés</strong></span></td>
                      <td>
                        <span>
                          <?php echo $area; ?>
                        </span>
                      </td>
                    </tr>

                    <tr>
                      <td><span><strong>Mensaje</strong></span></td>
                      <td>
                        <span>
                          <?php echo $msj; ?>
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
                Hemos recibido su mensaje, nos pondremos en contacto con usted lo más pronto posible.
              </td>
            </tr>
          </table>
        </td>
      </tr>

    </table>
    </body>

    </html>

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
    if (!$exito) {
      echo "<script>alert('No se han podido registrar los datos');window.location.href='https://verdantcomfort.com/';</script>";
    } else {
      echo "<script>alert('Los datos han sido registrados');window.location.href='https://verdantcomfort.com/';</script>";
    }
  } else {
    echo "Data no pass";
  }
} catch (\Throwable $th) {
  echo "ERROR: " .  $th->getMessage() . " in file " . $th->getFile() . " in line " . $th->getLine();
}