<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <h1 class = "w-full text-2xl text-center">agregado de alumnos y eliminacion</h1>
       
    <main class = "w-full flex justify-center mt-10 gap-x-4">
      <?php
        require "viewForm.php";
        echo viewForm();//vista de formulario
      ?>
      <section class = "flex flex-col gap-y-4">
      <?php
        require "sectionAlumnos.php";
        require "sectionFind.php";
        require "deleteSeccion.php";
        echo sectionAlumno();
        echo sectionFind();
        echo sectionDeleteStudente();
      ?>
      </section>
    </main>
  
</body>
<script src = "index.js"></script>
</html>