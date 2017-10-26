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

	public function getMenu(){
	   
	  $session_user = ["user_name" => $_SESSION['user_name'],"status" => $_SESSION['status']];
	  				 
	  $decode_data    = [ 'rc' => 'get_menu', 'data' => $session_user];
	
	  $responseJson   =  getWS(json_encode($decode_data), BASE_URL_WS);
	  $decodeJsonData = json_decode( $responseJson );			  

		 if ($decodeJsonData->rc == 200) {
		 	return $decodeJsonData->data;
		 }else {
		 	return false;
		 }	 

	}

	public function setMenu(){

		$_SESSION['opciones_menu']= $this->getMenu();
		
	}


}

$login = new loginController();
$login->getLogin();
$login->setSession();
$login->setMenu();


