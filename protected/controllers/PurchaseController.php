<?php

class PurchaseController extends Controller
{

    public function actionIndex()
    {
        $todaysDate = date('Y-m-d');

        $criteria = new CDbCriteria();
        $criteria->condition = 'date = :date';
        $criteria->params = [
            ':date' => $todaysDate,
        ];
        $criteria->order = 'name DESC';
        $criteria->limit = 5;

        $purchasesDataProvider = Purchase::model()->search($criteria);

        $this->render('index', [
            'purchasesDataProvider' => $purchasesDataProvider,
        ]);
    }

    public function actionCreate()
    {
        $purchase = new Purchase;
        if (!empty($_POST['Purchase'])) {
            $purchase->attributes = $_POST['Purchase'];
            try {
                if (!$purchase->save()) {
                    throw new Exception(CVarDumper::dump($purchase->getErrors()));
                };
                Yii::app()->user->setFlash('success', Yii::t('messages','entity.added'));
                $this->redirect('index');
            } catch (Exception $e) {
                Yii::app()->user->setFlash('error', Yii::t('messages','error.save') . $e->getMessage());
            }
            $this->redirect($this->createUrl('/'));
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
            Yii::app()->user->setFlash('success', Yii::t('messages','entity.deleted'));
        } catch (Exception $e) {
            Yii::app()->user->setFlash('error', Yii::t('messages','error.delete') . $e->getMessage());
        }
        $this->redirect($this->createUrl('site/index'));
    }

}
