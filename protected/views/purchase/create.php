<div class="form">
    <?php
    /* @var $form TbActiveForm */
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', [
        'type' => TbActiveForm::TYPE_HORIZONTAL,
    ]);
    ?>
    <div class="control-group ">
        <label class="control-label" for="Purchase_date">
            <?php
            echo $form->label($purchase, 'date');
            ?>
        </label>
        <div class="controls">
            <?php
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model' => $purchase,
                'attribute' => 'date',
                'options' => array(
                    'showAnim' => 'fold',
                    'dateFormat' => 'yy-mm-dd',
                ),
                'htmlOptions' => array(
                    'value' => date('Y-m-d'),
                ),
            ));
            ?>
        </div>
    </div>
    <?php
    echo $form->textFieldRow($purchase, 'name');
    echo $form->dropDownListRow($purchase, 'category', CHtml::listData(
                    Category::model()->findAll(), 'id', 'name'
    ));
    echo $form->textFieldRow($purchase, 'cost');
    ?>
    <div class="form-actions">
        <?php
        $this->widget('bootstrap.widgets.TbButton', [
            'buttonType' => TbButton::BUTTON_SUBMIT,
            'type' => TbButton::TYPE_PRIMARY,
            'label' => "Сохранить",
        ]);
        ?>
    </div>
    <?php
    $this->endWidget();
    ?>
</div>