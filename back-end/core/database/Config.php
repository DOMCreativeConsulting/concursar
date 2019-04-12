<?php

$noar = false;

    if($noar == true){
        return[
            'database' => [
                'name' => 'concursa_site',
                'username' => 'concursar',
                'password' => 'QERYuF9JjON8',
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