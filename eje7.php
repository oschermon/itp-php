<?php

 $info= require 'dat1.php';
// print_r($info); 
 echo "\nNombe  |  Sueldo  |  Departamento |      IVA     |  ISR     | Total";
 foreach($info as $dato => $dat1)		//Uso foreach
  {
    echo "\n$dato";
    $td= 0;
    foreach($dat1 as $emple){
     $civa= $emple[1]*.15;
     $cisr= $emple[1]*.10;
     $total= $emple[1]- $civa - $cisr;
     $td += $td;
     echo "\n{$emple[0]}  |  $emple[1]  |  ";
     echo "$dato       |    $civa    |  $cisr  |  $total";
  }
 }

?>