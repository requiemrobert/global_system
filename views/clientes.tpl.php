
<section class="main">
		
<?php	

		foreach ($_SESSION['opciones_menu'] as $key => $value) {
			
			print_r($key);
			echo "<br>";
			print_r($value);
			echo "<br>";
		}

?>

			<!-- 	<form>
					<fieldset>
					<legend><?= print_r($sub_menu) ?></legend>
						<label for="f_name">Nombre</label>
						<input type="text" name="f_name" id="f_name">
						
						<label for="l_name">Apellido</label>
						<input type="text" name="l_name" id="l_name">
						
						<label for="ci">Cedula</label>
						<input type="text" name="ci" id="ci">
					</fieldset>
					<input type="button" id="enviar" value="Registrar">
				</form> -->

	
</section>