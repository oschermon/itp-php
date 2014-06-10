<?php
 
 echo "\n\n*** Calculo de Iva e ISR ***\n\n";
 $per= [
   'nombre' => 'Maria',
   'apellido' => 'Fernandez',
   'puesto' => 'Archivista',
   'sueldo' => 2350.23
 ];

 print_r($per);

 $ci= $per['sueldo']*0.15;
 $cr= $per['sueldo']*0.10;

 echo "\n I.V.A. : $".$ci;
 echo "\n I.S.R. : $".$cr;
 $per['sueldo']= $per['sueldo']-$ci-$cr;
 echo "\n Total a Pagar : $".$per['sueldo'];
?>