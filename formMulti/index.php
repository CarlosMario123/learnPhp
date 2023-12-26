<!DOCTYPE html>
<html>

<head>
    <title>Formulario con Tailwind CSS</title>
    <!-- Enlace al archivo de estilos de Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 p-4">

    <div class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
        <form action="procesar.php" method="post">

            <div class="mb-4">
                <label for="frutas" class="block text-gray-700 font-bold mb-2">Selecciona tus frutas favoritas:</label>
                <!--En el name ponemos la variable en nombre de arreglo-->
                <select name="frutas[]" multiple class="border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <option value="manzana">Manzana</option>
                    <option value="banana">Banana</option>
                    <option value="fresa">Fresa</option>
                    <option value="uva">Uva</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold">Selecciona tus colores favoritos:</label>
                <div class="mt-2">
                    <input type="checkbox" id="rojo" name="colores[]" value="rojo" class="rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <label for="rojo" class="ml-2 text-gray-700">Rojo</label><br>

                    <input type="checkbox" id="azul" name="colores[]" value="azul" class="rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <label for="azul" class="ml-2 text-gray-700">Azul</label><br>

                    <input type="checkbox" id="verde" name="colores[]" value="verde" class="rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <label for="verde" class="ml-2 text-gray-700">Verde</label><br>

                    <input type="checkbox" id="amarillo" name="colores[]" value="amarillo" class="rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <label for="amarillo" class="ml-2 text-gray-700">Amarillo</label>
                </div>
            </div>

            <div class="mt-6">
                <input type="submit" value="Enviar" class="bg-indigo-500 text-white py-2 px-4 rounded-md hover:bg-indigo-600 cursor-pointer">
            </div>

        </form>
    </div>

</body>

</html>
