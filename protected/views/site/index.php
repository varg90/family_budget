<?php

/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>
    <?php

    $this->widget('bootstrap.widgets.TbGridView', [
        'dataProvider' => $recordsDataProvider,
        'columns' => [
            [
                'name' => 'Дата',
                'value' => function($data) {
                    return $data->date;
                }
            ],
            [
                'name' => 'Название',
                'value' => function($data) {
                    return $data->name;
                }
            ],
            [
                'name' => 'Стоимость',
                'value' => function($data) {
                    return $data->cost;
                }
            ],
//            [
//                'name' => 'Удалить',
//                'value' => function($data) {
//                    $this->widget('bootstrap.widgets.TbButton', [
//                        'url' => $this->createUrl('/site/deleteRecord', [
//                            'id' => $data->id
//                        ]),
//                        'htmlOptions' => [
//                            'class' => 'icon-remove',
//                        ],
//                    ]);
//                },
//            ],
        ]
    ]);
    ?>