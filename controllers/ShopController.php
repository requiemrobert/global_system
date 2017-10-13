<?php 

class ShopController
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

		return $view = new View('shop', ['titulo' => 'Registro', 'data_head' => $data_head]);
	}
}