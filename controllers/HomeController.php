<?php 

class HomeController
{
	public function indexAction()
	{	

		if(isset($data_style))
		{
	       unset($data_style);
	       $data_style = '';
	    } 

		$data_style = ['normalize','main_style', 'font-awesome'];

		$data_javascript = ['header','jquery-3.2.0'];

		$data_head = array(
				'data_style' => $data_style,
				'data_javascript' => $data_javascript
		);

		return $view = new View('home', ['titulo' => 'Clase 2', 'data_head' => $data_head]);
	}
}