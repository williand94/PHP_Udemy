<?php
    
    //Clases
    class Coche{

        //Atributos o Propiedades
        public $color     = "Negro Mate";
        public $marca     = "Renault";
        public $modelo    = "2019";
        public $velocidad = 60;
        public $caballaje = 5500;
        public $plazas    = 5;

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

    $coche = new Coche();
    $coche2 = new Coche();

    echo $coche->getColor()."<br>";

    echo $coche->setColor("Morado");

    var_dump($coche);
    var_dump($coche2);
