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

    $objAlumno = new Persona(); //Instancia o creación de un objeto
    $objAlumno -> asignarNombre("Sherk"); //LLamando al método

    $objAlumno2 = new Persona(); //Instancia o creación de un objeto
    $objAlumno2 -> asignarNombre("Franklo"); //LLamando al método
    //$objAlumno2 -> mostrarEdad(22);
    //echo $objAlumno->nombre; //Imprimir valor
    
    $objAlumno -> imprimirNombre();
    echo "<br>";
    echo $objAlumno2->nombre." ";
    echo $objAlumno2->mostrarEdad(22)." ";
    
    //echo $objAlumno2->altura;
?>