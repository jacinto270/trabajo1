<?php
/**
 * bucle for php
 */
for($i = 1 ; $i < 4 ; $i++){
    echo "elemento $i </br>";
}
/**
 * bucle while (mientras)
 */

$plazas = 3;
while($plazas > 0){
echo "quedan $plazas plazas</br>";
$plazas--; //$plazas = plazas -1

}

$picos = ["mulhacen", "veleta", "alcazaba", "caballo"];

/**
 * bucle foreach($array $elementodelarray )
 * 
 */
foreach($picos as $pico){
    echo "$pico </br>";
}

//escribe con un for en una sola linea los numeros del 1 al 10 separados por una linea
for($i = 1 ; $i <= 10 ; $i++){
    echo " $i ";
}
$numeros = 1;
while($numeros <= 10){
echo "$numeros </br>";
$numeros++;

}

//dado que el array refugios muestra cada refugio en una linea utilizando foreach
$refugios = ["poqueira", "postreto alto", "cariguela"];

foreach($refugios as $refugios){
    echo "$refugios </br>";
}

$mochila = ["agua","linterna"];

//añadir un elementoal final del array
$mochila[] = "mapa";
$mochila[] = "bocadillo";

echo $mochila[2];
echo "</br>";
//ver  cuantos elementos hay en un array
echo count($mochila);

//ordenar los elementos del array
sort($mochila);
 echo "</br>";
 print_r($mochila);

//array asociativos

$ruta = ["nombre" => "veleta", "km" => 16];
//añadir un elemento
$ruta["desnivel"] = 800;
 echo "</br>";
 //mostrar un elemento
 echo $ruta["nombre"];
  echo "</br>"; 

//recorer un array asociativo
foreach($ruta as $clave => $valor){
    echo "<p> $clave: $valor </p>";
}

//añade ala mochila un gorro y unos guantes; ordena lafaveticamente y muestra un texto  que diga llevo tantas cosas...

$mochila[] = "gorro";
$mochila[] = "guantes";
sort($mochila);
$items = count($mochila);
echo "llevo $items cosas en la mochila";

// mostrar una lista numerada de cosas que llevo en la mochila

/**
 * <ol>
 *  <li>gorro<li>
 * <li>guantes<li>
 * <li><li>
 * <li><li>
 * <ol>
 */
 echo "<ol>";
foreach($mochila as $valor){
    echo "<li>$valor</li>";
}
echo "</ol>";


?>