<?php 

    class UnaClase {

        public static function unMetodo() {
            echo "Kiubole q, método estático <br>";
        }
    }

    $obj = new UnaClase();
    $obj -> unMetodo();

    UnaClase::unMetodo();
?>