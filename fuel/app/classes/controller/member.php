<?php
class Controller_Member extends Controller_Template
{	
	public function before(){
		parent::before();
				
		if(!Auth::check() and Request::active()->action != 'login' and Request::active()->action != 'adduser')
		{
			Response::redirect('member/login');
		}
	}
	
	public function action_index()
	{
		$data['username'] = Auth::get_screen_name();
		$data['level'] = Lib_Utility::get_level($data['username']);
		$data['exp'] = Model_User::get_exp($data['username']);
		$data['solvecount'] = Model_Submit::get_acceptedcount($data['username']);
		$data['contestcount'] = Model_Contestuser::get_contest_registercount($data['username']);
		$this->template->content = View::forge('member/index', $data);
	}
	
	public function action_adduser()
	{
		Auth::check() and Response::redirect('member');
		
		$data = array();
		$auth = Auth::instance();
		
		if(Input::post('username') and Input::post('password') and Input::post('password2'))
		{
			$username = Input::post('username');
			$password = Input::post('password');
			$password2 = Input::post('password2');
			$auth = Auth::instance();
			
			if(mb_strlen($username) < 4){
				$data['error'] = "ユーザ名は4文字以上にして下さい";
			}else if(16 < mb_strlen($username)){
				$data['error'] = "ユーザ名は16文字以下にして下さい";
			}else if(mb_strlen($password) < 8){
				$data['error'] = "パスワードは8文字以上にして下さい";
			}else if(32 < mb_strlen($password)){
				$data['error'] = "ユーザ名は32文字以下にして下さい";
			}else if($password != $password2){
				$data['error'] = "入力したパスワードとパスワード確認文字列が違っています";
			}else if(count(Model_User::find('all',array('where' => array( array('username', $username))))) != 0){
				$data['error'] = "既に同じユーザ名が存在します";
			}else{
				$mail = "notmail".count(Model_User::find('all'))."@notmail.com";
				$auth = Auth::instance();
				if($auth->create_user($username, $password, $mail)){
					$data['success'] = "ユーザの追加に成功しました";
				}else{
					$data['error'] = "ユーザの追加に失敗しました";
				}
			}
		}
		if(!isset($data['success'])){
			$this->template->content = View::forge('member/adduser', $data);
		}else{
			Response::redirect('member/login/adduser');
		}
	}
	
	public function action_login($action = "")
	{
		Auth::check() and Response::redirect('member');
		
		$data = array();
		$auth = Auth::instance();
		
		if(Input::post('username') and Input::post('password'))
		{
			$username = Input::post('username');
			$password = Input::post('password');
			$auth = Auth::instance();
			
			if($auth->login($username, $password))
			{
				Response::redirect('member');
			}
			else
			{
				$data['error'] = true;
			}
		}
		if($action == "adduser"){
			$data['success'] = "ユーザの追加に成功しました";
		}
		
		$this->template->content = View::forge('member/loginform', $data);
	}
	
	public function action_logout()
	{
		$auth = Auth::instance();
		$auth->logout();
		
		Response::redirect('member');
	}
}
