<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!--Esto sirve para escalar nuestra pagina web en diferentes dispositivos con diferentes dimesiones-->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scale=no, initial-scale=1, maximum-scale=1,minimum-scale=1">
	<title>Refaccionaria | Ver Clientes</title>
	<!--Agregamos los archivos css de bootstrap-->
	<link rel="stylesheet" href="css/bootstrap.min.css" id="bootstrap-css">
	<!--Agregamos los archivos js de bootstrap-->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!--Estilo css personalizado-->
	<link rel="stylesheet" href="css/signin.css">
</head>
<!--Inicia el cuerpo de nuestro index-->
<!--Navbar-->
<body class="text-center">
<nav class="navbar navbar-expand-lg navbar-light"style="background-color: #151515;">
<a class="navbar-brand text-light" href="panelSU.php">INICIO</a>
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
	
	<!--AQUI ES DONDE SE EMPIEZA-->
<!--Titulo-->
	<div class="jumbotron">
  <h1 class="display-4">Base de Datos de Clientes</h1>
  <p class="lead">Lista de Clientes.</p>
 
	</div>
<!--Barra menu-->
	<!--<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Down</a>
    </li>
</ul>-->
<!--Barra de Busqueda
<nav class="navbar navbar-light bg-light">
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
-->
<!--Tabla de datos alumno-->
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido Paterno</th>
      <th scope="col">Apellido Materno</th>
      <th scope="col">Correo Electronico</th>
      <th scope="col">Telefono</th>
      <th scope="col">Actualizar Cliente</th>
      <th scope="col">Eliminar Cliente</th>
    </tr>
  </thead>
  <tbody>
  <?php
      include_once 'conexion.php';
      $sentencia = "SELECT * FROM clientes ORDER BY id ASC";
      foreach ($dbconnection->query($sentencia) as $row) {
          echo "<tr><td>".$row['id']."</td";
          echo "<tr><td>".$row['Nombre_C']."</td";
          echo "<tr><td>".$row['Apellido_Paterno']."</td";
          echo "<tr><td>".$row['Apellido_Materno']."</td";
          echo "<tr><td>".$row['Correo_Electronico_C']."</td";
          echo "<tr><td>".$row['Telefono_C']."</td";
          echo "<tr><td><a href='Actualizar_C.php?id=".$row['id']."'>Actualizar</a></td>";
          echo "<td><a href='borrar_C.php?id=".$row['id']."'>Eliminar</a></td>";
      }
  ?>
</tbody>
</table>
</body>
</html>