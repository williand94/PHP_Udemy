<?php

    trait Utilidades{

        public $dad;

        public function mostrarNombre()
        {
            echo "<h1> El nombre es ".$this->nombre."</h1>";
        }

        public function calcularMayoriaEdad()
        {
            if($this->edad < 18)
            {
                echo "<p> $this->nombre es menor de edad<p>";
            }else {
                echo "<p> $this->nombre es mayor de edad<p>";

            }
        }
    }

    class Coches{
        public $nombre;
        public $marca;

        use Utilidades; 
    }

    class Persona{
        public $nombre;
        public $apellido;
        public $edad;

        use Utilidades;
    }
    
    class VideoJuego{
        public $nombre;
        public $anio;

        use Utilidades;
    }
    
    $persona = new Persona();

    $persona->nombre = "Willian Vallecilla";
    $persona->mostrarNombre();
    $persona->edad = 12;
    $persona->calcularMayoriaEdad();

    $persona2 = new Persona();

    $persona2->nombre = "Joaquín Antonio Vallecilla";
    $persona2->mostrarNombre();
    $persona2->edad = 18;
    $persona2->calcularMayoriaEdad();


    /* $coche = new Coches();

    $coche->nombre = "Mazda";
    $coche->mostrarNombre();


    
    $video_  = new VideoJuego();
    $video_->nombre = "God of War";
    $video_->mostrarNombre(); */
    