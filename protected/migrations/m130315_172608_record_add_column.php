<?php

class m130315_172608_record_add_column extends CDbMigration
{
	public function safeUp()
	{
            $this->addColumn('record', 'date', 'date NOT NULL');
	}

	public function safeDown()
	{
            $this->dropColumn('record', 'date');
	}
}