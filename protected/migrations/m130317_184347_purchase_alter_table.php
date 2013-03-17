<?php

class m130317_184347_purchase_alter_table extends CDbMigration {

    public function safeUp() {
        $this->addColumn('purchase', 'sum_id', 'integer');
        $this->dropColumn('purchase', 'category');
        $this->dropColumn('purchase', 'date');
    }

    public function safeDown() {
        $this->addColumn('purchase', 'category', 'string');
        $this->addColumn('purchase', 'date', 'date');
        $this->dropColumn('purchase', 'sum_id');
    }

}