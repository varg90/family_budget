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
        $records = Record::model()->findAll();

//        foreach($records as $record) {
//            $types[] = gettype($record);
//        }
//        throw new Exception(CVarDumper::dumpAsString($types));

        $this->render('index', [
            'recordsDataProvider' => new CArrayDataProvider($records),
        ]);
    }

    public function actionAddRecord() {
        $record = new Record;
        if (!empty($_POST['Record'])) {
            $record->attributes = $_POST['Record'];
            try {
                if (!$record->save()) {
                    throw new Exception(CVarDumper::dump($record->getErrors()));
                };
                Yii::app()->user->setFlash('success', 'Новая запись успешно добавлена!');
                $this->redirect($this->createUrl('site/index'));
            } catch (Exception $e) {
                Yii::app()->user->setFlash('error', 'Произошла ошибка при сохранении' . $e->getMessage());
            }
        }
        $this->render('add_record', [
            'record' => $record,
        ]);
    }

}