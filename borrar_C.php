<?php 
	//Incluir la conexion a la base de datos.
	include_once 'conexion.php';
	//Obtendremos el id.
	$clienteid = $_GET['id'];
	//Le daremos a la variable sentencia que haga una eliminacion en la tabla clientes mediante el identificador (id), este id se le 
	//dara mediante el otro archivo que esta invocando a borrar_C.php.
	$sentencia = $dbconnection -> prepare("DELETE FROM clientes WHERE id = ?");
	//A resultado se le dara la ejecucion de entencia con el id del cliente.
	$resultado = $sentencia -> execute([$clienteid]);
	//Si todo va bien.
	if ($resultado) {
		//Se redireccionara al archivo de ver_Cliente.php, donde se actualizara la tabla mostrada.
		header('Location: ver_Clientes.php');
	}
	//si no.
	else{
		//Te aparecera un mensaje de Error.
		echo "Error";
	}
 ?>