<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora de estancia</title>
</head>
<body>
    <h1>calcula cuanto cuesta la estancia</h1>
    <p>el precio por noches es 18 €</p>
    <form action="resultado.php" method="POST">
        <label for="personas ">numero de personas</label>
        <input type="number" name="personas">
        <label for="noches">numero de noches</label>
        <input type="number" name="noches">
        <input type="submit" value="enviar">
    </form>
    
</body>
</html>