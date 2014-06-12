<?php

 class HtmlElement
  {
    protected $tag;
    protected $content;
    protected $attributes;

    public function __construct(
     $tag,
     $attributes= [],
     $content= NULL)
     {
        $this->tag= $tag;
        $this->cotent= $content;
        $this->attributes= $attributes;
     }
   
    //Metodo magico call
    public function __call($name, $arguments)
     {
        //var_dump($this); se usa para mostrar los atributos de la clase.
       if('render' === $name)
        {
          $html= sprintf(
            '<%s %s>%s</%s>',
            $this->tag,
            implode('=', $this->attributes), 
            $this->content,
            $this->tag 
           );

          return $html;
        }
     }

   //Otros metodos magico son get y set

    public function __get($property)
     {
        if('tag' === $property)
         {
           return $this->tag;
         }
     }

    public function __set($property, $value)
     {
        if('content' === $property)
         {
           $this->content= $value;
         }
     }

    public function __toString()
     {
       return $this->render();
     }  
  }

   
 $link= new HtmlElement(
  'a',
  ['href' => 'href http://www.google.com.mx'],
  'Google'
 );

 echo $link->render(['class' => 'important-link']);
 echo "\n".$link->tag;
 $link->content= 'Yahoo';
 echo "\n".$link->render();
 //Este eco, es para el uso de toString.
 echo "\n".$link;
?>