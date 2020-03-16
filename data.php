<?php
session_start();

$s = $_SESSION['username'];
if(!isset($s)){
  echo "<script>window.location.href='https://verdantcomfort.com/login';</script>";
}

$server = "db5000315045.hosting-data.io";
$user = "dbu565072";
$password = "Verdant1234%";
$db = "dbs307615";

$enlace = mysqli_connect($server, $user, $password, $db);

$sql = "SELECT * FROM project";
$data = mysqli_query($enlace, $sql);
$results = [];
while ($view = mysqli_fetch_array($data)) {
  $results[] = $view;
}

function array_to_csv($array)
{
  $flag = false;
  foreach ($array as $row) {
    if (!$flag) {
      // display field/column names as first row
      $implodingFlag = implode("\t", array_keys($row)) . "\r\n";
      echo mb_convert_encoding($implodingFlag, 'UTF-16LE', 'UTF-8');
      $flag = true;
    }
    $imploding = implode("\t", array_values($row)) . "\r\n";
    echo mb_convert_encoding($imploding, 'UTF-16LE', 'UTF-8');
  }
  exit;
}
if ($_GET["ref"] === "download_project") {
  $fileName = "proyectos.xls";
  header("Content-Disposition: attachment; filename=\"$fileName\"");
  header("Content-type: application/vnd.ms-excel; charset=UTF-8");
  $newData = array();
  foreach ($results as $key => $value) {
    $newData[] = array(
      "id" => $value['id'],
      "Nombre" =>  $value['name'],
      "Email" => $value['email'],
      "Solucion" => $value['solution'],
      "Tamaño" => $value['size'],
      "Tipo" =>  $value['type'],
      "Uso" => $value['use'],
      "Codigo Postal" => $value['postalCode'],
      "Mensaje" => $value['message'],
      "Ruta Adjunta" =>  $value['adjuntRoute']
    );
  }
  ob_start();
  echo array_to_csv($newData);
  echo mb_convert_encoding(ob_get_clean(), 'UTF-16LE', 'UTF-8');
  exit;
}

$sqlContact = "SELECT * FROM contact";
$dataC = mysqli_query($enlace, $sqlContact);
$resultsC = [];
while ($view = mysqli_fetch_array($dataC)) {
  $resultsC[] = $view;
}

if ($_GET["ref"] === "download_contact") {
  $fileName = "contactos.xls";
  header("Content-Disposition: attachment; filename=\"$fileName\"");
  header("Content-type: application/vnd.ms-excel; charset=UTF-8");
  $newData = array();
  foreach ($resultsC as $key => $value) {
    $newData[] = array(
      "id" => $value['id'],
      "Nombre" =>  $value['name'],
      "Email" => $value['email'],
      "Telefono" => $value['phone'],
      "Ciudad" => $value['city'],
      "Area" => $value['area'],
      "Mensaje" => $value['msj']
    );
  }
  ob_start();
  echo array_to_csv($newData);
  echo mb_convert_encoding(ob_get_clean(), 'UTF-16LE', 'UTF-8');
  exit;
};

$sqlContact = "SELECT * FROM Banner";
$dataB = mysqli_query($enlace, $sqlContact);
$resultsB = [];
while ($view = mysqli_fetch_array($dataB)) {
  $resultsB[] = $view;
}

