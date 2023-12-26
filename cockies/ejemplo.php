<!--
<?php
/*
 //una cockie se crea atrave de la funcion setcookie()

// Nombre y valor de la cookie
$nombre = "usuario";
$valor = "Juan";

// Expiración: 1 hora desde el momento actual (timestamp actual + 3600 segundos)
$expiracion = time() + 3600;

// Ruta: disponible en todo el dominio ("/")
$ruta = "/";

// Dominio: cookie asociada al dominio actual (puede ser un dominio específico)
$dominio = ""; // Si está en blanco, será para el dominio actual

// Seguridad: solo se envía a través de conexiones HTTPS (true/false)
$seguridad = false;

// HTTPOnly: solo accesible a través de HTTP y no a través de JavaScript (true/false)
$httpOnly = true;

// Crear la cookie utilizando setcookie() con los parámetros especificados
setcookie($nombre, $valor, $expiracion, $ruta, $dominio, $seguridad, $httpOnly);

// Verificar si la cookie se estableció correctamente
if(isset($_COOKIE[$nombre])) {
    echo "Se creó la cookie '" . $nombre . "' con éxito.";
} else {
    echo "Hubo un problema al crear la cookie.";
}

*/
?>

-->

<?php
  //Caducara en 1 dia
 setcookie("idioma","esp",time()+60*60)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $valorCockieEsp = $_COOKIE["idioma"];
      echo "<br> <p>Imprimiendo el valor de la cokie: $valorCockieEsp </p>";
    ?>
</body>
</html>