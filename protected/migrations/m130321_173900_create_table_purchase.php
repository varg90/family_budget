<?php

class m130321_173900_create_table_purchase extends CDbMigration
{
    public function safeUp()
    {
        $this->createTable('purchase', [
            'id' => 'pk',
            'date' => 'date',
            'name' => 'string NOT NULL',
            'category_id' => 'integer',
            'cost' => 'double',
                ], 'ENGINE=InnoDB DEFAULT CHARSET=utf8');
    }

    public function safeDown()
    {
        $this->truncateTable('record');
        $this->dropTable('record');
    }
}