<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Headers','Content-Type, x-xsrf-token');
header('Access-Control-Max-Age','172800');

define('DB_HOST', 'localhost');
define('DB_NAME', 'angular');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
try{
	$bdd = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASSWORD);


}catch(PDOException $e){
	die('Error: '.$e->getMessage());

}