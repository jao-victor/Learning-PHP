<?php

require __DIR__ . "/../vendor/autoload.php";

use Source\Model\Usuario;

$user = new Usuario();
$list = $user->find()->fetch(true);

//var_dump($list);

foreach($list as $useritem){
	var_dump($useritem->data());
}



?>
