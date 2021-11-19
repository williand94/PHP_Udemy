<?php
    /* 
        1.Una función.
        2.La función de validar un email con filter_var
        3.Recoger una variable con get y validarla
        4.mostrar el resultado
    */

    
    function email_validate($email){
        $status = "No validado";    
        $retVal = (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) 
                                        ?$status = "Validado" : "" ;
       /*  if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
             $status = "Validado";
        } */
        return $status;  
    }
    echo $retVal = (isset($_GET['email'])) ? email_validate($_GET['email']): "ingrese email";
    /* f (isset($_GET['email'])) {
        echo email_validate($_GET['email']);        
   
    }else {
        echo "ingrese email";
    } */