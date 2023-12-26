<?php
    echo "Nombre del archivo: " . $_FILES['fichero']['name'] . "<br>";
    echo "Tipo MIME: " . $_FILES['fichero']['type'] . "<br>";
    echo "Nombre temporal: " . $_FILES['fichero']['tmp_name'] . "<br>";
    echo "Código de error: " . $_FILES['fichero']['error'] . "<br>";
    echo "Tamaño del archivo: " . $_FILES['fichero']['size'] . " bytes <br>";

    //codigo de carga de archivos al servidor

    //si la carpeta archivos no existe
    if(!file_exists("archivos")){
          //crearemos la carpeta con todoos los permisos
        if(!mkdir("archivos",777)){
        echo "erro al crear el directorio";
        exit();//detiene el script
        }
    }

    chmod("archivos",0777);//Asignaremos los permisos a esa carpeta


    //moveremos el archivos ala carpeta archivos

     /*
     move_uploaded_file("archivo a mover","directorio de destino junto con el nombre del archivo")
     */
    $nameFile = $_FILES["fichero"]["name"];
    if(move_uploaded_file($_FILES["fichero"]["tmp_name"],"archivos/$nameFile")){
        echo "archivo subido con exito";
    }else{
        echo "error al subir al archivo";
    }
?>
