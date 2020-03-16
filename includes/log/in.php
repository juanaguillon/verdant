<?php
$server = "db5000315045.hosting-data.io";
$user = "dbu565072";
$password = "Verdant1234%";
$db = "dbs307615";

$enlace = mysqli_connect($server, $user, $password, $db);

session_start();

$user = $_POST['username'];
$pass = $_POST['password'];

$userS = mysqli_real_escape_string($enlace, $user);
$passS = mysqli_real_escape_string($enlace, $pass);

$password = md5($passS);

$consult = "SELECT COUNT(*) as contar from users where username='$userS' and password = '$password'";
$executeConsult = mysqli_query($enlace, $consult);
$array = mysqli_fetch_array($executeConsult);

if($array['contar']>0){
  $_SESSION['username'] = $userS;
  echo "<script>alert('Datos correctos');window.location.href='https://verdantcomfort.com/data';</script>";
}else{
  echo "<script>alert('Datos Incorrectos');window.location.href='https://verdantcomfort.com/login';</script>";
}

