<?php

$this->widget('bootstrap.widgets.TbGridView', [
    'dataProvider' => $purchasesDataProvider,
    'columns' => [
        'date',
        'name',
        'cost',
    ],
]);
