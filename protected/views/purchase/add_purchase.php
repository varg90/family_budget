<?php
/* @var $form TbActiveForm */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', [
    'type' => TbActiveForm::TYPE_HORIZONTAL,
        ]);
?>
<div style="padding-left: 180px; ">
    <?php
    echo $form->label($purchase, 'date');
    $this->widget('zii.widgets.jui.CJuiDatePicker', [
        'model' => $purchase,
        'attribute' => 'date',
        'options' => [
            'dateFormat'=>'yy-mm-dd',
        ],
    ]);
    echo '<br><br>';
    ?>
</div>
<?php
echo $form->dropDownListRow($purchase, 'category', $purchase->purchases);
echo $form->textFieldRow($purchase, 'cost');
$this->widget('bootstrap.widgets.TbButton', [
    'buttonType' => TbButton::BUTTON_SUBMIT,
    'type' => TbButton::TYPE_PRIMARY,
    'label' => "Сохранить",
]);
$this->endWidget();