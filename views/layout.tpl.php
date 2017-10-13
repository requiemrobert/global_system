
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="" />
	<meta name="viewport" content="initial-scale=1">
	<meta HTTP-EQUIV="Pragma" CONTENT="no-cache">
	
	<?php 
		  loadCss($data_head); 
		  loadScript($data_head);
	?>	
		
	<title><?= $titulo ?></title>
</head>

<body>

	<header class="header">
		<div class="wrapp-flex">
			<div class="logo-header">
				<a href="#"><img src="img/logotipo.jpg" alt="Logotipo"></a>
				<a href="#" class="btn-menu" id="btn-menu"></a>
			</div>
			<div class="content-menu">
				<nav>
				  <ul class="navcontainer">
					<li><a href="<?= BASE_URL ?>"><i class="fa fa-home fa-lg" aria-hidden="true"></i> <label>Inicio</label></a></li>
					<li><a href="<?= BASE_URL ?>/shop"><i class="fa fa-cart-plus fa-lg" aria-hidden="true"></i> <label>Shop</label></a></li>
					<li><a href="<?= BASE_URL ?>/contactos"><i class="fa fa-users fa-lg" aria-hidden="true"></i> <label>Usuarios</label></a></li>
					<li><a href="<?= BASE_URL ?>/register"><i class="fa fa-users fa-lg" aria-hidden="true"></i> <label>Registro</label></a></li>
				    <li><a href="<?= BASE_URL ?>/"><i class="fa fa-id-card-o fa-lg" aria-hidden="true"></i> <label>About</label></a></li>
				  </ul>
				</nav>
			</div>
		</div>
	</header>


 	<div class="main">
 		
 <!-- 		<div class="mensaje">
			<h1><?= $titulo ?></h1>
		</div> -->

			<div class="flex-content-main">	

				<nav class="sidebar">
							
						<div class="profile-face">
								<span>D</span>									
						</div>

						<div class="profile-name">
							<span><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i></a> <?= $_SESSION["user_name"] ?></span>
						</div>

						<ul>
							<li><a href="#"><i class="fa fa-usd" aria-hidden="true"></i><label>Nómina</label></a></li>
							<li><a href="#"><i class="fa fa-handshake-o" aria-hidden="true"></i><label>Proveedores</label></a></li>
							<li><a href="#"><i class="fa fa-pie-chart" aria-hidden="true"></i><label>Estadísticas</label></a></li>
							<li><a href="#"><i class="fa fa-file-text" aria-hidden="true"></i><label>Reportes</label></a></li>
						</ul>
						
				</nav>
			
		 		<section class="content">
					<div class="container">
						<?= $tpl_content; ?>
					</div>
				</section>

			</div>
	</div>
 
	<footer>

		<section class="social-media">

			<ul>
				<li><a href="#" class=""><i class="fa fa-facebook fa-lg hi-icon" aria-hidden="true"></i></a></li>
				<li><a href="#" class=""><i class="fa fa-twitter fa-lg hi-icon" aria-hidden="true"></i></a></li>
				<li><a href="#" class=""><i class="fa fa-google-plus fa-lg hi-icon" aria-hidden="true"></i></a></li>
			</ul>
					
		</section>

		<section class="policy">
			 <ul>
				<li><a href="#">Política de Privacidad</a></li>
				<li><a href="#">Información Legal</a></li>
				<li><a href="#">Términos y Condiciones</a></li>
			 </ul>
		</section>

		<section class="Copyright">
			<p>© Copyright, Global</p>
		</section>

	</footer> 
 
</body>
</html>