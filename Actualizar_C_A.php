<?php 
	//Incluir la conexion con la base de datos.
	include_once 'conexion.php';
	//Agregar variables con sus respectivos valores tomados de la basede datos.
	$id = $_GET['id'];
	$nombre = $_POST['Nombre_C'];
	$app = $_POST['Apellido_Paterno'];
    $apm = $_POST['Apellido_Materno'];
    $email = $_POST['Correo_Electronico_C'];
    $telefono = $_POST['Telefono_C'];

	//Declaracion de Variable para decir que hara una actualizacion en la tabla definida donde declararemos las variables con la relacion a los campos en la base de datos.
	$sentencia = $dbconnection -> prepare("UPDATE clientes SET Nombre_C = '$nombre', Apellido_Paterno = '$app', Apellido_Materno = '$apm', Correo_Electronico_C = '$email', Telefono_C = '$telefono' WHERE id = '$id'");
	$resultado = $sentencia -> execute([$nombre,$app,$apm,$email,$telefono]);

	if ($resultado) {
		# Condiciona el resultado:
		# Si el resultado me devolvio un TRUE quiere decir que la insercion de datos fue hecha correctamente
		header('Location: ver_Clientes.php');
	}else {
		# Si resultado fue FALSE la insercion de datos no fue hecha correctamente
		echo "<p>Error</p>";
	}

 ?>