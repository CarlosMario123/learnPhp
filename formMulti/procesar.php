<?php

//Recibiremos multiples opciones
// Para SELECT (frutas)

//
if(isset($_POST['frutas'])){
    $frutasSeleccionadas = $_POST['frutas'];
    foreach ($frutasSeleccionadas as $fruta){
        echo "Fruta seleccionada: " . $fruta . "<br>";
    }
}

// Para CHECKBOX (colores)
if(isset($_POST['colores'])){
    $coloresSeleccionados = $_POST['colores'];
    foreach ($coloresSeleccionados as $color){
        echo "Color seleccionado: " . $color . "<br>";
    }
}
?>
