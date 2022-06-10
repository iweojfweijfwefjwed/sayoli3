<?php
	session_start();
	if(!isset($_SESSION['usuario'])){
		echo'<script>
			alert("¡Inicia sesión para acceder!");
			window.location="acceso.html";
		</script>';
		session_destroy();
		die();
	}else{
		include("php/datos_usuario.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Eliminar mi cuenta-(Kyandī)</title>
	<meta charset="utf-8">
	<meta name="description" content="Dulceria, Japon, Kawaii"/>
	<meta name="keywords" content="Pocky, Kokeiya, Honkaku"/>
	<meta name="robot" content="index,follow"/>
	<link rel="icon" type="image/png" href="img/logo1.png"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>

<body>
	<!--Encabezado: Titulo y logotipos-->
	<div class="header container-fluid">
		<div class="row">
			<div class="col-4">
				<img src="img/logo1.png" alt="Logo 1">
			</div>
			<div class="col-4">
				<p>キャンディー<br>= Kyandī =</p>
			</div>
			<div class="col-4">
				<a href="perfil.php"><img src="img/user.png" alt="Logo 2" class="float-right" style="padding-top: 22px;" title="Mi perfil"></a>
			</div>
		</div>
	</div>
	<div class="col" style="box-shadow: 0 0 10px .25px black;"></div>

	<!--Barra de navegación-->
	<nav class="navigation">
		<ul>
			<li><a href="index.html">Inicio</a></li>
			<li><a href="novedades.html">Novedades</a></li>
			<li><a href="#">Ofertas</a></li>
		</ul>
	</nav>
	<div class="col" style=" position: relative; height: 3px; border-color: #c5930a; background-color: #e94e77"></div><br>
		
	<!--Contenido principal de la pagina-->
	<main>

	<div class="container">		
		<div class="row">
			<div class="col-sm-12">
				<h4>¿Estas seguro que desear eliminar tú cuenta?</h4>
			</div>
			<div class="col-sm-12">
				<p>Ingresa tus datos para confirmar tu petición:</p>
			</div>
		</div><br>
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
				<form action="php/eliminar.php" method="post">
				<!--Correo-->
				<div class="form-group">
					<label for="email"><h5>Correo:</h5></label>
					<input type="email" class="form-control" name="correo" placeholder="correo@mail.com" required>
				</div>
				<div class="form-group">
					<label for="contraseña"><h5>Contraseña</h5></label>
					<input type="password" class="form-control" name="contrasena" placeholder="Password" required>
				</div>
				<button type="submit" class="btn btn-primary" style="background: #d68189; border-color: #d68189">Enviar</button>
				</form>
			</div>
			<div class="col-sm-2"></div>
		</div><br><br>
	</div>
	</main>
	
	<footer>		
		<!--Pie de pagina 1-->
	<div class="footer1">
	<div class="row">
		<div class="col-2"></div>
		<div class="col-2">
			<ul>
				<li style="font-size: 20px; font-family: Georgia;">
					<a href="terminos_codiciones.html" style="color: inherit;"><h6>Terminos y Condiciones</h6></a>
				</li>
			</ul>
		</div>
		<div class="col-4">
			<p style="font-size: 15px; font-family: Georgia; text-align: justify;">Hecho en México, todos los derechos reservados 2021. Esta página ha sido desarrollada por estudiantes de la Facultad de Estudios Superiores Cuautitlán.</p>
		</div>
		<div class="col-3">
				<a href="#" style="color: inherit;"><li style="font-size: 18px; font-family: Georgia;">Aviso de privacidad</li></a>
		</div>
	</div>		
	</div>


	<!--Pie de pagina 2-->
	<div class="footer2">
		<p style="font-size: 18px; color: #ffffff; font-family: Arial; text-align: center;"><br>Facultad de Estudios Superiores Cuautitlán<br>Licenciatura en Informática<br>2021.</p>
	</div>
	</footer>
</body>
</html>