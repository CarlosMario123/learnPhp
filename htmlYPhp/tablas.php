<!DOCTYPE html>
<html>
<head>
    <title>Tabla de Multiplicar</title>
</head>
<body>
    <h1>Tabla de Multiplicar</h1>
    
    <!-- Formulario para ingresar un número -->
    <form method="post">
        <label for="numero">Ingrese un número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Mostrar tabla</button>
    </form>

    <hr>

    <?php
    // Verificar si se ha enviado el formulario y se ha ingresado un número
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];

        // Mostrar la tabla de multiplicar si se ingresó un número válido
        if (is_numeric($numero)) {
            echo "<h2>Tabla de Multiplicar del $numero:</h2>";
            echo "<ul>";
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo "<li>$numero x $i = $resultado</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Por favor, ingrese un número válido.</p>";
        }
    }
    ?>
</body>
</html>
