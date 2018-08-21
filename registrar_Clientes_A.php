<?php 
    //Variable que le daremos el valor de los datos de la base de datos, usuario, contraseña,etc.
	$conexion = new mysqli('localhost','root','','refaccionaria');
    //Si detecta algun error te dira que existe un error en la conexion.
	if($conexion->connect_error){
		die("La conexion ha fallado: ".$conexion->connect_error);
    }

   // $validarCampos = "SELECT * FROM students WHERE idStudent_S = '$_POST[idStudent_S]'";
    
     //   $result = $conexion->query($validarCampos);
       // $count = mysqli_num_rows($result);

        //if($count == 1){
        //Hacemos la consulta para insertar en la tabla clientes con los datos ingresados en los cuadros de texto en sus respectivos campos de la bd
        $query = "INSERT INTO clientes (Nombre_C,Apellido_Paterno,Apellido_Materno,Correo_Electronico_C,Telefono_C) VALUES ('$_POST[Nombre_C]','$_POST[Apellido_Paterno]','$_POST[Apellido_Materno]','$_POST[Correo_Electronico_C]','$_POST[Telefono_C]')";
        //Si detecta la conexion te marcara el mensaje de Cliente creado    
        if($conexion->query($query)==TRUE){
                echo"<br/>"."<h2>"."Cliente creado."."</h2>";
            }
            //Si no.
            else{
                //Te aparecera el mensaje de Error al crear
                echo"Error al crear Cliente".$query."<br>".$conexion->error;
            }
        //}
        //else{
            //    echo"Ingrese todos los campos correspondientes"."<br/>";
          //      echo"<a href='register_S.php'>Regresar</a>";
            //}
?>
