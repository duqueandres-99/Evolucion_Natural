<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mhi";

// Crear conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT * FROM usuarios";
$sqli = "SELECT * FROM inventario";

session_start();

$inicio = "indexM.php?usuario=".$_GET['usuario'];
$productos = "productosM.php?usuario=".$_GET['usuario'];
$servicios = "serviciosM.php?usuario=".$_GET['usuario'];
$nosotros = "nosotrosM.php?usuario=".$_GET['usuario'];
$blog = "blogM.php?usuario=".$_GET['usuario'];

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
								<h1>Panel de <span clsas="d-block"></span>Control</h1>
								<p class="mb-4">Bienvenido, aqui encontraras tu dashboard, podras editar los usuarios registrados y el inventario.</p>
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

		

		<br><br><br><br><br><br><br><br><h1 class="text-center">Usuarios registrados</h1><br><br>
		


		<div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive"> 

		<table id="myTableu" class="table table-striped table-bordered" cellspacing="0" width="100%">
			<thead>
        		<tr>
					<th>#</th>
					<th>Nombre de usuario</th>
            		<th>Nombres</th>
					<th>Apellidos</th>
					<th>Direccion</th>
					<th>Correo</th>
					<th>Telefono</th>
					<th>Cantidad de huertos</th>
					<th>Acciones</th>
        		</tr>
    		</thead>
    		<tbody>
			
			<?php

			$item = 1;

if (mysqli_query($conn, $sql)) {
	$resultado = mysqli_query($conn, "SELECT * FROM usuarios");
	while($consulta = mysqli_fetch_array($resultado)){



echo "<tr>";
echo "<td><br><br>";
echo $item++;
echo "</td>";
echo "<td>";


							

    echo "<br><br>";	
    echo $consulta['Nombre_usuario'];
						    


echo "</td>";

echo "<td>";
            					

    

    echo '<br><br>';
    echo $consulta['Nombres'];
								

						
echo "</td>";
						
echo "<td>";
            					

    

    echo '<br><br>';
    echo $consulta['Apellidos'];
								

						
echo "</td>";

echo "<td>";
            					

    

    echo '<br><br>';
    echo $consulta['Direccion'];
								

						
echo "</td>";

echo "<td>";
            					

    

	echo '<br><br>';
	echo $consulta['Correo'];
							

						
echo "</td>";

echo "<td>";
            					

	

    echo '<br><br>';
    echo $consulta['Telefono'];
								

						
echo "</td>";

echo "<td>";
            					

    

    echo "<br><br>";
    echo $consulta['Cantidad_de_huertos'];

	$id = $consulta['ID_Usuario'];
								

						
echo "</td>";

echo "<td>";
	


	echo "<table>";

	echo "<tr>";
	echo "<form action='store.php' method='post'>";
		echo '<td><i class="fa-solid fa-trash-can"></i></i></td>';
		echo '<td><button>Eliminar</button></td>';
		echo '<input type="text" class="valorEnv" id="id" value="'.$id.'" name="id" visibility: hidden>';
		echo '<input type="text" class="valorEnv" id="id" value="Eliminar" name="act" visibility: hidden>';
		echo "</form>";
	echo "</tr>";

	echo "<tr>";
	echo "<form action='Editar.php?usuario=MASTER' method='post'>";
		echo '<td><i class="fa-solid fa-pen"></i></td>';
		echo '<td><button>Editar</button></td>';
		echo '<input type="text" class="valorEnv" id="id" value="'.$id.'" name="id" visibility: hidden>';
		echo "</form>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<form action='detalleuM.php?usuario=MASTER' method='post'>";
		echo '<td><i class="fa-solid fa-magnifying-glass"></i></td>';
		echo '<td><button>Examinar</button></td>';
		echo '<input type="text" class="valorEnv" id="id" value="'.$id.'" name="id" visibility: hidden>';
		echo "</form>";
	echo "</tr>";
	echo "</table>";
	
echo "</td>";
					
echo "</tr>";

	}
}

?>

    		</tbody>
		</table>
		<button style="menu" type="button" class="btn btn-primary ml-2 mb-2"><a class="nav-link" href="crearU.php?usuario=MASTER"><i class="fa-solid fa-user-plus"></i> Crear usuario</a></button>

			</div>
		</div>
	</div>
</div>



















		<br><br><br><br><h1 class="text-center">Productos en inventario</h1><br><br>

		<div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive"> 

<table id="myTablei" class="table table-striped table-bordered" cellspacing="0" width="100%">

    		<thead>
        		<tr>
					<th>#</th>
					<th>Categoria</th>
            		<th>Nombre del articulo</th>
					<th>Cantidad disponible</th>
					<th>Precio</th>
					<th>Acciones</th>
        		</tr>
    		</thead>
    		
			

			<tbody>

			<?php

$itemi = 1;
$idi = 0;

if (mysqli_query($conn, $sqli)) {
	$resultadoi = mysqli_query($conn, "SELECT * FROM inventario");
	while($consultai = mysqli_fetch_array($resultadoi)){



echo "<tr>";
echo "<td><br><br><br>";
echo $itemi++;
echo "</td>";
echo "<td>";


							

    echo "<br><br><br>";	
    echo $consultai['Categoria'];
	
		    


echo "</td>";

echo "<td>";
            					

    

    echo '<br><br><br>';
    echo $consultai['Nombre_del_articulo'];
								

						
echo "</td>";
						
echo "<td>";
            					

    

    echo '<br><br><br>';
    echo $consultai['Cantidad_disponible'];
								

						
echo "</td>";

echo "<td>";
            					

    

    echo '<br><br><br>';
    echo $consultai['Precio'];
	$idi = $consultai['ID_Categoria'];

	

						
echo "</td>";

echo "<td>";

echo "<table>";

echo "<tr>";
echo "<form action='store.php' method='post'>";
	echo '<td><i class="fa-solid fa-trash-can"></i></i></td>';
	echo '<td><button>Eliminar</button></td>';
	echo '<input type="text" class="valorEnv" id="idi" value="'.$idi.'" name="idi" visibility: hidden>';
	echo '<input type="text" class="valorEnv" id="idi" value="Eliminarp" name="act" visibility: hidden>';
	echo "</form>";
echo "</tr>";

echo "<tr>";
echo "<form action='EditarpM.php?usuario=MASTER' method='post'>";
	echo '<td><i class="fa-solid fa-pen"></i></td>';
	echo '<td><button>Editar</button></td>';
	echo '<input type="text" class="valorEnv" id="idi" value="'.$idi.'" name="idi" visibility: hidden>';
	echo "</form>";
echo "</tr>";

echo "<tr>";
echo "<form action='detallepM.php?usuario=MASTER' method='post'>";
	echo '<td><i class="fa-solid fa-magnifying-glass"></i></td>';
	echo '<td><button>Examinar</button></td>';
	echo '<input type="text" class="valorEnv" id="idi" value="'.$idi.'" name="idi" visibility: hidden>';
	echo "</form>";
echo "</tr>";
echo "</table>";

echo "</td>";
					
echo "</tr>";

	}
}

?>
			
			</tbody>
		</table>

		<button style="menu" type="button" class="btn btn-primary ml-2 mb-2"><a class="nav-link" href="crearP.php?usuario=MASTER"><i class="fa-solid fa-circle-plus"></i> Añadir articulo</a></button>

</div>
</div>
</div>
</div>




		<script> 

			var tablau = document.querySelector("#myTableu");

			var dataTable = new DataTable(tablau);

			var tablai = document.querySelector("#myTablei");

			var dataTable = new DataTable(tablai);

			

			

		</script>





























		

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
























