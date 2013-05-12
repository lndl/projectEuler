<?php

//Ejercicio 4

$l = array();
for ($x=100; $x<=999; $x++) {
  for ($y=100; $y<=999; $y++) {
    if ($x <= $y) { //Evitar multiplicaciones innecesarias (mult. conmutativa)
      $m = $x*$y;
      if ((string)$m == strrev(((string)$m))) //Verificar si el producto es capicua
        $l[] = $m;
    }
  }
}

//se ordena el arreglo de menor a mayor, se obtiene el ultimo elemento (el mas grande)
asort($l);
echo "Respuesta del problema 4: ".end($l)."\n";

?>
