<?php
session_start();

$s = $_SESSION['username'];
if (isset($s)) {
  echo "<script>window.location.href='https://verdantcomfort.com/data';</script>";
}
// }
?>


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Verdant</title>
  <link rel="icon" href="./resources/images/favicon.ico">
  <link rel="stylesheet" href="./assets/css/style.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <style>
    .login-container {
      display: flex;
      justify-content: center;
    }

    .form-container {
      position: absolute;
      top: 25%;
      text-align: center;
      align-items: center;
      width: 400;
    }

    .title {
      margin-bottom: 7px;
      margin-top: 5px;
    }
  </style>
</head>


<body>
  <div class="login-container">
    <form action="./includes/log/in.php" method="POST" class="form-container">
      <div class="proyecto_interes_wrapc col-md-12">
        <div class="proyecto_interes_title form_label center title">
          <h4>Username</h4>
          <span class="required">*</span>
        </div>
        <div class="proyecto_interes_list">
          <input type="text" required pattern="[A-Za-z0-9_-]{1,15}" name="username" placeholder="Escriba su username" class="form-control">
        </div>
      </div>
      <div class="proyecto_interes_wrapc col-md-12">
        <div class="proyecto_interes_title form_label title">
          <h4>Password</h4>
          <span class="required">*</span>
        </div>
        <div class="proyecto_interes_list">
          <input type="password" required pattern="[A-Za-z0-9_-%]{1,15}" name="password" placeholder="password" class="form-control">
        </div>
      </div>
      <div class=" proyecto_interes_wrapc col-md-12 ">
        <button class=" g_button" type="submit" onclick="validar()">Entrar</button>
      </div>
    </form>
  </div>
</body>