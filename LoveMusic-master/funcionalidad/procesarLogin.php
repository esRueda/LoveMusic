<?php  session_start();
	if (!empty($_REQUEST['correo']) && !empty($_REQUEST['contrasena'])) {
		$correo = $_REQUEST['correo'];
		$contrasena = $_REQUEST['contrasena'];

        include('connect.php');


        $query = "SELECT correo FROM usuarios WHERE correo LIKE '$correo' AND contrasena LIKE '$contrasena'";
    	$resultado = $mysqli->query($query) or die($mysqli->error);
    	$numRows = $resultado->num_rows;

        if ($numRows == 0 ) {
    		$_SESSION['login'] = false;
    	}

    	else {
        	$_SESSION['login'] = true;
          $_SESSION['correo'] = $correo;
    	}

    	$mysqli->close();
	}
    header("Location: ../vistas/bandejaSalida.php");
    exit;
?>
