<?php 

    $nombreArchivo = "archivo.txt";
    $contenido = "Hola, ete Sech";

    $archivoCrear = fopen($nombreArchivo, "w");

    fwrite($archivoCrear, $contenido);
    fclose($archivoCrear);
    

?>