<div class="form" style="margin-left: 300px; margin-right: 300px">
    <?php
    /* @var $form TbActiveForm */
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', [
        'type' => TbActiveForm::TYPE_HORIZONTAL,
    ]);
    ?>
    <div class="control-group ">
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
        <?php
        echo $form->textFieldRow($purchase, 'name');
        echo $form->dropDownListRow($purchase, 'category', CHtml::listData(
                        Category::model()->findAll(), 'id', 'name'
        ));
        echo $form->textFieldRow($purchase, 'cost');
        ?>
    </div>
</div>
<div class="form-actions">
    <?php
    $this->widget('bootstrap.widgets.TbButton', [
        'buttonType' => TbButton::BUTTON_SUBMIT,
        'type' => TbButton::TYPE_PRIMARY,
        'size' => TbButton::SIZE_LARGE,
        'label' => "Сохранить",
        'htmlOptions' => [
            'style' => 'margin-left: 450px;',
        ],
    ]);
    ?>
</div>
<?php $this->endWidget(); ?>