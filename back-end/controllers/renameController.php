<?php

    include 'vendor/autoload.php';

    User::check('adminOnly');

    Item::rename();

?>