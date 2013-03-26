<?php

$this->widget('bootstrap.widgets.TbGridView', [
    'dataProvider' => $purchasesDataProvider,
    'columns' => [
        'date',
        'name',
        [
            'name' => 'category',
            'value' => function($purchase) {
                return $purchase->category_id;
            },
        ],
        'cost',
    ],
]);
