<?php 
	include_once 'conexion.php';
	$productoid = $_GET['id'];
	$sentencia = $dbconnection -> prepare("DELETE FROM productos WHERE id = ?");
	$resultado = $sentencia -> execute([$productoid]);
	if ($resultado) {
		header('Location: ver_Producto.php');
	}
	else{
		echo "Error";
	}
 ?>