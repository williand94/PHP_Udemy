<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subida de images al servidor</title>
</head>
<body>
    <h1>Subir archivos con php</h1>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="archivo" >
        <input type="submit" value="Enviar"> 
    </form>
    
    <h1>Listado d imágenes</h1>
    <?php
        $gestor = opendir('./images');
        if ($gestor) :
            while ($image = readdir($gestor)):
              if ($image != '.' && $image != '..' ) :
                 echo"<img src='images/$image' width='200px'/><br>";
              endif;
            endwhile;
        endif;
    ?>
</body>
</html>