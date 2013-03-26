<?php

$this->widget('bootstrap.widgets.TbGridView', [
    'dataProvider' => $purchasesDataProvider,
    'columns' => [
        'date',
        'name',
        [
            'name' => 'category_id',
            'value' => function($purchase) {
                return $purchase->category->name;
            },
        ],
        'cost',
    ],
]);
