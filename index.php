<?php
 
 require 'HtmlElement1.php';
 require 'HtmlRenderer.php';

 $link= new HtmlElement1(
  'a',
  ['href'=> 'http://www.google.com.mx'],
  'Google'
 );

 $renderer= new HtmlRenderer();
 echo $renderer->render($link);
 echo $link->tag;
 $link->content= 'Yahoo';
 echo $renderer->render($link);

?>