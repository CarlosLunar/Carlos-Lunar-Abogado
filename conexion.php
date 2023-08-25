<?php
$db_name = 'mysql:host=localhost;dbname=bd_abogado';
$db_user = 'root';
$db_password = '';

$conexion = new PDO($db_name,$db_user,$db_password);
if (!$conexion) {
	echo "NO Conectado a la Base de Datos...";
}
?> 
