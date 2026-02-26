<?php

spl_autoload_register(function ($class) {

    $class = str_replace("App\\", "", $class);
    $class = str_replace("\\", "/", $class);

    require_once "app/" . $class . ".php";
});

use App\Core\Router;

$url = $_GET['url'] ?? '';

$router = new Router();
$router->run($url);