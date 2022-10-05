<?php
require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(URL);


$router->namespace("Source\Controler"); // seta o namespace da camada do controlador



//HOME
$router->group("login");
$router->get("/", "Login:login");
$router->post("/", "Login:login");
//$router->get("/{filter}", "Web:home");
//$router->get("/contato", "Web:contato");

//BLOG
$router->group("blog");
$router->get("/", "Web:blog");
$router->get("/{article}", "Web:post");
$router->get("/{article}/{category}", "Web:category");

//Admin
$router->group("admin");
$router->get("/", "Admin:home");
$router->get("/{teste}", "Admin:teste");

//ERROR
$router->group("ooops");
$router->get("/{errcode}", "Web:error");

$router->dispatch();

if ($router->error()){
  $router->redirect("/ooops/{$router->error()}");
}

?>
