<?php
session_start();
//comprobar si me han llegado los datos del formulario y los voy a limpiar
// var_dump($_POST);
//operador de fusion de nulo
//nombre toma el valor que tenga en el array si existe y si no toma el segundo valor ''

// if(isset($_POST['nombre'])){
//     $_nombre = $_POST['nombre'];

// }else{
//     $_nombre = '';
// }
//operador de fusion de nulo
//nombre toma el valor que tenga el array si existe y si no toma el segundo valor ''
$nombre = $_POST['nombre'] ?? '';
$email = $_POST['email'] ?? '';
$edad = $_POST['edad'] ?? 0;
$mensaje = '';

$nombre = htmlspecialchars($nombre);

$_SESSION['nombre'] = $nombre;
$_SESSION['email'] = $email;


//filtar los valores

if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    $mensaje = "hola $nombre, tu correo es $email y tu edad es $edad. te damos la bienvenida";

}else{
    $mensaje = "hola $nombre, tu correo no es valido";
}
 var_dump($_SESSION);

//se puede simplificar quitando el else y cambiando el = mensaje por el de tu correo no es valido
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado</title>
</head>
<body>
    <h1>resultado del formulario</h1>
    <!-- MOSTRAR un saludo tipo hola nombre, tu correo es ``correo`` y tu edad es ``edad`` te damos la bienvenida -->
     <!-- si el correo no es valido mostrar introduce una direccion de correo validad -->
      <p><?= $mensaje ?></p>
    <a href="formulario.html">Volver</a>
</body>
</html>