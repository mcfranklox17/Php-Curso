<?php 

    class Conexion {
        private $servidor = "localhost";
        private $usuario = "root";
        private $password = "";
        private $conexion;

        public function __construct() {
            try {

                $this->conexion = 
                    new PDO(
                        "mysql:host=$this->servidor;
                        dbname=album", 
                        $this->usuario,
                        $this->password
                    );

                $this->conexion->setAttribute(
                    PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION
                );

            } catch (PDOException $e) {
                return "La conexión falló".$e;
            }
        }

        public function Ejecutar($sql) {
            
            $this->conexion->exec($sql);
            return $this->conexion->lastInsertId();

        }

        public function Consultar($sql) {
                $sentencia = $this->conexion->prepare($sql);
                $sentencia->execute();
                return $sentencia->fetchAll();
        } 
    }

?>