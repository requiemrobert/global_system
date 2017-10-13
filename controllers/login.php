<?php

require '../helpers/connection_helper.php';
require '../config/base_url_ws.php';
require '../interface/interface_controller.php';

class loginController implements iCallWs
{

	private $get_request;

	public static $responseJson;
	
	public function __construct(){

		$strJson = $this->decodeRequest(file_get_contents("php://input"));
		$this->sendRequest($strJson);
	}

	public function decodeRequest($file = ''){		

		$decode_data = ['rc'=>'get_login', 'data' =>json_decode($file)];

		return json_encode($decode_data);

	}

	public function sendRequest($strJson = ''){

		self::$responseJson = getWS( $strJson , BASE_URL_WS );//Call WS return JSON
	}

	/*
		print JSON WS
	*/

	public function response(){	

		echo self::$responseJson;
	}

	/*
		return Array[]
	*/
	public function decodeResponse(){

		return json_decode(self::$responseJson);
	}

	public function starsSesion(){

		if($this->decodeResponse()->rc == 200){
			session_start();
			$_SESSION["user_name"] = "variable de session " . $this->decodeResponse()->data[0]->user_name;;
			//echo $_SESSION["user_name"];
		}
	 
	}

	public function redirect($uri = '', $method = 'location', $http_response_code = 302)
	{

		switch($method)
		{
			case 'refresh'	: header("Refresh:0;url=".$uri);
				break;
			default			: header("Location: ".$uri);
				break;
		}
		exit;
	}
	
}

$login = new loginController();
$login->response();
$login->starsSesion();

echo hash("sha256", 123);







