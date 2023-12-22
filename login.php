<?php
if(session_start()){
session_destroy();
}
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
	</head>

	<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="index.php">Evolucion natural<span>.</span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
				<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						
						<li>
							<a class="nav-link" href="index.php">Inicio</a>
						</li>
						<li><a class="nav-link" href="productos.php">Productos</a></li>
						<li><a class="nav-link" href="servicios.php">Servicios</a></li>
						<li><a class="nav-link" href="nosotros.php">Quienes somos</a></li>
						<li><a class="nav-link" href="blog.php">Nuestra comunidad</a></li>
						<li class="nav-item active"><a class="nav-link" href="login.php"><img src="images/user.svg">  Ingresar</a></li>
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
								<h1>Iniciar <span clsas="d-block">Sesion</span></h1>
								<p class="mb-4">Inicia sesion para ingresar al panel de control y poder realizar compras.</p>
								</div>
						</div>
						<div class="col-lg-7">
							<div class="hero-img-wrap">
								<img src="images/suculenta.png" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		

		

		

		

		

		<!-- Start Blog Section -->
		<div class="blog-section">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md-6">
						<h2 class="section-title">Identificate</h2>
					</div>
					<div class="col-md-6 text-start text-md-end">
						<a href="registrarse.php" class="more">¿Quieres Registrarte?</a>
					</div>
				</div>

                

				<div class="row">

                    <div class="col-12 col-sm-4 col-md-6 mb-9">
						<div>
							<img src="images/fondo.png" width="400" >
						</div>
					</div>

					<div class="col-12 col-sm-3 col-md-6 mb-5">
						<div class="post-entry">

										

<br>
<br>
<br>
<form class="row g-3 needs-validation" action="store.php" method="post" novalidate>


<div class="col-md-10">

  <center><label for="validationCustom01" class="form-label">Nombre de usuario o correo</label></center>
  <input type="text" name="usuario" class="form-control" placeholder="Nombre de usuario o correo"  id="validationCustom01"  required>
  

  <div class="valid-feedback">
	Correcto!
  </div>

  <div class="invalid-feedback">
	  Ingresa el nombre de usuario o el correo
	</div>

</div>




<div class="col-md-10">

  <center><label for="validationCustom07" class="form-label">Contraseña</label></center>
  <input id="validationCustom07" type="password" name="clave" class="form-control" placeholder="Contraseña"   required>

  <div class="valid-feedback">
		Correcto!
  </div>

  <div class="invalid-feedback">
	Ingresa la contraseña que registraste
  </div>

</div>

<input type="text" class="valorEnv" id="valorEnv" value="ingresar" name="act" visibility: hidden>

<div class="col-md-6">

	<input class="form-check-input" type="checkbox" id="gridCheck">

	<label class="form-check-label" for="gridCheck">
		Mantener sesion iniciada
	</label>

</div>


<div class="col-md-4">

<a href="#"><u>Olvide mi contraseña<span>.</span></u></a>
    
</div>

<div class="col-12"></div>


<div class="col-12">
	<div class="col-9">
		<div class="form-check">
			<center><button class="btn btn-primary"><i class="fa-solid fa-spa"></i><span> ingresar</span></button></center>
		</div>
	</div>
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






	</div>
</div>

					

					

				</div>
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
	</body>

</html>
























