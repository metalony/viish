<?php
/*
 * Footer widget
 * @metalony
 */
class FooterWidget extends Widget{    
    public function render($data){
    $content = $this->renderFile('footer',$data);
    return $content;
    } 

}
