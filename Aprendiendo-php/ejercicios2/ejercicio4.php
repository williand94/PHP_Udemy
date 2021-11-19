<?php

/* $game = array('accion' => array('j1' =>'GTA', 
                                 'j2' => 'COD',
                                 'j3' =>'PUGB'),

             'aventura' => array('j1' => 'ASSASINS',
                                 'j2' => 'CRASH',
                                 'j3' =>'PRINCE OF PERSIA'),

            'deportes' => array('j1' => 'FIFA19',
                                'j2' =>'PES19',
                                'j3' =>'MOTO GP 19'));
 */


$game = array('accion' => array('GTA','Call Of Duty','PUGB'),

             'aventura' => array( 'ASSASINS Creed','CRASH Bandicoot','PRINCE OF PERSIA'),

             'deportes'  => array( 'FIFA19','PES19','MOTO GP 19'));


echo "<table border>";
    echo "<tr>";
        include "./ejercicio4.1.php";
        include "./ejercicio4.1.2.php";
        include "./ejercicio4.1.3.php";
    echo "</tr>";
    
    
    echo "<tr>";
foreach ($game as $games) {
    
    foreach ($games as $allGames) {
        
        echo "<td>";
            echo $allGames;
    }
        echo "</td>";

    echo "</tr>";

}
echo "</table>";

