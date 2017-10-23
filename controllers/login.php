<?php

require '../helpers/connection_helper.php';
require '../config/base_url_ws.php';
require '../interface/interface_controller.php';

class loginController 
{

	private $get_request;

	public static $responseJson;

	public function __construct(){

		$strJson = $this->decodeRequest(file_get_contents("php://input"));
		$this->sendRequest($strJson);
	
	}

	public function decodeRequest($file = ''){

		$decode_data = [ 'rc' => 'get_login', 'data' => json_decode($file) ];

		return json_encode($decode_data);

	}

	public function sendRequest($strJson = ''){

		self::$responseJson = getWS( $strJson , BASE_URL_WS );//Call WS return JSON
	}

	/*
		print JSON WS
	*/

	public function getLogin(){

		echo self::$responseJson;
	}

	/*
		return Array[]
	*/
	public function decodeResponse(){

		return json_decode(self::$responseJson);
	}

	public function setSession(){
		
		session_start();

		if ($this->decodeResponse()->rc == 200) {
			
			foreach ($this->decodeResponse()->data[0] as $key => $value) {
			
				$_SESSION[$key] = $value;
				
			}
		}

	}

	public function getResponseMenu(){
	   
	  $session_user = ["user_name" => $_SESSION['user_name'],"status" => $_SESSION['status']];
	  				 
	  $decode_data = [ 'rc' => 'get_menu', 'data' => $session_user];
	  $responseJson = json_decode( getWS( json_encode($decode_data) , BASE_URL_WS ) );			  
	 	
		 if ($responseJson->rc == 200) {
		 	return $responseJson->data;
		 }else {
		 	return false;
		 }	 

	}

	public function getMenu(){
		
		$dataOpciones = [];

		foreach ($this->getResponseMenu() as $key => $value) {
				
		 array_push($dataOpciones, [$key => $value]);
		
		}

		$_SESSION['opciones_menu'] = $dataOpciones;
	
	}


}

$login = new loginController();
$login->getLogin();
$login->setSession();
$login->getMenu();

/*session_unset();
session_destroy();*/

