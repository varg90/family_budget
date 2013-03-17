<?php
/* @var $form TbActiveForm */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', [
    'type' => TbActiveForm::TYPE_HORIZONTAL,
        ]);
?>
<div class="row" style="left: 50px">
    <?php
    echo $form->label($purchase, 'date');
    $this->widget('ext.widgets.EDateRangePicker.EDateRangePicker', [
        'model' => $purchase,
        'attribute' => 'date',
        'options' => [
            'arrows' => true
        ],
    ]);
    ?>
</div>
<?php
echo $form->textAreaRow($purchase, 'name');
echo $form->textFieldRow($purchase, 'cost');
$this->widget('bootstrap.widgets.TbButton', [
    'buttonType' => TbButton::BUTTON_SUBMIT,
    'type' => TbButton::TYPE_PRIMARY,
    'label' => "Сохранить",
]);
$this->endWidget();