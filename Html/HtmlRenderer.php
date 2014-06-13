<?php
 namespace Html; 

 class HtmlRenderer
{
  public function render(HtmlElement1 $element)
   {
     //Lineas de codigo nuevas.
     $content= $element->getContent();
     if($element instanceof HtmlMultiElement)
      {
        foreach($element->getChildren() as $child) {
         $content .= $this->render($child);
        }
      }

     $html= sprintf(
            '<%s %s>%s</%s>',
            $element->getTag(),
            $this->renderAttributes($element->getAttributes()), 
            //Linea de codigo nueva
            $content,
            //$element->getContent(), codigo anterior
            $element->getTag() 
           );

     return $html;
   }

  protected function renderAttributes(array $attributes)
   {
     $htmlAttributes= '';
     foreach($attributes as $key => $value)
      {
        $htmlAttributes= "\"$key=$value\"";
      }
      return $htmlAttributes;
   }
}



