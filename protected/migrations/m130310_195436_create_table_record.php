<?php

class m130310_195436_create_table_record extends CDbMigration {

    public function safeUp() {
        $this->createTable('record', [
            'id' => 'pk',
            'name' => 'string',
            'cost' => 'double not null',
                ], 'ENGINE=InnoDB DEFAULT CHARSET=utf8');
    }

    public function safeDown() {
        $this->truncateTable('record');
        $this->dropTable('record');
    }

}