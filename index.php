<?php

  session_start(); //se inicia la sesión
  require 'database.php'; //se trae el archivo de conexión a la base de datos

  if (isset($_SESSION['user_id'])) { //Se verifica si existe la sesión con el identificador del usuario ( $_SESSION['user_id'] ).
    
    //Se prepara una consulta SQL para seleccionar el id, email y contraseña de los usuarios en la tabla "users" donde el id sea igual al valor de  $_SESSION['user_id'] . 
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']); //Se vincula el valor de  $_SESSION['user_id']  al parámetro  :id  en la consulta SQL. 
    
    //se ejecuta la consulta SQL preparada
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC); //Se obtienen los resultados de la consulta y se almacenan en la variable  $results  utilizando  fetch(PDO::FETCH_ASSOC) .
    
    $user = null; //Se inicializa la variable  $user  como  null . 

    //Si el número de resultados obtenidos es mayor a 0 (es decir, se encontró un usuario con el id proporcionado), se asignan los resultados a la variable  $user.
    if (count($results) > 0) {
      $user = $results;
    }

  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bienvenido al index de la branch develop</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <?php require 'partials/header.php' ?> <!-- con esto se incluye el archivo de cabecera -->

    <?php if(!empty($user)): ?> <!-- Si es que la variable de usuario NO está vacía... -->
      <br> Welcome. <?= $user['email']; ?>
      <br>You are Successfully Logged In
      <a href="logout.php">
        Logout
      </a>
    <?php else: ?> <!-- Si no entonces... -->
      <h1>Please Login or SignUp</h1>

      <a href="login.php">Login</a> or
      <a href="signup.php">SignUp</a>
    <?php endif; ?>
  </body>
</html>


<!--  PSEUDOCÓDIGO
Inicio de sesión de la sesión
Requerir 'database.php'
Si 'user_id' está definido en $_SESSION entonces
  Preparar una consulta SELECT para seleccionar 'id', 'email' y 'password' de la tabla 'users' donde 'id' sea igual a :id
  Vincular el valor de $_SESSION['user_id'] al marcador de posición :id en la consulta preparada
  Ejecutar la consulta preparada
  Recuperar los resultados de la consulta como un arreglo asociativo y asignarlos a la variable $results
  Inicializar la variable $user como nula
  Si la cantidad de resultados obtenidos es mayor que 0 entonces
    Asignar los resultados a la variable $user
  Fin Si
Fin Si
 -->