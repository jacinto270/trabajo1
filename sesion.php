<?php
//$_SESSION es un array glogal que contiene los datos de la sesion
//para poder utilizarlo hay que iniciar sesion
session_start();

$nombre = $_SESSION['nombre'] ?? 'usuario';
$email = $_SESSION['email'] ?? 'usuario@email.com';

//eliminar un elemento del arry  $_SESSION
unset($_SESSION['email']);
var_dump($_SESSION);


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina personal</title>
</head>
<body>
    <h1>bienvenido a tu perfil</h1>
    <p><?= $nombre ?></p>
    <a href="cerrar.php">cerrar sesion</a>
</body>
</html>