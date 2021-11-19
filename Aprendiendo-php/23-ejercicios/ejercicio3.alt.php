<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form action="ejercicio3.php" method="GET"> 
        <label for="num1">Número 1</label><br>
        <input type="double" name="num1"><br><br>
        <label for="num2">Número 2</label><br>
        <input type="double" name="num2"><br><br>

        <input type="submit" name="suma" value="+">
        <input type="submit" name="resta" value="-">
        <input type="submit" name="multiplicacion" value="*">
        <input type="submit" name="division" value="/">
    </form>
</body>
</html>