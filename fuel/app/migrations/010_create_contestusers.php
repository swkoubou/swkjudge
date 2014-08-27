<?php

namespace Fuel\Migrations;

class Create_contestusers
{
	public function up()
	{
		\DBUtil::create_table('contestusers', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'contestid' => array('constraint' => 11, 'type' => 'int'),
			'username' => array('constraint' => 50, 'type' => 'varchar'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('contestusers');
	}
}