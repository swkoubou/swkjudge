<?php

namespace Fuel\Migrations;

class Create_submits
{
	public function up()
	{
		\DBUtil::create_table('submits', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'username' => array('constraint' => 50, 'type' => 'varchar'),
			'problemid' => array('constraint' => 11, 'type' => 'int'),
			'contestid' => array('constraint' => 11, 'type' => 'int'),
			'score' => array('constraint' => 11, 'type' => 'int'),
			'lang' => array('constraint' => 255, 'type' => 'varchar'),
			'time' => array('type' => 'datetime'),
			'result' => array('constraint' => 255, 'type' => 'varchar'),
			'view' => array('type' => 'bool'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('submits');
	}
}