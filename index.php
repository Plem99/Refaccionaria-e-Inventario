<?php
	session_start();
	include 'conexion.php';
	if(isset($_SESSION['Usuario'])){
		echo '<script> window.location="panelSU.php"; </script>';
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
		<!--Esto sirve para escalar nuestra pagina web en diferentes dispositivos con diferentes dimesiones-->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scale=no, initial-scale=1, maximum-scale=1,minimum-scale=1">
	<title>Refaccionaria PLEM | Log In</title>
	<!--Agregamos los archivos css de bootstrap-->
	<link rel="stylesheet" href="css/bootstrap.min.css" id="bootstrap-css">
	<!--Agregamos los archivos js de bootstrap-->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!--Estilo css personalizado-->
	<link rel="stylesheet" href="css/signin.css">

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

	<!--Estilos usando css para la imagen de fondo y el color del placeholder del usuario y contraseña-->
	<style>
		body {
    		background-image: url("img/refaccionaria.jpg");
    		background-size: cover;
    		background-position: center center; 
    		background-repeat: no-repeat;
    		background-attachment: fixed;
    		height: 100vh;
    		width: 100%;
   		}
		input::-webkit-input-placeholder {
			color: white !important;
		}
		input:-moz-placeholder { /* Firefox 18- */
			color: white !important;  
		}
		input::-moz-placeholder {  /* Firefox 19+ */
			color: white !important;  
		}
		input:-ms-input-placeholder {  
			color: white !important;  
		}
	</style>
</head>
<!--Inicia el cuerpo de nuestro index-->
<!--Navbar-->
<!--El cuerpo contiene la siguiente clase, que lo que hace es centrarlo-->
<body class="text-center">

	<nav class="navbar navbar-expand-lg navbar-light"style="background-color: #151515;">
  <a class="navbar-brand text-light" href="index.php">INICIO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    </ul>
  </div>
</nav>
<!--Log in-->
	<form class="form-signin" method="post" action="validarSU.php">

		<img class="mb-4"src="img/logo.jpg" width="120" height="120">
		<h1  class="h3 mb-3 font-weight-normal text-light">Log In</h1>

		<label class="sr-only" style="background-color: #000000;"for="inputUsername">Username</label>
		<input id="inputUsername" class="form-control bg-white text-black"placeholder="Username" type="text" name="Usuario">
		<label class="sr-only  text-white"style="background-color: #000000;" for="inputPassword">Password</label>
		<input id="inputPassword" class="form-control bg-white text-black" placeholder="Password" type="password" name="Contrasena">
		<button class="btn btn-lg btn-primary btn-block mt-3 btn-outline-#000000"style="background-color: #000000;" type="submit" name="login">Log In</button>
		<br>

	</form>


<nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-#663399" style="background-color: #151515;>"
		<p class="mt-3 mb-3 text-light">2018</p>
	</nav>

</body>
</html>