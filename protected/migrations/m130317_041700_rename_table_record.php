<?php

class m130317_041700_rename_table_record extends CDbMigration {

    public function safeUp() {
        $this->renameTable('record', 'purchase');
    }

    public function safeDown() {
        $this->renameTable('purchase', 'record');
    }

}