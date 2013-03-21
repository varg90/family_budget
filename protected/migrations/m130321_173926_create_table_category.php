<?php

class m130321_173926_create_table_category extends CDbMigration
{

    public function safeUp()
    {
        $this->createTable('category', [
            'id' => 'pk',
            'name' => 'string NOT NULL',
                ], 'ENGINE=InnoDB DEFAULT CHARSET=utf8');
        $this->addForeignKey('purchase_to_category', 'purchase', 'category_id', 'category', 'id');
    }

    public function safeDown()
    {
        $this->dropForeignKey('purchase_to_category', 'purchase');
        $this->truncateTable('category');
        $this->dropTable('category');
    }

}