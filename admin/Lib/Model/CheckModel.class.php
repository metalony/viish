<?php
/*
 * wechat account model
 * @metalony
 */
class CheckModel extends Model
{
     public function valid($vid){
        $echoStr = $_GET["echostr"];
        //valid signature , option
        if($this->checkSignature($vid)){
        $Viish = M("Viish");
        $viishData['id'] = $vid;
        $viishData['ischecked'] = '1';
        $Viish->save($viishData); // 根据条件保存修改的数据
        echo $echoStr;
        exit ();
        }
    }
    /*
     * 验证签名
     */
    private function checkSignature($vid)
	{
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];	
        	$viish = M("Viish");
                $token = $viish->where(array('id'=>$vid))->getField('token');	
		$tmpArr = array($token, $timestamp, $nonce);
		sort($tmpArr);
		$tmpStr = implode( $tmpArr );
		$tmpStr = sha1( $tmpStr );
		
		if( $tmpStr == $signature ){
			return true;
		}else{
			return false;
		}
	}
}
?>