<?php

require 'vendor/autoload.php';

User::check();

$usuario = User::senha();
//die(var_dump($usuario));

require_once 'views/minhaConta.php';

?>