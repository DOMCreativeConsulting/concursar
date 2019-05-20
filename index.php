<?php

    require 'vendor/autoload.php';

    $router = new Router();

    require 'back-end/routes.php';

    if(!isset($_SESSION['user'])){
        session_start();
    }

    $uri = trim($_SERVER['REQUEST_URI'] , '/');

    require $router->direct($uri);

?>