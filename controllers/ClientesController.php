<?php 

class ClientesController
{
	public function indexAction()
	{	

		if(isset($data_style))
		{
	       unset($data_style);
	       $data_style = '';
	    } 

		$data_style = ['normalize','main_style', 'font-awesome'];

		$data_javascript = ['jquery-3.2.0','shop'];

		$data_head = array(
				'data_style' => $data_style,
				'data_javascript' => $data_javascript
		);
	
		$posicionController = strpos(get_class($this), "Controller");

		$className = substr(get_class($this), 0, $posicionController); 

		return new View('clientes', [
									  'titulo' => 'Registro', 
									  'data_head' => $data_head, 
									  'sub_menu' => array_values($_SESSION['opciones_menu'])[0]
									]);
	}
}