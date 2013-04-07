<?php
/*
 * Header widget 
 * @metalony
 */
class HeaderWidget extends Widget{    
    public function render($data){
        if($_SESSION['SESSION_USER_ID']){
            $data['user'] = getUserInfo($_SESSION['SESSION_USER_ID']);
        }
        $content = $this->renderFile('header',$data);
        return $content;
    } 

}

