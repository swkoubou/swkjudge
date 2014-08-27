<?php
use Orm\Model;

class Model_Contestuser extends Model
{
	protected static $_properties = array(
		'id',
		'contestid',
		'username',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('contestid', 'Contestid', 'required|valid_string[numeric]');
		$val->add_field('username', 'Username', 'required|max_length[50]');

		return $val;
	}

	/**
	 * コンテストに参加した回数を取得する関数
	 * 
	 * @param string $username ユーザ名
	 * @return int コンテストに参加した回数
	 */
	public static function get_contest_registercount($username){
		$res = count(Model_Contestuser::find('all',array('where' => array( array('username', $username)))));
		return $res;
	}
}
