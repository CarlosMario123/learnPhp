<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <!--action a que archivo lo deseamos mandar-->  
<form class="flex flex-col w-72 items-center bg-gray-200 h-64 justify-center" action="./post&&get/asignatura.php" method="POST">
  <label for="">Nombre</label>
  <input type="text" name = "nombre" placeholder="Ingrese su nombre">
 <label for="asignatura" class="text-2xl mb-3 font-bold">Asignatura</label>
  <select name="asignatura" id="asignatura">
    <option value="Matematicas">Matematicas</option>
    <option value="Ingles">Ingles</option>
    <option value="Español">Español</option>
  </select>
    <button type="submit" class="bg-sky-600 text-white w-36 mt-6 ">Enviar</button>
</form>
</body>
</html>