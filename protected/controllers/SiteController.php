<?php

class SiteController extends Controller {

    /**
     * Declares class-based actions.
     */
    public function actions() {
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

    public function actionIndex() {
        $purchases = Purchase::model()->findAll();
        $this->render('index', [
            'recordsDataProvider' => new CArrayDataProvider($purchases),
        ]);
    }

    public function actionAddRecord() {
        $purchase = new Purchase;
        if (!empty($_POST['Record'])) {
            $purchase->attributes = $_POST['Record'];
            try {
                if (!$purchase->save()) {
                    throw new Exception(CVarDumper::dump($purchase->getErrors()));
                };
                Yii::app()->user->setFlash('success', 'Новая запись успешно добавлена!');
                $this->redirect($this->createUrl('site/index'));
            } catch (Exception $e) {
                Yii::app()->user->setFlash('error', 'Произошла ошибка при сохранении' . $e->getMessage());
            }
        }
        $this->render('add_record', [
            'purchase' => $purchase,
        ]);
    }

}