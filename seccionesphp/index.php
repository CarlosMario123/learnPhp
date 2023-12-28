<?php
  //crearemos una seccion de php
  session_name("login");
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
    <div class="w-full flex">
       <form action="login.php" class="flex flex-col">
        <label for="">usuario</label>
        <input type="text" name="nombre" id="">
        <label for="">Contraseña</label>
        <input type="text" name="pass" id="">
        <button type="submit" class = "bg-blue-500 text-white">Enviar</button>
       </form>
    </div>
</body>
</html>