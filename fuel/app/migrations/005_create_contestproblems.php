<?php

namespace Fuel\Migrations;

class Create_contestproblems
{
	public function up()
	{
		\DBUtil::create_table('contestproblems', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'contestid' => array('constraint' => 11, 'type' => 'int'),
			'rate' => array('constraint' => 11, 'type' => 'int'),
			'problemid' => array('constraint' => 11, 'type' => 'int'),
			'score' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('contestproblems');
	}
}