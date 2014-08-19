<?php
class Controller_Member extends Controller_Template
{
	public $template = 'member/template';
	
	public function before(){
		parent::before();
				
		if(!Auth::check() and Request::active()->action != 'login')
		{
			Response::redirect('member/login');
		}
	}
	
	public function action_index()
	{
		$this->template->username = Auth::get_screen_name();
		$this->template->content = View::forge('member/index');
	}
	
	public function action_login()
	{
		Auth::check() and Response::redirect('member');
		
		if(Input::post('username') and Input::post('password'))
		{
			$username = Input::post('username');
			$password = Input::post('password');
			$auth = Auth::instance();
			
			if($auth->login($username, $password)){
				Response::redirect('member');
			}
		}
		
		$this->template->content = View::forge('member/loginform');
	}
	
	public function action_logout()
	{
		$auth = Auth::instance();
		$auth->logout();
		
		Response::redirect('member');
	}
}
