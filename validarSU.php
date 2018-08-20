<?php
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
			include 'dbconnect.php';
			if(isset($_POST['login'])){
				$usuario = $_POST['Usuario'];
                $password = $_POST['Contrasena'];
                //Hacer Consulta
				$consulta = mysql_query("SELECT * FROM admin WHERE Usuario='$usuario' AND Contrasena='$password'");
                //Si el numero de consultas es mayor a 0
                if (mysql_num_rows($consulta)>0) {
                    //se procedera a crear la sesion
                    //listar los usuarios
                    $row = mysql_fetch_array($consulta);
                    //Crear sesion con variable username_a que es la variable de sesion de bd
					$_SESSION["Usuario"] = $row['Usuario']; 
				  	echo 'Iniciando sesión para '.$_SESSION['Usuario'].' <p>';
					echo '<script> window.location="panelSU.php"; </script>';
				}
				else{
					echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
					echo '<script> window.location="index.php"; </script>';
				}
			}
		?>	
</body>
</html>