<?php
    session_start();
    if (!isset($_SESSION['login']) || !$_SESSION['login']) {
      header('Location: login.php');
    }
    include('../funcionalidad/cargarUsuario.php');
    include('../funcionalidad/cargarMensajes.php');
?>

<html lang="es">

<head>
  <meta charset="utf-8" />
  <link href="../css/general.css" type="text/css" rel="stylesheet" />
  <link href="../css/enviarMensaje.css" type="text/css" rel="stylesheet" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Contacto</title>
</head>

<?php
include 'navtop.php';
?>

<body>
  <form action="../funcionalidad/procesarEnvioMensaje.php">
  <div class="content">
    <div class="contenedor">
        <div class="cabecera">
            <h1 class="text-center"><i class="fa fa-envelope"></i> Mensaje </h1>
        </div>
        <div class="contacto">
          <div class="plantilla">
            <div class="para">
              <label>Para: </label>
              <input type="text" placeholder="Introducir Email" id="para" name="para"/>
            </div>
            <div class="asunto">
              <label>Asunto: </label>
              <input type="text" id="asunto" name="asunto"/>
            </div>
            <div class="mensaje">
              <label>Mensaje: </label>
              <textarea name="mensaje"></textarea>
            </div>
            <div>
              <input type="submit" value="Enviar" class="myButton"/>
            </div>
          </div>
        </div>
    </div>
  </div>
</form>
</body>
</html>
