<?php
use Orm\Model;

class Model_Contest extends Model
{
	protected static $_properties = array(
		'id',
		'name',
		'start',
		'end',
		'notice',
		'type',
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
		$val->add_field('name', 'Name', 'required|max_length[255]');
		$val->add_field('start', 'Start', 'required');
		$val->add_field('end', 'End', 'required');
		$val->add_field('notice', 'Notice', 'required');
		$val->add_field('type', 'Type', 'required|valid_string[numeric]');

		return $val;
	}

}
