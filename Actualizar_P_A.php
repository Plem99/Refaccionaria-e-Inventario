<?php 
	include_once 'conexion.php';
	$id = $_GET['id'];
	$codigo = $_POST['Codigo_P'];
	$nombre = $_POST['Nombre_P'];
	$cantidad = $_POST['Cantidad_P'];


	$sentencia = $dbconnection -> prepare("UPDATE productos SET Codigo_P = '$codigo', Nombre_P = '$nombre', Cantidad_P = '$cantidad' WHERE id = '$id'");
	$resultado = $sentencia -> execute([$codigo,$nombre,$cantidad]);

	if ($resultado) {
		# Condiciona el resultado:
		# Si el resultado me devolvio un TRUE quiere decir que la insercion de datos fue hecha correctamente
		header('Location: ver_Producto.php');
	}else {
		# Si resultado fue FALSE la insercion de datos no fue hecha correctamente
		echo "<p>Error</p>";
	}

 ?>