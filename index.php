<?php

  session_start();
  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    $user = null;

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
    <?php require 'partials/header.php' ?>

    <?php if(!empty($user)): ?>
      <br> Welcome. <?= $user['email']; ?>
      <br>You are Successfully Logged In
      <a href="logout.php">
        Logout
      </a>
    <?php else: ?>
      <h1>Please Login or SignUp</h1>

      <a href="login.php">Login</a> or
      <a href="signup.php">SignUp</a>
    <?php endif; ?>
  </body>
</html>


/* 
3. Esta línea inicia una sesión en PHP. Las sesiones se utilizan para almacenar y acceder a datos específicos del usuario a través de múltiples páginas.

4. Esta línea incluye el archivo "database.php" en el código actual. Esto se utiliza para establecer una conexión con la base de datos y realizar consultas.

6. isset  es una función en PHP que se utiliza para verificar si una variable está definida y no es nula. Devuelve un valor booleano, es decir,  true  si la variable está definida y no es nula, y  false  si la variable no está definida o es nula. 
La variable superglobal  $_SESSION  sería como una libreta que el servidor utiliza para mantener un registro de la información asociada con cada sesión. En esta libreta, el servidor guarda tu nombre y cualquier otra información relevante que necesites mantener durante la conversación.

7. 
*/