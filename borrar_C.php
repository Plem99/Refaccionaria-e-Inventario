<?php 
	include_once 'conexion.php';
	$clienteid = $_GET['id'];
	$sentencia = $dbconnection -> prepare("DELETE FROM clientes WHERE id = ?");
	$resultado = $sentencia -> execute([$clienteid]);
	if ($resultado) {
		header('Location: ver_Clientes.php');
	}
	else{
		echo "Error";
	}
 ?>