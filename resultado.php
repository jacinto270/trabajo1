<?php
//mostrar el contenido del array _GET
    echo var_dump($_POST);

    $precioPorNoche = 18;
    $noches = (int) $_POST["noches"];
    $personas = (int) $_POST["personas"];

    //mostra por pantalla el precio total de la estancia

     $total = $personas * $precioPorNoche * $noches;


    echo "el precio total para $personas personas por $noches noches por $precioPorNoche € por noche precio el total es  $total €";
     
?>