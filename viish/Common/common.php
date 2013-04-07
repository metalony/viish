<?php

//some bse functions to be used 
class FuncToUse{
    //timestamp to time    
    function timeToNormal(){
        $time=date('Y-m-d H:i:s',time());
        $month=substr($time,5,2);
        $day=substr($time,8,2);
        $hour=substr($time,11,2);
        $minute=substr($time,14,2);
        $time=$month."月".$day."日".$hour."时".$minute."分";
        return $time;
    }
}
?>