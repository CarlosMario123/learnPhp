<!-- archivo.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Pagina con php</title>
</head>
<body>
<h1>Números del 1 al 10:</h1>
    <ul>
        <?php
            // Utilizamos un bucle for para imprimir los números del 1 al 10
            for ($i = 1; $i <= 10; $i++) {
                echo "<li>$i</li>";
            }
        ?>
    </ul>
</body>
</html>
