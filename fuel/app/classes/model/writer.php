<?php
use Orm\Model;

class Model_Writer extends Model
{
	protected static $_properties = array(
		'id',
		'problemid',
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
		$val->add_field('problemid', 'Problemid', 'required|valid_string[numeric]');
		$val->add_field('username', 'Username', 'required|max_length[50]');

		return $val;
	}

}
