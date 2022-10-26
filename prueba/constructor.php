<?php 

    class Persona {

        public $nombre; //Atributos
        private $edad;
        protected $altura;

        function __construct($newNombre)
        {
            $this -> nombre = $newNombre;
        }

        //Métodos
        public function asignarNombre($newName) {
            $this -> nombre = $newName;
        }

        public function imprimirNombre() {
            echo "Hola soy ".$this -> nombre;
        }

        public function mostrarEdad($newEdad) {
            $this->edad = $newEdad;
            return $this->edad;
        }
    }

    $objAlumno = new Persona("Franklox"); //Instancia o creación de un objeto
    //$objAlumno -> asignarNombre("Franklox"); //LLamando al método
    $objAlumno -> imprimirNombre();
    
?>