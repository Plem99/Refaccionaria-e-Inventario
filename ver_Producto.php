<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!--Esto sirve para escalar nuestra pagina web en diferentes dispositivos con diferentes dimesiones-->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scale=no, initial-scale=1, maximum-scale=1,minimum-scale=1">
	<title>Refaccionaria | Ver Productos</title>
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
                  <a class="nav-link text-light" href="logoutSU.php">Salirs</a>
                </li>
          </ul>
        </div>
  </nav>

</nav>
	
	<!--AQUI ES DONDE SE EMPIEZA-->
<!--Titulo-->
	<div class="jumbotron">
  <h1 class="display-4">Base de Datos de Productos</h1>
  <p class="lead">Lista de Productos.</p>
	</div>
<!--Tabla de datos alumno-->
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Marca</th>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre del Producto</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Actualizar Producto</th>
      <th scope="col">Borrar Producto</th>
    </tr>
  </thead>
  <tbody>
  <?php
      include_once 'conexion.php';
      $sentencia = "SELECT * FROM productos ORDER BY id ASC";
      foreach ($dbconnection->query($sentencia) as $row) {
          echo "<tr><td>".$row['id']."</td";
          echo "<tr><td>".$row['Marca_P']."</td";
          echo "<tr><td>".$row['Codigo_P']."</td";
          echo "<tr><td>".$row['Nombre_P']."</td";
          echo "<tr><td>".$row['Cantidad_P']."</td";
          echo "<tr><td><a href='Actualizar_P.php?id=".$row['id']."'>Actualizar</a></td>";
          echo "<td><a href='borrar_P.php?id=".$row['id']."'>Borrar</a></td>";
      }
  ?>
</tbody>
</table>