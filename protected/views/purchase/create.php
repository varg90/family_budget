<div class="form center">
    <?php
    /* @var $form TbActiveForm */
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', [
        'type' => TbActiveForm::TYPE_HORIZONTAL,
            ]);
    ?>
    <div class="control-group">
        <?php
        echo $form->label($purchase, 'date', [
            'class' => 'control-label',
        ]);
        ?>
        <div class="controls">
            <?php
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model' => $purchase,
                'attribute' => 'date',
                'options' => [
                    'showAnim' => 'fold',
                    'dateFormat' => 'yy-mm-dd',
                ],
                'htmlOptions' => [
                    'value' => date('Y-m-d'),
                    ],
            ));
            ?>
        </div>
    </div>
    <?= $form->textFieldRow($purchase, 'name'); ?>
    <?=
    $form->dropDownListRow($purchase, 'category_id', CHtml::listData(
                    Category::model()->findAll(), 'id', 'name'
            ));
    ?>
    <?= $form->textFieldRow($purchase, 'cost'); ?>
</div>
<div class="form-actions">
    <?php
    $this->widget('bootstrap.widgets.TbButton', [
        'buttonType' => TbButton::BUTTON_SUBMIT,
        'type' => TbButton::TYPE_PRIMARY,
        'size' => TbButton::SIZE_LARGE,
        'label' => Yii::t('view','labels.save'),
        'htmlOptions' => [
            'style' => 'margin-left: 450px;',
            ],
    ]);
    ?>
</div>
<?php $this->endWidget(); ?>
