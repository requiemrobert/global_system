<?php 


function resolve_sub_opcion($className, $opciones_menu) 
{
	
	$posicionController = strpos($className, "Controller");

	$opcionName = strtolower( substr($className, 0, $posicionController) ); 
	
	$sub_menu = [];	

	foreach ($opciones_menu as $key => $value) {
		
		if (array_keys($value)[0] == $opcionName) {
		
			$sub_menu = array_values($value)[0];
		}
	}

	return $sub_menu;
}