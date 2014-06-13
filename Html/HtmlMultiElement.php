<?php

 namespace Html;

 class HtmlMultiElement extends HtmlElement1
 {
   protected $children;

   public function __contruct($tag, $attributes= [], $content= null)
    {
       parent::__construct($tag, $attributes, $content);
        $this->children= [];
    }

   public function addChild(HtmlElement1 $element)
    {
      $this->children[]= $element;       
    }

   public function getChildren()
    {
      return $this->children;
    }
 }

?>