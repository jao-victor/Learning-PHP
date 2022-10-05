<?php

require __DIR__ . "/../vendor/autoload.php";
use Source\Model\Usuario;

$user = (new Usuario())->findById(34);
$user->nome = "xxt";
$user->save();







?>
