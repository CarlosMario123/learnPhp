<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de nombres</h1>
     <?php
      $names = array("Carlos","pablo","jose","Arturo");

      foreach($names as $name){
         echo "<p>$name</p>"; 
      }
     ?>
</body>
</html>