<?php

class m130321_012229_alter_table_purchase extends CDbMigration
{

    public function safeUp()
    {
        $this->dropForeignKey('purchase_to_day_summary', 'purchase');
        $this->renameColumn('purchase', 'sum_id', 'day_id');
        $this->addForeignKey('purchase_to_day', 'purchase', 'day_id', 'day', 'id');
    }

    public function safeDown()
    {
        $this->dropForeignKey('purchase_to_day', 'purchase');
        $this->renameColumn('purchase', 'day_id', 'sum_id');
        $this->addForeignKey('purchase_to_day_summary', 'purchase', 'sum_id', 'day', 'id');
    }

}