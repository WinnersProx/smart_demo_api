<?php
//header("Acess-Control-Allow-Origin : *");
//header("Acess-Control-Allow-Headers:Origin,X-Requested-With, Content-Type:JSON");
require('configs/database.php');
// var_dump(json_decode(file_get_contents("php://input")));
// var_dump($_POST);
// die();
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$people = $bdd->query("SELECT * FROM people ORDER BY id DESC");
$found = $people->fetchAll(PDO::FETCH_OBJ);
$found = json_encode($found);
echo $found;


