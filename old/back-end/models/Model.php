<?php

include 'vendor/autoload.php';

class View{

    public static function load($file){

        include "views/{$file}.php";

    }

}

?>