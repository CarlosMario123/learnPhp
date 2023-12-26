<?php
 /*¿que es un hash y como funciona?
 
 una funcion criptografica hash usualmente conocida
 como hash es un algoritmo matematico que trasnforma cualquiere bloque 
 arbitrario de datos en una nueva serie de caracteres con una longitud fija
 
 independientemente de la longitud de los datos de entrada el valor hash de salida
 tendra siempre la misma longitud*/

 $clave = "holaMundo";

 //para usar hash primero ponemos el tipo de encriptacion a usar 
 //segundo parametro la clave a encriptar
 $claveEncript = hash("md5",$clave);

 echo "la clave encriptada es: $claveEncript\n<br/>";

 //salting y hasing seguro
 $password = "contraseña";
$salt = "salt_unico_para_cada_usuario";
$hash_password = hash("sha256", $password . $salt); // Salting para mejorar la seguridad

echo "hash y salting: $hash_password";


$password_ingresada = "contraseña_usuario";
$hash_guardada = hash("sha256",$password_ingresada); // Suponiendo que obtienes el hash almacenado en la base de datos

$hash_ingresada = hash("sha256", $password_ingresada); // Obtener hash de la contraseña ingresada
if ($hash_ingresada === $hash_guardada) {
    // Las contraseñas coinciden
    echo "Contraseña correcta";
} else {
    // Las contraseñas no coinciden
    echo "Contraseña incorrecta";
}


?>