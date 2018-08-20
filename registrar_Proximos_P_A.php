<?php 

	$conexion = new mysqli('localhost','root','','refaccionaria');

	if($conexion->connect_error){
		die("La conexion ha fallado: ".$conexion->connect_error);
    }
    
    //$validarCampos = "SELECT * FROM teachers WHERE idTeacher_T = '$_POST[idTeacher_T]'";
    
        //  $count = mysqli_num_rows($result);

    //if($count == 1){
        $query = "INSERT INTO proximosproductos (Marca_P_P,Codigo_P_P,Nombre_P_P) VALUES ('$_POST[Marca_P_P]','$_POST[Codigo_P_P]','$_POST[Nombre_P_P]')";
            if($conexion->query($query)==TRUE){
                echo"<br/>"."<h2>"."Producto creado."."</h2>";
            }
            else{
                echo"Error al crear el Producto".$query."<br>".$conexion->error;
            }
      //  }
	//else{
	//	echo"Ingrese todos los campos correspondientes"."<br/>";
	//	echo"<a href='register_T.php'>Regresar</a>";
	//}
?>
