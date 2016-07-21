<!DOCTYPE html>
<html lang="es">
<head>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<?php include 'inc/head_common.php'; ?>
	<link rel="stylesheet" href="css/workshops.css">
	<title>AddMy</title>
	<link rel="shortcut icon" href="img/Mas.png" type="image/png" />
	
	
</head>
<body>
	<?php include 'inc/header.php'; ?>
	
	<div id="workshop-list">
		<article id="w1" class="workshop workshop-left">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 main-info">
						<h2>¿Necesitás tu página web hoy?</h2>
					</div>
					<div class="col-xs-12 main-info">
						<a href="#" id="btn_comenzar" class="btn btn-custom btn_comenzar">COMENZAR!</a>
					</div>	
				</div>
			</div>
		</article>
		<div id="paso1"></div>
		<div class="clearfix"></div>
		<article id="w2" class="workshop workshop-right">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 main-info">
						<h2>1. Registrate</h2>
					</div>
				</div>
				<div class="clearfix"></div>
				<form id="subscribe-form" action="">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-sm-offset-3 margen-sup-input">
								<input type="email" class="form-control input-lg" id="email" placeholder="Tu correo">
								<input type="text" class="form-control input-lg" id="nombre" placeholder="Tu nombre">
								<input type="password" class="form-control input-lg" id="password" placeholder="Tu contraseña">
								<input type="password" class="form-control input-lg" id="password2" placeholder="Ingresa nuevamente tu contraseña">
						</div>
						<div class="col-xs-12 ">
							<button id="btn_login" class="btn btn-custom btn-lg">CONTINUAR!</button>
						</div>
					</div>	
				</form>	
			</div>
		</article>
		<div id="paso2"></div>
		<div class="clearfix"></div>
		<article id="w3" class="workshop workshop-right">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 main-info">
						<h2>2. Elige un lindo nombre para tu sitio!</h2>
					</div>
				</div>
				<div class="clearfix"></div>
					<form id="subscribe-form" action="">
						<div class="row">
							<div class="col-xs-8 col-sm-5 col-sm-offset-3 margen-sup-input">
								<input type="text" class="form-control input-lg" id="siteName" placeholder="Nombre del sitio" name="siteName"> 
								<span id="msgDisponible" class="help-block aIzq">Ej. tusitio.addmy.site</span>
							</div>
							<div class="col-xs-4 col-sm-3 ">
								<h3>.addmy.site</h3>
							</div>
						</div>
						<div class="col-xs-12 col-sm-5 col-sm-offset-3">
							<h3>Tu dirección de correo es: &nbsp;&nbsp;<span id="emailSite"> tusitio@addmy.site</span></h3>
						</div>
						<div class="col-xs-12 ">
							<button id="btn-continuar1" class="btn btn-custom btn-lg btn-continuar">CONTINUAR!</button>
						</div>
					</form>	
			</div>
		</article>
		<div id="paso4"></div>
		<div class="clearfix"></div>
		<article id="w5" class="workshop workshop-left">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 main-info">
						<h2>4. ¿Que van a ver en tu sitio?</h2>
					</div>
				</div>

				<div class="clearfix"></div>

				<div class="row marginTop paso4">

						<div class="col-md-4">
						    <label for="vh1">
						      	<input type="checkbox" name="ch1" id="ch1" value="option1">Logo
							</label>
						</div>

						<div class="col-md-4">
						    <label for="vh1">
						      	<input type="checkbox" name="ch1" id="ch1" value="option1">Logo
							</label>
						</div>

						<div class="col-md-4">
						    <label for="vh1">
						      	<input type="checkbox" name="ch1" id="ch1" value="option1">Logo
							</label>
						</div>

						<div class="col-md-4">
						    <label for="vh1">
						      	<input type="checkbox" name="ch1" id="ch1" value="option1">Logo
							</label>
						</div>

						<div class="col-md-4">
						    <label for="vh1">
						      	<input type="checkbox" name="ch1" id="ch1" value="option1">Logo
							</label>
						</div>

						<div class="col-md-4">
						    <label for="vh1">
						      	<input type="checkbox" name="ch1" id="ch1" value="option1">Logo
							</label>
						</div>
					
				</div>
				<div class="clearfix"></div>
				<div class="row">
					<div class="col-xs-12 main-info">
						<button id="btn_continuar2" class="btn btn-custom btn-lg btn-continuar">CONTINUAR!</button>
					</div>	
				</div>
			</div>
		</article>
	</div>

	<?php //include 'inc/footer.php'; ?>
	<?php include 'inc/footer_common.php'; ?>
</body>
</html>