<div class="row center">
    <div class="span-4">
        <?php
        $this->widget('bootstrap.widgets.TbButton', [
            'size' => TbButton::SIZE_LARGE,
            'url' => Yii::app()->createUrl(''),
            'label' => Yii::t('view', 'labels.forDay'),
            'htmlOptions' => [
                'class' => 'button-width100',
                ],
        ]);
        ?>
    </div>
    <div class="span-4">
        <?php
        $this->widget('bootstrap.widgets.TbButton', [
            'size' => TbButton::SIZE_LARGE,
            'url' => Yii::app()->createUrl(''),
            'label' => Yii::t('view', 'labels.forWeek'),
            'htmlOptions' => [
                'class' => 'button-width100',
                ],
        ]);
        ?>
    </div>
    <div class="span-4">
        <?php
        $this->widget('bootstrap.widgets.TbButton', [
            'size' => TbButton::SIZE_LARGE,
            'url' => Yii::app()->createUrl(''),
            'label' => Yii::t('view', 'labels.forMonth'),
            'htmlOptions' => [
                'class' => 'button-width100',
                ],
        ]);
        ?>
    </div>
    <div class="span-4">
        <?php
        $this->widget('bootstrap.widgets.TbButton', [
            'type' => TbButton::TYPE_SUCCESS,
            'size' => TbButton::SIZE_LARGE,
            'url' => Yii::app()->createUrl(''),
            'label' => Yii::t('view', 'labels.salary'),
            'htmlOptions' => [
                'class' => 'button-width100',
                ],
        ]);
        ?>
    </div>
</div>