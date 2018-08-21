<?php
//Iniciamos sesion.
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
  <h1 class="display-4">Registro de Clientes</h1>
  <p class="lead">Registro con la finalidad de tener un registro de clientes frecuentes.</p>
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
  <!--Mediante el metodo post haremos que ejecute la accion de tomar el archivo registrar_Clientes_A.php para iniciar el registro-->
<form action="registrar_Clientes_A.php" method="post">

    <div class="form-group col-md-5">
      <label for="namegroup">Nombre</label>
      <input type="text" class="form-control" name="Nombre_C" placeholder="Nombre">
      <!--Asignamos el nombre de el textinput con el nombre que queremos meter los datos en la bd-->
    </div>
    <div class="form-group col-md-5">
      <label for="namegroup">Apellido Paterno</label>
      <input type="text" class="form-control" name="Apellido_Paterno" placeholder="Apellido Paterno">
      <!--Asignamos el nombre de el textinput con el nombre que queremos meter los datos en la bd-->
    </div>
    <div class="form-group col-md-5">
      <label for="namegroup">Apellido Materno</label>
      <input type="text" class="form-control" name="Apellido_Materno" placeholder="Apellido Materno">
      <!--Asignamos el nombre de el textinput con el nombre que queremos meter los datos en la bd-->
    </div>
    <div class="form-group col-md-5">
      <label for="teachgroup">Correo Electronico</label>
      <input type="text" class="form-control" name="Correo_Electronico_C" placeholder="Correo Electronico">
      <!--Asignamos el nombre de el textinput con el nombre que queremos meter los datos en la bd-->
    </div>
    <div class="form-group col-md-5">
      <label for="teachgroup">Telefono</label>
      <input type="text" class="form-control" name="Telefono_C" placeholder="Telefono">
      <!--Asignamos el nombre de el textinput con el nombre que queremos meter los datos en la bd-->
    </div>
</div>
  <!--Con el submit haremos que se ejecute el metodo post.-->
  <button type="submit" name="guardarCliente"class="btn btn-dark">Guardar</button>
  <!--Si damos en el boton de cancelar nos redireccionara al menu-->
  <a type="cancel" href="panelSU.php" class="btn btn-dark" >Cancelar</a>
</form>


</body>
</html>