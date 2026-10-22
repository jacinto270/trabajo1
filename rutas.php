<?php
$titulo = "rutas de otoño";
// $rutas = ["veleta", "mulhacen", "caldera"];
$rutas = [
    ['nombre' => 'veleta','desnivel' => 1000, 'km' => 16],
    ['nombre' => 'mulhacen','desnivel' => 700, 'km' => 20],
    ['nombre' => 'caldera','desnivel' => 850, 'km' => 7],
    ['nombre' => 'trevenque','desnivel' => 970, 'km' => 4],
    ['nombre' => 'caballo','desnivel' => 100, 'km' => 18],
]
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="css/rutas.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ?></title>
</head>
<body>
    <h1><?= $titulo ?></h1>
    <!--mostrar las rutas en una tabla, las cabeceras de la tabla son las claves del array --> 
    <table border="1">
        <tr>
            <td>nombre</td>
            <td>distancia</td>
            <td>desnivel</td>

        </tr>
        <?php foreach($rutas as $ruta): ?>
        <tr>
            <td class ="nombres"><?= $ruta['nombre']?></td>
             <td class ="km"><?= $ruta['km']?> km</td>
             <td class = "m"><?= $ruta['desnivel']?>m</td>
        </tr>
        
        <?php endforeach; ?>
           
    </table>

   
</body>
</html>