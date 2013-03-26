<div class="row">
    <div class="span-4">
        <?php
        $this->widget('bootstrap.widgets.TbButton', [
            'size' => TbButton::SIZE_LARGE,
            'url' => Yii::app()->createUrl(''),
            'label' => Yii::t('view', 'labels.forDay'),
            'htmlOptions' => [
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
                ],
        ]);
        ?>
    </div>
</div>