<?php
 
 require 'Autoloading/Autoloader.php';

 use Html\HtmlElement1;
 use Html\HtmlRenderer;
 use Autoloading\Autoloader;
 use Html\HtmlMultiElement;

 $autoloader= new Autoloader();
 $autoloader->register();
 
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

 //Uso de herencia.
 $list= new HtmlMultiElement('ul');
 $list->addChild(new HtmlElement1('li', [], 'PHP'));
 $list->addChild(new HtmlElement1('li', [], 'Java'));
 $list->addChild(new HtmlElement1('li', [], 'C#'));
 $list->addChild(new HtmlElement1('li', [], 'Scala'));
 echo "\n".$renderer->render($list);
?>