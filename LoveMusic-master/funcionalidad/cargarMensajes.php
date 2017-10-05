<?php
	if (isset($_SESSION['login']) && $_SESSION['login']) {

    include('../modelos/mensajes.php');
    include('connect.php');

		$correo = $usuario->getcorreo();


		$query = "SELECT * FROM mensajes WHERE receptor Like '$correo' OR receptor Like 'all'";
		$resultado = $mysqli->query($query) or die($mysqli->error);


		$recibidos = [];
		while ($fila = $resultado->fetch_row()) {
			$recibidos[] = new Mensaje($fila[0], $fila[1], $fila[2], $fila[3], $fila[4], $fila[5], $fila[6]);
		}

		$query = "SELECT * FROM mensajes WHERE emisor Like '$correo'";
		$resultado = $mysqli->query($query) or die($mysqli->error);


		$enviados = [];
		while ($fila = $resultado->fetch_row()) {
			$enviados[] = new Mensaje($fila[0], $fila[1], $fila[2], $fila[3], $fila[4], $fila[5], $fila[6]);
		}



		$mysqli->close();
	}
 ?>
