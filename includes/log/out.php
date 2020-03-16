<?php

session_start();

session_destroy();

echo "<script>alert('la sesión ha finalizado');window.location.href='https://verdantcomfort.com/';</script>";


?>