<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
  <div class="ventana-login">
    <h1>Login</h1>
    <div class="contenedor-in-login">
      <input name="nombre" id="id_fromLogin_name" type="text" placeholder="Ingresa tu nombre aquí">
      <input name="contrasena" id="id_fromLogin_pass" type="password" placeholder="Ingresa tu contraseña aquí">
      <input name="entrar-button" id="id_fromLogin_send" type="submit" value="Entrar" onclick="_sendInfoLoginWithAjax()">
    </div>
  </div>
</body>
</html>