<?php
use Orm\Model;

class Model_Problem extends Model
{
	protected static $_properties = array(
		'id',
		'name',
		'subname',
		'statement',
		'constrains',
		'inputtext',
		'input',
		'output',
		'examples',
		'view',
		'genre',
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
		$val->add_field('subname', 'Subname', 'required|max_length[255]');
		$val->add_field('statement', 'Statement', 'required');
		$val->add_field('constrains', 'Constrains', 'required');
		$val->add_field('inputtext', 'Inputtext', 'required');
		$val->add_field('input', 'Input', 'required');
		$val->add_field('output', 'Output', 'required');
		$val->add_field('examples', 'Examples', 'required');
		$val->add_field('view', 'View', 'required');
		$val->add_field('genre', 'Genre', 'required|valid_string[numeric]');

		return $val;
	}

}
