<?php

//Destruir una cookie


if ($_COOKIE['micookie']) {
        
    unset($_COOKIE['micookie']);
    setcookie("micookie",'',time()-1);
    echo "cookie destruida";
}else {
    echo "Error al tratar de eliminar la cookie";
}

