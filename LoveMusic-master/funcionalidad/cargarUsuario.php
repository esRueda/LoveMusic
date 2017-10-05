<?php
	if (isset($_SESSION['login']) && $_SESSION['login']) {

    include('../modelos/usuarios.php');
    include('connect.php');


		$correo     = $_SESSION['correo'];

		$query     = "SELECT * FROM usuarios WHERE correo Like '$correo'";
		$resultado = $mysqli->query($query) or die($mysqli->error);
		$arr       = $resultado->fetch_array(MYSQLI_ASSOC);

		$usuario = new Usuario($arr["correo"], $arr["nombre"], $arr["contrasena"], $arr["fecha"], $arr["foto"], $arr["genero"], $arr["usuario"]);


		$mysqli->close();
	}
 ?>
