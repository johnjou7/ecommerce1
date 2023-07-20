<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="../../assets/css/style.css">
  <script src="../../assets/js/js-functions.js"></script>
</head>
<body>
  <div class="ventana-login">
    <h1>Login</h1>
    <div class="container in-login">
      <div class="mini-container in-login">
        <label for="nombreLog">Nombre:</label>
        <input name="nombreLog" id="id_fromLogin_name" type="text" placeholder="Ingresa tu nombre aquí">
      </div>
      <div class="mini-container in-login">
        <label for="contrasenaLog">Contraseña:</label>
        <input name="contrasenaLog" id="id_fromLogin_pass" type="password" placeholder="Ingresa tu contraseña aquí">
      </div>
      <input name="entrar-button" id="id_fromLogin_send" type="submit" value="Entrar" onclick="_ajaxShit()">
      <a href="inteface-register.html">Registrarse</a>
    </div>
  </div>

  <h1 id="h1_ajax"></h1>
</body>
</html>