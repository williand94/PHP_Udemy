<?php

    require_once "./autoload/autoload.php";

    /* $user = new Users();
    echo $user->name."<br>";
    echo $user->email."<br><br>";

    $input = new Input();
    echo $input->title."<br>";
    echo $input->date."<br><br>";

    $categories = new Categories();
    echo $categories->name."<br>";
    echo $categories->description."<br><br>"; */

use MisClases\{Categories,Users,Input};
use PanelAdministrador\User;
/* use PanelAdministrador\User as Usuario; Esto encaso de tenero 2 namespace con el mismo nombre; */

/* use MisClases\Users;    
use MisClases\Input; */

    class Principal{
        public $users;
        public $categories;
        public $input;
        public $user;
        
        public function __construct()
        {
            $this->users = new Users();
            $this->categories = new Categories();
            $this->input = new Input();
            $this->user = new User();

            
        }
    }
   /*  $user = new User();
    var_dump($user->name); */
    $principal = new Principal();
    var_dump($principal->user);
  /*   var_dump($principal->users);
    echo "<br><br>";
    var_dump($principal->categories);
    echo "<br><br>";
    var_dump($principal->input);
    echo "<br><br>";
    echo $principal->users->getSayHello();
    echo "<br><br>"; */

