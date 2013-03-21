<?php

/* @var $form TbActiveForm */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', [
    'type' => TbActiveForm::TYPE_HORIZONTAL,
        ]);
echo $form->textFieldRow($purchase, 'name');
echo $form->textFieldRow($purchase, 'cost');
$this->widget('bootstrap.widgets.TbButton', [
    'buttonType' => TbButton::BUTTON_SUBMIT,
    'type' => TbButton::TYPE_PRIMARY,
    'label' => "Сохранить",
]);
$this->endWidget();