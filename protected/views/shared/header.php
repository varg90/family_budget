<div id="header">
    <div class="row">
        <div class="span-6" style="margin-left: 50px">
            <h1><?php echo CHtml::encode(Yii::app()->name); ?></h1>
        </div>
        <br>
        <div class="span-45">
            <?php
            $this->widget('bootstrap.widgets.TbButton', [
                'label' => 'Новая затрата',
                'url' => Yii::app()->createUrl('/purchase/create'),
                'size' => TbButton::SIZE_LARGE,
                'type' => TbButton::TYPE_INFO,
                'icon' => 'icon-shopping-cart icon-white',
                'htmlOptions' => [
                    'width' => 200,
                ],
            ]);
            ?>
        </div>
        <div class="span-45">
            <?php
            $this->widget('bootstrap.widgets.TbButton', [
                'label' => 'Статистика',
                'url' => '#',
                'size' => TbButton::SIZE_LARGE,
                'type' => TbButton::TYPE_INFO,
                'icon' => 'icon-th-list icon-white',
            ]);
            ?>
        </div>
        <div class="span-4">
            <?php
            $this->widget('bootstrap.widgets.TbButton', [
                'label' => 'Зарплата',
                'url' => '#',
                'size' => TbButton::SIZE_LARGE,
                'type' => TbButton::TYPE_INFO,
                'icon' => 'icon-plus icon-white',
            ]);
            ?>
        </div>
    </div>
</div><!-- header -->