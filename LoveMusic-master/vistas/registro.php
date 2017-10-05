<?php session_start(); ?>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <link href="../css/general.css" type="text/css" rel="stylesheet" />
  <link href="../css/registro.css" type="text/css" rel="stylesheet" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Contacto</title>
</head>

<?php
include 'navtop.php';
?>

<body>
  <form action="../funcionalidad/procesarRegistro.php">
  <div class="content">
  <div class="contenedor">
      <div class="cabecera">
          <h1 class="text-center"><i class="fa fa-envelope"></i> Registro </h1>
      </div>
      <div class="contacto">
        <div class="plantilla">
          <div class="nombre">
            <label>Nombre: </label>
            <input type="nombre" name="nombre"/>
          </div>
          <div class="email">
            <label>Email: </label>
            <input type="email" name="correo"/>
          </div>
          <div class="contrasena">
            <label>Contraseña: </label>
            <input type="password" name="contrasena"/>
          </div>
          <div>
            <input type="submit" value="Registro" class="myButton"/>
          </div>
        </div>
      </div>
  </div>
  </div>
</form>
</body>

</html>
