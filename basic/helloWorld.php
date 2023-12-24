<?php //aca iniciara codigo php

echo "hola mundo\n";//echo es para imprimir recordar terminar con punto y coma
//aca terminara

$varible1  = 1;
$variable2 = 2;

echo "El resultado de la suma es: \n";#para salto de linea usamos #/n
echo $variable2 + $varible1;

echo "usaremos string ahora\n";

$string = "Esto es una cadena de text";

echo $string;

/*
usaremos la funccion gettype para saber que tipo de dato es 

ejemplos
*/

/* algo raro de pho es que contatenamo con . en vez de +
jajajn que crazy */
echo "\nla variable \$variable2 es: " . gettype($variable2) . "\n"; 
echo "la variable \$string es: " . gettype($string); 
?>