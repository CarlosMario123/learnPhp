<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar Archivos</title>
    <!-- Enlace al archivo de estilos de Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-4">
  <!--Aprendeermos enviar archivos en php-->
    <div class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
        <h1 class="text-2xl font-bold mb-4">Subir archivos con PHP</h1>
        <!--para enviar archivos solo se puede usar post-->
        <form action="carga.php" class="space-y-4" method="post" enctype="multipart/form-data">
            <div>
                <label for="fichero" class="block text-gray-700">Selecciona un archivo:</label>
                <input type="file" name="fichero" id="fichero" class="border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>
            <div>
                <button type="submit" class="bg-indigo-500 text-white py-2 px-4 rounded-md hover:bg-indigo-600">Enviar</button>
            </div>
        </form>
    </div>

</body>
</html>
