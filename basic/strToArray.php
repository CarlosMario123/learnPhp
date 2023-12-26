<?php
$string = "manzana,naranja,uva";
$array = explode(",", $string);//explode convierte a array
print_r($array); // Esta función muestra el contenido del array

//Tambien podemos usarlos con fechas
$fecha = "24/12/2023";
$array = explode("/",$fecha);
print_r($array);


//array de chars
$string = "hola";
$array_de_chars = str_split($string);
print_r($array_de_chars);
foreach($array_de_chars as $char){
    echo "$char\n";
}
?>