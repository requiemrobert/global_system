<?php 

session_start();

function render_profile(){
	
	return ucfirst (substr($_SESSION['user_name'], 0 , 1));

}

function render_menu(){

	$render =  '<ul class="navcontainer">';	
	$render .= '<li><a href='.BASE_URL.'><i class="fa fa-home fa-lg" aria-hidden="true"></i>';
	$render .= '<label>Inicio</label></a></li>';

	foreach ($_SESSION['opciones_menu'] as $key => $value) {

		$render .= "<li><a href='". array_keys($value)[0] ."'>";
		$render .= "<i class='fa ". menu_ico(array_keys($value)[0]) ." fa-lg' aria-hidden='true'></i>";
		$render .= "<label>". array_keys($value)[0] ."</label></a></li>";

	}

	$render .= '</ul>';

	return $render;

}

function render_sub_menu($data_opciones = []){
	
	$render =   '<ul class="sidebar-menu">';	
	
	foreach ($data_opciones as $key => $sub_menu) {
		
		$render .=	"<li> <a href='#'>";
		$render .=  "<i class='fa ". menu_ico($sub_menu)." fa-me' aria-hidden='true'></i>";
		$render .=  "<label> ". $sub_menu ."</label>";
		$render .=	"</a></li>";

	}

	$render .=  '</ul>';

	return $render; 	
}


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

		case 'registro':
			 return 'fa-address-book-o';
			break;

		case 'reportes':
			 return 'fa-bar-chart';
			break;	

		default:
			return 'fa-window-maximize';
			break;
	}

}



