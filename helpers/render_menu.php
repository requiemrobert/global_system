<?php 
session_start();

function render_menu(){

	extract($_SESSION['opciones_menu']);

	$render = '';	
	foreach ($_SESSION['opciones_menu'] as $key => $value) {
	
		//print_r($_SESSION['opciones_menu'][$key]);
			//echo array_keys($value)[0];


	$render .= "<li><a href='<?= BASE_URL ?>'><i class='fa ". menu_url(array_keys($value)[0]) ." fa-lg' aria-hidden='true'></i> <label>". array_keys($value)[0] ."</label></a></li>";
	
	}	

	echo $render;
/*	
	'
	<li><a href="<?= BASE_URL ?>"><i class="fa fa-home fa-lg" aria-hidden="true"></i> <label>Inicio</label></a></li>
	<li><a href="<?= BASE_URL ?>shop"><i class="fa fa-cart-plus fa-lg" aria-hidden="true"></i> <label>Operaciones</label></a></li>
	<li><a href="<?= BASE_URL ?>contactos"><i class="fa fa-users fa-lg" aria-hidden="true"></i> <label>Clientes</label></a></li>
	<li><a href="<?= BASE_URL ?>register"><i class="fa fa-users fa-lg" aria-hidden="true"></i> <label>Proveedores</label></a></li>
    <li><a href="<?= BASE_URL ?>"><i class="fa fa-id-card-o fa-lg" aria-hidden="true"></i> <label>Productos</label></a></li>
    <li><a href="<?= BASE_URL ?>"><i class="fa fa-id-card-o fa-lg" aria-hidden="true"></i> <label>Usuarios</label></a></li>
	'
*/

}

function menu_url($menu=''){

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



