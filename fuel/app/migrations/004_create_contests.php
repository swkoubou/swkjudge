<?php

namespace Fuel\Migrations;

class Create_contests
{
	public function up()
	{
		\DBUtil::create_table('contests', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'name' => array('constraint' => 255, 'type' => 'varchar'),
			'start' => array('type' => 'datetime'),
			'end' => array('type' => 'datetime'),
			'notice' => array('type' => 'text'),
			'type' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('contests');
	}
}