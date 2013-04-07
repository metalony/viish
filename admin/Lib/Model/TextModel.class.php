<?php
/*
 * text message model
 * @metalony
 */
class TextModel extends Model
{
    public function response($data){
                $textTpl = "<xml>
			<ToUserName><![CDATA[%s]]></ToUserName>
			<FromUserName><![CDATA[%s]]></FromUserName>
			<CreateTime>%s</CreateTime>
			<MsgType><![CDATA[%s]]></MsgType>
			<Content><![CDATA[%s]]></Content>
			<FuncFlag>0</FuncFlag>
			</xml>"; 
                $msgType="text";
                $resultStr = sprintf($textTpl, $data['fromUserName'], $data['toUserName'], $data['time'], $msgType, $data['reContent']);
                echo $resultStr;

                }
    }
?>