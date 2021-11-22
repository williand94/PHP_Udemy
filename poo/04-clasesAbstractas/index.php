<?php

    abstract class Ordenador{

        public $encendido;

        abstract public function encender();
  
        public function apagar()
        {
            $this->encendido = false;
        }


    }


    class PcAsus extends Ordenador{
        public $software;

        public function ArrancarSoftware()
        {
            $this->software = true;
        } 

        public function encender()
        {
            $this->encendido = true;
        }
    }

    $ordenador = new Pcasus();

    $ordenador->ArrancarSoftware();

    $ordenador->encender();

    $ordenador->apagar();
    
    var_dump($ordenador);




