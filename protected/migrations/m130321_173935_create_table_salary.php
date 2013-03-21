<?php

class m130321_173935_create_table_salary extends CDbMigration
{

    public function safeUp()
    {
        $this->createTable('salary', [
            'id' => 'pk',
            'date' => 'date',
            'value' => 'double',
                ], 'ENGINE=InnoDB DEFAULT CHARSET=utf8');
    }

    public function safeDown()
    {
        $this->truncateTable('salary');
        $this->dropTable('salary');
    }

}