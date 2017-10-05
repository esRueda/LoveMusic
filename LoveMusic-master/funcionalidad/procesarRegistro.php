<?php
session_start();
    include('connect.php');


    if (!empty($_REQUEST['correo']) && !empty($_REQUEST['contrasena']) && !empty($_REQUEST['nombre'])) {
          $correo = $_REQUEST['correo'];
          $sql = "SELECT correo FROM usuarios WHERE correo='$correo'";
          $resultado = $mysqli->query($sql) or die($mysqli->error);
    	    $numRows = $resultado->num_rows;

            if ($numRows == 0 ) {
                $contrasena = $_REQUEST['contrasena'];
                $nombre = $_REQUEST['nombre'];
                $_SESSION['correo'] = $correo;

                $sql = "INSERT INTO usuarios (correo, nombre, contrasena) VALUES ('$correo','$nombre','$contrasena')";

                if ($mysqli->query($sql) !== TRUE) {
                    echo $sql . "<br>" . $mysqli->error;
                }

                $_SESSION['login'] = true;
                $_SESSION['correo'] = $correo;
    	    }

            else {
                die($correo.' ya ha sido registrado anteriormente.' . $mysqli->error);
            }
        }



    $mysqli->close();
    header("Location: ../vistas/bandejaSalida.php");
    exit;
?>
