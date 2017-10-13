<?php 	
	/*
	 * El frontend controller se encarga de configurar nuestra aplicacion
	 * Se puede agregar archivos con require y con include, la diferencia es que include los incluye, 
	 * pero sin ser obligatorio que exista el archivo, con require si debe existir el archivo.
	 */
	
	require "config/config.php";
	require "config/base_url.php";
	
	require 'helpers/load_css_script.php';
	
	//Library
	require 'library/Request.php';
	require 'library/Inflector.php';
    require 'library/Response.php';
	require 'library/View.php';
	

	if(empty($_GET['url']))
	{
		$url = "";	
	}
	else
	{
		$url = $_GET['url'];
	}

	$request = new Request($url); 
	$request->executeRequest();	


