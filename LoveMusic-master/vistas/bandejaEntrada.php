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
  <link href="../css/bandejaEntrada.css" type="text/css" rel="stylesheet" />
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
            <h1 class="text-center"><i class="fa fa-envelope"></i> Bandeja de Entrada </h1>
        </div>
        <div class="contacto">
                <?php if (isset($recibidos) && count($recibidos) > 0) {
                  ?>

                    <table cellspacing="10">
                        <thead>
                            <tr>
                                <th>Asunto</th>
                                <th>Mensaje</th>
                                <th>Emisor</th>
                                <th>Fecha de envio</th>
                            </tr>
                        </thead>
                        <div class "tabla">
                            <?php
                                foreach ($recibidos as $recibido) {
                                    echo '
                                    <tr>
                                        <td class="border-right">'.$recibido->getasunto().'</td>
                                        <td class="border-right">'.$recibido->getmensaje().'</td>
                                        <td class="border-right">'.$recibido->getemisor().'</td>
                                        <td>'.$recibido->getfecha().'</td>
                                    </tr>';
                                }
                              }
                            ?>
                        </div>
                    </table>
          </div>
    </div>
  </div>
</body>

</html>
