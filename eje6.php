<?php
//Uso de funciones anominas, usando use

$numbers= [1, 3, 4, 11, 100, 5];
//$ordering= 'ascendent';
$ordering= 'descendent';
usort($numbers, function($a, $b) use ($ordering) {
 if('ascendent' === $ordering) {
  return $a - $b;
 }
 return $b - $a;
});

print_r($numbers);

?>