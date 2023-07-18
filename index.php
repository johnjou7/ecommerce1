<?php
  session_start();
  require('APIs/consultas_db.php');

  if(isset($_SESSION['id_user'])){
    header('Location: modules/login-register/interface-usershome.php');
    exit();
  }
  else{
    header('Location: modules/login-register/interface-login.php');
    exit();
  }

  session_destroy();
?>