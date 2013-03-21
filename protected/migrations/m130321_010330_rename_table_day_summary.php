<?php

class m130321_010330_rename_table_day_summary extends CDbMigration
{

    public function safeUp()
    {
        $this->renameTable('day_summary', 'day');
    }

    public function safeDown()
    {
        $this->renameTable('day', 'day_summary');
    }

}