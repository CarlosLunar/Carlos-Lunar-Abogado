<?php
	$nombre = mb_strtoupper($_POST['nombre']);
	$email = mb_strtoupper($_POST['email']);
	$asunto = mb_strtoupper($_POST['asunto']);

	include "conexion.php";

	$insertar = "INSERT INTO registro_cliente (nombre, email, asunto) VALUES ('$nombre', '$email', '$asunto')";

	if ($conexion -> query($insertar) == true) { 

		header("Location: index.html");
	}else {
		// echo 'Registro NO Insertado...';
		header("Location: index.html");
	}
?>
