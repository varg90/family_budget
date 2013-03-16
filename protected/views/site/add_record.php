<?php
/* @var $form TbActiveForm */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', [
    'type' => TbActiveForm::TYPE_HORIZONTAL,
        ]);
?>
<div class="row" style="left: 50px">
    <?php
    echo $form->label($record, 'date');
    $this->widget('ext.widgets.EDateRangePicker.EDateRangePicker', [
        'model' => $record,
        'attribute' => 'date',
        'options' => [
            'arrows' => true
        ],
    ]);
    ?>
</div>
<?php
echo $form->textAreaRow($record, 'name');
echo $form->textFieldRow($record, 'cost');
$this->widget('bootstrap.widgets.TbButton', [
    'buttonType' => TbButton::BUTTON_SUBMIT,
    'type' => TbButton::TYPE_PRIMARY,
    'label' => "Сохранить",
]);
$this->endWidget();