<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        $dia = "Sábado";

        switch ($dia) {
            case 'Lunes':
                 echo "Hoy no es día de pago";
                break;
            case 'Martes':
                echo "Hoy no es día de pago";
                break;
            case 'Miércoles':
                echo "Hoy no es día de pago";
                break;
            case 'Jueves':
                echo "Falta un día para el pago";
                break;
            case 'Viernes':
                echo "Hoy bebemos!!!. Hoy nos pagan carajooooooo!!!! ";
                break;    
            
            default:
                echo "Me bebí la plata, sólo queda lo de la comida ";
                break;
        }
    ?>


</body>
</html>