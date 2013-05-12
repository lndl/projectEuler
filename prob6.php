<?php

//Ejercicio 6

//Calcula el cuadrado de un numero
function square($x) {return $x*$x;}

/* 

//Calcula la suma de los elementos numericos de un arreglo
function array_reduce_sum($arrayNum) {
  return array_reduce($arrayNum, function($acc, $i) {
    $acc += $i;
    return $acc;  
  }, 0);
}

*/

//Rango de numeros naturales (de 1 a 100)
$nums = range(1,100);

//Calculo de la respuesta del ejercicio
$respuesta = square(array_sum($nums)) - array_sum(array_map("square", $nums));
echo "Respuesta del ejercicio 6: ".$respuesta."\n";

?>
