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
  <link href="../css/perfil.css" type="text/css" rel="stylesheet" />
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
            <h1 class="text-center"><i class="fa fa-user"></i> PERFIL </h1>
        </div>
        <div class="contacto">
          <div class="user-info">
            <div class="user-info-pic">
                <img id="profilePic" alt="userPic" src="../img/music9.jpg" />
                <a class="ajustes" href="ajustes.php"><i class="fa fa-cog"></i></a>
            </div>
            <?php
            if ((!is_null($usuario->getnombre() && !is_null($usuario->getcorreo())))) {
              echo '
              <table class="list-group">
                  <tr><td><i class="fa fa-user-circle-o"> '.$usuario->getnombre().'</i></td></tr>
                  <tr><td><i class="fa fa-envelope"> '.$usuario->getcorreo().' </i></td></tr>
              </table>
              ';
            }
            ?>
        </div>
    </div>
    </div>
  </div>
</body>

</html>
