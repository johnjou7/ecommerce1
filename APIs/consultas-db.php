<?php
  //Conexión a la base de datos
  $serverName = "localhost";
  $userName = "root";
  $password = "";
  $dbName = "zpractica_db";

  try{
    $connect_db = new PDO(
      "mysql: host= $serverName; dbname=$dbName",
      $userName,
      $password
    );
    $connect_db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo("Conexión exitosa baby");
  }
  catch(PDOException $pdoException){
    echo("Error al conectar con la base de datos. ") . $pdoException -> getMessage();
  }

  //Estar a la escucha de cualquier solicitud proveniente de los módulos `_´
  $solicitud = $_POST['solicitud'];
  $solicitante = $_POST['solicitante'];

  echo $solicitante . '<br>' . $solicitud;

  //Consultas

  //Consulta uno


  //Consulta dos

    
?>