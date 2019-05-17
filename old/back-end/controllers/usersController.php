<?php

    include 'vendor/autoload.php';

    User::check('adminOnly');

    $usuarios = User::buscar();
    
    require 'views/usuarios.php';

?>