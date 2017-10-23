<?php
	
class OperacionesController
{
	public function indexAction()
	{	

		if(isset($data_style))
		{
	       unset($data_style);
	       $data_style = '';
	    } 

		$data_style = ['normalize','main_style','font-awesome'];

		$data_javascript = ['header'];

		$data_head = array(

				'data_style' => $data_style,
				'data_javascript' => $data_javascript
		);

		return new View('operaciones',['titulo' => 'Contactos', 'data_head' => $data_head]);
	}
	
	public function ciudadAction($ciudad)
	{
		exit('contactos ' . $ciudad);
	}
}