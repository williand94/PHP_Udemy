<?php

    class User{
        public $name;

        public function __construct()
        {
            echo "Makin the contruct method <br>";
        }


        public function __destruct()
        {
            echo "Destruyendo instancia de objetos";
        }
    }
    $user = new User();

    for ($i=0; $i < 10 ; $i++) { 
            echo $i."<br>";
    }

    echo "I Wanna to learn to code<br>";