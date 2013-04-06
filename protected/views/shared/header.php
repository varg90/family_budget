<div id="header">
    <div class="row">
        <div class="span-6 appname">
            <h1><?php echo Yii::t('app', 'name'); ?></h1>
        </div>
        <br>
        <div class="span-45">
            <?php
            $this->widget('bootstrap.widgets.TbButton', [
                'label' => Yii::t('view', 'labels.createPurchase'),
                'url' => Yii::app()->createUrl('/purchase/create'),
                'size' => TbButton::SIZE_LARGE,
                'type' => TbButton::TYPE_INFO,
                'icon' => 'icon-shopping-cart icon-white',
                'htmlOptions' => [
                    'class' => 'button-width160',
                    ],
            ]);
            ?>
        </div>
        <div class="span-45">
            <?php
            $this->widget('bootstrap.widgets.TbButton', [
                'label' => Yii::t('view', 'labels.statistic'),
                'url' => Yii::app()->createUrl('/statistic/index'),
                'size' => TbButton::SIZE_LARGE,
                'type' => TbButton::TYPE_INFO,
                'icon' => 'icon-th-list icon-white',
                'htmlOptions' => [
                    'class' => 'button-width160',
                    ],
            ]);
            ?>
        </div>
        <div class="span-4">
            <?php
            $this->widget('bootstrap.widgets.TbButton', [
                'label' => Yii::t('view', 'labels.salary'),
                'url' => Yii::app()->createUrl('/salary/create'),
                'size' => TbButton::SIZE_LARGE,
                'type' => TbButton::TYPE_INFO,
                'icon' => 'icon-plus icon-white',
                'htmlOptions' => [
                    'class' => 'button-width160',
                    ],
            ]);
            ?>
        </div>
    </div>
</div><!-- header -->