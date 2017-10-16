<?php


class logoutController
{
	public function indexAction()
	{	
		
		try {

			session_unset();
			session_destroy();
			header("Location: " . "http://localhost:8888/global_system/login/");

		} catch (Exception $e) {
			echo 'Excepción capturada: ',  $e->getMessage(), "\n";
		}

		return "TRUE";
		
	}
}


?>