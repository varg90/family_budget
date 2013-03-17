<?php

class m130317_042039_alter_table_purchase extends CDbMigration {

    public function safeUp() {
        $this->addColumn('purchase', 'category', 'string');
    }

    public function safeDown() {
        $this->dropColumn('purchase', 'category');
    }

}