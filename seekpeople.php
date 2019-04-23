<?php

require("configs/database.php");

//codes here
$name = $_GET['name'];

$seekUser = $bdd->prepare("SELECT *FROM people WHERE username =?");
$seekUser->execute([$name]);
$result = $seekUser->fetch(PDO::FETCH_ASSOC);
if($seekUser->rowCount() > 0){
	$result = $result;
	echo json_encode($result);
	//var_dump($result->name);
}
else{
	$result = "no one  found";
}




