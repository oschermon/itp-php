<?php
 
 echo "\n\n*** Calculo de Iva e ISR en Arreglo Bidimensional ***\n\n";
 $per= [['Maria', 'Fernandez', 'Archivista', 2350.23, 0.0, 0.0, 0.0],
        ['Alexa', 'Dominguez', 'Secretaria', 4123.67, 0.0, 0.0, 0.0],
        ['Pedro', 'De Jesus ', 'Oficinista', 3150.99, 0.0, 0.0, 0.0],
        ['Jairo', 'Hernandez', 'Oficinista', 3150.99, 0.0, 0.0, 0.0],
        ['Juana', 'Quinteros', 'Oficinista', 3150.99, 0.0, 0.0, 0.0],

 ];

 //La funcion func_num_args(), regresa el numero de argumentos de la funcion
 

 function nomina_while($personal, $porcentajeIva= .15, $porcentajeIsr= .1)
  {
    echo "\nNombre  Apellido    Puesto    Sueldo      IVA      ISR   Total a Pagar\n";
    $i= 0;
    while($i < 5)
     { $personal[$i][4]= $personal[$i][3]*$porcentajeIva;
       $personal[$i][5]= $personal[$i][3]*$porcentajeIsr;
       $personal[$i][6]= $personal[$i][3]-$personal[$i][4]-$personal[$i][5];
       echo "{$personal[$i][0]}  {$personal[$i][1]}  {$personal[$i][2]}  {$personal[$i][3]}  {$personal[$i][4]}  {$personal[$i][5]}  {$personal[$i][6]}\n";
       $i++;
     }
  }

 nomina_while($per);

//La funcion func_get_arg(numero del argumento solicitado), regresa el nombre del argumento

 function suma()
  {
    $suma= 0;
    foreach(func_get_args() as $number)
     {
       $suma += $number;
     }

    return $suma;
  }

 echo suma(2, 5, 6, 7, 8, 10)."\n";
 echo suma()."\n";
 echo suma('yuyuyu', 98, true)."\n";

//La funcion func_get_arg(numero del argumento solicitado), regresa el nombre del argumento

 function suma1()
  {
    $suma= 0;
    foreach(func_get_args() as $number)
     {
       if(!is_numeric($number)) continue;
       $suma += $number;
     }

    return $suma;
  }

 echo suma1('yuyuyu', 98, true)."\n";

?>