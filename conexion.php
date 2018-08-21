<?php 
	//Declaracion de variables con los datos de usuario de la basede datos.
	$user = "root";
	$pass = "";
	$dbName = "refaccionaria";
	//Se hara la conexion mediant el PDO declarando los datos necesarios para hacer la conexion.
	try {
		$dbconnection = new PDO('mysql:host=localhost;dbname='.$dbName,$user,$pass);
		//Por si detecta algun error.
		//$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//Juego de caracteres con la que se manejara en la conexion
		//$base->exec("SET CHARACTER SET UTF8");
	} catch (Exception $e) {
		echo "Error en la conexion";
		//Marcar linea del error.
		echo "Linea del error". $e->getLine();
	}
 ?>