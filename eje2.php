<?php
 
 echo "\n\n*** Calculo de Iva e ISR en Arreglo Bidimensional ***\n\n";
 $per= [['Maria', 'Fernandez', 'Archivista', 2350.23, 0.0, 0.0, 0.0],
        ['Alexa', 'Dominguez', 'Secretaria', 4123.67, 0.0, 0.0, 0.0],
        ['Pedro', 'De Jesus ', 'Oficinista', 3150.99, 0.0, 0.0, 0.0],
        ['Jairo', 'Hernandez', 'Oficinista', 3150.99, 0.0, 0.0, 0.0],
        ['Juana', 'Quinteros', 'Oficinista', 3150.99, 0.0, 0.0, 0.0],

 ];

 echo "\nNombre  Apellido    Puesto    Sueldo      IVA      ISR   Total a Pagar\n";
 for($i= 0; $i < 5; $i++)
  {
    $per[$i][4]= $per[$i][3]*0.15;
    $per[$i][5]= $per[$i][3]*0.10;
    $per[$i][6]= $per[$i][3]-$per[$i][4]-$per[$i][5];
    echo "{$per[$i][0]}  {$per[$i][1]}  {$per[$i][2]}  {$per[$i][3]}  {$per[$i][4]}  {$per[$i][5]}  {$per[$i][6]}\n";
  }



?>