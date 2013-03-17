<?php

class m130317_191218_purchase_add_fk extends CDbMigration {

    public function safeUp() {
        $this->addForeignKey('purchase_to_day_summary', 'purchase', 'sum_id', 'day_summary', 'id');
    }

    public function safeDown() {
        $this->dropForeignKey('purchase_to_day_summary', 'purchase');
    }

}