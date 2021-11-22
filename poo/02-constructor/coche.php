<?php
    
    //Clases
    class Coche{

        //Atributos o Propiedades
        public $color;
        public $velocidad;
        public $caballaje;
        public $plazas;

        protected $marca;
        
        private $modelo;


        //Constructor 

        public function __construct($color, $marca, $modelo, $velocidad, $caballaje, $plazas)
        {
            $this->color     = $color;
            $this->marca     = $marca;
            $this->modelo    = $modelo;
            $this->velocidad = $velocidad;
            $this->caballaje = $caballaje;
            $this->plazas    = $plazas;   
        }



        //Métodos : Acciones de los objetos
        public function getColor()
        {
           return $this->color;
        }

        public function setMarca($marca)
        {
            return $this->color = $marca;
        }

        public function acelerar()
        {
            return $this->velocidad += 50;
        }

        public function frenar()
        {
            return $this->velocidad -= 30;
        }

        public function getVelocidad()
        {
            return $this->velocidad;
        }

        public function mostrarInformacion(Coche $miObjeto)
        {
            if (is_object($miObjeto)) {
                $informacion  = "<h1>Información del Coche</h1>";
                $informacion .= "Color: ". $miObjeto->color;  
                $informacion .= "<br>Modelo: ". $miObjeto->modelo;  
                $informacion .= "<br>Velocidad: ". $miObjeto->velocidad;
            
            }else {
                $informacion = "Tu dato es $miObjeto";
            }

            return $informacion;
        }
    }
