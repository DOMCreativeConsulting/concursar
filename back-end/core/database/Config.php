<?php

$noar = false;

if($noar == true){
    return[
        'database' => [
            'name' => 'domcom_concursar',
            'username' => 'domcom_concursar',
            'password' => 'SENHA',
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