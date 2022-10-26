<?php 

    $server = "localhost"; //127.0.0.1 
    $usuario = "root";
    $password = "";

    try{
        $conexion = new PDO(
            "mysql:host=$server;
            dbname=album", 
            $usuario, 
            $password
        );

        $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        

        $sql = "INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Jugando con la play', 'ps.jpg');";
        
        $conexion -> exec($sql);
        echo "Conecxión establecida";

    } catch(PDOException $error) {

        echo "Conecxión erronea <br>".$error;

    }

?>