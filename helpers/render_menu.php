<?php 

session_start();

function render_menu(){

	$render =  '<li><a href="<?= BASE_URL ?>">';	
	$render .= '<i class="fa fa-home fa-lg" aria-hidden="true"></i>';
	$render .= '<label>Inicio</label></a></li>';

	foreach ($_SESSION['opciones_menu'] as $key => $value) {

		$render .= "<li><a href='". array_keys($value)[0] ."'>";
		$render .= "<i class='fa ". menu_ico(array_keys($value)[0]) ." fa-lg' aria-hidden='true'></i>";
		$render .=	"<label>". array_keys($value)[0] ."</label></a></li>";

	}	

	echo $render;

}

/*function render_sub_menu(){
	
}*/


function menu_ico($menu=''){

	switch ($menu) {
		case 'operaciones':
			 return 'fa-wrench';
			break;
		case 'productos':
			 return 'fa-cart-plus';
			break;	
		
		case 'clientes':
			 return 'fa-users';
			break;	
		case 'proveedores':
			 return 'fa-truck';
			break;
		case 'usuarios':
			 return 'fa-user-circle-o';
			break;			
		default:
			# code...
			break;
	}

}



