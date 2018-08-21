<?php 
	//Incluir la conexion a la base de datos.
	include_once 'conexion.php';
	//Obtendremos el id.
	$productoid = $_GET['id'];
	//Le daremos a la variable sentencia que haga una eliminacion en la tabla proximosproductos mediante el identificador (id), este id se le 
	//dara mediante el otro archivo que esta invocando a borrar_P_P.php.
	$sentencia = $dbconnection -> prepare("DELETE FROM proximosproductos WHERE id = ?");
	//A resultado se le dara la ejecucion de entencia con el id del cliente.
	$resultado = $sentencia -> execute([$productoid]);
	//Si todo va bien.
	if ($resultado) {
		//Se redireccionara al archivo de ver_Proximos_P.php, donde se actualizara la tabla mostrada.
		header('Location: ver_Proximos_P.php');
	}
	//si no.
	else{
		//Te aparecera un mensaje de Error.
		echo "Error";
	}
 ?>