<?php

require __DIR__	.  "/../vendor/autoload.php";
use Source\Model\Usuario;

$user = (new Usuario())->findById(36);

if($user){
	$user->destroy();
}else{
	var_dump($user);
}

?>
