<?php

#esto es una lista indexada o un arreglo en otro lengujae que se acceden por indice
$lista = array("Manzana", "Banana", "Naranja", "Pera");

#imprimere bananan
echo "la fruta que imprimire es: $lista[1] \n";

#imprimir con un for normal 
/*
el metodo count nos permite saber el tamaño de una lista
 */
echo "lista de fruta con for \n";
for ($i = 0; $i < count($lista); $i++) {
    echo  "$lista[$i]\n";
}

//ya si queremos imprimir todo podemos hacerlo con un for each
echo "imprimiendo lista con forEach\n";
foreach($lista as $elemento){
    echo "$elemento \n";
}
?>