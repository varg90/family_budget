<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>
<h1>Потрачено за 
    <?php echo 'month_will_be_here';
    ?>: 
    <?php
    // echo $this->getSumCostByPurchases($purchases); 
    ?></h1>
<?php
$this->widget('bootstrap.widgets.TbGridView', [
    'dataProvider' => new CArrayDataProvider($daysSummaries, [
        'sort' => array(
            'defaultOrder' => 'date ASC',
        )
            ]),
    'ajaxUpdate' => true,
    'columns' => [
        [
            'name' => 'Дата',
            'value' => function($data) {
                return date_parse($data->date)['day'];
            },
        ],
        [
            'name' => 'Потрачено',
            'value' => function($data) {
                return $data->sum_spend;
            },
        ],
        [
            'name' => 'Просмотр',
            'value' => function($data) {
                $this->widget('bootstrap.widgets.TbButton', [
                    'label' => 'Детали',
                    'type' => TbButton::TYPE_PRIMARY,
                    'url' => $this->createUrl('/site/showDayDetails', [
                        'id' => $data->id
                    ]),
                    'htmlOptions' => [
                        'class' => 'pull-right',
                    ],
                ]);
            },
        ],
        [
            'name' => 'Добавить',
            'value' => function($data) {
                $this->widget('bootstrap.widgets.TbButton', [
                    'label' => 'Новый товар',
                    'type' => TbButton::TYPE_SUCCESS,
                    'url' => $this->createUrl('/site/addPurchase', [
                        'id' => $data->id
                    ]),
                    'htmlOptions' => [
                        'class' => 'pull-right',
                    ],
                ]);
            },
        ],
    ]
]);
?>