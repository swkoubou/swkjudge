<?php

namespace Fuel\Migrations;

class Create_problems
{
	public function up()
	{
		\DBUtil::create_table('problems', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'name' => array('constraint' => 255, 'type' => 'varchar'),
			'subname' => array('constraint' => 255, 'type' => 'varchar'),
			'statement' => array('type' => 'text'),
			'constrains' => array('type' => 'text'),
			'inputtext' => array('type' => 'text'),
			'input' => array('type' => 'text'),
			'output' => array('type' => 'text'),
			'examples' => array('type' => 'text'),
			'view' => array('type' => 'bool'),
			'genre' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('problems');
	}
}