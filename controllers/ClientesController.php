<?php 
require 'helpers/resolve_opcion.php';

class ClientesController 
{
	public function indexAction()
	{	

		if(isset($data_style))
		{
	       unset($data_style);
	       $data_style = [];
	       $data_javascript = [];
	    } 

		$data_style = ['normalize','main_style', 'font-awesome', 'gridly.min','clientes'];

		$data_javascript = ['jquery-3.2.1.min','clientes'];

		$data_head = array(
				'data_style' => $data_style,
				'data_javascript' => $data_javascript
		);

		$sub_menu = resolve_sub_opcion(get_class($this),$_SESSION['opciones_menu']);

		return new View('clientes', [
									  'titulo' => 'Clientes', 
									  'data_head' => $data_head, 
									  'opciones_sub_menu' => $sub_menu
									]);
	}

}