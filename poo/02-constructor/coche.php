<?php
    
    //Clases
    class Coche{

        //Atributos o Propiedades
        public $color;
        public $marca;
        public $modelo;
        public $velocidad;
        public $caballaje;
        public $plazas;


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

        public function setColor($color)
        {
            return $this->color = $color;
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
    }
