<?php 

    $frutas = array("Fresa","Naranja","Mango","Nuez");

    print_r($frutas);
    echo "<br>";
    for( $i = 0; $i < count($frutas); $i++ ) {
        echo $frutas[$i]."<br>";
    }

?>