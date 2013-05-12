<?php

//Ejercicio 4

$maxM = -1;
for ($x=100; $x<=999; $x++) {
  for ($y=100; $y<=999; $y++) {
    if ($x <= $y) { //Evitar multiplicaciones innecesarias (mult. conmutativa)
      $m = $x*$y;
      if ((string)$m == strrev(((string)$m))) //Verificar si el producto es capicua
        if ($m > $maxM) //Se guarda la multiplicacion capicua mas grande
          $maxM = $m;
    }
  }
}

echo "Respuesta del problema 4: ".$maxM."\n";

?>
