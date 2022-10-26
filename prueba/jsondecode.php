<?php 

    $jsonContenido = ' [ 
        {"nombre":"Franklox", "apellido":"Lizarraga"},
        {"nombre":"Jimmy", "apellido":"Hendrix"}
    ] ';

    $result = json_decode($jsonContenido);
    //print_r($result);

    foreach ($result as $person) {
        echo ($person -> nombre)." ".($person -> apellido)."<br>";
    }
?>