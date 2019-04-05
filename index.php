<?php

    require 'vendor/autoload.php';

    $router = new Router();

    require 'back-end/routes.php';

    $uri = trim($_SERVER['REQUEST_URI'] , '/');

    require $router->direct($uri);

?>