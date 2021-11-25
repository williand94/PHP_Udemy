<?php
    
namespace MisClases;
    
    class Users{
            public $name;
            public $email;

            public function __construct()
            {
                $this->name  = "Willian David";
                $this->email = "widavalle@gmail.com";
            }

            public function getSayHello()
            {
                return "Hello".$this->name;
            }
        }