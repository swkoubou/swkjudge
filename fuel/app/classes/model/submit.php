<?php
use Orm\Model;

class Model_Submit extends Model
{
	protected static $_properties = array(
		'id',
		'username',
		'problemid',
		'contestid',
		'score',
		'lang',
		'time',
		'result',
		'view',
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
		$val->add_field('username', 'Username', 'required|max_length[50]');
		$val->add_field('problemid', 'Problemid', 'required|valid_string[numeric]');
		$val->add_field('contestid', 'Contestid', 'required|valid_string[numeric]');
		$val->add_field('score', 'Score', 'required|valid_string[numeric]');
		$val->add_field('lang', 'Lang', 'required|max_length[255]');
		$val->add_field('time', 'Time', 'required');
		$val->add_field('result', 'Result', 'required|max_length[255]');
		$val->add_field('view', 'View', 'required');

		return $val;
	}

	/**
	 * ユーザが問題を正解した数を返す関数
	 * 
	 * @param string $username ユーザ名
	 * @return int 問題正解数
	 */
	public static function get_acceptedcount($username){
		$res = count(Model_Submit::find('all', array(
		    'where' => array(
			array('username' => $username),
			array('result' => "accepted")
		    )
		)));
		
		return $res;
	}
}
