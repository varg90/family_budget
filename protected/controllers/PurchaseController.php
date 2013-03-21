<?php

class PurchaseController extends Controller
{

    /**
     * Declares class-based actions.
     */
    public function actions()
    {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    public function actionIndex()
    {
        $days = Day::model()->findAll();
        $this->render('index', [
            'daysSummaries' => $days,
        ]);
    }

    public function actionAddPurchase()
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
            $this->redirect($this->createUrl('site/index'));
        } else {
            $this->render('add_record', [
                'purchase' => $purchase,
            ]);
        }
    }

    public function actionDeletePurchase($id)
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