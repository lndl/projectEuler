<?php

//Ejercicio 3

//Funcion modulo que trabaja adecuadamente con numeros grandes
function mod($a, $b) {
  return ($a - floor($a/$b)*$b);
}

function factoresPrimos($n) {
  $x = $n;
  $i = 2;
  $lpf;
  while ($x > 1) {
    //si es un factor primo...
    if (mod($x,$i) == 0) {
      //se registra y se descompone el numero por eso factor
      $lpf = $i;
      $x  /= $i;
    }
    else {
      $i++;
    }
  }

  return $lpf;
}

//selecciona el mayor de los numeros primos
echo "Respuesta del problema 3: ".factoresPrimos(600851475143)."\n";

?>
