<?php

/* @var $form TbActiveForm */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', [
    'type' => TbActiveForm::TYPE_HORIZONTAL,
        ]);
$this->widget('ext.widgets.Daterangepicker.Daterangepicker');
echo $form->textAreaRow($record, 'name');
echo $form->textFieldRow($record, 'cost');
$this->widget('bootstrap.widgets.TbButton', [
    'buttonType' => TbButton::BUTTON_SUBMIT,
    'type' => TbButton::TYPE_PRIMARY,
    'label' => "Сохранить",
]);
$this->endWidget();