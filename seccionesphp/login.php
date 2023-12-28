<?php

//verificamos si hay datos
    if ($_POST["nombre"] == ""  && $_POST["pass"] == ""){
        //Crearemos las variable de seccion
        session_name("login");
        session_start();
      
        $_SESSION["name"] = $_POST["nombre"];
        $_SESSION["pasw"] = $_POST["pass"];
        echo "<p>Seccion inicida correctamente</p>";
    }else{
        echo "<p>Hace faltan datos</p>";
    }
?>