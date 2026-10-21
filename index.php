<?php
  echo "<h1>Hola desde PHP</h1>";
  echo "Hoy es " . date("d/m/Y");

  /**
   * escribir un texto que muestre hola me llamo ...tu nombre
   * estamos en el año ...date ("Y")
   */
    echo "<h2>Hola me llamo Jacinto</h2>";
     echo "estamos en el año " . date("Y");
     echo "</br>";

     $nombre = "Atlantida";

     $alumnos = 585; //int
     
     $notaMedia = 8.5; //float

     $abierto = true; //booleanos true o false

     //operaciones arizmeticas + - * / %

     echo  "el nombre del centro es $nombre";
     echo "</br>";
     echo  "el nombre del centro es $nombre";
     echo "</br>";

     /**
      * dormir en el refujio cuesta 18€ por persona y noche 
      *crea las variables $ personas y $noches y calcula $total
      *muestra total 200€
      */

      $personas = (5);
      $Noches = (6);
      $precioNoches = (18);
      $total = $personas * $precioNoches * $Noches;

      echo "el precio total para $personas por $Noches noches es $total €";
      echo "</br>";

?>