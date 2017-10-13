<?php

require '../helpers/connection_helper.php';
require '../config/base_url_ws.php';
require '../interface/interface_controller.php';
require '../library/session_token.php';

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

	public function getUserName(){
		return $this->decodeResponse()->data[0];
	}

	public function starsSesion(){

		if($this->decodeResponse()->rc == 200){

			$session = new Session();

			foreach ($this->getUserName() as $key => $value) {
					$session->setSessionValue($key, $value);
			}
		}else{
			$_SESSION["user_name"] = '';
		}
	}

}

$login = new loginController();
$login->response();
$login->starsSesion();
