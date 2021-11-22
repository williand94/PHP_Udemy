<?php

use Persona as GlobalPersona;

class Persona{
        private $nombre;
        private $edad;
        private $ciudad;

        public function __construct($nombre,$edad,$ciudad)
        {
            $this->nombre = $nombre;
            $this->edad   = $edad;
            $this->ciudad = $ciudad;
        }

        public function __call($name, $arguments)
        {
            $prefix_metodo = substr($name, 0, 3);

            if ($prefix_metodo == 'get') {
                $nombre_metodo = substr(strtolower($name),3);
            
                return $this->$nombre_metodo;
            }
            return $nombre_metodo;
        }
    }

    $persona = new Persona("Willian", 27 , "Tura");
    echo $persona->getEdad();