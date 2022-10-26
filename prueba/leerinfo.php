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
        
        $sql = "SELECT * FROM `fotos`";

        $query = $conexion->prepare($sql);
        $query->execute();

        $result = $query -> fetchAll();

        //print_r($result);
      
        foreach($result as $foto) {
            print_r($foto['nombre']);
            //print_r($foto); echo $foto."<br>>;
        }

        echo "Conecxión establecida";

    } catch(PDOException $error) {

        echo "Conecxión erronea <br>".$error;

    }

?>