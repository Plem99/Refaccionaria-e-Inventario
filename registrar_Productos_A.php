<?php 
    //Variable que le daremos el valor de los datos de la base de datos, usuario, contraseña,etc.
	$conexion = new mysqli('localhost','root','','refaccionaria');
    //Si detecta algun error te dira que existe un error en la conexion.
	if($conexion->connect_error){
		die("La conexion ha fallado: ".$conexion->connect_error);
    }
    
    //$validarCampos = "SELECT * FROM teachers WHERE idTeacher_T = '$_POST[idTeacher_T]'";
    
        //  $count = mysqli_num_rows($result);

    //if($count == 1){
        //Hacemos la consulta para insertar en la tabla productos con los datos ingresados en los cuadros de texto en sus respectivos campos de la bd.
        $query = "INSERT INTO productos (Marca_P,Codigo_P,Nombre_P,Cantidad_P) VALUES ('$_POST[Marca_P]','$_POST[Codigo_P]','$_POST[Nombre_P]','$_POST[Cantidad_P]')";
        //Si detecta la conexion te marcara el mensaje de Producto creado.     
        if($conexion->query($query)==TRUE){
                echo"<br/>"."<h2>"."Producto creado."."</h2>";
            }
            //Si no.
            else{
                //Te aparecera el mensaje de Error al crear.
                echo"Error al crear el Producto".$query."<br>".$conexion->error;
            }
      //  }
	//else{
	//	echo"Ingrese todos los campos correspondientes"."<br/>";
	//	echo"<a href='register_T.php'>Regresar</a>";
	//}
?>
