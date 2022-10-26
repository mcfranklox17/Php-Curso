<?php 

    $frutas = array(
        "f"=>"Fresa",
        "n"=>"Naranja",
        "m"=>"Mango",
        "nu"=>"Nuez"
    );
    print_r($frutas);
    echo $frutas["n"];

    echo "<br>";
    foreach($frutas as $i =>&$valor){
        //echo $i." - ".$valor."<br>";

        echo $frutas[$i]."<br>";
    }
?>