<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio excursion</title>
</head>
<body>
    <h1>ejercicio excursion</h1>
    <p>excursion alpujarra</p>
    <form action="" method="POST">
        <label for="Nombre">nombre</label>
        <input type="text" name="nombre" placeholder="escribe tu nombre">
        <label for="edad ">edad</label>
        <input type="number" name="edad">
        <input type="submit" value="enviar">
    </form>
   <?php
    $precio1 = 0;
    $precio2 = 9;
    $precio3 = 18;
    $nombre = (isset($_POST["nombre"]) && trim(strlen($_POST["nombre"])) > 1) ? trim($_POST["nombre"]) : "";
    $edad = (isset($_POST["edad"]) && is_numeric($_POST["edad"])) ?  (int) $_POST["edad"] : 0;

    if($edad <= 14){
        echo "<p>como tienes esta edad $edad tienes que pagar  $precio1</p>";
    }elseif($edad >= 14 && $edad <=17){
          echo "<p>como tienes esta edad $edad tienes que pagar  $precio2</p>";

    }else{
      echo "<p>como tienes esta edad $edad tienes que pagar  $precio3</p>";
    } 
   
    ?>
    </body>
</html>