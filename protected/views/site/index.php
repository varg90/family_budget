<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>
<h1>Общая стоимость: <?php echo $this->getSumCostByPurchases($purchases); ?></h1>
<?php
$this->widget('bootstrap.widgets.TbGridView', [
    'dataProvider' => new CArrayDataProvider($purchases),
    'ajaxUpdate' => true,
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
        [
            'name' => 'Категория',
            'value' => function($data) {
                $categoriesArray = $this->getCategoriesArray();
                $category = $data->category;
                return $categoriesArray["$category"];
            }
        ],
        [
            'name' => 'Удалить',
            'value' => function($data) {
                $this->widget('bootstrap.widgets.TbButton', [
                    'label' => 'Удалить',
                    'type' => TbButton::TYPE_DANGER,
                    'url' => $this->createUrl('/site/deletePurchase', [
                        'id' => $data->id
                    ]),
                    'htmlOptions' => [
                        'onClick' => 'return confirm("Вы уверены?")',
                    ],
                ]);
            },
        ],
    ]
]);
?>