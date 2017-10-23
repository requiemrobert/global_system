<?php 

class ProductosController
{
	public function indexAction()
	{	

		if(isset($data_style))
		{
	       unset($data_style);
	       $data_style = '';
	    } 

		$data_style = ['normalize', 'main_style', 'font-awesome'];

		$data_javascript = ['jquery-3.2.0','register'];

		$data_head = array(
				'data_style' => $data_style,
				'data_javascript' => $data_javascript
		);

		return $view = new View('productos', ['titulo' => 'Registro', 'data_head' => $data_head]);
	}
}