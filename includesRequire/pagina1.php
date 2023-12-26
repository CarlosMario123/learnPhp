<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //importamos nuestras libreria
    require("./views/contenido1.php");#para acceder archivos dentro de carpeta no olvidarse de estar en nuestro proyecto
    require("./views/contenido2.php");
$numero_aleatorio = rand(1, 2);//rad genera un numero aleatorio apartir de 2 parametro

   $mensaje = ($numero_aleatorio == 1) ? holaMundo() : helloWorld();
    echo $mensaje;

     ?>
</body>
</html>