<?php

$noar = false;

    if($noar == true){
        return[
            'database' => [
                'name' => 'concursarcoach_site',
                'username' => 'concursarcoach_site',
                'password' => 'Tt-QFpx,!4&,',
                'connection' => 'mysql:host=localhost',
                'options' => []
            ]
        ];    
    }else{
        return[
            'database' => [
                'name' => 'concursar',
                'username' => 'root',
                'password' => '',
                'connection' => 'mysql:host=localhost',
                'options' => []
            ]
        ];   
    }

?>