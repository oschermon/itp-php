<?php
 
 function __autoload($className)
  {
    require str_replace('\\', '/', $className).'.php';
  }

//Con la funcion anterior, ya no requiere los require.

// require 'Html/HtmlElement1.php';
// require 'Html/HtmlRenderer.php';

 use Html\HtmlElement1;
 use Html\HtmlRenderer;

 $link= new HtmlElement1(
  'a',
  ['href'=> 'http://www.google.com.mx'],
  'Google'
 );

 $renderer= new HtmlRenderer();
 echo "\n".$renderer->render($link);
 echo "\n".$link->tag;
 $link->content= 'Yahoo';
 echo "\n".$renderer->render($link);

?>