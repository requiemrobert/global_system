<?php

/**
*
*/
class Session
{

	function __construct()
	{
		session_start ();
	}

	public function set($user_name, $valor) {

		$_SESSION [$user_name] = $valor;

	}

	public function get($nombre) {

			if (isset ( $_SESSION [$nombre] )) {
				return $_SESSION [$nombre];
			} else {
				return false;
			}
	}

}
