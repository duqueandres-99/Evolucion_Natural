<?php
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
		<title>Furni Free Bootstrap 5 Template for Furniture and Interior Design Websites by Untree.co </title>
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
								<h1>Crear <span clsas="d-block"></span>Producto</h1>
								<p class="mb-4">En esta seccion debes ingresar los datos del articulo que quieres registrar en el inventario.</p>
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
						<h2 class="section-title">Crear articulo</h2>
					</div>
					<div class="col-md-6 text-start text-md-end">
						<a href="headerM.php?usuario=MASTER" class="more">Volver al panel</a>
					</div>
				</div>



                




<form class="row g-3 needs-validation" action="store.php" method="post"  novalidate>


  <div class="col-md-4">

    <label for="validationCustom01" class="form-label">Categoria</label>
	<select type="text" name="categoria" class="form-control"   id="validationCustom01"  required>
                                    <option value="  " selected="selected">---Selecione la categoria</option>
                                    <option value="Vitaminas">1-Vitaminas</option>
                                    <option value="Sustratos">2-Sustratos</option>
                                    <option value="Materas">3-Materas</option>
                                    <option value="Semillas">4-Semillas</option>
                                    <option value="Fertilizantes">5-Fertilizantes</option>
                                    <option value="Fungicidas">6-Fungicidas</option>
                                    <option value="Ups">7-Ups</option>
                                    <option value="Tarjetas">8-Tarjetas</option>
                                    <option value="Sensores">9-Sensores</option>
                                    <option value="Actuadores">10-Actuadores</option>
                                </select>

	

    <div class="valid-feedback">
      Correcto!
    </div>

	<div class="invalid-feedback">
        Ingresa los nombres
      </div>

  </div>


  <div class="col-md-4">

    <label for="validationCustom02" class="form-label">Nombre del articulo</label>
    <input type="text" name="Nombre_art" class="form-control" placeholder="Nombre del articulo"  id="validationCustom02"  required>

    <div class="valid-feedback">
      Correcto!
    </div>

	<div class="invalid-feedback">
        Ingresa el nombre del articulo
      </div>

  </div>

  <div class="col-md-4">

    <label for="validationCustom04" class="form-label">Cantidad disponible</label>
    <input type="text" name="cantidad" class="form-control" placeholder="Cantidad disponible del articulo"  id="validationCustom04"  required>
	

    <div class="valid-feedback">
      Correcto!
    </div>

	<div class="invalid-feedback">
        Si no tienes disponible el articulo coloca 0
      </div>

  </div>

				
<div class="col-md-4">

<label for="validationCustom06" class="form-label">Precio</label>

<div class="input-group has-validation">


  <input id="validationCustom06" type="text" name="precio" class="form-control"  placeholder="$33000" required>
  
  <div class="valid-feedback">
  Correcto!
  </div>

  <div class="invalid-feedback">
	Indica cuanto cuesta el articulo 
  </div>

</div>

</div>

  <input type="text" class="valorEnv" id="valorEnvp" value="CrearP" name="act" visibility: hidden>
  <input type="text" class="valorEnv" id="valorEnvp" value="<?=$idi?>" name="idi" visibility: hidden>

  <div class="col-4">
  <button class="btn btn-primary"><i class="fa-solid fa-arrow-up-from-bracket"></i><span> Crear articulo</span></button>
  </div>


</form>

<script>// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
	'use strict'
  
	// Fetch all the forms we want to apply custom Bootstrap validation styles to
	const forms = document.querySelectorAll('.needs-validation')
  
	// Loop over them and prevent submission
	Array.from(forms).forEach(form => {
	  form.addEventListener('submit', event => {
		if (!form.checkValidity()) {
		  event.preventDefault()
		  event.stopPropagation()
		}
  
		form.classList.add('was-validated')
	  }, false)
	})
  })()</script>









		

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




























