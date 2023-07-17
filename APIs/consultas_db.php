<?php
  $serverName = "localhost";
  $userName = "root";
  $password = "";
  $dbName = "";

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
    echo("Error al conectar con la base de datos") . $pdoException -> getMessage();
  }
    
?>