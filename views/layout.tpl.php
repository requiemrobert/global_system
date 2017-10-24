<?php 	  
	
	if (!isset($_SESSION))
	{ 
		session_start();
	}

	//print_r( $_SESSION['opciones_menu'][0]['operaciones'] );

?>

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

			  		<?php render_menu(); ?>

				  </ul>
				</nav> 
			</div>
		</div>
	</header>


<div class="main">

<div class="flex-content-main">

	<nav class="sidebar">

		<div class="profile-face">
				<span><?= ucfirst (substr($_SESSION['user_name'], 0 , 1))?></span>
		</div>

		<div class="profile-name">
			<span><a href="<?= BASE_URL ?>logout"><i class="fa fa-sign-out" aria-hidden="true"></i></a> <?= $_SESSION['user_name'] ?></span>
		</div>

		

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
