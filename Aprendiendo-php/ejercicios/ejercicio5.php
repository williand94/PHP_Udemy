<?php

    echo "<table border='1'><tr>";//Inicio de la tabla
    
    echo "<tr>";//Inicio fila 1 de celdas
        for($cabecera = 1; $cabecera <= 10; $cabecera++)
        {
            echo "<td> Tabla del $cabecera</td>";
        }    
    
    echo"</tr>";//Cierre fila 1  de celdas

    echo"<tr>";//Inicio fila 2 de celdas
        for ($i=1; $i <=10 ; $i++) { 
             echo"<td>";
             
                for ($j=1; $j <=10 ; $j++) { 

                    echo "$i x $j = ".($i * $j)."<br>" ;
                }

             echo"</td>";         
             
        }
    echo"</tr>";//Cierre fila 2 de celdas

    echo"</tr></table>";//Cierre de la tabla
