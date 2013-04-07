<?php
/*
 * Header widget 
 * @metalony
 */
class HeaderWidget extends Widget{    
    public function render($data){
        $content = $this->renderFile('header',$data);
        return $content;
    } 

}

