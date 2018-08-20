<?php 
	include_once 'conexion.php';
	$productoid = $_GET['id'];
	$sentencia = $dbconnection -> prepare("DELETE FROM proximosproductos WHERE id = ?");
	$resultado = $sentencia -> execute([$productoid]);
	if ($resultado) {
		header('Location: ver_Proximos_P.php');
	}
	else{
		echo "Error";
	}
 ?>