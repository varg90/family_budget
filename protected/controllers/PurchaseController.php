<?php

class PurchaseController extends Controller
{

    public $defaultAction = 'create';

    public function actionCreate()
    {
        $purchase = new Purchase;
        if (!empty($_POST['Purchase'])) {
            $purchase->attributes = $_POST['Purchase'];
            try {
                if (!$purchase->save()) {
                    throw new Exception(CVarDumper::dump($purchase->getErrors()));
                };
                Yii::app()->user->setFlash('success', 'Новая запись успешно добавлена!');
            } catch (Exception $e) {
                Yii::app()->user->setFlash('error', 'Произошла ошибка при сохранении' . $e->getMessage());
            }
            $this->redirect($this->createUrl('day/index'));
        } else {
            $this->render('create', [
                'purchase' => $purchase,
            ]);
        }
    }

    public function actionDelete($id)
    {
        $purchase = Purchase::model()->findByPk($id);
        try {
            if (!$purchase->delete()) {
                throw new Exception(CVarDumper::dump($purchase->getErrors()));
            }
            Yii::app()->user->setFlash('success', 'Новая запись успешно добавлена!');
        } catch (Exception $e) {
            Yii::app()->user->setFlash('error', 'Произошла ошибка при удалении' . $e->getMessage());
        }
        $this->redirect($this->createUrl('site/index'));
    }

}