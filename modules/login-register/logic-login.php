<?php

  if(!empty($_POST['nombreLog']) && !empty($_POST['contrasenaLog'])){
    echo($_POST['nombreLog'] . "<br>" . $_POST['contrasenaLog']);
    $solicitud = "SELECT identifier, nombre, pass FROM usuarios WHERE nombre = :nombre";
?>
  
  <!-- id solicitante = login.1 -->
  <form action="../../APIs/consultas-db.php" method="post">
    <input type="text" id="solicitud" name="solicitud" value="<?php echo ($solicitud); ?>" style="width:500px" disabled>
    <br>
    <input type="text" name="solicitante" id="id_solicitante" value="1" disabled>
  </form>
<?php
  }
  else{
    echo 'No completaste los campos';
  }

?>