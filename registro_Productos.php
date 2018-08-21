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
  <title>Refaccionaria | Registro de Productos</title>
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
  <h1 class="display-4">Registro de Productos</h1>
  <p class="lead">Registro de los productos en Stock con los que se cuenta la tienda.</p>
  </div>  

  <!--List Group--> 
  <div class="container"> 
    <div class="list-group float-right">
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Stock </h5>
    </div>
    <p class="mb-1">La cantidad con la que se cuenta dicho producto.</p>
    <small>Ejemplo: 50.</small>
  </a>
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Otros</h5>
    </div>
    <p class="mb-1">Al ser otros, registrar nombrede la marca en "Nombre".</p>
    <small class="text-muted">Ejemplo: Castrol Aceite.</small>
  </a>
  
    </div>

  <!--Form-->
  <!--Mediante el metodo post haremos que ejecute la accion de tomar el archivo registrar_Productos_A.php para iniciar el registro-->
    <form action="registrar_Productos_A.php" method="post">
      


      <div class="form-group col-md-5">
      <label for="Marca">Marca</label>
      <select class="custom-select" name="Marca_P">
        <option selected>Choose...</option>
        <option value="QUAKER">QUAKER</option>
        <option value="BARDAHL">BARDAHL</option>
        <option value="GONHER">GONHER</option>
        <option value="LTH">LTH</option>
        <option value="MOBIL">MOBIL</option>
        <option value="OTROS">OTROS</option>
      </select>
      </div>

      <div class="form-group col-md-5">
        <label for="username">Codigo</label>
        <input type="text" class="form-control" name="Codigo_P" placeholder="Codigo">
        <!--Asignamos el nombre de el textinput con el nombre que queremos meter los datos en la bd-->
      </div>

      <div class="form-group col-md-5">
      <label for="nombre">Nombre del Producto</label>
      <input type="text" class="form-control" name="Nombre_P" placeholder="Producto">
      <!--Asignamos el nombre de el textinput con el nombre que queremos meter los datos en la bd-->
      </div>

      <div class="form-group col-md-5">
      <label for="grupo">Cantidad</label>
      <input type="text" class="form-control" name="Cantidad_P"placeholder="Cantidad">
      <!--Asignamos el nombre de el textinput con el nombre que queremos meter los datos en la bd-->
      </div>


      

  </div>
  <!--Con el submit haremos que se ejecute el metodo post.-->
      <button type="submit" class="btn btn-dark">Save</button>
      <!--Si damos en el boton de cancelar nos redireccionara al menu-->
      <a type="cancel" href="panelSU.php" class="btn btn-dark" >Cancel</a>
    </form>
    <br>
</nav>
<br>
<br>
</body>
</html>