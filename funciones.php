<?php
/**
 * una funcion es un bloque de codigo que podemos reutilizar
 * puede recibir unos valores que llamamos parametros
 * puede devolver un valor
 */
function saludar(){
    echo "<h1>hola a todos y todas</h1>";
}

//lama a la funcion
saludar();

//recibe un valor y no devuelve nada 
function saludar2(string $nombre){
    echo "<h1>hola $nombre</h1>";
}
saludar2("alberto");
$alumno = ("pepita");
saludar2($alumno);

//recive un valor y devuelve un valor
function saludar3(string $nombre): string {
    return "<h1>hola $nombre</h1>";
}

echo saludar3("jesus");

function sumar(int $n1, int $n2): int{
  return $n1 + $n2;
}

echo sumar(30, 20);

//crear una funcion que reciba el precio, numero de personas y numero de noches y devuelva el total

function sumar1(int $precio, int $numeroPer, int $numeroNoch): int{
  return $precio * $numeroNoch * $numeroPer ;
}
$texto = "el precio de tu reserva es de: ";
echo "<h1>" . $texto . sumar1(30, 2, 4) . "</h1>";

?>