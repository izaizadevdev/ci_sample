<?php
 	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	
	//DB configuration Constants
	define('_HOST_NAME_', 'localhost');
	define('_USER_NAME_', 'monoqlo_dbhost');
	define('_DB_PASSWORD', 'F,Fo8b;F]t');
	define('_DATABASE_NAME_', 'monoqlo_dbhost');

	//PDO Database Connection
	try {
		$databaseConnection = new PDO('mysql:host='._HOST_NAME_.';dbname='._DATABASE_NAME_, _USER_NAME_, _DB_PASSWORD);
		$databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
	}
	
	//Time Zone
	date_default_timezone_set('Asia/Bangkok');
?>