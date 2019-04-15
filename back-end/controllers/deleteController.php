<?php

    include 'vendor/autoload.php';

    User::check('adminOnly');

    $item = $_POST['item'];
    $page = $_POST['page'];

    User::delete($item);

    header("Location: $page");

?>