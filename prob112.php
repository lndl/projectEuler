<?php

//Ejercicio 112

//¿Generalizar?
function esCreciente($n) {
  $cifraComp = 10;
  while ((int)$n > 0) {
    $ultCifra = $n % 10;
    if ($ultCifra <= $cifraComp) {
      $cifraComp = $ultCifra;
      $n /= 10;
    }
    else return false;
  }
  
  return true;
}

//¿Generalizar?
function esDecreciente($n) {
  $cifraComp = -1;
  while ((int)$n > 0) {
    $ultCifra = $n % 10;
    if ($ultCifra >= $cifraComp) {
      $cifraComp = $ultCifra;
      $n /= 10;
    }
    else return false;
  }
  
  return true;
}

$proporcion = 0;
$i = 10-1;
$nBouncy = 0;
while ($proporcion < 99) {
  $i++;
  if (!esCreciente($i) && !esDecreciente($i))
    $nBouncy++;
  $proporcion = (int)(($nBouncy / $i) * 100);
  
}

echo $i." es el primer numero donde la proporcion de elementos \"bouncy\" es ".$proporcion."\n";