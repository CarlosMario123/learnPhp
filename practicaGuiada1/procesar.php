<?php
   $miArreglo = array();
 //validamos los parametros por el post
 if(!empty($_POST["nombre"]) && !empty($_POST["pass"])){
    //obtenemos los datos
    $name = $_POST["nombre"];
    $contra = $_POST["pass"];
 }else{
    $prueba = $_POST["nombre"];
    array_push($miArreglo,$prueba);
    echo "los datos estan vacio $prueba";
 }
?>