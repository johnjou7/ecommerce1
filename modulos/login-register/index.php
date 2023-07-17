<?php
  import('consultas_db.php');

  if(isset($_SESSION['id_user'])){
    location('users_home.php');
  }
  else{
    location('login.php');
  }
?>