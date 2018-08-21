<?php
//Haremos un inicio de sesion.
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
<?php
    //Incluimos la conexion a la base de datos.
    include_once 'conexion.php';
    //Obtendremos el id.
    $id = $_GET['id'];
    //Declaramos la variable sentencia y le damos el valor de id de la tabla productos.
		$sentencia = "SELECT * FROM productos WHERE id =".$id;?>
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
  <h1 class="display-4">Actualizar Productos</h1>
  <p class="lead">Actualizar los Productos.</p>
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
  <!--Mediante el metodo post haremos un enlace al archivo Actualizar_P_A.php para ejecutar la accion de remplazar datos de los productos-->
    <form method="post" action="<?php echo 'Actualizar_P_A.php?id='.$id;?>">
	<!--Mediante un for haremos que haga la consulta a la tabla productos por cada id que exista.-->
  <?php foreach ($dbconnection ->query($sentencia) as $row ) {?> 



      <div class="form-group col-md-5">
        <label for="username">Codigo</label>
        <!--Se imprimira los datos de el campo mencionado de la tabla en el cuadro de texto-->
        <input type="text" class="form-control" name="Codigo_P" placeholder="Codigo" value="<?php echo $row['Codigo_P'];?>">
      </div>

      <div class="form-group col-md-5">
      <label for="nombre">Nombre del Producto</label>
      <!--Se imprimira los datos de el campo mencionado de la tabla en el cuadro de texto-->
      <input type="text" class="form-control" name="Nombre_P" placeholder="Producto" value="<?php echo $row['Nombre_P'];?>">
      </div>

      <div class="form-group col-md-5">
      <label for="grupo">Cantidad</label>
      <!--Se imprimira los datos de el campo mencionado de la tabla en el cuadro de texto-->
      <input type="text" class="form-control" name="Cantidad_P"placeholder="Cantidad" value="<?php echo $row['Cantidad_P'];?>">
      </div>

  </div>
  <!--Mediante el submit (Boton de Guardar) ejecutaremos el metodo post.-->
      <button type="submit" class="btn btn-dark">Save</button>
      <!--El boton de cancelar te redireccionara al menu-->
      <a type="cancel" href="panelSU.php" class="btn btn-dark" >Cancel</a>
    </form>
    <br>
</nav>
<br>
<br>
<?php		 
		}
 	?>
</body>
</html>