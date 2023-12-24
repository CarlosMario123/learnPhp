<?php
 //imprimir los datos del uno a 1 al 10
 $numero = 1;
  
 while($numero <= 10){
     echo "$numero \n";
     $numero++;
 }
 //imprimir los primero numero pares
 $numero = 1;

 while($numero <= 15){
    echo ($numero * 2) . "\n";
    $numero++;
 }

 //sumar los numeros del 1 al cien
  $suma = 0;
  $numero = 1;
  while($numero <= 100){
    $numero++;
    $suma = $suma + $numero;
 }

 echo "la suma es: $suma";
?>