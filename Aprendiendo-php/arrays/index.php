<?php

$movies =  array('Batman','Liga de la Justicia ZN','The Acuaman','Los 7 Magníficos');
$team =  array('KD','James Harden','Blake Griffin','Kyrie Irving');


echo "<h1>"."Recorrer el array Movies con for"."</h1>";

echo "<ul>";

 
     for($i=0; $i < count($movies); $i++){
         echo "<li>". $movies[$i] ."</li>";
    }
    

echo "</ul>";

echo"<hr>";

echo "<h1>"."Recorrer el array Team con foreach"."</h1>";

echo "<ul>";

 
     foreach ($team as $player) {

        echo "<li>". $player ."</li>";
     } 

echo "</ul>";
echo"<hr>";

echo "<h1>"."Recorrer el array Personas con foreach"."</h1>";

$personas  = 
             array('nombre' => 'Willian',
                   'apellido'=>'Vallecilla',
                   'profesion'=>'Ingeniero en sistema');
               

echo "<ul>";

     foreach ($personas as $key => $dato) {
        
        echo "<li>". $dato ."</li>";
       
     } 

echo "</ul>";

echo"<hr>";

echo "<h1>"."Arrays multidimensionales"."</h1>";

$personal  = array( 'datos'  => array('nombre' => 'Willian',
                                     'apellido'=>'Vallecilla',
                                     'profesion'=>'Ingeniero en sistema'),
             
                    'datos1' => array('nombre' => 'Karen',
                                      'apellido'=>'Vallecilla',
                                      'profesion'=>'Socióloga'),      
                   
                    'datos2'  => array('nombre' => 'Angie',
                                      'apellido'=>'Vallecilla',
                                      'profesion'=>'Abogada')  
               
               );

echo "<table border style='border: 1px  red'>";

     echo"<tr>";
          echo"<th>";
                    echo"Nombre";
          echo"</th>";
          echo"<th>";
               echo"Apellido";
          echo"</th>";
          echo"<th>";
               echo"Profesión";
          echo"</th>";
     echo"</tr>";

     echo "<tr>";
          foreach ($personal as $persona) {
               // var_dump($persona);
          
               foreach ($persona as $datos) {
                    echo "<td>";
                         echo $datos;               
                    echo "</td>";     
               }
     echo "</tr>";
          }       
     
echo  "</table>";               
               
