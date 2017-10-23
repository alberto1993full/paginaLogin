<!DOCTYPE html>

	<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.html");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}
	?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Usuario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="animate.css">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body data-offset="40" background="imagenes/fondo3.jpg" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
    <?php
    include("principal/cabecera.php");
    ?>
</div>
</header>

  <!-- Navbar
    ================================================== -->

<div class="navbar">
  <div class="navbar-inner">
    <div class="container">
      <div class="nav-collapse">
        <ul class="nav">
            <li class=""><a href="index2.php">Pagina de User</a></li>
        </ul>
        <form action="#" class="navbar-search form-inline" style="margin-top:6px">
        </form>
        <ul class="nav pull-right">
        <li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>
              <li><a href="desconectar.php"> Cerrar Cesión </a></li>             
        </ul>
      </div><!-- /.nav-collapse -->
    </div>
  </div><!-- /navbar-inner -->
</div>
<div class="col-md-4 center-block text-center quitarfloat espacio-arriba">
        <img src="imagenes/SistemasOperativos1.jpg" class="animated bounceIn">
<br>
<br>
<form >
    <div class="animated bounceIn">
    <h1 class="pacifico grande verde animated fadeIn retraso-1">Sistemas Operativos</h1>
    <div class="animated fadeInDown retraso-2">
        <H2>Mas Conocimiento</H2>
    </div>
    </form>
<br>
<br>
    <footer id="pie">
Derechos Reservados &copy; 2016-2017
</footer>
</div>
    </div>
  </body>
</html>