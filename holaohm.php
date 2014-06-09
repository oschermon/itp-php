<?php
/**
 *Realizado en el Curso Intersemestral de PHP
*/
 $men= "Hola Mundo";       //Definicion de varible.
 echo $men."\n";                //Impresión del contenido de la variable.

 define('VALOR', 35);      //Define una constante.
 echo VALOR."\n";               //Imprime el valor de la constante.

 $pi= 0.0314E2;            //Define una variable con un valor en notación cientifica.
 echo $pi;                 //Imprime el valor flotante.

 $people= ['Luis', 'Misraim', 'Noé', 1234, false, [2]];		//Esta forma de declarar, solo es de 5.4
 print_r($people);

 $old= array(2, 3, 4);     //Esto es en versiones menores a 5.4
 print_r($old);

 $product= [
   'name' => 'Ajax',
   'price' => 230,
   'available' => true,
 ];
 print_r($product);
 echo "\nEste es el precio del producto: {$product['price']}\n";
 echo "\nEste es el precio del producto: ".$product['price']."\n";

 $foo= 'bar';
 $$foo= 'baz';
 echo "\n$foo";
 echo "\n$bar";             //Así se declara una variable variable.
?>