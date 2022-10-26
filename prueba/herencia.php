<?php 

    class Persona {

        public $nombre; //Atributos
        private $edad;
        protected $altura;

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

    class Trabajador extends Persona{
        
        public $puesto;

        public function presentarseTrabajador() {
            echo "Hola soy ".$this -> nombre." y soy un ".$this -> puesto;
        }
    }

    $objTrabajador = new Trabajador(); //Instancia o creación de un objeto
    $objTrabajador -> asignarNombre("Franklox"); //LLamando al método
    $objTrabajador ->puesto = "Piloto";

    $objTrabajador -> presentarseTrabajador();
   
?>