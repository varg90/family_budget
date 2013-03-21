<?php

class m130321_161501_drop_table_day extends CDbMigration
{

    public function safeUp()
    {
        $this->dropForeignKey('purchase_to_day', 'purchase');
        $this->truncateTable('day');
        $this->dropTable('day');
    }

    public function safeDown()
    {
        $this->createTable('day', [
            'id' => 'pk',
            'date' => 'date NOT NULL',
            'sum_spend' => 'double NOT NULL',
                ], 'ENGINE=InnoDB DEFAULT CHARSET=utf8');
        $this->addForeignKey('purchase_to_day', 'purchase', 'sum_id', 'day', 'id');
    }

}