<?php
//Uso de variables anonimas.

 $mayor= function($a, $b)
  {
    if($a > $b)
     { return $a; }
    else
     { return $b; }
  };

 echo $mayor(12, 7)."\n";
 $numbers= [1, 3, 4, 11, 100, 5];
 usort($numbers, function($a, $b) { 
    return $a - $b;
  });
 print_r($numbers);

 $mayor= 'Hola';
 echo $mayor;
?>