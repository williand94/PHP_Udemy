<?php

namespace PanelAdministrador;

use MisClases\Users;

class User extends Users{
        /* public $name;
        public $email; */

        public function __construct()
        {
            $this->name  = "Andres Felipe";
            $this->email = "Adfe@gmail.com";
        }

        public function getSayHello()
        {
            return "Hello".$this->name;
        }
    }