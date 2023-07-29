<?php

  if(!empty($_POST['nombreLog']) && !empty($_POST['contrasenaLog'])){
    echo($_POST['nombreLog'] . "<br>" . $_POST['contrasenaLog']);
  }
  else{
    echo 'aquí no hay una mierda';
  }
  
?>