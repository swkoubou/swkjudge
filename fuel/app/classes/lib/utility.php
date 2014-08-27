<?php
class Lib_Utility
{
	/**
	 * ユーザのレベルを取得する関数
	 * 
	 * @param string $username ユーザ名
	 * @return int ユーザのレベル
	 */
	public static function get_level($username){
		$exprate = array(30, 50, 70, 100, 150, 200, 250, 300, 400, 1000);
		$exp = Model_User::get_exp($username);
		$level = 0;
		while($exp >= 0){
			$level++;
			$exp -= $exprate[floor($level/10)];
		}
		
		return $level;
	}
	

}
