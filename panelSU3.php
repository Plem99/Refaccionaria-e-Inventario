<?php
session_start();
include 'conexion.php';

if(isset($_SESSION['Usuario'])) {?>
<!DOCTYPE html>
<html lang="en">
<head>
		<!--Esto sirve para escalar nuestra pagina web en diferentes dispositivos con diferentes dimesiones-->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scale=no, initial-scale=1, maximum-scale=1,minimum-scale=1">
	<title>CAI | Sign In</title>
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
    		background-image: url("img/UPV.jpg");
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
      			<li class="nav-item">
        			<a class="nav-link text-light" href="logoutSU.php">Salir</a>
      			</li>
    		</ul>
  		</div>
	</nav>

</nav>
<!--Perfil Super Usuario-->
<br>
<br>
<div class="card-deck">
<div class="card" style="width: 18rem;">
        <img class="card-img-top" src="img/classroom.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Alta Clientes</h5>
          <p class="card-text">Registrar Clientes</p>
          <a href="register_G.php" class="btn btn-primary">Registrar</a>
        </div>
      </div>
<br>
<br>
<div class="card" style="width: 18rem;">
        <img class="card-img-top" src="img/teachers.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Teachers Registration</h5>
          <p class="card-text">Teachers of CAI</p>
          <a href="register_T.php" class="btn btn-primary">Register</a>
        </div>
      </div>
      <br>
<br>
<div class="card" style="width: 18rem;">
        <img class="card-img-top" src="img/students.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Students Registration</h5>
          <p class="card-text">Students of CAI</p>
          <a href="register_S.php" class="btn btn-primary">Register</a>
        </div>
      </div>
  </div>
<br>
<br>
<div class="card-deck">
<div class="card" style="width: 18rem;">
        <img class="card-img-top" src="img/classroom2.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Groups Viewer</h5>
          <p class="card-text">Groups of CAI</p>
          <a href="view_G.php" class="btn btn-primary">View</a>
        </div>
      </div>
<br>
<br>
<div class="card" style="width: 18rem;">
        <img class="card-img-top" src="img/teachers2.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Teachers Viewer</h5>
          <p class="card-text">Teachers of CAI</p>
          <a href="view_T.php" class="btn btn-primary">View</a>
        </div>
      </div>
      <br>
<br>
<div class="card" style="width: 18rem;">
        <img class="card-img-top" src="img/students2.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Students Viewer</h5>
          <p class="card-text">Students of CAI</p>
          <a href="view_S.php" class="btn btn-primary">View</a>
        </div>
      </div>
  </div>
<br>
<br>
  </body>
</html>


<?php
}else{
	 echo '<script> window.location="index.php"; </script>';
}
?>