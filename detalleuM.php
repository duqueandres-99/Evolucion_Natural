<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mhi";

// Crear conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT * FROM usuarios";
$sqli = "SELECT * FROM usuarios";

session_start();

$inicio = "indexM.php?usuario=".$_GET['usuario'];
$productos = "productosM.php?usuario=".$_GET['usuario'];
$servicios = "serviciosM.php?usuario=".$_GET['usuario'];
$nosotros = "nosotrosM.php?usuario=".$_GET['usuario'];
$blog = "blogM.php?usuario=".$_GET['usuario'];
$panel = "headerM.php?usuario=".$_GET['usuario'];

?>


<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="css/tiny-slider.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<title>Evolucion Natural </title>



      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="main.css">  
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
           
    <!--font awesome con CDN-->  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
      

	</head>

	<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="<?=$inicio?>">Evolucion natural<span>.</span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-0 mb-md-0">
						<li >
							<a class="nav-link" href="<?=$inicio?>">Inicio</a>
						</li>
						<li><a class="nav-link" href="<?=$productos?>">Productos</a></li>
						<li><a class="nav-link" href="<?=$servicios?>">Servicios</a></li>
						<li><a class="nav-link" href="<?=$nosotros?>">Quienes somos</a></li>
						<li><a class="nav-link" href="<?=$blog?>">Nuestra comunidad</a></li>
						
						<ul class="custom-navbar-cta navbar-nav mb-0 mb-md-0 ms-0">
						<li><a class="nav-link" href="<?=$panel?>"><i class="fa-solid fa-toolbox"></i>panel</a></li>
							<li><img src="images/user.svg"></li>
							<li><b><?php echo $_GET['usuario'] ?></b></li>
							</ul>

					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-0 mb-md-0 ms-0">

						<li><a class="nav-link" href="login.php"><i class="fa-solid fa-right-from-bracket"></i></a></li>

					</ul>

				</div>

			</div>
				
		</nav>
		<!-- End Header/Navigation -->

		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Examinar  <span clsas="d-block"></span>datos</h1>
								<p class="mb-4">En esta seccion podras ver con detalle los datos registrados del usuario que seleccionaste.</p>
								</div>
						</div>
						<div class="col-lg-6">
							<div class="hero-img-wrap">
								<img src="images/suculentaMaster.png" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		


		<div class="blog-section">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md-6">
						<h2 class="section-title">Detalle de los datos del usuario</h2>
					</div>
					<div class="col-md-6 text-start text-md-end">
						<a href="headerM.php?usuario=MASTER" class="more">Volver al panel</a>
					</div>
				</div>



                <h5><u>Datos registrados</u></h5>

                <?php
            
                $id = $_POST['id'];     



                if (mysqli_query($conn, $sql)) {
                    $resultado = mysqli_query($conn, "SELECT * FROM usuarios WHERE `ID_Usuario` = '$id'");
                    while($consulta = mysqli_fetch_array($resultado)){
                        
                        echo " - Nombres: ";
                        echo $consulta['Nombres'];
                        echo '<br>';
                        echo " - Apellidos: ";
                        echo $consulta['Apellidos'];
                        echo '<br>';
                        echo " - Celular: ";
                        echo $consulta['Telefono'];
                        echo '<br>';
                        echo " - Direccion: ";
                        echo $consulta['Direccion'];
                        echo '<br>';
                        echo "  - Correo: ";
                        echo $consulta['Correo'];
                        echo '<br>';
                        echo " - Nombre de usuario: ";
                        echo $consulta['Nombre_usuario'];
                        echo '<br>';
                        echo " - Cantidad de huertos: ";
                        echo $consulta['Cantidad_de_huertos'];
                        echo '<br><br><br><br><br>';

                        
                        
                        }
                }
    
            ?>

<form method="post" action="Editar.php?usuario=MASTER">
<input type="text" class="valorEnv" id="id" value="<?=$id?>" name="id" visibility: hidden>
<input style="menu" type="submit" class="btn btn-primary ml-2 mb-2" value="Actualizar datos">
</form>
		

		<!-- Start Blog Section -->
		<div class="blog-section">
			<div class="container">
				
			</div>
		</div>
		<!-- End Blog Section -->	
		
		<!-- Start Footer Section -->
		<footer class="footer-section">
			<div class="container relative">

				<div class="sofa-img">
					<img src="images/cultivo.png" alt="Image" class="img-fluid">
				</div>

				<div class="row">
					<div class="col-lg-8">
						<div class="subscription-form">
							<h3 class="d-flex align-items-center"><span class="me-1"><img src="images/envelope-outline.svg" alt="Image" class="img-fluid"></span><span>¿Quieres recibir asesoria?</span></h3>

							<form action="#" class="row g-3">
								<div class="col-auto">
									<input type="text" class="form-control" placeholder="Ingresa tu nombre">
								</div>
								<div class="col-auto">
									<input type="email" class="form-control" placeholder="Ingresa tu correo">
								</div>
								<div class="col-auto">
									<button class="btn btn-primary">
										<span class="fa fa-paper-plane"></span>
									</button>
								</div>
							</form>

						</div>
					</div>
				</div>

				<div class="row g-5 mb-5">
					<div class="col-lg-5">
						<div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Evolucion natural<span>.</span></a></div>
						<p class="mb-3">No importa que tan dificil parezca, te apoyaremos con nuestra tecnologia y te enseñaremos a descubrir los beneficios de cultivar.</p>


						<ul class="list-unstyled custom-social">
						<li><h5>Encuentranos en :</h5></li>
						
							<li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
						</ul>
					</div>

					<div class="col-lg-6">
						<div class="row links-wrap">

								<div class="col-6 col-sm-6 col-md-5">
								
								</div>

								

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
								<center>
									<li><a href="#">Soporte</a></li>
									<li><a href="#">PQRS</a></li>
									<li><a href="#">Agendar Cita</a></li>
								</center>

								</ul>
							</div>

							

							<div class="col-6 col-sm-6 col-md-4">
								<ul class="list-unstyled">
								<center>
									<li><a href="#">Nuestro Equipo</a></li>
									<li><a href="#">Nuestra Motivacion</a></li>
									<li><a href="#">Nuestras politicas</a></li>
								</center>
								</ul>
							</div>

							
						</div>
					</div>

				</div>

				<div class="border-top copyright">
					<div class="row pt-4">
						<div class="col-lg-6">
							<p class="mb-2 text-center text-lg-start">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. Todos los derechos reservados.   <!-- License information: https://untree.co/license/ -->
            </p>
						</div>

						<div class="col-lg-6 text-center text-lg-end">
							<ul class="list-unstyled d-inline-flex ms-auto">
								<li class="me-4"><a href="#">Terminos &amp; Condiciones</a></li>
								<li><a href="#">Politica de Privacidad</a></li>
							</ul>
						</div>

					</div>
				</div>

			</div>
		</footer>
		<!-- End Footer Section -->	


		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>


		<!-- jQuery, Popper.js, Bootstrap JS -->
		<script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>    
     
    <!-- para usar botones en datatables JS -->  
    <script src="datatables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>  
    <script src="datatables/JSZip-2.5.0/jszip.min.js"></script>    
    <script src="datatables/pdfmake-0.1.36/pdfmake.min.js"></script>    
    <script src="datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="datatables/Buttons-1.5.6/js/buttons.html5.min.js"></script>
     
    <!-- código JS propìo-->    
    <script type="text/javascript" src="main.js"></script>  


	</body>

</html>




























