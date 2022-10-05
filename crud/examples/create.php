<?php

require __DIR__ . "/../vendor/autoload.php";

use Source\Model\Usuario;

$user = new Usuario();

$user->nome = "delinhas";
$user->senha = "otaldelas";
$user->save();


?>
