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
								<h1>Nuestros servicios</h1>
								<p class="mb-4">Aqui encontraras todos nuestros servicios como soporte tecnico, asesoramiento de cultivos y mucho mas.</p>
								</div>
						</div>
						<div class="col-lg-7">
							<div class="hero-img-wrap">
								<img src="images/suculentaMaster.png" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		

		<!-- Start Why Choose Us Section -->
		<div class="why-choose-section">
			<div class="container">
				<br>
			<br>
			<br>
			<br>
			<br>
			<br>
				
				<div class="row my-2">

					<div class="col-6 col-md-6 col-lg-3 mb-1">
						<div class="feature">
							<div class="icon">
								<img src="images/truck.svg" alt="Image" class="imf-fluid">
							</div>
							<h3>Envios rapidos y seguros.</h3>
							<p>Tus productos en la puerta de tu casa y con la mejor asesoria.</p>
						</div>
					</div>

					<div class="col-6 col-md-6 col-lg-3 mb-1">
						<div class="feature">
							<div class="icon">
								<img src="images/bag.svg" alt="Image" class="imf-fluid">
							</div>
							<h3>Nuestros productos.</h3>
							<p>Te ofrecemos la mejor calidad en botanica, tecnologia y todo lo necesarrio para cultivar.</p>
						</div>
					</div>

					<div class="col-6 col-md-6 col-lg-3 mb-1">
						<div class="feature">
							<div class="icon">
								<img src="images/support.svg" alt="Image" class="imf-fluid">
							</div>
							<h3>Soporte 24/7.</h3>
							<p>Nuestro equipo esta a tus ordenes las 24 horas, los 7 dias de la semana para acompañarte siempre.</p>
						</div>
					</div>

					<div class="col-6 col-md-6 col-lg-3 mb-1">
						<div class="feature">
							<div class="icon">
								<img src="images/return.svg" alt="Image" class="imf-fluid">
							</div>
							<h3>Devoluciones sin complicaciones.</h3>
							<p>Si tienes problemas con tus productos, estamos dispuestos a brindarte una solucion.</p>
						</div>
					</div>

					
					<div class="col-6 col-md-6 col-lg-3 mb-1">
						<div class="feature">
							<div class="icon">
								<img src="images/tool.svg" width="50" class="imf-fluid">
							</div>
							<h3>Mantenimientos preventivos y correctivos.</h3>
							<p>Mantendremos tus sistemas como nuevos.</p>
						</div>
					</div>

					<div class="col-6 col-md-6 col-lg-3 mb-1">
						<div class="feature">
							<div class="icon">
								<img src="images/pc.svg" alt="Image" class="imf-fluid">
							</div>
							<h3>Tecnologia avanzada.</h3>
							<p>Te brindamos herramientas tecnologicas para facilitar tus cosechas.</p>
						</div>
					</div>

					<div class="col-6 col-md-6 col-lg-3 mb-1">
						<div class="feature">
							<div class="icon">
								<img src="images/seed.svg" alt="Image" class="imf-fluid">
							</div>
							<h3>Las mejores especies.</h3>
							<p>Trabajamos de la mano de proveedores con excelente reputacion.</p>
						</div>
					</div>

					<div class="col-6 col-md-6 col-lg-3 mb-1">
						<div class="feature">
							<div class="icon">
								<img src="images/aten.svg" alt="Image" class="imf-fluid">
							</div>
							<h3>Asesoria de calidad.</h3>
							<p>Nuestro equipo de asesores esta dispuesto a brindarte una asesoria personalizada.</p>
						</div>
					</div>


					

				</div>
			
			</div>
		</div>
		<!-- End Why Choose Us Section -->

		<!-- Start Product Section -->
		<div class="product-section">
			<div class="container">
				<div class="row">

					<!-- Start Column 1 -->
					<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
						<h2 class="mb-4 section-title">Conoce nuestros productos.</h2>
						<p class="mb-4">Contamos con productos de excelente calidad para que tus cultivos tengan lo mejor. </p>
						<p><a href="productos.php" class="btn">Explorar</a></p>
					</div> 
					<!-- End Column 1 -->

					<!-- Start Column 3 -->
					<div class="col-12 col-md-4 col-lg-9 mb-5 mb-md-0">
					<center><div id="carouselExampleDark" class="carousel carousel-dark slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
	<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
	<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
	<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 6"></button>
	<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="6" aria-label="Slide 7"></button>
	<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="7" aria-label="Slide 8"></button>
	<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="8" aria-label="Slide 9"></button>
	<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="9" aria-label="Slide 10"></button>
	<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="10" aria-label="Slide 11"></button>
	</div>

	
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
      <img src="images/matera.png" width="300" class="d-block w-10">
	  <br><br><br><br><br>
      <div class="carousel-caption d-none d-md-block">
        <h5>Materas</h5>
        <p>Contamos con materas de todas las formas y tamaños para adaptar tu espacio.</p>
      </div>
    </div>


    <div class="carousel-item" data-bs-interval="2000">
      <img src="images/VitaminaE.png" width="300" class="d-block w-10">
	  <br><br><br><br><br>
      <div class="carousel-caption d-none d-md-block">
        <h5>Vitaminas</h5>
        <p>Con nuestras vitaminas le aportaremos suplementos a tus sustratos.</p>
      </div>
    </div>



    <div class="carousel-item">
      	<img src="images/SustratoU.png" width="300" class="d-block w-10" data-bs-interval="2000">
	  	<br><br><br><br><br>
      <div class="carousel-caption d-none d-md-block">
        <h5>Sustratos</h5>
        <p>Traemos los mejores sustratos para todo tipo de cultivo.</p>
      </div>
    </div>

	<div class="carousel-item">
      	<img src="images/semillas.jpg" width="450" class="d-block w-10" data-bs-interval="2000">
	  	<br><br><br><br><br>
      <div class="carousel-caption d-none d-md-block">
        <h5>Semillas</h5>
        <p>Trabajamos de la mano de los mejores bancos de semillas.</p>
      </div>
    </div>

	<div class="carousel-item">
      	<img src="images/ferti.png" width="300" class="d-block w-10" data-bs-interval="2000">
	  	<br><br><br><br><br>
      <div class="carousel-caption d-none d-md-block">
        <h5>Fertilizantes</h5>
        <p>Te brindamos la solucion para la falta de nutrientes en tus plantas.</p>
      </div>
    </div>

	<div class="carousel-item" data-bs-interval="2000">
      <img src="images/fungi.png" width="300" class="d-block w-10" data-bs-interval="2000">
	  <br><br><br><br><br>
      <div class="carousel-caption d-none d-md-block">
        <h5>Fungicidas</h5>
        <p>Con nuestros productos mantendremos libres de hongos tus cultivos.</p>
      </div>
    </div>

	<div class="carousel-item" data-bs-interval="2000">
      <img src="images/insecti.png" width="300" class="d-block w-10" data-bs-interval="2000">
	  <br><br><br><br><br>
      <div class="carousel-caption d-none d-md-block">
        <h5>Insecticidas</h5>
        <p>Te brindamos la mejor proteccion para cualquier tipo de plaga.</p>
      </div>
    </div>


    <div class="carousel-item" data-bs-interval="2000">
      <img src="images/ups.png" width="300" class="d-block w-10">
	  <br><br><br><br><br>
      <div class="carousel-caption d-none d-md-block">
        <h5>UPS</h5>
        <p>Nuestro equipo trabaja para brindarte soluciones de ahorro energetico.</p>
      </div>
    </div>



    <div class="carousel-item">
      	<img src="images/tarjetas.png" width="400" class="d-block w-10" data-bs-interval="2000">
	  	<br><br><br><br><br>
      <div class="carousel-caption d-none d-md-block">
        <h5>Tarjetas</h5>
        <p>Diseñamos las tarjetas de potencia y control necesarias para automatizar tus cultivos.</p>
      </div>
    </div>

	<div class="carousel-item">
      	<img src="images/sensor.png" width="360" class="d-block w-10" data-bs-interval="2000">
	  	<br><br><br><br><br>
      <div class="carousel-caption d-none d-md-block">
        <h5>Sensores</h5>
        <p>Te ofrecemos dispositivos para monitorear a distancia tus cultivos.</p>
      </div>
    </div>

	<div class="carousel-item">
      	<img src="images/actuador.png" width="300" class="d-block w-10" data-bs-interval="2000">
	  	<br><br><br><br><br>
      <div class="carousel-caption d-none d-md-block">
        <h5>Actuadores</h5>
        <p>Te ofrecemos dispositivos para controlar a distancia tus cultivos.</p>
      </div>
    </div>

  </div>



  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div></center>





					</div>
					<!-- End Column 3 -->

				

				</div>
			</div>
		</div>
		<!-- End Product Section -->

		<!-- Start Testimonial Slider -->
		<div class="testimonial-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 mx-auto text-center">
						<h2 class="section-title">Testimonios</h2>
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-lg-12">
						<div class="testimonial-slider-wrap text-center">

							<div id="testimonial-nav">
								<span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
								<span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
							</div>

							<div class="testimonial-slider">
								
								<div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
													<p>&ldquo;La respuesta a mi problema no tardo mas de 24 horas, la compañia cuenta con un excelente servidcio y atención.&rdquo;</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<img src="images/jaz.jpg"  class="img-fluid">
													</div>
													<h3 class="font-weight-bold">Olga Duque</h3>
													<span class="position d-block mb-3">Usuario</span>
												</div>
											</div>

										</div>
									</div>
								</div> 
								<!-- END item -->

								<div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
													<p>&ldquo;Con la tecnologia de <b>evolucion natural</b>, ahora puedo monitorear y controlar mis cultivos a distancia.&rdquo;</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<img src="images/negra.jpg" alt="Maria Jones" class="img-fluid">
													</div>
													<h3 class="font-weight-bold">Edgardo Rivera</h3>
													<span class="position d-block mb-3">Usuario</span>
												</div>

											</div>

										</div>
									</div>
								</div> 
								<!-- END item -->

								<div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
													<p>&ldquo;Me siento muy feliz de poder tener mis propios alimentos y frutas incluso si no tengo tiempo para cultivar.&rdquo;</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<img src="images/ama.jpg"  class="img-fluid">
													</div>
													<h3 class="font-weight-bold">Sandra Salazar</h3>
													<span class="position d-block mb-3">Usuario</span>
												</div>

											</div>

										</div>
									</div>
								</div> 
								<!-- END item -->

								
								

							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Testimonial Slider -->

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