if ($_GET["ref"] === "download_banner") {
  $fileName = "banner.xls";
  header("Content-Disposition: attachment; filename=\"$fileName\"");
  header("Content-type: application/vnd.ms-excel; charset=UTF-8");
  $newData = array();
  foreach ($resultsB as $key => $value) {
    $newData[] = array(
      "id" => $value['id'],
      "Nombre" =>  $value['Nombre'],
      "Email" => $value['Correo'],
      "Telefono" => $value['Telefono'],
      "Ciudad" => $value['Ciudad'],
      "Area" => $value['Area'],
      "Mensaje" => $value['Mensaje']
    );
  }
  ob_start();
  echo array_to_csv($newData);
  echo mb_convert_encoding(ob_get_clean(), 'UTF-16LE', 'UTF-8');
  exit;
};

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verdant</title>
    <link rel="icon" href="./resources/images/favicon.ico">
    <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
  <div style="margin-top:100px" class="contenedor-registros-all">



    <div class="card">
      <div class="card-header" id="headingTwo">
        <h2 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Solicitudes de Contacto
          </button>
        </h2>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <td>Id</td>
                <td>Nombre</td>
                <td>Correo</td>
                <td>Teléfono</td>
                <td>Ciudad</td>
                <td>área</td>
                <td class="mensaje-column">Mensaje</td>
              </tr>
            </thead>
            <?php
            foreach ($resultsC as $key => $value) {
            ?>
              <tr>
                <td><?php echo $value['id'] ?> </td>
                <td><?php echo $value['name'] ?> </td>
                <td><?php echo $value['email'] ?> </td>
                <td><?php echo $value['phone'] ?> </td>
                <td><?php echo $value['city'] ?> </td>
                <td><?php echo $value['area'] ?> </td>
                <td><?php echo $value['msj'] ?> </td>
              </tr>

            <?php
            }
            ?>
          </table>
        </div>
        <a href="?ref=download_contact" type="button" class="g_button">Descargar solicitudes</a>
      </div>
    </div>

    <div class="card">
      <div class="card-header" id="headingTwo">
        <h2 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseBanner" aria-expanded="false" aria-controls="collapseBanner">
            Solicitudes de Cotización - Home
          </button>
        </h2>
      </div>
      <div id="collapseBanner" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <td>Id</td>
                <td>Nombre</td>
                <td>Correo</td>
                <td>Teléfono</td>
                <td>Ciudad</td>
                <td>área</td>
                <td>Mensaje</td>
              </tr>
            </thead>
            <?php
            foreach ($resultsB as $key => $value) {
            ?>
              <tr>
                <td><?php echo $value['id'] ?> </td>
                <td><?php echo $value['Nombre'] ?> </td>
                <td><?php echo $value['Correo'] ?> </td>
                <td><?php echo $value['Telefono'] ?> </td>
                <td><?php echo $value['Ciudad'] ?> </td>
                <td><?php echo $value['Area'] ?> </td>
                <td><?php echo $value['Mensaje'] ?> </td>
              </tr>

            <?php
            }
            ?>
          </table>
        </div>
        <a href="?ref=download_banner" type="button" class="g_button">Descargar solicitudes</a>
      </div>
    </div>

    <div class="accordion" id="accordionExample">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseProject" aria-expanded="false" aria-controls="collapseProject">
              Solicitudes de Cotización - Proyecto
          </h2>
        </div>

        <div id="collapseProject" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead class="thead-dark">
                <tr>
                  <td scope="col">Id</td>
                  <td scope="col">Nombre</td>
                  <td scope="col">Correo</td>
                  <td scope="col">Solución</td>
                  <td scope="col">Tamaño</td>
                  <td scope="col">Tipo</td>
                  <td scope="col">Uso</td>
                  <td scope="col">Codigo Postal</td>
                  <td scope="col">Mensaje</td>
                  <td scope="col">Ruta Archivo</td>
                </tr>
              </thead>
              <?php
              foreach ($results as $key => $value) {
              ?>
                <tr>
                  <td><?php echo $value['id'] ?> </td>
                  <td><?php echo $value['name'] ?> </td>
                  <td><?php echo $value['email'] ?> </td>
                  <td><?php echo $value['solution'] ?> </td>
                  <td><?php echo $value['size'] ?> </td>
                  <td><?php echo $value['type'] ?> </td>
                  <td><?php echo $value['use'] ?> </td>
                  <td><?php echo $value['postalCode'] ?> </td>
                  <td><?php echo $value['message'] ?> </td>
                  <td><?php echo $value['adjuntRoute'] ?> </td>
                </tr>

              <?php
              }
              ?>
            </table>
          </div>
          <a href="?ref=download_project" type="button" class="g_button">Descargar solicitudes</a>

        </div>
      </div>

    </div>

    <br>
    <a href="./includes/log/out.php" class="g_button">
      Cerrar Sesión
    </a>
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>