<?php
//Segunda sesion, uso de variables

 $bigVariable= 'PHP';
 $short= &$bigVariable;
 $bigVariable .= ' Rocks!';

 echo "Short is ".$short;
 echo "\nLong is ".$bigVariable;

 function update_counter()
 {
   global $counter;		//global permite el uso de las variables declaradas en el codigo principal.
   $counter++;
 }

 $counter= 10;
 update_counter();
 echo "\nUsando Global: ".$counter;

 function up_counter()
  {
    static $counter= 0;		
    $counter++;
    echo "\nStatic: ".$counter;
  }

  $counter= 10;
  up_counter();
  up_counter();
  echo "\n".$counter;

  function greet($name)
  {
    echo "\nHello, ".$name;
  }

  greet('Oscar');
  
  echo "\nUso de Casting\n";
  $age= 30;
  $age= (string) $age;
  var_dump($age);
  $age= (boolean) $age;
  var_dump($age);
  $age= (float) $age;
  var_dump($age);
  $age= (array) $age;
  var_dump($age);

  //Uso de operadores
  var_dump('10' == 10);
  var_dump('5' . 5);
  var_dump('2'+2);
  var_dump(10 == '10');
  var_dump('10' === 10);

  //Uso de estructuras de control
  $password= 'Letmein';
  if($password === 'letmein')
   {
      echo 'Password is correct';
   }
  else
   {
      echo 'Try again';
   }

  //Uso de condiciones multiples
  $color= 'red';
  switch($color){
   case 'green': echo '\nGreen';
                 break;
   case 'blue' : echo '\nBlue';
                 break;
   default:      echo "\n".$color;
  }

  //Uso de foreach.
  $p= [
    'name' => 'Ajax',
    'price' => 230,
    'available' => true,
   ];

  foreach($p as $field => $value)
   {
     echo "\n".$field.": ".$value;
   }
  
  //Funciones con retorno de valores
  function test()
   {
     $p1= "Foo";
     $p2= "Bar";
     if($p1 === 'Baz')
      { die("Terminate Script"); }
     return $p1." ".$p2;
   }
   
   echo "\n".test();
 //  exit(0);

  //Uso de un fichero en otro archivo
  echo "\n";
  $configuracion= require 'configuracion.php';
  print_r($configuracion); 
?>
