<?php session_start();
	include('cargarUsuario.php');
	include('connect.php');

  $correo = $_SESSION['correo'];

	if (isset($_SESSION['login']) && $_SESSION['login']) {

		if (!empty($_REQUEST['para']) && !empty($_REQUEST['asunto']) && !empty($_REQUEST['mensaje'])) {

    		$asunto = $_REQUEST['asunto'];
    		$mensaje = $_REQUEST['mensaje'];

	        $emisor = $correo;



	        $para = $_REQUEST['para'];

	        if ($para == 'all') {
	        	$receptor = "all";
	        }

	        else {
	        	$receptor = $para;
	        }



					$leido = 'no';
					$fecha = date('d/m/Y');

	        $sql = "INSERT INTO mensajes (emisor, receptor, asunto, mensaje, leido, fecha) VALUES ('$emisor', '$receptor', '$asunto', '$mensaje', '$leido', '$fecha')";
	        $mysqli->query($sql) or die(mysql_error());

	    }
	}

	$mysqli->close();
    header("Location: ../vistas/bandejaEntrada.php");
    exit;

 ?>
