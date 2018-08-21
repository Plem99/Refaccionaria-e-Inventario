<?php 
	//Incluir la conexion con la base de datos.
	include_once 'conexion.php';
	//Agregar variables con sus respectivos valores tomados de la basede datos.
	$id = $_GET['id'];
	$codigo = $_POST['Codigo_P'];
	$nombre = $_POST['Nombre_P'];
	$cantidad = $_POST['Cantidad_P'];

	//Declaracion de Variable para decir que hara una actualizacion en la tabla definida donde declararemos las variables con la relacion a los campos en la base de datos.
	$sentencia = $dbconnection -> prepare("UPDATE productos SET Codigo_P = '$codigo', Nombre_P = '$nombre', Cantidad_P = '$cantidad' WHERE id = '$id'");
	//Se hara la ejecucion de las variables definidas con los valores de la tabla de base de datos.
	$resultado = $sentencia -> execute([$codigo,$nombre,$cantidad]);

	if ($resultado) {
		# Condiciona el resultado:
		# Si el resultado me devolvio un TRUE quiere decir que la insercion de datos fue hecha correctamente
		#Si todo fue correcto te mandara a ver_Producto.php
		header('Location: ver_Producto.php');
	}else {
		# Si resultado fue FALSE la insercion de datos no fue hecha correctamente
		echo "<p>Error</p>";
	}

 ?>