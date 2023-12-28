
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php
    require "regresar.php";

    echo buttonLink("index.php","regresar al inicio");
    ?>
    <h1 class = "text-2xl font-bold mb-4 w-full text-center">Lista de alumno</h1>
     
    <div class="flex w-full flex-wrap gap-x-4 justify-center">
    <?php
    require "CardAlumno.php";
    session_start();
    // Verificamos si se han añadido alumnos al arreglo

    if (!empty($_SESSION['alumnos'])) {
        // Mostramos la información de cada alumno
        foreach ($_SESSION['alumnos'] as $alumno) {
            echo CardAlumno($alumno["nombre"],$alumno["matricula"]);
        }
    } else {
        echo "No hay alumnos registrados.";
    }
    ?>
    </div>

</body>

</html>