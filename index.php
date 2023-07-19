<?php
  session_start();
  require('APIs/consultas_db.php');

  // si ya existe una sesión, entonces se pasa directamente a la interface home que le corresponde.
  if(isset($_SESSION['id_user'])){
    header('Location: modules/login-register/interface-usershome.php');
    exit();
  }
  // si aún no existe ninguna sesión, entonces se pasa a la interface de login.
  else{
    header('Location: modules/login-register/interface-login.php');
    exit();
  }

  session_destroy();
?>