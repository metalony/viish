<?php

//定义 session 存储 userId
/**
 * 根据id获取用户信息
 * @param  [type] $userId [description]
 * @return [type]         [description]
 */
function getUserInfo($userId){
	if(!empty($userId)){
		$model = M("User");
		$query['id'] = $userId;
		$list = $model->where($query)->select();
		if(count($list)>0){
			return $list[0];
		}
	}
}

/**
 * 设置session 中 userId
 * @param [type] $userId [description]
 */
function setSessionUserId($userId){
	if (!empty($userId)&&$userId>0) {
		session(SESSION_USER_ID,$userId);
	}
}

/**
 * 获取用户登录后的记录在session中的userId
 * @return [int] 用户未登录 返回0，其他登录返回对应的userI
 */
function getSessionUserId(){
	$userId = session(SESSION_USER_ID);
	if (empty($userId)||$userId<=0) {
		$userId = 0;
	}
	return $userId;
}

/**
 * 判断用户是否登录
 * @return boolean [description]
 */
function isLogin(){
	$userId = getSessionUserId();
	return ($userId>0)?true:false;
}
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