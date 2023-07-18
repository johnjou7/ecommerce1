<?php
  session_start();
  require('APIs/consultas_db.php');

  header('login.php');
  if(isset($_SESSION['id_user'])){
    header('modulos/users_home.php');
    exit();
  }
  else{
    header('modulos/login.php');
    exit();
  }

  session_destroy();
?>