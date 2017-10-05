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
  <link href="../css/ajustes.css" type="text/css" rel="stylesheet" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Contacto</title>
</head>

<?php
include 'navtop.php';
?>
<body>
  <div class="content">
  <div class="contenedor">
      <div class="cabecera">
          <h1 class="text-center"><i class="fa fa-cog"></i> Ajustes </h1>
      </div>
      <div class="contacto">
        <div class="plantilla">
          <div class="nombre">
            <label>Nombre: </label>
            <input type="text" name="nombre"/>
          </div>
          <div class="nacimiento">
            <label>Fecha de Nacimiento: </label>
            <input type="date" name="nacimiento"/>
          </div>
          <div class="imagen">
            <label>Imagen: </label>
            <input type="file" name="foto" accept="image/*"></textarea>
          </div>
          <div>
            <input type="submit" value="Aplicar" class="myButton"/>
          </div>
        </div>
      </div>
  </div>
  </div>
</body>

</html>
