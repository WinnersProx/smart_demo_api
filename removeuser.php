<?php

require("configs/database.php");
$userId = intval($_GET['id']);
if(isset($userId) && $userId != 0){
	$removeUserById = $bdd->prepare("DELETE FROM people WHERE id = ?");
	$removeUserById->execute([
		$_GET['id']
	]);
	if($removeUserById){
		echo "user removed successfully";
	}
	else{
		echo "user not found";
	}
}
else{
	echo "please provide a user !!";
}


