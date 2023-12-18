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
				<a class="navbar-brand" href="index.html">Evolucion natural<span>.</span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li >
							<a class="nav-link" href="index.html">Inicio</a>
						</li>
						<li><a class="nav-link" href="shop.html">Productos</a></li>
						<li><a class="nav-link" href="services.html">Servicios</a></li>
						<li><a class="nav-link" href="about.html">Quienes somos</a></li>
						<li><a class="nav-link" href="blog.html">Nuestra comunidad</a></li>

					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<li><a class="nav-link" href="login.php"><img src="images/user.svg"></a></li>

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
								<h1>Registrate!! <span clsas="d-block"></span></h1>
								<p class="mb-4">Crea una cuenta para poder adquirir, monitorear y controlar tus cultivos.</p>
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
				<div class="row mb-3">
					<div class="col-md-6">
						<h2 class="section-title">Ingresa tus datos</h2>
					</div>
					<div class="col-md-6 text-start text-md-end">
						<a href="login.php" class="more">¿Ya tienes una cuenta?</a>
					</div>
				</div>






























				


<form class="row g-3 needs-validation" action="store.php" method="post" novalidate>


  <div class="col-md-4">

    <label for="validationCustom01" class="form-label">Nombres</label>
    <input type="text" name="Nombres" class="form-control" placeholder="Nombres" value="<?= (!empty($_GET['Nombres'])) ? $_GET['Nombres'] : "";?>"  id="validationCustom01"  required>
	

    <div class="valid-feedback">
      Correcto!
    </div>

	<div class="invalid-feedback">
        Ingresa tus nombres
      </div>

  </div>


  <div class="col-md-4">

    <label for="validationCustom02" class="form-label">Apellidos</label>
    <input type="text" name="Apellidos" class="form-control" placeholder="Apellidos" value="<?= (!empty($_GET['Apellidos'])) ? $_GET['Apellidos'] : ""?>" id="validationCustom02"  required>

    <div class="valid-feedback">
      Correcto!
    </div>

	<div class="invalid-feedback">
        Ingresa tus apellidos
      </div>

  </div>


  <div class="col-md-4">

    <label for="validationCustomcorreo" class="form-label">Celular</label>

    <div class="input-group has-validation">

	
      <input id="validationCustomUsername" type="text" name="cel" class="form-control" placeholder="321-654-9874" pattern="[0-9]{10}" value="<?= (!empty($_GET['cel'])) ? $_GET['cel'] : ""?>" required>
      
	  <div class="valid-feedback">
      Correcto!
      </div>

	  <div class="invalid-feedback">
        Ingresa tu numero de celular
      </div>

    </div>

  </div>

  <div class="col-md-4">

    <label for="validationCustom04" class="form-label">Direccion</label>
    <input type="text" name="Direccion" class="form-control" placeholder="Carrera 83K Bis #50 - 17 norte" value="<?= (!empty($_GET['Direccion'])) ? $_GET['Direccion'] : ""?>"  id="validationCustom04"  required>
	

    <div class="valid-feedback">
      Correcto!
    </div>

	<div class="invalid-feedback">
        Ingresa tu direccion
      </div>

  </div>

  <div class="col-md-4">

<label for="validationCustom05" class="form-label">Correo</label>

<div class="input-group has-validation">

  <span class="input-group-text" id="inputGroupPrepend">@</span>

  <input id="validationCustom05" aria-describedby="inputGroupPrepend" type="email" name="correo" class="form-control" placeholder="evolucionatural@gmail.com" value="<?= (!empty($_GET['correo'])) ? $_GET['correo'] : ""?>" required>

  <div class="valid-feedback">
  Correcto!
  </div>

  <div class="invalid-feedback">
	Ingresa tu correo electronico
  </div>

</div>

</div>




<div class="col-md-4">

<label for="validationCustom06" class="form-label">Nombre de usuario</label>

<div class="input-group has-validation">


  <input id="validationCustom06" type="text" name="usuario" class="form-control" value="<?= (!empty($_GET['usuario'])) ? $_GET['usuario'] : "";?>" placeholder="Andres_369" required>
  
  <div class="valid-feedback">
  Correcto!
  </div>

  <div class="invalid-feedback">
	Crea un nombre de usuario
  </div>

</div>

</div>


  

  <div class="col-md-5">

    <label for="validationCustom07" class="form-label">Contraseña</label>
    <input id="validationCustom07" type="password" name="clave" class="form-control" placeholder="Debe contener almenos una letra mayuscula y 8 caracteres" pattern="(?=.*[A-Z]).{8,}"  required>

	<div class="valid-feedback">
          Correcto!
    </div>

    <div class="invalid-feedback">
      Crea una contraseña que contenga una minimo mayuscula y 8 caracteres
    </div>

  </div>

  <div class="col-md-5">

    <label for="validationCustom08" class="form-label">Confirma la contraseña</label>
    <input id="validationCustom08"type="password" name="confirmC" class="form-control" placeholder="Escribe la contraseña de nuevo" pattern="(?=.*[A-Z]).{8,}"  required>

	<div class="valid-feedback">
          Correcto!
    </div>

    <div class="invalid-feedback">
      Repite la contraseña
    </div>

  </div>


  <div class="col-12">

    <div class="form-check">

      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>

      <label class="form-check-label" for="invalidCheck">
        He leido y acepto <a href="#">Terminos y condiciones</a>
      </label>

      <div class="invalid-feedback">
        Debes aceptar los terminos y condiciones
      </div>

    </div>

  </div>

  <input type="text" class="valorEnv" id="valorEnv" value="Nuevo" name="act" visibility: hidden>

  <div class="col-12">
  <button class="btn btn-primary"><i class="fa-solid fa-seedling"></i><span>Crear cuenta</span></button>
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
							<h3 class="d-flex align-items-center"><span class="me-1"><img src="images/envelope-outline.svg" alt="Image" class="img-fluid"></span><span>Subscribe to Newsletter</span></h3>

							<form action="#" class="row g-3">
								<div class="col-auto" >
									<input type="text" class="form-control" placeholder="Enter your name">
								</div>
								<div class="col-auto" >
									<input type="email" class="form-control" placeholder="Enter your email">
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
					<div class="col-lg-4">
						<div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Furni<span>.</span></a></div>
						<p class="mb-4">Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant</p>

						<ul class="list-unstyled custom-social">
							<li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
						</ul>
					</div>

					<div class="col-lg-8">
						<div class="row links-wrap">
							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">About us</a></li>
									<li><a href="#">Services</a></li>
									<li><a href="#">Blog</a></li>
									<li><a href="#">Contact us</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">Support</a></li>
									<li><a href="#">Knowledge base</a></li>
									<li><a href="#">Live chat</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">Jobs</a></li>
									<li><a href="#">Our team</a></li>
									<li><a href="#">Leadership</a></li>
									<li><a href="#">Privacy Policy</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">Nordic Chair</a></li>
									<li><a href="#">Kruzo Aero</a></li>
									<li><a href="#">Ergonomic Chair</a></li>
								</ul>
							</div>
						</div>
					</div>

				</div>

				<div class="border-top copyright">
					<div class="row pt-4">
						<div class="col-lg-6">
							<p class="mb-2 text-center text-lg-start">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a> Distributed By <a hreff="https://themewagon.com">ThemeWagon</a>  <!-- License information: https://untree.co/license/ -->
            </p>
						</div>

						<div class="col-lg-6 text-center text-lg-end">
							<ul class="list-unstyled d-inline-flex ms-auto">
								<li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
								<li><a href="#">Privacy Policy</a></li>
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
























