<!DOCTYPE html>
<html lang="es">
<head>
	
	<meta charset="UTF-8">
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
						<a href="#" id="btn_comenzar" class="btn btn-custom">COMENZAR!</a>
					</div>	
				</div>
			</div>
		</article>
		<div id="paso1"></div>
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
						<div class="col-xs-7 col-sm-5 col-sm-offset-2">
							<div class="form-group">
								<input type="email" id="email" name="email" class="form-control input-lg" placeholder="Tu correo electrónico" />
							</div>
						</div>
						<div class="col-xs-5 col-sm-3 ">
							<button id='btn_login' class="btn btn-custom btn-lg">SIGUIENTE!</button>
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
					<div class="clearfix"></div>
					<form id="subscribe-form" action="">
						<div class="row">
							<div class="col-xs-7 col-sm-5 col-sm-offset-2">
								<div class="form-group">
									<input type="text" id="nombre" class="form-control input-lg" placeholder="Nombre del sitio" />
								</div>
							</div>
							<div class="col-xs-5 col-sm-3 ">
								<h3>.addmy.site</h3>
							</div>
						</div>	
					</form>	
				</div>
			</div>
		</article>
	</div>

	<?php include 'inc/footer.php'; ?>
	<?php include 'inc/footer_common.php'; ?>
</body>
</html>