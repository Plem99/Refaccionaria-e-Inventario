<?php
//Inicamos sesion.
	session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
<head>
	<title>Validando...</title>
	<meta charset="utf-8">
</head>
</head>
<body>
		<?php
			//Incluiremos la conexion de la bd.
			include 'dbconnect.php';
			//Si se da click en el boton de login (Asignado en el index) se evaluara si:
			if(isset($_POST['login'])){
				//Si el usuario es el correspondiente en la base de datos.
				$usuario = $_POST['Usuario'];
				//Si la contraseña es correspondiente a la bd.
                $password = $_POST['Contrasena'];
                //Hacer Consulta, donde se seleccionara de la tabla admin, donde usuario y contraseña tienen que coincidir.
				$consulta = mysql_query("SELECT * FROM admin WHERE Usuario='$usuario' AND Contrasena='$password'");
                //Si el numero de consultas es mayor a 0
                if (mysql_num_rows($consulta)>0) {
                    //se procedera a crear la sesion
                    //listar los usuarios
                    $row = mysql_fetch_array($consulta);
                    //Crear sesion con variable Uusario que es la variable de sesion de bd
					$_SESSION["Usuario"] = $row['Usuario']; 
				  	echo 'Iniciando sesión para '.$_SESSION['Usuario'].' <p>';
					echo '<script> window.location="panelSU.php"; </script>';
				}
				//Si no.
				else{
					//Se imprimiran los mensajes de usuario o contraseña incorrectos
					echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
					echo '<script> window.location="index.php"; </script>';
				}
			}
		?>	
</body>
</html>