<?php
foreach (Yii::app()->user->getFlashes() as $key => $message) {
    echo '<div class="flash-' . $key . '">' . $message . "</div>\n";
}

$this->widget('bootstrap.widgets.TbGridView', [
    'dataProvider' => $purchasesDataProvider,
    'columns' => [
        'date',
        'name',
        [
            'name' => 'category_id',
            'value' => function ($purchase) {
                return $purchase->category ? $purchase->category->name : '';
            },
        ],
        'cost',
        [
            'name' => Yii::t('view', 'actions'),
            'value' => function ($purchase) {
                $this->widget('bootstrap.widgets.TbButton', [
                    'label' => Yii::t('view', 'actions.view'),
                    'url' => Yii::app()->createUrl('/purchase/view', [
                        'id' => $purchase->id,
                    ]),
                    'size' => TbButton::SIZE_SMALL,
                    'type' => TbButton::TYPE_INFO,
                    'icon' => 'icon-eye-open icon-white',
                    'htmlOptions' => [
                        'width' => 200,
                    ],
                ]);
                echo PHP_EOL;
                $this->widget('bootstrap.widgets.TbButton', [
                    'label' => Yii::t('view', 'actions.delete'),
                    'url' => Yii::app()->createUrl('/purchase/delete', [
                        'id' => $purchase->id,
                    ]),
                    'size' => TbButton::SIZE_SMALL,
                    'type' => TbButton::TYPE_DANGER,
                    'icon' => 'icon-remove-sign icon-white',
                    'htmlOptions' => [
                        'onclick' => 'js:bootbox.confirm("Are you sure?")',
                        'width' => 200,
                    ],
                ]);
            },
        ],
    ],
]);
