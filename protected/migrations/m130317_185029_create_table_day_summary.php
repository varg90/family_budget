<?php

class m130317_185029_create_table_day_summary extends CDbMigration {

    public function safeUp() {
        $this->createTable('day_summary', [
            'id' => 'pk',
            'date' => 'date NOT NULL',
            'sum_spend' => 'double NOT NULL',
                ], 'ENGINE=InnoDB DEFAULT CHARSET=utf8');
    }

    public function safeDown() {
        $this->truncateTable('day_summary');
        $this->dropTable('day_summary');
    }

}