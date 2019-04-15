<?php

    include 'vendor/autoload.php';

    User::check('adminOnly');

    $user = $_POST['user'];

    User::delete($user);

    header('Location: usuarios');

?>