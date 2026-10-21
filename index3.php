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
    <form action="" method="POST">
        <label for="Nombre">nombre</label>
        <input type="text" name="nombre" placeholder="persona que hace la reserva">
        <label for="personas ">numero de personas</label>
        <input type="number" name="personas">
        <label for="noches">numero de noches</label>
        <input type="number" name="noches">
        <input type="submit" value="enviar">
    </form>
    <?php

    //la funcion trim( quita los espacios en blanco al inicio y al final de un string)
    // isset() comprueb que una variable exite y devuelve true o false
    // strlen ()devuelve el numero de caracteres de un string
    //is_numeric() comprueba si un dato es numerico , devuelve true o false

    //  $nombre = "";
    //  $noches = 0;
    //  $personas = 0;
     //compruebo que el nombre a llegado y que tiene una longitud mayor que 1
    // if(isset($_POST["nombre"]) && strlen($_POST["nombre"]) > 1){
    //    $nombre = trim($_POST["nombre"]);
    // }
    //  // voy a comprobar que han llegado los datos numericos
    // if(isset($_POST["noches"]) && is_numeric($_POST["noches"])){
    //     $noches = (int) $_POST["noches"];
    // }
    //   if(isset($_POST["personas"]) && is_numeric($_POST["personas"])){
    //     $personas = (int) $_POST["personas"];
    // }
    /**
     * if()¨{}else{}
     * (condicion) ? "lo que ocurre si la condicion se cumple" : "lo que ocurre si la condicion no se cumple"
     * si exite personas en arrae $_POST y es un dato numerio entonces $_personas = $_POST["personas"] y si no $personas = 0;
     */

    $personas = (isset($_POST["personas"]) && is_numeric($_POST["personas"])) ? (int) $_POST["personas"] : 0;
    $nombre = (isset($_POST["nombre"]) && trim(strlen($_POST["nombre"])) > 1) ? trim($_POST["nombre"]) : "";
    $noches = (isset($_POST["noches"]) && is_numeric($_POST["noches"])) ?  (int) $_POST["noches"] : 0;
   


     $precioPorNoche = 18;
     $total = $precioPorNoche * $noches * $personas;
     if($noches !== 0 && $personas !== 0 && strlen($nombre > 1)){
           echo "<p>hola $nombre</p>";
           echo " <p> el total a pagar por $noches noches $personas personas  es  $total €</p>";
     }else{
        echo "<p>Introduce tu nombre, el numero de noches y de personas para ver el coste total</p>";
     }
        
 
    ?>
</body>
</html>