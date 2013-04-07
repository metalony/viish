<?php
// @metalony
class IndexAction extends Action {
    public function index(){

        //home pages,quest from broswer
        if(isLogin()){
        $this->display("index");}
        else{
             $this->display('User:login'); ;
        };   
    }
   
}