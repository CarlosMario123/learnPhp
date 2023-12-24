<?php

#esta es una lista asociativa o como seria en otros lenguajes un diccionario
$lista_asociativa = array(
    "nombre" => "Juan",
    "edad" => 30,
    "ciudad" => "Barcelona"
);

#los dicionario o lista se acceden por clave que nos arrejalar valor

echo "mi nombre es: $lista_asociativa[nombre]";


#veremos como imprimir solo los valores de una lista asosiativa
echo "imprimiendo solo valores \n";
foreach($lista_asociativa as $valor){
    echo "$valor\n";
}

#imprimir con claves valores
foreach ($lista_asociativa as $clave => $valor) {
    echo "Clave: " . $clave . ", Valor: " . $valor;
}

?>