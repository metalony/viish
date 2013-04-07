<?php

/**
 * 
 */
class UserAction extends Action{

	/**
	 * 用户注册请求
	 * @return [type] [description]
	 */
	public function register(){
		$this->display();
	}

	public function login(){

		$this->display();
	}

	/**
	 * 增加用户
	 */
	public function add(){
		$user = M('User');
		$user->create();
                $user->email=$_POST['email'];
		$user->name = $this->generateNickNameWithEmail($user->email);
		$user->password = md5($_POST['password']);
		$userId = $user->add();
		$this->show("注册成功".$user);
	}


	/**
	 * 登录处理
	 * @return [type] [description]
	 */
	public function handleLogin(){
		$email = $_POST['email'];
		$password = $_POST['password'];

		$model = M("User");
		$queryArray["email"] = $email;
		
		$list = $model->where($queryArray)->select();

		if(count($list)==1){
			$user = $list[0];

			if (md5($password) ==  $user["password"]) {
				setSessionUserId($user['id']);//设置session
                                
                                $viish=M('Viish');
                                $queryArray["user_id"] = $user["id"];
                                $viishData=$viish->where($queryArray)->order('sortkey')->select();
                                
                                $this->assign('viishData',$viishData);
				$this->display("home");
			}else{
				$this->display("login");
			}
		}else{
			$this->display("login");
		}
	}

	/**
	 * 获取用户信息
	 * @return [type] [description]
	 */
	public function home(){
		// $this->display();
		$userId = getSessionUserId();
		if ($userId>0) {
			$user = getUserInfo($userId);
			$this->assign('user',$user);
			$this->display();
		}else{
			$this->display("login");
		}
	}

	/**
	 * 根据email生成nickname
	 * @param  [type] $email [description]
	 * @return [type]        [description]
	 */
	private function generateNickNameWithEmail($email){
		$result = '';
		if (!empty($email)) {	
			$index = strpos($email, "@");
			if ($index>0) {
				$result = substr($email,0, $index);
			}
		}
		return $result;
	}
        /*
         * 安全退出
         * @author 杨元龙
         */

        public function logout(){
            unset($_SESSION['SESSION_USER_ID']);
            $this->redirect('Index-index');
        }

}

?>