<?php

 $info= require 'dat1.php';
// print_r($info); 
 echo "\nNombe  |  Sueldo  |  Departamento |      IVA     |  ISR     |  Total";
 foreach($info as $dato => $dat1)		//Uso foreach
  {
    echo "\n****  $dato  ****";
    $td= 0;
    array_walk($dat1, function($emple)
     use($dato, &$td) {   //En td, debe ser &$, ya que de lo contario siempre td es cero.
     $civa= $emple[1]*.15;
     $cisr= $emple[1]*.10;
     $total= $emple[1]- $civa - $cisr;
     $td += $total;
     echo "\n{$emple[0]}  |  $emple[1]  |  ";
     echo "$dato       |    $civa    |  $cisr  |  $total";
  });
 echo "\n".$td;
 }

?>