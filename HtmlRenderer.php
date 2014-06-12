<?php
 class HtmlRenderer
{
  public function render(HtmlElement1 $element)
   {
     $html= sprintf(
            '<%s %s>%s</%s>',
            $element->getTag(),
            $this->renderAttributes($element->getAttributes()), 
            $element->getContent(),
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



