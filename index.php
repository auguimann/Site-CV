<link rel="stylesheet" href="/View/include/styles/default.css">
<?php

    error_reporting(E_ALL ^ E_DEPRECATED);
    session_start();
    require("Autoloader.php");
    Autoloader::register();
    $router = new Router();
    $router->routerRequest();

?>
