<?php

class Connection 
{
	private $get_request;

	public static $responseJson;

	private $decodeResponse;

	public $ping;
	
	
	public static function getWs(){

		return self::$responseJson = file_get_contents("php://input");

	}


/*		
	public function __construct(){

		$strJson = $this->decodeRequest(file_get_contents("php://input"));
		
	
	}

	public function decodeRequest($file = ''){

		$decode_data = [ 'rc' => 'get_login', 'data' => json_decode($file) ];

		return json_encode($decode_data);

	}*/




}