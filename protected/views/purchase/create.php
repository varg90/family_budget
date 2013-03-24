<div class="form">
    <?php
    /* @var $form TbActiveForm */
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', [
        'type' => TbActiveForm::TYPE_HORIZONTAL,
            ]);
    ?>
    <div class="row">
        <?php
        echo $form->label($purchase, 'date', [
            'style' => 'margin-left: 130px;'
        ]);
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model' => $purchase,
            'attribute' => 'date',
            'options' => array(
                'showAnim' => 'fold',
                'dateFormat' => 'yy-mm-dd',
            ),
            'htmlOptions' => array(
                'style' => 'margin-bottom:20px; margin-left: 180px;'
            ),
        ));
        ?>
    </div>
    <?php
    echo $form->textFieldRow($purchase, 'name');
    echo $form->dropDownListRow($purchase, 'category', $purchase->category);
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