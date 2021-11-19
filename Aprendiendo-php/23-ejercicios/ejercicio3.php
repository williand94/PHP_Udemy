<?php

    /* 
        Ejercicio3. Hacer una interfaz de usuario(Formulario) con dos inputs y 4 botones
        uno para la suma,resta,multiplicación y divisiòn
    */
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $operador = $_GET;

    function operar($num1,$num2,$operador){

        foreach ($operador as $op) {
                $op;
                
            switch ($op) {
                case '+':
                    $op = $num1 + $num2;
                    return "<h1>Resultado de la suma es : ". $op ."</h1>" . header("Refresh: 2; URL=ejercicio3.alt.php");
                break;
                
                case '-':
                    $op = $num1 - $num2;
                    return "<h1>Resultado de la resta es : ". $op ."</h1>" . header("Refresh: 2; URL=ejercicio3.alt.php");
                break;
                
                case '*':
                    $op = $num1 * $num2;
                    return "<h1>Resultado de la multiplicaión es : ". $op ."</h1>". header("Refresh: 2; URL=ejercicio3.alt.php");
                break;
                
                case '/':
                    
                    if ($num2 == 0) {
                        return "<h1>No existe división por 0</h1>" . header("Refresh: 2; URL=ejercicio3.alt.php");
                    }else {
                        $op = $num1 / $num2;
                        return "<h1>Resultado de la División es : ". $op ."</h1>" . header("Refresh: 2; URL=ejercicio3.alt.php");
                    }
                break;
                    
                default:
                    
                    break;
                }
        }
    }
  
    //Validamos que los dos datos sean un entero
    if (isset($num1) && isset($num2)) {
            echo operar((int)$num1,(int)$num2,$operador);
    }
    //var_dump($operador);