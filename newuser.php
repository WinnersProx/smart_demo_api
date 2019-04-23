<?php
require('configs/database.php');
// var_dump($_POST);

$data = json_decode(file_get_contents("php://input"));
var_dump($data);
die();


$newUser = $bdd->prepare("INSERT INTO people(username, age, sex) VALUES(:username, :age, :sex)");
$newUser = $newUser->execute([
	'username' => $data->username,
	'age' => $data->age,
	'sex' => $data->sex
]);
if($newUser){
	echo "User added succsessfully!";
}

