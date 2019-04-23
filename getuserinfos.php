<?php
//header("Acess-Control-Allow-Origin : *");
/*header("Acess-Control-Allow-Headers:Origin,X-Requested-With, Content-Type:JSON");*/

define('DB_HOST', 'localhost');
define('DB_NAME', 'angular');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
try{
	$getId = intval($_GET['id']);
	$bdd = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASSWORD);
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$people = $bdd->prepare("SELECT * FROM people WHERE id =:userid");

	$people->execute([
		'userid' => $getId
	]);
	
	$found = $people->fetch(PDO::FETCH_OBJ);

	echo json_encode($found);


}catch(PDOException $e){
	die('Erreur: '.$e->getMessage());

}
