<?php

 class HtmlElement1
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

    public function getTag()
     {
        return $this->tag;
     }

    public function getContent()
     {
       return $this->content;
     }

    public function getAttributes()
     {
        return $this->attributes;
     }
  }
?>