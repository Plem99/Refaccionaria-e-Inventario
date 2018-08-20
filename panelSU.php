<?php
session_start();
include 'conexion.php';

if(isset($_SESSION['Usuario'])) {?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Refaccionaria PLEM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Inicio
                <span class="sr-only">(current)</span>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="logoutSU.php">Salir</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">
          <br>
          <br>
          <h1 class="my-4">Refaccionaria PLEM</h1>
          <div class="list-group">
            <a href="registro_Clientes.php" class="list-group-item">Registro de Clientes</a>
            <a href="registro_Productos.php" class="list-group-item">Registro de Productos</a>
            <a href="registro_Proximos_P.php" class="list-group-item">Registro de Proximos Productos</a>
            <a href="ver_Clientes.php" class="list-group-item">Administrar Clientes</a>
            <a href="ver_Producto.php" class="list-group-item">Administrar Productos</a>
            <a href="ver_Proximos_P.php" class="list-group-item">Administrar Proximos Productos</a>
          </div>

        </div>
        <!-- /.col-lg-3 -->
        <br>
        <br>
        <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="img/aceites.png" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="img/fierros.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="img/productos.png" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="row">

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/1.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Proximos Productos</a>
                  </h4>
                  
                  <p class="card-text">Bujías Hyundai.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/2.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Proximos Productos</a>
                  </h4>
                  
                  <p class="card-text">Repuesto genérico | | Helimax es distribuidor oficial de Dynam, helicopteros RC, HSP, coches radiocontrol. Disponemos de toda la gama de helicopteros de 6 canales Dynam e-razor 450.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/3.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Proximos Productos</a>
                  </h4>
                  
                  <p class="card-text">Alternador VALEO - giro CW, montaje SAEJ 180, sistema Valeo, serie IR/</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/4.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Proximos Productos</a>
                  </h4>
                  
                  <p class="card-text">Baterias.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/5.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Proximos Productos</a>
                  </h4>
                  
                  <p class="card-text">BOMBA DIESEL MODULO NISSAN URVAN, CABSTAR 2.5L. MOD. 11-16 TECNOFUEL.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/6.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Proximos Productos</a>
                  </h4>
                 
                  <p class="card-text">Grasa Automotriz.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
<?php
}else{
	 echo '<script> window.location="index.php"; </script>';
}
?>
