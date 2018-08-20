<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
		include_once 'conexion.php';
		$id = $_GET['id'];
		$sentencia = "SELECT * FROM clientes WHERE id =".$id;?>
  <!--Esto sirve para escalar nuestra pagina web en diferentes dispositivos con diferentes dimesiones-->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scale=no, initial-scale=1, maximum-scale=1,minimum-scale=1">
  <title>Refaccionaria | Registro de Clientes</title>
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
  
  <!--AQUI ES DONDE SE EMPIEZA-->

  <!--Titulo-->
  <div class="jumbotron text-center">
  <h1 class="display-4">Actualizar Clientes</h1>
  <p class="lead">Actuaizar los datos de los Clientes.</p>
  </div>  

  <!--List Group-->
<div class="container"> 
<div class="list-group float-right">
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Registro </h5>
    </div>
    <p class="mb-1">Solo registros a personas mayores de edad.</p>
    <small>Mayor de 18 Años.</small>
  </a>
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Identificacion</h5>
    </div>
    <p class="mb-1">Se mostrara la identificacion al encargado del registro.</p>
    <small class="text-muted">Identificacion Oficial.</small>
  </a>
</div>

  <!--Form-->

<form method="post" action="<?php echo 'Actualizar_C_A.php?id='.$id;?>">

<?php foreach ($dbconnection ->query($sentencia) as $row ) {?> 

    <div class="form-group col-md-5">
      <label for="namegroup">Nombre</label>
      <input type="text" class="form-control" name="Nombre_C" placeholder="Nombre" value="<?php echo $row['Nombre_C'];?>">
    </div>
    <div class="form-group col-md-5">
      <label for="namegroup">Apellido Paterno</label>
      <input type="text" class="form-control" name="Apellido_Paterno" placeholder="Apellido Paterno" value="<?php echo $row['Apellido_Paterno'];?>">
    </div>
    <div class="form-group col-md-5">
      <label for="namegroup">Apellido Materno</label>
      <input type="text" class="form-control" name="Apellido_Materno" placeholder="Apellido Materno" value="<?php echo $row['Apellido_Materno'];?>">
    </div>
    <div class="form-group col-md-5">
      <label for="teachgroup">Correo Electronico</label>
      <input type="text" class="form-control" name="Correo_Electronico_C" placeholder="Correo Electronico" value="<?php echo $row['Correo_Electronico_C'];?>">
    </div>
    <div class="form-group col-md-5">
      <label for="teachgroup">Telefono</label>
      <input type="text" class="form-control" name="Telefono_C" placeholder="Telefono" value="<?php echo $row['Telefono_C'];?>">
    </div>
</div>

  <button type="submit" name="guardarCliente"class="btn btn-dark">Guardar</button>
  <a type="cancel" href="panelSU.php" class="btn btn-dark" >Cancelar</a>
</form>

<?php		 
		}
 	?>
</body>
</html>