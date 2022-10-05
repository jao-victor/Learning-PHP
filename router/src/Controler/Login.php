<?php


namespace Source\Controler;


class Login{

  public function login($data){
    $url = URL;
    require __DIR__ . "/../../view/login.php";

    var_dump($data);

  }

}
