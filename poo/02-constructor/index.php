<?php
    require_once "coche.php";

    $coche = new Coche("Negro Mate" ,"Chevrolete",2020,300,5500,10);
    $coche1 = new Coche("Rojo" ,"Ferraru",2022,350,300,30);

    $a= 23;
    echo $coche->mostrarInformacion($coche1);

    //var_dump($coche);